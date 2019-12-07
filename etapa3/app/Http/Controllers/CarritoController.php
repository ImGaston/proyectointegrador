<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Carrito;


class CarritoController extends Controller
{
  public function agregarAlCarrito(Request $form) {
                Carrito::create([
                'user_id' => $form["user_id"],
                'product_id' => $form["product_id"],
                'product_price' => $form["product_price"],
                'product_name' => $form["product_name"],
              ]);
              return redirect('/');
            }


      }
