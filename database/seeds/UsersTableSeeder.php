<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        // 头像假数据
        $avatars = [
            public_path() . '/uploads/1.png',
            public_path() . '/uploads/2.png',
            public_path() . '/uploads/3.png',
            public_path() . '/uploads/4.png',
            public_path() . '/uploads/5.png',
            public_path() . '/uploads/6.png',
        ];

        // 生成数据集合
        $users = factory(User::class)
                        ->times(10)
                        ->make()
                        ->each(function ($user, $index)
                            use ($faker, $avatars)
        {
            // 从头像数组中随机取出一个并赋值
            $user->avatar = $faker->randomElement($avatars);
        });

        // 让隐藏字段可见，并将数据集合转换为数组
        $user_array = $users->makeVisible(['password', 'remember_token'])->toArray();

        // 插入到数据库中
        User::insert($user_array);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'egoeyre';
        $user->email = 'egoeyre@yousails.com';
        $user->avatar = config('app.url') . '/uploads/6.png';
        $user->save();

    }
}