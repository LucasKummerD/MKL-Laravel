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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----- Cliente

Route::get('/perfil', 'ClientController@index')->name('perfil');
Route::get('/perfil/producto', 'ClientControler@show');


//----- Admin

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/show', 'AdminController@show')->name('admin_show');  //hacer que muestre solo el prpoducto tmb {id}
Route::get('/admin/create', 'AdminController@create')->name('admin_create');
Route::post('/admin/create', 'AdminController@store');  //falta este
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::get('/admin/{id}/delete', 'AdminController@destroy');