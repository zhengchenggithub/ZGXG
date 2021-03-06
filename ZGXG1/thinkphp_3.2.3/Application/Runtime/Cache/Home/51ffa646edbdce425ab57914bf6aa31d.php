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

    <script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.min.js"></script>
    <script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/js/jquery.SuperSlide.2.1.1.js"></script>
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
                        <li><a class="" href="<?php echo U('courses/index');?>" >全部课程</a></li>
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

<div class="navbar-banner layout-no-margin-top">

    <div class="container" >
        <div id="wrapper">

            <div id="pager">

                <div class="cf" style="position: relative;">
                    <!--轮播图开始-->
                    <div class="top-banner">
                        <div id="slideBox" class="slideBox banner-container">
                            <div class="hd banner-pagination">
                                <ul>
                                    <li class="swiper-pagination-switch"></li>
                                    <li class="swiper-pagination-switch"></li>
                                    <li class="swiper-pagination-switch"></li>
                                </ul>
                            </div>
                            <div class="bd">
                                <ul>
                                    <li><a href="javascript:;" target="_blank"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/images/timg (5).jpg" /></a></li>
                                    <li><a href="javascript:;" target="_blank"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/images/timg (7).jpg" /></a></li>
                                    <li><a href="javascript:;" target="_blank"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/images/timg (4).jpg" /></a></li>
                                </ul>
                            </div>
                            <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                            <a id="banner-arrow-left" class="banner-arrow-left prev" href="javascript:void(0)"></a>
                            <a id="banner-arrow-right" class="banner-arrow-right next" href="javascript:void(0)"></a>
                        </div>
                    </div>
                    <!--轮播图结束-->
                    <!--侧边分类开始-->
                    <div class="aside-allCategory">
                        <div class="bd">
                            <ul class="aside-cList">
                                <li>
                                    <div>
                                        <a href="javascript:;">前端开发</a>
                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>
                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >前端基础</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">HTML</a>
                                                            <a href="<?php echo U('courses/index');?>">CSS</a>
                                                            <a href="<?php echo U('courses/index');?>">JavaScript</a>
                                                            <a href="<?php echo U('courses/index');?>">HTML5</a>
                                                            <a href="<?php echo U('courses/index');?>">CSS3</a>
                                                            <a href="<?php echo U('courses/index');?>">技术前瞻</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >前端进阶</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">Typescript</a>
                                                            <a href="<?php echo U('courses/index');?>">前端安全</a>
                                                            <a href="<?php echo U('courses/index');?>">项目实战</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >前端框架</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">jQuery</a>
                                                            <a href="<?php echo U('courses/index');?>">jQuery UI</a>
                                                            <a href="<?php echo U('courses/index');?>">jQuery Mobile</a>
                                                            <a href="<?php echo U('courses/index');?>">Ext JS</a>
                                                            <a href="<?php echo U('courses/index');?>">AngularJS</a>
                                                            <a href="<?php echo U('courses/index');?>">ReactJS</a>
                                                            <a href="<?php echo U('courses/index');?>">Bootstrap</a>
                                                            <a href="<?php echo U('courses/index');?>">React Native</a>
                                                            <a href="<?php echo U('courses/index');?>">Backbone</a>
                                                            <a href="<?php echo U('courses/index');?>">Three.js</a>
                                                            <a href="<?php echo U('courses/index');?>">MooTools</a>
                                                            <a href="<?php echo U('courses/index');?>">Compass</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >HTML5游戏</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">Canvas</a>
                                                            <a href="<?php echo U('courses/index');?>">SVG</a>
                                                            <a href="<?php echo U('courses/index');?>">WebGL</a>
                                                            <a href="<?php echo U('courses/index');?>">Cocos2d-js</a>
                                                            <a href="<?php echo U('courses/index');?>">CreateJS</a>
                                                            <a href="<?php echo U('courses/index');?>">Flash</a>
                                                            <a href="<?php echo U('courses/index');?>">Unreal</a>
                                                            <a href="<?php echo U('courses/index');?>">Egret</a>
                                                            <a href="<?php echo U('courses/index');?>">Phaser</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>
                                        <a href="javascript:;">移动开发</a>
                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>
                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >应用开发</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">Android</a>
                                                            <a href="<?php echo U('courses/index');?>">iOS</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >游戏开发</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">Cocos</a>
                                                            <a href="<?php echo U('courses/index');?>">Unity3D</a>
                                                            <a href="<?php echo U('courses/index');?>">SpriteKit 2D</a>
                                                            <a href="<?php echo U('courses/index');?>">Unreal</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="<?php echo U('courses/index');?>" >常用框架</a></dt>
                                                        <dd class="cf">
                                                            <a href="<?php echo U('courses/index');?>">Cordova</a>
                                                            <a href="<?php echo U('courses/index');?>">React Native</a>
                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">后端开发</a>

                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>

                                                    <dl>
                                                        <dt><a href="javascript:;" >Python</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Python 基础</a>
                                                            <a href="javascript:;">web2py</a>
                                                            <a href="javascript:;">Django</a>
                                                            <a href="javascript:;">Flask</a>
                                                            <a href="javascript:;">GUI</a>
                                                            <a href="javascript:;">数据挖掘与分析</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >PHP</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">PHP 基础</a>
                                                            <a href="javascript:;">YII</a>
                                                            <a href="javascript:;">ThinkPHP</a>
                                                            <a href="javascript:;">Laravel</a>
                                                            <a href="javascript:;">WordPress</a>
                                                            <a href="javascript:;">Phalcon</a>
                                                            <a href="javascript:;">Apache</a>
                                                            <a href="javascript:;">Facebook Hack</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >Node.js</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Node.js 基础</a>
                                                            <a href="javascript:;">express</a>
                                                            <a href="javascript:;">Meteor</a>
                                                            <a href="javascript:;">Hexo</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >ASP.NET</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">C#</a>
                                                            <a href="javascript:;">ASP.NET MVC</a>
                                                            <a href="javascript:;">Entity Framework</a>
                                                            <a href="javascript:;">WPF</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >J2EE</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">JSP</a>
                                                            <a href="javascript:;">Maven</a>
                                                            <a href="javascript:;">Spring</a>
                                                            <a href="javascript:;">SpringMVC</a>
                                                            <a href="javascript:;">Struts2</a>
                                                            <a href="javascript:;">MyBatis</a>
                                                            <a href="javascript:;">Hibernate</a>
                                                            <a href="javascript:;">Lucene</a>
                                                            <a href="javascript:;">常用框架</a>
                                                            <a href="javascript:;">项目实战</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >Ruby</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Ruby 基础</a>
                                                            <a href="javascript:;">Ruby on Rails</a>
                                                            <a href="javascript:;">Grape</a>
                                                            <a href="javascript:;">Ruby进阶</a>
                                                            <a href="javascript:;">RubyMine</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >Go</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Go 基础</a>
                                                            <a href="javascript:;">Revel</a>
                                                            <a href="javascript:;">beego</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >Erlang</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Erlang 基础</a>
                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">人工智能</a>

                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>
                                                    <dl>
                                                        <dt><a href="javascript:;" >人工智能基础</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">行业解读</a>
                                                            <a href="javascript:;">AWS人工智能简介</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >微软AI</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">人工智能概览</a>
                                                            <a href="javascript:;">服务与API</a>
                                                            <a href="javascript:;">数据分析</a>
                                                            <a href="javascript:;">深度学习</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >百度AI</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">文字识别</a>
                                                            <a href="javascript:;">人脸识别</a>
                                                            <a href="javascript:;">图像审核</a>
                                                            <a href="javascript:;">PaddlePaddle</a>
                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">智能硬件 / 物联网</a>
                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>
                                                    <dl>
                                                        <dt><a href="javascript:;" >硬件架构</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">C51</a>
                                                            <a href="javascript:;">ARM</a>
                                                            <a href="javascript:;">Keil</a>
                                                            <a href="javascript:;">Cortex-M</a>
                                                            <a href="javascript:;">Cortex-A</a>
                                                            <a href="javascript:;">AVR</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >物联网操作系统</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">RTOS</a>
                                                            <a href="javascript:;">Android Wear</a>
                                                            <a href="javascript:;">Apple Watchkit</a>
                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >开源硬件平台</a></dt>
                                                        <dd class="cf">
                                                            <a href="javascript:;">Arduino</a>
                                                            <a href="javascript:;">树莓派</a>
                                                            <a href="javascript:;">mbed</a>
                                                            <a href="javascript:;">GoKit</a>
                                                            <a href="javascript:;">LeMaker Guitar</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >通信链接技术</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">无线WiFi</a>

                                                            <a href="javascript:;">移动通信</a>

                                                            <a href="javascript:;">蓝牙</a>

                                                            <a href="javascript:;">NFC</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >信息感知处理技术</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">传感器</a>

                                                            <a href="javascript:;">数据挖掘</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >人机交互技术</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">语音识别</a>

                                                            <a href="javascript:;">人脸识别</a>

                                                            <a href="javascript:;">手势识别</a>

                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">设计 / 产品 / 测试</a>

                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>

                                                    <dl>
                                                        <dt><a href="javascript:;" >设计基础</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Photoshop</a>

                                                            <a href="javascript:;">Flash</a>

                                                            <a href="javascript:;">Illustrator</a>

                                                            <a href="javascript:;">Sketch</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >游戏设计</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">界面设计</a>

                                                            <a href="javascript:;">角色设计</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >产品经理</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">需求分析</a>

                                                            <a href="javascript:;">Axure</a>

                                                            <a href="javascript:;">项目实战</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >视觉设计</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">应用UI设计</a>

                                                            <a href="javascript:;">网页UI设计</a>

                                                            <a href="javascript:;">设计理论</a>

                                                            <a href="javascript:;">图形设计</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >测试工具</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">自动化测试</a>

                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">云计算 / 大数据</a>

                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>

                                                    <dl>
                                                        <dt><a href="javascript:;" >云计算</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">OpenStack</a>

                                                            <a href="javascript:;">Docker</a>

                                                            <a href="javascript:;">CloudStack</a>

                                                            <a href="javascript:;">Windows Azure</a>

                                                            <a href="javascript:;">IaaS</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >大数据</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Hadoop</a>

                                                            <a href="javascript:;">Storm</a>

                                                            <a href="javascript:;">Hive</a>

                                                            <a href="javascript:;">Flume</a>

                                                            <a href="javascript:;">Kafka</a>

                                                            <a href="javascript:;">Zookeeper</a>

                                                            <a href="javascript:;">Hbase</a>

                                                            <a href="javascript:;">Spark</a>

                                                            <a href="javascript:;">信息检索</a>

                                                            <a href="javascript:;">数据分析</a>

                                                            <a href="javascript:;">数据研发</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >虚拟化</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">VMware</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >SQL</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">MySQL</a>

                                                            <a href="javascript:;">SQL Server</a>

                                                            <a href="javascript:;">Oracle</a>

                                                            <a href="javascript:;">SQLite</a>

                                                            <a href="javascript:;">PostgreSQL</a>

                                                            <a href="javascript:;">DB2</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >NoSQL</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Cassandra</a>

                                                            <a href="javascript:;">Redis</a>

                                                            <a href="javascript:;">MongoDB</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >云平台</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">腾讯云</a>

                                                            <a href="javascript:;">AWS</a>

                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div>

                                        <a href="javascript:;">技术支撑</a>

                                        <div class="list-show">
                                            <div class="knowledge-system">
                                                <p class="list-title knowledge-title"><span>知识体系</span></p>
                                                <div>

                                                    <dl>
                                                        <dt><a href="javascript:;" >基础语言</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">C</a>

                                                            <a href="javascript:;">C++</a>

                                                            <a href="javascript:;">Objective-C</a>

                                                            <a href="javascript:;">Swift</a>

                                                            <a href="javascript:;">C#</a>

                                                            <a href="javascript:;">Java</a>

                                                            <a href="javascript:;">Perl</a>

                                                            <a href="javascript:;">Shell</a>

                                                            <a href="javascript:;">Qt</a>

                                                            <a href="javascript:;">Scala</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >计算机基础</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">计算机组成原理</a>

                                                            <a href="javascript:;">网络工程</a>

                                                            <a href="javascript:;">Word</a>

                                                            <a href="javascript:;">Excel</a>

                                                            <a href="javascript:;">PowerPoint</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >开发基础</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">算法基础</a>

                                                            <a href="javascript:;">数据结构</a>

                                                            <a href="javascript:;">设计模式</a>

                                                            <a href="javascript:;">软件工程</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >开发工具</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Git/Github</a>

                                                            <a href="javascript:;">SVN</a>

                                                            <a href="javascript:;">VI</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >开放标准</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">OpenCL</a>

                                                            <a href="javascript:;">Open XML</a>

                                                            <a href="javascript:;">OpenGL/GLES</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >计算机等级考试</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">一级</a>

                                                            <a href="javascript:;">二级C</a>

                                                            <a href="javascript:;">二级Java</a>

                                                            <a href="javascript:;">二级C++</a>

                                                            <a href="javascript:;">网络工程师</a>

                                                            <a href="javascript:;">数据库工程师</a>

                                                            <a href="javascript:;">信息安全工程师</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >企业认证</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">思科认证</a>

                                                            <a href="javascript:;">Oracle认证</a>

                                                            <a href="javascript:;">Linux认证</a>

                                                            <a href="javascript:;">ARM认证</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >运维管理</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Shell</a>

                                                            <a href="javascript:;">自动化运维</a>

                                                            <a href="javascript:;">Nginx</a>

                                                            <a href="javascript:;">Apache</a>

                                                            <a href="javascript:;">运维监控</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >商业智能</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">FileMaker</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >操作系统</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">Linux</a>

                                                            <a href="javascript:;">Windows</a>

                                                            <a href="javascript:;">Mac OS</a>

                                                        </dd>
                                                    </dl>

                                                    <dl>
                                                        <dt><a href="javascript:;" >企业服务</a></dt>
                                                        <dd class="cf">

                                                            <a href="javascript:;">B2C</a>

                                                        </dd>
                                                    </dl>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--侧边分类结束-->
                </div>
            </div>


        </div>
    </div>
