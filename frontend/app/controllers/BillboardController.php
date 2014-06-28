<?php
/**
 * 前台-公告展示
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class BillboardController extends BaseController
{
    /**
     * @var string 继承master视图
     */
    protected $layout = 'layouts.master';

    /**
     * 公告详情页
     * @param int $id 公告ID
     */
    public function detail($id)
    {
        $detail = Billboard::getDetail($id);
        $this->layout->content = View::make('billboard.detail', [
            'detail' => $detail
        ]);
    }

    /**
     * 公告列表页
     * @param int $id 公告ID
     */
    public function lists()
    {
        $list = Billboard::paginate(22);
        $this->layout->content = View::make('billboard.list', [
            'list' => $list
        ]);
    }
}
