<?php
/**
 * 满意投后台商品管理
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2013 今天值得买
 * @since 1.0
 */

use \Aliyun\OSS\OSSClient;

class GoodsController extends BaseController
{
	/**
	 * @var string 继承master视图
	 */
	protected $layout = 'layouts.master';

	/**
	 * @var array 自定义验证信息
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

	/**
	 * 商品管理
	 */
	public function admin()
	{
		// 在售状态，ID倒叙
		$goods = Goods::where('status', '=', '1')->orderBy('id', 'desc')->paginate(10);
		$this->layout->content = View::make('goods.index', [
			'goods' => $goods
		]);
	}

	/**
	 * 商品添加
	 */
	public function create()
	{
		$model = new Goods;

		$post = Input::all();
		if (!empty($post)) {

			// 填充数据
			$model->fill($post);

			// 验证数据
			$validator = Validator::make($post, Goods::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('goods/create')->withInput()->withErrors($validator);
			}

			// 保存
			if ($model->save()) {
				return Redirect::to('goods/admin');
			}
		}

		$this->layout->content = View::make('goods.create');
	}

	/**
	 * 商品修改
	 * @param int $id 商品ID
	 */
	public function update($id)
	{
		// 获取商品
		$model = Goods::find($id);

		$post = Input::all();
		if (!empty($post)) {

			// 数据填充
			$model->fill($post);

			// 验证数据
			$validator = Validator::make($post, Goods::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('goods/create')->withInput()->withErrors($validator);
			}

			// 保存
			if ($model->save()) {
				return Redirect::to('goods/admin');
			}
		}

		$this->layout->content = View::make('goods.update')->with(compact('model', $model));
	}

	/**
	 * 删除商品
	 */
	public function delete($id)
	{
		// 获取商品
		$model = Goods::find($id);

		// 改变状态
		$model->status = 0;

		// 保存
		if ($model->save()) {
			return Redirect::to('goods/admin');
		}
	}

	/**
	 * 使用阿里云-云存储上传商品图片
	 */
	public function upload()
	{
		// 获取上传的文件
		$file = Input::file('file');

		// 阿里云Key
		$client = OSSClient::factory(array(
			'AccessKeyId' => Config::get('workbench.accessKeyId'),
			'AccessKeySecret' => Config::get('workbench.accessKeySecret')
		));

		// 阿里云上传域名
		$domain = 'http://myt.oss-cn-hangzhou.aliyuncs.com/';

		// 图片地址前缀
		$prefixImage = 'images/';

		// 图片路径年月日
		$imagePath = date('Y/m/d/');

		// 上传文件路径+名称
		$fileName = $prefixImage . $imagePath . '/' . uniqid() . '.' . $file->getClientOriginalExtension();

		// 获取上传文件大小
		$size = $file->getSize();
		if ($size == false) {
			$size = filesize($file->getRealPath());
		}

		// 推送文件
		$client->putObject(array(
			'Bucket' => 'myt',
			'Key' => $fileName,
			'Content' => fopen($file->getRealPath(), 'r'),
			'ContentLength' => $size,
		));

		// 返回数据
		return Response::json([
			'status' => 1,
			'data' => $domain . $fileName
		]);;
	}


}