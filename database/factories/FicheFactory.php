<?php

namespace Database\Factories;

use App\Models\Espece;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FicheFactory extends Factory
{
    public function definition(): array
    {
        $nom = fake()->unique()->firstName();

        return [
            'nomFiche' => $nom,
            'slug' => Str::slug($nom) . '-' . fake()->unique()->numberBetween(1, 100000),
            'image' => fake()->imageUrl(),
            'espece_id' => Espece::factory(),
            'organisation_id' => Organisation::factory(),
            'nom_complet' => fake()->name(),
            'profession' => fake()->jobTitle(),
            'famille' => fake()->lastName(),
            'pouvoirs' => fake()->sentence(),
            'caracteristiques' => fake()->sentence(),
            'affiliations' => fake()->company(),
            'ennemis' => fake()->name(),
            'histoire' => fake()->paragraph(),
        ];
    }
}