<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-touch-fullscreen" content="no" />
<meta content="telephone=no" name="format-detection" />
<meta name="apple-mobile-web-app-capable" content="no" />
<link rel="icon" href="/1977hs/Uploads/logo.png">
<title>兰州1977画室|兰州画室|兰州美术培训|1977微官网</title>
<meta name="keywords" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室,1977微官网"/>
<meta name="description" content="画室,兰州画室,1977画室,兰州1977画室,兰州美术高考,兰州美术培训,兰州美术培训班,兰州美术高考培训班,兰州最好的画室,1977微官网" /> 
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link href="/1977hs/Public/Css/mobile/aboutus.css" rel="stylesheet" type="text/css" />
<script src="/1977hs/Public/Js/jquery.min.js"></script>
<script src="/1977hs/Public/Js/bootstrap.min.js"></script>
<script src="/1977hs/Public/Js/mobile/aboutus.js" type="text/javascript"></script>
<style type="text/css">
    .ui-btn-back {
        background: transparent url("/1977hs/Public/img/back.png") no-repeat scroll center center / 24px auto;
    }

    .ui-btn-home {
        background: transparent url("/1977hs/Public/img/home.png") no-repeat scroll center center / 24px auto;
    }
</style>
</head>
<body  class="body_product">
    <!--顶部开始-->
    <div id="top">
    <!--频道导航 开始-->
    <script>        
    window.onload = function (){
        var oWin = document.getElementById("window");
        var oLay = document.getElementById("overlay");	
        var oBtn = document.getElementById("popmenu");
        var oClose = document.getElementById("close");
        oBtn.onclick = function (){oLay.style.display = "block";oWin.style.display = "block"	};
        oLay.onclick = function (){oLay.style.display = "none";oWin.style.display = "none"	}
    };
    </script>
    <div style="margin-bottom:55px;">
        <div id="toolbar">
            <div class="fixed-blue">
                <a class="ui-title" id="popmenu">关于1977</a>
                <a class="ui-btn-back" href="javascript:history.go(-1)"></a>
                <a class="ui-btn-home" href="<?php echo U('Index/index');?>"></a>
            </div>
        </div>
        <div id="overlay"></div>
        <div id="window">
            <ul class="windowlist">
                <li><a  href="<?php echo U('Aboutus/index');?>"><span>关于1977</span></a></li>
                <li><a  href="<?php echo U('Strength/index');?>"><span>实力展示</span></a></li>
                <li><a  href="<?php echo U('Admission/index');?>"><span>招生详情</span></a></li>
                <li><a  href="<?php echo U('Consultus/index');?>"><span>资讯1977</span></a></li>
                <li><a  href="<?php echo U('Works/sumiao');?>"><span>作品展示</span></a></li>
                <li><a  href="<?php echo U('Application/index');?>"><span>在线报名</span></a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <!--频道导航 结束-->
</div>
<!--顶部结束-->

<div  id="content" >
    <div class="row">
        <img src="/1977hs<?php echo ($picture["pic_adr"]); ?>">
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                1977介绍
                </div>
                <div class="panel" style="margin-top:0px;">

                    <div class="text" style="margin-bottom: 0px;">
                        <div id="buy_to_know" class="content" style="font-size:0.9em;margin-top:0;margin-bottom:5%;margin:25px;"><?php echo ($introduction["content"]); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:5px;width:100%;float:left;"></div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                办学特色
                </div>
                <div class="panel" style="margin-top:0px;">

                    <div class="text" style="margin-bottom: 0px;">
                        <div id="buy_to_know" class="content" style="font-size:0.9em;margin-top:0;margin-bottom:5%;margin:25px;"><?php echo ($special["content"]); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:5px;width:100%;float:left;"></div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                视频
                </div>
                <div class="panel" style="padding-top:2px;">
                    <iframe src="<?php echo ($video["vid_adr"]); ?>" allowtransparency="true" allowfullscreen="true" allowfullscreenInteractive="true" scrolling="no" border="0" frameborder="0" style="width:100%;height:280px;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!--页脚开始-->
<div id="footer">
    <div class="row">
        <div class="col-md-12">
    <div id="tool">
        <ul class="toollist toollist_black">
            <li>
                <a href="<?php echo U('Application/index');?>" ><img src="/1977hs/Public/img/map.png"><p>在线报名</p></a>
            </li>
            <li>
                <a href="tel:<?php echo ($phone); ?>"><img src="/1977hs/Public/img/tel.png"><p>电话</p></a>
            </li>
        </ul>
    </div>
    </div>
    </div>
    <!--页脚结束-->
    <!--快捷按钮 结束-->
    <div class="row">
        <div class="col-md-12">
            <ul class="wxlist">
                <a  href="#top">
                    <li>
                        <div  class="GoTop">
                            回顶部
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    <div class="copyright"><?php echo ($banquan); ?></div>
</div>
<!--页脚结束-->
</body>
</html>