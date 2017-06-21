<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryTest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryTest', function (Blueprint $table) {
            $table->integer('IDCategory')->unsigned();
            $table->foreign('IDCategory')->references('IDCategory')->on('category');
            $table->integer('IDTest')->unsigned();
            $table->foreign('IDTest')->references('IDTest')->on('test');
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
