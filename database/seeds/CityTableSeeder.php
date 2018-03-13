<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('cities')->truncate();

		factory(City::class, 50)->create();
	}
}