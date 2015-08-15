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
<link href="/1977hs/Public/Css/consultus.css" rel="stylesheet">
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
		<div class="col-md-10 col-md-offset-1 white-box">
      <?php if(is_array($consult)): foreach($consult as $key=>$data): ?><div class="page-header">
  				<h1><a href="<?php echo U('Consultus/article');?>?id=<?php echo ($data["id"]); ?>" style="text-decoration:none;"><?php echo ($key+1); ?>、<?php echo ($data["title"]); ?><small>&nbsp;&nbsp;&nbsp;(<?php echo ($data["created_time"]); ?>)</small></a></h1>
  			</div>
  			<div class="page-body">
  				<p><?php echo ($data["introduction"]); ?>...</p>
  			</div>
        <div class='both'></div><?php endforeach; endif; ?>
		</div>
	</div>
</div>
</body>
</html>