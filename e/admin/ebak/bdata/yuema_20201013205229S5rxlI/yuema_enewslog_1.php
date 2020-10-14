<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_enewslog`;");
E_C("CREATE TABLE `yuema_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `yuema_enewslog` values('1',0x61646d696e,'2020-08-23 21:43:18',0x3132372e302e302e31,'1','','0',0x3631323539);");
E_D("replace into `yuema_enewslog` values('2',0x7975656d61,'2020-08-24 20:52:55',0x3132372e302e302e31,'0','','0',0x3633353633);");
E_D("replace into `yuema_enewslog` values('3',0x7975656d61,'2020-08-24 20:53:05',0x3132372e302e302e31,'0','','0',0x3633353633);");
E_D("replace into `yuema_enewslog` values('4',0x61646d696e,'2020-08-24 20:53:13',0x3132372e302e302e31,'1','','0',0x3633353633);");
E_D("replace into `yuema_enewslog` values('5',0x61646d696e,'2020-09-05 09:59:03',0x3132372e302e302e31,'1','','0',0x3631393536);");
E_D("replace into `yuema_enewslog` values('6',0x61646d696e,'2020-09-05 15:40:37',0x3132372e302e302e31,'1','','0',0x3536313738);");
E_D("replace into `yuema_enewslog` values('7',0x61646d696e,'2020-09-05 22:27:39',0x3132372e302e302e31,'1','','0',0x3634363537);");
E_D("replace into `yuema_enewslog` values('8',0x61646d696e,'2020-09-06 13:32:34',0x3132372e302e302e31,'1','','0',0x3534353838);");
E_D("replace into `yuema_enewslog` values('9',0x61646d696e,'2020-10-13 08:14:17',0x3132372e302e302e31,'1','','0',0x3439373136);");
E_D("replace into `yuema_enewslog` values('10',0x7975656d61,'2020-10-13 20:52:02',0x3132372e302e302e31,'0','','0',0x3531393935);");
E_D("replace into `yuema_enewslog` values('11',0x61646d696e,'2020-10-13 20:52:09',0x3132372e302e302e31,'1','','0',0x3532303330);");

@include("../../inc/footer.php");
?>