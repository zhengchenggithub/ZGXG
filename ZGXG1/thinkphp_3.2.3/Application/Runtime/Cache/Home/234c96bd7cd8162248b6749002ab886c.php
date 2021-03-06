<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lei Shi">
    <meta http-equiv="Cache-Control" content="o-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="csrf-token" content="1483758872##fd2cac389b2b7c009a744bcaecaa41d71592cfe8">
    <title>朝过夕改网</title>
    <link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/highlight.js/9.8.0/monokai-sublime.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/katex/0.6.0/katex.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/videojs/5.11.7/video-js.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/index.css">
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/ux-micro-icon.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/css/style.css" />
    <!--<link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/demo.css">-->
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/css/layui.css">
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/cropper/cropper.min.css" rel="stylesheet">
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/sitelogo/sitelogo.css" rel="stylesheet">

    <!--&lt;!&ndash;核心样式&ndash;&gt;-->
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/dest/ckin.css">
    <script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.min.js"></script>
    <script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.SuperSlide.2.1.1.js"></script>
    <style>
        @font-face {
            font-family: "lantingxihei";
            src: url("fonts/FZLTCXHJW.TTF");
        }

        /* modal 模态框*/
        #invite-user .modal-body {
            overflow: hidden;
        }
        #invite-user .modal-body .form-label {
            margin-bottom: 16px;
            font-size:14px;
        }
        #invite-user .modal-body .form-invite {
            width: 80%;
            padding: 6px 12px;
            background-color: #eeeeee;
            border: 1px solid #cccccc;
            border-radius: 5px;
            float: left;
            margin-right: 10px;
        }
        #invite-user .modal-body .msg-modal-style {
            background-color: #7dd383;
            margin-top: 10px;
            padding: 6px 0;
            text-align: center;
            width: 100%;
        }
        #invite-user .modal-body .modal-flash {
            position: absolute;
            top: 53px;
            right: 74px;
            z-index: 999;
        }
        /* end modal */

        .en-footer {
            padding: 30px;
            text-align: center;
            font-size: 14px;
        }
        #main .text:hover {color:#fff; background-color:#07BE90}
    </style>

    <style>
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top header" style="background: #191e29">
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
                            <?php echo ($data1["uname"]); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="<?php echo U('personal/index','utype='.$data1['utype']);?>" >个人资料</a></li>
                            <li><a class="" href="<?php echo U('index1/logout');?>" >退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container layout layout-margin-top">
    <div class="row">
        <div class="col-md-9 layout-body">
            <div class="content">
                <div class="active" id="dis1">
                    <h2>我的课程</h2>
                    <hr class="layui-bg-green">
                    <div class="row">
                        <?php if(is_array($data)): foreach($data as $key=>$data): ?><div class="col-sm-6">
                                <a href="<?php echo U('Chapter/index','cid='.$data['cid']);?>">
                                    <div class="path-item">
                                        <div class="col-xs-5 col-md-4  path-img">
                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data["cphoto"]); ?>">
                                        </div>
                                        <div class="col-xs-7 col-md-8">
                                            <div class="path-name"><?php echo ($data["cname"]); ?></div>
                                            <div class="path-course-num">
                                                <span><?php echo ($arr[$data['cid']-1]); ?></span>
                                                个视频
                                            </div>
                                        </div>
                                        <div class="desc-layer">
                                            <div class="center"><?php echo ($data["cdescribe"]); ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
                <div id="dis2" style="display: none">
                    <h2>修改信息</h2>
                    <hr class="layui-bg-green">
                    <form class="layui-form" method="post" action="<?php echo U('personal/doeditor');?>">
                        <div class="layui-form-item" style="display: none">
                            <label class="layui-form-label">ID</label>
                            <div class="layui-input-block">
                                <input type="text" name="uid" required  lay-verify="required" class="layui-input" value="<?php echo ($data1["uid"]); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">用户名</label>
                            <div class="layui-input-block">
                                <input type="text" name="uname" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data1["uname"]); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">邮箱</label>
                            <div class="layui-input-block">
                                <input type="email" name="uemail" required  lay-verify="required|email"  autocomplete="off" class="layui-input" value="<?php echo ($data1["uemail"]); ?>">
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <label class="layui-form-label">电话</label>
                            <div class="layui-input-block">
                                <input type="text" name="uphone" required  lay-verify="required|phone" autocomplete="off" class="layui-input" value="<?php echo ($data1["uphone"]); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit>立即修改</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="dis3" style="display: none">
                    <h2>修改密码</h2>
                    <hr class="layui-bg-green">
                    <!--修改密码-->
                    <div class="layui-form-item" style="display: none">
                        <label class="layui-form-label">郑密码</label>
                        <div class="layui-input-block">
                            <input id="zmopwd" type="text" name="zmopwd" required  lay-verify="required" autofocus placeholder="请输入原密码" autocomplete="off" class="layui-input" value="<?php echo ($data1["upassword"]); ?>">
                        </div>
                        <div id="mopwd-aux" class="aux-self-word"></div>
                    </div>
                    <form class="layui-form" method="post" action="<?php echo U('personal/doeditor');?>">
                        <div class="layui-form-item" style="display: none">
                            <label class="layui-form-label">ID</label>
                            <div class="layui-input-block">
                                <input type="text" name="uid" required  lay-verify="required" class="layui-input" value="<?php echo ($data1["uid"]); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">原密码</label>
                            <div class="layui-input-block">
                                <input type="text" name="pwd"  lay-verify="required|pwd" autocomplete="off" placeholder="请输入原密码" class="layui-input">
                            </div>
                            <!--<div class="layui-input-block">-->
                            <!--<input id="mopwd" type="text" name="mopwd" required lay-verify="required" autofocus placeholder="请输入原密码" autocomplete="off" class="layui-input">-->
                            <!--</div>-->
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">新密码</label>
                            <div class="layui-input-block">
                                <input id="newpwd1" type="text" name="upassword" required  lay-verify="required|upassword" placeholder="请输入新密码" autocomplete="off" class="layui-input">
                            </div>
                            <div id="newpwd1-aux" class="aux-self-word"></div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">再次输入</label>
                            <div class="layui-input-block">
                                <input id="newpwd2" type="text" name="rupassword" required  lay-verify="required|rupassword" placeholder="再次输入密码" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit>立即修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3 layout-side">
            <div class="panel panel-default panel-userinfo">
                <div class="panel-body body-userinfo">
                    <div class="media userinfo-header">
                        <div style="text-align: center">
                            <div class="layui-inline">
                                <div class="ibox-content">
                                    <div class="row">
                                        <div id="crop-avatar" class="col-md-6">
                                            <div class="avatar-view" title="Change Logo Picture">
                                                <img id="img" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data1["uphoto"]); ?>" alt="Logo">
                                            </div>
                                        </div>
                                        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!--<form action="<?php echo U('personal/uploadimg');?>" method="post" enctype="multipart/form-data">-->
                                                        <!--<input type="file" multiple name="uphoto"/>-->
                                                        <!--<input type="submit" value="上传">-->
                                                    <!--</form>-->
                                                    <form class="avatar-form" action="<?php echo U('personal/uploadimg');?>" enctype="multipart/form-data" method="post">
                                                        <div class="modal-header">
                                                            <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                            <h4 class="modal-title" id="avatar-modal-label">更改头像</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="avatar-body">
                                                                <div class="avatar-upload">
                                                                    <label for="avatarInput">图片上传</label>
                                                                    <input class="avatar-input" id="avatarInput" name="uphoto" type="file"></div>
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="avatar-wrapper"></div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="avatar-preview preview-lg"></div>
                                                                        <div class="avatar-preview preview-md"></div>
                                                                        <div class="avatar-preview preview-sm"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row avatar-btns">
                                                                    <div class="col-md-9">
                                                                        <div class="btn-group">
                                                                            <button class="btn" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees"><i class="fa fa-undo"></i> 向左旋转</button>
                                                                        </div>
                                                                        <div class="btn-group">
                                                                            <button class="btn" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees"><i class="fa fa-repeat"></i> 向右旋转</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button class="btn btn-success btn-block" type="submit"><i class="fa fa-save"></i>保存修改</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                    </div>
                                </div>
                            </div>
                            <h3><?php echo ($data1["uname"]); ?></h3>
                        </div>

                    </div>

                </div>
            </div>


            <div class="sidebox">
                <div id=main class="sidebox-body course-content side-list-body active" style="text-align: center">
                    <a onclick="opens(1)" href="javascript:void(0)" class="text" style="font-size: 20px"><i class="layui-icon" style="font-size: 20px">&#xe66f;</i>我的课程</a>
                    <a onclick="opens(2)" href="javascript:void(0)" class="text" style="font-size: 20px"><i class="layui-icon" style="font-size: 20px">&#xe68e;</i>修改信息</a>
                    <a onclick="opens(3)" href="javascript:void(0)" class="text" style="font-size: 20px"><i class="layui-icon" style="font-size: 20px">&#xe673;</i>修改密码</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function opens(obj){
        for(var i = 1;i<=3;i++){
            if(i == obj){
                document.getElementById("dis"+i).style.display="block";
            }else
                document.getElementById("dis"+i).style.display="none"
        }
    }
    $(function(){
        $('img').each(function(){
            if($(this).attr('src').length < 40){
                $(this).attr('src','/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/logo.jpg')
            }
        });
    })

