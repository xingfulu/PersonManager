<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\xampp\htdocs\blog\public/../application/admin\view\login\login.html";i:1497506041;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>管理员登录页面</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../static/admin/css/login.css">
</head>
<body>
<div class="container myLogin">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 MyWhole">
            <div class="loginThis">
                <span>管理员登录</span>
                <form class="form-horizontal" method="post">
                    <input type="text" class="form-control LoginName" placeholder="用户名" name="admin_username">
                    <input type="password" class="form-control PassWord" id="inputPassword3" placeholder="密码" name="admin_password">
                    <input type="text" class="form-control MyCode" id="inputCode" name="code" placeholder="验证码">
                    <img class="MyCode1" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()">
                    <button class="btn btn-success btn-lg MyButton">登录</button>
                    <button class="btn btn-success btn-lg MyButton">注册</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>