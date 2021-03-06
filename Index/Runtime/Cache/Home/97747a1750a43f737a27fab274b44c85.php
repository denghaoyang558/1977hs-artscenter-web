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
<link href="/1977hs/Public/Css/works_suxie.css" rel="stylesheet">
<script type="text/javascript">
  function myModalImage(src){
      $("#mymodali").attr("src",src);
      $("#myModalImage").modal('toggle');
    }
</script>
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
      <a class="head-bottom-nav-item-right" href="<?php echo U('Works/student');?>">学生作品</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Works/suxie');?>">速写</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Works/secai');?>">色彩</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Works/sumiao');?>">素描</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<div class="content" >
  <div class="container">
    <div class="rectangle">
      <!-- 矩形顶部 -->
      <div class="toprc">
        <div class="title">
          <div class="crosser">
            <img src="/1977hs/Public/Uploads/img/crosser_tab.png">
          </div>
          <div class="widthrc">
            <a href="<?php echo U('Works/sumiao');?>" style="text-decoration: none;">
            <div class="smallrc">
              素描
            </div>
            </a>
          </div>
          <div class="crosser">
            <img src="/1977hs/Public/Uploads/img/crosser_tab.png">
          </div>
          <div class="widthrc">
            <a href="<?php echo U('Works/secai');?>" style="text-decoration: none;">
            <div class="smallrc">
              色彩
            </div>
            </a>
          </div>
          <div class="crosser">
            <img src="/1977hs/Public/Uploads/img/crosser_tab.png">
          </div>
          <div class="widthrc">
            <a href="<?php echo U('Works/suxie');?>" style="text-decoration: none;">
            <div class="smallrc active">
              速写
            </div>
            </a>
          </div>
          <div class="crosser">
            <img src="/1977hs/Public/Uploads/img/crosser_tab.png">
          </div>
          <div class="widthrc">
            <a href="<?php echo U('Works/student');?>" style="text-decoration: none;">
              <div class="smallrc">
                学生作品
              </div>
            </a>
          </div>
          <div class="crosser">
            <img src="/1977hs/Public/Uploads/img/crosser_tab.png">
          </div>
        </div>
      </div>
      <!-- 矩形中间 -->
      <div class="contentrc">
         <div class="contenttitlerc">
            <div class="contenttitle">
              速&nbsp;&nbsp;&nbsp;写
            </div>
         </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <?php if(is_array($works)): foreach($works as $key=>$data): ?><div class="col-md-3">
              <a href="#" onclick="myModalImage('/1977hs<?php echo ($data["pic_adr"]); ?>')">
                <div class="pic">
                  <img src="/1977hs<?php echo ($data["pic_adr"]); ?>" width="260" height="350">
                </div>
              </a>
            </div><?php endforeach; endif; ?>

        </div>
      </div>
      <div class="both">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img id="mymodali" src="" class="img-rounded" style="width:570px;">
      </div>
    </div>
  </div>
</div>

</body>
</html>