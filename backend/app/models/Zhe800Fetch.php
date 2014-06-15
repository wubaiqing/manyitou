<?php
/**
 * 折800-淘宝U站抓取
 */
class Zhe800Fetch
{
	/**
	 * @var array $url 折800分类，网站分类->U站对应分类
	 */
	public static $url = [
		'1' => 'http://zhe800.uz.taobao.com/list.php?tag_id=2',
		'4' => 'http://zhe800.uz.taobao.com/list.php?tag_id=11',
		'5' => 'http://zhe800.uz.taobao.com/list.php?tag_id=7',
		'6' => 'http://zhe800.uz.taobao.com/list.php?tag_id=8',
		'7' => 'http://zhe800.uz.taobao.com/list.php?tag_id=4',
		'8' => 'http://zhe800.uz.taobao.com/list.php?tag_id=12',
		'9' => 'http://zhe800.uz.taobao.com/list.php?tag_id=6',
		'10' => 'http://zhe800.uz.taobao.com/list.php?tag_id=5',
		'11' => 'http://zhe800.uz.taobao.com/list.php?tag_id=3',
		'12' => 'http://zhe800.uz.taobao.com/list.php?tag_id=9',
	];

	/**
	 * 引燃数据脚本
	 */
	public static function fire()
    {
	    foreach (self::$url as $cateId => $url) {
		    self::handleData($cateId, $url);
		    exit;
	    }
    }

	/**
	 * 处理数据
	 * @param string $body 当前页面
	 */
	public static function handleData($cateId, $url)
	{
		for ($page = 1; $page <= 7; $page ++) {
			$brandUrl = $url . '&page=' . $page;
			$body = self::request($brandUrl);
			$data = self::getData($cateId, $body);
		}
	}


	/**
	 * 获取折800-U站数据
	 * @param string $body 当前页面
	 */
	public static function getData($cateId, $body)
	{
		$data = [];
		$html = new simple_html_dom();
		$html->find('h2');

		return $data;
	}

    /**
     * 请求处理
     * @param string $url 请求URL
     * @return string $body
     */
    public static function request($url)
    {
        try {
            $request = \Requests::get($url, ['Accept' => 'text/plain, text/html'], ['timeout' => Config::get('workbench.requestsTimeout')]);
        } catch (\Requests_Exception $e) {
            Log::error('请求失效：', ['url' => $url]);
            return false;
        }
        
        if ($request->status_code != 200) {
            Log::error('返回错误：', ['HttpStatus' => $request->status_code, 'url' => $url]);
            return false;
        }

        $body = $request->body;
        
        if (empty($body)) {
            Log::error('请求为空：', ['content' => null]);
            return false;
        }
        return $body;
    }
}

