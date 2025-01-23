<?php

namespace App\Http\Controllers\Teams;

use App\Services\Rest\JolpicaAPI;

class TeamsController
{
    protected $jolpicaAPI;

    public function __construct(JolpicaAPI $jolpicaAPI)
    {
        $this->jolpicaAPI = $jolpicaAPI;
    }

    public function index()
    {   
        $teams = $this->jolpicaAPI->getConstructors(2024);
        $teams = $teams['MRData']['ConstructorTable']['Constructors']; 
        $teams = array_map(function($str) {
            return str_replace(" F1 Team", "", $str);
        }, $teams);
        return view('teams/teams', compact(['teams']));
    }
}