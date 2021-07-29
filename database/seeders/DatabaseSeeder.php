<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;
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
        $user = User::factory()->create([
            'name' => 'Mac Gibbons',
            'username' => 'Macgibbons',
            'email' => 'admin@test.com',
            'password' => 'password'
        ]);

        $user_two = User::factory()->create([
            'name' => 'Jane Done'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id
        ]);

        Post::factory(10)->create([
            'user_id' => $user_two->id
        ]);

        Post::factory(10)->create();

        Comment::factory(10)->create([
            'post_id' => 1
        ]);
    }
}
