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
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/serach/css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/serach/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/serach/css/demo.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/serach/css/style.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/register-login.css"/>
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/tab.css">

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
    </style>

    <style>
        .navbar-banner {
            margin-top: 50px;
            background: url("/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/homepage-bg.png");
            background-size: cover;
            backgtound-repeat: no-repeat;
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
            <a class="navbar-brand" href="<?php echo U('index/index');?>"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown ">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        课程
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="" href="<?php echo U('index/login');?>" >全部课程</a></li>
                        <li><a class="" href="<?php echo U('index/login');?>" >在线课程</a></li>
                        <li><a class="" href="<?php echo U('index/login');?>" >课堂视频</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="<?php echo U('index/login');?>">搜索课程</a>
                </li>
                <li class="">
                    <a href="<?php echo U('index/login');?>">夕问</a>
                </li>
                <li class=" new-nav logo-1111">
                    <a href="<?php echo U('index/login');?>">会员</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container layout layout-margin-top">
    <div class="content">
        <h2>加入我们</h2>
        <hr>
        <div style="width: 650px; position: relative; left:25%;">
            <form class="layui-form" method="post" action="<?php echo U('register/checkverify');?>">
                <div class="layui-form-item">
                    <label class="layui-form-label">登陆账户</label>
                    <div class="layui-inline">
                        <input id="user" type="text" name="uaccount" required  lay-verify="required" placeholder="请输入登陆账户" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-inline">
                        <i class="layui-icon" id="ri" style="color: green;font-weight: bolder;" hidden></i>
                    </div>
                    <!-- 错号 -->
                    <div class="layui-inline">
                        <i class="layui-icon" id="wr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">昵称</label>
                    <div class="layui-inline">
                        <input type="text" name="uname" required  lay-verify="required" placeholder="请输入昵称" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-inline">
                        <i class="layui-icon" id="ri" style="color: green;font-weight: bolder;" hidden></i>
                    </div>
                    <!-- 错号 -->
                    <div class="layui-inline">
                        <i class="layui-icon" id="wr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-inline">
                        <input id="pwd" type="password" name="upassword" required  lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-inline">
                        <i class="layui-icon" id="pri" style="color: green;font-weight: bolder;" hidden></i>
                    </div>
                    <!-- 错号 -->
                    <div class="layui-inline">
                        <i class="layui-icon" id="pwr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label" >确认密码</label>
                    <div class="layui-inline">
                        <input id="rpwd" type="password" name="rupassword" required  lay-verify="required" placeholder="再次输入密码" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-inline">
                        <i class="layui-icon" id="rpri" style="color: green;font-weight: bolder;" hidden></i>
                    </div>
                    <!-- 错号 -->
                    <div class="layui-inline">
                        <i class="layui-icon" id="rpwr" style="color: red; font-weight: bolder;" hidden>ဆ</i>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">输入验证码</label>
                    <div class="layui-inline">
                        <input type="text" id="register3" name="value" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-block">
                        <div class="layui-input-inline">
                        <img id="refimg" src="<?php echo U('register/getVerify');?>" onclick="refresh()" alt="验证码"><i class="layui-icon" onclick="refresh()">&#xe669;</i>
                        </div>
                        </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">身份</label>
                    <div class="layui-inline">
                        <select name="utype" lay-verify="required">
                            <option value="1">学生</option>
                            <option value="2">老师</option>

                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button type="submit" lay-submit lay-filter="sub" class="layui-btn">注册</button>
                        <a class="layui-btn" href="<?php echo U('index/phoneregister');?>">手机注册</a>
                        <a class="layui-btn" href="<?php echo U('index/login');?>">返回登录</a>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>




<div id="base-data" data-flash="false" data-is-login=false data-is-jwt=true data-socket-url="wss://comet.shiyanlou.com" data-msg-user="" data-msg-system=""></div>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.tabs.js"></script>
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
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js"></script>
<script>
    Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
        release: '3.12.13'
    }).install();
</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<script>
    //轮播
    jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
</script>
<div id="jinja-data" data-post-url="/registercheck"></div>


<script>
    //Demo
    layui.use(['form','jquery','layer'], function () {
        var form   = layui.form;
        var $      = layui.jquery;
        var layer  = layui.layer;
        //添加表单失焦事件
        //验证表单
        $('#user').blur(function() {
            var user = $(this).val();

            //alert(user);
            $.ajax({
                url:"<?php echo U('register/register');?>",
                type:'post',
                dataType:'text',
                data:{user:user},
                //验证用户名是否可用
                success:function(data){
                    if (data == 1) {
                        $('#ri').removeAttr('hidden');
                        $('#wr').attr('hidden','hidden');


                    } else {
                        $('#wr').removeAttr('hidden');
                        $('#ri').attr('hidden','hidden');
                        layer.msg('当前用户名已被占用! ')

                    }

                }
            })

        });

        // you code ...
        // 为密码添加正则验证
        $('#pwd').blur(function() {
            var reg = /^[\w]{6,12}$/;
            if(!($('#pwd').val().match(reg))){
                //layer.msg('请输入合法密码');
                $('#pwr').removeAttr('hidden');
                $('#pri').attr('hidden','hidden');
                layer.msg('请输入合法密码');
            }else {
                $('#pri').removeAttr('hidden');
                $('#pwr').attr('hidden','hidden');
            }
        });

        //验证两次密码是否一致
        $('#rpwd').blur(function() {
            if($('#pwd').val() != $('#rpwd').val()){
                $('#rpwr').removeAttr('hidden');
                $('#rpri').attr('hidden','hidden');
                layer.msg('两次输入密码不一致!');
            }else {
                $('#rpri').removeAttr('hidden');
                $('#rpwr').attr('hidden','hidden');
            };
        });

        //
        //添加表单监听事件,提交注册信息

    });
</script>

<script>
    layui.use(['form','jquery','layer'], function () {
        var form   = layui.form;
        var $      = layui.jquery;
        var layer  = layui.layer;
        //自定义验证规则
    });
    function refresh() {
        var refimg = document.getElementById('refimg');
        refimg.src="<?php echo U('register/getVerify');?>";
    }

</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/dest/frontend/index.js?=2016121272249"></script>
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