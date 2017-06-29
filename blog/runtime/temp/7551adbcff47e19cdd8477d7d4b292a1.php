<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\xampp\htdocs\blog\public/../application/admin\view\camera\camera.html";i:1498269057;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery相册动画效果</title>
<link rel="stylesheet" type="text/css" href="../../static/admin/css/index.css">
<link rel="stylesheet" type="text/css" href="../../static/admin/css/bootstrap.min.css">
<script src="../../static/admin/js/index.js"></script>
</head>
<body>
  <div class="container">
    <div style="position: absolute;" onclick="back()">
		<img src="../../static/admin/img/back.png">
	</div>
	<div style="position: absolute;right: 0" onclick="add()">
		<img src="../../static/admin/img/add.png">
	</div>
	<div id="diapoContainer">
	
	<?php if(is_array($field) || $field instanceof \think\Collection): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
		<img class="imgsrc" alt="<?php echo $vo['photo_alt']; ?>" src="../../static/admin/img/photo/<?php echo $vo['photo_pic']; ?>" />
		<button class="btn btn-danger btn-xs" onclick="del(<?php echo $vo['photo_id']; ?>)">删除</button>
	<?php endforeach; endif; else: echo "" ;endif; ?>
		<div id="bkgcaption"></div>
		<div id="caption"></div>
	</div>
	</div>
</body>
<script type="text/javascript">
	function back(){
		location.href="<?php echo url('admin/entry/index'); ?>";
	}
	function add(){
		location.href="<?php echo url('admin/camera/add'); ?>";
	}
	function del(photo_id){
		var confireM=confirm('确定删除吗?');
        if(confireM){
            location.href = "<?php echo url('del'); ?>"+'?photo_id='+photo_id;
        }
	}
</script>
</html>
