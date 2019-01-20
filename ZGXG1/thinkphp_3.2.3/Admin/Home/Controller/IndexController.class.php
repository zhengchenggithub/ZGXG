<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function login()
    {
//        $username = $_REQUEST['username'];
//        $password = $_REQUEST['password'];
        $username = I('username');
        $password = I('password');

        $Admin = M('admin');
        $user = $Admin->where("Aname = '{$username}'")->find();
        if (!$user) {
            $this->error('没有该用户');
        }
        if ($user['apassword'] == $password) {
//            $_SESSION['username'] = $username;
            session('username', $username);
            $this->success('登录成功', U('Emplist/index'));
        } else {
            $this->error('密码错误');
        }
    }
    public function logout()
    {
//        $this->rediuct('退出成功', U('index/index'));
        session(null);
        $this->success('退出成功',U('index/index'));

    }


}