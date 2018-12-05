<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'shop_goods';

    protected $primaryKey = 'id';

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
     * 获得此颜色对应的展示图片。
     */
    public function color()
    {
        return $this->hasMany('App\Model\Admin\Photo','color_id');
    }
}