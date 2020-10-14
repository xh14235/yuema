<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <meta http-equiv="content-type" content="txt/html; charset=utf-8" />
  <title><?=$grpagetitle?></title>
  <meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
  <meta name="description" content="<?=$grpagetitle?>" />
  <link rel="stylesheet" href="/skin/default/css/style.css">
  <link rel="stylesheet" href="/skin/default/css/swiper-bundle.min.css">
</head>

<body>
  <div class="header">
  <div class="container">
    <div class="logo">
      <img src="/skin/default/img/logo.png" alt="">
    </div>
    <div class="header-menu">
      <div class="header-language">
        <a href=""><img src="/skin/default/img/inco01.png" alt="">中文</a>
        <a href=""><img src="/skin/default/img/inco02.png" alt="">English</a>
      </div>
      <div class="header-nav">
        <a href="/" class="active">首页</a>
        <a href="/about/about.html">关于跃马</a>
        <a href="/news/compony-news/">新闻中心</a>
        <a href="/products/biangang/">产品中心</a>
        <a href="/network/network.html">销售网络</a>
        <a href="/contact/contact.html">联系我们</a>
      </div>
    </div>
    <div class="phone-menu">
      <div class="phone-btn">
        <img class="phone-menu-toggle" src="/skin/default/img/menu.png" alt="">
      </div>
      <div class="phone-list">
        <a href="/" class="active">首页</a>
        <a href="/about/about.html">关于跃马</a>
        <a href="/news/compony-news/">新闻中心</a>
        <a href="/products/biangang/">产品中心</a>
        <a href="/network/network.html">销售网络</a>
        <a href="/contact/contact.html">联系我们</a>
      </div>
    </div>
  </div>
</div>
  <div class="bg-img">
    <img src="/skin/default/img/bg0.jpg">
  </div>
  <div class="content">
    <div class="container">
      <div class="content-left">
        <div class="content-name"><?=$class_r[$ecms_gr[classid]][classname]?></div>
        <div class="content-nav">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <p class="content-nav-item"><a href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a></p>
          <?php
}
}
?>
        </div>
        <div class="content-contact">
          <div class="content-contact-title">联系我们</div>
          <p>地址：江苏省无锡市新吴区硕放孙安路58号</p>
          <p>电话：0510-68076888/0510-68075999</p>
          <p>传真：0510-68937888/0510-68937999</p>
        </div>
      </div>
      <div class="content-right">
        <div class="crumb">
          您现在的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="<?=$grtitleurl?>"><?=$grpagetitle?></a>
        </div>
        <div class="content-detail">
          <?=$ecms_gr[text]?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
  <div class="container">
    <div class="footer-menu-box">
      <a class="footer-menu-title">关于跃马</a>
      <div class="footer-menu-list">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,10,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        <?php
}
}
?>
      </div>
    </div>
    <div class="footer-menu-box">
      <a class="footer-menu-title">新闻中心</a>
      <div class="footer-menu-list">
        <a class="footer-menu-li" href="/news/compony-news/">公司新闻</a>
        <a class="footer-menu-li" href="/news/industry-news/">行业新闻</a>
      </div>
    </div>
    <div class="footer-menu-box">
      <a class="footer-menu-title">产品中心</a>
      <div class="footer-menu-list">
        <a class="footer-menu-li" href="/products/biangang/">扁钢</a>
        <a class="footer-menu-li" href="/products/qiegepin/">切割品</a>
      </div>
    </div>
    <div class="footer-menu-box">
      <a class="footer-menu-title">销售网络</a>
      <div class="footer-menu-list">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,10,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        <?php
}
}
?>
      </div>
    </div>
    <div class="footer-menu-box">
      <a class="footer-menu-title">联系我们</a>
      <div class="footer-menu-list">
        <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,10,0,0,'','newstime ASC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        <?php
}
}
?>
      </div>
    </div>
    <div class="footer-menu-box">
      <div class="footer-menu-title">关注我们</div>
      <img src="/skin/default/img/qucode.jpg" alt="" class="img-responsive">
    </div>
  </div>
</div>
<div class="beian">
  <a href="http://www.miit.gov.cn/" target="_blank">苏ICP备2020048227号-1</a>
  <!-- <img src="/skin/default/img/beian.png" alt="">
  <a href="">苏公网安备 32020502000453号</a> -->
</div>
<script src="/skin/default/js/jquery.min.js"></script>
<script src="/skin/default/js/common.js"></script>
</body>

</html>