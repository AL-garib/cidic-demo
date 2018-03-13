<?php
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {

    return [

        'name' => $faker->name,
        'password' => \Hash::make('1234567'),
        'number_phone' => $faker->phoneNumber,
        'brief' => $faker->paragraph(15),
        'thumbnail' => $faker->imageUrl,
        'email' => $faker->safeEmail,        
        'awereded' => random_int(10,1000),
        'max_poster_allowed' => random_int(1,5),
        'is_blocked' => $faker->boolean(),
        'is_approved' => $faker->boolean(),
        'is_admin' => $faker->boolean()
    ];
});

$factory->define(App\Country::class, function (Faker $faker) {
    

    return [
        'english_name' => $faker->country,
        'arabic_name' => $faker->country,
        'country_code' => 'SA'
    ];
});

$factory->define(App\City::class, function (Faker $faker) {
    
    
    return [
        'country_id' => App\User::all()->random()->id,
        'city_name' => $faker->city
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    

    return [
        'category_name' => $faker->word
    ];
});

$factory->define(App\Poster::class, function (Faker $faker) {
    

    return [
        'city_id' => App\City::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,
        'poster_title' => $faker->title,
        'content' => $faker->paragraph,
        'expired_at' => Carbon\Carbon::now()->addDays(2),
        'is_confimed' => $faker->boolean(),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});

$factory->define(App\Photo::class, function (Faker $faker) {
    

    return [
        'poster_id' => App\Poster::all()->random()->id,
        'path' => $faker->imageUrl,
        'thumbnail' => $faker->imageUrl
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {
    

    return [
        'user_id' => App\User::all()->random()->id,
        'poster_id' => App\Poster::all()->random()->id,
        'comment' => $faker->paragraph(4)
    ];
});
