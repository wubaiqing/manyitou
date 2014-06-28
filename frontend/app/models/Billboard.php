<?php

class Billboard extends \Eloquent
{
    protected $fillable = [];

    protected $table = 'billboard';

    public function scopeStatus($query)
    {
        return $query->where('status', '=' ,'1');
    }

    /**
     * 首页商品列表
     * @return mixed
     */
    public static function getIndex()
    {
        $cacheKey = 'get-billboard-list';

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () {
            return Billboard::status()->paginate(15)->getItems();
        });
    }

    /**
     * 首页商品详情
     * @param  int   $id
     * @return mixed
     */
    public static function getDetail($id)
    {
        $cacheKey = 'get-billboard-detail-'.$id;

        return Cache::remember($cacheKey, Config::get('workbench.cacheTime'), function () use ($id) {
            return Billboard::find($id);
        });
    }
}
