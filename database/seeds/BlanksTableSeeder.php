<?php

use Illuminate\Database\Seeder;
use App\Models\Blank;
use App\Models\User;
use App\Models\Bcategory;


class BlanksTableSeeder extends Seeder
{
    public function run()
    {
        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组，如：[1,2,3,4]
        $bcategory_ids = Bcategory::all()->pluck('id')->toArray();

         // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $blanks = factory(Blank::class)
        			->times(100)
        			->make()
        			->each(function ($blank, $index)
                        use ($user_ids, $bcategory_ids, $faker)
        {
            // 从用户 ID 数组中随机取出一个并赋值
            $blank->user_id = $faker->randomElement($user_ids);

            // 话题分类，同上
            $blank->bcategory_id = $faker->randomElement($bcategory_ids);
        });

        // 将数据集合转换为数组，并插入到数据库中
        Blank::insert($blanks->toArray());
    }

}

