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
Route::get("/hello","TestController@hello");
Route::get("/wx/token","TestController@wxgettoken");
Route::get("/wx/token2","TestController@wxgettoken2");
Route::get("/wx/token3","TestController@wxgettoken3");