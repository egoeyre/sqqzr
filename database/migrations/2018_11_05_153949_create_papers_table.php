<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapersTable extends Migration 
{
	public function up()
	{
		Schema::create('papers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('category_id')->unsigned()->index();
            $table->integer('choice_amount')->unsigned();
            $table->integer('choice_score')->unsigned();
            $table->integer('bcategory_id')->unsigned()->index();
            $table->integer('blank_amount')->unsigned();
            $table->integer('blank_score')->unsigned();
            $table->integer('qcategory_id')->unsigned()->index();
            $table->integer('question_amount')->unsigned();
            $table->integer('question_score')->unsigned();
            $table->text('paper_address');
            $table->text('answer_address');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('papers');
	}
}
