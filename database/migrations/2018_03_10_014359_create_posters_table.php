<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostersTable extends Migration {

	public function up()
	{
		Schema::create('posters', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('city_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned()->nullable();
			$table->string('poster_title', 191);
			$table->text('content');
			$table->softDeletes();
			$table->timestamp('expired_at');
			$table->boolean('is_confimed')->default(true);
			$table->float('latitude', 10,6);
			$table->float('longitude', 10,6);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('posters');
	}
}