<?php

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = factory(User::class, 10)->make()->toArray();
        User::insert($users);

        Post::truncate();
        $posts = factory(Post::class, 100)->make()->toArray();
        Post::insert($posts);

        Comment::truncate();
        $comments = factory(Comment::class, 300)->make()->toArray();
        Comment::insert($comments);
    }
}
