<?php

use \Aliyun\OSS\OSSClient;

class GoodsController extends BaseController
{
	protected $layout = 'layouts.admin';


	/**
	 * 自定义验证消息
	 * @var array
	 */
	protected $validatorMessages = array(
		'logo.required' => '请上传LOGO图片',
		'rules.required' => '请填写规则',
		'platform_name.required' => '请填写平台名称',
		'playform_sort_desc.required' => '请填写平台描述（首页）',
		'playform_desc.required' => '请填写平台描述（详情）',
		'playform_url.required' => '请填写平台URL',
		'claim_image.required' => '请上传展示广告位图片',
		'price_text.required' => '请填写价格',
	);

	public function showAdmin()
	{
		$goods = Goods::where('status', '=', '1')->orderBy('id', 'desc')->paginate(10);
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
			$validator = Validator::make($post, Goods::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('goods/create')->withInput()->withErrors($validator);
			}

			if ($model->save()) {
				return Redirect::to('goods/admin');
			}

		}
		$this->layout->content = View::make('goods.create');
	}

	public function showUpdate($id)
	{
		$model = Goods::find($id);
		$post = Input::all();

		if (!empty($post)) {
			$model->fill($post);
			$validator = Validator::make($post, Goods::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('goods/create')->withInput()->withErrors($validator);
			}

			if ($model->save()) {
				return Redirect::to('goods/admin');
			}

		}
		$this->layout->content = View::make('goods.update')->with(compact('model', $model));
	}

	public function showDelete($id)
	{
		$model = Goods::find($id);
		$model->status = 0;
		if ($model->save()) {
			return Redirect::to('goods/admin');
		}
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