<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lei Shi">
    <meta http-equiv="Cache-Control" content="o-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="csrf-token" content="1483780974##87f89328c5616669f00302a263fe9061bb852818">
    <title> Linux 基础入门（新版） - 实验楼</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/highlight.js/9.8.0/monokai-sublime.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/katex/0.6.0/katex.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/videojs/5.11.7/video-js.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/dest/styles.css?=2016121272249">
    <style>
        @font-face {
            font-family: "lantingxihei";
            src: url("/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/fonts/FZLTCXHJW.TTF");
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
        .set_image_all {
            cursor: pointer;
            position: relative;
        }

        .set_image_all .set_image_item {
            position: relative;
            display: inline-block;
            z-index: 11;
            visibility: visible;
        }

        .set_image_all .set_image_top {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 10;
        }

        .set_image_all .set_image_top>div {
            display: inline-block;
            overflow: hidden;
        }

        .set_image_all .set_image_top>div>img {
            height: 100%;
        }

        .grade {
            vertical-align: top;
        }
    </style>
    <style>
        .bootcamp-infobox {
            margin: 50px 0 0;
        }
        .invite-friends-link {
            margin-top:10px;
            padding-left:8px;
        }
        .invite-friends-link input {
            margin-left:-5px;
        }
        .invite-friends-link button {
            float:left;
            margin-top:5px;
            margin-left:-5px;
        }
        .invite-friends-link .copy-msg {
            float:left;
            margin-top:10px;
            margin-left:20px;
            color:#42b1ad;
        }
        p.join-vip-faq {
            margin-top:20px;
            margin-bottom:-50px;
            font-size:13px;
        }
        p.join-vip-faq img {
            height:13px;
            width:13px;
            margin-top:-2px;
        }
        a.vip-without-bean {
            font-size:18px;
            line-height:30px;
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
                        <li><a class="" href="<?php echo U('Courses/index');?>" >全部课程</a></li>
                        <li><a class="" href="<?php echo U('courses/index','ctype=1');?>" >在线课程</a></li>
                        <li><a class="" href="<?php echo U('courses/index','ctype=2');?>" >课堂视频</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#">学习路径</a>
                </li>
                <li class="">
                    <a href="#">夕问</a>
                </li>
                <li class=" bootcamp new-nav logo-1111">
                    <a href="#">训练营</a>
                </li>
                <li class=" new-nav logo-1111">
                    <a href="#">会员</a>
                </li>
            </ul>


            <div class="navbar-right btns">
                <a class="btn btn-default navbar-btn sign-in" data-sign="signin" href="#sign-modal" data-toggle="modal">登录</a>
                <a class="btn btn-default navbar-btn sign-up" data-sign="signup" href="#sign-modal" data-toggle="modal">注册</a>
            </div>


            <form class="navbar-form navbar-right" action="search" method="get" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="search" autocomplete="off" placeholder="搜索 课程/问答">
                </div>
            </form>
        </div>
    </div>
</nav>


<div class="container layout layout-margin-top">
    <ol class="breadcrumb">
        <li><a href="<?php echo U('Courses/index');?>">全部课程</a></li>
        <li class="active">
            <a href="">
                Linux 基础入门（新版）
            </a>
        </li>
    </ol>

    <div class="row">
        <div class="col-md-9 layout-body">
            <div class="side-image side-image-mobile">
                <img src="https://dn-simplecloud.shiyanlou.com/ncn1.jpg?imageView2/0/h/300">
            </div>
            <div class="content course-infobox">
                <div class="clearfix course-infobox-header">
                    <h4 class="pull-left course-infobox-title">
                        <span>Linux 基础入门（新版）</span>
                    </h4>
                    <div class="pull-right course-infobox-follow"
                         data-follow-url="/courses/1/follow"
                         data-unfollow-url="/courses/1/unfollow">
                        <!--<span class="course-infobox-followers">4401</span>-->
                        <!--<span>人关注</span>-->

                        <!--<i class="fa fa-star-o" data-next="/login?next=%2Fcourses%2F1"></i>-->

                    </div>
                </div>
                <div class="clearfix course-infobox-body">
                    <div class="course-infobox-content">
                        <p>要在实验楼愉快地学习，先要熟练地使用 Linux，本实验介绍 Linux 基本操作，shell 环境下的常用命令。</p>
                    </div>
                    <div class="pull-right course-infobox-price">
                    </div>
                </div>

                <div class="clearfix course-infobox-footer">
                    <!--<div class="pull-right course-infobox-learned">85243 人学过</div>-->
                </div>

            </div>
            <div class="content">
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#labs" aria-controls="labs" role="tab" data-toggle="tab">课程列表</a>
                    </li>

                    <li role="presentation">
                        <a href="#comments" class="stat-event" aria-controls="comments" role="tab" data-stat="course_comment" data-toggle="tab">课程评价</a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="labs">

                        <div class="lab-item ">
                            <div class="lab-item-index">第1节</div>
                            <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" title="Linux 系统简介">Linux 系统简介</div>
                            <div class="pull-right lab-item-ctrl">
                                <a class="btn btn-default" href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/1">下载视频</a>
                                <a class="btn btn-primary" href="<?php echo U('Play/index');?>" data-toggle="modal" data-sign="signin" data-next="/courses/1">开始观看</a>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane course-comment" id="comments">
                        <div class="comment-box">
                            <div class="comment-form">
                                <div id="star_grade3"></div>
                                <div class="comment-form-unlogin">
                                    请
                                    <a href="#sign-modal" data-toggle="modal" data-sign="signin" data-next="/courses/1"> 登录 </a>
                                    后发表评论
                                </div>
                            </div>
                            <div class="comment-title">最新评论</div>
                            <div class="comment-list">
                            </div>
                            <div class="pagination-container"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-3 layout-side">
            <div class="side-image side-image-pc">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/ncn1.jpg?imageView2/0/h/300">
            </div>
            <div class="sidebox mooc-teacher">
                <div class="sidebox-header mooc-header">
                    <h4 class="sidebox-title">课程教师</h4>
                </div>
                <div class="sidebox-body mooc-content">
                    <a href="/user/20406" target="_blank">
                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/Linux&c.png">
                    </a>
                    <div class="mooc-info">
                        <div class="name"><strong>Edward</strong> </div>

                        <div class="courses">共发布过<strong>18</strong>门课程</div>
                    </div>
                    <div class="mooc-extra-info">
                        <div class="word long-paragraph">
                            资深程序员，5年Linux运维、企业级开发经验及数据库实战和教学经验。
                        </div>
                    </div>
                </div>
                <div class="sidebox-footer mooc-footer">
                    <!--<a href="/teacher/20406" target="_blank">查看老师的所有课程 ></a>-->
                </div>
            </div>


            <div class="sidebox adv-course">
                <div class="sidebox-header">
                    <h4 class="sidebox-title">进阶课程</h4>
                </div>
                <div class="sideobx-body course-content">

                    <a href="/courses/204">实用Linux Shell编程</a>

                    <a href="/courses/2">Vim编辑器</a>

                    <a href="/courses/68">Linux命令实例练习</a>

                </div>
            </div>




        </div>
    </div>
</div>


<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/dest/lib/lib.js?=2016121272249"></script>
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
<script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/markingSystem.js"></script>
<script type="text/javascript">
    $("#star_grade3").markingSystem({
        backgroundImageInitial: '/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/images/face_happy_bottom.png',
        backgroundImageOver: '/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/images/face_happy_top.png',
        num: 5,
        havePoint: true,
        haveGrade: true,
        unit: '星',
        grade: 1,
        height: 32,
        width: 32,
    })
</script>

<script>
    Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
        release: '3.12.13'
    }).install();
