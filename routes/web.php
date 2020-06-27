<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();


//Guest

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('/artikel')->group(function($app){
    Route::get('/', 'ArtikelController@index')->name('home.artikel');
    Route::get('/{slug}', 'ArtikelController@artikel')->name('artikel');
    Route::get('/{id}/{slug}', 'ArtikelController@artikel')->name('artikel');
    Route::get('/{date}/{slug}', 'ArtikelController@artikelwithdate')->name('artikelwithdate');
});
Route::prefix('/galeri')->group(function($app){
    Route::get('/', 'GaleriController@index')->name('home.galeri');
});

Route::get('/galeri/{date}/{slug}', 'ArtikelController@artikelwithdate')->name('artikelwithdate');

//Admin
Route::prefix("/admin")->group(function($app){
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/user', 'Admin\UserController@index')->name('admin.user');
    Route::get('/kunjungan', 'Admin\KunjunganController@index')->name('admin.kunjungan');
    Route::prefix("/artikel")->group(function($app){
        Route::get('/{id}', 'Admin\ArticleController@show')->name('admin.artikel.show');
        Route::get('/', 'Admin\ArticleController@index')->name('admin.artikel');
    });
    Route::get('/halaman', 'Admin\HalamanController@index')->name('admin.halaman');
    Route::get('/pengaturan', 'Admin\PengaturanController@index')->name('admin.pengaturan');
    Route::prefix('/gambar')->group(function($app){
        Route::get('/', 'Admin\GambarController@index')->name('admin.gambar');
        Route::post('/', 'Admin\GambarController@upload')->name('admin.gambar.upload');
    });
    Route::prefix('/album')->group(function($app){
        Route::get('/', 'Admin\AlbumController@index')->name('admin.album');
        Route::get('/{album}', 'Admin\AlbumController@info')->name('admin.album.info');
        Route::post('/{album}', 'Admin\AlbumController@tambahGaleri')->name('admin.album.galeri.tambah');
    });
    Route::prefix('/bahan-hukum')->group(function($app){
        Route::get('/', 'Admin\BahanHukumController@index')->name('admin.bahan.hukum');
        // Route::get('/{album}', 'Admin\AlbumController@info')->name('admin.album.info');
        // Route::post('/{album}', 'Admin\AlbumController@tambahGaleri')->name('admin.album.galeri.tambah');
    });
});

//Api
Route::prefix("/api")->group(function($app){
    Route::post('artikel/vote/{artikel}', 'Api\ArtikelController@updateVote')->name('artikel.vote');
    Route::resource('artikel', 'Api\ArtikelController');
    Route::resource('album', 'Api\AlbumController');
    Route::resource('galeri', 'Api\GaleriController');
    Route::resource('kunjungan', 'Api\KunjunganController');
});

//Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//Import

