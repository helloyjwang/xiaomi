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

Route::get('captch','Admin\LoginController@captch');
// 后台登录页面
Route::get('/login','Admin\LoginController@login');
// 处理登录页面的数据
Route::post('/admin/dologin','Admin\LoginController@dologin');


Route::group(['middleware'=>'login'], function(){
	// 后台首页
	Route::get('/admin','Admin\IndexController@index');
	// 友情链接
	Route::resource('/admin/friend','Admin\FriendController');
	// 分区管理
	Route::resource('/admin/partition','Admin\PartitionController');
	// 类别管理
	Route::resource('/admin/type','Admin\TypeController');
	// 商品管理
	Route::resource('/admin/goods',"Admin\GoodsController");
	// 轮播图管理
	Route::resource('/admin/rotation',"Admin\RotationController");
	// 退出登录
	Route::get('/logout','Admin\LoginController@logout');
	// 修改头像
	
	// 修改密码
	
	// 网站配置
	Route::get('/config','Admin\ConfiggurationController@index');
});