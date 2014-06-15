<?php

class Goods extends \Eloquent {

	protected $fillable = [];

	protected $table = 'goods';

	public function scopeIndex($query)
	{
		return $query->where('status', '=' ,'1');
	}

	/**
	 * 首页商品列表
	 * @return mixed
	 */
	public static function getIndex()
	{
		$cacheKey = 'get-index-'.Input::get('page');
		return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
			return Goods::index()->paginate(Config::get('workbench.indexPageSize'))->toArray();
		});
	}

	/**
	 * 首页商品详情
	 * @param int $id
	 * @return mixed
	 */
	public static function getDetail($id)
	{
		$cacheKey = 'get-detail-'.$id;
		return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () use($id) {
			return Goods::find($id);
		});
	}
}
