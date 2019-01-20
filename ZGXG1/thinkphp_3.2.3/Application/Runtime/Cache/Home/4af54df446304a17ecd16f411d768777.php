<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>朝过夕改网</title>
    <link rel="icon" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/favcion.ico" type="image/x-icon">
    <!--<link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/ionic-v1.3.3/css/ionic.min.css"/>-->
    <!--<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/ionic-v1.3.3/js/ionic.bundle.min.js"></script>-->
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/app/css/dest/styles.css?=2016121272249">
    <link rel="stylesheet" href="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/layui/css/layui.css"  media="all">
    <!--<link rel="stylesheet" href="../../../../Public/layui/css/layui.css"  media="all">-->
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
<div class="container layout layout-margin-top">
    <div class="row">
        <div class="col-md-9 layout-body">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    <li class="layui-this"><i class="layui-icon layui-icon-list"></i>全部</li>
                    <li><i class="layui-icon layui-icon-flag"></i>已解决</li>
                    <li><i class="layui-icon layui-icon-read"></i>课程问答</li>
                    <li><i class="layui-icon layui-icon-release"></i>知识分享</li>
                    <li><i class="layui-icon layui-icon-util"></i>BUG反馈</li>
                    <li><i class="layui-icon layui-icon-dialogue"></i>意见建议</li>
                    <li><i class="layui-icon layui-icon-survey"></i>其他问题</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li class="question-item">
                                    <div class="col-md-10">
                                        <div class="col-sm-2 question-item-author">
                                            <div class="user-avatar ">
                                                <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                    </a>
                                                    <?php else: ?>
                                                    <a class="avatar" href="../user/13/study.html" target="_blank">
                                                        <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                    </a><?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <h4>
                                                <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                            </h4>
                                            <div class="question-item-summary">
                                                <div class="user-username ">
                                                    <p>
                                                        <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                    </p><!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 question-item-rank">
                                        <div class="question-item-answered">
                                            <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                <?php else: ?>
                                                <?php if($vo["replycount"] == 0): ?><div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                    <?php elseif($vo["replycount"] > 0): ?>
                                                    <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div><?php endif; endif; ?>
                                        </div>
                                        <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                    </div>
                                </li><?php endforeach; endif; ?>
                        </ul>
                        <div id="listpage" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["issolve"] == 1): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>
                        <div id="listpage1" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["c_id"] == 1): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><!--<div><?php echo ($vo["replycount"]); ?></div>-->
                                                        <!--<div>回复</div>-->
                                                        <div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <!--<else condition="$vo.replycount eq ''"/>-->
                                                        <!--<div class="td1 type0"><span>0</span><br>回答</div>--><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>

                        <div id="listpage2" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["c_id"] == 2): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><!--<div><?php echo ($vo["replycount"]); ?></div>-->
                                                        <!--<div>回复</div>-->
                                                        <div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <!--<else condition="$vo.replycount eq ''"/>-->
                                                        <!--<div class="td1 type0"><span>0</span><br>回答</div>--><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>

                        <div id="listpage3" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["c_id"] == 3): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><!--<div><?php echo ($vo["replycount"]); ?></div>-->
                                                        <!--<div>回复</div>-->
                                                        <div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <!--<else condition="$vo.replycount eq ''"/>-->
                                                        <!--<div class="td1 type0"><span>0</span><br>回答</div>--><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>
                        <div id="listpage4" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["c_id"] == 4): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><!--<div><?php echo ($vo["replycount"]); ?></div>-->
                                                        <!--<div>回复</div>-->
                                                        <div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <!--<else condition="$vo.replycount eq ''"/>-->
                                                        <!--<div class="td1 type0"><span>0</span><br>回答</div>--><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>

                        <div id="listpage5" style="margin: 0px 0px 0px 280px;"></div>
                    </div>
                    <div class="layui-tab-item">
                        <ul class="row question-items">
                            <?php if(is_array($list)): foreach($list as $key=>$vo): if($vo["c_id"] == 5): ?><li class="question-item">
                                        <div class="col-md-10">
                                            <div class="col-sm-2 question-item-author">
                                                <div class="user-avatar ">
                                                    <?php if($vo['uphoto'] == ''): ?><a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/images/avatar.jpg">
                                                        </a>
                                                        <?php else: ?>
                                                        <a class="avatar" href="../user/13/study.html" target="_blank">
                                                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($vo["uphoto"]); ?>">
                                                        </a><?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>
                                                    <a class="question-item-title" href="<?php echo U('Forum/show',array('bid'=>$vo['bid']));?>" target="_blank"> <?php echo ($vo["btitle"]); ?></a>
                                                </h4>
                                                <div class="question-item-summary">
                                                    <div class="user-username ">
                                                        <p>
                                                            <span><i class="layui-icon layui-icon-user"></i><?php echo ($vo["uname"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-menu-fill"></i><?php echo ($vo["c_title"]); ?></span>&nbsp;&nbsp;<span><i class="layui-icon layui-icon-read"></i><?php echo ($vo["click"]); ?>次</span>&nbsp;&nbsp;<span class="tpt-none-768"><i class="layui-icon layui-icon-log"></i><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></span>
                                                        </p><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 question-item-rank">
                                            <div class="question-item-answered">
                                                <?php if($vo["issolve"] == '1' ): ?><div class="td1 type2"><span><?php echo ($vo["replycount"]); ?></span><br>解决</div>
                                                    <?php else: ?>
                                                    <?php if($vo["replycount"] == 0): ?><!--<div><?php echo ($vo["replycount"]); ?></div>-->
                                                        <!--<div>回复</div>-->
                                                        <div class="td1 type0"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <?php elseif($vo["replycount"] > 0): ?>
                                                        <div class="td1 type1"><span><?php echo ($vo["replycount"]); ?></span><br>回答</div>
                                                        <!--<else condition="$vo.replycount eq ''"/>-->
                                                        <!--<div class="td1 type0"><span>0</span><br>回答</div>--><?php endif; endif; ?>
                                            </div>
                                            <div class="td2"><span><?php echo ($vo["click"]); ?></span><br>浏览</div>
                                        </div>
                                    </li><?php endif; endforeach; endif; ?>
                        </ul>

                        <div id="listpage6" style="margin: 0px 0px 0px 280px;"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3 layout-side">
            <a class="btn side-btn" href="<?php echo U('Forum/add');?>">我要提问</a>
            <div class="panel panel-default panel-userinfo">
                <div class="panel-body body-userinfo">
                    <div class="media userinfo-header">
                        <div class="media-left">
                            <div class="user-avatar">

                                <a class="avatar" href="#sign-modal" data-toggle="modal" data-sign="signin">
                                    <img class="circle" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/forum/img/logo-grey.png">
                                </a>
                            </div>
                        </div>
                        <div class="media-body">

                            <span class="media-heading username">欢迎来到朝过夕改</span>
                            <p class="vip-remain">多提问，学编程</p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="sidebox">
                <div class="sidebox-header">
                    <h4 class="sidebox-title">最热路径</h4>
                </div>
                <div class="sidebox-body course-content side-list-body">
                    <a href="#"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513769430.png"> Python 研发工程师</a>
                    <a href="#"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513926288.png"> 大数据工程师</a>
                    <a href="#"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513793360.png"> C++ 研发工程师</a>
                    <a href="#"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471513867033.png"> 信息安全工程师</a>
                    <a href="#"><img style="width:25px;height:25px" src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/1471514004752.png"> Linux 运维工程师</a>
                </div>

            </div>

            <div class="sidebox side-list">
                <div class="sidebox-header">
                    <h4 class="sidebox-title">常见问题</h4>
                </div>
                <div class="sidebox-body side-list-body">
                    <a href="" target="_blank">实验操作很卡怎么办？</a>
                    <a href="" target="_blank">为什么连不上实验桌面？</a>
                    <a href="" target="_blank">"我的代码库"如何用？</a>
                    <a href="" target="_blank">实验楼环境默认用户及密码？</a>
                    <a href="" target="_blank">环境中是否可以联网？</a>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix footer-col">
                <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/logo.png">
                <div class="footer-slogan">动手做实验，轻松学编程</div>
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
        <span>Copyright @2018-2019 朝过夕改在线教育</span>
        <span class="ver-line"> | </span>
        <a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备13019762号</a>
    </div>
</div>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use(['element','layer','laypage'], function(){
        var $ = layui.jquery
            ,element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块
            var laypage=layui.laypage;
        laypage.render({
            elem: 'listpage' //注意，这里的 test1 是 ID，不用加 # 号
            ,count:<?php echo ($count); ?> //数据总数，从服务端得到
            ,limit:5
            ,curr:<?php echo ($curr); ?>
            ,jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                console.log(obj.limit); //得到每页显示的条数
                //首次不执行
                if(!first){
                    //判断当前URL是否包含curpage
                    if(location.href.indexOf('curpage')==-1){
                        location.href="index/curpage/"+obj.curr+'.html';
                    }else{
                        location.href=obj.curr+'.html';
                    }
                }
            }
        });
        //触发事件
        var active = {
            tabChange: function(){
                //切换到指定Tab项
                element.tabChange('demo', '22'); //切换到：用户管理
            }
        };

        $('.site-demo-active').on('click', function(){
            var othis = $(this), type = othis.data('type');
            active[type] ? active[type].call(this, othis) : '';
        });
    });
</script>
<script>
    function reurl() {
        url=location.href;
        var times=url.split("?");
        if(times[1] !=1){
            url += "?1";
            self.location.replace(url);
        }
    }
    reurl();
</script>
</body>
</html>