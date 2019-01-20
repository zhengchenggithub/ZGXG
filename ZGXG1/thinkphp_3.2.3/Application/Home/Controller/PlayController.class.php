<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/19
 * Time: 15:42
 */
namespace Home\Controller;
use Think\Controller;

class Playcontroller extends CommonController
{
    public function index()
    {
        $uid = $_SESSION['uid'];
        $user = M('user');
        $data3 = $user->where("uid = $uid")->find();
        $this->assign('data3',$data3);
        $cvid = I('cvid');
        $video = M('video');
        $cid = I('ccid');
        $chapter = M('chapter');
        $data1 = $chapter->join('LEFT JOIN __VIDEO__ ON __CHAPTER__.cvid = __VIDEO__.vid')->where("ccid = $cid")->select();
        $data = $video->where("vid = $cvid")->find();
        $this->assign('data2',$cid);
        $this->assign('data',$data);
        $this->assign('data1',$data1);
        $this->display();
    }
}