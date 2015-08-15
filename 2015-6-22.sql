-- phpMyAdmin SQL Dump
-- version 4.0.10.5
-- http://www.phpmyadmin.net
--
-- 主机: my8950225.xincache1.cn
-- 生成日期: 2015-06-24 00:44:03
-- 服务器版本: 5.1.73-log
-- PHP 版本: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my8950225`
--

-- --------------------------------------------------------

--
-- 表的结构 `hs_achievement`
--

CREATE TABLE IF NOT EXISTS `hs_achievement` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `year` varchar(5) NOT NULL COMMENT '年份',
  `sort` int(11) NOT NULL COMMENT '排序',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='历届成绩' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hs_achievement`
--

INSERT INTO `hs_achievement` (`id`, `year`, `sort`, `controller`, `created_time`) VALUES
(1, '2013', 1, 'admin', '2015-06-17 12:31:46'),
(2, '2014', 2, 'admin', '2015-06-17 12:44:32');

-- --------------------------------------------------------

--
-- 表的结构 `hs_achievement_status`
--

CREATE TABLE IF NOT EXISTS `hs_achievement_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `school` varchar(60) NOT NULL COMMENT '学校名字',
  `number` int(11) NOT NULL COMMENT '录入人数',
  `achievement_id` int(11) NOT NULL COMMENT 'achievement_id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='录入情况' AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `hs_achievement_status`
--

INSERT INTO `hs_achievement_status` (`id`, `school`, `number`, `achievement_id`) VALUES
(9, '中央美术学院', 2, 2),
(10, '北京服装学院', 2, 2),
(11, '中国美术学院', 2, 2),
(12, '西安美术学院', 3, 2),
(13, '西川美术学院', 21, 2),
(14, '鲁迅美术学院', 1, 2),
(15, '重庆大学', 7, 2),
(16, '西南大学', 11, 2),
(35, '中央美术学院', 1, 1),
(36, '北京服装学院', 1, 1),
(37, '天津美术学院', 1, 1),
(38, '西安美术学院', 3, 1),
(39, '西川美术学院', 18, 1),
(40, '西安交通大学', 1, 1),
(41, '重庆大学', 10, 1),
(42, '西南大学', 13, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hs_admin`
--

CREATE TABLE IF NOT EXISTS `hs_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `loginname` varchar(32) NOT NULL COMMENT '管理员登录名',
  `password` varchar(32) NOT NULL COMMENT '管理员密码',
  `salt` varchar(6) NOT NULL COMMENT '加盐',
  `nickname` varchar(60) NOT NULL COMMENT '昵称',
  `last_login_time` varchar(20) NOT NULL COMMENT '最后登录时间',
  `is_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活',
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否超级管理员',
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginname` (`loginname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hs_admin`
--

INSERT INTO `hs_admin` (`id`, `loginname`, `password`, `salt`, `nickname`, `last_login_time`, `is_active`, `is_super_admin`) VALUES

-- --------------------------------------------------------

--
-- 表的结构 `hs_admission`
--

CREATE TABLE IF NOT EXISTS `hs_admission` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(60) NOT NULL COMMENT '题目',
  `content` text NOT NULL COMMENT '内容',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='报名方式' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `hs_admission`
--

INSERT INTO `hs_admission` (`id`, `title`, `content`, `controller`, `created_time`) VALUES
(1, '网上报名', '在1977画室官方网站www.1977hs.com填写报名资料', 'admin', '2015-06-18 15:08:27'),
(2, '微信报名', '查找微信公众账号“1977美术培训中心（lz1977hs）”，将学生姓名、性别、就读高中、通讯地址、联系电话以短信方式发送至公众微信号 ', 'admin', '2015-06-18 15:42:42'),
(3, '电话报名', '186-9315-1977刘老师，186-0940-1977宋老师', 'admin', '2015-06-18 15:08:27'),
(4, '现场报名', '家长或学生本人到1977画室现场咨询、报名、交费', 'admin', '2015-06-18 15:08:27'),
(5, '短信报名', '将学生姓名、性别、就读高中、通讯地址、联系电话以短信方式发送至186-9315-1977刘老师，186-0940-1977宋老师沟', 'admin', '2015-06-18 15:08:27'),
(6, '其他说明', '学员报名时提供近期免冠1寸彩色照片2张和身份证原件及1张正反面复印件，用于签订入学协议，建立学生档案等', 'admin', '2015-06-18 15:08:27');

-- --------------------------------------------------------

--
-- 表的结构 `hs_application`
--

CREATE TABLE IF NOT EXISTS `hs_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(20) NOT NULL COMMENT '名字',
  `sex` varchar(6) NOT NULL COMMENT '性别',
  `school` varchar(60) NOT NULL COMMENT '学校名字',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `address` text COMMENT '地址',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  `is_read` int(11) NOT NULL DEFAULT '0' COMMENT '是否已读',
  `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否可用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='报名表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hs_application`
--

