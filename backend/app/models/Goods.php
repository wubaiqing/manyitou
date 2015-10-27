<?php
/**
 * 后台-商品模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class Goods extends \Eloquent
{
    public static $typs = [
        '1' => '打折促销类',
        '2' => 'qq群类',
        '3' => '值得买类',
        '4' => '分享推荐类',
        '5' => '网址站类',
        '6' => '淘宝达人（有好货等）',
        '7' => '爱淘宝',
        '8' => '返利类',
        '9' => '其他'
    ];


    public static $generalizePlatforms = [
        '1' => '淘宝天猫',
        '2' => '京东'
    ];

    public static $generalizeTypes = [
        '1' => '女装',
        '2' => '男装',
        '3' => '食品酒水',
        '4' => '母婴用品',
        '5' => '居家用品',
        '6' => '户外体育',
        '7' => '化妆品',
        '8' => '鞋包配饰'
    ];

    public static $cooperationTypes = [
        '1' => '免费',
        '2' => '付费'
    ];

    public static $priceTypes = [
        '1' => '按cps付费',
        '2' => '免费',
        '3' => '收坑位费',
    ];

    /**
     * @var string 表名
     */
    protected $table = 'goods';

    /**
     * @var array 允许填充字段
     */
    protected $fillable = [
        'platform_name',
        'playform_url',
        'type',
        'generalize_platform',
        'generalize_type',
        'cooperation_type',
        'price_type',
        'contact',
        'status',
        'order',
        'claim_image',
        'playform_desc',
        'recommended_desc',
    ];

    /**
     * 创建商品规则
     * @return array
     */
    public static function rulesCreate()
    {
        return [
            'platform_name' => 'required',
            'playform_url'  => 'required',
            'type'  => 'required',
            'generalize_platform' => 'required',
            'generalize_type' => 'required',
            'cooperation_type' => 'required',
            'price_type' => 'required',
            'contact' => 'required',
            'status' => 'required',
            'order' => 'required',
            'claim_image' => 'required',
            'recommended_desc' => 'required',
            'playform_desc' => 'required'
        ];
    }

}
