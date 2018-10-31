<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedBCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $b_categories = [
            [
                'name'        => '基础',
                'description' => '资质认定基础部分',
            ],
            [
                'name'        => '环检',
                'description' => '机动车环保性能检测',
            ],
            [
                'name'        => '安检',
                'description' => '机动车安全性能检测',
            ],
            [
                'name'        => '综检',
                'description' => '机动车综合性能检测',
            ],
        ];

        DB::table('b_categories')->insert($b_categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('b_categories')->truncate();
    }
}
