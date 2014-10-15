<?php
/**
 * 后台-商品模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class UCBusiness extends \Eloquent
{
    /**
     * @var string 表名
     */
    protected $table = 'uc_business';

	/**
	 * 关联查询
	 * @return object
	 */
	public function attr()
	{
		return $this->hasOne('UCBusinessAttr', 'business_id');
	}

    public function scopeIndex($query)
    {
        return $query->where('id', '>' ,'20');
    }

    /**
     * 首页商品列表
     * @return mixed
     */
    public static function getData()
    {
	    return UCBusiness::index()->get();
        $cacheKey = 'get-business-json-test';

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
        });
    }

}
