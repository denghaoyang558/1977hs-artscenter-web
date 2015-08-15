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
    </script>

</head>
<body>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-md-12">        
            <h1 class="page-header">
                在线报名名单
            </h1>
        </div>
    </div>
    <!-- 名单 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div style="float:left;margin-top:-5px;">
                        <h4>总共<?php echo ($count); ?>名单未读</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th class="col-md-1"><div align="center">序号</div></th>
                                  <th class="col-md-2"><div align="center">姓名</div></th>
                                  <th class="col-md-2"><div align="center">联系电话</div></th>
                                  <th class="col-md-2"><div align="center">提交时间</div></th>
                                  <th class="col-md-2"><div align="center">状态</div></th>
                                  <th class="col-md-3"><div align="center">操作</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($application)): foreach($application as $key=>$data): ?><tr>
                                        <th scope="row">
                                            <div align="center" style="padding-top:6px;">
                                                <?php echo ($key+1); ?>
                                            </div>
                                        </th>
                                        <td>
                                            <div align="center" style="padding-top:6px;">
                                                <?php echo ($data["name"]); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center" style="padding-top:6px;">
                                                <?php echo ($data["phone"]); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center" style="padding-top:6px;">
                                                <?php echo ($data["created_time"]); ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <div align="center" style="padding-top:6px;">
                                                    <?php if($data["is_read"] == 0): ?><div style="color:#C03111">未读</div>
                                                    <?php else: ?>
                                                        已读<?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <div style="width:200px;">
                                                    <a type="button" class="btn btn-info" href="<?php echo U('Application/watch');?>?id=<?php echo ($data["id"]); ?>">点击查看</a>
                                                    <a type="button" class="btn btn-danger" href="<?php echo U('Application/delete_handle');?>?id=<?php echo ($data["id"]); ?>">删 除</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div style="float:right;">
                    <nav>
                      <ul class="pagination">
                        <?php echo ($page); ?>
                     </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 说明 -->
    <div class="row">
        <div class="col-md-12">
            <div class="bs-callout bs-callout-advice" id="callout-alerts-dismiss-plugin">
                <h4>说明</h4>
                <p>“点击查看”可修改读取状态。</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>