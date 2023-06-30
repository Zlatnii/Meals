<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Meals;
use App\Models\Tags;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class MealsSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seed categories
        DB::table('category')->insert([
            'title' =>  fake()->sentence(),
            'slug' => fake()->slug(),
        ]);

        // Seed tags
        DB::table('tags')->insert([
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
        ]);

        // Seed ingredients
        DB::table('ingredients')->insert([
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
        ]);

        //Seed meals
        $categoryIds = Category::pluck('id')->toArray();
        $tagIds = Tags::pluck('id')->toArray();
        $ingredientIds = Ingredients::pluck('id')->toArray();

        $statusOptions = ['created', 'modified', 'deleted'];
        $status = $statusOptions[array_rand($statusOptions)];

        DB::table('meals')->insert([
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'status' => $status,
            'category_id' => $categoryIds[array_rand($categoryIds)],
            'tags_id' => $tagIds[array_rand($tagIds)],
            'ingredients_id' => $ingredientIds[array_rand($ingredientIds)],
        ]);
    }
}
