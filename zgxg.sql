/*
Navicat MySQL Data Transfer

Source Server         : 郑诚
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : zgxg

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2019-01-20 17:37:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zx_admin
-- ----------------------------
DROP TABLE IF EXISTS `zx_admin`;
CREATE TABLE `zx_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) NOT NULL,
  `apassword` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_admin
-- ----------------------------
INSERT INTO `zx_admin` VALUES ('1', '1', '1');

-- ----------------------------
-- Table structure for zx_bbs
-- ----------------------------
DROP TABLE IF EXISTS `zx_bbs`;
CREATE TABLE `zx_bbs` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `btitle` varchar(255) DEFAULT NULL,
  `bcontent` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `click` tinyint(1) DEFAULT '0' COMMENT '访问量',
  `issolve` tinyint(1) DEFAULT '0',
  `tid` int(11) DEFAULT NULL COMMENT '分类类别id',
  `replycount` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_bbs
-- ----------------------------
INSERT INTO `zx_bbs` VALUES ('8', '3', 'aaaaaaaaa', '      &lt;p&gt;ffffffffffff&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1545904427', '50', '1', '3', '7');
INSERT INTO `zx_bbs` VALUES ('9', '4', '嗯哼', '      &lt;p&gt;jasper&lt;img src=&quot;http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/89/hufen_thumb.gif&quot; style=&quot;font-size: 14px;&quot;&gt;&lt;img src=&quot;http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/89/hufen_', '1545925588', '39', '0', '1', '9');
INSERT INTO `zx_bbs` VALUES ('10', '4', 'zzzzzzzz', '      &lt;p&gt;aaaaaaaaaaaa&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1546248367', '28', '0', '3', '5');
INSERT INTO `zx_bbs` VALUES ('36', '3', '大彭', '      &lt;p&gt;请回厂重置&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1546429898', '50', '0', '3', '8');
INSERT INTO `zx_bbs` VALUES ('37', '1', 'g\'g\'g\'g\'g\'g\'g\'g\'g', '      &lt;p&gt;.&lt;img src=&quot;http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/bc/fuyun_thumb.gif&quot; style=&quot;font-size: 14px;&quot;&gt;&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1546513708', '10', '1', '4', '2');
INSERT INTO `zx_bbs` VALUES ('38', '1', '知否', '      &lt;p&gt;内容&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1546514610', '4', '0', '2', '2');
INSERT INTO `zx_bbs` VALUES ('39', '90', '我有问题', '      &lt;p&gt;请输入内容...&lt;/p&gt;\r\n      &lt;p&gt;我有个问题&lt;img src=&quot;http://img.t.sinajs.cn/t35/style/images/common/face/ext/normal/0b/tootha_thumb.gif&quot; style=&quot;font-size: 14px;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1546520027', '10', '0', '1', '2');
INSERT INTO `zx_bbs` VALUES ('40', '1', '111', '      &lt;p&gt;请输入内容111111...&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1547104800', '0', '0', '4', '0');
INSERT INTO `zx_bbs` VALUES ('41', '1', '222', '      &lt;p&gt;请输入内容...222&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1547105514', '3', '0', '3', '1');
INSERT INTO `zx_bbs` VALUES ('42', '1', '自知则知之', '      &lt;p&gt;请输入内容...重中之重&lt;/p&gt;\r\n      &lt;p&gt;&lt;br&gt;&lt;/p&gt;', '1547116467', '10', '1', '3', '2');

-- ----------------------------
-- Table structure for zx_bbsreply
-- ----------------------------
DROP TABLE IF EXISTS `zx_bbsreply`;
CREATE TABLE `zx_bbsreply` (
  `brid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '用户uid',
  `brcontent` varchar(255) DEFAULT NULL,
  `brtime` datetime DEFAULT NULL,
  `parent_id` int(11) NOT NULL COMMENT '模块id',
  `qid` int(11) DEFAULT NULL,
  PRIMARY KEY (`brid`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_bbsreply
-- ----------------------------
INSERT INTO `zx_bbsreply` VALUES ('31', '4', 'ssssssssss', '2019-01-01 11:46:24', '0', '9');
INSERT INTO `zx_bbsreply` VALUES ('44', '2', 'rrrrrrrr', '2019-01-01 16:40:59', '0', '9');
INSERT INTO `zx_bbsreply` VALUES ('45', '2', 'rrrrrrrrrrrrrrrr', '2019-01-01 16:41:05', '0', '9');
INSERT INTO `zx_bbsreply` VALUES ('46', '2', 'ttttttttt', '2019-01-01 16:42:56', '0', '9');
INSERT INTO `zx_bbsreply` VALUES ('50', '2', 'ffffffff', '2019-01-01 18:55:16', '0', '8');
INSERT INTO `zx_bbsreply` VALUES ('51', '2', 'fffffffffffffffffffffffffffffffff', '2019-01-01 20:52:04', '0', '8');
INSERT INTO `zx_bbsreply` VALUES ('54', '2', 'sssssssssss', '2019-01-01 21:31:38', '0', '10');
INSERT INTO `zx_bbsreply` VALUES ('55', '2', 'eeeeeeeeeeeeee', '2019-01-01 21:43:55', '54', '10');
INSERT INTO `zx_bbsreply` VALUES ('56', '2', 'rrrrrrrrrrr', '2019-01-01 21:50:54', '0', '10');
INSERT INTO `zx_bbsreply` VALUES ('57', '2', 'ddddddddddd', '2019-01-01 21:52:56', '56', '10');
INSERT INTO `zx_bbsreply` VALUES ('58', '2', 'dddddddd', '2019-01-01 22:08:22', '46', '9');
INSERT INTO `zx_bbsreply` VALUES ('59', '2', 'gggggggggg', '2019-01-01 22:11:03', '58', '9');
INSERT INTO `zx_bbsreply` VALUES ('94', '3', 'bbbbbbbbbb', '2019-01-03 02:08:39', '51', '8');
INSERT INTO `zx_bbsreply` VALUES ('95', '3', 'fffffffff', '2019-01-03 08:05:03', '0', '36');
INSERT INTO `zx_bbsreply` VALUES ('96', '3', 'hhhhhhhh', '2019-01-03 08:05:22', '0', '36');
INSERT INTO `zx_bbsreply` VALUES ('97', '3', 'jjjjjj', '2019-01-03 08:05:32', '96', '36');
INSERT INTO `zx_bbsreply` VALUES ('98', '3', 'jjjjjjjjj', '2019-01-03 08:07:21', '0', '36');
INSERT INTO `zx_bbsreply` VALUES ('99', '3', 'yyyyyy', '2019-01-03 08:07:31', '0', '36');
INSERT INTO `zx_bbsreply` VALUES ('100', '3', 'lllllllll', '2019-01-03 08:07:49', '98', '36');
INSERT INTO `zx_bbsreply` VALUES ('101', '3', 'kkkkkkkkk', '2019-01-03 08:08:30', '99', '36');
INSERT INTO `zx_bbsreply` VALUES ('102', '1', 't\'t\'t\'t\'t\'t\'t\'t\'t', '2019-01-03 19:02:53', '0', '36');
INSERT INTO `zx_bbsreply` VALUES ('103', '1', 'e\'e\'e\'e\'e\'e', '2019-01-03 19:14:23', '0', '37');
INSERT INTO `zx_bbsreply` VALUES ('104', '1', 'h\'h\'h\'h\'h\'h\'h\'h\'h\'h', '2019-01-03 19:21:11', '103', '37');
INSERT INTO `zx_bbsreply` VALUES ('105', '1', 'aaaa', '2019-01-03 20:18:34', '0', '8');
INSERT INTO `zx_bbsreply` VALUES ('106', '1', '222', '2019-01-03 20:18:43', '105', '8');
INSERT INTO `zx_bbsreply` VALUES ('107', '1', '333', '2019-01-03 20:18:59', '106', '8');
INSERT INTO `zx_bbsreply` VALUES ('108', '1', '这是个问题', '2019-01-03 20:54:23', '0', '39');
INSERT INTO `zx_bbsreply` VALUES ('109', '2', '问题', '2019-01-03 20:55:01', '108', '39');
INSERT INTO `zx_bbsreply` VALUES ('110', '2', '33333333333', '2019-01-05 15:29:56', '57', '10');
INSERT INTO `zx_bbsreply` VALUES ('111', '1', '11111', '2019-01-10 15:20:14', '0', '9');
INSERT INTO `zx_bbsreply` VALUES ('112', '1', '2222', '2019-01-10 15:32:04', '0', '41');
INSERT INTO `zx_bbsreply` VALUES ('113', '1', '333', '2019-01-10 15:32:19', '0', '8');
INSERT INTO `zx_bbsreply` VALUES ('114', '1', '咋啊啊', '2019-01-10 18:34:40', '0', '42');
INSERT INTO `zx_bbsreply` VALUES ('115', '1', '1111', '2019-01-10 19:02:31', '111', '9');
INSERT INTO `zx_bbsreply` VALUES ('116', '1', '4444444', '2019-01-10 19:02:56', '111', '9');
INSERT INTO `zx_bbsreply` VALUES ('117', '1', '1111', '2019-01-10 19:08:40', '0', '38');
INSERT INTO `zx_bbsreply` VALUES ('118', '1', '111', '2019-01-10 19:08:47', '117', '38');
INSERT INTO `zx_bbsreply` VALUES ('119', '1', '111111', '2019-01-10 19:09:29', '0', '42');

-- ----------------------------
-- Table structure for zx_category
-- ----------------------------
DROP TABLE IF EXISTS `zx_category`;
CREATE TABLE `zx_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_type` smallint(5) DEFAULT NULL,
  `c_title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_category
-- ----------------------------
INSERT INTO `zx_category` VALUES ('1', '1', '课程问答');
INSERT INTO `zx_category` VALUES ('2', '1', '知识分享');
INSERT INTO `zx_category` VALUES ('3', '1', 'BUG反馈');
INSERT INTO `zx_category` VALUES ('4', '1', '意见建议');
INSERT INTO `zx_category` VALUES ('5', '1', '其它问题');

-- ----------------------------
-- Table structure for zx_chapter
-- ----------------------------
DROP TABLE IF EXISTS `zx_chapter`;
CREATE TABLE `zx_chapter` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cvid` int(10) NOT NULL,
  `ccid` int(10) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `ccid` (`ccid`),
  KEY `cvid` (`cvid`),
  CONSTRAINT `zx_chapter_ibfk_1` FOREIGN KEY (`ccid`) REFERENCES `zx_courses` (`cid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_chapter
-- ----------------------------
INSERT INTO `zx_chapter` VALUES ('1', '1', '1');
INSERT INTO `zx_chapter` VALUES ('2', '2', '1');
INSERT INTO `zx_chapter` VALUES ('3', '3', '1');
INSERT INTO `zx_chapter` VALUES ('4', '4', '1');
INSERT INTO `zx_chapter` VALUES ('5', '5', '2');
INSERT INTO `zx_chapter` VALUES ('6', '6', '2');
INSERT INTO `zx_chapter` VALUES ('7', '7', '2');
INSERT INTO `zx_chapter` VALUES ('8', '8', '2');
INSERT INTO `zx_chapter` VALUES ('9', '9', '3');
INSERT INTO `zx_chapter` VALUES ('10', '10', '3');
INSERT INTO `zx_chapter` VALUES ('11', '11', '3');
INSERT INTO `zx_chapter` VALUES ('12', '12', '3');
INSERT INTO `zx_chapter` VALUES ('13', '13', '4');
INSERT INTO `zx_chapter` VALUES ('14', '14', '4');
INSERT INTO `zx_chapter` VALUES ('15', '15', '4');
INSERT INTO `zx_chapter` VALUES ('16', '16', '4');
INSERT INTO `zx_chapter` VALUES ('17', '17', '5');
INSERT INTO `zx_chapter` VALUES ('18', '18', '5');
INSERT INTO `zx_chapter` VALUES ('19', '19', '5');
INSERT INTO `zx_chapter` VALUES ('20', '20', '5');
INSERT INTO `zx_chapter` VALUES ('21', '21', '6');
INSERT INTO `zx_chapter` VALUES ('22', '22', '6');
INSERT INTO `zx_chapter` VALUES ('23', '23', '6');
INSERT INTO `zx_chapter` VALUES ('24', '24', '6');
INSERT INTO `zx_chapter` VALUES ('25', '25', '7');
INSERT INTO `zx_chapter` VALUES ('26', '26', '7');
INSERT INTO `zx_chapter` VALUES ('27', '27', '7');
INSERT INTO `zx_chapter` VALUES ('28', '28', '7');
INSERT INTO `zx_chapter` VALUES ('29', '29', '8');
INSERT INTO `zx_chapter` VALUES ('30', '30', '8');
INSERT INTO `zx_chapter` VALUES ('31', '31', '8');
INSERT INTO `zx_chapter` VALUES ('32', '32', '8');
INSERT INTO `zx_chapter` VALUES ('33', '33', '9');
INSERT INTO `zx_chapter` VALUES ('34', '34', '9');
INSERT INTO `zx_chapter` VALUES ('35', '35', '9');
INSERT INTO `zx_chapter` VALUES ('36', '36', '9');
INSERT INTO `zx_chapter` VALUES ('37', '5', '10');
INSERT INTO `zx_chapter` VALUES ('38', '6', '10');
INSERT INTO `zx_chapter` VALUES ('39', '7', '10');
INSERT INTO `zx_chapter` VALUES ('40', '8', '28');
INSERT INTO `zx_chapter` VALUES ('41', '9', '11');
INSERT INTO `zx_chapter` VALUES ('42', '6', '27');
INSERT INTO `zx_chapter` VALUES ('43', '7', '26');
INSERT INTO `zx_chapter` VALUES ('44', '8', '12');
INSERT INTO `zx_chapter` VALUES ('45', '9', '13');
INSERT INTO `zx_chapter` VALUES ('46', '10', '14');
INSERT INTO `zx_chapter` VALUES ('47', '11', '15');
INSERT INTO `zx_chapter` VALUES ('48', '12', '16');
INSERT INTO `zx_chapter` VALUES ('49', '13', '17');
INSERT INTO `zx_chapter` VALUES ('50', '14', '18');
INSERT INTO `zx_chapter` VALUES ('51', '15', '19');
INSERT INTO `zx_chapter` VALUES ('52', '16', '20');
INSERT INTO `zx_chapter` VALUES ('53', '17', '21');
INSERT INTO `zx_chapter` VALUES ('54', '18', '22');
INSERT INTO `zx_chapter` VALUES ('55', '19', '23');
INSERT INTO `zx_chapter` VALUES ('56', '20', '24');
INSERT INTO `zx_chapter` VALUES ('57', '21', '25');
INSERT INTO `zx_chapter` VALUES ('58', '37', '5');
INSERT INTO `zx_chapter` VALUES ('59', '38', '2');

-- ----------------------------
-- Table structure for zx_cm
-- ----------------------------
DROP TABLE IF EXISTS `zx_cm`;
CREATE TABLE `zx_cm` (
  `cmid` int(10) NOT NULL AUTO_INCREMENT,
  `cmmid` int(10) DEFAULT NULL,
  `cmcid` int(10) DEFAULT NULL,
  PRIMARY KEY (`cmid`),
  KEY `cmmid` (`cmmid`),
  KEY `cmcid` (`cmcid`),
  CONSTRAINT `zx_cm_ibfk_1` FOREIGN KEY (`cmmid`) REFERENCES `zx_major` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `zx_cm_ibfk_2` FOREIGN KEY (`cmcid`) REFERENCES `zx_courses` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_cm
-- ----------------------------
INSERT INTO `zx_cm` VALUES ('1', '1', '7');
INSERT INTO `zx_cm` VALUES ('2', '2', '8');
INSERT INTO `zx_cm` VALUES ('3', '3', '9');
INSERT INTO `zx_cm` VALUES ('4', '4', '10');
INSERT INTO `zx_cm` VALUES ('6', '6', '12');
INSERT INTO `zx_cm` VALUES ('7', '7', '13');
INSERT INTO `zx_cm` VALUES ('8', '8', '14');
INSERT INTO `zx_cm` VALUES ('9', '9', '15');
INSERT INTO `zx_cm` VALUES ('10', '10', '16');
INSERT INTO `zx_cm` VALUES ('11', '11', '17');
INSERT INTO `zx_cm` VALUES ('12', '12', '18');
INSERT INTO `zx_cm` VALUES ('15', '1', '19');
INSERT INTO `zx_cm` VALUES ('16', '2', '20');
INSERT INTO `zx_cm` VALUES ('17', '3', '21');
INSERT INTO `zx_cm` VALUES ('18', '4', '22');
INSERT INTO `zx_cm` VALUES ('20', '6', '24');
INSERT INTO `zx_cm` VALUES ('21', '7', '25');
INSERT INTO `zx_cm` VALUES ('22', '8', '26');
INSERT INTO `zx_cm` VALUES ('23', '9', '27');
INSERT INTO `zx_cm` VALUES ('24', '10', '28');
INSERT INTO `zx_cm` VALUES ('25', '11', '29');
INSERT INTO `zx_cm` VALUES ('26', '12', '30');
INSERT INTO `zx_cm` VALUES ('28', '1', '31');
INSERT INTO `zx_cm` VALUES ('29', '2', '32');
INSERT INTO `zx_cm` VALUES ('30', '3', '33');
INSERT INTO `zx_cm` VALUES ('33', '1', '33');
INSERT INTO `zx_cm` VALUES ('34', '2', '33');
INSERT INTO `zx_cm` VALUES ('35', '4', '33');
INSERT INTO `zx_cm` VALUES ('37', '6', '33');
INSERT INTO `zx_cm` VALUES ('38', '7', '33');
INSERT INTO `zx_cm` VALUES ('39', '8', '33');
INSERT INTO `zx_cm` VALUES ('40', '9', '33');
INSERT INTO `zx_cm` VALUES ('41', '10', '33');
INSERT INTO `zx_cm` VALUES ('42', '11', '33');
INSERT INTO `zx_cm` VALUES ('43', '12', '33');

-- ----------------------------
-- Table structure for zx_courses
-- ----------------------------
DROP TABLE IF EXISTS `zx_courses`;
CREATE TABLE `zx_courses` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cmid` int(10) DEFAULT NULL,
  `cuid` int(10) DEFAULT NULL,
  `ccid` int(10) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `cphoto` varchar(255) DEFAULT NULL,
  `cdescribe` varchar(255) DEFAULT NULL,
  `ctype` int(5) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `cmid` (`cmid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_courses
-- ----------------------------
INSERT INTO `zx_courses` VALUES ('1', null, null, null, 'C语言基础', '2018-12-20/5c1b95116f6f2.jpg', 'C语言是一门通用计算机编程语言，广泛应用于底层开发。C语言的设计目标是提供一种能以简易的方式编译、处理低级存储器、产生少量的机器码以及不需要任何运行环境支持便能运行的编程语言。', '1');
INSERT INTO `zx_courses` VALUES ('2', null, null, null, 'CSS3基础', '2018-12-20/5c1b95741faef.jpg', 'CSS3是CSS（层叠样式表）技术的升级版本，于1999年开始制订，2001年5月23日W3C完成了CSS3的工作草案，主要包括盒子模型、列表模块、超链接方式、语言模块、背景和边框、文字特效、多栏布局等模块', '1');
INSERT INTO `zx_courses` VALUES ('3', null, null, null, 'C++基础', '2018-12-20/5c1b959889747.png', 'C++是C语言的继承，它既可以进行C语言的过程化程序设计，又可以进行以抽象数据类型为特点的基于对象的程序设计，还可以进行以继承和多态为特点的面向对象的程序设计。C++擅长面向对象程序设计的同时，还可以进行基于过程的程序设计，因而C++就适应的问题规模而论，大小由之。', '1');
INSERT INTO `zx_courses` VALUES ('4', null, null, null, 'Android开发', '2018-12-20/5c1b95c7ee0a0.jpg', 'android开发是指android平台上应用的制作，Android早期由“Android之父”之称的Andy Rubin创办，Google于2005年并购了成立仅22个月的高科技企业Android，展开了短信、手机检索、定位等业务，基于Linux的通用平台进入了开发。', '1');
INSERT INTO `zx_courses` VALUES ('5', null, null, null, 'MySQL', '2018-12-20/5c1b95e84ca21.jpg', 'MySQL是一个关系型数据库管理系统，由瑞典MySQL AB 公司开发，目前属于 Oracle 旗下产品。MySQL 是最流行的关系型数据库管理系统之一，在 WEB 应用方面，MySQL是最好的 RDBMS (Relational Database Management System，关系数据库管理系统) 应用软件。', '1');
INSERT INTO `zx_courses` VALUES ('6', null, null, null, 'Linux基础', '2018-12-20/5c1b9613a3b90.png', 'Linux是一套免费使用和自由传播的类Unix操作系统，是一个基于POSIX和UNIX的多用户、多任务、支持多线程和多CPU的操作系统。它能运行主要的UNIX工具软件、应用程序和网络协议。它支持32位和64位硬件。Linux继承了Unix以网络为核心的设计思想，是一个性能稳定的多用户网络操作系统。', '1');
INSERT INTO `zx_courses` VALUES ('7', null, null, null, 'Java', '2018-12-20/5c1b962d449db.png', 'Java具有简单性、面向对象、分布式、健壮性、安全性、平台独立与可移植性、多线程、动态性等特点 [2]  。Java可以编写桌面应用程序、Web应用程序、分布式系统和嵌入式系统应用程序等', '2');
INSERT INTO `zx_courses` VALUES ('8', null, null, null, 'PHP开发', '2018-12-20/5c1b9661c9c43.png', 'PHP开发中包含入门知识、PHP 编程基础、PHP Web 框架、项目实战和项目进阶五个模块。模块中的课程将带着你逐步深入，学会如何使用 PHP 实现项目一个博客，聊天室，MVC框架及搜索系统等。完成本路径所有实验课，将具备使用 PHP 独立开发 Web 应用的能力。', '2');
INSERT INTO `zx_courses` VALUES ('9', null, null, null, 'HTML5基础', '2018-12-20/5c1b9767cb046.png', '万维网的核心语言、标准通用标记语言下的一个应用超文本标记语言（HTML）的第五次重大修改', '2');
INSERT INTO `zx_courses` VALUES ('10', null, null, null, 'IOS开发', '2018-12-20/5c1b977d9a2c0.jpg', 'iOS是由苹果公司开发的移动操作系统 [1]  。苹果公司最早于2007年1月9日的Macworld大会上公布这个系统，最初是设计给iPhone使用的，后来陆续套用到iPod touch、iPad以及Apple TV等产品上。iOS与苹果的Mac OS X操作系统一样，属于类Unix的商业操作系统', '2');
INSERT INTO `zx_courses` VALUES ('11', null, null, null, 'NodeJS学习', '2018-12-20/5c1b9790a80a6.png', 'NodeJS学习将通过使用 NodeJS 实现博客、在线笔记、爬虫、即时搜索、漂流瓶、端口扫描器等应用，学习并实践 NodeJS 编程基础和Web 应用开发等技术。完成本路径的所有实验课，将能够使用 NodeJS 独立实现 Web 应用程序。', '2');
INSERT INTO `zx_courses` VALUES ('12', null, null, null, 'Python开发', '2018-12-20/5c1b97a530ae0.png', 'Python是一种计算机程序设计语言。是一种动态的、面向对象的脚本语言，最初被设计用于编写自动化脚本(shell)，随着版本的不断更新和语言新功能的添加，越来越多被用于独立的、大型项目的开发。', '2');
INSERT INTO `zx_courses` VALUES ('13', null, null, null, '电力电子技术', '2018-12-25/5c2189afe7b98.jpeg', '这是电力电子技术', '2');
INSERT INTO `zx_courses` VALUES ('14', null, null, null, '电路分析', '2018-12-25/5c2189e9bb5ce.jpeg', '这是电路分析', '2');
INSERT INTO `zx_courses` VALUES ('15', null, null, null, '大学英语', '2018-12-25/5c218a2d427c2.jpeg', '这是大学英语', '2');
INSERT INTO `zx_courses` VALUES ('16', null, null, null, '大学物理', '2018-12-25/5c218a3c4dec6.jpeg', '这是大学物理', '2');
INSERT INTO `zx_courses` VALUES ('17', null, null, null, '设计素描', '2018-12-25/5c218f214be58.jpeg', '这是设计素描', '2');
INSERT INTO `zx_courses` VALUES ('18', null, null, null, '设计色彩', '2018-12-25/5c218f426c592.jpeg', '这是设计色彩', '2');
INSERT INTO `zx_courses` VALUES ('19', null, null, null, '影视剧作', '2018-12-25/5c218f94d2c59.jpeg', '这是影视剧作', '2');
INSERT INTO `zx_courses` VALUES ('20', null, null, null, '图形与图像处理', '2018-12-25/5c218fb20c49a.jpeg', '这是图形与图像处理', '2');
INSERT INTO `zx_courses` VALUES ('21', null, null, null, '经济管理', '2018-12-25/5c218ff3efc7f.jpeg', '这是经济管理', '2');
INSERT INTO `zx_courses` VALUES ('22', null, null, null, '中国科学管理', '2018-12-25/5c21901b437c9.jpg', '这是中国科学管理', '2');
INSERT INTO `zx_courses` VALUES ('23', null, null, null, '自动控制技术', '2018-12-25/5c219096a8306.jpeg', '这是自动控制技术', '2');
INSERT INTO `zx_courses` VALUES ('24', null, null, null, '机械制图', '2018-12-25/5c21917f200c4.jpg', '这是机械制图', '2');
INSERT INTO `zx_courses` VALUES ('25', null, null, null, '机械原理', '2018-12-25/5c21918ff0395.jpeg', '这是机械原理', '2');
INSERT INTO `zx_courses` VALUES ('26', null, null, null, '汽车电器', '2018-12-25/5c2191b73e890.jpeg', '这是汽车电器', '2');
INSERT INTO `zx_courses` VALUES ('27', null, null, null, '网络优化', '2018-12-25/5c2192188ca6b.jpg', '这是网络优化', '2');
INSERT INTO `zx_courses` VALUES ('28', null, null, null, '光纤通信', '2018-12-25/5c219233f1661.jpeg', '这是光纤通信', '2');
INSERT INTO `zx_courses` VALUES ('29', null, null, null, '大数据可视化技术', '2018-12-25/5c21927792790.jpeg', '这是大数据可视化技术', '2');
INSERT INTO `zx_courses` VALUES ('30', null, null, null, '云计算技术', '2018-12-25/5c2192916e3fe.jpeg', '这是云计算技术', '2');
INSERT INTO `zx_courses` VALUES ('31', null, null, null, '人工智能综合应用', '2018-12-25/5c2192cad2ea2.jpg', '这是人工智能综合应用', '2');
INSERT INTO `zx_courses` VALUES ('32', null, null, null, '神经网络与深度学习', '2018-12-25/5c2192f3a808d.jpeg', '这是神经网络与深度学习', '2');
INSERT INTO `zx_courses` VALUES ('33', null, null, null, '马克思与社会主义理论体系', '2018-12-25/5c21931c99748.jpeg', '这是毛概', '2');

-- ----------------------------
-- Table structure for zx_grade
-- ----------------------------
DROP TABLE IF EXISTS `zx_grade`;
CREATE TABLE `zx_grade` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `guid` int(10) NOT NULL,
  `gcid` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_grade
-- ----------------------------
INSERT INTO `zx_grade` VALUES ('1', '1', '1', '4');
INSERT INTO `zx_grade` VALUES ('2', '1', '2', '6');
INSERT INTO `zx_grade` VALUES ('5', '1', '3', '6');
INSERT INTO `zx_grade` VALUES ('6', '1', '4', '8');
INSERT INTO `zx_grade` VALUES ('7', '1', '5', '5');
INSERT INTO `zx_grade` VALUES ('8', '1', '6', '9');
INSERT INTO `zx_grade` VALUES ('9', '1', '7', '3');
INSERT INTO `zx_grade` VALUES ('10', '1', '8', '10');
INSERT INTO `zx_grade` VALUES ('11', '1', '9', '7');
INSERT INTO `zx_grade` VALUES ('12', '1', '10', '7');
INSERT INTO `zx_grade` VALUES ('13', '2', '1', '5');
INSERT INTO `zx_grade` VALUES ('14', '2', '2', '6');
INSERT INTO `zx_grade` VALUES ('15', '2', '3', '3');
INSERT INTO `zx_grade` VALUES ('16', '2', '4', '5');
INSERT INTO `zx_grade` VALUES ('17', '2', '5', '6');
INSERT INTO `zx_grade` VALUES ('18', '2', '6', '7');
INSERT INTO `zx_grade` VALUES ('19', '2', '7', '3');
INSERT INTO `zx_grade` VALUES ('20', '2', '8', '2');
INSERT INTO `zx_grade` VALUES ('21', '2', '9', '5');
INSERT INTO `zx_grade` VALUES ('22', '2', '10', '4');
INSERT INTO `zx_grade` VALUES ('23', '2', '12', '7');
INSERT INTO `zx_grade` VALUES ('24', '2', '11', '9');
INSERT INTO `zx_grade` VALUES ('25', '1', '22', '9');
INSERT INTO `zx_grade` VALUES ('26', '1', '33', '9');

-- ----------------------------
-- Table structure for zx_major
-- ----------------------------
DROP TABLE IF EXISTS `zx_major`;
CREATE TABLE `zx_major` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_major
-- ----------------------------
INSERT INTO `zx_major` VALUES ('1', '软件工程');
INSERT INTO `zx_major` VALUES ('2', '计算机科学技术');
INSERT INTO `zx_major` VALUES ('3', '网络工程');
INSERT INTO `zx_major` VALUES ('4', '电气工程');
INSERT INTO `zx_major` VALUES ('6', '通信工程');
INSERT INTO `zx_major` VALUES ('7', '车辆工程');
INSERT INTO `zx_major` VALUES ('8', '大数据与人工智能');
INSERT INTO `zx_major` VALUES ('9', '机械电子工程');
INSERT INTO `zx_major` VALUES ('10', '财务管理');
INSERT INTO `zx_major` VALUES ('11', '动画');
INSERT INTO `zx_major` VALUES ('12', '产品设计');

-- ----------------------------
-- Table structure for zx_uc
-- ----------------------------
DROP TABLE IF EXISTS `zx_uc`;
CREATE TABLE `zx_uc` (
  `scid` int(10) NOT NULL AUTO_INCREMENT,
  `scuid` int(10) NOT NULL,
  `sccid` int(10) NOT NULL,
  PRIMARY KEY (`scid`),
  KEY `zx_uc_ibfk_1` (`scuid`),
  KEY `zx_uc_ibfk_2` (`sccid`),
  CONSTRAINT `zx_uc_ibfk_1` FOREIGN KEY (`scuid`) REFERENCES `zx_user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `zx_uc_ibfk_2` FOREIGN KEY (`sccid`) REFERENCES `zx_courses` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_uc
-- ----------------------------
INSERT INTO `zx_uc` VALUES ('2', '1', '2');
INSERT INTO `zx_uc` VALUES ('3', '1', '3');
INSERT INTO `zx_uc` VALUES ('4', '1', '6');
INSERT INTO `zx_uc` VALUES ('5', '1', '4');
INSERT INTO `zx_uc` VALUES ('6', '1', '10');
INSERT INTO `zx_uc` VALUES ('8', '2', '3');
INSERT INTO `zx_uc` VALUES ('9', '2', '4');
INSERT INTO `zx_uc` VALUES ('10', '4', '5');
INSERT INTO `zx_uc` VALUES ('11', '4', '6');
INSERT INTO `zx_uc` VALUES ('12', '4', '7');
INSERT INTO `zx_uc` VALUES ('16', '2', '12');
INSERT INTO `zx_uc` VALUES ('20', '1', '1');
INSERT INTO `zx_uc` VALUES ('21', '4', '2');

-- ----------------------------
-- Table structure for zx_user
-- ----------------------------
DROP TABLE IF EXISTS `zx_user`;
CREATE TABLE `zx_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `uaccount` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `upassword` varchar(255) DEFAULT NULL,
  `uphoto` varchar(255) DEFAULT NULL,
  `uemail` varchar(255) DEFAULT NULL,
  `uphone` varchar(255) DEFAULT NULL,
  `utype` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_user
-- ----------------------------
INSERT INTO `zx_user` VALUES ('1', '1', '郑诚', '1', '2019-01-10/5c36f4cd64dc7.jpg', '1252269998@qq.com', '17398372510', '1');
INSERT INTO `zx_user` VALUES ('2', '3', '3', '3', '2019-01-03/5c2e0645779e6.jpeg', null, null, '1');
INSERT INTO `zx_user` VALUES ('3', '4', '4', '444444', null, null, null, '1');
INSERT INTO `zx_user` VALUES ('4', '5', '我是老师', '5', '2019-01-03/5c2e04de56e53.jpg', null, null, '2');

-- ----------------------------
-- Table structure for zx_video
-- ----------------------------
DROP TABLE IF EXISTS `zx_video`;
CREATE TABLE `zx_video` (
  `vid` int(10) NOT NULL AUTO_INCREMENT,
  `vname` varchar(255) DEFAULT NULL,
  `vurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zx_video
-- ----------------------------
INSERT INTO `zx_video` VALUES ('1', '视频', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('2', '视频2', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('3', '视频3', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('4', '视频4', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('6', '视频6', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('7', '视频7', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('8', '视频8', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('9', '视频9', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('10', '视频10', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('11', '视频11', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('12', '视频12', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('13', '视频13', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('14', '视频14', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('15', '视频15', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('16', '视频16', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('17', '视频17', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('18', '视频18', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('19', '视频20', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('20', '视频21', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('21', '视频22', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('22', '视频23', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('23', '视频24', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('24', '视频25', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('25', '视频26', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('26', '视频27', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('27', '视频28', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('28', '视频29', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('29', '视频30', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('30', '视频31', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('31', '视频32', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('32', '视频32', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('33', '视频33', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('34', '视频34', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('35', '视频35', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('36', '视频36', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('37', '视频88', '2018-12-20/5c1b526926f61.mp4');
INSERT INTO `zx_video` VALUES ('38', '11111', '2018-12-20/5c1b526926f61.mp4');
