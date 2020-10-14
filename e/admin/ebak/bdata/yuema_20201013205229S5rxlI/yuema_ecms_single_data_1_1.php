<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_ecms_single_data_1`;");
E_C("CREATE TABLE `yuema_ecms_single_data_1` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keyid` varchar(255) NOT NULL DEFAULT '',
  `dokey` tinyint(1) NOT NULL DEFAULT '0',
  `newstempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `haveaddfen` tinyint(1) NOT NULL DEFAULT '0',
  `infotags` varchar(80) NOT NULL DEFAULT '',
  `text` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `yuema_ecms_single_data_1` values('1','1','','1','0','0','0','',0xe585b3e4ba8ee8b783e9a9ac3c6272202f3ee585b3e4ba8ee8b783e9a9ac3c6272202f3ee585b3e4ba8ee8b783e9a9ac3c6272202f3ee585b3e4ba8ee8b783e9a9ac3c6272202f3ee585b3e4ba8ee8b783e9a9ac);");
E_D("replace into `yuema_ecms_single_data_1` values('5','5','','0','0','0','0','',0xe88194e7b3bbe68891e4bbac3c6272202f3ee88194e7b3bbe68891e4bbace88194e7b3bbe68891e4bbac3c6272202f3ee88194e7b3bbe68891e4bbac3c6272202f3ee88194e7b3bbe68891e4bbac);");
E_D("replace into `yuema_ecms_single_data_1` values('4','4','','0','0','0','0','',0xe99480e594aee7bd91e7bb9c3c6272202f3ee99480e594aee7bd91e7bb9c3c6272202f3ee99480e594aee7bd91e7bb9c3c6272202f3ee99480e594aee7bd91e7bb9c3c6272202f3ee99480e594aee7bd91e7bb9c);");

@include("../../inc/footer.php");
?>