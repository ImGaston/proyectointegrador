<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function list() {
      $productos = Productos::paginate(100);

      return view('test', [
        "productos" => $productos
      ]);
    }

    public function detail($id) {
      $producto = Productos::find($id);

      return view('test-detail', [
        "producto" => $producto
      ]);
    }

    public function altaproducto(Request $req){
      $productoNuevo = new Productos();

      $reglas = [
        "descripcion" => "required|max:255",
       "precio"=> "required|integer|min:0",
       "cantidad"=> "required|numeric|min:0|max:10",
       "foto"=>"file"

      ];

      $mensajes = [
        "required" => "El campo es obligatorio"
      ];

      $this->validate($req, $reglas, $mensajes);

      $ruta = $req->file("foto")->store("public");
      $nombreFoto = basename($ruta);

      $productoNuevo->foto = $nombreFoto;
      $productoNuevo->descripcion = $req["descripcion"];
      $productoNuevo->Cantidad = $req["cantidad"];
      $productoNuevo->precio = $req["precio"];
      $productoNuevo->categoria_id = 2;
      $productoNuevo->prenda_id = 2;
      $productoNuevo->talle_id = 2;

      $productoNuevo->save();

      return redirect("/test");
    }

    public function borrarproducto(Request $req){
      $id = $req ["id"];
      $producto = Productos::find($id);
      $producto-> delete();

      return redirect("/test");
    }



  }
