<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'projectName'=>$faker->name."'s Project",
        'projectDescription'=>$faker->realText(50),
        'img'=>'none'
    ];
});
