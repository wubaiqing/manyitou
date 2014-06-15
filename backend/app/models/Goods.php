<?php
/**
 * 后台-商品模型
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class Goods extends \Eloquent
{
	/**
	 * @var string 表名
	 */
	protected $table = 'goods';

	/**
	 * @var array 允许填充字段
	 */
	protected $fillable = [
		'logo',
		'rules',
		'platform_name',
		'playform_sort_desc',
		'playform_desc',
		'playform_url',
		'claim_image',
		'price_text',
		'status',
		'order'
	];

	/**
	 * 创建商品规则
	 * @return array
	 */
	public static function rulesCreate()
	{
		return [
			'logo' => 'required',
			'rules' => 'required',
			'platform_name' => 'required',
			'playform_sort_desc' => 'required',
			'playform_desc' => 'required',
			'playform_url' => 'required',
			'claim_image' => 'required',
			'price_text' => 'required',
			'status' => 'required',
			'order' => 'required'
		];
	}

}
