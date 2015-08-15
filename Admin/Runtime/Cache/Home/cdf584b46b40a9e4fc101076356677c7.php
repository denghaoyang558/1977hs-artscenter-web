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
        $(document).ready(function() 
        {  
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });

        function callmyModalText(id){
            $.getJSON("<?php echo U('Question/get_answer');?>?id="+id, function (data, status, xhr) {
                window.top.window.myModalText(data);
            });
        }
    </script>
</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                招生问题
            </h1>
        </div>
    </div>
    <!-- 名单 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div style="float:left;margin-top:-5px;">
                        <h4>总共<?php echo ($count); ?>个问答</h4>
                    </div>
                    <div style="float:right;"><a href="<?php echo U('Question/add');?>" style="width:150px;"type="button" class="btn btn-primary">新 增 问 答</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th class="col-md-1"><div align="center">序号</div></th>
                                  <th class="col-md-6"><div align="center">问题</div></th>
                                  <th class="col-md-1"><div align="center">答案</div></th>
                                  <th class="col-md-2"><div align="center">排序</div></th>
                                  <th class="col-md-2"><div align="center">操作</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($question)): foreach($question as $key=>$data): ?><tr>
                                    <th scope="row">
                                        <div align="center" style="padding-top:12px;">
                                            <?php echo ($key+1); ?>
                                        </div>
                                    </th>
                                    <td>
                                        <div align="center" style="padding-top:12px;">
                                            <?php echo ($data["title"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="padding-top:5px;">
                                                <a type="button" class="btn btn-default" onclick="callmyModalText('<?php echo ($data["id"]); ?>')">点击查看</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="width:200px;padding-top:5px;">
                                                <?php if($key == 0): ?><a href="<?php echo U('Question/sort_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a>
                                                <?php elseif($key == count($question)-1): ?>
                                                    <a href="<?php echo U('Question/sort_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                                <?php else: ?>
                                                    <a href="<?php echo U('Question/sort_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                                    <a href="<?php echo U('Question/sort_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a><?php endif; ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="width:200px;padding-top:5px;">
                                                <a type="button" class="btn btn-success" href="<?php echo U('Question/alter');?>?id=<?php echo ($data["id"]); ?>">修 改</a>
                                                <a type="button" class="btn btn-danger" href="<?php echo U('Question/delete_handle');?>?id=<?php echo ($data["id"]); ?>">删 除</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>