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
     * Realiza uma requisição GET na API.
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
}