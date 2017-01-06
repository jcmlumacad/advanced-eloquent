<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        App\Post::truncate();
        App\Comment::truncate();

        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
