<?php

use Illuminate\Database\Seeder;

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $name1 = 'Chomba';
         DB::table('prendas')->insert([
             'name' => $name1,
             'created_at' => date('Y-m-d'),
             'updated_at' => date('Y-m-d'),
                     ]);

         $name2 = 'Chaqueta';
         DB::table('prendas')->insert([
             'name' => $name2,
             'created_at' => date('Y-m-d'),
             'updated_at' => date('Y-m-d'),
                      ]);

         $name3 = 'Jogging';
         DB::table('prendas')->insert([
             'name' => $name3,
             'created_at' => date('Y-m-d'),
             'updated_at' => date('Y-m-d'),
                      ]);

         $name4 = 'Pantalón';
         DB::table('prendas')->insert([
             'name' => $name4,
             'created_at' => date('Y-m-d'),
             'updated_at' => date('Y-m-d'),
                      ]);

}
}
