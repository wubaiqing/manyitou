<?php

/**
 * 后台-管理.
 *
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 *
 * @since 1.0
 */
class BannerController extends BaseController
{
    /**
     * @var string 继承login视图
     */
    protected $layout = 'layouts.master';

    protected $validatorMessages = [
        'color.required' => '填充色必填',
        'image.required' => '图片地址必填',
        'sort.required' => '排序必填',
        'url.required' => 'URL必填',
    ];

    /**
     * 商品管理.
     */
    public function admin()
    {
        // 在售状态，ID倒叙
        $banner = Banner::where('status', '=', '1')->orderBy('id', 'desc')->paginate(10);
        $this->layout->content = View::make('banner.admin', [
            'banner' => $banner,
        ]);
    }

    /**
     * 商品添加.
     */
    public function create()
    {
        $model = new Banner();

        $post = Input::all();
        if (!empty($post)) {

            // 填充数据
            $model->fill($post);

            // 验证数据
            $validator = Validator::make($post, Banner::rulesCreate(), $this->validatorMessages);

            if ($validator->fails()) {
                return Redirect::to('banner/create')->withInput()->withErrors($validator);
            }

            // 保存
            if ($model->save()) {
                return Redirect::to('banner/admin');
            }
        }

        $this->layout->content = View::make('banner.update')->with(compact('model', $model));
    }

    /**
     * 商品修改.
     *
     * @param int $id 商品ID
     */
    public function update($id)
    {
        // 获取商品
        $model = Banner::find($id);

        $post = Input::all();
        if (!empty($post)) {

            // 数据填充
            $model->fill($post);

            // 验证数据
            $validator = Validator::make($post, Banner::rulesCreate(), $this->validatorMessages);
            if ($validator->fails()) {
                return Redirect::to('banner/create')->withInput()->withErrors($validator);
            }

            // 保存
            if ($model->save()) {
                return Redirect::to('banner/admin');
            }
        }

        $this->layout->content = View::make('banner.update')->with(compact('model', $model));
    }

    /**
     * 删除商品.
     */
    public function delete($id)
    {
        // 获取商品
        $model = Banner::find($id);

        // 改变状态
        $model->status = 0;

        // 保存
        if ($model->save()) {
            return Redirect::to('banner/admin');
        }
    }
}
