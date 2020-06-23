<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Study;
use Faker\Generator as Faker;

$factory->define(Study::class, function (Faker $faker) {
    $now = \Carbon\Carbon::now();
    return [
        'name'=>'name1',
        'created_at'=>$now,
        'updated_at'=>$now,
    ];
});
