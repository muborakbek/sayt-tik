<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'titlega misol',
            'short_content' => 'short_content misol',
            'content' => 'content misol',
        ]);

        Post::create([
            'user_id' => 1,
            'title' => 'titlega misol',
            'short_content' => 'short_content misol',
            'content' => 'content misol',
        ]);
    }
}
