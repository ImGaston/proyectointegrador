<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritos;


class CarritosController extends Controller
{
            public function agregarAlCarrito(Request $req){
              $carritonuevo = new Carritos();

              $carritonuevo->user_id = $req["user_id"];
              $carritonuevo->product_id = $req["product_id"];

              $carritonuevo->save();

              return redirect("/cuenta");
            }

              }
