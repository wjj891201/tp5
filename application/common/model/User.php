<?php
/**
 * Created by PhpStorm.
 * User: xm_pc
 * Date: 2019/4/1
 * Time: 21:10
 */

namespace app\common\model;


class User extends BaseModel
{
    public function updateById($data, $id)
    {
        // allowField 过滤data数组中的非数据表中的数据
        return $this->allowField(true)->save($data, ['id' => $id]);
    }
}