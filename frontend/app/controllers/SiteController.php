<?php
/**
 * 前台-商品展示
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class SiteController extends BaseController
{
	/**
	 * @var string 继承master视图
	 */
	protected $layout = 'layouts.master';

	/**
	 * 首页
	 */
	public function index()
	{
		// 商品
		$items = Goods::getIndex();

		// 商品翻页
		$goods = Paginator::make($items['data'], $items['total'], $items['per_page']);

		// 公告
		$billboard = Billboard::getIndex();

		$this->layout->content = View::make('site.index', [
			'goods' => $goods,
			'billboard' => $billboard
		]);

	}

	/**
	 * 首页列表页
	 */
	public function lists()
	{
		// 商品列表
		$items = Goods::getIndex();

		// 商品列表翻页
		$goods = Paginator::make($items['data'], $items['total'], $items['per_page']);

		$this->layout->content = View::make('site.list', [
			'goods' => $goods
		]);
	}

	/**
	 * 详情页
	 * @param int $id 商品ID
	 */
	public function detail($id)
	{
		// 商品详情
		$detail = Goods::getDetail($id);

		$this->layout->content = View::make('site.detail', [
			'detail' => $detail
		]);
	}
}
