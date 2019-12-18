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
<<<<<<< HEAD
        $consultaNueva = new Contacto();
        $consultaNueva->name = $req["nombre"];
        $consultaNueva->apellido = $req["apellido"];
        $consultaNueva->email = $req["email"];
        $consultaNueva->consulta = $req["consulta"];
=======
        $consultaNueva = new  Contactos();
        $consultaNueva->name = $req['nombre'];
        $consultaNueva->name = $req['apellido'];
        $consultaNueva->email = $req['email'];
        $consultaNueva->name = $req['consulta'];
>>>>>>> 30a0778f2433a8dd917d2137b7e276985775ac06
        $consultaNueva->save();

        return redirect('/gracias');


}
}
