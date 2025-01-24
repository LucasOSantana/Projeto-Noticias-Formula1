<?php

namespace App\Services\Rest;

use Illuminate\Support\Facades\Http;

class NewsAPI
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        // URL base da API
        $this->baseUrl = 'https://newsapi.org/v2/';
        // Chave da API
        $this->apiKey = env('NEWSAPI_KEY');
    }

    /**
     * Realiza uma requisição GET na API.
     *
     * @param string $endpoint
     * @param array $queryParams
     * @return array|null
     */
    public function getNews()
    {
        $queryParams['apiKey'] = $this->apiKey; // Adiciona a chave da API nos parâmetros
        $queryParams['sortBy'] = 'relevancy';
        $queryParams['language'] = 'pt';
        $queryParams['searchIn'] = 'title';
        $queryParams['q'] = '+"Formula 1" OR "Lewis Hamilton" OR "F1" OR "Max Verstappen" OR "Charles Leclerc" OR "Carlos Sainz" OR "George Russel" OR "Sérgio Perez" OR "Lando Norris" OR "Oscar Piastri" OR "Lian Lawson" OR "Yuki Tsunoda" OR "Gabriel Bortoleto" OR "Nico Hulkenberg" OR "Pierre Gasly" OR "Esteban Ocon" OR "Oliver Bearman" OR "Lance Stroll" OR "Fernando Alonso" OR "Isack Hadjar" OR "Kimi Antonelli" OR "Alex Albon" OR "Daniel Ricciardo" OR "Kevin Magnussen"';
        $queryParams['excludeDomains'] = 'pplware.sapo.pt,olhardigital.com.br,terra.com.br';

        $response = Http::withOptions(['verify' => false])->get($this->baseUrl .'everything', $queryParams);


        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}