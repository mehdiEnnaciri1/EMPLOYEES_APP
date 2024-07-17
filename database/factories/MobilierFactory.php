<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mobilier>
 */
class MobilierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake()->randomNumber(6,true),
            'nom' => fake()->name(),
            'quantite' => fake()->numberBetween(0,200),
            'valeur' => fake()->randomNumber(7,false),
            'locale' => fake()->word(),
            'etat' => fake()->word(),
        ];
    }
}
