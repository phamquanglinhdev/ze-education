<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("settings")->insert([
            'name' => 'Email nhận thông báo',
            'key' => 'email_notify',
            'value' => 'phamquanglinhdev@gmail.com',
            'key_type' => 'text',
        ]);
    }
}
