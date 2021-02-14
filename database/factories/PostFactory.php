<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    
    $phone = $faker->phoneNumber;
    $email = $faker->email;
    $created = $faker->dateTimeBetween('-30 days', '-1 days');

    return [
        'site_name' =>$faker->name,
        'phone' => $phone,
        'author_id' => rand(1, 4),
        'email' => $email,
        'descr' =>  $faker->realText(rand(40, 80)),
        'created_at' => $created,
        'updated_at' => $created,
    ];
});
