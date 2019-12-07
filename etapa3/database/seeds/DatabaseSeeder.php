<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesSeeder::class);
        $this->call(PrendaSeeder::class);
        $this->call(TallesSeeder::class);
        $this->call(ProductsSeeder::class);
    
    }
}
