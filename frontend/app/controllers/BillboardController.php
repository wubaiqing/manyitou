<?php
class BillboardController extends BaseController
{
	protected $layout = 'layouts.master';

	public function showDetail($id)
	{
		$detail = Billboard::getDetail($id);
		$this->layout->content = View::make('upstage.home.billboard', [
			'detail' => $detail
		]);
	}
}
