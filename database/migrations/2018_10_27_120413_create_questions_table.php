<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration 
{
	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('qcategory_id')->unsigned()->index();
            $table->text('title');
            $table->text('answer');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('questions');
	}
}
