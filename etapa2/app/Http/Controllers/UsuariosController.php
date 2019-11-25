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


}
