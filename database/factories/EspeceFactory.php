<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EspeceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nomEspece' => fake()->unique()->word(),
        ];
    }
}