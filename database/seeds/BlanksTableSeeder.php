<?php

use Illuminate\Database\Seeder;
use App\Models\Blank;

class BlanksTableSeeder extends Seeder
{
    public function run()
    {
        $blanks = factory(Blank::class)->times(50)->make()->each(function ($blank, $index) {
            if ($index == 0) {
                // $blank->field = 'value';
            }
        });

        Blank::insert($blanks->toArray());
    }

}

