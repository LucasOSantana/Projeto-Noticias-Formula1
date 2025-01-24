<?php

namespace App\Services\Rest;

use Illuminate\Support\Facades\Http;

class JolpicaAPI
{
    protected $baseUrl;

    public function __construct()
    {
        // URL base da API
        $this->baseUrl = 'https://ergast.com/api/f1/';
    }

    /**
     * Realiza uma requisição GET para trazer equipes.
     *
     * @param string $endpoint
     * @param array $queryParams
     * @return array|null
     */
    public function getConstructors($year)
    {
        
        $response = Http::withOptions(['verify' => false])->get($this->baseUrl . $year . '/constructors.json');

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    /**
     * Realiza uma requisição GET para trazer pilotos.
     *
     * @param string $endpoint
     * @param array $queryParams
     * @return array|null
     */
    public function getDrivers($year)
    {
        
        $response = Http::withOptions(['verify' => false])->get($this->baseUrl . $year . '/drivers.json');

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

    /**
     * Realiza uma requisição GET para trazer as temporadas.
     *
     * @param string $endpoint
     * @param array $queryParams
     * @return array|null
     */
    public function getSeasons($year)
    {
        
        $response = Http::withOptions(['verify' => false])->get($this->baseUrl . $year . '/driverstandings.json');

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }

     /**
     * Realiza uma requisição GET para trazer as corridas.
     *
     * @param string $endpoint
     * @param array $queryParams
     * @return array|null
     */
    public function getCircuits($year)
    {
        
        $response = Http::withOptions(['verify' => false])->get($this->baseUrl . $year . '/circuits.json');

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }



    
}