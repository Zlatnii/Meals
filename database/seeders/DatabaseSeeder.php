<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\MealsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $this->call(MealsSeeder::class);
        }

        for ($i = 1; $i <= 2; $i++) {
            $this->call(LanguageAndTranslations::class);
        }


    }
}

