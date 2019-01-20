<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/27
 * Time: 16:55
 */
namespace Home\Controller;

use Think\Controller;
class RegisterController extends Controller
{
    public function getVerify()
    {
        $config =    array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry(session('uaccount'));
    }
    public function checkverify(){
        $value = I('value');
        $ver = new \Think\Verify();
        if ($ver->check($value,session('uaccount')))
        {
            $this->add();
        }else{
            $this->error('验证码错误');
        }
    }
    public function add()
    {
        $uaccount = I('uaccount');
        $user = M('user');
        $data1 = $user->where("uaccount = '{$uaccount}'")->select();
        if ($data1)
        {
            $this->error('账号重复');
        }else{
            $data = $user->create();

            $result = $user->add($data);
            if ($result)
            {
                $this->success('注册成功',U('index/login'),1);
            }else{
                $this->error('注册失败');
            }

        }

    }
    public function smsbao()
    {
        $phonenum = trim( I('post.phone1') );//接收到的参数
        //首先判断电话为不为空
        if(empty($phonenum) ){
            $this->ajaxReturn('1');
        }
        //判断是否为数字
        $boolphone = is_numeric($phonenum);
        if($boolphone){
            $statusStr = array(
                "0"   => "短信发送成功",
                "-1" => "参数不全",
                "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
                "30" => "密码错误",
                "40" => "账号不存在",
                "41" => "余额不足",
                "42" => "帐户已过期",
                "43" => "IP地址限制",
                "50" => "内容含有敏感词"
            );
            $num = rand(100000, 999999);//设置随机数
            session("numset", $num);//把值放入COOKIE中，关闭浏览器清除cookie;
            $smsapi = "http://api.smsbao.com/";
            $user = "zczczc"; //短信平台帐号
            $pass = md5("zczczc"); //短信平台密码
            $content="[朝过夕改网],来自朝过夕改网的验证，验证码：".$num;//要发送的短信内容，随便设置
            $phone = $phonenum;//要发送短信的手机号码
            $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);//固定格式
            $result =file_get_contents($sendurl);//固定格式
            $this->ajaxReturn( $statusStr[$result] );//短信是否发送成功
        }else{
            $this->ajaxReturn( '2' );
        }
    }
    public function register()
    {
        $value = I('yanzhengma');
        $yanzhengma = $_SESSION['numset'];
        if ($value == $yanzhengma)
        {
            $this->add();
        }else{
            $this->error('验证码错误');
        }


    }
}