<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\xampp\htdocs\blog\public/../application/admin\view\article\edit.html";i:1497843349;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>后台管理页面</title>
    <script type="text/javascript" src="../../../../static/admin/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../../static/admin/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../../../static/admin/css/manager.css">
    <meta charset="utf-8">
    <script type="text/javascript" src="../../../../static/admin/js/manager.js"></script>
    <script>
        //模块配置项
        var hdjs = {
            //框架目录
            'base': '../../../../static/node_modules/hdjs',
            //上传文件后台地址
            'uploader': "<?php echo url('system/component/uploader'); ?>",
            //获取文件列表的后台地址
            'filesLists': " <?php echo url('system/component/filesLists'); ?>?",
        };
    </script>
    <script src="../../../../static/node_modules/hdjs/app/util.js"></script>
    <script src="../../../../static/node_modules/hdjs/require.js"></script>
    <script src="../../../../static/node_modules/hdjs/config.js"></script>
</head>
<body>
<!--使用呢bootstrap时我们应该把内容放到container内-->
<div class="container clearfix">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 blackTop">
            博客管理系统
            <span>Blog&nbsp;Managerment&nbsp;System</span>
            <p class="UserName">
                <?php echo session('admin.admin_username'); ?>
            </p>
            <div class="triange"></div>
        </div>
    </div>
    <div class="LoginHide">
                <ul>
                    <li><a href="<?php echo url('admin/entry/pass'); ?>">修改密码</a></li>
                    <li><a href="<?php echo url('admin/login/login'); ?>">退出登录</a></li>
                </ul>
            </div>
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xm-2 col-lg-2 blackTop1">
            <div class="row leftBlack">
                <!--最左边第二个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight">
                    <img class="second-pic" src="../../../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage">
                    <a href="<?php echo url('admin/entry/index'); ?>">
                    首页
                    </p>
                    </a>
                </div><!--最左边第er个行内的样式结束-->
                <!--最左边第三个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="pull">
                    <img class="second-pic" src="../../../../static/admin/img/peopleMananger.png" width="24px" height="24px">
                    <p class="firstPage">家庭成员</p>
                    <div class="triange1 triangeposition" id="change"></div>
                </div><!--最左边第三个行内的样式结束-->
                <!--人员管理的内容-->
                <div class="row peopleM" id="peopleM">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord"><a href="<?php echo url('admin/family/index'); ?>">家人基本信息</a> </p>
                    </div>
                </div>
                <!--最左边第四个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="system">
                    <img class="second-pic" src="../../../../static/admin/img/set.png" width="24px" height="24px">
                    <p class="firstPage">作品集</p>
                    <div class="triange1 triangeposition" id="change2"></div>
                </div><!--最左边第四个行内的样式结束-->
                <div class="row peopleM" id="peopleM1">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">个人作品展</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">王然作品展</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord"><a href="<?php echo url('admin/article/index'); ?>">陈亦婷小说集</a> </p>
                    </div>
                </div>
                <!--最左边第五个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="task">
                    <img class="second-pic" src="../../../../static/admin/img/task.png" width="24px" height="24px">
                    <p class="firstPage">生活点滴</p>
                    <div class="triange1 triangeposition" id="change3"></div>
                </div><!--最左边第个五行内的样式-->

                <div class="row peopleM" id="peopleM2">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">摄影集</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">生日日历</p>
                    </div>
                </div>

                <!--最左边第六个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="find">
                    <img class="second-pic" src="../../../../static/admin/img/total.png" width="24px" height="24px">
                    <p class="firstPage">人生规划</p>
                    <div class="triange1 triangeposition" id="change4"></div>
                </div><!--最左边第六个行内的样式结束-->
                <div class="row peopleM" id="peopleM3">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">学习计划</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">健身计划</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">健康饮食</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">读书计划</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">记事本</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
           <!--重新编辑文章处-->
           <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 WrapperWhole">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="<?php echo url('index'); ?>"><i class="fa fa-cogs"></i>
                文章管理</a>
        </li>
        <li class="active">
            <a href="<?php echo url('edit'); ?>">文章编辑</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="<?php echo url('index'); ?>">文章管理</a></li>
        <li class="active"><a href="<?php echo url('edit'); ?>">文章编辑</a></li>
    </ul>
    <form class="form-horizontal" id="form"  action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">文章管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">文章标题</label>
                    <div class="col-sm-9">
                        <input type="text"   class="form-control" value="<?php echo $oldDate['arc_title']; ?>" name="arc_title">
                    </div>
                </div>
                <div class="form-group sendtime" style="display: none">
                    <div class="col-sm-9">
                        <input type="text"   class="form-control"  name="updatetime" id="updatetime">
                    </div>
                </div>
                <script type="text/javascript">
                    var date=new Date();
                    var year=date.getFullYear();
                    var month=date.getMonth()+1;
                    var day=date.getDate();
                    var WholeDate=year+"-"+month+"-"+day;
                    $('#sendtime').val(WholeDate);
                </script>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">文章链接</label>
                    <div class="col-sm-9">
                        <input type="text"   class="form-control" value="<?php echo $oldDate['arc_address']; ?>" name="arc_address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">文章摘要</label>
                    <div class="col-sm-9">
                        <textarea type="text"   class="form-control" name="arc_digest"><?php echo $oldDate['arc_digest']; ?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""  class="col-sm-2 control-label">文章内容</label>
                    <div class="col-sm-9">
                        <textarea id="container" name="arc_content" style="height:300px;width:100%;"
                        >
                            <?php echo $oldDate['arc_content']; ?>
                        </textarea>
                        <script>
                        util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
                            //这是回调函数 editor是百度编辑器实例
                        });
                        </script>
                    </div>
                </div>
                <div class="littlePic">
                <input type="file" class="" name="arc_thumb" value="<?php echo $oldDate['arc_thumb']; ?>">
                </div>
            </div>
        </div>
        <button class="btn btn-primary Sure" type="submit">确定</button>
    </form>
<script type="text/javascript">
    var heightWhole=$('#form').height();
    var topWhole=heightWhole+60;
    if(heightWhole>577){
    $('.Sure').css({'top':topWhole});
    }
</script>
</div>
        </div>
    </div>
</div>
</div>
</body>
<script type="text/javascript">
    var heightWhole=$('#form').height();
    var heightWhole1=$('#form').height()+109;
    if(heightWhole>577){
    $('.WrapperWhole').css({'height':'100%'});
    $('.leftBlack').css({'height':heightWhole1});
    }
</script>
</html>