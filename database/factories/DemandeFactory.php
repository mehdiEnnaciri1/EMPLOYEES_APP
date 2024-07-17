<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demande>
 */
class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'matricule' => fake()->randomNumber(9,false),
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'type' => fake()->name(),
            'date_debut' => fake()->date(),
            'date_fin' => fake()->date(),
        ];
    }
}
