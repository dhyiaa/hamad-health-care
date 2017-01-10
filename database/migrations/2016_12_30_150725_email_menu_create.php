<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class EmailMenuCreate extends Migration
{
    public function up()
    {
      Schema::create('email_lists', function (Blueprint $table) {
        $table->increments('id');
        $table->string('email');
        $table->rememberToken();
        $table->timestamps();
      });
    }
    public function down()
    {
      Schema::drop('email_lists');
    }
}