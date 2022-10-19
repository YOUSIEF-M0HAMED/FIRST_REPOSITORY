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



Route::get("a5eran","MyController@welcome");

Route::get("info/{name}/{adg
e}/{phone}","MyController@info");


Route::get("hi","MyControllers\controller2@SayHi");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
