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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/showProducts', 'ProductController@showProducts');                                  
    Route::get('/{id}/showProduct', 'ProductController@showProduct');                                  
    Route::get('/home', 'ProductController@home');                                                 
    Route::get('/{id}/showProfile', 'ClientController@showProfile');                                
    Route::get('/categories', 'CategoryController@index');                                          
    Route::get('/categories/{id}/productsCategory', 'CategoryController@productsCategory');                                       
    Route::get('/{id}/editProfile', 'ClientController@editProfile');                                          
    Route::post('/{id}/editProfile', 'ClientController@storeProfile');                             
});   


//----- Admin                                              
Route::group(['middleware' => 'auth', 'admin'], function() {                            
    Route::get('/create', 'ProductController@create');                                              
    Route::post('/create', 'ProductController@store');                                              
    Route::get('/{id}/editProduct', 'ProductController@edit');                                      
    Route::patch('/{id}/editProduct', 'ProductController@update');                                  
    Route::get('/{id}/delete', 'ProductController@destroy');                                       
    Route::get('/showClients', 'AdminController@showClients');                                      
    Route::get('/{id}/showClient', 'AdminController@showClient');                                   
});
