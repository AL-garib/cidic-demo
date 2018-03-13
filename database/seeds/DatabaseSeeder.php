<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		Model::unguard();

		$this->call(UserTableSeeder::class);
		$this->command->info('User table seeded!');

		$this->call(CountryTableSeeder::class);
		$this->command->info('Country table seeded!');

		$this->call(CityTableSeeder::class);
		$this->command->info('City table seeded!');


		$this->call(CategoryTableSeeder::class);
		$this->command->info('Category table seeded!');

		$this->call(PosterTableSeeder::class);
		$this->command->info('Poster table seeded!');


		$this->call(PhotoTableSeeder::class);
		$this->command->info('Photo table seeded!');

		$this->call(CommentTableSeeder::class);
		$this->command->info('Comment table seeded!');

		Model::reguard();
	}
}