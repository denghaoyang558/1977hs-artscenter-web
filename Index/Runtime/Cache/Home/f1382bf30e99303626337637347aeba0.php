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
<link href="/1977hs/Public/Css/aboutus.css" rel="stylesheet">
</head>
<body>
<div class="head-top-masthead">
  <div class="container">
    <nav class="head-top-nav">
      <a class="head-top-nav-item" href="#"><?php echo ($phone); ?></a>
      <a class="head-top-nav-item-right" href="<?php echo U('Wechat/index');?>"><img src="/1977hs/Public/Uploads/img/wechat_logo.png"></a>
      <a class="head-top-nav-item-right" href="http://weibo.com/u/2625198674"><img src="/1977hs/Public/Uploads/img/weibo_logo.png"></a>
    </nav>
  </div>
</div>
<div class="head-bottom-masthead ">
  <div class="container">
    <nav class="head-bottom-nav">
      <a class="head-bottom-nav-item" href="<?php echo U('Index/index');?>"><img src="/1977hs/Public/Uploads/img/logo.png" height="60"></a>  
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#video">1977视频</a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#special">办学特色</a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#introduce">1977介绍</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<!-- 中央图片 -->
<div class="content" >
  <div class="container">
    <div class="toppic">
      <img src="/1977hs<?php echo ($picture["pic_adr"]); ?>">
    </div>
  </div>
</div>
<!-- 栏目 -->
<div class="content" id="introduce">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      1977介绍
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>
<div class="both"></div>
<!-- 块一 -->
<div class="content">
  <div class="container normal_words">
    <?php echo ($introduction["content"]); ?>
  </div>
</div>
<div class="both"></div>
<div class="both"></div>
<!-- 栏目 -->
<div class="content" id="introduce">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      办学特色
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>
<div class="both"></div>
<div class="content">
  <div class="container normal_words">
    <?php echo ($special["content"]); ?>
  </div>
</div>
<div class="both"></div>
<div class="both"></div>
<!-- 栏目 -->
<div class="content" id="video">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      1977视频
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<div class="content" style="background-color:#fcf5e3">
  <div class="container" style="" align="center">
    <iframe src="<?php echo ($video["vid_adr"]); ?>" allowtransparency="true" allowfullscreen="true" allowfullscreenInteractive="true" scrolling="no" border="0" frameborder="0" style="width:<?php echo ($video["width"]); ?>;height:<?php echo ($video["height"]); ?>"></iframe>
  </div>
</div>

</body>
</html>