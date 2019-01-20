<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>朝过夕改网站后台管理</title>
	<link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/css/admin.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/css/layui.css" media="all"/>
</head>

<body>
<div class="main-layout" id='main-layout'>
	<!--侧边栏-->
	<div class="main-layout-side">
		<div class="m-logo">
			<a href="index.html"></a>
		</div>
		<ul class="layui-nav layui-nav-tree" lay-filter="leftNav">
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;"><i class="iconfont">&#xe607;</i>用户管理</a>
				<dl class="layui-nav-child">
					<dd><a href="menu1.html"  data-id='1' data-text="后台菜单"><span class="l-line"></span>学生菜单</a></dd>
					<dd><a href="menu2.html" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>老师菜单</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;"><i class="iconfont">&#xe608;</i>课程管理</a>
				<dl class="layui-nav-child">
					<dd><a href="../Kecheng/articlelist.html" data-url="articlelist.html" data-id='3' data-text="文章管理"><span class="l-line"></span>视频管理</a></dd>
					<dd><a href="../Kecheng/danyelist.html" data-url="danye-list.html" data-id='9' data-text="单页管理"><span class="l-line"></span>专业管理</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item">
				<a href="mima.html" data-html="admininfo.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>个人信息</a>
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
					<!--<a href="mima.html" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>-->
				</li>
				<li class="layui-nav-item"><a href="<?php echo U('index/logout');?>">退出</a></li>
			</ul>
		</div>

		<!--主体内容-->
				<div class="main-layout-body">
					<!--tab 切换-->
					<div class="layui-tab layui-tab-brief main-layout-tab" lay-filter="tab" lay-allowClose="true">
					  <ul class="layui-tab-title">
					    <li class="layui-this welcome">后台主页</li>
					  </ul>
					  <div class="layui-tab-content">
					    <div class="layui-tab-item layui-show" style="background: #f5f5f5;">
					    	<!--1-->
					    	<iframe src="welcome.html" width="100%" height="100%" name="iframe" scrolling="auto" class="iframe" framborder="0"></iframe>
					    	<!--1end-->
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<!--遮罩-->
			<div class="main-mask">

			</div>
		</div>
		<script type="text/javascript">
			var scope={
				link:'./welcome.html'
			}
		</script>
	<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/common.js" ></script>
	<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/layui.js" ></script>
	<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/main.js" ></script>
	</body>
</html>