<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Post();
        $a->content="This is content.";
        $a->authorName="Hubert";
        $a->save();
        //
        Post::factory()->count(50)->create();
    }
}
