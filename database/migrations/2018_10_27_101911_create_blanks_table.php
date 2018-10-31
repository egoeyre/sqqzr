<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlanksTable extends Migration 
{
	public function up()
	{
		Schema::create('blanks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('bcategory_id')->unsigned()->index();
            $table->text('title');
            $table->string('answer');
            $table->integer('amount')->unsigned();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('blanks');
	}
}
