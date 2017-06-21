<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SportCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sportCategory', function (Blueprint $table) {
            $table->integer('IDSport')->unsigned();
            $table->foreign('IDSport')->references('IDSport')->on('sport');
            $table->integer('IDCategory')->unsigned();
            $table->foreign('IDCategory')->references('IDCategory')->on('category');
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
        Schema::dropIfExists('sportCategory');
    }
}
