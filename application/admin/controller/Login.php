<?php

namespace app\admin\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        if (request()->isPost())
        {
            $data = input('post.');
            // 登录的逻辑
            $ret = model('Member')->get(['username' => $data['username']]);
            if (!$ret || $ret->status != 1)
            {
                $this->error('该用户不存在，或者该用户未被审核');
            }
            if ($ret->password != md5($data['password'] . $ret->code))
            {
                $this->error('该用户不存在，或者该用户未被审核');
            }
            model('Member')->updateById(['last_login_time' => time()], $ret->id);
            // 保存用户信息 admin是作用域
            session('member', $ret, 'admin');
            return $this->success('登录成功', url('index/index'));
        } else
        {
            $user = session('member', '', 'admin');
            if ($user && $user->id)
            {
                return $this->redirect(url('index/index'));
            }
            return $this->fetch();
        }

    }

    /**
     * 退出登录
     */
    public function logout()
    {
        session(null, 'admin');
        $this->redirect(url('login/index'));
    }
}
