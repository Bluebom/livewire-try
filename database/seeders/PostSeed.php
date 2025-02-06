<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeed extends Seeder
{
    public function run(): void
    {
        Post::query()->create([
            'title' => 'Post0',
            'content' => 'Content0',
        ]);
    }
}
