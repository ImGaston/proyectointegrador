<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name1 = 'XL';
        DB::table('talles')->insert([
            'name' => $name1,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $name2 = 'L';
        DB::table('talles')->insert([
            'name' => $name2,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $name3 = 'M';
        DB::table('talles')->insert([
            'name' => $name3,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $name4 = 'S';
        DB::table('talles')->insert([
            'name' => $name4,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        $name5 = 'XS';
        DB::table('talles')->insert([
            'name' => $name5,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
          }
}
