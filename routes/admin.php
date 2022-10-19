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


Route::prefix("joo")->group(function (){

 Route::get("1",function (){
     echo 123;
 });

    Route::get("2",function (){
        echo 456;
    });

    Route::get("3",function (){
        echo 789;
    });

});
