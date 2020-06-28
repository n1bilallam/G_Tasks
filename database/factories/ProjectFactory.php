<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Birdbord\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'description' => $faker->paragraph(4),
        'notes' => 'Foobar notes',
        'owner_id' => factory(Birdbord\User::class)
        
    ];
});
