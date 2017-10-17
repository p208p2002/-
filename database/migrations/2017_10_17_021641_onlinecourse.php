<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Onlinecourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('onlinecourse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classid');
            $table->integer('createrid');
            $table->string('title');
            $table->text('context');
            $table->text('videoframe');
            $table->timestamp('createtime');
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
