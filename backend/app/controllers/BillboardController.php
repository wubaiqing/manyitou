<?php

/**
 * 后台-公告管理.
 *
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 *
 * @since 1.0
 */
class BillboardController extends BaseController
{
    /**
     * @var string 继承master视图
     */
    protected $layout = 'layouts.master';

    /**
     * @var array 自定义验证消息
     */
    protected $validatorMessages = array(
        'title.required' => '请填写标题',
        'content.required' => '请填写内容',
    );

    /**
     * 公告管理.
     */
    public function admin()
    {
        $billboard = Billboard::where('status', '=', '1')->orderBy('id', 'desc')->paginate(10);
        $this->layout->content = View::make('billboard.admin', [
            'billboard' => $billboard,
        ]);
    }

    /**
     * 创建公告.
     */
    public function create()
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

    /**
     * 修改公告.
     *
     * @param int $id 公告ID
     */
    public function update($id)
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

    /**
     * 删除公告.
     *
     * @param int $id 公告ID
     */
    public function delete($id)
    {
        $model = Billboard::find($id);
        $model->status = 0;
        if ($model->save()) {
            return Redirect::to('billboard/admin');
        }
    }
}
