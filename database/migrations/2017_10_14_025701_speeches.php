<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Speeches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('speeches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eventname');
            $table->string('eventdate');
            $table->text('context');
            $table->string('pdffile');
            $table->string('imgfile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
