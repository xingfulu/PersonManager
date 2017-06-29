<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"C:\xampp\htdocs\blog\public/../application/admin\view\note\note.html";i:1498096235;s:63:"C:\xampp\htdocs\blog\public/../application/admin\view\base.html";i:1498572755;}*/ ?>
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
                    <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12" onclick="Mywhole('<?php echo url('admin/note/note'); ?>')">
                        <img class="round" src="../../static/admin/img/round.png" width="16px" height="16px">
                        <p class="peopleWord" >
                        记事本
                        </p>
                    </div>
                </div>
                 <div class="col-md-12 col-sm-12 col-xm-12 col-lg-12 colHeight" onclick="Mywhole('<?php echo url('admin/article/recycle'); ?>')">
                    <img class="second-pic" src="../../static/admin/img/resizeApi.png" width="24px" height="24px">
                    <p class="firstPage">
                    回收站
                    </p>
                </div><!--最左边第er个行内的样式结束-->
            </div>
        </div>
        <div>
            
    <meta name="description" content="Moleskine Notebook with jQuery Booklet" />
    <meta name="keywords" content="jquery, book, flip, pages, moleskine, booklet, plugin, css3 "/>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script src="../../static/admin/booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
    <script src="../../static/admin/booklet/jquery.booklet.1.1.0.js" type="text/javascript"></script>
    <script src="../../static/admin/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
    <link href="../../static/admin/booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="../../static/admin/css/style.css" type="text/css" media="screen"/>
    <script src="../../static/admin/js/cufon-yui.js" type="text/javascript"></script>
    <script src="../../static/admin/js/ChunkFive_400.font.js" type="text/javascript"></script>
    <script src="../../static/admin/js/Note_this_400.font.js" type="text/javascript"></script>
    <script type="text/javascript">
            Cufon.replace('.myNote');
            Cufon.replace('.book_wrapper a', {hover:true});
            Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
            Cufon.replace('.reference a', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
            Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily:'ChunkFive'});
        </script>
<!--记事本包裹-->
<div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 WrapperWhole MyNoteWhole" >
<button class="btn btn-primary btn-xs MyBtnnote" onclick="add()">
<p>添</p>
<p>加</p>
<p>笔</p>
<p>记</p>
</button>
		<div class="book_wrapper">
			<a id="next_page_button"></a>
			<a id="prev_page_button"></a>
			<div id="loading" class="loading">Loading pages...</div>
			<div id="mybook" style="display:none;">

				<div class="b-load">
				<?php if(is_array($field) || $field instanceof \think\Collection): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
					<div>
						<img src="../../static/admin/img/note/<?php echo $vo['note_pic']; ?>" alt=""/>
						<h1><?php echo $vo['note_head']; ?></h1>
						<p>
							<?php echo $vo['note_content']; ?>
						</p>
						
					<button class="btn btn-info btn-position1" onclick="update(<?php echo $vo['note_id']; ?>)">编辑</button>
					<button class="btn btn-danger btn-position2" onclick="del(<?php echo $vo['note_id']; ?>)">删除</button>
						
					</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>

        <!-- The JavaScript -->

        <script type="text/javascript">
			$(function() {
				var $mybook 		= $('#mybook');
				var $bttn_next		= $('#next_page_button');
				var $bttn_prev		= $('#prev_page_button');
				var $loading		= $('#loading');
				var $mybook_images	= $mybook.find('img');
				var cnt_images		= $mybook_images.length;
				var loaded			= 0;
				//preload all the images in the book,
				//and then call the booklet plugin

				$mybook_images.each(function(){
					var $img 	= $(this);
					var source	= $img.attr('src');
					$('<img/>').load(function(){
						++loaded;
						if(loaded == cnt_images){
							$loading.hide();
							$bttn_next.show();
							$bttn_prev.show();
							$mybook.show().booklet({
								name:               null,                            // name of the booklet to display in the document title bar
								width:              800,                             // container width
								height:             500,                             // container height
								speed:              600,                             // speed of the transition between pages
								direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
								startingPage:       0,                               // index of the first page to be displayed
								easing:             'easeInOutQuad',                 // easing method for complete transition
								easeIn:             'easeInQuad',                    // easing method for first half of transition
								easeOut:            'easeOutQuad',                   // easing method for second half of transition

								closed:             true,                           // start with the book "closed", will add empty pages to beginning and end of book
								closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
								closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
								closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
								closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
								covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

								pagePadding:        10,                              // padding for each page wrapper
								pageNumbers:        true,                            // display page numbers on each page

								hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
								overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
								tabs:               false,                           // adds tabs along the top of the pages
								tabWidth:           60,                              // set the width of the tabs
								tabHeight:          20,                              // set the height of the tabs
								arrows:             false,                           // adds arrows overlayed over the book edges
								cursor:             'pointer',                       // cursor css setting for side bar areas

								hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
								keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
								next:               $bttn_next,          			// selector for element to use as click trigger for next page
								prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

								menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
								pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
								chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

								shadows:            true,                            // display shadows on page animations
								shadowTopFwdWidth:  166,                             // shadow width for top forward anim
								shadowTopBackWidth: 166,                             // shadow width for top back anim
								shadowBtmWidth:     50,                              // shadow width for bottom shadow

								before:             function(){},                    // callback invoked before each page turn animation
								after:              function(){}                     // callback invoked after each page turn animation
							});
							Cufon.refresh();
						}
					}).attr('src',source);
				});
				
			});
        //添加笔记函数
        function add(){
        	location.href = "<?php echo url('add'); ?>";
        }
        function update(note_id){
        	location.href = "<?php echo url('update'); ?>"+'?note_id='+note_id; 
	    }
	    function del(note_id){
	    var confireM=confirm('确定删除吗?');
        if(confireM){
            location.href = "<?php echo url('del'); ?>"+'?note_id='+note_id;
        }
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