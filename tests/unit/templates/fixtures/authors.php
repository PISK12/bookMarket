<?php
/**
 * @var $faker \Faker\Generator
 * @var $index integer
 */
return [
    'id' => $index + 1,
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'alias' => $faker->name,
];