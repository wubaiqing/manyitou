<?php

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
		$post = Input::all();
		$post = Input::except('_token');

		if (!empty($post)) {
			$model = new Goods;
			foreach ($post as $key => $value) {
				$model->setAttribute($key, $value);
			}
			if ($model->save()) {
				return Redirect::to('goods/admin');
			}

		}
		$this->layout->content = View::make('goods.create');
	}

	public function postGoods()
	{
		var_dump(Input::all());
		exit;

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