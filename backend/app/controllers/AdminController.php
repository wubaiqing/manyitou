<?php

use Aliyun\OSS\OSSClient;

class AdminController extends BaseController
{
	protected $layout = 'layouts.admin';

	public function showIndex()
	{
		$this->layout->content = View::make('admin.goods-list');
	}

	public function showLogout()
	{
		Auth::logout();
 		return Redirect::to('/');
	}



}
