<?php

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        echo 121212121212;
        exit;
        return $this->fetch();
    }
}
