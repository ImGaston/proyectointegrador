<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talle;

class TallesController extends Controller{

public function index()
{
    $talles = Talle::all();

    return view('altatalles', [
        'talles' => $talles
    ]);
}

public function list() {
$tallesMenu = Talle::orderBy('name', 'asc')->get();

  return view('altatalles', [
       'tallesMenu' => $tallesMenu
    ]);
}

    public function altatalles(Request $req){
      $talleNuevo = new Talle();

      $reglas = [
        "name" => "required|max:125",
              ];

      $mensajes = [
        "required" => "El campo nombre es obligatorio"
      ];

      $this->validate($req, $reglas, $mensajes);

      $talleNuevo->name = $req["name"];
      $talleNuevo->save();

      return redirect("/altatalles");
    }





}
