<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Comment();
        $a->content="This is content.";
        $a->authorName="Hubert";
        $a->post_id=1;
        $a->save();

        Comment::factory()->count(50)->create();
    }
}
