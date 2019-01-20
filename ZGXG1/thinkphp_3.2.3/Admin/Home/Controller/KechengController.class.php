<?php
namespace Home\Controller;
use Think\Controller;
class KechengController extends Controller {
    public function index(){
        $this->display();
    }
    public function danyelist($currpage=1,$num = 5)
    {
        $Major = M('Major');
        $majorModel = M('Major');
        $count = $majorModel->count();
        $majors = $majorModel->page($currpage,$num)->where(10)->select();
        $this->assign('users',$majors);
        $this->assign('count',$count);
        $this->assign('curr',$currpage);
        $this->display();
//        $User = M('Major');
//        $list = $User->limit(10)->select();
//        $this->assign('list',$list);
//        var_dump($list[0]);
//        $this->display();
    }

    public function articlelist($currpage=1,$num = 5)
    {
        $Video = M('Video');
        $videoModel = M('Video');
        $count = $videoModel->count();
        $videos = $videoModel->page($currpage,$num)->where(10)->select();
        $this->assign('users',$videos);
        $this->assign('count',$count);
        $this->assign('curr',$currpage);
        $this->display();
    }
    public function serach1()
    {
        $mid = I('mid');
        $User = M('Major');

        $list = $User->where("mid = $mid")->select();
        $this->assign('users',$list);
//        var_dump($list);
        $this->display('danyelist');
    }
    public function serach2()
    {
        $vid = I('vid');
        $User = M('Video');

        $list = $User->where("vid = $vid")->select();
        $this->assign('users',$list);
//        var_dump($list);
        $this->display('articlelist');
    }
    public function add()
    {
        $this->display('menu-add');
    }
    public function doadd()
    {
        $User = M('User');
        $data = $User->create();
        $result = $User->add($data);
        if ($result) {
            $this->success('添加成功', U('menu1'));
        } else {
            $this->error('添加失败');
        }
    }
    public function delete( $uid)
    {
        $result = M('User')->delete($uid);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }

    }
    public function delete1($mid)
    {
//        $result = M('Major')->where("mid = {$mid}")->delete();
        $result = M('Major')->delete($mid);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }
    public function doadd1()
    {
        $User = M('User');
        $data = $User->create();
        $result = $User->add($data);
        if ($result) {
            $this->success('添加成功', U('danyelist'));
        } else {
            $this->error('添加失败');
        }
    }
    public function edit($vid)
    {
        $Video=M('Video')->where("vid={$vid}")->find();
        $datas=M('Video')->select();
        $this->assign('Video',$Video);
        $this->assign('datas',$datas);
        $this->display('menu1-edit');
    }
    public function doedit()
    {

        $Video = M('Video');
        $data = $Video->create();
       // var_dump($data);
        $result = $Video->save($data);
        if ($result = null) {
            $this->error('修改失败');

        } else {
            $this->success('修改成功', U('articlelist'));
        }
    }
    public function edit1($mid)
    {
        $Major=M('Major')->where("mid={$mid}")->find();
        $datas=M('Major')->select();
        $this->assign('Major',$Major);
        $this->assign('datas',$datas);
        $this->display('edit1');
    }
    public function doedit1()
    {

        $Major = M('Major');
        $data = $Major->create();
        // var_dump($data);
        $result = $Major->save($data);
        if ($result = null) {
            $this->error('修改失败');

        } else {
            $this->success('修改成功', U('danyelist'));
        }
    }
}