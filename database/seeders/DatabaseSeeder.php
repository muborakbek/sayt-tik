<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}

// SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_id' in 'field list' (SQL: insert into `posts` (`user_id`, `title`, `short_content`, `content`, `updated_at`, `cre
// ated_at`) values (1, titlega misol, short_content misol, content misol, 2024-01-13 07:06:11, 2024-01-13 07:06:11))