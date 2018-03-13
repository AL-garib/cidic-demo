<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('country_id')->unsigned();
			$table->string('city_name', 191);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}