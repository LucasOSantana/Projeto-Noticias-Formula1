<?php

namespace App\Http\Controllers\Teams;


use Illuminate\Support\Facades\DB;
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

        $teams[0]['nickname'] = 'The French Force';
        $teams[1]['nickname'] = 'Green Machine';
        $teams[2]['nickname'] = 'The Red Devils';
        $teams[3]['nickname'] = 'White Red';
        $teams[4]['nickname'] = 'The Papayas';
        $teams[5]['nickname'] = 'The Silver Arrows';
        $teams[6]['nickname'] = 'Red bull\'s Shadows';
        $teams[7]['nickname'] = 'The Bulls';
        $teams[8]['nickname'] = 'Swiss Precision';
        $teams[9]['nickname'] = 'The Blue Phoenix';
        

        return view('teams/teams', compact(['teams']));
    }

    public function team($teamID){

        $team = DB::table('teams')->where('constructor_id', $teamID)->get(); 

        return view('teams/summary', compact(['team']));
    }
}