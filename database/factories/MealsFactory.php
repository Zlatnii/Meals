<?php

namespace Database\Factories;
use App\Models\Meals;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Tags;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meals>
 */
class MealsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $category = DB::table('category')->pluck('id');
        $tags = DB::table('tags')->pluck('id');
        $ingredients = DB::table('ingredients')->pluck('id');

        return [

            'title' => fake()->word(),
            'description' => fake()->text(),
            'status' => fake()->paragraph(['created', 'modified', 'deleted']),
            'category_id' => Category::factory()->create()->id,
            'tags_id' => Tags::factory()->create()->id,
            'ingredients_id' => Ingredients::factory()->create()->id,
            
        ];
    }
}

