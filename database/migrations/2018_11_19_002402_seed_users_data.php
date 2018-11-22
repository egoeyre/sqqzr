<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class SeedUsersData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $users = [
            [
                'id'        => '1',
                'name'      => '系统用户',
                'email'     => 'admin@sqqzr.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '2',
                'name'      => '廖宝梁',
                'email'     => 'blliao@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '3',
                'name'      => '黄树明',
                'email'     => '13705461960@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '5',
                'name'      => '莫飞宗',
                'email'     => 'lymofeizong@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '6',
                'name'      => '王群',
                'email'     => '13791003324@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '7',
                'name'      => '安传新',
                'email'     => '13969391379@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '7',
                'name'      => '安传新',
                'email'     => '13969391379@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '8',
                'name'      => '郭广沛',
                'email'     => 'ggp227@sina.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '8',
                'name'      => '陈威',
                'email'     => 'zjschenwei@126.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '8',
                'name'      => '蒋维凯',
                'email'     => '18766666858@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '9',
                'name'      => '刘继义',
                'email'     => '18615220987@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '10',
                'name'      => '宫文哲',
                'email'     => 'gwz06@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '11',
                'name'      => '郭玉',
                'email'     => 'rzguoyu@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '12',
                'name'      => '王合山',
                'email'     => 'wangheshanlc@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '13',
                'name'      => '吴其松',
                'email'     => 'wuqisong166@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '15',
                'name'      => '王世彦',
                'email'     => 'dzshiyan@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '16',
                'name'      => '郭烨',
                'email'     => 'guo.ye@163.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
            [
                'id'        => '16',
                'name'      => '宋坤',
                'email'     => 'rizhaohuaqiang@126.com',
                'password'  => '$2y$10$1h7GM.G678GfgmMO5ety7uk4TtRCX7Q7hhzq9.13SR/cqB08/gTTu',
                'created_at'=> Carbon::yesterday()->toDateTimeString(),
                'updated_at'=> Carbon::now()->toDateTimeString(),
                'avatar'    => config('app.url') . '/uploads/6.png',

            ],
        
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}
