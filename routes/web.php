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

// Route::get('/', 'HomeController@home')->name('site.home');
Route::get('/', function(){ return view('construcao');})->name('site.home');
Route::get('/landingpage', function(){ return view('landingpage');} )->name('site.landing');
Route::get('/ajaxCidades', 'HomeController@ajaxCidades')->name('site.ajaxCidades');
Route::get('/contato', 'HomeController@contato')->name('site.contato');
Route::get('/blogs', 'HomeController@blogs')->name('site.blogs');
Route::get('/blogs/{id}', 'HomeController@blogShow')->name('site.blog.show');
Route::get('/empreendimentos', 'HomeController@empreendimentos')->name('site.empreendimentos');
Route::get('/empreendimentos/{id}', 'HomeController@empreendimentoShow')->name('site.empreendimento.show');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/auth', 'AuthController@auth')->name('auth');

Route::group([ 'prefix' => 'admin' ,'middleware' => ['auth']], function () {
  Route::get('/logout', 'AuthController@logout')->name('login');

    Route::resource('lotes', 'LotesController');
    Route::resource('blogs', 'BlogsController');
    Route::resource('cidades', 'CidadesController');
    Route::resource('banner-videos', 'BannerVideosController');

    Route::resource('banner-rotativos', 'BannerRotativosController');
    Route::resource('banner-promocionals', 'BannerPromocionalsController');

    Route::resource('empreendimentos', 'EmpreendimentosController');
    Route::resource('empreendimento-itens', 'EmpreendimentoItensController');
    Route::resource('empreendimento-images', 'EmpreendimentoImagesController');
    Route::resource('empreendimento-galeria', 'EmpreendimentoGaleriasController');
    Route::resource('empreendimento-destaques', 'EmpreendimentoDestaquesController');
    Route::resource('empreendimento-depoimentos', 'EmpreendimentoDepoimentosController');

});
