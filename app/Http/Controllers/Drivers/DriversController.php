<?php

namespace App\Http\Controllers\Drivers;


use Illuminate\Support\Facades\DB;
use App\Services\Rest\JolpicaAPI;

class DriversController
{
    protected $jolpicaAPI;

    public function __construct(JolpicaAPI $jolpicaAPI)
    {
        $this->jolpicaAPI = $jolpicaAPI;
    }

    public function index()
    {   
        $drivers = $this->jolpicaAPI->getDrivers(2024);
        $drivers = $drivers['MRData']['DriverTable']['Drivers'];

        $driversDB = DB::table('drivers')->get();

        $drivers = array_map(function ($driver) use ($driversDB) {
            if (isset($driversDB[$driver['driverId']])) {
                $driverDB = $driversDB[$driver['driverId']];
                $driver['team_id'] = $driverDB->team_id;
                $driver['started_season'] = $driverDB->started_season;
            }
            return $driver;
        }, $drivers);

        return view('drivers/drivers', compact(['drivers']));
    }

}