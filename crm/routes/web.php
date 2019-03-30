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

//客户端服务
Route::any('servicee/add','ServiceeController@add');
Route::any('servicee/adddo','ServiceeController@adddo');
Route::any('servicee/list','ServiceeController@list');
Route::any('servicee/del/{id}','ServiceeController@del');
Route::any('servicee/upd/{id}','ServiceeController@upd');
Route::any('servicee/update','ServiceeController@update');
