<?php

use App\Models\Account;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Account::TABLE, function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name')->unique();
            $table->string('reference');
            $table->tinyInteger('currency');
            $table->tinyInteger('type');
            $table->tinyInteger('status');
            $table->decimal('current_balance', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Account::TABLE);
    }
}
