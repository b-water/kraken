<?php

namespace Database\Seeders;

use Database\Seeders\AccountTypesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'default@user',
            'password' => Hash::make('default'),
        ]);

        $this->call([
            AccountTypesSeeder::class,
            CurrenciesSeeder::class,
        ]);
    }
}
