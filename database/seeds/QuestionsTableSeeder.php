<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\User;
use App\Models\Qcategory;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
       // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组，如：[1,2,3,4]
        $qcategory_ids = Qcategory::all()->pluck('id')->toArray();

         // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $questions = factory(Question::class)
        			->times(100)
        			->make()
        			->each(function ($question, $index)
                        use ($user_ids, $qcategory_ids, $faker)
        {
            // 从用户 ID 数组中随机取出一个并赋值
            $question->user_id = $faker->randomElement($user_ids);

            // 话题分类，同上
            $question->qcategory_id = $faker->randomElement($qcategory_ids);
        });

        // 将数据集合转换为数组，并插入到数据库中

        Question::insert($questions->toArray());
    }

}

