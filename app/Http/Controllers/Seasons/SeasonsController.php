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

        $circuits = $circuits['MRData']['RaceTable']['Races'];

        return response()->json([
            $circuits
        ]);
    }

    public function getdata(Request $request){

        $year = $request->input('year'); 
        $race = $request->input('race'); 
        
        $season = $this->jolpicaAPI->getSeasons($year, $race);
        $season = $season['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'];
        
        return response()->json([
            $season
        ]);
    }

}