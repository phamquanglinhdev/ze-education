<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            'name'=>'Học giao tiếp online 1-1'
        ]);
        DB::table("categories")->insert([
            'name'=>'Học viết online 1-1'
        ]);
        DB::table("categories")->insert([
            'name'=>'Khóa học theo yêu cầu'
        ]);
        DB::table("categories")->insert([
            'name'=>'Các khóa học video'
        ]);
    }
}
