<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>兰州1977画室|兰州画室|兰州美术培训</title>
<meta name="keywords" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室"/>
<meta name="description" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室" />
<link rel="icon" href="/1977hs/Uploads/logo.png"> 
<link rel="stylesheet" href="/1977hs/Public/Css/bootstrap.min.css">
<script src="/1977hs/Public/Js/jquery.min.js"></script>
<script src="/1977hs/Public/Js/bootstrap.min.js"></script>
<link href="/1977hs/Public/Css/wechat.css" rel="stylesheet">
</head>
<body>
<div class="head-top-masthead">
  <div class="container">
    <nav class="head-top-nav">
      <a class="head-top-nav-item" href="#"><?php echo ($phone); ?></a>
      <a class="head-top-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/wechat_logo.png"></a>
      <a class="head-top-nav-item-right" href="http://weibo.com/u/2625198674"><img src="/1977hs/Public/Uploads/img/weibo_logo.png"></a>
    </nav>
  </div>
</div>
<div class="head-bottom-masthead ">
  <div class="container">
    <nav class="head-bottom-nav">
      <a class="head-bottom-nav-item" href="index.html"><img src="/1977hs/Public/Uploads/img/logo.png" height="60"></a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#qrocde">微信二维码</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<div class="content" id="qrocde">
  <div class="container">
    <div class="rectangle">
      <!-- 矩形顶部 -->
      <div class="toprc">
        <div class="title">
          微信号 : <?php echo ($wechatName); ?>/<?php echo ($wechatNumber); ?>
        </div>
      </div>
      <!-- 矩形中间 -->
      <div class="contentrc">
        <img src="/1977hs<?php echo ($qrcode); ?>">
      </div>
    </div>
  </div>
</div>
</body>
</html>