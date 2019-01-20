<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/18
 * Time: 14:47
 */
namespace Home\Controller;
use Think\Controller;

class CoursesController extends CommonController
{
    public function index($curpage=1,$num = 8)
    {
        $uid = $_SESSION['uid'];
        $user = M('user');
        $data2 = $user->where("uid = $uid")->find();
        $courses = M('courses');
        $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
        $data1 = $courses->query($sql);
        $arr = [];
        foreach ($data1 as $k=>$v){
            $arr[] = $data1[$k]["count(*)"];
        }
        $this->assign('arr',$arr);
        $data = $courses
            ->page($curpage,$num)
            ->select();
        $count = $courses->count();
        $this->assign('count',$count);
        $this->assign('curr',$curpage);
        $this->assign('data2',$data2);
        $this->assign('data',$data);
        $this->display();
    }
    public function index1()
    {
        $courses = M('courses');
        $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
        $data1 = $courses->query($sql);
        $arr = [];
        foreach ($data1 as $k=>$v){
            $arr[] = $data1[$k]["count(*)"];
        }
        $this->assign('arr',$arr);
        $data = $courses->where("ctype = 1")->select();
        $uid = $_SESSION['uid'];
        $user = M('user');
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $this->assign('data', $data);
        $this->display('index1');

    }
    public function index2()
    {
        $mid = I('mid');
        $cm = M('cm');
        $major = M('major');
        $courses = M('courses');
        $data2 = $major->select();
        $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
        $data1 = $courses->query($sql);
        if ($mid == null)
        {
            $data = $courses->where("ctype = 2")->select();

        }else{
            $sql1 = "SELECT * FROM zx_major,zx_courses,zx_cm WHERE zx_cm.cmcid = zx_courses.cid AND zx_cm.cmmid = zx_major.mid AND mid = $mid";
            $data =$cm->query($sql1);
        }
        $arr = [];
        foreach ($data1 as $k=>$v){
            $arr[] = $data1[$k]["count(*)"];
        }

        $this->assign('data',$data);
        $this->assign('arr',$arr);
        $this->assign('data2',$data2);
        $uid = $_SESSION['uid'];
        $user = M('user');
        $data3 = $user->where("uid = $uid")->find();
        $this->assign('data3',$data3);
        $this->display('index2');
    }

}