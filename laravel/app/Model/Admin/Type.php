<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'type';

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
     * 获得此类别所属的分区。
     */
    public function parti()
    {
        return $this->belongsTo('App\Model\Admin\Partition','pid','id');
    }

    /**
     * 获得此类别的商品。
     */
    public function good()
    {
        return $this->hasMany('App\Model\Admin\Goods','tid','id');
    }
}
