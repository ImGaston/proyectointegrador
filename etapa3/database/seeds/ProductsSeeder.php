<?php

use Illuminate\Database\Seeder;
use App\Category;



class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     factory(App\Product::class, 25)->create();
    // }


    public function run()
       {
           $colegial = Category::where('slug', 'colegial')->first();
           $egresados = Category::where('slug', 'egresados')->first();
           $hospitalario = Category::where('slug', 'hospitalario')->first();
           $products = [
               [
                   'name' => 'Chomba colegial',
                   'description' => 'Corte clásico que se adapta al día a día de tu hijo. 100% algodón',
                   'precio' => 720,
                   'image_url' =>'/img/chomba.jpeg',
                   'category_id' => $colegial->id,
                    

               ],
               [
                   'name' => 'Equipo infantil',
                   'description' => 'Conjunto de invierno reforzado en todas las costuras para los dias de actividad física',
                   'precio' => 920,
                   'image_url' => '/img/joggins.jpeg',
                   'category_id' => $colegial->id,
                  

               ],
               [
                   'name' => 'Joggins deportivos',
                   'description' => 'Pantalones todo tereno',
                   'precio' => 1200,
                   'image_url' => '/img/egresados2.jpeg',
                   'category_id' => $colegial->id,
                   
               ],
               [
                   'name' => 'Buzo deportivo',
                   'description' => 'Para los días fríos de invierno',

                   'precio' => 1800,
                   'image_url' => '/img/egresados.jpg',
                   'category_id' => $egresados->id,
                  
               ],
               [
                   'name' => 'Conjunto egresados',
                   'description' => 'Haz de tu último año el mejor',

                   'precio' => 2110,
                   'image_url' => '/img/egresados.jpeg',
                   'category_id' => $egresados->id,
                   
               ],
               [
                   'name' => 'Camperas egresados',
                   'description' => 'Las mejores de todo Formosa',
                   'precio' => 1499,
                   'image_url' => '/img/egresados-1.png',
                   'category_id' => $egresados->id,
                  


               ],
               [
                   'name' => 'chaquetillas',
                   'description' => 'chomba colegial',
                   'precio'=>980,
                   'image_url' => '/img/chaquetilla.jpeg',
                   'category_id' => $hospitalario->id,
                  

               ],
               [
                   'name' => 'Ambo Duo',
                   'description' => 'chomba colegial',

                   'precio' => 1290,
                   'image_url' => '/img/producto-3.jpg',
                   'category_id' => $hospitalario->id,
                   

               ],
               [
                   'name' => 'Ambo liberty',
                   'description' => 'chomba colegial',
                   'precio' => 1900,
                   'image_url' => '/img/amboliberty.jpeg',
                   'category_id' => $hospitalario->id,
                   
               ],

           ];
           foreach ($products as $product) {
               DB::table('products')->insert([
                   'name' => $product['name'],
                   'description' =>$product['description'],
                   'image_url' => $product['image_url'],
                   'precio' => $product['precio'],
                   'category_id' => $product['category_id'],

               ]);
           }
       }





}
