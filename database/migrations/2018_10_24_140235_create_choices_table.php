<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration 
{
	public function up()
	{
		Schema::create('choices', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->text('title');
            $table->string('optiona');
            $table->string('optionb');
            $table->string('optionc');
            $table->string('optiond');
            $table->string('answer');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('choices');
	}
}
