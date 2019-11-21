<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Productos;

class ProductosController extends Controller
{
    public function list() {
      $productos = Productos::paginate(5);

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


}
