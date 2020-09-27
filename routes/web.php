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

Route::get('/', 'HomeController@home')->name('site.home');
Route::get('/contato', 'HomeController@contato')->name('site.contato');
Route::get('/empreendimentos', 'HomeController@empreendimentos')->name('site.empreendimentos');
Route::get('/empreendimentos/{id}', 'HomeController@empreendimentoShow')->name('site.empreendimento.show');






Route::get('/login', 'AuthController@login')->name('login');
Route::post('/auth', 'AuthController@auth')->name('auth');

Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']], function () {
    Route::resource('lotes', 'LotesController');
    Route::get('/logout', 'AuthController@logout')->name('login');
    Route::resource('empreendimentos', 'EmpreendimentosController');
    Route::resource('banner-rotativos', 'BannerRotativosController');
    Route::resource('banner-promocionals', 'BannerPromocionalsController');
    Route::resource('empreendimento-images', 'EmpreendimentoImagesController');
    Route::resource('empreendimento-destaques', 'EmpreendimentoDestaquesController');
});
