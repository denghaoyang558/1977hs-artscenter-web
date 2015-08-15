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
    <!-- Ueditor -->
    <script type="text/javascript" charset="utf-8" src="/1977hs/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/1977hs/Public/ueditor/ueditor.all.min.js"></script>

    <!-- Font-awesome core CSS -->
    <link href="/1977hs/Public/Css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/1977hs/Public/Css/admin/Homepage.css" rel="stylesheet">
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                新增文章
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb" style="margin-bottom:0px">
              <li><a href="<?php echo U('Consultus/index');?>">资讯1977模块</a></li>
              <li class="active">新增文章</li>
            </ol>
        </div>
    </div>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-advice" id="callout-alerts-dismiss-plugin">
                <h4>建议</h4>
                <p>标题最好不要超过15个字；<br>居中文字时请使用工具栏上“居中对齐”，图片最好都居中；<br>排版时由于宽度和实际文章显示界面不同，建议一边排版一边刷新前台文章界面。</p>
            </div>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Consultus/add_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td><div style="margin-top:6px;width:80px;">标题:</div></td>
                  <td><input name="title" type="text" class="form-control" style="width:320px;" placeholder="请输入文章标题"></td>
                </tr>
                <tr>
                  <td><div style="margin-top:6px">简介:</div></td>
                  <td><textarea name="introduction" class="form-control" rows="2" placeholder="请输入文章简介"></textarea></td>
                </tr>
                <tr>
                  <td>内容:</td>
                  <td>
                    <script type="text/plain" id="editor" style="width:100%;height:500px;">
                        <p>请在此处输入内容</p>
                    </script>
                  </td>
                </tr>
              </tbody>
            </table>
            <div style="float:right;"><button type="submit" class="btn btn-primary">确认发布</button></div>
        </div>
    </div>
    </form>
</div>
<script type="text/javascript">
    //实例化编辑器
    var ue = UE.getEditor('editor');
</script>
</body>
</html>