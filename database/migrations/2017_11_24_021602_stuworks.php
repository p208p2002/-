<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stuworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stuworks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classid');
            $table->integer('uid');
            $table->integer('schoolid');
            $table->string('filepath');
            $table->string('context');
            $table->string('studentname');
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
