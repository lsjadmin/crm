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
//首页
Route::get('/','LookeController@show');
//登陆
Route::get('looke/index','LookeController@index');

Route::post('looke/code','LookeController@code');
Route::post('looke/email','LookeController@email');
