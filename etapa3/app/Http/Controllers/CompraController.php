<?php

namespace App\Http\Controllers;

use App\Compra;
use App\ProductComprado;
use App\Carritos;
use Auth;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function agregarCompra()
    {
        $compra = new Compra ();
        $compra->user_id = Auth::user()->id;
        $compra->total = 12;
        $compra->save();

        Carritos::where('user_id', Auth::user()->id)->delete();
 
        return redirect()->route('prueba');
    }
}
