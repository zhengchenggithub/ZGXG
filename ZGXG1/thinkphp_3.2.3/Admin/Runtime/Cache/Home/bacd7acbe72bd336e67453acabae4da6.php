<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
	<title>朝过夕改网站后台管理</title>
	<link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
	<!--<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/css/layui.css"/>-->
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/css/layui.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/css/admin.css"/>
	<style type="text/css">
		#thediv{
			width:200px;
			height:50px;
			background:#ccc;
		}

	</style>
	<script type="text/javascript">
        window.onload=function(){
            var obt=document.getElementById("dd");
            var odiv=document.getElementById("d1");
            var odiv1=document.getElementById("d2");
            obt.onclick=function(){
                if(odiv.style.display=="none"){
					odiv.style.display="block";
                    odiv1.style.display="none";
                    obt.value="隐藏模块";
                }
                else{
                    odiv.style.display="none";
                    odiv1.style.display="block";
                    obt.value="显示模块";
                }
            }
        }
	</script>

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
					<dd><a href="menu1.html"  data-id='1' data-text="后台菜单"><span class="l-line"></span>学生菜单</a></dd>
					<dd><a href="menu2.html" data-url="menu2.html" data-id='2' data-text="前台菜单"><span class="l-line"></span>老师菜单</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item layui-nav-itemed">
				<a href="javascript:;"><i class="iconfont">&#xe608;</i>课程管理</a>
				<dl class="layui-nav-child">
					<dd><a href="../Kecheng/articlelist.html" data-url="articlelist.html" data-id='3' data-text="文章管理"><span class="l-line"></span>视频管理</a></dd>
					<dd><a href="../Kecheng/danyelist.html" data-url="danyelist.html" data-id='9' data-text="单页管理"><span class="l-line"></span>专业管理</a></dd>
				</dl>
			</li>
			<li class="layui-nav-item">
				<a href="mima.html" data-html="admin-info.html" data-id='5' data-text="个人信息"><i class="iconfont">&#xe606;</i>个人信息</a>
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
				<!--<li class="layui-nav-item">-->
					<!--<a href="mima.html" data-url="admin-info.html" data-id='5' data-text="个人信息">超级管理员</a>-->
				<!--</li>-->
				<li class="layui-nav-item"><a href="<?php echo U('index/logout');?>">退出</a></li>
			</ul>
		</div>


		<div class="page-content-wrap">
			<form class="layui-form" action="serach">
				<div class="layui-form-item">
					<div class="layui-inline tool-btn">
						<a class="layui-btn layui-btn-small" href="<?php echo U('add');?>"><i class="layui-icon">&#xe654;</i></a>
						<!--<button class="layui-btn layui-btn-small layui-btn-warm listOrderBtn hidden-xs data-url=menu-add2.html"><i class="iconfont">&#xe656;</i></button>-->
					</div>
					<div class="layui-inline">
						<input type="text" name="uid" required lay-verify="required" placeholder="请输入账号" autocomplete="off" class="layui-input">
					</div>
					<button class="layui-btn layui-btn-normal" lay-submit="search" id="dd">搜索</button>
					<!--<button class="layui-btn" data-type="reload">搜索</button>-->

					<div id="thediv" style="display:none"></div>

				</div>
			</form>
			<div class=".col-md-1-7 col-sm-1-7 col-xs-1-7" id="d1" style="">
				<div class="layui-form" id="table-list">
					<table class="layui-table" lay-skin="line" >
						<thead>
						<tr>
							<td><input type="checkbox"  lay-skin="primary" lay-filter="allChoose" /></td>
							<th>ID</th>
							<th>账号</th>
							<th>姓名</th>
							<th>密码</th>
							<th>email</th>
							<th>手机</th>
							<th>类型</th>
							<th>操作</th>
						</tr>
						</thead>
						<tbody >
						<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><input type="checkbox"  lay-skin="primary" /></td>
								<td><?php echo ($vo["uid"]); ?></td>
								<td><?php echo ($vo["uaccount"]); ?></td>
								<td><?php echo ($vo["uname"]); ?></td>
								<td><?php echo ($vo["upassword"]); ?></td>
								<td><?php echo ($vo["uemail"]); ?></td>
								<td><?php echo ($vo["uphone"]); ?></td>
								<td><?php echo ($vo["utype"]); ?></td>
								<td>
									<a href="edit?uid=<?php echo ($vo["uid"]); ?>" class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
									<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del" onclick="showDel('<?php echo ($vo["uname"]); ?>','<?php echo ($vo["uid"]); ?>')">删除</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>

					</table>



				</div>
			</div>
			<div class=".col-md-1-7 col-sm-1-7 col-xs-1-7" id="d2" style="display: none">
				<div class="layui-form" id="table-list1">
					<table class="layui-table" lay-skin="line" >
						<thead>
						<tr>
							<td><input type="checkbox"  lay-skin="primary" lay-filter="allChoose" /></td>
							<th>ID</th>
							<th>姓名</th>
							<th>密码</th>
							<th>email</th>
							<th>手机</th>
							<th>类型</th>
							<th>操作</th>
						</tr>
						</thead>
						<tbody >
						<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><input type="checkbox"  lay-skin="primary" /></td>
								<td><?php echo ($vo["uid"]); ?></td>
								<td><?php echo ($vo["uname"]); ?></td>
								<td><?php echo ($vo["upassword"]); ?></td>
								<td><?php echo ($vo["uemail"]); ?></td>
								<td><?php echo ($vo["uphone"]); ?></td>
								<td><?php echo ($vo["utype"]); ?></td>
								<td>
									<a href="edit?uid=<?php echo ($vo["uid"]); ?>" class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
									<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del" onclick="showDel('<?php echo ($vo["uname"]); ?>','<?php echo ($vo["uid"]); ?>')">删除</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>

					</table>



				</div>
			</div>
			<div id="listpage"></div>
		</div>
	</div>

</div>


<!--<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/admin/layui/layui.js" type="text/javascript" charset="utf-8"></script>-->
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/layui2.4/layui.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/common.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/admin/static/admin/js/main.js" type="text/javascript" charset="utf-8"></script>
<script>
    // layui.use(['form', 'jquery', 'layer', 'dialog','laypage'], function() {
    //
    //
    // });
    function showDel(name, Uid) {
        var layer = layui.layer;


        layer.confirm("确认删除"+name+"?", {
            btn: ['确认','取消'] //按钮
        }, function(){
            location.href = 'delete?uid='+Uid;
        });
    }
</script>
<script>

    // layui.use(['form', 'jquery', 'layer', 'dialog','laypage'], function(){
    //     var laypage = layui.laypage();
	layui.use(['laypage'],function () {
	    var laypage = layui.laypage;
	    laypage.render({
			elem:'listpage',
			count:<?php echo ($count); ?>,
			limit:5,
			curr:<?php echo ($curr); ?>,


			jump:function (obj,first) {
				console.log(obj.curr);
				console.log(obj.limit);




				if(!first){
				    if(location.href.indexOf('currpage')==-1) {
                        location.href="menu1/currpage/"+obj.curr+'.html';
                    }else {
                        location.href=obj.curr+'.html';

					}

				}
            }
		});


    })
</script>
</body>

</html>