<?php

/**
 * 后台-管理.
 *
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 *
 * @since 1.0
 */
class SiteController extends BaseController
{
    /**
     * @var string 继承login视图
     */
    protected $layout = 'layouts.login';

    /**
     * 用户登陆.
     */
    public function login()
    {
        // 提交登陆
        $post = Input::all();
        if (!empty($post)) {
            // 验证账户信息
            if (Auth::attempt(['username' => $post['name'], 'password' => $post['password'], 'is_admin' => 1])) {
                return Redirect::intended('goods/admin');
            }

            return Redirect::to('/')->with('error', '用户名密码错误');
        }

        $this->layout->content = View::make('site.login');
    }

    /**
     * 用户退出.
     */
    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

    /**
     * 清空缓存.
     */
    public function clearCache()
    {
        $frontend = 'php '.__DIR__.'/../../../frontend/artisan cache:clear';
        $backend = 'php '.__DIR__.'/../../artisan cache:clear';
        exec($frontend);
        exec($backend);

        return Redirect::to('/');
    }
}
