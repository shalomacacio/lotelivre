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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/login', 'HomeController@login')->name('login');
Route::post('/auth', 'HomeController@auth')->name('auth');

Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']], function () {
    Route::get('/logout', 'HomeController@logout')->name('login');
    Route::resource('empreendimentos', 'EmpreendimentosController');
    Route::resource('lotes', 'LotesController');
});
