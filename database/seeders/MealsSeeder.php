<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seed categories
        DB::table('category')->insert([
            'title' => 'naslov jela na HR jeziku',
            'slug' => 'naslov-jela-na-HR-jeziku',
        ]);

        // Seed tags
        DB::table('tags')->insert([
            'title' => 'naslov jela na HR jeziku',
            'slug' => 'naslov-jela-na-HR-jeziku',
        ]);

        // Seed ingredients
        DB::table('ingredients')->insert([
            'title' => 'naslov jela na HR jeziku',
            'slug' => 'naslov-jela-na-HR-jeziku',
        ]);

        //Seed meals
        DB::table('meals')->insert([
            'title' => 'naslov jela na HR jeziku',
            'description' => 'opis jela na HR jeziku',
            'status' => ('deleted' ? 'created' : 'modified'),
            'category_id' => 1, // Random category ID
            'tags_id' => 1, // Random tag ID
            'ingredients_id' => 1, // Random ingredient ID
        ]);
    }
}
