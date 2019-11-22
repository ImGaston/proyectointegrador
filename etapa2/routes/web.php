<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', function() {
    return view('home');
});

Route::get('/nosotros', function() {
    return view('nosotros');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/mayoristas', function() {
    return view('mayoristas');
});

Route::get('/gracias', function() {
    return view('gracias');
});

Route::get('/registro', function() {
    return view('registro');
});

Route::post('/registro', function() {
    return view('registro');
});
Route::get('/productos', function(){
  return view('productos');
})

Route::get('/productos/{id}', 'ProductsController@detail');
class ProductsController extends Controller {
  public function detail($id) {
    return view('productos-detail');
  }
}
