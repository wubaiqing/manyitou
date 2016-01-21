-- MySQL dump 10.13  Distrib 5.1.73, for unknown-linux-gnu (x86_64)
--
-- Host: localhost    Database: myt
-- ------------------------------------------------------
-- Server version	5.1.73-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL DEFAULT '',
  `color` varchar(11) NOT NULL DEFAULT '',
  `url` varchar(255) DEFAULT NULL,
  `sort` smallint(5) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (2,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2014/08/08//53e45c8833778.jpg','ffffff','http://www.manyitou.com/detail/1.html',0,1,'2014-06-27 15:55:29','2014-08-08 05:15:08'),(3,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2014/06/28//53ad997875e3b.jpg','6f1425','http://www.manyitou.com/billboard/detail/2.html',1,1,'2014-06-22 04:37:45','2014-06-29 02:45:49'),(4,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2014/06/27//53ad93c49722c.jpg','ff0767','',2,1,'2014-06-22 04:36:32','2014-06-28 14:19:03');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billboard`
--

DROP TABLE IF EXISTS `billboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billboard` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billboard`
--

LOCK TABLES `billboard` WRITE;
/*!40000 ALTER TABLE `billboard` DISABLE KEYS */;
INSERT INTO `billboard` VALUES (1,'关于满意投推广联盟','<p><a href=\"http://www.manyitou.com\">www.manyitou.com</a> 满意投是由北京水木华哲网络有限公司运营。</p><p>&nbsp;</p><p>专注为淘宝商家提供最优质、精准的站外流量及活动资源，帮助卖家以最低的成本获得最高的销量。</p><p>&nbsp;</p><p>网站所经营的每一个资源都经专业的渠道人员筛选、洽谈。以保障商家在做投放时能够尽量少走弯路，少做没必要的花费 让每一分推广费都用在正确的渠道上。</p><p>&nbsp;</p><p>我们将对提供的资源进行严格的审核，杜绝虚假站点。对已上线的网站信息实时监督，发现弄虚作假、信息不符者，马上下架处理！</p><p><br/></p><p>卖家投放广告及站长合作请联系qq：&nbsp;&nbsp;&nbsp;&nbsp; 417669527&nbsp;&nbsp; 2328628221</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','2014-06-15 13:53:07','2014-07-04 05:33:23',1),(2,'淘宝客/站长  合作说明','<p>&nbsp;&nbsp;&nbsp; 满意投广告联盟是由北京水木华哲网络有限公司运营。我们专注于做电商广告资源整合，提供给电商卖家选择来投放广告。我们现在有20人的销售团队，目前拥有大量的商家资源。现诚邀淘宝客、网站站长、手机APP开发者入驻，诚意合作，实现共赢。</p><p><br/></p><p><span style=\"WIDOWS: 2; FONT-FAMILY: Tahoma; ORPHANS: 2; FONT-SIZE: medium\">淘宝客/站长 &nbsp;合作说明：</span></p><p>1、淘宝客：单月淘宝客佣金大于3万（需提供阿里妈妈后台截图）</p><p>&nbsp; &nbsp;其他站长：网站真实日均UV大于1万（需提供流量统计截图）</p><p>2、流量能够集中，便于推广单个商品或店铺</p><p>3、价格合理，按自身的流量进行</p><p>4、广告报价广告投放开始后，不按约定投放或是利用垃圾流量等作弊手段弄虚作假者一律不合作</p><p>5、给我们的广告报价，不得高于自身广告销售的报价，否则不予合作。</p><p><br/></p><p>无论你是淘宝客、站长或是app开发者，只要你有网购流量，你就来！欢迎入驻，联系QQ:2328628221</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','2014-06-16 23:58:42','2014-07-06 05:36:55',1),(3,'626天猫年终大促资源预售','<p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; COLOR: #ff0000; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">为迎接626天猫年终大促的到来，114啦网址导航特推出114购物节来为参与天猫年中大促的商家提供精准优质的流量和曝光机会，以此来帮主商家创造更高的销售业绩！</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">活动网址：<a href=\"http://www.114la.com/\">http://www.114la.com/</a></span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">活动时间：2014年6月24-26号</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">主要推广方式：全网及114啦主站背景墙等精准大流量资源整合 预计每日可为本活动专题页面提供100万~200万精准流量。</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">商家要求：</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">①参与626大促的天猫专营店、旗舰店。</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">②：本次活动只招商30家，服装、鞋包、化妆品、数码家电等热销类目商家优先参与。</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\"></span>&nbsp;</p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2; BACKGROUND-COLOR: #ffffff\">③：本次合作是付费合作 有合作意向的商家请先咨询活动专员进行店铺审核及流程签订等事项。</span></p><p><span style=\"FONT-SIZE: medium; FONT-FAMILY: Tahoma; ORPHANS: 2; WIDOWS: 2\"></span>&nbsp;</p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','2014-06-17 00:04:34','2014-08-21 09:15:39',0),(4,'聚划算佣金团 聚定制 报名！','<blockquote><p><strong><span style=\"COLOR: #ff0000\">本资源不做为本公司经营性资源，是应商家要求为帮主更多天猫优质商家 更快速上架聚划算活动特搜集的一手资源 请商家朋友根据自身店铺状况合理安排活动情况！ 以下是收费明细</span></strong></p><p><strong>&nbsp;</strong></p><p><strong>聚划算资源：</strong></p><p>&nbsp;</p><p><strong>佣金团：3.8万 +7%佣金<br/>聚定制 ：4.5万 <br/>品牌团： 6.5万+10W坑位费 （仅限top200商家）<br/>日常团：2.3万+坑位竞拍费</strong></p><p><strong>&nbsp;</strong></p><p><strong>如商家有合适商品需要报名，请先联系本站专员 确认产品是否能够上架，如果确认能够上架在进行付费！</strong></p><p>&nbsp;</p></blockquote><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p><p><br/></p>','2014-06-17 00:27:57','2014-08-21 09:15:48',0),(5,'卖家刊——站外推广的意义','<table style=\"width: 466px;\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"940\"><tbody><tr class=\"firstRow\"><td style=\"margin: 0px; padding: 0px;\"><p style=\"margin: 0px; padding: 0px;\"><span class=\"bt\" style=\"font-family: 微软雅黑; font-size: 36px; line-height: 42px; color: rgb(51, 51, 51); font-weight: bold;\">站外推广的意义</span><br/><span class=\"xbt\" style=\"font-family: 微软雅黑; font-size: 14px; line-height: 32px; color: rgb(51, 51, 51); font-weight: bold;\"></span><br/></p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">站外推广到底能够给淘宝卖家带来什么样的价值呢？这里有必要简单陈述下站外推广的优势：主导优势和潜在优势。</span></p><p class=\"STYLE1\" style=\"margin: 0px; padding: 0px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top; font-weight: bold;\">主导优势：品牌形象</p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">站外推广给用户的第一印象就是品牌广告，因此品牌印象尤为深刻。站外资源覆盖各个类目，用户覆盖各个地域，人群属性更为综合，所以品牌受众面广泛。</span></p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">同时，因站外资源网购类商品信息相对淘宝网较少，相对而言消费者的关注度更容易集中，不会更多地去浏览其他同类产品做比较，流失率低。</span></p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">资讯信息类等网站，因实用性强，用户粘合度高，点击转化率较高。作为一个卖家，流量很重要，流量是生存之本。发展离不开推广，C 店卖家如此，商城卖家亦是。对于B 店来说，尤其注重长期和短期战略目标的制定，但大体方向只有一个，形象口碑的提升。只有他人认可了，才能促使其购买并达到双赢。站外网站的优势就在于大范围的普及推广和店铺流量的引入转化，这些是站内资源无法相比及的。在互联网领域，淘宝是其中的一小块，我们需要在各个领域挖掘和培养我们的潜在客户，提高知名度。</span></p><p class=\"STYLE1\" style=\"margin: 0px; padding: 0px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top; font-weight: bold;\">潜在优势：ROI</p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">卖家进行推广很关心ROI（投入产出比）上，站外资源同样可以满足这个需求！具体 资源类目如下：导购导航类等站点，网购人群集中，成交转化率高；潮流时尚类等网站，集合众多女性用户，感性消费性强；生活资讯类等网站，信息承载量大，用户粘性高，宜培养潜在消费群体……</span></p><p style=\"margin: 0px; padding: 0px;\"><span class=\"wz\" style=\"width: 940px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top;\">简言之，站外推广集合三大优势，品牌提升，流量引入和成交转化。任何一类资源有他的主导优势，鱼和熊掌不可兼得，卖家可根据主要期望值选择合适的资源推广。</span></p></td></tr></tbody></table><table style=\"width: 466px;\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" height=\"100\" width=\"940\"><tbody><tr class=\"firstRow\"><td class=\"STYLE1\" style=\"margin: 0px; padding: 0px; font-size: 14px; font-family: 宋体; line-height: 32px; vertical-align: top; font-weight: bold;\" align=\"right\">站外推广效果排行 独家发布<br/><span class=\"STYLE2\" style=\"font-size: 15px;\">详见《卖家》6月刊《淘宝站外推广资源效果报告》</span></td></tr></tbody></table><p><br class=\"Apple-interchange-newline\"/></p><p><br/></p>','2014-06-17 03:46:22','2014-06-18 02:05:16',0),(6,'卖家刊---站外推广的意义','<p style=\"TEXT-INDENT: 231px\"><strong><font face=\"Calibri\">站外推广的意义</font></strong></p><p style=\"TEXT-INDENT: 231px\"><font face=\"Calibri\"></font>&nbsp;</p><p><span style=\"FONT-FAMILY: 宋体\">站外推广到底能够给淘宝卖家带来什么样的价值呢？这里有必要简单陈述下站外推广的优势：主导优势和潜在优势。</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">主导优势：品牌形象</span></p><p><span style=\"FONT-FAMILY: 宋体\">站外推广给用户的第一印象就是品牌广告，因此品牌印象尤为深刻。站外资源覆盖各个类目，用户覆盖各个地域，人群属性更为综合，所以品牌受众面广泛。</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">同时，因站外资源网购类商品信息相对淘宝网较少，相对而言消费者的关注度更容易集中，不会更多地去浏览其他同类产品做比较，流失率低。</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">资讯信息类等网站，因实用性强，用户粘合度高，点击转化率较高。作为一个卖家，流量很重要，流量是生存之本。发展离不开推广，</span><span style=\"FONT-FAMILY: Calibri\">C </span><span style=\"FONT-FAMILY: 宋体\">店卖家如此，商城卖家亦是。</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">对于</span><span style=\"FONT-FAMILY: Calibri\">B </span><span style=\"FONT-FAMILY: 宋体\">店来说，尤其注重长期和短期战略目标的制定，但大体方向只有一个，形象口碑的提升。只有他人认可了，才能促使其购买并达到双赢。站外网站的优势就在于大范围的普及推广和店铺流量的引入转化，这些是站内资源无法相比及的。在互联网领域，淘宝是其中的一小块，我们需要在各个领域挖掘和培养我们的潜在客户，提高知名度。</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">潜在优势：</span><span style=\"FONT-FAMILY: Calibri\">ROI</span></p><p><span style=\"FONT-FAMILY: 宋体\">卖家进行推广很关心</span><span style=\"FONT-FAMILY: Calibri\">ROI</span><span style=\"FONT-FAMILY: 宋体\">（投入产出比）上，站外资源同样可以满足这个需求！具体</span> <span style=\"FONT-FAMILY: 宋体\">资源类目如下：导购导航类等站点，网购人群集中，成交转化率高；潮流时尚类等网站，集合众多女性用户，感性消费性强；生活资讯类等网站，信息承载量大，用户粘性高，宜培养潜在消费群体……</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: 宋体\">简言之，站外推广集合三大优势，品牌提升，流量引入和成交转化。任何一类资源有他的主导优势，鱼和熊掌不可兼得，卖家可根据主要期望值选择合适的资源推广。</span></p><p><span style=\"FONT-FAMILY: 宋体\">站外推广效果排行</span> <span style=\"FONT-FAMILY: 宋体\">独家发布</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp;</span></p><p><span style=\"FONT-FAMILY: Calibri\">&nbsp; </span><span style=\"FONT-FAMILY: 宋体\">详见《卖家》</span><span style=\"FONT-FAMILY: Calibri\">6</span><span style=\"FONT-FAMILY: 宋体\">月刊《淘宝站外推广资源效果报告》</span></p><p></p>','2014-06-18 02:06:30','2014-06-18 02:06:30',1),(7,'联系我们','<p>公司名称：北京水木华哲网络科技有限公司</p><p>公司地址：北京市东城区和平里七区乙16号楼329-1室</p><p><br/></p><p>广告投放联系QQ：<span style=\"TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 24px; DISPLAY: inline !important; FONT: 12px/20px tahoma, arial, sans-serif; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\"><span class=\"Apple-converted-space\">&nbsp;</span>417669527</span> &nbsp; <span style=\"TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 24px; DISPLAY: inline !important; FONT: 12px/20px tahoma, arial, sans-serif; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">2328628221</span></p><p><br/></p><p>淘宝客/站长入驻联系QQ：<span style=\"TEXT-TRANSFORM: none; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 24px; DISPLAY: inline !important; FONT: 12px/20px tahoma, arial, sans-serif; WHITE-SPACE: normal; FLOAT: none; LETTER-SPACING: normal; COLOR: rgb(0,0,0); WORD-SPACING: 0px; -webkit-text-stroke-width: 0px\">2328628221</span></p>','2014-07-04 04:48:25','2014-09-16 03:41:05',0),(8,'cps合作诚招高佣金商家','<p><span style=\"COLOR: #000000\">现有一流量资源可按照cps模式来为商家引流合作，如果您店铺有转化较好，佣金较高的热销单品 需要通过站外的流量资源来提升更多的销量。</span></p><p>具体的商家要求</p><p>①：天猫旗舰店 动态不低于4.6</p><p>②：店铺佣金不低于20%</p><p>③：店铺宝贝单品销量不低于500</p><p>&nbsp;</p><p>有意向合作的商家请按照下列要求填写好 发送至<a href=\"mailto:taodawei888@126.com\">taodawei888@126.com</a>邮箱</p><p>&nbsp;</p><p><span style=\"COLOR: #ff0000\">店铺名称：</span></p><p><span style=\"COLOR: #ff0000\">店铺链接：</span></p><p><span style=\"COLOR: #ff0000\">联系人：</span></p><p><span style=\"COLOR: #ff0000\">电话：</span></p><p><span style=\"COLOR: #ff0000\">QQ：</span></p><p><span style=\"COLOR: #ff0000\">佣金比例：</span></p><p>&nbsp;</p>','2014-08-21 09:14:27','2014-09-16 03:41:10',0),(9,'淘宝豆腐块排名提升合作说明','<p><span style=\"FONT-SIZE: 20px\"><strong>淘宝及天猫搜索豆腐块位置 ：</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>（<span style=\"WHITE-SPACE: normal; WORD-SPACING: 0px; TEXT-TRANSFORM: none; FLOAT: none; COLOR: rgb(43,43,43); FONT: 16px/28px &#39;Microsoft YaHei&#39;, Tahoma, Verdana, 宋体; DISPLAY: inline !important; LETTER-SPACING: normal; BACKGROUND-COLOR: rgb(255,255,255); TEXT-INDENT: 32px; -webkit-text-stroke-width: 0px\">淘宝搜索豆腐块是指在淘宝按人气排名和所有宝贝搜索中排名中，第1-3名的位置，包括商城产品。之所以称之为”豆腐块“是因为在淘宝中搜索与一件商品相关联的关键词时，这几个位置展示的是相对比较固定的产品。因此，一般这个位置会长期被爆款产品霸占</span>）一个商家一个关键词！</strong></span></p><p>&nbsp;</p><p><span style=\"FONT-SIZE: 20px\"><strong>产品要求：</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>①：自然搜索结果目前在前10页内</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>②：销量在100单以上&nbsp; 好评不低于20个</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>③：必须是天猫店铺</strong></span></p><p>&nbsp;</p><p><span style=\"FONT-SIZE: 20px\"><strong>价格：</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>一个关键词指向一款宝贝（暂无法接女装男装大类热词）</strong></span></p><p><span style=\"FONT-SIZE: 20px\"><strong>排名稳定时间在一个月以上 1~5万元不等</strong></span></p><p>&nbsp;</p><p><span style=\"FONT-SIZE: 20px\"><strong>满意投担保交易，仅需预付20% 上线后再支付剩余款项！</strong></span></p><p>&nbsp;</p><p><span style=\"FONT-SIZE: 20px\"><strong>联系QQ：417669527</strong></span></p>','2014-09-16 03:40:25','2014-09-16 03:40:25',1);
/*!40000 ALTER TABLE `billboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(500) DEFAULT NULL COMMENT 'Logo',
  `platform_name` varchar(50) NOT NULL DEFAULT '' COMMENT '资源名称',
  `playform_url` varchar(255) NOT NULL DEFAULT '' COMMENT '网址',
  `type` tinyint(2) NOT NULL COMMENT '类型',
  `generalize_platform` tinyint(2) NOT NULL COMMENT '适合推广平台',
  `generalize_type` tinyint(2) NOT NULL COMMENT '适合推广类目',
  `cooperation_type` tinyint(2) NOT NULL COMMENT '合作方式',
  `price_type` tinyint(11) DEFAULT NULL COMMENT '费用',
  `contact` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `order` smallint(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `claim_image` varchar(255) DEFAULT NULL COMMENT '展示广告位',
  `recommended_desc` text COMMENT '推荐理由',
  `playform_desc` text COMMENT '简介',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_type` (`type`),
  KEY `index_generalize_type` (`generalize_type`),
  KEY `index_generalize_platform` (`generalize_platform`),
  KEY `index_price_type` (`price_type`),
  KEY `index_cooperation_type` (`cooperation_type`),
  KEY `index_order` (`order`),
  KEY `index_status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (13,NULL,'吴佰清-测试资源-1','http://www.baidu.com',5,1,2,1,1,'1234567',1,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2015/10/27//562f71bdabf1c.png','<p>445566<br/></p>',NULL,0,'2015-10-27 12:45:06','2015-10-28 08:46:29'),(14,NULL,'吴佰清-测试-资源-2','http://www.baidu.com',6,1,2,2,3,'13112345678',1,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2015/10/27//562f7937a39be.png','<p>测试推荐理由</p>','<p>测试简介</p>',0,'2015-10-27 13:17:14','2015-10-28 08:46:31'),(15,'123','吴佰清-测试-资源-2','http://www.baidu.com',6,1,2,2,3,'13112345678',1,'','<p>测试推荐理由</p>','<p>测试简介</p>',0,'2015-10-28 03:11:40','2015-10-28 08:46:33'),(16,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2015/10/28//56302ada87495.jpg','折800','http://www.zhe800.com',1,1,1,2,1,'qq2328628221',100,'','<p>折800作为目前全网最大的第三方打折平台，用户多、流量大、销量高，适合想快速清库存或是冲销量的商家，感兴趣的商家可以到他们的报名后台自主报名https://zhaoshang.zhe800.com/</p>','<p>折800是目前全网最大的第三方打折平台，聚合由淘宝商家提供专供折800网用户独享折扣的超划算网购商品信息，除减肥丰胸、虚拟产品等类目产品外，其他类目商品均可报名参加活动，网站端加手机端日均总流量数百万，可快速帮助商家销货、冲量。折800活动的收费方式是：保证金+5%销售佣金，具体活动要求以及收费规则请到折800的报名后台查看https://zhaoshang.zhe800.com/</p>',1,'2015-10-28 03:12:55','2015-10-28 03:12:55'),(17,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2015/10/28//56303e36bb989.jpg','返利网','http://www.fanli.com/',8,1,1,2,1,'qq2245825001',99,'','<p>有实力的商家可以参加返利网的超级返活动，高佣金合作的模式，可以实现变相的刷单，比较安全。当当、一号店、国美、京东等平台的店铺也可以参加他们的超级返活动。<br/></p>','<p>返利(www.fanli.com)原名51返利，是目前最大的购物返利平台，包括天猫、淘宝、京东、苏宁易购、携程、一号店、亚马逊、聚美优品等400多家电商网站的返利业务，目前返利的移动端占比达\r\n70%。其中超级返频道做的比较好，另外还有打折和值得买推荐频道。报名地址http://super.fanli.com/apply/landing</p>',1,'2015-10-28 03:24:58','2015-10-28 03:26:54'),(18,'http://myt.oss-cn-hangzhou.aliyuncs.com/images/2015/10/28//563040f566fed.jpg','什么值得买','http://www.smzdm.com/',3,2,1,1,2,'8855852',50,'','<p>全网最大的值得买推荐网站，用户偏中高端，主推B2C商城以及海淘商品。具体合作模式，商家可以联系他们咨询。<br/></p>','<p>什么值得买是一家集导购、媒体、工具、社区属性为一体的消费领域门户型网站，因其中立、专业而在众多网友中树立了良好口碑，其内容大部分来自网友推荐。具体合作模式请联系其工作人员。</p>',1,'2015-10-28 04:30:13','2015-10-28 04:30:13');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uc_business`
--

DROP TABLE IF EXISTS `uc_business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uc_business` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL COMMENT '父级ID',
  `name` varchar(150) DEFAULT NULL COMMENT '名称',
  `type` tinyint(2) DEFAULT NULL COMMENT '1. 店铺。2. 商品。3.分类。4.占位',
  `color` varchar(64) DEFAULT '#ffffff' COMMENT '颜色',
  `url` varchar(600) DEFAULT NULL COMMENT '网址',
  `picture_url` varchar(600) DEFAULT NULL COMMENT '图片地址',
  `position` varchar(64) DEFAULT NULL COMMENT '坐标',
  `status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uc_business`
--

LOCK TABLES `uc_business` WRITE;
/*!40000 ALTER TABLE `uc_business` DISABLE KEYS */;
INSERT INTO `uc_business` VALUES (1,0,'推荐',3,NULL,NULL,NULL,NULL,3),(2,0,'女装',3,NULL,NULL,NULL,NULL,3),(3,0,'鞋包',3,NULL,NULL,NULL,NULL,3),(4,0,'美妆',3,NULL,NULL,NULL,NULL,3),(5,0,'宠物',3,NULL,NULL,NULL,NULL,3),(6,0,'家居',3,NULL,NULL,NULL,NULL,3),(7,0,'男装',3,NULL,NULL,NULL,NULL,3),(8,0,'美食',3,NULL,NULL,NULL,NULL,3),(20,0,'test',3,NULL,NULL,NULL,NULL,4),(21,1,'逸阳旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3DUysd3Pjt2pMcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMVbUC%2B57%2F0Z15x%2BIUlGKNpUyBhipbMM9EBFWiJZdakv7VRPoP57eUvyBchrzrpvrSkXCY64%2ByrAp','http://img02.taobaocdn.com/imgextra/i2/408107205/TB24qYcaVXXXXaHXXXXXXXXXXXX_!!408107205.jpg','1-1',1),(22,1,'韩都衣舍旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3DjkRWIlPWITMcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMdW%2FYeUJYTfZJ1gyddu7kN9rQjaaTwjKGbALByyhj2ButphjrWX0a5xVm%2BEFwtIpodEew1By%2BI5k','http://img03.taobaocdn.com/imgextra/i3/41553656/TB2tXcvaFXXXXXYXpXXXXXXXXXX_!!41553656.png','1-2',1),(23,1,'良品铺子旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3D4ucfULiEWJ0cQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMQZhjP5ff0RaRitN3%2FurF3xrQjaaTwjKGbALByyhj2ButphjrWX0a5xeu01CmH1jHmskCpA5b0yS','http://img02.taobaocdn.com/imgextra/i2/41553656/TB2wSZuaFXXXXX3XpXXXXXXXXXX_!!41553656.png','1-3',1),(24,1,'红蜻蜓品牌旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3DmSHBiJhaUK0cQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMUpRu5mcY%2FXq5x%2BIUlGKNpVrQjaaTwjKGbALByyhj2ButphjrWX0a5yGTda6j%2FduTDHWEnPkMvgi','http://img01.taobaocdn.com/imgextra/i1/41553656/TB2gdMuaFXXXXblXpXXXXXXXXXX_!!41553656.png','1-4',1),(25,1,'阿芙官方旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3DHJ8Sz35SIpMcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMX%2BnYZ8yzCfDxq3IhSJN6GRrQjaaTwjKGbALByyhj2ButphjrWX0a5yTOswU10rrXnr0ctk6Ii5q','http://img03.taobaocdn.com/imgextra/i3/41553656/TB2PhovaFXXXXakXpXXXXXXXXXX_!!41553656.png','1-5',1),(26,1,'AMH官方旗舰店',1,'#ffffff','http://s.click.taobao.com/t?e=m%3D2%26s%3DnjkJ%2B46rThIcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMWol8YbGZ63elovu%2FCElQOtrQjaaTwjKGbALByyhj2ButphjrWX0a5wLvpiPRKjH8dm812Vv8byc','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2m4cyaFXXXXb2XXXXXXXXXXXX_!!41553656.png','1-6',1),(27,21,'欧美钉珠单排扣针织衫',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DB2KDo5K8XOgqro%252BR3tKKqEsKbVKlhhTIrod3oiJVwfzlL1tPWpvWRP7gvmtLyoa3Dlg3nJM8sR%252F7S0JdntTyW0RNMFR%252BNAb2SXQ2%252BSwbdVDr4xSh43zn5%252FbOH4f91N176ldE4gNGHMFCkqX98X3KCA%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_43671837_7040682_23560558','http://img01.taobaocdn.com/imgextra/i1/408107205/TB2K7DaaVXXXXbCXXXXXXXXXXXX_!!408107205.jpg','1-1',2),(28,21,'欧美街头风猫头鹰毛衣',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D08yXOfX%252FO00jmraEDZVrLuIiBg%252B85eeuYWWSgzdtn6mLltG5xFicOdXrTUTgh9sMDPIwxrc30riTuehU0K12koM9C4clb3ynVhnrANgo%252FsOMVyFMTrPs%252F23abJM7sDg2ZKty97gR%252B1PcDCUJyXw5Pg%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_43671837_7040682_23560558','http://img04.taobaocdn.com/imgextra/i4/408107205/TB2.61.aVXXXXc5XXXXXXXXXXXX_!!408107205.jpg','1-2',2),(29,21,'时尚蝙蝠袖宽松外套',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DOSV64Q%252FQVpu6k0Or%252B%252BH4tDouuZk8xfs8lWsbAjdmP56LltG5xFicOdXrTUTgh9sMDPIwxrc30riTuehU0K12koM9C4clb3ynVhnrANgo%252FsOMVyFMTrPs%252F23abJM7sDg2r7V9V%252FNHgmVf5pwvgy2BJg%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_43671837_7040682_23560558','http://img02.taobaocdn.com/imgextra/i2/408107205/TB2egHcaVXXXXXUXXXXXXXXXXXX_!!408107205.jpg','1-3',2),(30,22,'拼接宽松蝙蝠袖休闲T恤',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D6r2B2PQ5t6a6k0Or%252B%252BH4tKTYdueOZG2JZ6U672N6gVGLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2ED3r51kZ6WSBYdWsRH2dNA%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img01.taobaocdn.com/imgextra/i1/41553656/TB21tIuaFXXXXXTXpXXXXXXXXXX_!!41553656.png','1-1',2),(31,22,'宽松拼接刺绣长袖卫衣',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3Dctz9ZLjnLS%252FebLdhAWchHE3yH6O0ql6agp1Jf7hv%252FcmLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2%252FLtQ1mOzIk38iHCBZPzMIg%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img01.taobaocdn.com/imgextra/i1/41553656/TB2yikwaFXXXXcrXXXXXXXXXXXX_!!41553656.png','1-2',2),(32,22,'圆领千鸟格收腰连衣裙',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D%252BdPVREl91iW6k0Or%252B%252BH4tOhkecS6vAdcm7kUtxZzUh2LltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2UwA3KkgsvaYQB9bVR1NSug%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2r07uaFXXXXX7XpXXXXXXXXXX_!!41553656.png','1-3',2),(33,23,'炭烧腰果',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D9inI0qdQYygjmraEDZVrLvy4J0xJVZ3xwjKxcthiwdCLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2IW5PRh%252BXehSeDNMFId0AEQ%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2YUAvaFXXXXXyXpXXXXXXXXXX_!!41553656.png','1-1',2),(34,23,'灯影牛肉丝',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D%252Fq0MAV4x0wLghojqVNxKsR%252BzkznMqJwel8AO335FWOeLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2VnuV8J8dSU7921JvDirTew%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img03.taobaocdn.com/imgextra/i3/41553656/TB2pYrtaVXXXXaEXpXXXXXXXXXX_!!41553656.jpg','1-2',2),(35,23,'麻辣牛板筋',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DLB3eVfnhfuHpEWlLRNQ%252BeomvTraTxRDfYS9AVrmcovTlL1tPWpvWRP7gvmtLyoa3Dlg3nJM8sR%252BsFlkHepz4AJs8HIxDrI3Ghd4WHCh7i57SugOP2%252FqoevbOH4f91N17XilU378dhTFgBm57pR24xw%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2XPkCaFXXXXX9XXXXXXXXXXXX_!!41553656.png','1-3',2),(36,24,'真皮男单鞋',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D2Dnig2VBH4wjmraEDZVrLvYRkKbmn2bL1BHSvcRrnkWLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2x8RCdB5lF4PUvWvNN0R0Dw%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img01.taobaocdn.com/imgextra/i1/41553656/TB2R0UyaFXXXXbPXXXXXXXXXXXX_!!41553656.jpg','1-1',2),(37,24,'真皮女单鞋',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3Dx%252FbKdDMV%252FYEjmraEDZVrLkjdzrsdDW5DWIYUy9WxI16LltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2IAYUueQu7HpxpUoR2q8COw%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2soAuaFXXXXaFXpXXXXXXXXXX_!!41553656.jpg','1-2',2),(38,24,'商务头层牛皮男鞋',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DkSGaMp0G6M0jmraEDZVrLmUx1WI%252BylP4sfSjPqrk7DyLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2pmM9nL8zurVnh8429VdGQw%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img02.taobaocdn.com/imgextra/i2/41553656/TB2ZJAxaFXXXXcCXXXXXXXXXXXX_!!41553656.jpg','1-3',2),(39,25,'眼部复方精油',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D464juNNg6Xa6k0Or%252B%252BH4tORZ4a4ZmPFS8nBOXRi6ylDlL1tPWpvWRP7gvmtLyoa3Dlg3nJM8sR%252BsFlkHepz4AJs8HIxDrI3Ghd4WHCh7i57SugOP2%252FqoevbOH4f91N17sMTN0wmWk5ztDToG5VOSIA%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB28hMvaFXXXXabXpXXXXXXXXXX_!!41553656.png','1-1',2),(40,25,'薰衣草精油',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DC%252BEyLZSUPi66k0Or%252B%252BH4tFWD1OPvA%252B8KMPcN16n%252Fbk3lL1tPWpvWRP7gvmtLyoa3Dlg3nJM8sR%252BsFlkHepz4AJs8HIxDrI3Ghd4WHCh7i57SugOP2%252FqoevbOH4f91N17IAZhJpDLcwNCkqX98X3KCA%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img01.taobaocdn.com/imgextra/i1/41553656/TB2zwUtaFXXXXb0XpXXXXXXXXXX_!!41553656.png','1-2',2),(41,25,'面部按摩膏',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DFLJ2477vAXK6k0Or%252B%252BH4tDXYkgKFL5iiBRUm14q8OC%252FlL1tPWpvWRP7gvmtLyoa3Dlg3nJM8sR%252BsFlkHepz4AJs8HIxDrI3Ghd4WHCh7i57SugOP2%252FqoevbOH4f91N17dFUk0%252FApC2G5hZLYo3%252FLFA%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2sRgvaFXXXXabXpXXXXXXXXXX_!!41553656.png','1-3',2),(42,26,'修身拼色立领外套',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3DXpuAb37WMujghojqVNxKseLcyxGWSboWV1vnHqE%252BpIuLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2vhnr0NQKA24%252FKwMP%252FEL6lQ%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img02.taobaocdn.com/imgextra/i2/41553656/TB2RQswaFXXXXcDXXXXXXXXXXXX_!!41553656.png','1-1',2),(43,26,'男士修身长袖外套',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3D4gmhZvbezibghojqVNxKsTSOvQzMIcUC%252BsMsoDJoEyOLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg28NsVbNVyf8whytc9P7b%252B2A%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img04.taobaocdn.com/imgextra/i4/41553656/TB2IbgxaFXXXXcKXXXXXXXXXXXX_!!41553656.png','1-2',2),(44,26,'修身圆领针织衫',2,'#ffffff','http://redirect.simba.taobao.com/rd?w=unionnojs&f=http%3A%2F%2Fai.taobao.com%2Fauction%2Fedetail.htm%3Fe%3Do0ZnmW5gKNkjmraEDZVrLp4btR%252FSv8ztwTF0nIgV33SLltG5xFicOdXrTUTgh9sMDPIwxrc30rgx5xFFx04Tdal8b%252BZ8exBXGfarDp2z0uMReztA9hBlMG3abJM7sDg2QcB9%252B5AHyoDUW9kOSEg%252Bhw%253D%253D%26ptype%3D100010%26from%3Dbasic&k=5ccfdb950740ca16&c=un&b=alimm_0&p=mm_10182330_4248879_26544488','http://img02.taobaocdn.com/imgextra/i2/41553656/TB2MZwvaFXXXXaqXpXXXXXXXXXX_!!41553656.png','1-3',2);
/*!40000 ALTER TABLE `uc_business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uc_business_attr`
--

DROP TABLE IF EXISTS `uc_business_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uc_business_attr` (
  `business_id` int(11) NOT NULL AUTO_INCREMENT,
  `shopLogo` varchar(600) DEFAULT NULL,
  `creditType` int(11) DEFAULT NULL,
  `creditLevel` int(11) DEFAULT NULL,
  `serviceScore` decimal(8,1) DEFAULT NULL,
  `trafficScore` decimal(8,1) DEFAULT NULL,
  `descScore` decimal(8,1) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `oldPrice` decimal(8,2) DEFAULT NULL,
  `hot` tinyint(1) DEFAULT '2',
  `discount` decimal(8,2) DEFAULT NULL,
  `selledNum` int(11) DEFAULT NULL,
  `activeMsg` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uc_business_attr`
--

LOCK TABLES `uc_business_attr` WRITE;
/*!40000 ALTER TABLE `uc_business_attr` DISABLE KEYS */;
INSERT INTO `uc_business_attr` VALUES (21,'http://img02.taobaocdn.com/imgextra/i2/408107205/TB24qYcaVXXXXaHXXXXXXXXXXXX_!!408107205.jpg',NULL,NULL,'4.8','4.8','4.8',NULL,NULL,2,NULL,NULL,NULL),(22,'http://img03.taobaocdn.com/imgextra/i3/41553656/TB2tXcvaFXXXXXYXpXXXXXXXXXX_!!41553656.png',NULL,NULL,'4.8','4.8','4.8',NULL,NULL,2,NULL,NULL,NULL),(23,'http://img02.taobaocdn.com/imgextra/i2/41553656/TB2wSZuaFXXXXX3XpXXXXXXXXXX_!!41553656.png',NULL,NULL,'4.8','4.8','4.8',NULL,NULL,2,NULL,NULL,NULL),(24,'http://img01.taobaocdn.com/imgextra/i1/41553656/TB2gdMuaFXXXXblXpXXXXXXXXXX_!!41553656.png',NULL,NULL,'4.8','4.8','4.8',NULL,NULL,2,NULL,NULL,NULL),(25,'http://img03.taobaocdn.com/imgextra/i3/41553656/TB2PhovaFXXXXakXpXXXXXXXXXX_!!41553656.png',NULL,NULL,'4.9','4.9','4.9',NULL,NULL,2,NULL,NULL,NULL),(26,'http://img04.taobaocdn.com/imgextra/i4/41553656/TB2m4cyaFXXXXb2XXXXXXXXXXXX_!!41553656.png',NULL,NULL,'4.8','4.8','4.8',NULL,NULL,2,NULL,NULL,NULL),(27,NULL,NULL,NULL,NULL,NULL,NULL,'148.99','176.00',2,'0.50',6912,NULL),(28,NULL,NULL,NULL,NULL,NULL,NULL,'148.99','218.00',2,'0.40',8054,NULL),(29,NULL,NULL,NULL,NULL,NULL,NULL,'138.99','196.00',2,'0.50',5783,NULL),(30,NULL,NULL,NULL,NULL,NULL,NULL,'178.00','178.00',2,'0.66',4340,NULL),(31,NULL,NULL,NULL,NULL,NULL,NULL,'198.00','198.00',2,'0.60',12530,NULL),(32,NULL,NULL,NULL,NULL,NULL,NULL,'168.00','288.00',2,'0.58',1888,NULL),(33,NULL,NULL,NULL,NULL,NULL,NULL,'35.90','98.00',2,'0.37',17800,NULL),(34,NULL,NULL,NULL,NULL,NULL,NULL,'31.90','98.00',2,'0.33',21240,NULL),(35,NULL,NULL,NULL,NULL,NULL,NULL,'17.90','41.90',2,'0.43',18981,NULL),(36,NULL,NULL,NULL,NULL,NULL,NULL,'199.00','459.00',2,'0.43',3986,NULL),(37,NULL,NULL,NULL,NULL,NULL,NULL,'209.00','359.00',2,'0.58',617,NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,'229.00','479.00',2,'0.49',952,NULL),(39,NULL,NULL,NULL,NULL,NULL,NULL,'129.00','129.00',2,'1.00',3726,NULL),(40,NULL,NULL,NULL,NULL,NULL,NULL,'138.00','138.00',2,'1.00',8977,NULL),(41,NULL,NULL,NULL,NULL,NULL,NULL,'99.00','99.00',2,'1.00',NULL,NULL),(42,NULL,NULL,NULL,NULL,NULL,NULL,'208.00','278.00',2,'0.75',4101,NULL),(43,NULL,NULL,NULL,NULL,NULL,NULL,'199.00','328.00',2,'0.60',1543,NULL),(44,NULL,NULL,NULL,NULL,NULL,NULL,'129.00','268.00',2,'0.48',1467,NULL);
/*!40000 ALTER TABLE `uc_business_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'wubaiqing','$2y$10$EpbxKCIc1FJM39M.93m3juYSzfYrcjK6rHXVTNAJHzsjNVL7kpLyW','qKxyS5IncEEJJkBA4cKqWYwGWUvBXDc4EtwaAOyENwHzPJGNKW41wFOkH9fF',1,'2014-06-15 12:06:09'),(2,'qidalin','$2y$10$2vvY5wnQsmHdDiQ1nSv5v.62gyfrgohgLfn8vg0KYcGkpfIBJKsCy','UzayX3G1hIAuFpaco2B3a4zEOC8HkIJWQglo8kWinCuAqCTC6QliYkDXwGFU',1,'2015-10-28 02:45:55'),(3,'dawei','$2y$10$31Y2abAfSKgFwDKOXRj2X.2x5TT1Qz49vJc3PIKCJfNb4eIr32VeO','50AZV6uMumyQgiqbJ2hf33AKt5jvW7utziX7EPgK8bYXkaudLFMuXRhMqNjX',1,'2014-06-16 03:13:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-21 17:20:52
