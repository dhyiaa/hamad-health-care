<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class PartnersMakeTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('ar_title');
            $table->string('ar_more_info');
            $table->string('al_title');
            $table->string('al_more_info');
            $table->rememberToken();
        });
    }
    public function down()
    {
        Schema::drop('email_lists');
    }
}