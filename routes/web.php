<?php

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
\Auth::routes();


//Guest

Route::get('/', 'HomeController@index')->name('home');
Route::get('/artikel', 'ArtikelController@index')->name('home.artikel');
Route::get('/artikel/{slug}', 'ArtikelController@artikel')->name('artikel');
Route::get('/artikel/{date}/{slug}', 'ArtikelController@artikelwithdate')->name('artikelwithdate');

//Admin
Route::prefix("/admin")->group(function($app){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/user', 'Admin\UserController@index')->name('admin.user');
    Route::get('/client', 'Admin\ClientController@index')->name('admin.client');
    Route::get('/artikel', 'Admin\ArticleController@index')->name('admin.artikel');
    Route::get('/halaman', 'Admin\HalamanController@index')->name('admin.halaman');
});

//Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Import

