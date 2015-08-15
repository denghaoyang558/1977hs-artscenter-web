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

    <link href="/1977hs/Public/Css/admin/Homepage.css" rel="stylesheet">

    <script type="text/javascript">

    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改视频
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Aboutus/index');?>">关于1977模块</a></li>
              <li class="active">修改视频</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" enctype="multipart/form-data" role="form" action="<?php echo U('Aboutus/alter_video_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width:120px;">视频地址:</td>
                  <td><input name="vid_adr" class="form-control" placeholder="请输入视频地址" type="text" value="<?php echo ($video["vid_adr"]); ?>"></td>
                </tr>
                <tr>
                  <td>视频显示高度：</td>
                  <td><input name="height" class="form-control" style="width:100px;" placeholder="请输入视频高度" type="text" value="<?php echo ($video["height"]); ?>"></td>
                </tr>
                <tr>
                  <td>视频显示宽度：</td>
                  <td><input name="width" class="form-control" style="width:100px;" placeholder="请输入视频宽度" type="text" value="<?php echo ($video["width"]); ?>" ></td>
                </tr>
              </tbody>
            </table>
            <input name="id" value="<?php echo ($video["id"]); ?>" type="hidden">
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-warning" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>关于1977模块视频，视频显示宽度和长度最好不要修改</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>