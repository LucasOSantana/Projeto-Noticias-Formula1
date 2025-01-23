<?php

namespace App\Http\Controllers\Dashboard;

use App\Services\Rest\NewsAPI;

class DashboardController
{
    protected $newsApi;

    public function __construct(NewsAPI $newsApi)
    {
        $this->newsApi = $newsApi;
    }

    public function index()
    {   
        $news = $this->newsApi->getNews();
        //dd($news);
        return view('dashboard/dashboard', compact(['news']));
    }
}