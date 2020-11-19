<?php

namespace Tests\Unit;

use App\Http\Controllers\AccountController;
use Faker\Factory as FakerFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\TestCase;

class AccountControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testConstruct()
    {
        $faker = FakerFactory::create();

        $url = 'http://kraken/accounts/add';

        $data = [
            'name'      => $faker->name,
            'reference' => $faker->regexify('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}'),
            'currency'  => 1,
            'type'      => 1
        ];

        $controller = new AccountController();
        $response = $controller->add(
            $url,
            ['includes' => $data]
        );

        $headers = [
            'X-First' => 'foo',
        ];
    }
}

