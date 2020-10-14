<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_enewstable`;");
E_C("CREATE TABLE `yuema_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `yuema_enewstable` values('1',0x73696e676c65,0xe58d95e9a1b5e99da2e7b3bbe7bb9fe695b0e68daee8a1a8,0xe58d95e9a1b5e99da2e7b3bbe7bb9fe695b0e68daee8a1a8,'1',0x2c312c,0x31,'0','1','0');");
E_D("replace into `yuema_enewstable` values('2',0x70726f64756374,0xe4baa7e59381e7b3bbe7bb9fe695b0e68daee8a1a8,0xe4baa7e59381e7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','2','0');");
E_D("replace into `yuema_enewstable` values('3',0x6e657773,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,0xe696b0e997bbe7b3bbe7bb9fe695b0e68daee8a1a8,'0',0x2c312c,0x31,'0','3','0');");

@include("../../inc/footer.php");
?>