<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perunggu', function (Blueprint $table) {
            $table->id();
            $table->string('negara');
            $table->integer('2003');
            $table->integer('2005');
            $table->integer('2007');
            $table->integer('2009');
            $table->integer('2011');
            $table->integer('2013');
            $table->integer('2015');
            $table->integer('2017');
            $table->integer('2019');
            $table->integer('2021');
            $table->integer('total');
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
        Schema::dropIfExists('perunggu');
    }
};
