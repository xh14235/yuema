<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?></td>
        </tr>
      </table></td>
</tr>
</table>
<div class="footer">
  <div class="container">
    <div class="footer-menu-box">
      <a class="footer-menu-title">关于跃马</a>
      <div class="footer-menu-list">
        [e:loop={1,10,0,0,'','newstime ASC'}]
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        [/e:loop]
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
        [e:loop={4,10,0,0,'','newstime ASC'}]
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        [/e:loop]
      </div>
    </div>
    <div class="footer-menu-box">
      <a class="footer-menu-title">联系我们</a>
      <div class="footer-menu-list">
        [e:loop={5,10,0,0,'','newstime ASC'}]
        <a class="footer-menu-li" href="<?=$bqsr['titleurl']?>" target="_blank"><?=$bqr['title']?></a>
        [/e:loop]
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