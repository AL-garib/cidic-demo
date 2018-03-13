<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('english_name', 191);
			$table->string('arabic_name', 191);
			$table->string('country_code', 5);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}