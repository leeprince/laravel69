<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'role_name' => $faker->randomAscii,
    ];
});
