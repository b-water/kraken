<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(Currency::TABLE)->insert([
            'name' => 'Euro',
            'status' => 1
        ]);
        DB::table(Currency::TABLE)->insert([
            'name' => 'US-Dollar',
            'status' => 1
        ]);
    }
}
