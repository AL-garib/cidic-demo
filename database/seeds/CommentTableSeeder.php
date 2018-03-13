<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('comments')->truncate();

		// CommentTableSeeder
		factory(Comment::class, 50)->create();
	}
}