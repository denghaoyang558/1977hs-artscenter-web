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
<link href="/1977hs/Public/Css/jquerymobile/jquery.mobile-1.4.5.min.css"rel="stylesheet" type="text/css" />
<link href="/1977hs/Public/Css/mobile/aboutus.css" rel="stylesheet" type="text/css" />
<script src="/1977hs/Public/Js/jquery.min.js"></script>
<script src="/1977hs/Public/Js/jquerymobile/jquery.mobile-1.4.5.min.js"></script>
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
    <div style="margin-bottom:45px;">
        <div id="toolbar">
            <div class="fixed-blue">
                <a class="ui-title" id="popmenu" data-ajax="false" style="text-shadow: none;">在线报名</a>
                <a class="ui-btn-back" href="javascript:history.go(-1)" data-ajax="false"></a>
                <a class="ui-btn-home" href="<?php echo U('Index/index');?>" data-ajax="false"></a>
            </div>
        </div>
        <div id="overlay"></div>
        <div id="window">
            <ul class="windowlist">
                <li><a  href="<?php echo U('Aboutus/index');?>" data-ajax="false"><span>关于1977</span></a></li>
                <li><a  href="<?php echo U('Strength/index');?>" data-ajax="false"><span>实力展示</span></a></li>
                <li><a  href="<?php echo U('Admission/index');?>" data-ajax="false"><span>招生详情</span></a></li>
                <li><a  href="<?php echo U('Consultus/index');?>" data-ajax="false"><span>资讯1977</span></a></li>
                <li><a  href="<?php echo U('Works/sumiao');?>" data-ajax="false"><span>作品展示</span></a></li>
                <li><a  href="<?php echo U('Application/index');?>" data-ajax="false"><span>在线报名</span></a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <!--频道导航 结束-->
</div>
<!--顶部结束-->
<div data-role="content">
    <form method="post" action="<?php echo U('Application/add_handle');?>" data-ajax='false' enctype="multipart/form-data">
    <div data-role="fieldcontain">
        <label for="name" style="font-weight:bold;">姓名:</label>
        <input type="text" data-clear-btn="true" style="padding:3%;" placeholder="请输入姓名" name="name">
        <br>
        <div style="width:100%;margin:0px;padding:0px;">
            <fieldset data-role="controlgroup">
                <legend style="font-weight:bold;" >性别:</legend>
                <input name="optionsRadios" id="radio-choice-v-2a" value="MALE" checked="checked" name="sex" type="radio">
                <label for="radio-choice-v-2a">男</label>
                <input name="optionsRadios" id="radio-choice-v-2b" value="FEMALE" name="sex" type="radio">
                <label for="radio-choice-v-2b">女</label>
            </fieldset>
        </div>
        <br>
        <label style="font-weight:bold;" for="name">就读高中:</label>
        <input data-clear-btn="true" style="padding:3%;" type="text" placeholder="请输入就读高中" name="school"><br>
        <label style="font-weight:bold;" for="name">联系电话:</label>
        <input data-clear-btn="true" style="padding:3%;" type="text" placeholder="请输入联系电话" name="phone"><br>     
        <label for="textarea-1" style="font-weight:bold;">通讯地址:</label>
        <textarea name="address" style="padding:2%;" placeholder="请输入通讯地址" id="textarea-1"></textarea><br>
    </div>
    <input data-theme="b" value="提 交" type="submit"> 
    </div>
    </form>
</div>

<!--页脚开始-->
<div id="footer">
    <div class="row">
        <div class="col-md-12">
    <div id="tool">
        <ul class="toollist toollist_black">
            <li>
                <a href="#" data-ajax="false" style="font-weight:normal;text-shadow: none;"><img src="/1977hs/Public/img/map.png"><p>在线报名</p></a>
            </li>
            <li>
                <a href="tel:<?php echo ($phone); ?>" data-ajax="false" style="font-weight:normal;text-shadow: none;"><img src="/1977hs/Public/img/tel.png" ><p>电话</p></a>
            </li>
        </ul>
    </div>
    </div>
    </div>
    <!--页脚结束-->
    <!--快捷按钮 结束-->
    <div class="copyright"><?php echo ($banquan); ?></div>
</div>
<!--页脚结束-->
</body>
</html>