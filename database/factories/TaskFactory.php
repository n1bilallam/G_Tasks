<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Birdbord\Model;
use Faker\Generator as Faker;

$factory->define(Birdbord\Task::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'project_id' => factory(Birdbord\Project::class),
        'completed' => false
        
    ];
});
