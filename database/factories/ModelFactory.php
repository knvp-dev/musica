<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastname,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Instrument::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name)
    ];
});

$factory->define(App\Genre::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name)
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug($faker->name),
        'release_date' => $faker->date,
        'band_id' => function(){
            return factory('App\Band')->create()->id;
        }
    ];
});

$factory->define(App\Song::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_slug(\Carbon\Carbon::now()->timestamp . '-' . $faker->name),
        'duration' => 234,
        'band_id' => function(){
            return factory('App\Band')->create()->id;
        },
        'album_id' => function(){
            return factory('App\Album')->create()->id;
        }
    ];
});

$factory->define(App\Bandmembership::class, function (Faker\Generator $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'band_id' => function(){
            return factory('App\Band')->create()->id;
        },
        'instrument_id' => function(){
            return factory('App\Instrument')->create()->id;
        },
        'join_date' => \Carbon\Carbon::now()->subMonth(),
        'leave_date' => null
    ];
});

$factory->define(App\Band::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug(\Carbon\Carbon::now()->timestamp . '-' . $faker->name),
        'owner_id' => function(){
            return factory('App\User')->create()->id;
        },
        'genre_id' => function(){
            return factory('App\Genre')->create()->id;
        },
        'country' => "USA"
    ];
});
