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
<link href="/1977hs/Public/Css/admission.css" rel="stylesheet">
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
      <a class="head-bottom-nav-item-right" href="#contactus">联系我们</a>   
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#question">招生问答</a>        
      <!--<div class="head-bottom-nav-item-right" href="#"><img src="img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="admission.html#online">在线报名</a>-->
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#life">生活安排</a>
      <div class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></div>
      <a class="head-bottom-nav-item-right" href="#education">教学安排</a>
      <a class="head-bottom-nav-item-right" href="#"><img src="/1977hs/Public/Uploads/img/crosser_big.png"></a>
      <a class="head-bottom-nav-item-right" href="<?php echo U('Index/index');?>">返回首页</a>
    </nav>
  </div>
</div>
<!-- 块一 -->
<div class="content">
  <div class="container bigcontentrc">
    <div class="bigcontenttitlerc">
        <div class="contenttitle">
          1977画室期待您的加入！
        </div>
    </div>
  </div>
  <div class="container">
    <div class="frame_small">
      <div class="row1">
        <div class="col-md-12">
          <!-- 地址 -->
          <div class="row"> 
            <div class="normal_words marginbottom8">
              1977画室地址：<?php echo ($address); ?>
            </div>
          </div>
          <!-- 电话 -->
          <div class="row"> 
            <div class="normal_words marginbottom8">
              1977画室电话：<?php echo ($call); ?>
            </div>
          </div>
          <!-- 官网 -->
          <div class="row">           
            <div class="normal_words marginbottom8">
              1977官方网站：<?php echo ($web); ?>
            </div>
          </div>
          <!-- QQ -->
          <div class="row">            
            <div class="normal_words marginbottom8">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;咨询QQ：<?php echo ($qq); ?>
            </div>
          </div>
          <!-- wechat -->
          <div class="row">        
            <div class="normal_words marginbottom8">
              微信公众平台&nbsp;：<?php echo ($wechatName); ?>
            </div>
          </div>
          <!-- email -->
          <div class="row">          
            <div class="normal_words marginbottom8">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱：<?php echo ($email); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="line">
        <img src="/1977hs/Public/Uploads/img/line.png">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" align="center">
        <img src="/1977hs/Public/Uploads/img/605.png">
      </div>
      <div class="col-md-6" align="center">
        <img src="/1977hs/Public/Uploads/img/606.png">
      </div>
    </div>
    <div class="both3"></div>
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="below_words">
            报名方式
          </div>
        </div>
        <?php if(is_array($admission)): foreach($admission as $key=>$data): ?><div class="row">
            <div class="col-md-2" style="padding:0px;">
              <div class="below_words">
                <?php echo ($data["title"]); ?>：
              </div>
            </div>
            <div class="col-md-10" style="padding:0px;">
              <div class="below_words" >
                <?php echo ($data["content"]); ?>
              </div>
            </div>
          </div><?php endforeach; endif; ?>
        <div class="both1"></div>
        <div class="row">
          <div class="below_words">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($ps); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="qrcode">
            <img src="/1977hs<?php echo ($picture["pic_adr"]); ?>" width="150" height="150">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-5">
            <div class="below_words">
              微信名：<?php echo ($wechatName); ?>
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-5">
            <div class="below_words">
              微信号：<?php echo ($wechatNumber); ?>
            </div>
          </div>
          <div class="col-md-3">
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>

<!-- 栏目 -->
<div class="content" id="education">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      教学安排
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<!-- 块二 -->
<div class="content">
  <div class="container">
    <div class="normal_words">
      <?php echo ($eduction["content"]); ?>
    </div>
  </div>
</div>

<!-- 栏目 -->
<div class="content" id="life">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      生活安排
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<!-- 块三 -->
<div class="content">
  <div class="container">
    <div class="normal_words">
      <?php echo ($life["content"]); ?>
    </div>
  </div>
</div>


<!-- 栏目 -->

<div class="content" id="online">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      在线报名
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<form class="form-signin" role="form" action="<?php echo U('Admission/add_handle');?>" method='post' id="form">
<div class="content">
  <div class="container">
    <div class="row" style="margin-top:30px;">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
            <input type="text" class="form-design " placeholder="姓名" name="name">
          </div> 
        </div>
        <div class="both"></div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-4">
                <input type="radio" name="optionsRadios" value="MALE" class="sex" checked>
                <div class="sexwords">男</div>
              </div>
              <div class="col-md-4">
                <input type="radio" name="optionsRadios" value="FEMALE" class="sex" >
                <div class="sexwords">女</div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
        </div>
        <div class="both"></div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" class="form-design " placeholder="就读高中" name="school">
          </div> 
        </div>
        <div class="both"></div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" class="form-design " placeholder="联系电话" name="phone">
          </div> 
        </div>
        <div class="both"></div>
        <div class="row">
          <div class="col-md-12">
            <textarea  class="form-design-area" placeholder="通讯地址" name="address"></textarea>
          </div> 
        </div>
        <div class="both"></div>
        <div class="row">
          <div class="col-md-12" align="center">
            <button class="btn btn-danger" type="submit" style="font-size:18px;">&nbsp;&nbsp;提&nbsp;&nbsp;交&nbsp;&nbsp;</button>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>
<form>

<!-- 栏目 -->
<div class="content" id="question">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      招生问答
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<!-- 块五 -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if(is_array($question)): foreach($question as $key=>$data): ?><div class="row">
            <div class="below_words">
              <?php echo ($key+1); ?>、<?php echo ($data["title"]); ?>
            </div>
          </div>
          <div class="row">
            <div class="below_words" style="text-decoration:underline;margin-bottom:5px;">
              答：<?php echo ($data["answer"]); ?>
            </div>
          </div><?php endforeach; endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- 栏目 -->
<div class="content" id="contactus">
  <div class="programa">
    <div class="container">
      <div class="programatitle">
      联系我们
      </div>
    </div>
  </div>
  <div class="container">
    <div class="programabottom">
      <img src="/1977hs/Public/Uploads/img/programa_bottom.png">
    </div>
  </div>
</div>

<!-- 块六 -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-4" align="center">
        <div class="plane">
          <img src="/1977hs/Public/Uploads/img/plane.png">
        </div>
      </div>
      <div class="col-md-4" align="center">
        <div class="plane">
          <img src="/1977hs/Public/Uploads/img/location.png">
        </div>
      </div>
      <div class="col-md-4" align="center">
        <div class="plane">
          <img src="/1977hs/Public/Uploads/img/phone.png">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="plane" style="margin-top:10px;">
          <?php echo ($email); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="plane" style="margin-top:10px;">
          <?php echo ($address); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="plane" style="margin-top:10px;">
          <?php echo ($call); ?>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>