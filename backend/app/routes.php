<?php

/**
 * ------------------------------------------
 * Route constraint patterns
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 后台首页
 * ------------------------------------------
 */
Route::group(['prefix' => 'admin', 'before' => 'admin.auth'], function()
{
	// 后台首页
	Route::get('/', 'AdminController@showIndex');
	Route::get('logout', array('as' => 'logout', 'uses' => 'AdminController@showLogout'));
});

/**
 * ------------------------------------------
 * 登陆
 * ------------------------------------------
 */
Route::get('/', 'SiteController@showLogin');
Route::post('/', 'SiteController@showLogin');
Route::get('logout', array('as' => 'logout', 'uses' => 'SiteController@showLogout'));


/**
 * ------------------------------------------
 * 商品管理
 * ------------------------------------------
 */
Route::group(['prefix' => 'goods', 'before' => 'admin.auth'], function ()
{
	// 添加商品
	Route::get('create', 'GoodsController@showCreate');

	// 添加商品POST
	Route::post('create', 'GoodsController@showCreate');

	// 添加商品POST
	Route::get('delete/{id}', 'GoodsController@showDelete');


	// 添加商品POST
	Route::get('update/{id}', 'GoodsController@showUpdate');

	// 添加商品POST
	Route::post('update/{id}', 'GoodsController@showUpdate');




	// 商品列表
	Route::get('admin', 'GoodsController@showAdmin');

	// 上传图片
	Route::post('upload', array('as' => 'upload', 'uses' => 'GoodsController@showUpload'));
});

/**
 * ------------------------------------------
 * 公告管理
 * ------------------------------------------
 */
Route::group(['prefix' => 'billboard', 'before' => 'admin.auth'], function ()
{
	// 添加商品
	Route::get('create', 'BillboardController@showCreate');

	// 添加商品POST
	Route::post('create', 'BillboardController@showCreate');

	// 添加商品POST
	Route::get('update/{id}', 'BillboardController@showUpdate');

	// 添加商品POST
	Route::post('update/{id}', 'BillboardController@showUpdate');

	// 删除get
	Route::get('delete/{id}', 'BillboardController@showDelete');

	// 商品列表
	Route::get('admin', 'BillboardController@showAdmin');
});


