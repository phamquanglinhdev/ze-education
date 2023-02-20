<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("settings")->insert([
            'name' => 'Link đăng ký học thử',
            'key' => 'trial_link',
            'value' => 'https://forms.gle/AVJdbRL7jgoLu4YZA',
            'key_type' => 'text',
        ]);
        DB::table("settings")->insert([
            'name' => 'Banner Trang Web',
            'key' => 'banner',
            'key_type' => 'image',
            'value' => 'https://files.catbox.moe/vkijdh.png',
        ]);
        DB::table("settings")->insert([
            'name' => 'Nội dung trang tuyển dụng',
            'key' => 'hiring_page',
            'key_type' => 'summernote',
            'value' => 'null'
        ]);
//        DB::table("settings")->insert([
//            'name' => 'Link trang đăng ký tuyển dụng',
//            'key' => 'hiring_page',
//            'key_type' => 'link',
//            'value' => 'https://forms.gle/AVJdbRL7jgoLu4YZA'
//        ]);
    }
}
