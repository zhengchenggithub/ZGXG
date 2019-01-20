<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/20
 * Time: 16:12
 */
namespace Home\Controller;

use Think\Controller;

class ForumController extends CommonController{

    public function index($curpage=1,$num=10){
        //分页
        //1.接收客户端需要获取的页面,每页默认的条数
        //2.获取总页数
        //第一页起始数据0，第二页数据5，3：10->($curpage-1)*5
        //c. M方法
        $forum=M("bbs");
        $for=M("bbsreply");
        $user = M('user');
        $count=$forum->count();
        $list=$forum->join("LEFT JOIN __USER__ ON __BBS__.uid = __USER__.uid LEFT JOIN __CATEGORY__ ON __BBS__.tid = __CATEGORY__.c_id")
            // ->limit(($curpage-1)*5,$num)
            ->page($curpage,$num)
          ->select();
        //回复数量
        $list1 = array_column($list, 'bid');
        foreach ($list1 as $key => $value) {
            $value1=$value;
            $list2= $lists=$for->join("LEFT JOIN __BBS__ ON  __BBSREPLY__.qid =__BBS__.bid")->where("qid={$value1}")->count();
            $this->assign('list2',$list2);
            $data["replycount"]=$list2;
           $forum->data($data)->where("bid={$value1}")->save();
       }
        $uid = $_SESSION['uid'];
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $this->assign('count',$count);
        $this->assign('curr',$curpage);
        $this->assign('list',$list);
        $this->display();
    }

    public function show($bid){
        $forum=M("bbs");
        $for=M("bbsreply");
        $forum->where("bid = {$bid}")->setInc('click', 1);
       $list=$forum->join("LEFT JOIN __USER__ ON __BBS__.uid = __USER__.uid")->where("bid={$bid}")->select();
        $lists=$for->join("LEFT JOIN __BBS__ ON  __BBSREPLY__.qid =__BBS__.bid")->where("qid={$bid}")->count();
        $data=array();
        $user = M('user');
        $uid = $_SESSION['uid'];
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $data=$this->getCommlist($bid);//获取评论列表
        $this->assign("commlist",$data);
        $this->assign('list',$list);
        $this->assign('lists',$lists);
       // dump($list);
       //dump($lists);
        //dump($data);
       $this->display();
    }
    protected function getCommlist($bid,$parent_id = 0,&$result = array()){
        $arr = M('bbsreply')->join("LEFT JOIN __USER__ ON __BBSREPLY__.uid=__USER__.uid LEFT JOIN __BBS__ ON __BBSREPLY__.qid=__BBS__.bid")->where("parent_id = '".$parent_id."' AND qid={$bid}")->order("brtime desc")->select();
        if(empty($arr)){
            return array();
        }
        foreach ($arr as $cm) {
            $thisArr=&$result[];
            $cm["children"] = $this->getCommlist($bid,$cm["brid"],$thisArr);
            $thisArr = $cm;
        }
        return $result;
    }
    /**
     *添加评论
     */
    public function addComment(){
        $data=array();
        if((isset($_POST["bbsreply"]))&&(!empty($_POST["bbsreply"]))){
            $cm = json_decode($_POST["bbsreply"],true);//通过第二个参数true，将json字符串转化为键值对数组
           $cm['brtime']=date('Y-m-d H:i:s',time());
            //$cm['brtime']=time();
            $newcm = M('bbsreply');
            $cm['uid']=session(uid);
            $id = $newcm->add($cm);
            $cm["brid"] = $id;
            $data = $cm;
        }else{
            $data["error"] = "评论失败";
        }


    //   echo json_encode($data);
    }
    public function add(){
        $uid=session('uid');
        //$send=M('bbs');
        $kind=M("category")->select();
        $forum=M("bbs");
        $list=$forum->join("LEFT JOIN __USER__ ON __BBS__.uid = __USER__.uid LEFT JOIN __BBSREPLY__ ON __BBS__.bid = __BBSREPLY__.qid")->select();
       // $lists=$forum->join("LEFT JOIN __BBSREPLY__ ON __BBS__.bid = __BBSREPLY__.bid")->select();
        $forum->uid=$uid;
        $user = M('user');
        $uid = $_SESSION['uid'];
        $data2 = $user->where("uid = $uid")->find();
        $this->assign('data2',$data2);
        $this->assign('list',$list);
        $this->assign("kind",$kind);
      $this->display();
    }
    public function doadd(){
            $uid=session('uid');
            $forum = M('bbs');

            $data = $forum->create();
            $data['addtime'] = time();
            $data['uid']=$uid;
            $result = $forum->add($data);
            if ($result > 0) {
                $this->success('添加成功！', U('index'));
            } else {
                $this->error('添加失败！');
            }

    }

    /**
     *
     */
//采纳答案
    public function ajax_adoption_reply()
    {
        $qid= I('qid','0','intval');
        D('bbs')->set_solve($qid);//更新问题状态（改为解决状态）;
    }
}