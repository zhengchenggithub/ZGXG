<?php
namespace Home\Controller;
use Think\Controller;
class EmplistController extends Controller
{
    public function index()
    {
        $this->display();
    }
    public function welcome()
    {
        $grade = M('grade');
        $sql = "SELECT cname,SUM(grade) as sum FROM zx_grade,zx_courses WHERE zx_grade.gcid = zx_courses.cid GROUP BY cname ";
        $result = $grade->query($sql);
        $arr = [];
        foreach ($result as $k=>$v){
            $arr[] = $result[$k]["cname"];
        }
        $arr1 = [];
        foreach ($result as $k=>$v){
            $arr1[] = $result[$k]["sum"];
        }
        $this->assign('arr',json_encode($arr));
        $this->assign('arr1',json_encode($arr1));
        $this->display('welcome');
    }
    public function mima()
    {
        $uaccount = $_SESSION['username'];
        $admin= M('admin');
        $result = $admin->where("aname = $uaccount")->find();
        $this->assign('aid',$result['aid']);
        $this->display();

    }
    public function updatepassword()
    {
        $Admin = M('Admin');
        $where['aid']=I('aid');
        $where['apassword']=I('password ');
        $data = $Admin->where($where['aid'])->select();
        $this->assign("data", $data);
//      var_dump($data[0]['aname']);
        if ($data) {
            $model = D("admin");
            $date['apassword'] = $_POST['new_password'];
            $date['aid'] = 1;
            $model->create($date);
            $res = $model->save();
            if ($res != false) {
                $aid = 1;
                $aa = $model->find($aid);
                $this->success("修改成功！",U('index/logout'),3);
//                $this->redirect("Users/settings");
            } else {
                $this->error("没有更新任何数据！");
            }
        } else {
            $this->error("原密码输入错误！");
        }
    }
    public function serach()
    {
        $uid = I('uid');
        $User = M('User');
        $list = $User->where("uid = $uid")->select();
        $this->assign('users',$list);
        $this->display('menu1');
    }
    public function menu1($currpage=1,$num = 5)
    {
        $User = M('User');
        $userModel = M('User');
        $count = $userModel->count();
        $users = $userModel->page($currpage,$num)->where("utype=1")->select();
        $this->assign('users',$users);
        $this->assign('count',$count);
        $this->assign('curr',$currpage);
        $this->display();
    }
    public function menu2($currpage=1,$num = 5)
    {
        $User = M('User');
        $userModel = M('User');
        $count = $userModel->count();
        $users = $userModel->page($currpage,$num)->where("utype=2")->select();
        $this->assign('users',$users);
        $this->assign('count',$count);
        $this->assign('curr',$currpage);
        $this->display();
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
    public function edit($uid)
    {
        $User=M('User')->where("uid={$uid}")->find();
        $datas=M('User')->select();
        $this->assign('User',$User);
        $this->assign('datas',$datas);
        $this->display('menu1-edit');
    }
    public function doedit()
    {

        $User = M('User');
        $data = $User->create();
        $result = $User->save($data);
        if ($result == null) {
            $this->error('修改失败');

        } else {
            $this->success('修改成功', U('menu1'));
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
        $Major = M('Major');
        $data = $Major->create();
        $result = $Major->add($data);
        if ($result) {
            $this->success('添加成功', U('danyelist'));
        } else {
            $this->error('添加失败');
        }
    }


}
