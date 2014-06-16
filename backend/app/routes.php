<?php

/**
 * ------------------------------------------
 * ID参数匹配规则
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 登陆、退出、缓存
 * ------------------------------------------
 */
Route::any('/', ['before' => 'admin.isLogin', 'uses' => 'SiteController@login']);
Route::get('logout', ['uses' => 'SiteController@logout']);
Route::get('clearCache', ['before' => 'admin.auth' ,'uses' => 'SiteController@clearCache']);

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
	Route::any('create', 'GoodsController@create');

	// 修改商品
	Route::any('update/{id}', 'GoodsController@update');

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
	// 商品列表
	Route::get('admin', 'BillboardController@admin');

	// 添加公告
	Route::any('create', 'BillboardController@create');

	// 修改公告
	Route::any('update/{id}', 'BillboardController@update');

	// 删除公告
	Route::get('delete/{id}', 'BillboardController@delete');
});
