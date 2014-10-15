<?php
/**
 * 后台-商品模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class UCBusinessAttr extends \Eloquent
{
    /**
     * @var string 表名
     */
    protected $table = 'uc_business_attr';



    /**
     * 首页商品列表
     * @return mixed
     */
    public static function getData()
    {
	    return UCBusiness::index();
        $cacheKey = 'get-business-jsos';

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
        });
    }

}
