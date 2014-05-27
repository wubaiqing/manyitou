<?php

class Goods extends \Eloquent
{
	protected $fillable = [];

	protected $tables = 'goods';

    public static function getGoods($url)
    {
        var_dump(Config::get('workbench'));
        exit;
        try {
            $request = \Requests::get($url, ['Accept' => 'text/html'], ['timeout' => 300]);
        } catch (\Requests_Exception $e) {
            throw new MovieCenterException($e->getMessage(), $url);
        }
        
        $body = $request->body;
        
        if ($request->status_code != 200) {
            throw new MovieCenterException('HttpStatus: ' . $request->status_code, $url);
        }
        
        if (empty($body)) {
            throw new MovieCenterException('body is empty', $url);
        }
        
        $data = $this->returnData($body);
        \Yii::log($url . ': ok', \CLogger::LEVEL_INFO, 'application.api.curl');
        return $data;
    }
}
