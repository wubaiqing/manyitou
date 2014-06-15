<?php

/**
 * ------------------------------------------
 * Route constraint patterns
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 后台
 * ------------------------------------------
 */
Route::group(['prefix' => 'admin', 'before' => 'admin.auth'], function()
{
	// 后台首页
	Route::get('/', 'AdminController@showIndex');
	Route::get('logout', array('as' => 'logout', 'uses' => 'AdminController@showLogout'));
	Route::post('upload', array('as' => 'upload', 'uses' => 'AdminController@showUpload'));

});

Route::group(['prefix' => 'goods', 'before' => 'admin.auth'], function ()
{
	// 添加商品
	Route::get('admin', 'GoodsController@showAdmin');

	// 添加商品
	Route::get('create', 'GoodsController@showCreate');

	// 添加商品
	Route::post('create', 'GoodsController@showCreate');

	// 添加商品
	Route::get('edit', 'GoodsController@postGoods');
});

/**
 * ------------------------------------------
 * 登陆
 * ------------------------------------------
 */
Route::get('/', 'SiteController@showLogin');
Route::post('/', 'SiteController@showLogin');
Route::get('logout', array('as' => 'logout', 'uses' => 'SiteController@showLogout'));
