<?php

class GoodsController extends BaseController
{
	protected $layout = 'layouts.admin';

	public function showIndex()
	{
		$this->layout->content = View::make('admin.goods.index');
	}
}
