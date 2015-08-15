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
                资讯1977模块
            </h1>
        </div>
    </div>
    <!-- 文章 -->
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="margin-bottom:10px;">
                    <div style="float:left;margin-top:-5px;">
                        <h4>总共<?php echo ($count); ?>篇文章</h4>
                    </div>
                    <div style="float:right;"><a href="<?php echo U('Consultus/add');?>" style="width:150px;"type="button" class="btn btn-primary">新 增 文 章</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th class="col-md-2"><div align="center">序号</div></th>
                                  <th class="col-md-3"><div align="center">标题</div></th>
                                  <th class="col-md-3"><div align="center">点击数</div></th>
                                  <th class="col-md-3"><div align="center">时间</div></th>
                                  <th class="col-md-2"><div align="center">操作</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($consult)): foreach($consult as $key=>$data): ?><tr>
                                    <th scope="row">
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($key+1); ?>
                                        </div>
                                    </th>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["title"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["click"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center" style="padding-top:6px;">
                                            <?php echo ($data["created_time"]); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center">
                                            <div style="width:200px;">
                                                <a type="button" class="btn btn-success" href="<?php echo U('Consultus/alter');?>?id=<?php echo ($data["id"]); ?>">修 改</a>
                                                <a type="button" class="btn btn-danger" href="<?php echo U('Consultus/delete_handle');?>?id=<?php echo ($data["id"]); ?>">删 除</a>
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
</div>

</body>
</html>