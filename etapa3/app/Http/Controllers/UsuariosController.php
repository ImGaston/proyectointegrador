<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{

  public function altausuario(Request $req){
    $usuarionuevo = new Usuarios();

    $usuarionuevo->nombre = $req["nombre"];
    $usuarionuevo->apellido = $req["apellido"];
    $usuarionuevo->email = $req["email"];
    $usuarionuevo->password = $req["password"];
    $usuarionuevo->save();

    return redirect("/");
  }

//   public function index($id) {
//   $usuario = Usuarios::find($id);
//
// return view('cuenta', [
// "usuario" => $usuario
// ]);
// }

  public function carrito() {
return view('cuenta', [

]);
}

public function index() {
return view('perfil_datos', [

]);
}


  }
