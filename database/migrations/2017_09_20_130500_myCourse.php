<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MyCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mycourse', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_year');
            $table->string('course_term');
            $table->string('course_name');
            $table->string('course_context');
            $table->string('teacher_name');
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
        //Schema::drop('mycourse');
    }
}
