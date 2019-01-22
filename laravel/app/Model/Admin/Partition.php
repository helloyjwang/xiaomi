<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Partition extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'partition';

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
     * 获得此分区的类别。
     */
    public function types()
    {
        return $this->hasMany('App\Model\Admin\Type','pid','id');
    }

}
