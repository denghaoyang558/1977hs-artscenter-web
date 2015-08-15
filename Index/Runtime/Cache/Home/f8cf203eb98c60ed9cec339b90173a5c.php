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
<script src="/1977hs/Public/Js/index.js"></script>
<link href="/1977hs/Public/Css/index.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function(){
  $('.marquee').kxbdMarquee({
      direction:'left',
      eventA:'mouseenter',
      eventB:'mouseleave'
  });
});
</script>
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
    <div class="content">
      <div class="center middle">
        <img src="/1977hs/Public/Uploads/img/logo_big.png" width="1080" >
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="row1 center">
              <div class="col-md-3 center">
                <a href="<?php echo U('Aboutus/index');?>" style="text-decoration:none">
                  <div class="rectangle">
                    <div class="row font16">
                        关于1977
                    </div>
                    <div class="row" >
                      ABOUT US
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3 center ">
                <a href="<?php echo U('Strength/index');?>" style="text-decoration:none">
                  <div class="rectangle">
                    <div class="row font16">
                        实力展示
                    </div>
                    <div class="row" >
                      SHOW OF STRENGTH
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3 center ">
                <a href="<?php echo U('Admission/index');?>" style="text-decoration:none">
                  <div class="rectangle">
                    <div class="row font16">
                        招生详情
                    </div>
                    <div class="row" >
                      ENROLLMENT DETAILS
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-3 center ">
                <a href="<?php echo U('Consultus/index');?>" style="text-decoration:none">
                  <div class="rectangle">
                    <div class="row font16">
                        1977资讯
                    </div>
                    <div class="row" >
                      CONSULT US
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="both"></div>
  <div class="both"></div>
  <div class="content">
    <div class="container">
      <div class="row1">
        <div class="col-md-4">
          <div class="marquee"> 
            <ul>
              <?php if(is_array($scrollLeft)): foreach($scrollLeft as $key=>$data): ?><li><img src="/1977hs<?php echo ($data["pic_adr"]); ?>"/></li><?php endforeach; endif; ?>
            </ul>
          </div> 
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php if(is_array($scrollRight)): foreach($scrollRight as $key=>$data): if($key == 0): ?><div class="item active">
                    <img src="/1977hs<?php echo ($data["pic_adr"]); ?>">
                    <div class="carousel-caption">
                    </div>
                  </div>
                <?php else: ?> 
                  <div class="item">
                    <img src="/1977hs<?php echo ($data["pic_adr"]); ?>">
                    <div class="carousel-caption">
                    </div>
                  </div><?php endif; endforeach; endif; ?>
            <!-- Controls -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="both"></div>
  <div class="both"></div>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="friendtitle font18">
            友情链接
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11">
          <div class="row">
            <?php if(is_array($friend)): foreach($friend as $key=>$data): ?><div class="col-md-1" style="width:auto;">
              <a class="friendname" href="http://<?php echo ($data["url"]); ?>" style="text-decoration:none">
                <?php echo ($data["name"]); ?>
              </a>
            </div><?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row footer-bottom">
        <ul class="list-inline text-center">
            <li><a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo ($beian); ?></a></li>
            <li><?php echo ($banquan); ?></li>
            <li>地址：<?php echo ($address); ?></li>
          </ul>
      </div>
    </div>
  </div>
</body>
</html>