<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolar sit met.',
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, id mollitia! Doloribus corrupti fugiat cupiditate quis facilis quia quas sequi perferendis vitae optio dolore, laudantium id possimus, animi non modi."
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-word-post',
            'excerpt' => 'Lorem ipsum dolar sit met.',
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, id mollitia! Doloribus corrupti fugiat cupiditate quis facilis quia quas sequi perferendis vitae optio dolore, laudantium id possimus, animi non modi."
        ]);
    }
}
