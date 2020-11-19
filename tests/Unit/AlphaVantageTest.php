<?php

namespace Tests\Unit;

use App\AlphaVantage\Endpoint as AlphaVantageEndpoint;
use PHPUnit\Framework\TestCase;

class AlphaVantageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testConstruct()
    {
        $alpha = new AlphaVantageEndpoint();
        $hallo = $alpha->test();
        var_dump($hallo);
    }
}
