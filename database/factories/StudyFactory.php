<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Study;
use Faker\Generator as Faker;

$factory->define(Study::class, function (Faker $faker) {
    $now = \Carbon\Carbon::now();
    return [
        'language'=>$faker->country,
        'time_start'=>'2000',
        'time_end'=>'2230',
        'memo'=>$faker->company,
        'keyword'=>'keyword....',
        'created_at'=>$now,
        'updated_at'=>$now,
    ];
});
