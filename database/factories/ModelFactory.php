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
        'name' => $faker->name,
        'username' => str_slug($faker->name),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Band::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'owner_id' => function(){
            return factory('App\User')->create()->id;
        }
    ];
});

$factory->define(App\Instrument::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name)
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
        }
    ];
});
