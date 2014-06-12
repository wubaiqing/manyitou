<?php

class RolesController extends BaseController
{
	protected $layout = 'layouts.roles';

	public function showLogin()
	{
		$this->layout->content = View::make('upstage.roles.login');
	}
}
