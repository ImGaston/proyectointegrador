<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carritos;
use App\Product;
use App\Category;
use Auth;

class CarritosController extends Controller
{

    public function agregarAlCarrito(Request $req)
    {
        $carritonuevo = new Carritos();
        $carritonuevo->user_id = $req["user_id"];
        $carritonuevo->product_id = $req["product_id"];
        $carritonuevo->name = $req["name"];
        $carritonuevo->precio = $req["precio"];
        $carritonuevo->image_url = $req["image_url"];
        $carritonuevo->save();

        return redirect("/cuenta");
    }

    public function borrarCarrito(Request $req)
    {
        $id = $req["id"];
        $productId = Carritos::find($id);
        $productId->delete();

        return redirect("/cuenta");
    }








    }
