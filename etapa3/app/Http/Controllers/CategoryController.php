<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller{

public function index()
{
    $categories = Category::all();

    return view('productos', [
        'categories' => $categories
    ]);
}

public function list() {
$categoryMenu = Category::orderBy('name', 'asc')->get();

  return view('altacategoria', [
       'categoryMenu' => $categoryMenu,
    ]);
}


    public function detail($categorySlug) {
        $category = Category::where('slug', $categorySlug)->first();
        $products = Product::where('category_id', "=", $category->id)->get();

      return view('category', [
            'category' => $category,
            'products' => $products

        ]);
    }



    public function altacategoria(Request $req){
      $categorianueva = new Category();
      $reglas = [
        "name" => "required|max:125",
              ];

      $mensajes = [
        "required" => "El campo nombre es obligatorio"
      ];

      $this->validate($req, $reglas, $mensajes);

      $categorianueva->name = $req["name"];
      $categorianueva->slug = $req["name"];

      $categorianueva->save();

      return redirect("/altacategoria");
    }





}