</script>

<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/dest/lib/lib.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/jquery/2.2.4/jquery.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/ace/1.2.5/ace.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/aliyun/aliyun-oss-sdk-4.3.0.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/highlight.js/9.8.0/highlight.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/jspdf/1.2.61/jspdf.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/plupload/2.1.9/js/plupload.full.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/zeroclipboard/2.2.0/ZeroClipboard.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/videojs/video.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/bootstrap-tour/0.11.0/js/bootstrap-tour.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/bootstrap-table/1.11.0/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/bootstrap-table/1.11.0/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/ravenjs/3.7.0/raven.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/ckin.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/cropper/cropper.min.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/sitelogo/sitelogo.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/photo/bootstrap/js/bootstrap.min.js"></script>

<script>
    layui.use(['form','layedit','laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;
        var zmopwd = document.getElementById('zmopwd').value;
        //自定义验证规则
        form.verify({
            pwd: function(value){
                if(value != zmopwd){
                    return '旧密码不相同';
                }
            },
            upassword: function(value){
                if(value.length < 6){
                    return '请输入至少6位密码';
                }
                if(value == zmopwd){
                    return '新密码不能与旧密码相同！';
                }
            },
            rupassword: function(value){
                var pass2 = $("#newpwd2").val();
                var pass1 = $("#newpwd1").val();
                if(pass1 != pass2) {
                    return '两次输入的密码不一致';
                }
            }
            ,phone: [/^1[3|4|5|7|8]\d{9}$/, '手机必须11位，只能是数字！']
            ,email: [/^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$|^1[3|4|5|7|8]\d{9}$/, '邮箱格式不对']
        });
        //创建一个编辑器
        // layedit.build('LAY_demo_editor');
        // //监听提交
        // form.on('submit(demo1)', function(data){
        //     layer.alert(JSON.stringify(data.field), {
        //         title: '最终的提交信息'
        //     })
        //     return false;
        // });
    });
