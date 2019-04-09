<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Sitios
{
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://papi.minube.com/',
            // You can set any number of default request options.
            'timeout'  => 20.0,
        ]);
    }

    public function all($lat = '42.2263309', $lon = '-8.7307657')
    {
        $response = $this->client->request('GET', 'pois?lang=es&latitude='.$lat.'&longitude='.$lon.'&max_distance=1000&order_by=score&&api_key=V8p7DUAN3G3mwh5H');
        return json_decode($response->getBody()->getContents());
    }
}