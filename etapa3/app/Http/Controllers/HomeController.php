<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Newsletter;

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
}
