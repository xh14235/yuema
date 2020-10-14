<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_ecms_news_data_1`;");
E_C("CREATE TABLE `yuema_ecms_news_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `text` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `yuema_ecms_news_data_1` values('1','6','','0','0','0','0','',0xe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bb3c6272202f3ee6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bb3c6272202f3ee6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bb3c6272202f3ee6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bb3c6272202f3ee6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bbe6b58be8af95e696b0e997bb);");

@include("../../inc/footer.php");
?>