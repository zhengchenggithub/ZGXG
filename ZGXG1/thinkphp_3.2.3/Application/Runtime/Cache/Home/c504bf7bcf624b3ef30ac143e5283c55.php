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
    <title>朝过夕改网</title>
    <link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/font-awesome//4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/static/highlight.js/9.8.0/monokai-sublime.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/katex/0.6.0/katex.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/libs/videojs/5.11.7/video-js.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/css/layui.css">
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
    </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                <span class="sr-only">实验楼</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index1/index');?>">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        课程
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="" href="<?php echo U('Courses/index');?>" >全部课程</a></li>
                        <li><a class="" href="<?php echo U('courses/index1');?>" >在线课程</a></li>
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

<div class="container layout layout-margin-top">
    <div class="row">
        <div class="col-md-9 layout-body">
            <div class="content">
                <div class="content">
                    <div class="row course-cates">
                        <div class="col-md-1 course-cates-title">类别：</div>
                        <div class="col-md-11 course-cates-content">
                            <a class="active" href="<?php echo U('Courses/index');?>">全部</a>
                            <a class="" href="<?php echo U('courses/index1');?>">在线</a>
                            <a class="" href="<?php echo U('courses/index2');?>">课堂</a>
                        </div>
                    </div>
                </div>
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
                <div id="listpage"></div>
            </div>
        </div>

        <div class="col-md-3 layout-side">
            <div class="panel panel-default panel-userinfo">
                <div class="panel-body body-userinfo">
                    <div class="media userinfo-header">
                        <div class="media-left">
                            <div class="user-avatar">
                                <a class="avatar" href="<?php echo U('index/index');?>" data-toggle="modal" data-sign="signin">
                                    <img class="circle" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo-grey.png">
                                </a>
                            </div>
                        </div>
                        <div class="media-body">
                            <span class="media-heading username">欢迎来到朝过夕改网</span>
                        </div>
                    </div>

                </div>
            </div>


            <div class="sidebox">

                <div class="sidebox-header">
                    <h4 class="sidebox-title">最热路径</h4>
                </div>
                <div class="sidebox-body course-content side-list-body">
                    <a href="/paths/python"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513769430.png"> Python 研发工程师</a>
                    <a href="/paths/bigdata"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513926288.png"> 大数据工程师</a>
                    <a href="/paths/cpp"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513793360.png"> C++ 研发工程师</a>
                    <a href="/paths/security"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513867033.png"> 信息安全工程师</a>
                    <a href="/paths/linuxsys"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471514004752.png"> Linux 运维工程师</a>
                </div>
            </div>
        </div>
    </div>
</div>





<div id="base-data"


     data-flash="false"



     data-is-login=false

     data-is-jwt=true
     data-socket-url="wss://comet.shiyanlou.com"
     data-msg-user=""
     data-msg-system=""
></div>

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
<script>
    Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
        release: '3.12.13'
    }).install();
</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/dest/base/index.js?=2016121272249"></script>
<script>
    $('.org-body-courses .media h4').each(function() {
        var h = $(this).height();
        if (h > 25) {
            $(this).css({
                width: $(this).width(),
                'white-space': 'nowrap',
                'text-overflow': 'ellipsis',
                overflow: 'hidden'
            });
        }
    });
</script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js"></script>
<script>
    layui.use(['element', 'layer','laypage'], function(){
        var laypage = layui.laypage;

        //执行一个laypage实例
        laypage.render({
            elem: 'listpage'
            ,count: <?php echo ($count); ?> //数据总数，从服务端得到
            ,limit: 8
            ,curr: <?php echo ($curr); ?>
            ,theme: '#009688'
            ,layout: ['count', 'prev', 'page', 'next', 'refresh', 'skip']
            ,jump: function(obj, first){
                // //obj包含了当前分页的所有参数，比如：
                // console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                // console.log(obj.limit); //得到每页显示的条数

                //首次不执行
                if(!first){
                    if (location.href.indexOf('curpage') == -1)
                    {
                        location.href = "index/curpage/" +obj.curr+ '.html';
                    }else {
                        location.href = obj.curr + '.html';
                    }
                }
            }
        });
    });
</script>
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