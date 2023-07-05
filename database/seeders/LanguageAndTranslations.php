<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\Languages;
use App\Models\Meals;
use App\Models\Translation;

use Illuminate\Support\Facades\DB;


class LanguageAndTranslations extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::pluck('id')->toArray();
        $ingredientIds = Ingredients::pluck('id')->toArray();
        $languageIds = Languages::pluck('id')->toArray();
        $mealsIds = Meals::pluck('id')->toArray();
        $randLang = mt_rand(0,1) ? 'hr' : 'en';

        DB::table('languages')->insert([
            'lang' => $randLang,
        ]);

        $languageIds = Languages::pluck('id')->toArray();
        $randTitle = mt_rand(0,1) ? 'Naslov na EN jeziku' : 'Naslov na HR jeziku.';
        $randDescr = mt_rand(0, 1) ? 'Opis na EN jeziku' : 'Opis na HR jeziku.';
        DB::table('translation')->insert([
            'title' =>  $randTitle,
            'description' => $randDescr,
            'meals_id' => $mealsIds[array_rand($mealsIds)],
            'category_id' => $categoryIds[array_rand($categoryIds)],
            'ingredients_id' => $ingredientIds[array_rand($ingredientIds)],
            'language_id' => $languageIds[array_rand($languageIds)]
        ]);
    }
}
