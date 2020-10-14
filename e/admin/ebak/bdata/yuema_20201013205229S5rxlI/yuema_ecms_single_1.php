<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_ecms_single`;");
E_C("CREATE TABLE `yuema_ecms_single` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  `ftitle` char(120) NOT NULL DEFAULT '',
  `introduce` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `yuema_ecms_single` values('1','1','0','0','0','0','',0x61626f7574,'1',0x61646d696e,'0','0','0','0','0','0','0','1599294163','1599294163','1','0','0','',0x2f61626f75742f61626f75742e68746d6c,'1','1','1','',0xe585b3e4ba8ee8b783e9a9ac,'1599294125','','0',0xe585b3e4ba8ee8b783e9a9ac,0xe585b3e4ba8ee8b783e9a9ac);");
E_D("replace into `yuema_ecms_single` values('5','5','0','0','0','0','',0x636f6e74616374,'1',0x61646d696e,'0','0','0','0','0','0','0','1599316187','1599316187','1','0','0','',0x2f636f6e746163742f636f6e746163742e68746d6c,'1','1','1','',0xe88194e7b3bbe68891e4bbac,'1599316168','','0','',0xe88194e7b3bbe68891e4bbac);");
E_D("replace into `yuema_ecms_single` values('4','4','0','0','0','0','',0x6e6574776f726b,'1',0x61646d696e,'0','0','0','0','0','0','0','1599316163','1599316163','1','0','0','',0x2f73616c65732f6e6574776f726b2e68746d6c,'1','1','1','',0xe99480e594aee7bd91e7bb9c,'1599316137','','0','',0xe99480e594aee7bd91e7bb9c);");

@include("../../inc/footer.php");
?>