</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/dest/course/labs.js?=2016121272249"></script>

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
                <a href="../aboutus/index.html" target="_blank">关于我们</a><br>
                <a href="../contact/index.html" target="_blank">联系我们</a><br>
                <a href="http://www.simplecloud.cn/jobs.html" target="_blank">加入我们</a><br>
                <a href="https://blog.shiyanlou.com" target="_blank">技术博客</a><br>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">合作</div>
                <a href="../contribute/index.html" target="_blank">我要投稿</a><br>
                <a href="../labs/index.html" target="_blank">教师合作</a><br>
                <a href="../edu/index.html" target="_blank">高校合作</a><br>
                <a href="../friends/index.html" target="_blank">友情链接</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">服务</div>
                <a href="../bootcamp/index.html" target="_blank">实战训练营</a><br>
                <a href="../vip/index.html" target="_blank">会员服务</a><br>
                <a href="../courses/reports/index.html" target="_blank">实验报告</a><br>
                <a href="../questions/index.html?tag=%E5%B8%B8%E8%A7%81%E9%97%AE%E9%A2%98" target="_blank">常见问题</a><br>
                <a href="../privacy/index.html" target="_blank">隐私条款</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2 footer-col">
                <div class="col-title">学习路径</div>
                <a href="../paths/python/index.html" target="_blank">Python学习路径</a><br>
                <a href="../paths/linuxdev/index.html" target="_blank">Linux学习路径</a><br>
                <a href="../paths/bigdata/index.html" target="_blank">大数据学习路径</a><br>
                <a href="../paths/java/index.html" target="_blank">Java学习路径</a><br>
                <a href="../paths/php/index.html" target="_blank">PHP学习路径</a><br>
                <a href="../paths/index.html", target="_blank">全部</a>
            </div>
        </div>
    </div>
    <div class="text-center copyright">
        <span>Copyright @2013-2016 实验楼在线教育</span>
        <span class="ver-line"> | </span>
        <a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备13019762号</a>
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