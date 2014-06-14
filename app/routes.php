<?php

/**
 * ------------------------------------------
 * Route constraint patterns
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 前台
 * ------------------------------------------
 */
Route::get('/', ['uses' => 'HomeController@showIndex']);
Route::get('/lists.html', ['uses' => 'HomeController@showList']);
Route::get('/detail/{id}.html', ['uses' => 'HomeController@showDetail']);
Route::get('/billboard/detail/{id}.html', ['uses' => 'BillboardController@showDetail']);

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
	Route::get('upload', array('as' => 'upload', 'uses' => 'AdminController@showUpload'));

	Route::group(['prefix' => 'goods'], function ()
	{
		// 添加商品
		Route::get('/', 'GoodsController@showIndex');

		// 添加商品
		Route::get('create', 'GoodsController@showCreate');

		// 添加商品
		Route::post('create', 'GoodsController@showCreate');

		// 添加商品
		Route::get('edit', 'GoodsController@postGoods');
	});
});

/**
 * ------------------------------------------
 * 登陆
 * ------------------------------------------
 */
Route::group(['prefix' => 'roles'], function()
{
	Route::get('/', 'RolesController@showIndex');
	Route::post('login', 'RolesController@showLogin');
});

