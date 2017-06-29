<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\xampp\htdocs\blog\public/../application/admin\view\book\book.html";i:1498023467;s:63:"C:\xampp\htdocs\blog\public/../application/admin\view\base.html";i:1498183363;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>后台管理页面</title>
    <!---->
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
                    <li onclick="Mywhole('<?php echo url('admin/entry/pass'); ?>')">修改密码</li>
                    <li onclick="Mywhole('<?php echo url('admin/entry/index'); ?>')">退出登录</li>
                </ul>
            </div>
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xm-2 col-lg-2 blackTop1">
            <div class="row leftBlack">
                <!--最左边第二个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight">
                    <img class="second-pic" src="../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage" onclick="Mywhole('<?php echo url('admin/entry/index'); ?>')">
                    
                    首页
                    </p>
                   
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
                        <p class="peopleWord" onclick="Mywhole('<?php echo url('admin/family/index'); ?>')">家人基本信息</p>
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
                        <p class="peopleWord" onclick="Mywhole('<?php echo url('admin/Show/show'); ?>')">个人作品展</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord" onclick="Mywhole('<?php echo url('admin/article/index'); ?>')">陈亦婷小说集 </p>
                    </div>
                </div>
                <!--最左边第五个行内的样式-->
                <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" id="task">
                    <img class="second-pic" src="../../static/admin/img/task.png" width="24px" height="24px">
                    <p class="firstPage">生活点滴</p>
                    <div class="triange1 triangeposition" id="change3"></div>
                </div><!--最左边第个五行内的样式-->

                <div class="row peopleM" id="peopleM2">
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/Camera/camera'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">摄影集</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/Live/birthday'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                       
                        生日日历
                        
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
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/Study/study'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">        
                        学习计划
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/Gym/gym'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px" ">
                        <p class="peopleWord">
                       
                        健身计划
                       
                        </a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/Eat/eat'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        健康饮食
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/book/book'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        读书计划
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/note/note'); ?>">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord">
                        记事本
                        </p>
                    </div>
                </div>
                 <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" onclick="Mywhole('<?php echo url('admin/article/recycle'); ?>">
                    <img class="second-pic" src="../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage">
                    回收站
                    </p>
                </div><!--最左边第er个行内的样式结束-->
            </div>
        </div>
        <div>
            
<!--读书计划包裹-->
<div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 WrapperWhole">
<table class="table MyTable table-bordered ">
 <tr>
 	<td >
 	<?php if(is_array($field) || $field instanceof \think\Collection): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
 		<div class="classicbook">
 		<p>金</p>
 		<p>融</p>
 		<p>类</p>
 		</div>
 		<div class="bookContent">
 		<p>书目</p>
 		<span><?php echo $vo['moneybook_content']; ?></span>
 		</div>
 		<div class="bookPic">
 			<img src="../../static/admin/img/<?php echo $vo['moneybook_img']; ?>" width="180px"
 			height="175px">
 			<div class="showContent">
 			<?php echo $vo['moneybook_show']; ?>
 			</div>
 		</div>
 		
 		<div class="bookTime">
 		<p>读完时间</p>
 		<span><?php echo $vo['moneybook_time']; ?></span>
 		</div>
 		<button class="btn btn-info btn-xs MyBtnn1" onclick="update(<?php echo $vo['moneybook_id']; ?>)">更换书目</button>
 		<?php endforeach; endif; else: echo "" ;endif; ?>
 	</td>
 </tr>
 <tr>
 	<td >
 		<?php if(is_array($field1) || $field1 instanceof \think\Collection): if( count($field1)==0 ) : echo "" ;else: foreach($field1 as $key=>$vo): ?>
 		<div class="classicbook">
 		<p>软</p>
 		<p>件</p>
 		<p>类</p>
 		</div>
 		<div class="bookContent">
 		<p>书目</p>
 		<span><?php echo $vo['internet_content']; ?></span>
 		</div>
 		<div class="bookPic">
 			<img src="../../static/admin/img/<?php echo $vo['internet_img']; ?>" width="180px"
 			height="175px">
 			<div class="showContent">
 			<?php echo $vo['internet_show']; ?>
 			</div>
 		</div>
 		<div class="bookTime">
 		<p>读完时间</p>
 		<span><?php echo $vo['internet_time']; ?></span>
 		</div>
 		<button class="btn btn-info btn-xs MyBtnn1" onclick="update1(<?php echo $vo['internet_id']; ?>)">更换书目</button>
 		<?php endforeach; endif; else: echo "" ;endif; ?>
 	</td>
 </tr>
 <tr>
 	<td>
 		<?php if(is_array($field2) || $field2 instanceof \think\Collection): if( count($field2)==0 ) : echo "" ;else: foreach($field2 as $key=>$vo): ?>
 		<div class="classicbook">
 		<p>提</p>
 		<p>升</p>
 		<p>类</p>
 		</div>
 		<div class="bookContent">
 		<p>书目</p>
 		<span><?php echo $vo['up_content']; ?></span>
 		</div>
 		<div class="bookPic">
 			<img src="../../static/admin/img/<?php echo $vo['up_img']; ?>" width="180px"
 			height="175px">
 			<div class="showContent">
 			<?php echo $vo['up_show']; ?>
 			</div>
 		</div>
 		<div class="bookTime">
 		<p>读完时间</p>
 		<span><?php echo $vo['up_time']; ?></span>
 		</div>
 		<button class="btn btn-info btn-xs MyBtnn1" onclick="update2(<?php echo $vo['up_id']; ?>)">更换书目</button>
 		<?php endforeach; endif; else: echo "" ;endif; ?>
 	</td>
 </tr>
</table>
<script type="text/javascript">
	//更改书目
	function update(moneybook_id){
		location.href = "<?php echo url('update'); ?>"+'?moneybook_id='+moneybook_id; 
	}
	function update1(internet_id){
		location.href = "<?php echo url('update1'); ?>"+'?internet_id='+internet_id; 
	}
	function update2(up_id){
		location.href = "<?php echo url('update2'); ?>"+'?up_id='+up_id; 
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
    //点击各个链接的内容封装
    function Mywhole(address){
        location.href = address;
    }
</script>
</html>