</script>







<script>
    Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
        release: '3.12.13'
    }).install();
</script>
<script>
    //Demo
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
    });
</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<script>
    //轮播
    jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
</script>
<div id="jinja-data" data-post-url="/registercheck"></div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix footer-col">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png">
                <div class="footer-slogan">动手做实验，轻松学编程</div>
                <div class="col-xs-2">
                    <div class="social-item footer-weixin-item">
                        <i class="fa fa-weixin"></i>
                        <div class="footer-weixin">
                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/footer-weixin.png">
                        </div>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="social-item footer-qq-item">
                        <i class="fa fa-qq"></i>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="social-item footer-weibo-item">
                        <a href="http://weibo.com/shiyanlou2013" target="_blank">
                            <i class="fa fa-weibo"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">公司</div>
                <a href="#" target="_blank">关于我们</a><br>
                <a href="#" target="_blank">联系我们</a><br>
                <a href="#" target="_blank">加入我们</a><br>
                <a href="#" target="_blank">技术博客</a><br>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">合作</div>
                <a href="#" target="_blank">我要投稿</a><br>
                <a href="#" target="_blank">教师合作</a><br>
                <a href="#" target="_blank">高校合作</a><br>
                <a href="#" target="_blank">友情链接</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">服务</div>
                <a href="#" target="_blank">实战训练营</a><br>
                <a href="#" target="_blank">会员服务</a><br>
                <a href="#" target="_blank">实验报告</a><br>
                <a href="#">常见问题</a><br>
                <a href="#" target="_blank">隐私条款</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">学习路径</div>
                <a href="#" target="_blank">Python学习路径</a><br>
                <a href="#" target="_blank">Linux学习路径</a><br>
                <a href="#" target="_blank">大数据学习路径</a><br>
                <a href="#" target="_blank">Java学习路径</a><br>
                <a href="#" target="_blank">PHP学习路径</a><br>
                <a href="#", target="_blank">全部</a>
            </div>
        </div>
    </div>
    <div class="text-center copyright">
        <span>Copyright @2013-2016 朝过夕改在线教育</span>
        <span class="ver-line"> | </span>
        <a href="#" target="_blank">蜀ICP备13019762号</a>
        <script type="text/javascript">
            var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_5902315'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/stat.php%3Fid%3D5902315' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?6eb47a3aeda6ea31fa53985fdfdc78e8";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-89338452-1', 'auto');
            ga('send', 'pageview');
        </script>
    </div>
</div>
</body>
</html>