<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewNewsArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('NewNewsArticle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classid');
            $table->integer('createrid');
            $table->string('title');
            $table->text('context');
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
        //Schema::drop('NewNewsArticle');
    }
}
