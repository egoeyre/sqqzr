<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Paper::class, function (Faker $faker) {
    $sentence = $faker->sentence();
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [

        'title' 		=> $sentence,
		//'user_id'		=>
		//'category_id' 	=>
		'choice_amount' => 20,
		'choice_score' 	=> 2,
		//'bcategory_id' 	=>
		'blank_amount' 	=> 10,
		'blank_score' 	=> 2,
		//'qcategory_id' 	=>
		'question_amount' 	=>5,
		'question_score' 	=>5,
		'paper_address' 	=>$faker->text(),
		'answer_address' 	=>$faker->text(),
		'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
