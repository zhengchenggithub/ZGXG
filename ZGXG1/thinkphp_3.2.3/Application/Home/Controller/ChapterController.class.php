<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/20
 * Time: 17:24
 */
namespace Home\Controller;
use Think\Controller;

class ChapterController extends CommonController
{
    public function index()
    {
        $uid = $_SESSION['uid'];
        $user = M('user');
        $uc = M('uc');
        $data3 = $user->where("uid = $uid")->find();
        $cid = I('cid');
        $courses = M('courses');
        $chapter = M('chapter');
        $a['scuid'] = $uid;
        $a['sccid'] = $cid;
        $result = $uc->where($a)->find();
        $data1 = $courses->where("cid = $cid")->select();
        $data2 = $chapter->join('LEFT JOIN __VIDEO__ ON __CHAPTER__.cvid = __VIDEO__.vid')->where("ccid = $cid")->select();
        if ($data3['utype'] == 1){
            if ($result == null)
            {
                $this->assign('data4',1);
            }else{
                $this->assign('data4',0);
            }
        }else if ($data3['utype'] == 2){
            $this->assign('data4',3);
        }
        $this->assign('data1',$data1[0]);
        $this->assign('data2',$data2);
        $this->assign('data3',$data3);
        $this->display();
    }
    public function download(){
        $cvid = I('cvid');
        $download = M('video');
        $data = $download->find($cvid);
        $data_url = $data['vurl'];
        $http = new \Org\Net\Http;
        $filename = "video/$data_url";
        $showname="";
        $http->download($filename, $showname);
    }
    public function selectcourses()
    {
        $uid = $_SESSION['uid'];
        $cid = I('cid');
        $uc = M('uc');
        $data['scuid'] = $uid;
        $data['sccid'] = $cid;
        $result = $uc->add($data);
        if ($result == null)
        {
            $this->error('选择失败！');
        }else{
            $this->success('选择成功！');
        }
    }
    public function deletecourses()
    {
        $uid = $_SESSION['uid'];
        $cid = I('cid');
        $uc = M('uc');
        $data['scuid'] = $uid;
        $data['sccid'] = $cid;
        $result = $uc->where($data)->delete();
        if ($result == null)
        {
            $this->error('删除失败！');
        }else{
            $this->success(     '删除成功！');
        }
    }
    public function grade()
    {
        $score = I('grade');
        $grade = M('grade');
        $user = M('user');
        $uid = $_SESSION['uid'];
        $cid = I('get.cid');
        $result1 = $user->where("uid = $uid")->find();
        if ($result1['utype'] == 2)
        {
            $this->error('老师不可评分！');
        }else {
            $result = $grade->where("guid = $uid AND gcid = $cid")->select();
            if ($result == null)
            {
                $data['guid'] = $uid;
                $data['gcid'] = $cid;
                $data['grade'] = $score;
                $result2 = $grade->add($data);
                if ($result2 == null)
                {
                    $this->error('评分失败！');
                }else{
                    $this->success('评分成功！');
                }
            }else{
                $this->error('请勿重复评分！');
            }
        }


    }
}