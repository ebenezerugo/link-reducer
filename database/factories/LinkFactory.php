<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->domainWord,
        'description' => $description = $faker->text,
        'link' => $link = $faker->url
    ];
});
