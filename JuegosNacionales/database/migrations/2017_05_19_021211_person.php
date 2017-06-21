<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('person', function (Blueprint $table) {
            $table->string('IDPerson')->unique()->primary();
            $table->string('name',25);
            $table->string('lastName1',12);
            $table->string('lastName2',12);
            $table->string('telephone',8);
            $table->string('email',30);
            $table->date('birthDate');
            $table->integer('IDCanton')->unsigned();
            $table->foreign('IDCanton')->references('IDCanton')->on('canton');
            $table->integer('IDRole')->unsigned();
            $table->foreign('IDRole')->references('IDRole')->on('role');
            $table->boolean('active');
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
       Schema::dropIfExists('person');
    }
}
