<?php

use App\Models\Investment;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Investments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Investment::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('ISIN', 12);
            $table->string('symbol');
            $table->decimal('last', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Investment::TABLE);
    }
}
