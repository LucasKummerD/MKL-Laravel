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
    Route::get('client/home', 'ClientController@index');                                            //Funciona
    
    Route::get('client/{id}/showProfile', 'ClientController@showProfile');                          //Preguntar a Rodo y terminar de armarlo que tenga boton de modificar datos! 
    Route::get('client/showProducts', 'ClientController@index')->name('products');                  //Funciona
    Route::get('client/{id}/showProduct', 'ClientController@showProduct');                          //Funciona
    Route::get('client/editProfile', 'ClientController@editProfile');                          //Vista Formulario datos     
    Route::post('client/{id}/editProfile', 'ClientController@storeProfile');                        //Para guardar los cambios en la base de datos
    Route::get('client/{id}/delete', 'ClientController@destroy');
/* }); */    


//----- Admin                                              
/* Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() { */                      //Funciona. No entiendo que es el function
    Route::get('/home', 'AdminController@index');
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

