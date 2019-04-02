<?php
/**
 * Created by PhpStorm.
 * User: xm_pc
 * Date: 2019/4/2
 * Time: 23:08
 */

namespace app\admin\controller;


class Product extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}