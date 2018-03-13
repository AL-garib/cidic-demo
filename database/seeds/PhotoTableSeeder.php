<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('photos')->truncate();

		// PhotoTableSeeder
		factory(Photo::class, 50)->create();
	}
}