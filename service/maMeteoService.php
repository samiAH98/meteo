<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;


class maMeteoService
{
        public function __construct(
            private HttpClientInterface $client,
        ) {
        }

    public function Meteo (){
        $response = $this->client->request(
            'GET',
            'https://api.openweathermap.org/data/2.5/weather?q={bordeaux}&appid={21286764396e4f0a39815346959382b5}'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        var_dump($content);
        return $content;
       
    }
    
}