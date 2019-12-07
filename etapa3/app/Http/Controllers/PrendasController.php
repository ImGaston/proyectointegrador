<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prenda;

class PrendasController extends Controller{

public function index()
{
    $prendas = Prenda::all();

    return view('altaprendas', [
        'prendas' => $prendas
    ]);
}

public function list() {
$prendaMenu = Prenda::orderBy('name', 'asc')->get();

  return view('altaprendas', [
       'prendaMenu' => $prendaMenu,
    ]);
}

    public function altaprendas(Request $req){
      $prendanueva = new Prenda();

      $reglas = [
        "name" => "required|max:125",
              ];

      $mensajes = [
        "required" => "El campo nombre es obligatorio"
      ];

      $this->validate($req, $reglas, $mensajes);

      $prendanueva->name = $req["name"];
      $prendanueva->save();

      return redirect("/altaprendas");
    }





}
