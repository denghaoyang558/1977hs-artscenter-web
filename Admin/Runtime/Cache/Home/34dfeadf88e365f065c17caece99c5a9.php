<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>1977画室网站后台</title>
    <link rel="icon" href="/1977hs/Public/Uploads/img/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="/1977hs/Public/Css/admin/bootstrap.min.css" rel="stylesheet">
    <script src="/1977hs/Public/Js/admin/jquery.min.js"></script>
    <script src="/1977hs/Public/Js/admin/bootstrap.min.js"></script>
    <script src="/1977hs/Public/Js/admin/docs.min.js"></script>
    <script src="/1977hs/Public/Js/admin/ie10-viewport-bug-workaround.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/1977hs/Public/Css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/1977hs/Public/Css/admin/Webinfo.css" rel="stylesheet">
    <script type="text/javascript">
    
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                关于1977模块
            </h1>
        </div>
    </div>
    <!-- 置顶图片 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-picture"></i>
                    置顶图片
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/1977hs<?php echo ($picture["pic_adr"]); ?>" class="img-rounded" style="width:100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Aboutus/alter_pictrue');?>">修 改 图 片</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 1977介绍 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-book"></i>
                    1977介绍
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($introduction["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Aboutus/alter_introduction');?>">修 改 介 绍</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 办学特色 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-volume-off"></i>
                    办学特色
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo ($special["content"]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Aboutus/alter_special');?>">修 改 特 色</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 1977视频 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-facetime-video"></i>
                    1977视频
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <iframe src="<?php echo ($video["vid_adr"]); ?>" allowtransparency="true" allowfullscreen="true" allowfullscreenInteractive="true" scrolling="no" border="0" frameborder="0" style="width:<?php echo ($video["width"]); ?>;height:<?php echo ($video["height"]); ?>"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a type="button" style="width:100%;margin-top:8px;" class="btn btn-success" href="<?php echo U('Aboutus/alter_video');?>">修 改 视 频</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>