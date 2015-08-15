<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>兰州1977画室|兰州画室|兰州美术培训</title>
<meta name="keywords" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室"/>
<meta name="description" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室" /> 
<link rel="stylesheet" href="/1977hs/Public/Css/bootstrap.min.css">
<script src="/1977hs/Public/Js/jquery.min.js"></script>
<script src="/1977hs/Public/Js/bootstrap.min.js"></script>
<link href="/1977hs/Public/Css/page1.css" rel="stylesheet">
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
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="#consultus">1977资讯</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<!-- 栏目 -->
<div class="content" id="consultus">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      1977资讯
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>
<div class="content">
	<div class="container">
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="paper">
			<div style="color:#333;font-size:38px;margin-top:25px;font-weight:bold;" align="center">
				<?php echo ($data["title"]); ?>
			</div>
			<div class="line1" style="color:#333;font-size:14px;" align="center">
				发布日期 : <?php echo ($data["created_time"]); ?>
			</div>
			<div style="margin-top:35px;">
				<?php echo ($data["content"]); ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>