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
        function addSchool(){
            $("#school").append('<div class="row" style="margin-top:5px;"><div class="col-md-12"><input name="school[]" type="text" class="form-control" style="width:250px;float:left;margin-right:5px;" placeholder="请输入学校"><input name="number[]" type="text" class="form-control" style="width:96px;float:left;margin-right:15px;" placeholder="请输入人数"></div></div>');

            window.parent.window.iFrameHeight();
        }
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                修改历届成绩
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Strength/index');?>">实力展示模块</a></li>
              <li class="active">添加历届成绩</li>
            </ol>
        </div>
    </div>
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <form class="form-signin" role="form" action="<?php echo U('Strength/alter_achievement_handle');?>" method='post' id="form">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>年份:</td>
                  <td><input name="year" value="<?php echo ($achievement["year"]); ?>" type="text" class="form-control" style="width:320px;float:left;" placeholder="请输入年份"><div style="float:left;margin-left:12px;margin-top:8px;">如：2015</div></td>
                </tr>
                <tr>
                  <td>录用情况：</td>
                  <td id="school">
                    <?php if(is_array($achievement_status)): foreach($achievement_status as $key=>$data): if($key == 0): ?><div class="row"><div class="col-md-12"><input name="school[]" type="text" class="form-control" style="width:250px;float:left;margin-right:5px;" placeholder="请输入学校" value="<?php echo ($data["school"]); ?>" ><input name="number[]" type="text" class="form-control" style="width:96px;float:left;margin-right:15px;" placeholder="请输入人数" value="<?php echo ($data["number"]); ?>" ><a type="button" class="btn btn-success" onclick="addSchool()"><i class="icon-plus"></i></a></div></div>
                        <?php else: ?>
                            <div class="row" style="margin-top:5px;"><div class="col-md-12"><input name="school[]" type="text" class="form-control" style="width:250px;float:left;margin-right:5px;" placeholder="请输入学校" value="<?php echo ($data["school"]); ?>" ><input name="number[]" type="text" class="form-control" style="width:96px;float:left;margin-right:15px;" placeholder="请输入人数" value="<?php echo ($data["number"]); ?>" ></div></div><?php endif; endforeach; endif; ?>
                  </td>
                </tr>
              </tbody>
            </table>
            <input name="id" type="hidden" value="<?php echo ($achievement["id"]); ?>" >
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
            </form>
        </div>
    </div>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>人数只需要填数字不需要单位；<br>年份输入不需要带单位，如2015。</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>