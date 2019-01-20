<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/27
 * Time: 16:07
 */
namespace Home\Controller;

use Think\Controller;
class LoginController extends Controller
{
    public function login()
    {
        $uaccount = I('uaccount');
        $upassword = I('upassword');
        $utype = I('utype');

        $user = M('user');
        $user = $user->where("uaccount = '{$uaccount}'")->find();
        $uid = $user['uid'];
        $uname = $user['uname'];
        $uemail = $user['uemail'];
        $uphone = $user['uphone'];
        if (!$user)
        {
            $this->error('没有该用户');
        }
        if ($user['utype'] == $utype)
        {

        if ($user['upassword'] == $upassword)
        {
            session('uid',$uid);
            session('uaccount',$uaccount);
            session('uname',$uname);
            session('uemail',$uemail);
            session('uphone',$uphone);
            $this->success('登录成功',U('index1/index'),1);
        }else{
            $this->error('密码错误');
        }
        }else{
            $this->error('身份不符合');
        }


    }
    public function sendCode(){
        $code = new AlismsController(); //此类存放在Common\Controller\
        $code->code($_POST['iphone'],$msg);
        $this -> ajaxReturn($msg);
    }
}