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
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/css/index2.css">
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
                            <?php echo ($data3["uname"]); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="" href="<?php echo U('personal/index','utype='.$data3['utype']);?>" >个人资料</a></li>
                            <li><a class="" href="<?php echo U('index1/logout');?>" >退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container layout layout-margin-top">
    <!--<ol class="breadcrumb">-->
    <!--<li><a href="javascript:history.go(-1)">上一页</a></li>-->
    <!--<li class="active">-->
    <!--<a href="">-->
    <!--<?php echo ($data1["cname"]); ?>-->
    <!--</a>-->
    <!--</li>-->
    <!--</ol>-->

    <div class="row">
        <div class="col-md-9 layout-body">
            <div class="side-image side-image-mobile">
                <img src="https://dn-simplecloud.shiyanlou.com/ncn1.jpg?imageView2/0/h/300">
            </div>
            <div class="content course-infobox">
                <div class="clearfix course-infobox-header">
                    <h4 class="pull-left course-infobox-title">
                        <span><?php echo ($data1["cname"]); ?></span>
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
                        <p><?php echo ($data1["cdescribe"]); ?></p>
                    </div>
                    <div class="pull-right course-infobox-price">
                    </div>
                </div>

                <div class="clearfix course-infobox-footer" style="margin-left: 650px">
                    <?php if($data4 == 1 ): ?><a href="<?php echo U('chapter/selectcourses','cid='.$data1['cid']);?>" class="layui-btn" style="text-decoration: none">选择此课程</a>
                        <?php elseif($data4 == 0 ): ?>
                        <a href="<?php echo U('chapter/deletecourses','cid='.$data1['cid']);?>" class="layui-btn layui-btn-danger" style="text-decoration: none">取消此课程</a>
                        <?php else: endif; ?>
                </div>

            </div>
            <div class="content">
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="">
                        <a href="javascript:void(0)" aria-controls="labs" role="tab" data-toggle="tab" onclick="opens(1)">课程列表</a>
                    </li>

                    <li role="presentation">
                        <a href="javascript:void(0)" class="stat-event" aria-controls="comments" role="tab" data-toggle="tab"onclick="opens(2)">课程评分</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="dis1">
                        <?php if(is_array($data2)): $k = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><div class="lab-item ">
                                <div class="lab-item-index">第<?php echo ($k); ?>节</div>
                                <div class="lab-item-title" data-toggle="tooltip" data-placement="bottom" ><?php echo ($data["vname"]); ?></div>
                                <div class="pull-right lab-item-ctrl">
                                    <a class="btn btn-default" href="<?php echo U('chapter/download','cvid='.$data['cvid']);?>" data-toggle="modal" data-sign="signin">下载视频</a>
                                    <a class="btn btn-primary" href="<?php echo U('Play/index',array('cvid'=>$data['cvid'],'ccid'=>$data['ccid']));?>" data-toggle="modal" data-sign="signin">开始观看</a>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>

                    <div role="tabpanel" class="tab-pane course-comment" id="dis2" style="display: none">
                        <div class="comment-box">
                            <div class="comment-form">
                                <form class="layui-form" method="post" action="<?php echo U('chapter/grade','cid='.$data1['cid']);?>">
                                <div class="rating-stars block" id="more-rating">
                                    <input type="text" readonly class="form-control rating-value" name="grade" id="more-rating-stars-value" style="display: none">
                                    <div class="rating-stars-container">
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right course-infobox-learned">提交分数</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 layout-side">
            <div class="side-image side-image-pc">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data1["cphoto"]); ?>">
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
        </div>
    </div>
</div>
<script type="text/javascript">
    function opens(obj){
        for(var i = 1;i<=2;i++){
            if(i == obj){
                document.getElementById("dis"+i).style.display="block"
            }else
                document.getElementById("dis"+i).style.display="none"
        }
    }
</script>

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
<script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.rating-stars.js"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js"></script>
<script>
    Raven.config('https://bc3878b7ed0a4468a65390bd79e6e73f@sentry.shiyanlou.com/5', {
        release: '3.12.13'
    }).install();
</script>
<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form
            ,layer = layui.layer
            ,layedit = layui.layedit
            ,laydate = layui.laydate;

        //日期
        laydate.render({
            elem: '#date'
        });
        laydate.render({
            elem: '#date1'
        });

        //创建一个编辑器
        var editIndex = layedit.build('LAY_demo_editor');

        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [
                /^[\S]{6,12}$/
                ,'密码必须6到12位，且不能出现空格'
            ]
            ,content: function(value){
                layedit.sync(editIndex);
            }
        });

        //监听指定开关
        form.on('switch(switchTest)', function(data){
            layer.msg('开关checked：'+ (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

        //监听提交
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });

        //表单初始赋值
        form.val('example', {
            "username": "贤心" // "name": "value"
            ,"password": "123456"
            ,"interest": 1
            ,"like[write]": true //复选框选中状态
            ,"close": true //开关状态
            ,"sex": "女"
            ,"desc": "我爱 layui"
        })


    });
</script>
<script type="text/javascript">
    var ratingOptions = {
        selectors: {
            starsSelector: '.rating-stars',
            starSelector: '.rating-star',
            starActiveClass: 'is--active',
            starHoverClass: 'is--hover',
            starNoHoverClass: 'is--no-hover',
            targetFormElementSelector: '.rating-value'
        }
    };

    $(".rating-stars").ratingStars(ratingOptions);
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