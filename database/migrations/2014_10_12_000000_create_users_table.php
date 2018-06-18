<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('number_phone', 191)->unique();
            $table->string('brief', 255)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->integer('awereded')->unsigned();
            $table->smallInteger('max_poster_allowed')->default('0');
            $table->boolean('is_blocked')->default(false);
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_admin')->default(false);
            $table->integer('number_id');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
