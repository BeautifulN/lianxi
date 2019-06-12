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


//考试
//Route::get('log', 'Kaoshi\LoginController@log');  // 登录展示
//Route::post('login', 'Kaoshi\LoginController@login');  //登录执行
//Route::get('index', 'Kaoshi\GoodsController@index');  //展示
//Route::get('lis', 'Kaoshi\GoodsController@lis');  //商品展示
//Route::get('add', 'Kaoshi\GoodsController@add');  //商品添加展示
//Route::post('add_goods', 'Kaoshi\GoodsController@add_goods');  //商品添加执行
//Route::post('add_goods_do', 'Kaoshi\GoodsController@add_goods_do');  //商品添加执行
//Route::get('updata', 'Kaoshi\GoodsController@updata');  //修改展示
//Route::post('updata_do', 'Kaoshi\GoodsController@updata_do');  //修改执行
//Route::get('del', 'Kaoshi\GoodsController@del');  //删除

//phpinfo
Route::get('phpinfo', 'Login\LoginController@phpinfo');




Route::get('chat', 'Demo\DemoController@chat');

