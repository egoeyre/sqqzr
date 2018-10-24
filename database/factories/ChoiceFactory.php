<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Choice::class, function (Faker $faker) {
    $sentence = $faker->sentence();
    $op = ['A','B','C','D'];
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        //'user_id' = $sentence
        //'category_id'
        'title'		=> $sentence,
        'optiona'	=> $faker->word(),
        'optionb'	=> $faker->word(),
        'optionc'	=> $faker->word(),
        'optiond'	=> $faker->word(),
        'answer'	=> $faker->randomElement($op),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
