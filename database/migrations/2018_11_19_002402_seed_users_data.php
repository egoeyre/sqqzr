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
                'avatar'    => 'http://sqqzr.test/uploads/7.png',

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
