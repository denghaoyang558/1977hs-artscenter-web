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

    <!-- bootstrapValidator JS -->
    <script type="text/javascript" src="/1977hs/Public/Js/bootstrapValidator/dist/js/bootstrapValidator.js"></script>
    <link rel="stylesheet" href="/1977hs/Public/Css/bootstrapValidator/bootstrapValidator.css"/>

    <!-- Font-awesome core CSS -->
    <link href="/1977hs/Public/Css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/1977hs/Public/Css/admin/Homepage.css" rel="stylesheet">
    
    <style type="text/css">
        code{
            font-size: 110%;
        }
    </style>

</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改报名方式
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Admission/index');?>">招生详情模块</a></li>
              <li class="active">修改报名方式</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" role="form" action="<?php echo U('Admission/alter_admission_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <?php if(is_array($admission)): foreach($admission as $key=>$data): ?><tr>
                  <td><input name="title[]" value="<?php echo ($data["title"]); ?>" type="text"></td>
                  <td><input name="answer[]" value="<?php echo ($data["answer"]); ?>" type="text"></td>
                </tr><?php endforeach; endif; ?>
              </tbody>
            </table>
            <input id="img" name="img" value="0" type="hidden" >
            <input name="id" value="<?php echo ($id); ?>" type="hidden" >
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>修改色彩作品。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>