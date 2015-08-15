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
<link href="/1977hs/Public/Css/mobile/admission.css" rel="stylesheet" type="text/css" />
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
                <a class="ui-title" id="popmenu">招生详情</a>
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
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                联系我们
                </div>
                <div class="panel" style="margin-top:0px;">
                    <div class="text" style="margin-bottom: 0px;">
                        <div class="table-c">
                            <table  border="0" cellspacing="0" cellpadding="0">
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">地址：</td>
                            <td><?php echo ($address); ?></td>
                            </tr>
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">电话：</td>
                            <td><?php echo ($call); ?></td>
                            </tr>
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">网站：</td>
                            <td><?php echo ($web); ?></td>
                            </tr>
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">咨询QQ：</td>
                            <td><?php echo ($qq); ?></td>
                            </tr>
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">微信公众平台：</td>
                            <td><?php echo ($wechatName); ?></td>
                            </tr>
                            <tr>
                            <td style="width:40%;font-weight:bold;" align="center">邮箱：</td>
                            <td><?php echo ($email); ?></td>
                            </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">             报名方式
                </div>
                <div class="panel" style="margin-top:0px;">
                    <div class="text" style="margin-bottom: 0px;">
                        <div class="table-c">
                            <table  border="0" cellspacing="0" cellpadding="0">
                            <?php if(is_array($admission)): foreach($admission as $key=>$data): ?><tr>
                                    <td style="width:40%;font-weight:bold;" align="center"><?php echo ($data["title"]); ?>：</td>
                                    <td><?php echo ($data["content"]); ?></td>
                                </tr><?php endforeach; endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                教学安排
                </div>
                <div class="panel" style="margin-top:0px;">

                    <div class="text" style="margin-bottom: 0px;">
                        <div id="buy_to_know" class="content" style="font-size:0.9em;margin-top:0;margin:2%;"><?php echo ($eduction["content"]); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                生活安排
                </div>
                <div class="panel" style="margin-top:0px;">

                    <div class="text" style="margin-bottom: 0px;">
                        <div id="buy_to_know" class="content" style="font-size:0.9em;margin-top:0;margin:2%;"><?php echo ($life["content"]); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:5px;">
        <div class="col-md-12">
            <div>
                <div class="panel_head" style="margin-top:0px;padding-top:10px;padding-bottom:10px;" align="center">
                招生问答
                </div>
                <div class="panel" style="margin-top:0px;">

                    <div class="text" style="margin-bottom: 0px;">
                        <div id="buy_to_know" class="content" style="font-size:0.9em;margin-top:0;margin:2%;">
                            <?php if(is_array($question)): foreach($question as $key=>$data): ?><div class="row" style="margin-bottom:2%">
                                <div class="row">
                                    <div class="question">
                                        <?php echo ($key+1); ?>、<?php echo ($data["title"]); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="answer">
                                        答：<?php echo ($data["answer"]); ?>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>
                        </div>
                    </div>
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