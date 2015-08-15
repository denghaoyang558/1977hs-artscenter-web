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
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                查看报名
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Application/index');?>">在线报名名单</a></li>
              <li class="active">查看报名</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Application/isRead_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td style="width:150px;">姓名:</td>
                  <td><?php echo ($data["name"]); ?></td>
                </tr>
                <tr>
                  <td>性别:</td>
                  <td><?php echo ($data["sex"]); ?></td>
                </tr>
                <tr>
                  <td>就读高中：</td>
                  <td><?php echo ($data["school"]); ?></td>
                </tr>
                <tr>
                  <td>联系电话：</td>
                  <td><?php echo ($data["phone"]); ?></td>
                </tr>
                <tr>
                  <td>通讯地址：</td>
                  <td><?php echo ($data["address"]); ?></td>
                </tr>
              </tbody>
            </table>
            <input name="id" value="<?php echo ($data["id"]); ?>" type="hidden">
            <?php if($data["is_read"] == 0): ?><div style="float:right;"><button type="submit" class="btn btn-primary">标记为已读</button></div><?php endif; ?>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>在线报名名单。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>