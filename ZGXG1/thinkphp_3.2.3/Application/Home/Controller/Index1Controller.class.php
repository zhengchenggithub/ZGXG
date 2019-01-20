<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/27
 * Time: 20:54
 */namespace Home\Controller;
use Think\Controller;
class Index1Controller extends CommonController
{
    public function index()
    {
        $uid = $_SESSION['uid'];
        $user = M('user');
        $courses = M('courses');
        $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
        $data1 = $courses->query($sql);
        $arr = [];
        foreach ($data1 as $k=>$v){
            $arr[] = $data1[$k]["count(*)"];
        }
        $this->assign('arr',$arr);
        $sql1 = "SELECT cid,cname,cphoto,cdescribe,ctype,SUM(grade) as sum FROM zx_grade,zx_courses WHERE zx_grade.gcid = zx_courses.cid GROUP BY cname ORDER BY SUM DESC
LIMIT 9";
        $data4 = $courses->query($sql1);
        $data3 = $courses->where('ctype = 1')->select();
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->assign('data4',$data4);
        $this->display();
    }
    public function serach()
    {
        $serach = I('serach');
        if ($serach == null)
        {
            $data = 0;
            $this->assign('data',$data);
        }else{

            $courses = M('courses');
            $where['cname|cdescribe'] = array('like','%'.$serach.'%');
            $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
            $data1 = $courses->query($sql);
            $arr = [];
            foreach ($data1 as $k=>$v){
                $arr[] = $data1[$k]["count(*)"];
            }
            $this->assign('arr',$arr);
            $data = $courses->where($where)->select();
            $this->assign('data',$data);

        }
        $uid = $_SESSION['uid'];
        $user = M('user');
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $this->display('serach');
    }
    public function logout()
    {
        session(null);
        $this->success('退出成功',U('index/index'));
    }
}