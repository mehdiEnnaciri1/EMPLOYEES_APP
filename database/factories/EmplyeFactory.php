<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emplye>
 */
class EmplyeFactory extends Factory
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
            'CIN' => fake()->address(),
            'birthdate' => fake()->date(),
            'hiredate' => fake()->date(),
            'phone' => fake()->unique()->numberBetween(),
            'genre' => fake()->name(),
            'grade' => fake()->name(),
            'echelle' => fake()->numberBetween(0,20),
            'echelon' => fake()->numberBetween(0,20),
            'indice' => fake()->numberBetween(0,1000),
            'arrondisement' => fake()->name(),
            'division' => fake()->name(),
            'service' => fake()->name(),
            'poste' => fake()->name(),
            'niveau' => fake()->name(),
            'specialite' => fake()->name(),
            'nature' => fake()->name(),
            'nometablissement' => fake()->name(),
            'villeetablissement' => fake()->unique()->address(),
            'commentaire' => fake()->name(),
            'autrediplome' => fake()->name(),
            'NAA' => fake()->address(),
            'NAO' => fake()->address(),
            'roteurdate' => fake()->date(),
            'voiture' => fake()->name(),
            'model' => fake()->randomNumber(5,false),
            'dotation' => fake()->address(),
            'longement' => fake()->name(),
            'note' => fake()->numberBetween(0,20),
        ];

    }
}
