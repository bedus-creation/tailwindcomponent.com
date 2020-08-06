<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Editor;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Editor::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->paragraph,
        'status' => 'Published',
        'code' => 'null '
    ];
});
