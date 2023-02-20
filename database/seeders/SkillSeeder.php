<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("skills")->insert([
            'name' => 'Tiếng anh cơ bản',
        ]);
        DB::table("skills")->insert([
            'name' => 'Tiếng anh nâng cao',
        ]);
        DB::table("skills")->insert([
            'name' => 'TOEIC',
        ]);
        DB::table("skills")->insert([
            'name' => 'IELTS',
        ]);
        DB::table("skills")->insert([
            'name' => 'Business English',
        ]);
        DB::table("skills")->insert([
            'name' => 'Tiếng anh trẻ em',
        ]);
    }
}
