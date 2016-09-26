<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Message extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('froms',function($table)
       {
           $table->increments('sıra');
           $table->timestamps();
           $table->string('kim'); 
           $table->string('mail');
           $table->string('konu');
           $table->string('mesaj');

       });
    }
    public function down()
    {
       Schema::drop('forms');
    }
}
