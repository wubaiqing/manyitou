<?php

class GoodsController extends BaseController
{
	protected $layout = 'layouts.admin';

	public function showIndex()
	{
		$goods = Goods::orderBy('id', 'desc')->paginate(10);
		$this->layout->content = View::make('admin.goods.index', [
			'goods' => $goods
		]);
	}

	public function showCreate()
	{
		$goods = Goods::orderBy('id', 'desc')->paginate(10);
		$this->layout->content = View::make('admin.goods.create', [
			'goods' => $goods
		]);
	}
}
