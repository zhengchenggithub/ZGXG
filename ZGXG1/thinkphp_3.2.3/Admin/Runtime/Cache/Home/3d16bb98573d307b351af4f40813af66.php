<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>朝过夕改网站后台管理</title>
	<link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/css/layui.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/css/admin.css"/>
</head>
<body>
<div class="main-layout" id='main-layout'>
	<!--侧边栏-->
	<div class="main-layout-side">
		<div class="m-logo"onclick="document.location.href='index.html'">
		</div>
		<ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;"><i class="iconfont">&#xe607;</i>用户管理</a>
				<dl class="layui-nav-child">
					<dd><a href="menu1.html" data-id='1' data-text="后台菜单"><span class="l-line"></span>学生菜单</a></dd>
					<dd><a href="menu2.html" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>老师菜单</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;"><i class="iconfont">&#xe608;</i>课程管理</a>
				<dl class="layui-nav-child">
					<dd><a href="../Kecheng/articlelist.html" data-url="article-list.html" data-id='3' data-text="文章管理"><span class="l-line"></span>视频管理</a></dd>
					<dd><a href="../Kecheng/danyelist.html" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>专业管理</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item">
				<a href="admininfo.html" data-html="admin-info.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>管理员个人信息</a>
			</li>
		</ul>
	</div>
	<div class="main-layout-container">
	<div class="main-layout-header">
		<div class="menu-btn" id="hideBtn">
			<a href="javascript:;">
				<span class="iconfont">&#xe60e;</span>
			</a>
		</div>
		<ul class="layui-nav" lay-filter="rightNav">
			<li class="layui-nav-item"><a href="email.html" data-url="email.html" data-id='4' data-text="邮件系统"><i class="iconfont">&#xe603;</i></a></li>
			<li class="layui-nav-item">
				<a href="admininfo.html" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>
			</li>
			<li class="layui-nav-item"><a href="<?php echo U('index/logout');?>">退出</a></li>
		</ul>
	</div>
<div class="layui-tab page-content-wrap">
	<ul class="layui-tab-title">
		<li class="layui-this" >修改密码</li>
	</ul>
	<div class="layui-tab-content">
		<div class="layui-tab-item layui-show" >
			<form id="password-from" class="mt30 form-horizontal" autocomplete="off" action="updatepassword" method="POST" onsubmit="return checkPass();">
				<div class="form-group"style="left: 800px">
					<label class="control-label col-md-2"style="margin-top: 150px;left: 100px">旧密码:</label>

					<div class="col-md-6">
						<input style="margin-top: 140px;margin-left: -53px"class="layui-input" id="pass" onblur="checkPass()" name="password" size="30" type="password" placeholder="旧密码" datatype="*6-16" nullmsg="请填写密码" errormsg="密码范围在6~16位之间" >
						<span id="tishi6" class="Validform_checktip"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2"style="margin-top: 213px;left:-750px">新密码:</label>

					<div class="col-md-6">
						<input style="margin-left: 160px;margin-top: -30px" class="layui-input" id="new_pass" onblur="checkNewpass()" name="new_password" size="30" type="password" placeholder="新密码" datatype="*6-16" nullmsg="请填写新密码" errormsg="密码范围在6~16位之间" plugin="passwordStrength">
						<span id="tishi7" class="Validform_checktip"></span>
						<div class="passwordStrength" style="display:none;"><b>密码强度：</b> <span>弱</span><span>中</span><span class="last">强</span></div>
					</div>
				</div>
				<div class="form-group">
					<label style="margin-top: -140px;margin-left: -540px"class="control-label col-md-2">用户ID:</label>
					<div class="col-md-6">
						<input style="margin-top: -150px;margin-left: -480px" type="text" name="aid" disabled autocomplete="off" class="layui-input layui-disabled" value="<?php echo ($aid); ?>">
						<span id="tishi8" class="Validform_checktip"></span>
					</div>
				</div>
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button class="layui-btn layui-btn-normal" style="margin-top: 50px;margin-left:100px">立即提交</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/layui.js" type="text/javascript" charset="utf-8"></script>
<script>
    //Demo
    layui.use(['form','element'], function(){
        var form = layui.form;
        var element = layui.element;
        form.render();
        //监听信息提交
        form.on('submit(adminInfo)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
        //监听密码提交
        form.on('submit(adminPassword)', function(data){
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>
</body>
</html>
<!--&lt;!&ndash;<input type="text" name="aname" disabled autocomplete="off" class="layui-input layui-disabled" value="<?php echo ($data[0]['aname']); ?>">&ndash;&gt;-->