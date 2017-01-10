<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnOff extends Migration
{

    public function up()
    {
        Schema::create('on_off', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('on_of');
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('on_off');
    }
}
