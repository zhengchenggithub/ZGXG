<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>朝过夕改网</title>
    <link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/admin.css">
    <script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js"></script>
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/layui/css/layui.css"  media="all">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/wangEditor/css/wangEditor.min.css">
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/js/jquery.min.js"></script>
    <!--<script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.dialog.js"></script>-->
    <!--<script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.disappear.tooltip.js"></script>-->
    <script type="text/javascript" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/wangEditor/js/wangEditor.min.js"></script>
    <link href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/question.css" rel="stylesheet" type="text/css">
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
<!--<div class="aright">-->

<div class="qadd">
    <div class="addl">
<form class="layui-form bform" method="post" action="<?php echo U('forum/doadd');?>" enctype="multipart/form-data">
    <h2 align="center"style="margin: 35px 0px;">清晰描述您的提问，可以获得更加准确的回答!</h2>
    <div class="layui-form-item">
        <label class="layui-form-label">提问标题</label>
        <div class="layui-input-block">
            <input type="text" name="btitle" required lay-verify="required" placeholder="必填内容" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item" style="width: 300px;">
        <label class="layui-form-label">所属分类</label>
        <div class="layui-input-block">
            <select name="tid">
                <?php if(is_array($kind)): $i = 0; $__LIST__ = $kind;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">提问内容</label>
        <div class="layui-input-block">
      <textarea id="textarea" name="bcontent" style="height:100%;width: 100%;">
      <p>请输入内容...</p>
      </textarea>
        </div>
    </div>

    <div class="tpt_item">
        <input type="hidden" name="keywords" value="">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
            </div>
        </div>
    </div>
</form>
    </div>


    <!--右侧开始 -->

    <div class="addr">
        <div class="help">
            <div class="tit">如何能获得快速准确的回答？</div>
            <div class="td1">1</div>
            <div class="td2">问题标题描述准确；</div>
            <div class="clear"></div>
            <div class="td1">2</div>
            <div class="td2">选择正确的分类；</div>
            <div class="clear"></div>
            <div class="td1">3</div>
            <div class="td2">如果标题描述不清，可使用详细内容继续描述；</div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!--</div>-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix footer-col">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png">
                <div class="footer-slogan">多提问，轻松学编程</div>
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
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#tpt_input').keydown(function(e) {
            if (e.which === 13) {
                $("#tpt_btn").click();
                e.preventDefault();
                return false;
            }
        });
        // $("#tpt_sel").on('click', 'a>em', function() {
        //     var name = "keywords";
        //     var tag = $(this).parent().text();
        //     $(this).parent().remove();
        //     var tags = new Array();
        //     $("#tpt_sel").find('a').each(function() {
        //         tags.push($(this).text());
        //     });
        //     $("input[name=" + name + "]").val(tags.join(","));
        //     $("#tpt_pre a:contains('" + tag + "')").removeClass("selected");
        // });
        $("#tpt_btn").click(function() {
            var name = "keywords";
            var tags = $.trim($("input[name=" + name + "]").val());
            if (tags !== "") {
                tags = tags.split(",");
            } else {
                tags = new Array();
            }
            var tag = $.trim($("#tpt_input").val());
            if (tag !== '' && $.inArray(tag, tags) === -1) {
                tags.push(tag);
                $("#tpt_pre a:contains('" + tag + "')").addClass("selected");
            }
            $("#tpt_sel").children('span').empty();
            $.each(tags, function(k, v) {
                $("#tpt_sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
            });
            $("input[name=" + name + "]").val(tags.join(","));
            $("#tpt_input").val('');
        });
        $("#tpt_pre").on('click', 'a:not(.selected)', function() {
            var name = "keywords";
            var tags = $.trim($("input[name=" + name + "]").val());
            if (tags !== "") {
                tags = tags.split(",");
            } else {
                tags = new Array();
            }
            var tag = $.trim($(this).text());
            if (tag !== '' && $.inArray(tag, tags) === -1) {
                tags.push(tag);
            }
            $("#tpt_sel").children('span').empty();
            $.each(tags, function(k, v) {
                $("#tpt_sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
            });
            $("input[name=" + name + "]").val(tags.join(","));
            $(this).addClass('selected');
        });
    });
</script>
<script>
    layui.use('form', function(){
        var form = layui.form;
    });
</script>
<script type="text/javascript">
    var editor = new wangEditor('textarea');
    editor.config.uploadImgUrl = "<?php echo U('Forum/doUploadPic');?>";
    editor.create();
</script>
</body>
</html>