INSERT INTO `hs_application` (`id`, `name`, `sex`, `school`, `phone`, `address`, `created_time`, `is_read`, `is_active`) VALUES
(1, '杨幂', 'FEMALE', '1', '2', '3', '2015-06-19 21:22:41', 1, 1),
(2, '王力宏', 'MALE', '1', '1', '1', '2015-06-19 21:22:56', 0, 1),
(3, '范冰冰', 'FEMALE', '2', '3', '4', '2015-06-19 21:36:15', 1, 1),
(4, '1', 'MALE', '2', '3', '4', '2015-06-23 21:07:33', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `hs_consult`
--

CREATE TABLE IF NOT EXISTS `hs_consult` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(60) NOT NULL COMMENT '题目',
  `introduction` text COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `click` int(11) NOT NULL COMMENT '点击数',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='资讯我们' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `hs_consult`
--

INSERT INTO `hs_consult` (`id`, `title`, `introduction`, `content`, `click`, `controller`, `created_time`) VALUES
(2, '人物速写五要素', '高中美术班速写教学以人物为主，人物速写教学应该在结构的严谨性、动态的生动性、线条的丰富性上着力，要谨记以下五点：“临摹”为起点:初学者面对物象往往会觉得无从下手，临摹可以快速入门。通过临摹，一方面可以感受速写基本样式，学习他人表现方法，为今后应用储备知识;另一方面临摹本身也可以提高造型能力...', '<p>高中美术班速写教学以人物为主，人物速写教学应该在结构的严谨性、动态的生动性、线条的丰富性上着力，要谨记以下五点：</p><p><br/></p><p style="font-size:18px;">“临摹”为起点</p><p><br/></p><p>初\n学者面对物象往往会觉得无从下手，临摹可以快速入门。通过临摹，一方面可以感受速写基本样式，学习他人表现方法，为今后应用储备知识;另一方面临摹本身也\n可以提高造型能力，特别是手感、笔感，多临多画就能生成。临摹应从规范严谨的作品开始，切忌油滑，以免形成不良习气。不妨从中国画白描作品中去吸取营养，\n学习白描线与形契合用线之道，体会粗细曲直的线形变化以及疏密虚实的节奏控制。临摹一段时间后就要尝试写生，临摹和写生结合，带着问题去临摹，临摹会更有\n针对性，也会更有效率。</p><p><br/><img src="/Public/Uploads/img/cu1.png" width="100%"/><br/><br/></p><p style="font-size:18px;">结构入手</p><p><br/></p><p>“感\n觉到了的东西，我们不能立刻理解它，只有理解了的东西才能更深刻地感觉它。”人物速写要求结构和比例准确，这种准确是建立在对形体结构理解的基础上的。因\n此，速写教学首先要让学生掌握必要的艺用解剖知识，了解人物的基本结构，理解人体骨骼和肌肉的生长规律及其运动规律。教学过程中，可以借助艺用人体解剖书\n籍和人体骨骼模型进行一些艺用解剖知识传授，还可以有针对性地进行写生和解剖对应训练。结构的理解和运用，要贯穿速写教学全过程。</p><p><br/><img src="/Public/Uploads/img/cu2.png" width="100%"/><br/><br/></p><p style="font-size:18px;">线条为主</p><p><br/></p><p>线\n条是速写的主要表现形式。线条概括、直接，能有效避免色素、明暗干扰，抓住对象形体本质。人物速写训练要求学生学会运用线条的长短、粗细、曲直、松紧、滑\n涩、疏密变化表现具体人物，使画面产生诸多视觉美感。线条的特质与形体结构的巧妙结合，是速写趋于生动的重要条件。速写训练中，要注意线与线之间的穿插关\n系，“结构线”要准确，特别注意关节部位的转折扭动关系，紧贴皮肤处要画得实一些。“衣纹线”要体现内在结构，并注意疏密对比。以线为主，并不排除线面结\n合的速写表现形式，在写生中，适当加上一点明暗，有利于增加层次感和体积感，但要注意明暗不能掩盖线条，否则容易空洞，显得基本功不扎实，浮于表面。</p><p><br/><img src="/Public/Uploads/img/cu3.png" width="100%"/><br/><br/></p><p>快慢结合</p><p><br/></p><p>先\n慢后快，快慢结合是速写训练应该遵循的原则。速写贵在快速，最好一气呵成，但初学者很难做到。速度只能在速写实践中逐步练就。初学速写，如果只讲速度，往\n往会浮于表面，难有深入。慢写是素描和速写的过渡环节，慢写的作画方式与素描基本相同，所不同的是，快写的起稿更加直接，可以忽略对象的体面和光影，直接\n用线勾勒出形体，具有一定的速写特性。慢写时间相对较长，一般半小时到一小时，有推敲的过程和时间，便于研究，能解决速写中碰到的具体问题。速写训练可以\n与慢写训练交替进行。</p><p><br/><img src="/Public/Uploads/img/cu4.png" width="100%"/><br/><br/></p><p style="font-size:18px;">分项突破</p><p><br/></p><p>速\n写涉及内容很多，训练中碰到的问题也会很多。对速写练习中的一些难点，要安排一定时间，集中精力，专门突破。动态、比例，可以通过抓主线练习进行训练，练\n习时省略细节，强调主要动态线。手的动态，可以结合结构理解进行专项训练。平时速写，在画面空白处可有意进行手的特写练习。衣服褶皱，可以先对肘关节、膝\n关节部分进行局部写生，训练对衣皱的概括和表现能力，然后再进行半身和全身的衣皱练习。场景，可以通过风景速写、静物速写、场景图片临写、不同个体情境组\n合训练等方法来提高。默写，可以与平时写生训练结合，写生后马上默写出写生内容，加深理解，训练记忆力。</p>', 96, 'admin', '2015-06-18 13:40:36');

-- --------------------------------------------------------

--
-- 表的结构 `hs_contact`
--

CREATE TABLE IF NOT EXISTS `hs_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(30) NOT NULL COMMENT '题目',
  `content` text NOT NULL COMMENT '内容',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='联系信息' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `hs_contact`
--

INSERT INTO `hs_contact` (`id`, `title`, `content`, `controller`, `created_time`) VALUES
(1, '1977画室地址', '兰州市安宁区银滩路高新十字', 'admin', '2015-06-20 14:59:45'),
(2, '1977画室电话', '186-9315-1977 186-0940-1977', 'admin', '2015-06-20 14:59:46'),
(3, '1977官方网站', 'www.1977hs.com', 'admin', '2015-06-20 14:59:46'),
(4, '咨询QQ', '781472', 'admin', '2015-06-20 14:59:46'),
(5, '微信公众平台名', '1977美术培训中心', 'admin', '2015-06-20 14:59:46'),
(6, '微信公众平台号', 'lz1977hs', 'admin', '2015-06-20 14:59:46'),
(7, '邮箱', '1977art@sina.cn', 'admin', '2015-06-20 14:59:46');

-- --------------------------------------------------------

--
-- 表的结构 `hs_friend`
--

CREATE TABLE IF NOT EXISTS `hs_friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(100) NOT NULL COMMENT '名字',
  `url` varchar(80) DEFAULT NULL COMMENT '地址',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='友情链接' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `hs_friend`
--

INSERT INTO `hs_friend` (`id`, `name`, `url`, `controller`, `created_time`) VALUES
(1, '中央美术学院', 'www.cafa.edu.cn', 'admin', '2015-06-19 20:50:49'),
(2, '清华大学', 'www.tsinghua.edu.cn/publish/newthu/index.html', 'admin', '2015-06-19 20:16:08'),
(3, '中国美术学院', 'www.caa.edu.cn/index.html', 'admin', '2015-06-19 20:16:21'),
(4, '四川美术学院', 'www.scfai.edu.cn', 'admin', '2015-06-19 20:16:35'),
(5, '广州美术学院', 'www.gzarts.edu.cn/2013/', 'admin', '2015-06-19 20:16:48'),
(6, '天津美术学院', '202.113.216.9', 'admin', '2015-06-19 20:17:06'),
(7, '西安美术学院', 'www.xafa.edu.cn', 'admin', '2015-06-19 20:17:17'),
(8, '湖北美术学院', 'www.hifa.edu.cn/zy.htm', 'admin', '2015-06-19 20:17:30'),
(9, '鲁迅美术学院', 'www.lumei.edu.cn', 'admin', '2015-06-19 20:17:41'),
(10, '51美术网', 'www.51meishu.com', 'admin', '2015-06-19 20:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `hs_picture`
--

CREATE TABLE IF NOT EXISTS `hs_picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `pic_adr` varchar(80) NOT NULL COMMENT '图片地址',
  `type` varchar(20) NOT NULL COMMENT '类型',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hs_picture`
--

INSERT INTO `hs_picture` (`id`, `pic_adr`, `type`, `controller`, `created_time`) VALUES
(1, '/Uploads/img/2015/557efcea8a268.png', 'ERWEIMA', 'admin', '2015-06-16 00:27:22'),
(2, '/Uploads/img/2015/5580e8e192731.png', 'ACHIEVEMENT', 'admin', '2015-06-17 11:26:25'),
(3, '/Uploads/img/2015/5580e7b160ea1.jpg', 'WORKS', 'admin', '2015-06-17 11:21:21'),
(4, '/Uploads/img/2015/5580ea207cc01.jpg', 'ENVIRONMENT', 'admin', '2015-06-17 11:31:44'),
(5, '/Uploads/img/2015/5582853e6825f.png', 'ABOUT', 'admin', '2015-06-18 16:45:50');

-- --------------------------------------------------------

--
-- 表的结构 `hs_question`
--

CREATE TABLE IF NOT EXISTS `hs_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(90) NOT NULL COMMENT '题目',
  `answer` text NOT NULL COMMENT '回答',
  `sort` int(11) NOT NULL COMMENT '排序',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='招生问答' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hs_question`
--

INSERT INTO `hs_question` (`id`, `title`, `answer`, `sort`, `controller`, `created_time`) VALUES
(1, '我想参加培训，请问有没有报名截止日期？', '报名没有具体截至日期，为保证教学质量以及教学的正常开展，在8月份以后来的同学我们需要进行测试一次（素描），如果基础较差将无法报名学习。', 1, 'admin', '2015-06-18 11:05:50'),
(2, '关于学费', '具体学费现已公布请电话咨询。', 2, 'admin', '2015-06-18 11:06:13'),
(3, '请问1977画室提供住宿吗？', '我们可以给学生提供住宿，6人/间，8人/间，画室暖气，热水器，洗衣机等配套设施齐全。\r\n', 3, 'admin', '2015-06-18 11:06:27'),
(4, '我基础不好，能跟上大家吗？', '每个人的基础不一样，老师在暑假开始就准备了一套针对没有基础的学生进行训练，所谓有差距才会有动力，参加培训的时候要针对自己的弱项加强锻炼，多做一些练习，多与老师和同学进行交流，进步应该会很快的。 ', 4, 'admin', '2015-06-18 11:06:55'),
(5, '入学测试容易过吗？', '测试只是作为对学生基础的了解，考试内容为临摹头像，只要有一定基础，平时认真，测试基本都能通过。', 5, 'admin', '2015-06-18 11:07:09'),
(6, '开学时间', '画室全年开班，可根据自己的学习时间和文化课进度选择是否提前来学习，画室名额有限固定招收不超过60人保证质量。', 6, 'admin', '2015-06-18 11:07:23'),
(8, '1977地址在哪？', '画室地址：兰州市安宁区银滩路高新十字（费家营十字往南）\r\n咨询电话：186-9315-1977 186-0940-1977 ', 8, 'admin', '2015-06-18 11:07:48'),
(9, '去到画室要怎么坐车？', '1、火车站可乘131路，在十里店站、幸福巷站换乘121、72路公交至高新区路下车即到\r\n2、市内西关十字乘103路至高新区路口下车即到\r\n3、雁滩美伦百货乘20路至高新区路口下车即到 ', 9, 'admin', '2015-06-18 11:49:53'),
(12, '学习时间', '学习时间分周末班，寒暑假班，集训班，联考班，双保班。', 7, 'admin', '2015-06-18 11:41:03');

-- --------------------------------------------------------

--
-- 表的结构 `hs_scroll`
--

CREATE TABLE IF NOT EXISTS `hs_scroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `pic_adr` varchar(80) NOT NULL COMMENT '图片地址',
  `leftOrRight` tinyint(1) NOT NULL COMMENT '左右判断',
  `sort` int(11) NOT NULL COMMENT '排序',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='幻灯片' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `hs_scroll`
--

INSERT INTO `hs_scroll` (`id`, `pic_adr`, `leftOrRight`, `sort`, `controller`, `created_time`) VALUES
(14, '/Uploads/img/2015/557e8670845b7.jpg', 1, 3, 'admin', '2015-06-15 16:01:52'),
(16, '/Uploads/img/2015/557e867e7004f.jpg', 1, 4, 'admin', '2015-06-15 16:02:06'),
(18, '/Uploads/img/2015/557eb0bd1f870.jpg', 2, 1, 'admin', '2015-06-15 19:02:21'),
(19, '/Uploads/img/2015/557e86d57a510.jpg', 2, 2, 'admin', '2015-06-15 16:03:33'),
(20, '/Uploads/img/2015/557e8710035db.jpg', 2, 3, 'admin', '2015-06-15 16:04:32'),
(21, '/Uploads/img/2015/557e90628ee31.jpg', 1, 5, 'admin', '2015-06-15 16:44:18'),
(22, '/Uploads/img/2015/557eb053b5e96.jpg', 1, 2, 'admin', '2015-06-15 19:00:35'),
(24, '/Uploads/img/2015/5584460e30824.jpg', 1, 1, 'admin', '2015-06-20 00:40:46');

-- --------------------------------------------------------

--
-- 表的结构 `hs_teacher`
--

CREATE TABLE IF NOT EXISTS `hs_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(15) NOT NULL COMMENT '姓名',
  `position` varchar(30) DEFAULT NULL COMMENT '职位',
  `pic_adr` varchar(80) NOT NULL COMMENT '图片地址',
  `content` text NOT NULL COMMENT '图片地址',
  `sort` int(11) NOT NULL COMMENT '排序',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='导师' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `hs_teacher`
--

INSERT INTO `hs_teacher` (`id`, `name`, `position`, `pic_adr`, `content`, `sort`, `controller`, `created_time`) VALUES
(2, '刘同', '色彩主教', '/Uploads/img/2015/5580d19e55d37.jpg', '广东工业大学艺术系毕业。兰州美协会员。艺考单招时所考16所高等院校、美院均获的合格证，最终以甘肃省单招第一名的成绩进入广东工业大学。08到10年分别在北京参加清华美院设计班和央美造型班。毕业后在1977从事美术教育至今并担任色彩主教老师。', 2, 'admin', '2015-06-17 09:47:10'),
(3, '董明', '速写主教', '/Uploads/img/2015/5580d1c781af2.jpg', '广州美术学院油画系毕业。在校期间多幅作品被留校收藏。毕业后加入1977，在美术教育工作中积累了丰富的经验，为艺术院校培养和输送了大批优秀艺术人才，并在1977担任速写主教至今，有丰富的教学经验和独到的教学方法。', 3, 'admin', '2015-06-17 09:47:51'),
(4, '敬雪瑞', '设计主教', '/Uploads/img/2015/5580d1f3435ee.png', '武汉纺织大学艺术系毕业。在校期间多次参加设计大赛并获奖，作品《切面》获得湖北高校联合杯“珍纺苑”设计大赛金奖。现任1977设计主教，设计色彩和设计素描为其强项，有一套自己完整的设计教学方法，培养大批学员考入设计类名校。&nbsp', 4, 'admin', '2015-06-17 09:48:35'),
(5, '柴晓东', '', '/Uploads/img/2015/5580d2129ef84.jpg', '毕业于甘肃政法大学。毕业后从事美术教育至今，任1977教务处和办公室主管。', 5, 'admin', '2015-06-17 09:49:06'),
(6, '龚欣', '', '/Uploads/img/2015/5580d23364a2e.jpg', '毕业于兰州理工大学艺术设计系。毕业后从事美术教育工作至今，任1977招生部主管。', 6, 'admin', '2015-06-17 09:49:39'),
(8, '宋耀东', ' 素描主教', '/Uploads/img/2015/5581a7953ddcb.jpg', '\r\n四川美术学院毕业。1977素描主教，兰州美协会员，以甘肃省单考分数第一的成绩进入四川美术学院油画系。2010年获四川美术学院素描大赛一等奖。2012获川美大学生毕业作品展二等奖。毕业后一直在1977从事美术教育至今并担任素描主教老师和教研组长，教学经验丰富，为全国各大学院培养出大批艺术人才。', 1, 'admin', '2015-06-18 01:00:05');

-- --------------------------------------------------------

--
-- 表的结构 `hs_text`
--

CREATE TABLE IF NOT EXISTS `hs_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `content` text NOT NULL COMMENT '图片地址',
  `type` varchar(20) NOT NULL COMMENT '类型',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图文内容' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hs_text`
--

INSERT INTO `hs_text` (`id`, `content`, `type`, `controller`, `created_time`) VALUES
(1, '1977画室传承嫁接兰州万里艺术馆优势艺术氛围。\r\n兰州万里艺术馆专家顾问指导团队：杨国光、韦自强、岳嵘琪、陈天铀、廖国柱、张敬群、林经文、王大钧、魏福孔、张光宇、李明（李苦禅先生纪念馆馆长）……等56位艺术名家。\r\n1977教学团队由各大高校，省市画院经验丰富的专家、艺术家、教授、导师、老师组成。', 'TEACHER', 'admin', '2015-06-17 10:45:26'),
(2, '<p style="text-align:center"><img style="width:100%" alt="table1.png" src="/Uploads/img/2015/table1.png" title="1434113467564220.png"/><br/></p><p style="text-align:center"><img style="width:100%" alt="table2.png" src="/Uploads/img/2015/table2.png" title="1434113467564220.png"/><br/></p><p style="text-align:center"><img style="width:100%" alt="table3.png" src="/Uploads/img/2015/table3.png" title="1434113467564220.png"/><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;暑假期间我们会把重心放到基础训练上，通过基础训练来掌握绘画规律，抓住绘画最本质的东西，为后期的学习中能举一反三打好基础。暑假期间还会插入大量讲座\n（各大名校学生讲述考学经验、介绍大学中各专业的属性、大学生活等，提高同学们的学习兴趣的同时也为大家指明考学方向）。</p><p><br/></p><table style="" align="center" border="0" width="85%"><tbody><tr class="firstRow"><td><p style="text-align:center;color:#C03111">开设专业专题讲座 <br/></p><p>专家讲座：每月定期邀请各大高校、省市画院名家，教授、导师进行艺术讲座，学生学品点评。<br/></p><p>考前讲座：</p><p>1.美院美院入学考试评分标准及高考动向<br/></p><p>2.美院历年高分试卷讲评<br/></p><p>3.省联考考试范围及技巧讲座<br/></p><p>4.以外省为主的单招院校历年试题分析及应试风格技巧讲座<br/></p><p>5.艺术类高校专业设置及就业前景讲座<br/></p></td></tr></tbody></table><p><span style="font-size: 18px;"></span><br/></p><p><span style="font-size: 18px;"><br/></span></p><p><span style="font-size: 18px;"></span></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">班别设置</span><br/></td></tr></tbody></table><p style="text-align:center"><img style="width:60%" alt="26394DB6-EC29-49CB-ABC2-A91057921A76.png" src="/Uploads/img/2015/1434113467564220.png" title="1434113467564220.png"/></p><p><span style="color: rgb(84, 141, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 注：长期班、艺考冲刺班收费2000/月 整交1700/月招收应、往届高三学生和少量高一、高二学生要求适应高强度学习服从画室教学生活管理<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 不招收以下学生：<br/>\n &nbsp; &nbsp; &nbsp;&nbsp; 1.个性过于独特不能融入集体生活、没上进心<br/>\n &nbsp; &nbsp; &nbsp;&nbsp; 2.有传染疾病或重大疾病者</span><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 为提高艺术考生的文化课水平，画室特聘省内优秀教师，在休息日重点补习艺术生薄弱项英语、数学，1977学员可自愿免费参加学习。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 相关费用请现场咨询或电话咨询画室为了激励学生的学习热情，帮助贫困学生及优秀学生，特别设立了1977奖学金，激励学员学习热情，贫困生优惠政策等。因各地中学暑假放假时间不同，画室最早于5月1日起开始接收学生提前入学报到。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977复读生优惠政策，根据往届成绩实行学费减免政策。</p><p><br/></p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">上课时间</span><br/></td></tr></tbody></table><p style="text-align:center"><img style="width:100%" alt="table4.png" src="/Uploads/img/2015/table4.png" title="1434113467564220.png"/><br/></p>', 'EDUCATION', 'admin', '2015-06-23 23:30:32'),
(3, '<table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">生活管理</span><br/></td></tr></tbody></table><p style="text-align:center"><img style="width:40%;" alt="ED78A7E4-93F7-42B0-91D0-4E9447796C78.png" src="/Uploads/img/2015/1434116913586239.png" title="1434116913586239.png"/></p><p><span style="color: rgb(84, 141, 212);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>画室配备生活老师，24小时监控设备， 指纹打卡考勤系统， 规范学生的学习和生活纪律。并建立与学生家长定期交流的机制，使学生家长及时掌握学生的学习和生活动态，画室半封闭管理，除就餐时间外，对学员从生活，学习及行为上严格要求，画室浴室洗衣机等生活配套设施。</p><p><br/></p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">考试服务</span><br/></td></tr></tbody></table><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 画室配备生活老师，24小时监控设备， \n指纹打卡考勤系统， \n规范学生的学习和生活纪律。并建立与学生家长定期交流的机制，使学生家长及时掌握学生的学习和生活动态，画室半封闭管理，除就餐时间外，对学员从生活，学\n习及行为上严格要求，画室浴室洗衣机等生活配套设施。</p><p><br/></p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">入学流程</span><br/></td></tr></tbody></table><table align="center" border="0" width="90%"><tbody><tr class="firstRow"><td><p>&nbsp;1.画室办公室：由画室办公室老师介绍画室师资、班别、课程等。<br/></p><p>&nbsp;2.参观画室：由老师带学生参观教室、宿舍、介绍画室基本资料等。<br/></p><p>&nbsp;3.填写报名表：登记填写报名信息，要求1寸彩色照片2张，身份证复印件（正反面）或户口本复印件一 份。<br/></p><p>&nbsp;4.入学测试：对学生的专业能力进行初步了解。<br/></p><p>&nbsp;5.缴纳学费：办公室办理缴费，学费、住宿费、住宿押金、入学前需缴清纳学费。<br/></p><p>&nbsp;6.建立档案：建立学生档案，签订入学协议及安全承诺书。<br/></p><p>&nbsp;7.安排宿舍：安排宿舍，并领取宿舍钥匙和储物柜钥匙一套，宿舍分6人间8人间，宿舍床位选择为先到先选原则。<br/></p><p>&nbsp;8.正式上课：学生安顿完成后由老师带入课室，交接主教老师<br/></p></td></tr></tbody></table><p><br/></p>', 'LIFE', 'admin', '2015-06-22 19:07:26'),
(4, '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><span style="font-size: 18px;">川美1977美术培训品牌成立于2009年，自成立至今，每年联考本科过线率96%以上，并在近五年连续保持98%以上，为全国重本和美院输送了大量优秀学员。&nbsp;&nbsp;</span></strong></p><p><br/><span style="font-size: 18px;"></span></p><p><span style="font-size: 18px;"></span></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">专业</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977画室（下简称1977）中国·兰州分部是经兰州民政局，文化局批准挂牌的正规美术培训中心，1977坐落在兰州学院气氛浓厚的安宁区，画室距离甘\r\n肃省联考点师大仅5分钟车程，1977拥有明星教师团队，由四川本部抽调，画室执教老师均是毕业于一流美院和设计类一本大学，四川美术学院，广州美术学\r\n院，广东工业大学，北京理工大学等知名院校的全职教师，1977每年定期组织教师赴杭州，北京，广州多地进行进修和系统的艺考培训，时刻把握艺考最新脉络。\r\n &nbsp; &nbsp;</p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">专注</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977每年限额招生60人，1977秉承陈丹青先生理念，优秀画师是天生的，所谓“天生”，不是指所谓“天才”，而是指他实在非要做这件事情，什么也拦\r\n他不住，于是一路做下来，成为他想要成为的那种人。所以1977进行入学测试考试，只招愿意为了梦想努力付出，期待破茧成蝶，为升入理想高校能吃苦，不辞\r\n日夜辛苦，愿意把青春交给画笔、颜料盒学员，1977助梦起航。<br/>\r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977进行入学考察，宁缺勿滥，严格管理，杜绝盲目求大无序教学，每班人数限制，保证每个教师辅导不超过20人，保证每位学员每天被指导\r\n12次以上！1977秉承先进的教学理念，现代的管理模式和一流的教学环境，分班教学，进行入学考察，宁缺勿滥，杜绝盲目求大无序教学，每班人数限制，保\r\n证每个教师辅导不超过20人，保证每位学员每天被指导12次以上！1977秉承先进的教学理念，现代的管理模式和一流的教学环境。 <br/></p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">氛围</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977教师运用中央美术学院造型方案，中国美术学院色彩方案结合兰州本地优势艺术资源，1977秉承兰州万里艺术馆独有艺家顾问团优势。<br/>\r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 兰州万里艺术馆专家顾问团：艺术顾问指导：杨国光、韦自强、岳嵘琪、陈天铀、廖国柱、张敬群、林经文、王大钧、魏福孔、张光宇、李明（李苦禅先生纪念馆馆长）……等32人。<br/>\r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 每月邀请各大院校专家，教授，省、市画院艺术名家前来讲座指导，点评学生作业，形成1977独有的艺术氛围。1977最专业最具实力！打造西北画室画室一流品牌！\r\n &nbsp; &nbsp;&nbsp;</p><p><br/></p><table style="margin-bottom:5px;" align="center" width="150"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="150"><span style="color: rgb(255, 255, 255); font-size: 20px;">理念</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977宁缺勿滥，之前很多同学问，学美术到底有什么用?这个问题我觉得这目前高中的情况很多人误认为：你文化课不好，去学美术吧，容易上大学。我觉得这绝对大错特错。<br/>\r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 学美术的根本目的如果只是为了上大学，1977建议你还是不要学了。因为，目前的情况是，学美术所付出的辛苦与努力远比文化课普通生要多的多。这个只有经历过美术高考的朋友才会懂的，没经历过的你绝对没有体会，付出的努力不比文化生少。<br/>\r\n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 趁青春，如果决定了，就要义无反顾，在画板前无数个日夜的坚守，梦想是注定孤独的旅行，路上少不了质疑和嘲笑，但那又怎样哪怕遍体鳞伤也要\r\n活的漂亮我们是美术生，1977助梦梦想者，助梦青春。有一种疯狂叫青春!他们是我们的影子,时光在追赶你我,留下岁月痕迹，现在的负担将变成礼物，你受\r\n的苦将照亮你的路。……1977助梦学子实现梦想的能力，乘风破浪，赢未来！！\r\n &nbsp; &nbsp;</p><div id="xunlei_com_thunder_helper_plugin_d462f475-c18e-46be-bd10-327458d045bd"></div>', 'INTRODUCTION', 'admin', '2015-06-21 22:29:38'),
(5, '<p><strong><span style="font-size: 18px;">&nbsp;</span></strong></p><p><span style="font-size: 18px;"></span></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色一：1977现招60人，精品小班式辅导，因人而异，因材施教</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977每年限额招生60人，1977秉承陈丹青先生理念，优秀画师是天生的，所谓“天生”，不是指所谓“天才”，而是指他实在非要做这件事情，什么也拦他不住，于是一路做下来，成为他想要成为的那种人。所以1977进行入学测试考试，只招愿意为了梦想努力付出，期待破茧成蝶，为升入理想高校能吃苦，不辞日夜辛苦，愿意把青春交给画笔、颜料盒学员，1977助梦起航。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977进行入学考察，宁缺勿滥，严格管理，杜绝盲目求大无序教学，每班人数限制，保证每个教师辅导不超过20人，保证每位学员每天被指导12次以上！1977秉承先进的教学理念，现代的管理模式和一流的教学环境，分班教学，进行入学考察，宁缺勿滥，杜绝盲目求大无序教学，每班人数限制，保证每个教师辅导不超过20人，保证每位学员每天被指导12次以上！1977秉承先进的教学理念，现代的管理模式和一流的<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977画室始终坚持以“纯小班精品式办学，只求精不求大，教学质量第一位”的宗旨，1977教学总监亲自为您手把手教学，能根据每学员的个人情况一对一设定不同教学训练方案。拒绝千篇一律，拒绝教学手段单一，1977画室引人以傲的一点，每个学员基本功扎实全面，又有个人的独特面貌，不会相互雷同。艺术强调的是创造力，是个性，艺术类院校更是强调学生的个性面貌，否则便会失去一切竞争力！1977教师团队针对各大美院和重点本科院校的考试要求和考试特点对学员进行精品强化训练，助学员实现冲刺美院，圆名校的梦想！</p><p><br/></p><p><br/></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色二：独创的“导师终生责任服务制”伴你一生的良师益友！</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977画室实施“导师终生责任服务制”，由主教老师负责对每一位学生的学习和家长负责，不管您学习上遇到什么困难，我们可以通过“面对面、电话、QQ、网络”等各个方式尽自己最大的能力去细心帮你解答，形成“学生—老师—家长”三者互动。无论您以后在艺术人生的哪个阶段，我们将为继续您提供专业选择、就业方向指导等终生的艺术服务，以一颗高度负责的心，成为伴您一生的良师益友！</p><p><br/></p><p><br/></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色三：先进的教学系统，模拟考试，杜绝无序教学！</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977画室根据多年美术高考培训的经验，总结制定出自己的教学方案，所有任课老师都必须按照《1977执教手册》来安排教学课程，杜绝随到随学，随画随改的作坊式无序教学。1977执教团队带您全程模拟考场考题教学，亲自把您带进美院考场，从心理战术上、入考场的最佳时间、考题物体分析、画面构图选择、解题技巧应试战术上等一一精心剖析。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 先进的教学做到：<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、高精尖：“高精尖”是指要求学员眼力高，技术，基本功过硬，全面，在此基础上又提一科或几科冒尖，达到高眼界，精技术，尖端成绩，要求每个成员将自己定位成精英人才，精英基本功，精英成绩。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、个性鲜明：个人特点突出，具有自己独特的面目，绝不会盲目模仿。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、精品解析：单独评讲分析一周的作业并结合考题改画。参照范画进行分析读懂高分试卷，技法的运用。针对画面缺点单个示范。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、制定计划：帮住学生制定一周考题的学习计划，做到不让一秒虚过。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、方向训练：抓住各省份联考和美院的不同风格应试和训练不走弯路。针对性押题，美院老师挑选各科高分构图“背考”，以高分换取高分。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6、拓展视野：定期开展室外写生课程，定期观看优秀教视频和大师作品欣赏，组织邀请各美院优秀学员一起分享经验。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7、经验传承：传授考前应急技巧，不管行式，只要高分等等。美院老师考试秘诀为您美院理想手把手护航！<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8、1977精神：从1977走出的学员不仅仅是在基本功技术这个简单的层面上得到质的飞跃，更重要的是他们具有了精神上的飞跃，在中国的当下环境中，教育是至关重要的重点，而教育的缺失使现在的年轻人的精神缺失，不能自立，无比娇弱，普遍的“啃老”，道德的缺失，不愿竞争致使父母眼睁睁地看着子女的沦落而无法可施，这一切都是因为“教育的方法”失误!没有正确的人生观，没有战斗的勇气，没有适应一天比一天残酷的社会竞争力! <br/></p><p><br/></p><p><br/></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色四：精品课程安排，改变学习生活，不再了然无趣！</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、基础课程：俗话说：“没有金钢钻别揽瓷器活。”画画要做到“高精尖”，没有好的绘画基础是不可能做到的，所以我们的基础课程尤为重要！1977画室总结全国各大画室的教学经验，制定出《1977执教手册》，具体准确并且快速的提高学员的绘画基础，科目俱全，课程精细，可做到每小时课程的具体安排，精益求精！<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、拓展课程：“学而不思则罔，思而不学则殆”只有好的绘画基础能力还是不够的，要做到更好，必须提高学员的审美能力，1977画室定期组织学员参观并陪同讲解艺术家画展，欣赏艺术大师作品，全国顶尖美术教师定制视屏等，通过美院老师的精品解析，帮助学员领悟和掌握更高的绘画知识。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、户外写生：1977画室定期组织学员外出写生，开拓视野，释放压力。学与乐的转换，科学有效的学习，避免学员因长时间重复同样的工作而对学习产生反感。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4、设计课程：全国各大艺术院校设计类专业居多（美院设计类单独设置考试），1977画室开设设计课程，教师拥有多年执教设计经验，帮助学生轻松应对设计考试。<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5、针对训练：全国艺术类院校都有自己喜欢的风格，要想拿下他们，必须“对症下药”！1977的美术教师均来自全国各大艺术院校，有着丰富的征考经验，可以准确的帮助学员掌握各大院校的考试秘诀，有备无患！<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6、精品强化：“不想当将军的士兵不是好士兵。”每个学生都有自己的状元梦，1977亦是如此，1977的教师团队均是驰骋艺考沙场的精英，均在全国各大院校中取得过优异的成绩，“没有最好只有更好”1977承诺每天每学生辅导12次以上，帮你不断地提高绘画水平，丰富的考场经验帮你做好一切应对考场的准备。你想在艺考大军中独领风骚吗？1977知你一臂之力！<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7、文化课辅导：艺考和文化课就像人的两条腿，只有两条腿都迈进了高校的大门，才算成功。为了不拖您的后退，1977专门针对艺术生最薄弱的英语和数学，在每周画室休息日免费辅导，1977学员可自愿选修，让学员稳步向前，不落后任何人一步！ <br/></p><p><br/></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色五：定期举办“1977名师讲堂”，理论实践同步提高</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977画室传承兰州万里艺术馆优势艺术顾问团队，高端嫁接，优化组合各项教学资源，每月邀请各大高校专家、教授，省、市画院艺术名家前来讲座授课，点评学生作业，因材施教，有教无累。</p><p><br/></p><p><br/></p><table style="margin-bottom:10px;" align="center" width="80%"><tbody><tr class="firstRow"><td style="background-color: rgb(192, 49, 17); " align="center" valign="top" width="80%"><span style="color: rgb(255, 255, 255); font-size: 20px;">特色六：成熟的管理模式，平等交流，共同进步！</span><br/></td></tr></tbody></table><p><span style="font-size: 18px;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1977定期组织班会，加强老师和学生的交流，总结和吸取学生反馈的情况和意见，让老师和学员做朋友，做到老师与学生无死角式的交流和沟通，让每个来1977学习的学生都可以自由地表达自己真实的想法和感受，不拘束，无怨念，开心舒适的学习和生活。对于管理，1977有严格的校纪校规，以保证1977每一位学员的学习环境不受他人影响和侵害。定期和学员家长汇报学员的学习、生活情况。家长也可通过画室网络、电话咨询孩子的情况。1977用心陪伴，家长放心！</p><p><br/></p>', 'SPECIAL', 'admin', '2015-06-21 22:19:01');

-- --------------------------------------------------------

--
-- 表的结构 `hs_video`
--

CREATE TABLE IF NOT EXISTS `hs_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `vid_adr` text NOT NULL COMMENT '题目',
  `height` varchar(30) NOT NULL COMMENT '长度',
  `width` varchar(30) NOT NULL COMMENT '宽度',
  `type` varchar(20) NOT NULL COMMENT '类型',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='视频' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hs_video`
--

INSERT INTO `hs_video` (`id`, `vid_adr`, `height`, `width`, `type`, `controller`, `created_time`) VALUES
(1, 'http://www.tudou.com/programs/view/html5embed.action?type=0&code=LFP4CaShiV0&lcode=&resourceId=0_06_05_99', '660px', '100%', 'ABOUT', 'admin', '2015-06-18 17:42:06');

-- --------------------------------------------------------

--
-- 表的结构 `hs_visitor`
--

CREATE TABLE IF NOT EXISTS `hs_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `ip` varchar(20) NOT NULL COMMENT 'ip地址',
  `country` varchar(80) DEFAULT NULL COMMENT '城市',
  `area` varchar(80) DEFAULT NULL COMMENT '区域',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='访问者' AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `hs_visitor`
--

INSERT INTO `hs_visitor` (`id`, `ip`, `country`, `area`, `created_time`) VALUES
(31, '117.136.41.32', '中国', '移动', '2015-06-23 23:22:04'),
(32, '113.64.229.165', '广东省广州市', '电信', '2015-06-23 23:54:35'),
(33, '113.64.229.165', '广东省广州市', '电信', '2015-06-23 23:55:22'),
(34, '14.146.27.167', '广东省广州市', '电信', '2015-06-23 23:55:29'),
(35, '14.17.11.196', '广东省深圳市', '深圳市腾讯计算机系统有限公司电信节点', '2015-06-23 23:56:43'),
(36, '101.226.68.217', '上海市', '电信', '2015-06-23 23:57:16'),
(37, '180.153.201.64', '上海市', '电信', '2015-06-24 00:07:35'),
(38, '180.153.206.24', '上海市', '电信', '2015-06-24 00:08:11'),
(39, '180.153.201.79', '上海市', '电信', '2015-06-24 00:08:21'),
(40, '101.226.68.217', '上海市', '电信', '2015-06-24 00:25:49'),
(41, '101.226.89.119', '上海市', '电信', '2015-06-24 00:25:49');

-- --------------------------------------------------------

--
-- 表的结构 `hs_webinfo`
--

CREATE TABLE IF NOT EXISTS `hs_webinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `content` varchar(80) NOT NULL COMMENT '名字',
  `type` varchar(20) NOT NULL COMMENT '类型',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站信息' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hs_webinfo`
--

INSERT INTO `hs_webinfo` (`id`, `content`, `type`, `controller`, `created_time`) VALUES
(1, '18693151977 | 18609401977', 'PHONE', 'admin', '2015-06-21 00:27:07'),
(2, '黔ICP备15003298号', 'BEIAN', 'admin', '2015-06-21 00:27:07'),
(3, '兰州万里艺术馆版权所有', 'BANQUAN', 'admin', '2015-06-21 00:27:07'),
(4, '安宁区高新区路口', 'ADDRESS', 'admin', '2015-06-21 00:27:07');

-- --------------------------------------------------------

--
-- 表的结构 `hs_works`
--

CREATE TABLE IF NOT EXISTS `hs_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `pic_adr` varchar(80) NOT NULL COMMENT '图片地址',
  `type` varchar(10) NOT NULL COMMENT '类型',
  `sort` int(11) NOT NULL COMMENT '排序',
  `controller` varchar(32) NOT NULL COMMENT '操作者',
  `created_time` varchar(20) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='作品' AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `hs_works`
--

INSERT INTO `hs_works` (`id`, `pic_adr`, `type`, `sort`, `controller`, `created_time`) VALUES
(2, '/Uploads/img/2015/557fe1118c83d.jpg', 'SUMIAO', 2, 'admin', '2015-06-16 16:40:49'),
(3, '/Uploads/img/2015/557fe193a62e8.jpeg', 'SUMIAO', 3, 'admin', '2015-06-16 16:42:59'),
(4, '/Uploads/img/2015/557fe19adb2d2.jpg', 'SUMIAO', 4, 'admin', '2015-06-16 16:43:06'),
(6, '/Uploads/img/2015/557ff5fe156dc.jpg', 'SECAI', 2, 'admin', '2015-06-16 18:10:06'),
(7, '/Uploads/img/2015/557fe9a003f51.jpg', 'SECAI', 3, 'admin', '2015-06-16 17:17:20'),
(8, '/Uploads/img/2015/557fe9ae8530a.jpg', 'SECAI', 4, 'admin', '2015-06-16 17:17:34'),
(9, '/Uploads/img/2015/557fe9ba76fef.jpg', 'SECAI', 5, 'admin', '2015-06-16 17:17:46'),
(11, '/Uploads/img/2015/557fea7e21771.jpg', 'SUXIE', 2, 'admin', '2015-06-16 17:21:02'),
(12, '/Uploads/img/2015/557feade40238.jpg', 'STUDENT', 1, 'admin', '2015-06-16 17:22:38'),
(13, '/Uploads/img/2015/557ff64a2fb77.jpg', 'STUDENT', 2, 'admin', '2015-06-16 18:11:22'),
(14, '/Uploads/img/2015/557feaf0dcdc1.jpg', 'STUDENT', 3, 'admin', '2015-06-16 17:22:56'),
(19, '/Uploads/img/2015/557ffdb06d444.jpeg', 'SUMIAO', 1, 'admin', '2015-06-16 18:42:56'),
(20, '/Uploads/img/2015/557ffe3c64da2.jpg', 'SECAI', 1, 'admin', '2015-06-16 18:45:16'),
(21, '/Uploads/img/2015/557ffe6146493.jpg', 'STUDENT', 4, 'admin', '2015-06-16 18:45:53'),
(22, '/Uploads/img/2015/557ffe81578a4.jpg', 'SUXIE', 1, 'admin', '2015-06-16 18:46:25'),
(23, '/Uploads/img/2015/558616cc17676.jpg', 'SUMIAO', 5, 'admin', '2015-06-21 09:43:40'),
(24, '/Uploads/img/2015/558616d591652.jpeg', 'SUMIAO', 6, 'admin', '2015-06-21 09:43:49'),
(25, '/Uploads/img/2015/558616e03aaca.jpg', 'SUMIAO', 7, 'admin', '2015-06-21 09:44:00'),
(26, '/Uploads/img/2015/558616e8cc1b0.jpeg', 'SUMIAO', 8, 'admin', '2015-06-21 09:44:08'),
(27, '/Uploads/img/2015/5586178dae821.jpg', 'SECAI', 6, 'admin', '2015-06-21 09:46:53'),
(28, '/Uploads/img/2015/55861799d6b17.jpg', 'SECAI', 7, 'admin', '2015-06-21 09:47:05'),
(29, '/Uploads/img/2015/558617a43777e.jpg', 'SECAI', 8, 'admin', '2015-06-21 09:47:16'),
(30, '/Uploads/img/2015/558617af0c10f.jpg', 'SECAI', 9, 'admin', '2015-06-21 09:47:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
