<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title>网站后台管理模版</title>
    <!--<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/css/layui.css"/>-->
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/css/admin.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/css/layui.css"/>
</head>
<body>
<div class="main-layout" id='main-layout'>
    <!--侧边栏-->
    <div class="main-layout-side">
        <div class="m-logo"onclick="document.location.href='../Emplist/index.html'">
        </div>
        <ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
            <li class="layui-nav-item layui-nav-itemed">
                <a href="javascript:;"><i class="iconfont">&#xe607;</i>用户管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo U('Emplist/menu1');?>"  data-id='1' data-text="后台菜单"><span class="l-line"></span>学生菜单</a></dd>
                    <dd><a href="<?php echo U('Emplist/menu2');?>" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>老师菜单</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;"><i class="iconfont">&#xe608;</i>课程管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo U('Kecheng/articlelist');?>" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>视频管理</a></dd>
                    <dd><a href="<?php echo U('Kecheng/danyelist');?>" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>专业管理</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo U('Emplist/mima');?>" data-html="admin-info.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>个人信息</a>
            </li>
        </ul>
    </div>
    <!--右侧内容-->
    <div class="main-layout-container">
        <!--头部-->
        <div class="main-layout-header">
            <div class="menu-btn" id="hideBtn">
                <a href="javascript:;">
                    <span class="iconfont">&#xe60e;</span>
                </a>
            </div>
            <ul class="layui-nav" lay-filter="rightNav">
                <li class="layui-nav-item"><a href="email.html" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i></a></li>
                <li class="layui-nav-item">
                    <a href="mima.html" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>
                </li>
                <li class="layui-nav-item"><a href="<?php echo U('index/logout');?>">退出</a></li>
            </ul>
        </div>
        <div class="wrap-container">
            <form class="layui-form" style="width: 90%;padding-top: 20px;" method="post" action="<?php echo U('kecheng/doedit');?>">
                <div class="layui-form-item" style="display: none">
                    <label class="layui-form-label">ID：</label>
                    <div class="layui-input-block">
                        <input required lay-verify="required" placeholder="请输入名称" autocomplete="off" class="layui-input" type="text"name="vid" value="<?php echo ($Video["vid"]); ?>" >
                    </div>

                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">视频名：</label>
                    <div class="layui-input-block">
                        <input type="text" name="vname" value="<?php echo ($Video["vname"]); ?>" required lay-verify="required" placeholder="请输入视频名" autocomplete="off" class="layui-input">
                    </div>

                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" >立即提交</button>
                        <button type="button" class="layui-btn layui-btn-primary " onclick="window.history.back()">返回</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="main-mask">

    </div>
</div>


<!--<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>-->
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/main.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/module/dialog.js" type="text/javascript" charset="utf-8"></script>
<script>
    //Demo
    layui.use(['form'], function() {
        var form = layui.form;
        form.render();
        //监听提交
        form.on('submit(formDemo)', function(data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>
</body>

</html>