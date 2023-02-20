<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            'name' => 'Admin ZE',
            'email' => 'admin@ze.vn',
            'password' => Hash::make('99999999'),
            'role' => 'admin',

        ]);
        for ($i = 1; $i < 40; $i++) {
            DB::table("users")->insert([
                'avatar' => 'https://png.pngtree.com/png-vector/20190130/ourlarge/pngtree-cute-girl-avatar-material-png-image_678035.jpg',
                'name' => fake()->name(),
                'email' => fake()->email(),
                'origin' => rand(1, 2),
                'password' => Hash::make('99999999'),
                'role' => 'teacher',
                'price' => rand(100, 1000) * 1000,
                'video' => '{"provider":"youtube","id":"PCmX6q-gfJ8","title":"M\u1ea5t G\u1ed1c Ti\u1ebfng Anh, video n\u00e0y d\u00e0nh cho b\u1ea1n | B\u1eaft \u0110\u1ea7u t\u1eeb \u0111\u00e2u, T\u1ef1 H\u1ecdc th\u1ebf n\u00e0o? VyVocab Ep. 85 Kh\u00e1nh Vy","image":"https:\/\/i.ytimg.com\/vi\/PCmX6q-gfJ8\/maxresdefault.jpg","url":"https:\/\/www.youtube.com\/watch?v=PCmX6q-gfJ8"}',
            ]);
        }
        for ($i = 1; $i < 30; $i++) {
            DB::table("teacher_skill")->updateOrInsert([
                'teacher_id' => rand(2, 40),
                'skill_id' => rand(1, 6),
                'created_at' => NULL,
                'updated_at' => NULL,
            ]);
        }
    }
}
