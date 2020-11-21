<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(AccountType::TABLE)->insert([
            'name' => 'Default',
            'status' => 1
        ]);
        DB::table(AccountType::TABLE)->insert([
            'name' => 'Savings',
            'status' => 1
        ]);
    }
}
