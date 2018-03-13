<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('categories')->truncate();

		// CategoryTableSeeder
		factory(Category::class, 50)->create();
	}
}