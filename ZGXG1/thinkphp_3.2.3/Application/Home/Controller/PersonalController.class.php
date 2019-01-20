<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/12/27
 * Time: 21:20
 */
namespace Home\Controller;
class PersonalController extends CommonController
{
    public function index()
    {
        $uid = $_SESSION['uid'];
        $utype = I('utype');
        $user = M('user');
        $courses = M('courses');
        $major = M('major');
        $uc =M('uc');
        $data = $user->where("uid = $uid")->select();

        $sql = "SELECT ch.*,co.cname FROM (SELECT ccid,COUNT(*) FROM zx_chapter GROUP BY ccid) as ch LEFT JOIN zx_courses as co on ch.ccid = co.cid";
        $data1 = $courses->query($sql);
        $arr = [];
        foreach ($data1 as $k=>$v){
            $arr[] = $data1[$k]["count(*)"];
        }
        $this->assign('arr',$arr);
        $sql1 = "SELECT cid,cname,cphoto,cdescribe from zx_uc,zx_user,zx_courses WHERE zx_courses.cid = zx_uc.sccid AND zx_uc.scuid =zx_user.uid AND uid = $uid";
        $data1 = $uc->query($sql1);
        $this->assign('data',$data1);
        $this->assign('data1',$data[0]);
        $coursesname = $courses->select();
        $this->assign('coursesname',$coursesname);
        $majorname = $major->select();
        $this->assign('majorname',$majorname);
        if ($utype == 1)
        {
            $this->display();
        }else{
            $this->display('teacher');
        }

    }
    public function doeditor()
    {
        $user = M('user');
        $data = $user->create();
        $result = $user->save($data);
        if ($result)
        {
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }
    public function uploadimg()
    {
        $uid = $_SESSION['uid'];
        $user = M('user');
        if (!empty($_FILES)) {
            //上传单个图片
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 12313132132123;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = 'img/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            $upload->saveName =  array('uniqid',);//上传文件的保存规则
            $upload->autoSub = true;//自动使用子目录保存上传文件
            // 上传单个图片
            $info = $upload->uploadOne($_FILES['uphoto']);

            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $imgurl=$info['savepath'].$info['savename'];
                $data['uphoto']=$imgurl;
                $user->create($data);
                $result=$user->where("uid = $uid")->save();
                if(!$result){
                    $this->error('上传失败！');
                }else{
                    $this->success('上传成功');
                }
            }
        }
    }
    public function uploadvideo()
    {
        $ccid =I('ccid');
        $vname = I('vname');
        $video = M('video');
        $uc = M('uc');
        $chapter = M('chapter');
        if (!empty($_FILES)) {
            //上传单个视频
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 12313132132123;// 设置附件上传大小
            $upload->exts = array('mp4');// 设置附件上传类型
            $upload->rootPath = 'video/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            $upload->saveName =  array('uniqid',);//上传文件的保存规则
            $upload->autoSub = true;//自动使用子目录保存上传文件
            // 上传单个图片
            $info = $upload->uploadOne($_FILES['file']);

            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $videourl=$info['savepath'].$info['savename'];
                $data['vurl']=$videourl;
                $data['vname']=$vname;
                $video->create($data);
                $result=$video->add();
                $cvid = $video->where("vname = '$vname'")->getField('vid');
                $data1['cvid'] = $cvid;
                $data1['ccid'] = $ccid;
                $chapter->add($data1);
                if(!$result){
                    $this->error('上传失败！');
                }else{
                    $data2['scuid'] = $_SESSION['uid'];
                    $data2['sccid'] = $ccid;
                    $uc->add($data2);
                    $this->success('上传成功');

                }
            }
        }
    }
    public function addcourses()
    {
        $cname = I('cname');
        $mid = I('mid');
        $cdescrie = I('cdescribe');
        $courses = M('courses');
        $cm = M('cm');
        if (!empty($_FILES)) {
            //上传单个图片
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 12313132132123;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = 'img/'; // 设置附件上传根目录
            $upload->savePath = ''; // 设置附件上传（子）目录
            $upload->saveName =  array('uniqid',);//上传文件的保存规则
            $upload->autoSub = true;//自动使用子目录保存上传文件
            // 上传单个图片
            $info = $upload->uploadOne($_FILES['file']);

            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功 获取上传文件信息
                $imgurl=$info['savepath'].$info['savename'];
                $data['cphoto']=$imgurl;
                $data['cname']=$cname;
                $data['cdescribe']=$cdescrie;
                $data['ctype'] = 2;
                $courses->create($data);
                $result=$courses->add();
                $cmcid = $courses->where("cname = '$cname'")->getField('cid');
                $data1['cmmid'] = $mid;
                $data1['cmcid'] = $cmcid;
                $cm->add($data1);
                if(!$result){
                    $this->error('上传失败！');
                }else{
                    $this->success('上传成功');
                }
            }
        }
    }
}