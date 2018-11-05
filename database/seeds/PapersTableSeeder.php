<?php

use Illuminate\Database\Seeder;
use App\Models\Paper;
use App\Models\User;
use App\Models\Category;
use App\Models\Bcategory;
use App\Models\Qcategory;

class PapersTableSeeder extends Seeder
{
    public function run()
    {
        // $papers = factory(Paper::class)->times(50)->make()->each(function ($paper, $index) {
        //     if ($index == 0) {
        //         // $paper->field = 'value';
        //     }
        // });
    	$user_ids = User::all()->pluck('id')->toArray();
		$category_ids = Category::all()->pluck('id')->toArray();
		$faker = app(Faker\Generator::class);
		$papers = factory(Paper::class)
                        ->times(100)
                        ->make()
                        ->each(function ($paper, $index)
                            use ($user_ids, $category_ids, $faker)
        {
            // 从用户 ID 数组中随机取出一个并赋值
            $paper->user_id = $faker->randomElement($user_ids);

            // 话题分类，同上
            $paper->category_id = $faker->randomElement($category_ids);
            $paper->bcategory_id = $paper->category_id;
            $paper->qcategory_id = $paper->category_id;

        });

        Paper::insert($papers->toArray());


    }

}

