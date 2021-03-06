<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Response;
use Faker\Generator as Faker;

$factory->define(Response::class, function (Faker $faker, array $arguments = []) {
    return [
        'question_id' => $arguments['question_id'],
        'response' => $arguments['response'],
    ];
});
