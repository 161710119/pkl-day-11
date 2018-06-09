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
Route::get('cek', function () {
    return view('layouts.admin');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function(){
    Route::resource('/merks','MerkController');
    Route::resource('/tipes','TipeController');
    Route::resource('/kategoris','KategoriController');
    Route::resource('/mobils','MobilController');
    Route::resource('/promos','PromoController');
    Route::resource('/members','MemberController');
});


//Route::resource('/merks', 'MerkController');
//Route::resource('/tipes', 'TipeController');
//Route::resource('/kategoris', 'KategoriController');