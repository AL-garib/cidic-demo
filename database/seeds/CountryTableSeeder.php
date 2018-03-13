<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder {

	public function run()
	{
		//Country::truncate();

		factory(Country::class, 50)->create();
		

	}
}