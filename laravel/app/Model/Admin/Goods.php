<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'goods';

    protected $primarykey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
    protected $guarded = [];


     /**
     * 获得此类别所属的商品。
     */
    public function types()
    {
        return $this->belongsTo('App\Model\Admin\Type','tid','id');
    }
}
