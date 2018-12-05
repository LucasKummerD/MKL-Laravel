<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->word(10),
        'precio' => $faker->numberBetween(1,500),
        'stock' => $faker->numberBetween(1, 100)
    ];
});
