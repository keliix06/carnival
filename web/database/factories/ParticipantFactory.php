<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Participant;
use Faker\Generator as Faker;

$autoIncrement = autoIncrement();
$factory->define(Participant::class, function (Faker $faker) use ($autoIncrement) {
    $autoIncrement->next();

    return [
        'bidder_number' => $autoIncrement->current(),
        'name'          => $faker->name,
        'email'         => $faker->email,
        'phone'         => $faker->phoneNumber,
    ];
});

function autoIncrement()
{
    for ($i = 0; $i < 1000; $i++) {
        yield $i;
    }
}
