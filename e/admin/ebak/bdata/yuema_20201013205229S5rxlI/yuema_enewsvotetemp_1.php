<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `yuema_enewsvotetemp`;");
E_C("CREATE TABLE `yuema_enewsvotetemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(60) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `yuema_enewsvotetemp` values('1',0xe9bb98e8aea4e68a95e7a5a8e6a8a1e69dbf,0x3c7461626c652077696474683d3130302520626f726465723d3020616c69676e3d63656e7465722063656c6c70616464696e673d332063656c6c73706163696e673d303e3c666f726d206e616d653d656e657773766f7465206d6574686f643d504f535420616374696f6e3d275b212d2d766f74652e616374696f6e2d2d5d27207461726765743d5f626c616e6b3e3c74723e3c74643e3c7374726f6e673e5b212d2d7469746c652d2d5d3c2f7374726f6e673e3c2f74643e3c2f74723e3c696e70757420747970653d68696464656e206e616d653d766f746569642076616c75653d275b212d2d766f746569642d2d5d273e3c696e70757420747970653d68696464656e206e616d653d656e6577732076616c75653d416464566f74653e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c74723e3c74643e5b212d2d766f74652e626f782d2d5d266e6273703b5b212d2d766f74652e6e616d652d2d5d3c2f74643e3c2f74723e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c74723e3c746420616c69676e3d63656e7465723e3c696e70757420747970653d7375626d6974206e616d653d7375626d69742076616c75653de68a95e7a5a83e266e6273703b266e6273703b3c696e70757420747970653d627574746f6e206e616d653d627574746f6e2076616c75653de69fa5e79c8be7bb93e69e9c206f6e636c69636b3d6a6176617363726970743a77696e646f772e6f70656e28275b212d2d766f74652e766965772d2d5d272c27272c2777696474683d5b212d2d77696474682d2d5d2c6865696768743d5b212d2d6865696768742d2d5d2c7363726f6c6c626172733d79657327293b3e3c2f74643e3c2f74723e3c2f666f726d3e3c2f7461626c653e);");
E_D("replace into `yuema_enewsvotetemp` values('2',0xe9bb98e8aea4e4bfa1e681afe68a95e7a5a8e6a8a1e69dbf,0x3c7461626c652077696474683d5c27313030255c2720626f726465723d3020616c69676e3d63656e7465722063656c6c70616464696e673d332063656c6c73706163696e673d303e3c666f726d206e616d653d656e657773766f7465206d6574686f643d504f535420616374696f6e3d5c275b212d2d6e6577732e75726c2d2d5d652f656e6577732f696e6465782e7068705c27207461726765743d5f626c616e6b3e3c74723e3c74643e3c7374726f6e673e5b212d2d7469746c652d2d5d3c2f7374726f6e673e3c2f74643e3c2f74723e3c696e70757420747970653d68696464656e206e616d653d69642076616c75653d5c275b212d2d69642d2d5d5c273e3c696e70757420747970653d68696464656e206e616d653d636c61737369642076616c75653d5c275b212d2d636c61737369642d2d5d5c273e3c696e70757420747970653d68696464656e206e616d653d656e6577732076616c75653d416464496e666f566f74653e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c74723e3c74643e5b212d2d766f74652e626f782d2d5d266e6273703b5b212d2d766f74652e6e616d652d2d5d3c2f74643e3c2f74723e0d0a5b212d2d656d706972656e6577732e6c69737474656d702d2d5d0d0a3c74723e3c746420616c69676e3d63656e7465723e3c696e70757420747970653d7375626d6974206e616d653d7375626d69742076616c75653de68a95e7a5a83e266e6273703b266e6273703b3c696e70757420747970653d627574746f6e206e616d653d627574746f6e2076616c75653de69fa5e79c8be7bb93e69e9c206f6e636c69636b3d6a6176617363726970743a77696e646f772e6f70656e285c275b212d2d6e6577732e75726c2d2d5d652f7075626c69632f766f74652f3f636c61737369643d5b212d2d636c61737369642d2d5d2669643d5b212d2d69642d2d5d5c272c5c275c272c5c2777696474683d5b212d2d77696474682d2d5d2c6865696768743d5b212d2d6865696768742d2d5d2c7363726f6c6c626172733d7965735c27293b3e3c2f74643e3c2f74723e3c2f666f726d3e3c2f7461626c653e);");

@include("../../inc/footer.php");
?>