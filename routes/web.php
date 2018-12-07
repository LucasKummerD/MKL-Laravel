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

Route::get('/', function () {
    return view('master');  
});

Auth::routes();

Route::get('/master', 'HomeController@index')->name('master'); 

//----- Cliente

Route::get('/home', 'ClientController@index')->name('perfil');
Route::get('/productos', 'ClientController@showProducts')->name('productos');
Route::get('/productos/{id}', 'ClientControler@show')->name('producto');


//----- Admin                                              

Route::get('/admin/showProducts', 'AdminController@index')->name('admin');              //Funciona
Route::get('/admin/{id}/showProduct', 'AdminController@showProduct');                   //Funciona
Route::get('/admin/create', 'AdminController@create')->name('admin_create');            //Funciona
Route::post('/admin/create', 'AdminController@store');                                  //Funciona
Route::get('/admin/{id}/editProduct', 'AdminController@edit');                          //Funciona
Route::patch('/admin/{id}/editProduct', 'AdminController@update');                      //No funciona. NO genera el update
Route::get('/admin/{id}/delete', 'AdminController@destroy');                            //No funciona
Route::get('/admin/showClients', 'AdminController@showClients');                        //Funciona
Route::get('/admin/{id}/showClient', 'AdminController@showClient');                     //Funciona

//pasar los navbar a app en el condicional! como se podria hacer para que los navbar de admin y los nav del user ponerlos en  app
