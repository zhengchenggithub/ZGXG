<?php if (!defined('THINK_PATH')) exit(); session_id(); session_start(); ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>朝过夕改网</title>
    <link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/layui/css/layui.css"  media="all">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/wangEditor/css/wangEditor.min.css">
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/js/jquery.min.js"></script>
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/js/jquery.dialog.js"></script>
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/js/jquery.disappear.tooltip.js"></script>
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/wangEditor/js/wangEditor.min.js"></script>
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/question.css" rel="stylesheet" type="text/css">
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/common.css" rel="stylesheet" type="text/css">
    <style>
        .comment-filed{
            width:700px;
            /*margin:0 auto;*/
        }
        .comment-num{
            text-align: right;
            font-size:14px;
        }
        .div-txt-submit{
            text-align:right;
            margin-top:8px;
        }
        .comment-submit{
            background-color:#63B8FF;
            margin-top:15px;
            text-decoration:none;
            color:#fff;
            padding:5px;
            font-size:14px;
        }
        .txt-commit{
            border:1px solid blue;
            width:560px;
            height: 60px;
            padding: 10px;
        }
        .txt-reply{
            width: 100%;
            height: 60px;
        }
        .comment-filed-list{
            margin-top:20px;
            margin-left:40px;
        }
        .comment-list{
            margin-top:2px;
            width:688px;
            height:50px;
            border-top:1px solid gray;
        }
        .comment-ul{
            list-style:none;
            padding-left:0;
        }
        .head-pic{
            width:40px;
            height:40px;
        }
        .cm{
            position:relative;
            top:0px;
            left:50px;
            top:-40px;
            width:600px;
        }
        .cm-header{
            padding-left:5px;
        }
        .cm-content{
            padding-left:5px;
        }
        .cm-footer{
            padding-bottom:15px;
            text-align:right;
            border-bottom: 1px dotted #CCC;
        }
        .comment-reply{
            text-decoration:none;
            color:gray;
            font-size: 14px;
        }
        .children{
            list-style:none;
            background-color:#FAFAFA;
            padding-left:0;
            margin-left:50px;
        }
        .children-cm{
            position:relative;
            left:50px;
            top:-40px;
            width:90%;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index1/index');?>"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown ">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        课程
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="" href="<?php echo U('Courses/index');?>" >全部课程</a></li>
                        <li><a class="" href="<?php echo U('courses/index','ctype=1');?>" >在线课程</a></li>
                        <li><a class="" href="<?php echo U('courses/index2');?>" >课堂视频</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="<?php echo U('index1/serach');?>">搜索课程</a>
                </li>
                <li class="">
                    <a href="<?php echo U('Forum/index');?>">夕问</a>
                </li>
                <li class=" new-nav logo-1111">
                    <a href="#">会员</a>
                </li>
            </ul>
            <div class="navbar-right btns">
                <ul class="nav navbar-nav">
                    <li class="dropdown ">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo ($data2["uname"]); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="<?php echo U('personal/index','utype='.$data2['utype']);?>" >个人资料</a></li>
                            <li><a class="" href="<?php echo U('index1/logout');?>" >退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--显示提问，评论-->
<div class="container layout layout-margin-top">
    <div class="row">
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="col-md-9 layout-body">
                <div class="content question-detail">
                    <div style="padding: 30px;width: 938px;">
                        <div class="question-headline">
                            <div class="user-avatar " style="display: inline">
                                <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                    </a>
                                    <?php else: ?>
                                    <a class="avatar" href="/user/347060" target="_blank">
                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                    </a><?php endif; ?>
                            </div>
                            <h1 class="question-title"  style="display: inline"> <?php echo ($vo["btitle"]); ?></h1>
                        </div>

                        <div class="question-item-summary">
                            <div class="user-username " style="margin-left: 50px">
                                <p>
                                    <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                </p><!---->
                            </div>
                        </div>

                        <div class="follow">
                            <?php if($vo["uid"] == $_SESSION['uid'] AND $vo["issolve"] == 0): ?><input name="" type="button"  class="adoption J_adoption"  bid="<?php echo ($vo["bid"]); ?>" value="未解决">
                            <div class="clear"></div>
                                <?php elseif($vo["uid"] == $_SESSION['uid'] AND $vo["issolve"] == 1): ?>
                                <input name="" type="button"  class="adoption J_adoption"  bid="<?php echo ($vo["bid"]); ?>" value="已解决"><?php endif; ?>
                        </div>
                        <div id="info1" class="txt text">
                            <div id="info2" style="margin-left: 40px;margin-top: 10px"></div>
                        </div>
                        <input class="input-xlarge focused" style="float:left;" name="content" type="hidden" id="content1" value="<?php echo ($vo["bcontent"]); ?>" >

                        <div class="reply">
                            <div class="re1">
                                <div class="userimg">
                                    <?php if($user["uphoto"] == '' ): ?><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg" />
                                        <?php else: ?>
                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>" /><?php endif; ?>
                                </div>
                                <div class="rtit">我来回答</div>
                            </div>
                            <input name="bid" type="hidden" value="<?php echo ($vo["bid"]); ?>">
                            <div class="re2">
                                <div>
                                    <textarea class="txt-commit" replyid="0"></textarea>
                                </div>
                                <div class="div-txt-submit">
                                    <a class="comment-submit" uname=<?php echo ($_SESSION['uname']); ?> brtime="<?php echo ($vo["brtime"]); ?>" uid="<?php echo ($_SESSION['uid']); ?>" qid="<?php echo ($vo["bid"]); ?>" parent_id="0" href="javascript:void(0);"><span>发表评论</span></a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="comment-filed">
                    <!--评论列表显示区begin-->
                    <!-- <?php echo ($commentlist); ?> -->
                    <div class="comment-filed-list" >
                        <div><h3>全部评论</h3></div>
                        <div class="comment-num">
                            <h4><?php echo ($lists); ?>条评论</h4>
                        </div>
                        <?php if($lists == 0): ?><p align="center">暂无评论</p>
                        <?php else: ?>
                        <div class="comment-list" >
                            <!--一级评论列表begin-->
                            <ul class="comment-ul">
                                <?php if(is_array($commlist)): $i = 0; $__LIST__ = $commlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($data["brid"]); ?>">
                                        <div>
                                            <div class="user-avatar " style="display: inline;">
                                                <?php if($data['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                    </a>
                                                    <?php else: ?>
                                                    <a class="avatar" href="/user/347060" target="_blank">
                                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data["uphoto"]); ?>">
                                                    </a><?php endif; ?>
                                            </div>
                                            <div class="cm">
                                                <div class="cm-header">
                                                    <i class="layui-icon layui-icon-user"></i><span><?php echo ($data["uname"]); ?></span>&nbsp;&nbsp;
                                                    <span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo ($data["brtime"]); ?></span>
                                                </div>
                                                <div class="cm-content">
                                                    <p>
                                                        <?php echo ($data["brcontent"]); ?>
                                                    </p>
                                                </div>
                                                <div class="cm-footer">
                                                    <a class="comment-reply" uname=<?php echo ($_SESSION['uname']); ?> brtime="<?php echo ($data["brtime"]); ?>" qid="<?php echo ($data["bid"]); ?>" comment_id="<?php echo ($data["brid"]); ?>" href="javascript:void(0);" rel="external nofollow">回复</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--二级评论begin-->
                                        <ul class="children">
                                            <?php if(is_array($data["children"])): $i = 0; $__LIST__ = $data["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($child["brid"]); ?>">
                                                    <div >
                                                        <div class="user-avatar " style="display: inline;">
                                                            <?php if($child['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                                    <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                                </a>
                                                                <?php else: ?>
                                                                <a class="avatar" href="/user/347060" target="_blank">
                                                                    <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                                </a><?php endif; ?>
                                                        </div>
                                                        <div class="children-cm">
                                                            <div class="cm-header">
                                                                <i class="layui-icon layui-icon-user"></i><span><?php echo ($child["uname"]); ?></span>&nbsp;&nbsp;
                                                                <span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo ($child["brtime"]); ?></span>
                                                            </div>
                                                            <div class="cm-content">
                                                                <p>
                                                                    <?php echo ($child["brcontent"]); ?>
                                                                </p>
                                                            </div>
                                                            <div class="cm-footer">
                                                                <a class="comment-reply" replyswitch="off" uname=<?php echo ($_SESSION['uname']); ?> brtime="<?php echo ($child["brtime"]); ?>" uid="<?php echo ($_SESSION['uid']); ?>" qid="<?php echo ($child["bid"]); ?>" comment_id="<?php echo ($child["brid"]); ?>" href="javascript:void(0);" rel="external nofollow" >回复</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--三级评论begin-->
                                                    <ul class="children">
                                                        <?php if(is_array($child["children"])): $i = 0; $__LIST__ = $child["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$grandson): $mod = ($i % 2 );++$i;?><li comment_id="<?php echo ($grandson["brid"]); ?>">
                                                                <div >
                                                                    <div class="user-avatar " style="display: inline;">
                                                                        <?php if($grandson['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                                                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                                            </a>
                                                                            <?php else: ?>
                                                                            <a class="avatar" href="/user/347060" target="_blank">
                                                                                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($grandson["uphoto"]); ?>">
                                                                            </a><?php endif; ?>
                                                                    </div>
                                                                    <div class="children-cm">
                                                                        <div class="cm-header">
                                                                            <i class="layui-icon layui-icon-user"></i><span><?php echo ($grandson["uname"]); ?></span>&nbsp;&nbsp;
                                                                            <span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo ($grandson["brtime"]); ?></span>
                                                                        </div>
                                                                        <div class="cm-content">
                                                                            <p>
                                                                                <?php echo ($grandson["brcontent"]); ?>
                                                                            </p>
                                                                        </div>
                                                                        <div class="cm-footer">
                                                                            <!-- <a class="comment-reply" comment_id="1" href="javascript:void(0);" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" >回复</a> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </ul>
                                                    <!--三级评论end-->
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                        <!--二级评论end-->

                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <!--一级评论列表end-->
                        </div><?php endif; ?>
                    </div>
                    <!--评论列表显示区end-->
                </div>
                <!--</if>-->
            </div><?php endforeach; endif; ?>
        <div class="col-md-3 layout-side">

            <a class="btn side-btn" href="<?php echo U('Forum/add');?>">我要提问</a><!--data-toggle="modal" data-target="#askquestion"-->
            <div class="side-image">
                <a href="/vip" target="_blank">
                    <img src="https://static.shiyanlou.com/img/banner-vip.png">
                </a>
            </div>
            <div class="sidebox side-list related-question">
                <div class="sidebox-header">
                    <h4 class="sidebox-title">相关帖子</h4>
                </div>
                <div class="sidebox-body side-list-body">
                </div>
            </div>

        </div>
    </div>

</div>

<!--修正wangedit所出现的乱码-->
<script type="text/javascript">
    window.onload=function()
    {
        //第一步是先获取服务器传过来的图文信息值
        var info1 = document.getElementById("content1").value;
        //把图文信息的值通过innerHTML赋值给编辑器
        document.getElementById("info2").innerHTML=info1;
    }
</script>
<script>
     $(function(){
         //采纳答案
         $(".J_adoption").click( function () {
             var ajaxURL="<?php echo U('forum/ajax_adoption_reply');?>";
            // var rid=$(this).attr('rid');
             var qid=$(this).attr('bid');
             $(this).attr("disabled","disabled").addClass('disabled');
             $.getJSON(ajaxURL, {qid:qid}, function(json){
                 if (json.status==0){
                     disapperTooltip("remind", json.content);
                     $(this).removeAttr("disabled").removeClass('disabled');
                 }else if (json.status==1){
                     var LoginDialog = $(this).dialog({
                         title: false,
                         content:json.content,
                         footer: false,
                         header: false,
                         border: false,
                         innerPadding: false,
                         backdrop: true,
                         bgTransparent: true
                     });

                 }else{
                     disapperTooltip("remind","未知错误");
                     $(this).removeAttr("disabled").removeClass('disabled');
                 }
             });
         });

        $('body').delegate('.comment-submit','click',function(){
            var content = $.trim($(this).parent().prev().children("textarea").val());//根据布局结构获取当前评论内容
            $(this).parent().prev().children("textarea").val("");//获取完内容后清空输入框
            if(""==content){
                alert("评论内容不能为空!");
            }else{
                var cmdata = new Object();
                cmdata.brcontent = content;
                cmdata.parent_id = $(this).attr("parent_id");//上级评论id
                cmdata.qid = $(this).attr("qid");//问题id
                cmdata.uname = $(this).attr("uname");
                cmdata.brtime =$(this).attr("brtime");
                var replyswitch = $(this).attr("replyswitch");//获取回复开关锁属性
                $.ajax({
                    type:"POST",
                    url:"<?php echo U('Forum/addComment');?>",
                    data:{
                        bbsreply:JSON.stringify(cmdata)
                    },
                    dataType:"json",
                    success:function(data){
                        if(typeof(data.error)=="undefined"){
                            $(".comment-reply").next().remove();//删除已存在的所有回复div
                            //显示新增评论
                            var newli = "";
                            if(cmdata.parent_id == "0"){
                                //发表的是一级评论时，添加到一级ul列表中
                                newli = "<li comment_id='"+data.brid+"'>" +
                                    "<div >" +
                                    "<div class='cm'><div class='cm-header'><class='layui-icon layui-icon-user'></i><span>'+data.uname+'</span>&nbsp;&nbsp;"+
                                    "<span class='tpt-none-768'><i class='layui-icon layui-icon-log'></i>'+data.brtime+'</span>"+
                                "</div><div class='cm-content'><p>"+data.brcontent+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.brid+"'  href='javascript:void(0);'>回复</a></div></div></div><ul class='children'></ul></li>";
                                $(".comment-ul").prepend(newli);
                            }else{
                                //否则添加到对应的孩子ul列表中
                                if('off'==replyswitch){   //检验出回复关闭锁存在，即三级评论不再提供回复功能
                                    // newli = "<li comment_id='"+data.id+"'><div ><div><img class='head-pic'  src='"+data.head_pic+"' alt=''></div><div class='children-cm'><div  class='cm-header'><span>"+data.nickname+"</span><span>"+data.create_time+"</span></div><div class='cm-content'><p>"+data.content+"</p></div><div class='cm-footer'></div></div></div><ul class='children'></ul></li>";
                                    newli = "<li comment_id='"+data.brid+"'><div ><div class='cm'><div class='cm-header'><class='layui-icon layui-icon-user'></i><span>'+data.uname+'</span>&nbsp;&nbsp;<span class='tpt-none-768'><i class='layui-icon layui-icon-log'></i>'+data.brtime+'</span></div><div class='cm-content'><p>"+data.brcontent+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.brid+"'  href='javascript:void(0);'>回复</a></div></div></div><ul class='children'></ul></li>";

                                }else{   //二级评论的回复按钮要添加回复关闭锁属性
                                   // newli = "<li comment_id='"+data.id+"'><div ><div><img class='head-pic'  src='"+data.head_pic+"' alt=''></div><div class='children-cm'><div  class='cm-header'><span>"+data.nickname+"</span><span>"+data.create_time+"</span></div><div class='cm-content'><p>"+data.content+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.id+"'  href='javascript:void(0);' replyswitch='off' >回复</a></div></div></div><ul class='children'></ul></li>";
                                    newli = "<li comment_id='"+data.brid+"'>" +
                                        "<div >" +
                                        "<div class='cm'><div class='cm-header'><class='layui-icon layui-icon-user'></i><span>'+data.uname+'</span>&nbsp;&nbsp;"+
                                        "<span class='tpt-none-768'><i class='layui-icon layui-icon-log'></i>'+data.brtime+'</span>"+
                                        "</div><div class='cm-content'><p>"+data.brcontent+"</p></div><div class='cm-footer'><a class='comment-reply' comment_id='"+data.brid+"'  href='javascript:void(0)' replyswitch='off' >回复</a></div></div></div><ul class='children'></ul></li>";

                                }
                                $("li[comment_id='"+data.parent_id+"']").children("ul").prepend(newli);
                            }

                        }else{
                            //有错误信息
                            alert(data.error);
                        }

                    }
                });
            }


        });

        //点击"回复"按钮显示或隐藏回复输入框
        $("body").delegate(".comment-reply","click",function(){
            if($(this).next().length>0){  //判断出回复div已经存在,去除掉
                $(this).next().remove();
            }else{  //添加回复div
                $(".comment-reply").next().remove();//删除已存在的所有回复div
                //添加当前回复div
                var parent_id = $(this).attr("comment_id");//要回复的评论id
                var qid = $(this).attr("qid");
               // var parent_id = $(this).attr("comment_id");//要回复的评论id

                var divhtml = "";
                if('off'==$(this).attr("replyswitch")){  //二级评论回复后三级评论不再提供回复功能,将关闭属性附加到"提交回复"按钮"
                    divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' qid='"+qid+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);' replyswitch='off' >提交回复</a></div></div>";

                }else{
                    divhtml = "<div class='div-reply-txt' style='width:98%;padding:3px;' replyid='2'><div><textarea class='txt-reply' replyid='2' style='width: 100%; height: 60px;'></textarea></div><div style='margin-top:5px;text-align:right;'><a class='comment-submit'  parent_id='"+parent_id+"' qid='"+qid+"' style='font-size:14px;text-decoration:none;background-color:#63B8FF;' href='javascript:void(0);'>提交回复</a></div></div>";
                }
                $(this).after(divhtml);
            }
            $('.comment-submit').click(function()
            {
                history.go(0);
            });
        });
    })

     $('.comment').click(function()
     {
         window.location.reload();
     });
</script>
<script type="text/javascript">
    $(document).ready(function()
    {
        //点赞
        $(".J_praise").click( function () {
            var praURL="<?php echo U('question/ajax_inc_praise');?>";
            praise=$(this);
            rid=praise.attr('rid');
            qid=praise.attr('qid');
            answeruid=praise.attr('answeruid');
            $.getJSON(praURL, {rid:rid,answeruid:answeruid,qid:qid}, function(json){
                if (json.status==0){
                    disapperTooltip("remind", json.content);
                }else if (json.status==1){
                    praise.html(json.content);
                    disapperTooltip("success",'感谢你点赞！');
                }else{
                    disapperTooltip("remind","未知错误");
                }
            });

        });
    });
</script>
<script type="text/javascript">
    $('.J_adoption').click(function()
    {
        history.go(0);
    });
</script>
<script type="text/javascript">
    $('.comment-submit').click(function()
    {
        history.go(0);
    });
</script>
</body>
</html>