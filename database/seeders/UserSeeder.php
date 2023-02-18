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
        DB::table("users")->insert([
            'name' => 'Trần Thị Thủy Linh',
            'email' => 'thuylinh@ze.vn',
            'password' => Hash::make('99999999'),
            'role' => 'teacher',
            'price' => 140000,
        ]);
    }
}
