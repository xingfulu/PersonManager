<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"C:\xampp\htdocs\blog\public/../application/admin\view\eat\eat.html";i:1497947126;s:63:"C:\xampp\htdocs\blog\public/../application/admin\view\base.html";i:1497947878;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>后台管理页面</title>
    <script type="text/javascript" src="../../static/admin/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/manager.css">
    <meta charset="utf-8">
    <script type="text/javascript" src="../../static/admin/js/manager.js"></script>
    <script>
        //模块配置项
        var hdjs = {
            //框架目录
            'base': '../../static/node_modules/hdjs',
            //上传文件后台地址
            'uploader': "<?php echo url('system/component/uploader'); ?>",
            //获取文件列表的后台地址
            'filesLists': " <?php echo url('system/component/filesLists'); ?>?",
        };
    </script>
    <script src="../../static/node_modules/hdjs/app/util.js"></script>
    <script src="../../static/node_modules/hdjs/require.js"></script>
    <script src="../../static/node_modules/hdjs/config.js"></script>
</head>
<body>
<!--使用呢bootstrap时我们应该把内容放到container内-->
<div class="container clearfix">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 blackTop">
            个人管理系统
            <span>Managerment&nbsp;System</span>
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
                    <img class="second-pic" src="../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage">
                    <a href="<?php echo url('admin/entry/index'); ?>">
                    首页
                    </p>
                    </a>
                </div><!--最左边第er个行内的样式结束-->
                <!--最左边第三个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="pull">
                    <img class="second-pic" src="../../static/admin/img/peopleMananger.png" width="24px" height="24px">
                    <p class="firstPage">家庭成员</p>
                    <div class="triange1 triangeposition" id="change"></div>
                </div><!--最左边第三个行内的样式结束-->
                <!--人员管理的内容-->
                <div class="row peopleM" id="peopleM">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord"><a href="<?php echo url('admin/family/index'); ?>">家人基本信息</a> </p>
                    </div>
                </div>
                <!--最左边第四个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="system">
                    <img class="second-pic" src="../../static/admin/img/set.png" width="24px" height="24px">
                    <p class="firstPage">作品集</p>
                    <div class="triange1 triangeposition" id="change2"></div>
                </div><!--最左边第四个行内的样式结束-->
                <div class="row peopleM" id="peopleM1">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">个人作品展</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord"><a href="<?php echo url('admin/article/index'); ?>">陈亦婷小说集</a> </p>
                    </div>
                </div>
                <!--最左边第五个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="task">
                    <img class="second-pic" src="../../static/admin/img/task.png" width="24px" height="24px">
                    <p class="firstPage">生活点滴</p>
                    <div class="triange1 triangeposition" id="change3"></div>
                </div><!--最左边第个五行内的样式-->

                <div class="row peopleM" id="peopleM2">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        <a href="<?php echo url('admin/Live/birthday'); ?>">
                        生日日历
                        </a>
                        </p>
                    </div>
                </div>

                <!--最左边第六个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="find">
                    <img class="second-pic" src="../../static/admin/img/total.png" width="24px" height="24px">
                    <p class="firstPage">人生规划</p>
                    <div class="triange1 triangeposition" id="change4"></div>
                </div><!--最左边第六个行内的样式结束-->
                <div class="row peopleM" id="peopleM3">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        <a href="<?php echo url('admin/Study/study'); ?>">
                        学习计划
                        </a>
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        <a href="<?php echo url('admin/Gym/gym'); ?>">
                        健身计划
                        </p>
                        </a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        <a href="<?php echo url('admin/Eat/eat'); ?>">
                        健康饮食
                        </a>
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        <a href="<?php echo url('admin/book/book'); ?>">
                        读书计划
                        </a>
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">记事本</p>
                    </div>
                </div>
                 <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight">
                    <img class="second-pic" src="../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage">
                    <a href="<?php echo url('admin/article/recycle'); ?>">
                    回收站
                    </p>
                    </a>
                </div><!--最左边第er个行内的样式结束-->
            </div>
        </div>
        <div>
            
<!--增加饮食健康包裹-->
<div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 WrapperWhole">
<span class="Todaydate Todaydate1"></span>
<div class="breakfast">
<?php if(is_array($field) || $field instanceof \think\Collection): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
	<button class="btn btn-warning btn-xs" onclick="update(<?php echo $vo['breakfast_id']; ?>)">更改菜单</button>
	<h1>早餐</h1>
	<p><?php echo $vo['breakfast_food']; ?></p>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="lunch">
<?php if(is_array($field1) || $field1 instanceof \think\Collection): if( count($field1)==0 ) : echo "" ;else: foreach($field1 as $key=>$vo): ?>
<button class="btn btn-active btn-info" onclick="update1(<?php echo $vo['lunch_id']; ?>)">更改菜单</button>
	<h1>午餐</h1>
	<p><?php echo $vo['lunch_food']; ?></p>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="dinner">
<?php if(is_array($field2) || $field2 instanceof \think\Collection): if( count($field2)==0 ) : echo "" ;else: foreach($field2 as $key=>$vo): ?>
<button class="btn btn-active btn-primary" onclick="update2(<?php echo $vo['dinner_id']; ?>)">更改菜单</button>
	<h1>晚餐</h1>
	<p><?php echo $vo['dinner_food']; ?></p>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
<script type="text/javascript">
	//修改早餐
	function update(breakfast_id){	
     	location.href = "<?php echo url('update'); ?>"+'?breakfast_id='+breakfast_id;  
	}
	//修改午餐
	function update1(lunch_id){	
     	location.href = "<?php echo url('update1'); ?>"+'?lunch_id='+lunch_id;  
	}
	//修改晚餐
	function update2(dinner_id){	
     	location.href = "<?php echo url('update2'); ?>"+'?dinner_id='+dinner_id;  
	}
</script>

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