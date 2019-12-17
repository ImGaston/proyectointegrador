<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Newsletter;
use App\Contacto;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();

        return view('home', [
            'categories' => $categories
        ]);
    }

    public function newsletter(Request $req)
    {
        $emailNuevo = new  Newsletter();
        $emailNuevo->email = $req['email'];
        $emailNuevo->save();

        return redirect('/');

    }

    public function contacto(Request $req)
    {
        $consultaNueva = new  Contactos();
        $consultaNueva->name = $req["nombre"];
        $consultaNueva->name = $req["apellido"];
        $consultaNueva->email = $req['email'];
        $consultaNueva->name = $req["consilta"];
        $consultaNueva->save();

        return redirect('/gracias');


}
