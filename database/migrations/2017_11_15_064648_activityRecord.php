<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActivityRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activityrecord', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('albumid');
            $table->string('filepath');
            $table->string('filename');
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
