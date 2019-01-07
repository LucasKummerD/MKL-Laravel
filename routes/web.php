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


Auth::routes();

Route::get('/', 'HomeController@index')->name('master'); 

//----- Cliente                                                                                     
Route::group(['prefix' => 'client', 'middleware' => 'auth'], function() {
    Route::get('/showProducts', 'ProductController@showProducts');                                  //Funciona
    Route::get('/{id}/showProduct', 'ProductController@showProduct');                                  
    Route::get('/home', 'ProductController@index');                                                 //Funciona-> pero cuando le puse el middleware dejo de funcionar!! 
    Route::get('/{id}/showProfile', 'ClientController@showProfile');                                //No funciona.
    Route::get('/categories', 'CategoryController@index');                                          //Funciona
    Route::get('/categories/{id}/productsCategory', 'CategoryController@productsCategory');         //Funciona                              
    Route::get('/editProfile', 'ClientController@editProfile');                                     //Vista Formulario datos     
    Route::post('/{id}/editProfile', 'ClientController@storeProfile');                              //Para guardar los cambios en la base de datos
});   


//----- Admin                                              
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {                            //Funciona
    Route::get('/create', 'ProductController@create');                                              //Funciona
    Route::post('/create', 'ProductController@store');                                              //Funciona
    Route::get('/{id}/editProduct', 'ProductController@edit');                                      //No funciona
    Route::patch('/{id}/editProduct', 'ProductController@update');                                  //No funciona. No genera el update
    Route::get('/{id}/delete', 'ProductController@destroy');                                        //No esta armada
    Route::get('/showClients', 'AdminController@showClients');                                      //Funciona
    Route::get('/{id}/showClient', 'AdminController@showClient');                                   //funciona
});


//pasar los navbar a app en el condicional! como se podria hacer para que los navbar de admin y los nav del user ponerlos en  app
//Falta el Carrito
//Va a haber que poner todas las categorias y con un middleware que le agregue cosas a el admin y listo
//dar una pulida al front