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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----- Cliente

Route::get('/perfil', 'ClientController@index')->name('perfil');
Route::get('/perfil/producto', 'ClientControler@show');


//----- Admin

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/create', 'AdminController@create');
Route::post('/admin/create', 'AdminController@store');
Route::get('/admin/edit', 'AdminController@edit');
Route::get('/admin/delete', 'AdminController@destroy');