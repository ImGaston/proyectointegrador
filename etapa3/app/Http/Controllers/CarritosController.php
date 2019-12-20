<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritos;
use Auth;

class CarritosController extends Controller
{
     public function agregarAlCarrito(Request $req){
        
           $carritonuevo = new Carritos();
           $carritonuevo->product_id = $req["product_id"];
           $carritonuevo->count = $req->count;
           $carritonuevo->user_id = Auth::id();
           $carritonuevo->save();
           return redirect("/cuenta");
     }

     public function removeProduct(Request $req, $productId) {
        $userId = Auth::user()->id;
        Carritos::where('product_id', $productId)
            ->where('user_id', $userId)
            ->delete();

        return redirect()->route('cart');
    }








    }
