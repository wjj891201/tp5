<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\File;

class Image extends Controller
{
    public function upload()
    {
        $file = Request::instance()->file('file');
        // 给定一个目录
        $info = $file->move('upload');
        if ($info && $info->getPathname())
        {
            return json_encode(['status' => intval(1), 'message' => 'success', 'data' => '/' . $info->getPathname()]);
        }
        return json_encode(['status' => intval(0), 'message' => 'upload error', 'data' => []]);
    }
}