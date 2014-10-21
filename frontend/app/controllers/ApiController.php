<?php
/**
 * 前台-公告展示
 * @author wubaiqing<wubaiqing@vip.qq.com>
 * @copyright Copyright (c) 2014 满意投
 * @since 1.0
 */
class ApiController extends BaseController
{
	/**
	 * 公告详情页
	 * @param int $id 公告ID
	 */
	public function ucBusiness($id = 0)
	{
		$business = UCBusiness::getCate($id);

		$json = ['code' => 1, 'message' => null, 'data' => []];
		if ($business == false) {
			$json['code'] = 2;
			$json['message'] = '暂无数据';
			echo (json_encode($json));
			exit;
		}
		foreach ($business as $key => $item) {

			$attrValues = [];

			foreach($item->attr->toArray() as $k => $value) {
				if ($k == 'business_id') {
					continue;
				}

				if (!empty($value)) {
					$attrValues[$k] = $value;
				}
			}

			$baseInfo = $item->toArray();
			unset($baseInfo['attr']);

			// 接口配置
			$attrValues['configMode'] = 2;

			// 名称
			$json['data'][$key] = $baseInfo;
			$json['data'][$key]['selfcode'] = $attrValues;
			unset($attrValues);
		}
		echo (json_encode($json));
	}

}
