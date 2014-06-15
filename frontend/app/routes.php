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
Route::get('/', ['uses' => 'SiteController@showIndex']);
Route::get('/lists.html', ['uses' => 'SiteController@showList']);
Route::get('/detail/{id}.html', ['uses' => 'SiteController@showDetail']);
Route::get('/billboard/detail/{id}.html', ['uses' => 'BillboardController@showDetail']);
