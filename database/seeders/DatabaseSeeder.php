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
        $this->call([
            MealsSeeder::class,
        ]);
       
    }
}

