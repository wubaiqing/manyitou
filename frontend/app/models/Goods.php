<?php

class Goods extends \Eloquent
{
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
