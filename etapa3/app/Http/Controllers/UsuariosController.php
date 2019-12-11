<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuarios;
use App\Carritos;
use App\Product;


class UsuariosController extends Controller
{

  public function carrito() {
  $carrito = Carritos::orderBy('user_id', 'asc')->get();
  //$productos = Carritos::orderBy('product_id', 'asc')->get();
  $user = Carritos::orderBy('user_id', 'asc')->get();


    return view('cuenta', [
         'carrito' => $carrito,
          'user' => $user,
                 ]);

}

public function index() {
return view('perfil_datos', [

]);
}


  }
