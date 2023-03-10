<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SkillSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(EmailSettingSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(PostSeeder::class);
    }
}
