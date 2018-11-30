<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/admin\view\login\index.htm";i:1541676644;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>欢迎登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://localhost/tp5/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://localhost/tp5/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://localhost/tp5/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
<div class="login-container animated fadeInDown">
    <form action="" method="post">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-textbox">
                <input value="admin" class="form-control" placeholder="username" name="username" type="text">
            </div>
            <div class="loginbox-textbox">
                <input class="form-control" placeholder="password" name="password" type="password">
            </div>
            <div class="loginbox-textbox">
                <input style="width:100px;float:left;" class="form-control" placeholder="验证码" name="code" type="text">
                <img style="float:left;cursor:pointer" width="120px" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()">
            </div>
            <br>
            <div class="loginbox-submit" style="margin-top: 10px" >
                <input class="btn btn-primary btn-block" value="Login" type="submit">
            </div>
        </div>
        <div class="logobox">
            <h4><p class="text-center">实验答题管理系统</p></h4>
        </div>
    </form>
</div>
<!--Basic Scripts-->
<script src="http://localhost/tp5/public/static/admin/style/jquery.js"></script>
<script src="http://localhost/tp5/public/static/admin/style/bootstrap.js"></script>
<script src="http://localhost/tp5/public/static/admin/style/jquery_002.js"></script>
<!--Beyond Scripts-->
<script src="http://localhost/tp5/public/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>