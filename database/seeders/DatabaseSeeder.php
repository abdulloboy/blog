<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=User::factory()->create([
            'name' => 'Abdullo Boy'
        ]);

        $personal=Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family=Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work=Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Comment::factory(10)->create([
            'user_id' => $user->id,
        ]);

        $post = Post::factory()->create([
            'user_id' => $user->id,
            'category_id' => $personal,
        ]);

        Comment::factory(10)->create([
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);

    }
}
