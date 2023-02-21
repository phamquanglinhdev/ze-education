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
        DB::table("settings")->truncate();
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
            'value' => url("bai-viet?id=2"),
        ]);
        DB::table("settings")->insert([
            'name' => 'Video trang chủ ( Bên trái )',
            'key' => 'left_video',
            'key_type' => 'video',
            'value' => '{"provider":"youtube","id":"PCmX6q-gfJ8","title":"M\u1ea5t G\u1ed1c Ti\u1ebfng Anh, video n\u00e0y d\u00e0nh cho b\u1ea1n | B\u1eaft \u0110\u1ea7u t\u1eeb \u0111\u00e2u, T\u1ef1 H\u1ecdc th\u1ebf n\u00e0o? VyVocab Ep. 85 Kh\u00e1nh Vy","image":"https:\/\/i.ytimg.com\/vi\/PCmX6q-gfJ8\/maxresdefault.jpg","url":"https:\/\/www.youtube.com\/watch?v=PCmX6q-gfJ8"}'
        ]);
        DB::table("settings")->insert([
            'name' => 'Video trang chủ ( Bên phải )',
            'key' => 'right_video',
            'key_type' => 'video',
            'value' => '{"provider":"youtube","id":"PCmX6q-gfJ8","title":"M\u1ea5t G\u1ed1c Ti\u1ebfng Anh, video n\u00e0y d\u00e0nh cho b\u1ea1n | B\u1eaft \u0110\u1ea7u t\u1eeb \u0111\u00e2u, T\u1ef1 H\u1ecdc th\u1ebf n\u00e0o? VyVocab Ep. 85 Kh\u00e1nh Vy","image":"https:\/\/i.ytimg.com\/vi\/PCmX6q-gfJ8\/maxresdefault.jpg","url":"https:\/\/www.youtube.com\/watch?v=PCmX6q-gfJ8"}'
        ]);
        DB::table("settings")->insert([
            'name' => 'Email liên hệ chính',
            'key' => 'main_email',
            'key_type' => 'text',
            'value' => 'info.zeeducation.edu@gmail.com'
        ]);
        DB::table("settings")->insert([
            'name' => 'Số điện thoại chính',
            'key' => 'main_phone',
            'key_type' => 'text',
            'value' => '0398 572 531'
        ]);
        DB::table("settings")->insert([
            'name' => 'Nội dung giới thiệu (Chân trang web)',
            'key' => 'footer_description',
            'key_type' => 'text',
            'value' => '{"provider":"youtube","id":"PCmX6q-gfJ8","title":"M\u1ea5t G\u1ed1c Ti\u1ebfng Anh, video n\u00e0y d\u00e0nh cho b\u1ea1n | B\u1eaft \u0110\u1ea7u t\u1eeb \u0111\u00e2u, T\u1ef1 H\u1ecdc th\u1ebf n\u00e0o? VyVocab Ep. 85 Kh\u00e1nh Vy","image":"https:\/\/i.ytimg.com\/vi\/PCmX6q-gfJ8\/maxresdefault.jpg","url":"https:\/\/www.youtube.com\/watch?v=PCmX6q-gfJ8"}'
        ]);
        DB::table("settings")->insert([
            'name' => 'Địa chỉ',
            'key' => 'footer_address',
            'key_type' => 'text',
            'value' => 'Số 22, ngõ 57,Trung Văn Nam từ Liêm, Hà Nội'
        ]);
    }
}
