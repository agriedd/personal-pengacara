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


//Guest

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::get('/artikel/{slug}', 'ArtikelController@artikel')->name('artikel');
Route::get('/artikel/{date}/{slug}', 'ArtikelController@artikelwithdate')->name('artikelwithdate');

//Admin
Route::get('/admin', 'AdminController@index')->name('admin');

//Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Import

Auth::routes();
