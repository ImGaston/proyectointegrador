<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritos;
use Auth;

class CarritosController extends Controller
{

  public function index() {
      return view('cart');
  }

     public function agregarAlCarrito(Request $req, $productId){

       $userId = Auth::user()->id;
       $productInCart = Carritos::where('product_id', $productId)
           ->where('user_id', $userId)
           ->first();

       if ($productInCart) {
           $productInCart->count = $productInCart->count + $req->count;
       } else {
           $productInCart = new Carritos();
           $productInCart->product_id = $req->product_id;
           $productInCart->count = $req->count;
           $productInCart->user_id = $userId;
       }

       $productInCart->save();
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
