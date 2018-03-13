<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->truncate();
		
		factory(User::class, 50)->create();
	}
}