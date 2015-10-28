<?php

class Goods extends \Eloquent
{
    public static $types = [
        '1' => '打折促销类',
        '2' => 'qq群类',
        '3' => '值得买类',
        '4' => '分享推荐类',
        '5' => '网址站类',
        '6' => '淘宝达人（有好货等）',
        '7' => '爱淘宝',
        '8' => '返利类',
        '9' => '其他'
    ];


    public static $generalizePlatforms = [
        '1' => '淘宝天猫店铺',
        '2' => '京东店铺'
    ];

    public static $generalizeTypes = [
        '1' => '全类目',
        '2' => '女装',
        '3' => '男装',
        '4' => '食品酒水',
        '5' => '母婴用品',
        '6' => '居家用品',
        '7' => '户外体育',
        '8' => '化妆品',
        '9' => '鞋包配饰'
    ];

    public static $cooperationTypes = [
        '1' => '免费',
        '2' => '付费'
    ];

    public static $priceTypes = [
        '1' => '按cps付费',
        '2' => '免费',
        '3' => '收坑位费',
    ];

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
    ];

    protected $table = 'goods';

    public function scopeIndex($query)
    {
        return $query->where('status', '=' ,'1')->orderBy('order', 'DESC')->orderBy('id', 'DESC');
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
     * @param  int   $id
     * @return mixed
     */
    public static function getDetail($id)
    {
        $cacheKey = 'get-detail-'.$id;

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () use ($id) {
            return Goods::find($id);
        });
    }

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
        ];
    }

}
