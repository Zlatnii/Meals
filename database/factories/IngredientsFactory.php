<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

use App\Models\Ingredients;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredients>
 */
class IngredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'title' => fake()->text(),
            'slug' => fake()->word(),
        ];
    }
}
