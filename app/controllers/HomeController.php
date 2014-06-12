<?php

class HomeController extends BaseController
{

	protected $layout = 'layouts.master';

	public function showIndex()
	{
		$items = Goods::getIndex();
		$goods = Paginator::make($items['data'], $items['total'], $items['per_page']);

		$billboard = Billboard::getIndex();
		$this->layout->content = View::make('upstage.home.index', [
			'goods' => $goods,
			'billboard' => $billboard
		]);
	}


	public function showList()
	{
		$items = Goods::getIndex();
		$goods = Paginator::make($items['data'], $items['total'], $items['per_page']);
		$this->layout->content = View::make('upstage.home.list', [
			'goods' => $goods
		]);
	}

	public function showDetail($id)
	{
		$detail = Goods::getDetail($id);
		$this->layout->content = View::make('upstage.home.detail', [
			'detail' => $detail
		]);
	}
}
