<?php

use App\Models\Asset;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Asset::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->string('type');
            $table->text('description');
            $table->string('exchange');
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
        Schema::dropIfExists(Asset::TABLE);
    }
}
