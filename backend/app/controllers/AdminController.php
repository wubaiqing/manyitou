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

	public function showUpload()
	{
		$file = Input::file('file');
		$client = OSSClient::factory(array(
			'AccessKeyId' => 'OdJ4QqumwkDsQB9G',
			'AccessKeySecret' => '3ZVXBVEgDLZcYjcbKywQbn1nYpWInk',
		));

		$domain = 'http://myt.oss-cn-hangzhou.aliyuncs.com/';
		$prefixImage = 'images/';
		$imagePath = date('Y/m/d/');
		$fileName = $prefixImage . $imagePath . '/' . uniqid() . '.' . $file->getClientOriginalExtension();

		$client->putObject(array(
			'Bucket' => 'myt',
			'Key' => $fileName,
			'Content' => fopen($file->getRealPath(), 'r'),
			'ContentLength' => $file->getSize(),
		));

		return Response::json([
			'status' => 1,
			'data' => $domain . $fileName
		]);;
	}

}
