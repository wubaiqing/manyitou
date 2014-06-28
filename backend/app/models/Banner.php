<?php
/**
 * 后台-商品模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class Banner extends \Eloquent
{
    /**
     * @var string 表名
     */
    protected $table = 'banner';

    /**
     * @var array 允许填充字段
     */
    protected $fillable = [
        'color',
        'image',
    ];

    /**
     * 创建商品规则
     * @return array
     */
    public static function rulesCreate()
    {
        return [
            'color' => 'required',
            'image' => 'required',
        ];
    }

}
