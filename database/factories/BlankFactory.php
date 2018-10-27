<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Blank::class, function (Faker $faker) {
    $num = [1,2,3,4];
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title'		=> $faker->sentence(),
        'anwser'	=> $faker->word(),
        'amount'	=> $faker->randomElement($num),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
