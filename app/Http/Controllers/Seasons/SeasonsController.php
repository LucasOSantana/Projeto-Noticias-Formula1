<?php

namespace App\Http\Controllers\Seasons;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Rest\JolpicaAPI;

class SeasonsController
{
    protected $jolpicaAPI;

    public function __construct(JolpicaAPI $jolpicaAPI)
    {
        $this->jolpicaAPI = $jolpicaAPI;
    }

    public function index()
    {   

        //$season = $this->jolpicaAPI->getSeasons($year);

        return view('seasons/seasons');
    }

    public function filter(Request $request) {
        $year = $request->input('year'); 
        
        $circuits = $this->jolpicaAPI->getCircuits($year);

        $circuits = $circuits['MRData']['CircuitTable']['Circuits'];

        return response()->json([
            $circuits
        ]);
    }

}