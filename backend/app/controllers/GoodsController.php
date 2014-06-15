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
		$post = Input::all();
		$post = Input::except('_token');

		if (!empty($post)) {
			$model = new Goods;
			foreach ($post as $key => $value) {
				$model->setAttribute($key, $value);
			}
			if ($model->save()) {
				return Redirect::to('admin/goods');
			}

		}
		$this->layout->content = View::make('admin.goods.create');
	}

	public function postGoods()
	{
		var_dump(Input::all());
		exit;

	}


}
