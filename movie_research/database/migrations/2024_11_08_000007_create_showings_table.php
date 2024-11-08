<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showings', function (Blueprint $table) {
            $table->id();
            $table->integer('theater_id');
            $table->integer('film_id');
            $table->float('revenue');
            $table->timestamps();

            $table->foreign('theater_id')->references('id')->on('theaters')->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showings');
    }
}
