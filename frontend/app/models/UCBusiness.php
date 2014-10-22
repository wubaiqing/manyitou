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

	public static function getCate($id)
	{
		$cacheKey = 'get-business-json-cate-test-' . intval($id);

		return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () use ($id) {

			$getBunsiness = UCBusiness::whereRaw('parentid = ? And status = ?', [$id, 1])->get();
			if ($getBunsiness->count() == 0) {
				return false;
			}


			$ids = [];
			$ids[] = $getBunsiness->toArray()['id'];
			foreach ($getBunsiness as $key => $bunsiness) {
				$ids[] = $bunsiness->toArray()['id'];
			}

			$json = [];
			return UCBusiness::whereIn('parentid', $ids)->get();
		});

	}


	/**
     * 首页商品列表
     * @return mixed
     */
    public static function getAll()
    {
        $cacheKey = 'get-business-json-test-1.2';

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
	        return UCBusiness::index()->get();
        });
    }

}
