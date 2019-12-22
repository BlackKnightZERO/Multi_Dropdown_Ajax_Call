<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thana;
use Faker\Generator as Faker;

$factory->define(Thana::class, function (Faker $faker) {
    return [
        //
        'name' => Str::random(7),
        'parent_id' => rand(1,64),
        'phone_extesion' => rand(1,64),
    ];
});
