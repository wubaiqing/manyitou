<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/**
 * ------------------------------------------
 * Route model binding
 * ------------------------------------------
 */
Route::model('goods', 'Goods');

/**
 * ------------------------------------------
 * Route constraint patterns
 * ------------------------------------------
 */
Route::pattern('id', '[0-9]+');


/**
 * ------------------------------------------
 * Frontend
 * ------------------------------------------
 */
Route::get('/', ['uses' => 'HomeController@showIndex']);
Route::get('/lists.html', ['uses' => 'HomeController@showList']);
Route::get('/detail/{id}.html', ['uses' => 'HomeController@showDetail']);
Route::get('/billboard/detail/{id}.html', ['uses' => 'BillboardController@showDetail']);


/**
 * ------------------------------------------
 * Backend
 * ------------------------------------------
 */
Route::group(array('prefix' => 'admin', 'before' => 'admin.auth'), function()
{
	Route::get('/', 'AdminController@showIndex');
	Route::controller('admin', 'AdminController');
});

/**
 * ------------------------------------------
 * Roles
 * ------------------------------------------
 */
Route::get('roles/login', 'RolesController@showLogin');

