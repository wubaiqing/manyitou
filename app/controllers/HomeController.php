<?php

class HomeController extends BaseController
{

	protected $layout = 'layouts.master';

	public function showIndex()
	{
		$items = Goods::getIndex();
		$goods = Paginator::make($items['data'], $items['total'], $items['per_page']);
		$this->layout->content = View::make('home.index', [
			'goods' => $goods
		]);
	}
}
