<?php
/**
 * 后台-公告模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class Billboard extends \Eloquent
{
	/**
	 * @var string 表名
	 */
	protected $table = 'billboard';

	/**
	 * @var array 允许填充字段
	 */
	protected $fillable = [
		'title',
		'content',
		'status'
	];

	/**
	 * 创建商品规则
	 * @return array
	 */
	public static function rulesCreate()
	{
		return [
			'title' => 'required',
			'content' => 'required',
		];
	}
}