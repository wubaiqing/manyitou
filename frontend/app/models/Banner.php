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

    public function scopeIndex($query)
    {
        return $query->where('status', '=' ,'1')->orderBy('sort', 'DESC')->orderBy('id', 'DESC');
    }

    /**
     * 首页商品列表
     * @return mixed
     */
    public static function getIndex()
    {
        $cacheKey = 'get-banner-index';

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
            return Banner::index()->get();
        });
    }

}
