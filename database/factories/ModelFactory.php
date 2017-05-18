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
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'display_name' => $faker->name,
        'active' => 1,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Quote::class, function ($faker) {
    return [
        'author_id' => function () {
            return factory('App\QuoteAuthor')->create()->id;
        },
        'quote_text' => $faker->sentence,
        'active' => 1,
        'created_by' => function () {
            return factory('App\User')->create()->id;
        },
        'approved_by' => function () {
            return factory('App\User')->create()->id;
        },
        'updated_by' => null,
    ];
});

$factory->define(App\QuoteAuthor::class, function ($faker) {
    $name = $faker->word;

    return [
        'slug' => $faker->userName,
        'display_name' => $faker->name,
        'last_name' => $faker->lastName,
		'bio_line' => $faker->sentence,
		'profile_pic' => null,
		'cover_image' => null,
		'active' => 1,
		'created_by' => function () {
            return factory('App\User')->create()->id;
        },
        'updated_by' => null
    ];
});