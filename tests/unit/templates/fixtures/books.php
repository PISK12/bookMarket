<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
return [
    'id' => $index + 1,
    'title' => $faker->title,
    'description' => $faker->text,
    'id_publisher' => $faker->numberBetween(0, 5) === 0 ? null : $faker->numberBetween(1, 8),
    'id_shop' => $faker->numberBetween(0, 6) === 0 ? null : $faker->numberBetween(1, 15),
];
