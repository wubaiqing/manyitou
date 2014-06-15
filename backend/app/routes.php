<?php

Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 登陆页
 * ------------------------------------------
 */
Route::get('/', 'SiteController@login');
Route::post('/', 'SiteController@login');
Route::get('logout', array('uses' => 'SiteController@logout'));


/**
 * ------------------------------------------
 * 商品管理
 * ------------------------------------------
 */
Route::group(['prefix' => 'goods', 'before' => 'admin.auth'], function ()
{
	// 商品列表
	Route::get('admin', 'GoodsController@admin');

	// 添加商品
	Route::get('create', 'GoodsController@create');
	Route::post('create', 'GoodsController@create');

	// 修改商品
	Route::get('update/{id}', 'GoodsController@update');
	Route::post('update/{id}', 'GoodsController@update');

	// 删除商品
	Route::get('delete/{id}', 'GoodsController@delete');

	// 上传图片
	Route::post('upload', array('uses' => 'GoodsController@upload'));
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


