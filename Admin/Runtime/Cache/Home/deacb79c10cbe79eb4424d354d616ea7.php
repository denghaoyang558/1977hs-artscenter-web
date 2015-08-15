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
        $(document).ready(function() 
        {  
            window.top.window.iFrameHeight();
            window.top.window.callApplicationCount();
        });

        function callmyModal_1(u){
            window.top.window.myModalImage(u);
        }

        function callmyModalText(id){
            $.getJSON("<?php echo U('Strength/get_achievement_status');?>?id="+id, function (data, status, xhr) {
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
                实力展示模块
            </h1>
        </div>
    </div>
    <!-- 明星师资 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-group"></i>
                    明星师资
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8" style="padding-top:8px;">
                            <p>职称输入后将会在前台显示，如：素描主教————宋耀东。</p>
                        </div>
                        <div class="col-md-4">
                            <div style="float:right;"><a href="<?php echo U('Strength/add_teacher');?>" style="width:100px;"type="button" class="btn btn-primary">添 加</a></div>
                        </div>
                    </div>
                </div>  
                <table class="table table-hover" style="border-bottom:1px solid #DDD;">
                    <thead>
                        <tr>
                          <th class="col-md-2"><div align="center">序号</div></th>
                          <th class="col-md-2"><div align="center">姓名</div></th>
                          <th class="col-md-2"><div align="center">职称</div></th>
                          <th class="col-md-2"><div align="center">图片</div></th>
                          <th class="col-md-2"><div align="center">排序</div></th>
                          <th class="col-md-2"><div align="center">操作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($teacher)): foreach($teacher as $key=>$data): ?><tr>
                            <th scope="row">
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($key+1); ?></div>
                                </div>
                            </th>
                            <td>
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($data["name"]); ?></div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($data["position"]); ?></div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <a href="#" onclick="callmyModal_1('/1977hs<?php echo ($data["pic_adr"]); ?>')">
                                        <img src="/1977hs<?php echo ($data["pic_adr"]); ?>" class="img-rounded" style="height:50px;">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="width:200px;padding-top:6px;">
                                        <?php if($key == 0): ?><a href="<?php echo U('Strength/sort_teacher_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a>
                                        <?php elseif($key == count($teacher)-1): ?>
                                            <a href="<?php echo U('Strength/sort_teacher_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                        <?php else: ?>
                                            <a href="<?php echo U('Strength/sort_teacher_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                            <a href="<?php echo U('Strength/sort_teacher_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a><?php endif; ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="width:200px;padding-top:10px;">
                                        <a href="<?php echo U('Strength/alter_teacher');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-success">修 改</a>
                                        <a href="<?php echo U('Strength/delete_teacher_handle');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-danger">删 除</a>
                                    </div>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <form class="form-signin" role="form" action="<?php echo U('Strength/alter_teacher_text_handle');?>" method='post' id="form">
                <div class="panel-body" style="margin-top:5px;">
                    <div class="row">
                        <div class="col-md-11">
                            <textarea class="form-control" name="teacher_text" rows="3" placeholder="请输入文章简介"><?php echo ($teacher_text); ?></textarea>
                        </div>
                        <div class="col-md-1">
                            <div style="float:right;"><button type="submit" class="btn btn-warning">修 改</button></div>
                        </div>
                    </div>
                </div> 
                </form>       
            </div>
        </div>
    </div>
    <!-- 历届成绩 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-file-alt"></i>
                    历届成绩
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8" style="padding-top:8px;">
                            <p>点击"添加"可以新增年份录取情况信息。</p>
                        </div>
                        <div class="col-md-4">
                            <div style="float:right;"><a href="<?php echo U('Strength/add_achievement');?>" style="width:100px;" type="button" class="btn btn-primary">添 加</a></div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover" style="border-bottom:1px solid #DDD;">
                    <thead>
                        <tr>
                          <th class="col-md-2"><div align="center">序号</div></th>
                          <th class="col-md-2"><div align="center">年份</div></th>
                          <th class="col-md-2"><div align="center">录入情况</div></th>
                          <th class="col-md-2"><div align="center">排序</div></th>
                          <th class="col-md-2"><div align="center">操作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(is_array($achievement)): foreach($achievement as $key=>$data): ?><tr>
                            <th scope="row">
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($key+1); ?></div>
                                </div>
                            </th>
                            <td>
                                <div align="center">
                                    <div style="padding-top:15px;"><?php echo ($data["year"]); ?></div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="padding-top:6px;">
                                        <a type="button" class="btn btn-default" onclick="callmyModalText(<?php echo ($data["id"]); ?>)">点击查看</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="width:200px;padding-top:6px;">
                                        <?php if($key == 0): ?><a href="<?php echo U('Strength/sort_achievement_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a>
                                        <?php elseif($key == count($achievement)-1): ?>
                                            <a href="<?php echo U('Strength/sort_achievement_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                        <?php else: ?>
                                            <a href="<?php echo U('Strength/sort_achievement_handle');?>?id=<?php echo ($data["id"]); ?>&type=up"class="btn btn-default"><i class="icon-angle-up"></i></a>
                                            <a href="<?php echo U('Strength/sort_achievement_handle');?>?id=<?php echo ($data["id"]); ?>&type=down"class="btn btn-default"><i class="icon-angle-down"></i></a><?php endif; ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div align="center">
                                    <div style="width:200px;padding-top:10px;">
                                        <a href="<?php echo U('Strength/alter_achievement');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-success">修 改</a>
                                        <a href="<?php echo U('Strength/delete_achievement_handle');?>?id=<?php echo ($data["id"]); ?>" type="button" class="btn btn-danger">删 除</a>
                                    </div>
                                </div>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <div class="panel-body" style="margin-top:5px;">
                    <div class="row">
                        <div class="col-md-11">
                            <a onclick="callmyModal_1('/1977hs<?php echo ($achievement_picture); ?>')" href="#" >
                                <img src="/1977hs<?php echo ($achievement_picture); ?>" class="img-rounded" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-md-1">
                            <div style="float:right;"><a href="<?php echo U('Strength/alter_achievement_pic');?>" type="button" class="btn btn-warning">修 改</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 作品展示 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-star-empty"></i>
                    作品展示
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/1977hs<?php echo ($works_picture); ?>" class="img-rounded" style="width:100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo U('Strength/alter_works_pic');?>" type="button" style="margin-top:8px;width:100%;" class="btn btn-success">修 改 图 片</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 教学环境 -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="icon-flag"></i>
                    教学环境
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="/1977hs<?php echo ($environment_picture); ?>" class="img-rounded" style="width:100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo U('Strength/alter_environment_pic');?>" type="button" style="margin-top:8px;width:100%;" class="btn btn-success">修 改 图 片</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>