<?php

class RolesController extends BaseController
{
	protected $layout = 'layouts.roles';

	public function showIndex()
	{
		$this->layout->content = View::make('upstage.roles.login');
	}

	public function showLogin()
	{
		if (Auth::attempt(['username' => Input::get('name'), 'password' => Input::get('password')]))
		{
			return Redirect::intended('admin/goods');
		}
		return Redirect::to('roles')->with('error', '用户名密码错误');
	}
}
