<?php

use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoicesTableSeeder extends Seeder
{
    public function run()
    {
        $choices = factory(Choice::class)->times(50)->make()->each(function ($choice, $index) {
            if ($index == 0) {
                // $choice->field = 'value';
            }
        });

        Choice::insert($choices->toArray());
    }

}