</div>
<div class="introduce-container" id="fourFeatures">
    <div class="container">
        <div class="row">
            <div class="introduce-unit col-sm-6 col-md-3">
                <div><a class="introduce-img"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/introduceContainer1.gif" /></a></div>
                <div><span class="introduce-span">丰富全面的计算机实验课程</span></div>
            </div>
            <div class="introduce-unit col-sm-6 col-md-3">
                <div><a class="introduce-img"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/introduceContainer2.gif" /></a></div>
                <div><span class="introduce-span">在线编程环境，1秒启动</span></div>
            </div>
            <div class="introduce-unit col-sm-6 col-md-3">
                <div><a class="introduce-img"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/introduceContainer3.gif" /></a></div>
                <div><span class="introduce-span">每天一个项目课，丰富你的项目经验</span></div>
            </div>
            <div class="introduce-unit col-sm-6 col-md-3">
                <div><a class="introduce-img"><img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/img/introduceContainer4.gif" /></a></div>
                <div><span class="introduce-span">有效学习时间，真实记录你的代码生涯</span></div>
            </div>
        </div>
    </div>
</div>
<div class="line-and-laboratory">
    <div class="container">
        <div class="clearfix text-center item-header">
            <span class="line"></span>
            <span class="text-center item-title">热门学习课程</span>
            <span class="line"></span>
        </div>
        <div class="tab-content">
            <div class="tab-pane clearfix active" id="study-line">
                <?php if(is_array($data4)): foreach($data4 as $key=>$data4): ?><div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="<?php echo U('Chapter/index','cid='.$data4['cid']);?>">
                            <div class="path-item">
                                <div class="col-xs-5 col-sm-4 path-img">
                                    <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data4["cphoto"]); ?>">
                                </div>
                                <div class="col-xs-7 col-sm-8">
                                    <div class="path-name"><?php echo ($data4["cname"]); ?></div>
                                    <div class="path-course-num">
                                        </span><?php echo ($arr[$data4['cid']-1]); ?></span>
                                        个视频
                                    </div>
                                </div>
                                <div class="desc-layer">
                                    <div class="center">Python是一种计算机程序设计语言。是一种动态的、面向对象的脚本语言，最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越来越多被用于独立的、大型项目的开发。</div>
                                </div>
                            </div>
                        </a>
                    </div><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="line-and-laboratory">
    <div class="container">
        <div class="clearfix text-center item-header">
            <span class="line"></span>
            <div class="text-center item-title">热门在线视频</div>
            <span class="line"></span>
        </div>
        <div class="clearfix courses">
            <?php if(is_array($data3)): foreach($data3 as $key=>$data3): ?><div class="col-xs-12 col-sm-6 col-md-4">
                <a href="<?php echo U('Chapter/index','cid='.$data3['cid']);?>">
                    <div class="path-item">
                        <div class="col-xs-5 col-sm-4 path-img">
                            <img src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/img/<?php echo ($data3["cphoto"]); ?>">
                        </div>
                        <div class="col-xs-7 col-sm-8">
                            <div class="path-name"><?php echo ($data3["cname"]); ?></div>
                            <div class="path-course-num">
                                </span><?php echo ($arr[$data3['cid']-1]); ?></span>
                                个视频
                            </div>
                        </div>
                        <div class="desc-layer">
                            <div class="center">Python是一种计算机程序设计语言。是一种动态的、面向对象的脚本语言，最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越来越多被用于独立的、大型项目的开发。</div>
                        </div>
                    </div>
                </a>
            </div><?php endforeach; endif; ?>
        </div>
        <div class="clearfix item-footer">
            <div class="pull-right watch-all">
                <a href="<?php echo U('courses/index');?>">查看更多 ></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="flash-message" tabindex="-1" role="dialog">
    <div class="modal-dialog" rolw="document">
    </div>
</div>
</div>
<div id="base-data" data-flash="false" data-is-login=false data-is-jwt=true data-socket-url="wss://comet.shiyanlou.com" data-msg-user="" data-msg-system=""></div>
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
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
<script src="/phpText/ZGXG/ZGXG1/thinkphp_3.2.3/Public/app/statics/js/jquery.SuperSlide.2.1.1.js" type="text/javascript" charset="utf-8"></script>
<script>
    //轮播
    jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true});
</script>
<div id="jinja-data" data-post-url="/registercheck"></div>
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