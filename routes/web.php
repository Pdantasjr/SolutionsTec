<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

/*
*Controlador de exibição das páginas do site
*/

Route::get('/', 'WebController@index')->name('/');
Route::get('/sobre-nos', 'WebController@aboutUs')->name('sobre-nos');
Route::get('/contato', 'WebController@contact')->name('contato');
Route::get('/idealizador', 'WebController@creator')->name('idealizador');

/*
*Controlador de envio de e-mails
*/

Route::post('/send-mail', 'WebController@sendMail')->name('send-mail');

/*
*Controlador do Blog
*/

Route::get('/blog', 'Blog\blogController@index')->name('blog');
Route::get('/blog/{uri}', 'Blog\blogController@show')->name('article');

/*
*Controlador de Jobs da empresa
*/

Route::get('/portfolio', 'Jobs\PortfolioController@index')->name('portfolio');
Route::get('/jobs/{uri}', 'Jobs\PortfolioController@show')->name('job');




