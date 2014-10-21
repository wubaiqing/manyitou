<?php

/**
 * ------------------------------------------
 * 前台-ID参数匹配规则
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');

/**
 * ------------------------------------------
 * 前台-商品展示前台
 * ------------------------------------------
 */
Route::get('/', ['uses' => 'SiteController@index']);
Route::get('/lists.html', ['uses' => 'SiteController@lists']);
Route::get('/detail/{id}.html', ['uses' => 'SiteController@detail']);

/**
 * ------------------------------------------
 * 前台-公告管理
 * ------------------------------------------
 */
Route::get('/billboard/detail/{id}.html', ['uses' => 'BillboardController@detail']);
Route::get('/billboard/list.html', ['uses' => 'BillboardController@lists']);

/**
 * ------------------------------------------
 * API管理
 * ------------------------------------------
 */
Route::get('/api/uc-business.html', ['uses' => 'ApiController@ucBusiness']);
Route::get('/api/uc-business/cat/{id}.html', ['uses' => 'ApiController@ucBusiness']);
Route::get('/api/uc-business-product.html', ['uses' => 'ApiController@ucBusinessroductc']);
