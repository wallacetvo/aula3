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

Route::get('/teste', 'TesteController@index')->name('teste');
Route::post('/testepost', 'TesteController@posta')->name('post');
Route::put('/testeput', 'TesteController@put')->name('put');
Route::patch('/testepatch', 'TesteController@patch')->name('patch');
Route::delete('/testedelete', 'TesteController@delete')->name('delete');
