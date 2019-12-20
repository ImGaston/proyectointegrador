<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use App\Prenda;
use App\Talle;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    $categories = Category::all();
    $category = $categories->random();

    return [
        'name' => $faker->word,
        'description' => $faker->text(400),
        'precio'=> $faker->numberBetween($min = 250, $max = 3000),
        'image_url' => $faker->imageUrl,
        'category_id' => $category->id,
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d')
    ];
});
