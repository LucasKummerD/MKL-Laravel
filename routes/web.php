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

/* Route::view('/', 'master')->middleware('auth'); */                                               //Quiero que me loguee a master, pero loguea a login
Route::get('/master', 'HomeController@index')->name('master'); 

//----- Cliente                                                                                     //Ver css con Lucas
/* Route::groupe(['prefix' => 'admin', 'middleware' => 'auth'], function() { */
    Route::get('client/showProducts', 'ClientController@index')->name('perfil');                    //Funciona
    Route::get('client/{id}/showProduct', 'ClientController@showProduct');                          //Funciona
    Route::get('client/{id}/delete', 'ClientController@destroy');                                   //Para el carrito eliminar productos
/* }); */    


//----- Admin                                              
/* Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() { */                      //Funciona. No entiendo que es el function
    Route::get('/showProducts', 'AdminController@index')->name('admin');                            //Funciona
    Route::get('/{id}/showProduct', 'AdminController@showProduct');                                 //Funciona
    Route::get('/create', 'AdminController@create')->name('admin_create');                          //Funciona
    Route::post('/create', 'AdminController@store');                                                //Funciona
    Route::get('/{id}/editProduct', 'AdminController@edit');                                        //Funciona
    Route::patch('/{id}/editProduct', 'AdminController@update');                                    //No funciona. No genera el update
    Route::get('/{id}/delete', 'AdminController@destroy');                                          //No funciona
    Route::get('/showClients', 'AdminController@showClients');                                      //Funciona
    Route::get('/{id}/showClient', 'AdminController@showClient');                                   //Funciona
/* }); */


//pasar los navbar a app en el condicional! como se podria hacer para que los navbar de admin y los nav del user ponerlos en  app

