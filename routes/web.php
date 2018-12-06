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

Route::get('/admin', 'AdminController@index')->name('admin');                           //Funciona
Route::get('/admin/{id}/showProduct', 'AdminController@showProduct');                   //Funciona 
Route::get('/admin/create', 'AdminController@create')->name('admin_create');            //Funciona
Route::post('/admin/create', 'AdminController@store');                                  //No funciona. No carga producto
Route::get('/admin/{id}/edit', 'AdminController@edit');                                 //No funciona
Route::get('/admin/{id}/edit', 'AdminController@update');                               //No funciona. No hace el Update, como sacar requirer para este caso!
Route::get('/admin/{id}/delete', 'AdminController@destroy');                            //No funciona
Route::get('/admin/showUsers', 'AdminController@showClients');                          //Funciona
Route::get('/admin/showUser/{id}', 'AdminController@showClient');                       //No Funciona. Cuando entra, tira un error!

//pasar los navbar a app en el condicional!
