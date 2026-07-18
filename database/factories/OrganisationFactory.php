<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrganisationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nomOrganisation' => fake()->unique()->company(),
        ];
    }
}