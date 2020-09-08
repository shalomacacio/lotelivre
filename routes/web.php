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

use App\Http\Controllers\AuthController;

Route::get('/', 'HomeController@home')->name('home');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/auth', 'AuthController@auth')->name('auth');


Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']], function () {
    Route::get('/logout', 'AuthController@logout')->name('login');
    Route::resource('empreendimentos', 'EmpreendimentosController');
    Route::resource('lotes', 'LotesController');
    Route::resource('banner-rotativos', 'BannerRotativosController');
    Route::resource('banner-videos', 'BannerVideosController');

});
