<?php

use Illuminate\Database\Seeder;
use App\Poster;

class PosterTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('posters')->truncate();

		// PosterTableSeeder
		factory(Poster::class, 50)->create();
	}
}