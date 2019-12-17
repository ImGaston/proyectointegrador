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


Route::get('/', function() {
    return view('home');
});



//Route::get('/producto/{productId}', 'ProductController@index')->name('product');

Auth::routes();
Route::view('/admin', 'admin')->middleware('admin')->name('admin');

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


Route::get('/newsletter', function() {
    return view('newsletter');
});

/* NEWSLETTER */
Route::post('/', 'HomeController@newsletter');

Route::post('/gracias', 'HomeController@contacto');

Route::get('/productos-todos', 'ProductosController@index');

Route::get('/productos-todos/search', 'ProductosController@search');

Route::get('/productos-borrar', 'ProductosController@indexborrar');

Route::get('/productos', 'CategoryController@index');

Route::get('/cuenta', 'UsuariosController@carrito');

Route::get('/perfil_datos', 'UsuariosController@index');


Route::get('/altaproducto', 'ProductosController@list');

Route::post('/altaproducto', 'ProductosController@altaproducto');

Route::get('/altacategoria', 'CategoryController@list');

Route::post('/altacategoria', 'CategoryController@altacategoria');

Route::get('/altaprendas', 'PrendasController@list');

Route::post('/altaprendas', 'PrendasController@altaprendas');

Route::get('/altatalles', 'TallesController@list');

Route::post('/altatalles', 'TallesController@altatalles');


Route::get('/productos/{id}', 'ProductosController@detail');

Route::get('/productos-borrar/{id}', 'ProductosController@detailBorrar');

Route::post('/agregarAlCarrito', 'CarritosController@agregarAlCarrito');

Route::get('/{categorySlug}', 'CategoryController@detail')->name('category');




Route::post('/borrarproducto', 'ProductosController@borrarproducto');

Route::get('/borrarproducto', 'ProductosController@borrarproducto');

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
