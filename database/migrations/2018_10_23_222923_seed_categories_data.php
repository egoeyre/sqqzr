<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    public function up()
    {
        $categories = [
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

        DB::table('categories')->insert($categories);
    }

    public function down()
    {
        DB::table('categories')->truncate();
    }
}

