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
            $table->integer('category_id')->unsigned()->index();
            $table->text('title');
            $table->string('anwser');
            $table->integer('amount')->unsigned();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('blanks');
	}
}
