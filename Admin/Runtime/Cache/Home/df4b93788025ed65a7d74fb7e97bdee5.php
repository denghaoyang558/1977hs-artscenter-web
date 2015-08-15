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
        var url;
        $(document).ready(function(){
            $("input[type=file]").change(function(e){
                var fileInput = $(this)[0];
                var file = fileInput.files[0];
                if(file){
                    var reader = new FileReader();
                    reader.onload=function(e){
                        $("#img").attr("value","1");
                        url = reader.result;
                        if($("#imageInput").length > 0){
                            $("#imageInput").attr("src",reader.result);
                        }else{
                            $("#altput").hide();
                            $("#imput").append('<a href="#" onclick="callmyModal();"><img id="imageInput" class="img-thumbnail" src="'+reader.result+'" style="height:200px;width:200px;float:left;"/></a>');
                            window.parent.window.iFrameHeight();
                        }    

                    }
                    reader.readAsDataURL(file);
                }
            });
        });

        function callmyModal(){
            window.top.window.myModalImage(url);
        }
    </script>
    
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                添加师资
            </h1>
        </div>
    </div>
    <!-- 导航 -->
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
              <li><a href="<?php echo U('Strength/index');?>">实力展示模块</a></li>
              <li class="active">添加师资</li>
            </ol>
        </div>
    </div>
    <form class="form-signin" enctype="multipart/form-data" role="form" action="<?php echo U('Strength/add_teacher_handle');?>" method='post' id="form">
    <!-- 主体 -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>姓名:</td>
                  <td><input name="name" type="text" class="form-control" style="width:320px;" placeholder="请输入姓名"></td>
                </tr>
                <tr>
                  <td>职称：</td>
                  <td><input name="position" type="text" class="form-control" style="width:320px;" placeholder="请输入职称（可不填）"></td>
                </tr>
                <tr>
                  <td>上传图片:</td>
                  <td><input name="image" type="file" class="form-control"></td>
                </tr>
                <tr>
                    <td>上传预览:</td>
                    <td id="imput"><p id="altput" >上传后才可预览，请选择文件。</p></td>
                </tr>
                <tr>
                  <td>师资介绍:</td>
                  <td><textarea name="content" class="form-control" rows="3" placeholder="请输入师资介绍"></textarea></td>
                </tr>
                <tr>
                  <td>是否置顶：</td>
                  <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>是&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="0">否</td>
                </tr>
              </tbody>
            </table>
            <input id="img" name="img" value="0" type="hidden" >
            <div style="float:right;"><button type="submit" class="btn btn-primary">提 交</button></div>
        </div>
    </div>
    </form>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-info" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>职称可不填，职称输入后将会在前台显示，如：素描主教————宋耀东。</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>