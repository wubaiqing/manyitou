<?php


class BillboardController extends BaseController
{
	protected $layout = 'layouts.admin';


	/**
	 * 自定义验证消息
	 * @var array
	 */
	protected $validatorMessages = array(
		'title.required' => '请填写标题',
		'content.required' => '请填写内容',
	);

	public function showAdmin()
	{
		$billboard = Billboard::where('status', '=', '1')->orderBy('id', 'desc')->paginate(10);
		$this->layout->content = View::make('billboard.index', [
			'billboard' => $billboard
		]);
	}

	public function showCreate()
	{
		$model = new Billboard();
		$post = Input::all();

		if (!empty($post)) {
			$model->fill($post);
			$validator = Validator::make($post, Billboard::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('billboard/create')->withInput()->withErrors($validator);
			}

			if ($model->save()) {
				return Redirect::to('billboard/admin');
			}

		}
		$this->layout->content = View::make('billboard.create');
	}

	public function showUpdate($id)
	{
		$model = Billboard::find($id);
		$post = Input::all();

		if (!empty($post)) {
			$model->fill($post);
			$validator = Validator::make($post, Billboard::rulesCreate(), $this->validatorMessages);
			if ($validator->fails()) {
				return Redirect::to('billboard/create')->withInput()->withErrors($validator);
			}

			if ($model->save()) {
				return Redirect::to('billboard/admin');
			}

		}
		$this->layout->content = View::make('billboard.update')->with(compact('model', $model));
	}

	public function showDelete($id)
	{
		$model = Billboard::find($id);
		$model->status = 0;
		if ($model->save()) {
			return Redirect::to('billboard/admin');
		}
	}

}