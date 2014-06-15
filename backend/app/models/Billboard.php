<?php

class Billboard extends \Eloquent
{
	protected $fillable = [
		'title',
		'content',
		'status'
	];

	protected $table = 'billboard';

	public function scopeStatus($query)
	{
		return $query->where('deleted_at', '=' ,'0');
	}

	/**
	 * 首页商品列表
	 * @return mixed
	 */
	public static function getIndex()
	{
		$cacheKey = 'get-billboard-list';
		return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
			return Billboard::status()->get();
		});
	}


	public static function rulesCreate()
	{
		return [
			'title' => 'required',
			'content' => 'required',

		];
	}

	/**
	 * 首页商品详情
	 * @param int $id
	 * @return mixed
	 */
	public static function getDetail($id)
	{
		$cacheKey = 'get-billboard-detail-'.$id;
		return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () use($id) {
			return Billboard::find($id);
		});
	}
}