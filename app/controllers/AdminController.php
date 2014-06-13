<?php

require_once __DIR__ . '/../extension/aliyun.php';
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

	public function showUpload()
	{
		$client = OSSClient::factory(array(
			'AccessKeyId' => 'OdJ4QqumwkDsQB9G',
			'AccessKeySecret' => '3ZVXBVEgDLZcYjcbKywQbn1nYpWInk'
		));
		return $client;
	}

}
