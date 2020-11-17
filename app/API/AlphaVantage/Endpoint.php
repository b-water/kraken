<?php

namespace App\AlphaVantage;

use Throwable;
use GuzzleHttp\Client as HttpClient;

final class Endpoint {

    private ?HttpClient $httpClient = null;

    public function __construct() {

        $this->httpClient = new HttpClient([
            'base_uri' => 'https://www.alphavantage.co/'
        ]);
    }

    public function test()
    {

        $params = [
            'debug' => false,
            'query' => [
                'apikey' => 'H63CX8PGMH9WLZT8',
                'function' => 'TIME_SERIES_DAILY_ADJUSTED',
                'symbol' => 'VGWL'
            ]
        ];

        return $this->request('GET', $params);
    }

    public function request(string $method = 'GET', array $params = []) {

        try {
            $response = $this->httpClient->request('GET', 'query', $params);
        } catch (Throwable $t) {

        }

        $data = json_decode($response->getBody(), true);

        return $data;
    }
}
