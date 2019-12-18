<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Newsletter;
use App\Contacto;

class HomeController extends Controller{
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
        $emailNuevo->email = $req['Email'];
        $emailNuevo->save();

        return redirect('/newsletter');

    }

    public function contacto(Request $req)
    {
        $consultaNueva = new Contacto();
        $consultaNueva->name = $req["nombre"];
        $consultaNueva->apellido = $req["apellido"];
        $consultaNueva->email = $req["email"];
        $consultaNueva->consulta = $req["consulta"];
        $consultaNueva->save();

        return redirect('/gracias');


}
}
