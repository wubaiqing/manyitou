<?php

use \Aliyun\OSS\OSSClient;

class GoodsController extends BaseController
{
	protected $layout = 'layouts.admin';

	public function showAdmin()
	{
		$goods = Goods::orderBy('id', 'desc')->paginate(10);
		$this->layout->content = View::make('goods.index', [
			'goods' => $goods
		]);
	}

	public function showCreate()
	{
		$model = new Goods;
		$post = Input::all();

		if (!empty($post)) {
			$model->fill($post);
			$validator = Validator::make($post, Goods::rulesCreate(), ['required' => '属性 :attribute 不能为空.']);
			if ($validator->fails()) {
				return Redirect::to('goods/create')->withInput()->withErrors($validator);
			}

			if ($model->save()) {
				return Redirect::to('goods/admin');
			}

		}
		$this->layout->content = View::make('goods.create');
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

		$size = $file->getSize();
		if ($size == false) {
			$size = filesize($file->getRealPath());
		}
		
		$client->putObject(array(
			'Bucket' => 'myt',
			'Key' => $fileName,
			'Content' => fopen($file->getRealPath(), 'r'),
			'ContentLength' => $size,
		));

		return Response::json([
			'status' => 1,
			'data' => $domain . $fileName
		]);;
	}


}