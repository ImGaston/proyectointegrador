<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Prenda;
use App\Talle;

class ProductosController extends Controller
{
  public function index() {
      $productos = Product::all();


      return view('productos-todos', [
          "productos" => $productos,
            "query" => ''
      ]);

    }

    public function list() {
    $categoryMenu = Category::orderBy('name', 'asc')->get();
    $PrendaMenu = Prenda::orderBy('name', 'asc')->get();
    $TalleMenu = Talle::orderBy('name', 'asc')->get();

      return view('altaproducto', [
           'categoryMenu' => $categoryMenu,
            'prendaMenu' => $PrendaMenu,
             'TalleMenu' => $TalleMenu,
        ]);

  }
    public function search() {
      $query = trim($_GET["query"]);
      $productos = Product::where('name', 'like', "%$query%")->get();
      return view('productos-todos', [
        "productos" => $productos,
          "query" => $query
      ]);
    }

    public function indexborrar() {
        $productos = Product::all();

        return view('productos-borrar', [
            'productos' => $productos
                  ]);

      }

          public function detail($id) {
      $producto = Product::find($id);
      $TalleMenu = Talle::orderBy('name', 'asc')->get();

      return view('producto-detail', [
        "producto" => $producto,
        "TalleMenu" => $TalleMenu


      ]);
    }

    public function altaproducto(Request $req){
        $productoNuevo = new Product();

      $reglas = [
        "name" => "required|max:125",
        "description" => "required|max:255",
       "precio"=> "required|integer|min:0",
       "foto"=>"file"

      ];

      $mensajes = [
        "required" => "El campo es obligatorio"
      ];

      $this->validate($req, $reglas, $mensajes);

      $ruta = $req->file("image_url")->store("public");
      $nombreFoto = basename($ruta);

      $productoNuevo->image_url = $nombreFoto;
      $productoNuevo->name = $req["name"];
      $productoNuevo->description = $req["description"];
      $productoNuevo->precio = $req["precio"];
      $productoNuevo->category_id =  $req["category_id"];
      $productoNuevo->prenda_id =  $req["prenda_id"];
      $productoNuevo->talle_id =  $req["talle_id"];

      $productoNuevo->save();

      return redirect("/productos");
    }

    public function borrarproducto(Request $req){
      $id = $req ["id"];
      $producto = Product::find($id);
      $producto-> delete();

      return redirect("/productos");
    }





  }
