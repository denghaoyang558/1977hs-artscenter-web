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
<link href="/1977hs/Public/Css/strength.css" rel="stylesheet">
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
      <a class="head-bottom-nav-item-right" href="#environment">教学环境</a>        
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#works">1977作品</a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#score">历届成绩</a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#star">明星师资</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<!-- 栏目 -->
<div class="content" id="star">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      明星师资
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>
<!-- 块一 明星师资-->
<div class="content">
  <div class="container">
    <?php if(is_array($teacher)): foreach($teacher as $key=>$data): ?><div class="row">
      <div class="col-md-3">
        <div class="pspic" align="center">
          <img src="/1977hs<?php echo ($data["pic_adr"]); ?>" width="220" height="220">
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="title">
            <?php if($data["position"] != '' ): echo ($data["position"]); ?> —— <?php echo ($data["name"]); ?>
            <?php else: ?>
            <?php echo ($data["name"]); endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="wave">
            <img src="/1977hs/Public/Uploads/img/wave.png">
          </div>
        </div>
        <div class="row">
          <div class="normal_words">
            <?php echo ($data["content"]); ?>
          </div>
        </div>
      </div>     
    </div>
    <div class="both"></div><?php endforeach; endif; ?>
  </div>
</div>

<!-- 栏目 -->
<div class="content" id="score">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      历届成绩
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

<!-- 块二 -->
<div class="content">
  <div class="container">
    <!-- 此处使用图片 后期可优化-->
    <div class="row" style="margin-bottom:20px;">
      <div class="col-md-12">
        <img src="/1977hs<?php echo ($achievement_pic["pic_adr"]); ?>">
      </div>
    </div>
    <?php if(is_array($achievement)): foreach($achievement as $key=>$data): ?><div class="row">
      <div class="col-md-12 rectangle">
        <div class="row">
          <div class="col-md-3 year">
            <?php echo ($data["year"]); ?>年
          </div>
          <div class="col-md-9">
            <div class="row" style="margin-left:5px;margin-top:14px;">
              <?php if(is_array($data["status"])): foreach($data["status"] as $key=>$d): ?><div class="col-md-2" style="padding:0px;margin-top:18px;">
                  <div class="normal_words">
                    <?php echo ($d["school"]); echo ($d["number"]); ?>人;
                  </div>
                </div><?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div><?php endforeach; endif; ?>
  </div>
</div>
<div class="both"></div>

<!-- 栏目 -->
<div class="content" id="works">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      1977作品
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

<!-- 居中图片 -->
<div class="content" >
  <div class="container">
    <div class="middlepic">
      <img src="/1977hs<?php echo ($works["pic_adr"]); ?>">
    </div>
    <a href="<?php echo U('Works/sumiao');?>">
      <div class="more">
        查看更多>>
      </div>
    </a>
  </div>
</div>

<!-- 栏目 -->
<div class="content" id="environment">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      教学环境
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

<!-- 居中图片 -->
<div class="content" >
  <div class="container">
    <div class="middlepic">
      <img src="/1977hs<?php echo ($environment["pic_adr"]); ?>">
    </div>
  </div>
</div>

</body>
</html>