<?php

class SiteController extends BaseController
{
	protected $layout = 'layouts.roles';

	public function showLogin()
	{
		if (Auth::check()) {
			return Redirect::intended('goods/admin');
		}

		$post = Input::all();
		if (!empty($post)) {
			if (Auth::attempt(['username' => Input::get('name'), 'password' => Input::get('password')]))
			{
				return Redirect::intended('goods/admin');
			}
			return Redirect::to('/')->with('error', '用户名密码错误');
		}
		$this->layout->content = View::make('upstage.roles.login');
	}

	public function showLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}



}
