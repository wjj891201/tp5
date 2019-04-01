<?php

namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return "欢迎来到o2o主后台首页!";
    }
}
