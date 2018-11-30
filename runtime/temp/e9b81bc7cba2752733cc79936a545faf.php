<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\user\logins.html";i:1542546635;}*/ ?>
﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta property="qc:admins" content="343472176763011162126375" />
        <meta property="wb:webmaster" content="9e9e7adec3348110" />
        <title>登录实验吧</title>
        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">
        <!-- Le styles -->
        <link href="/tp5/public/static/index/Css/common_2016123.css" media="screen" rel="stylesheet" type="text/css">
<link href="/tp5/public/static/index/Css/login_interface123.css" media="screen" rel="stylesheet" type="text/css">
<link href="/favicon.ico" rel="shortcut icon">
        <!-- Scripts -->
          <script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery.min.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery.validate.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/Scripts/messages_zh.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/Scripts/jquery.form.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/Scripts/layer.js"></script>
<script type="text/javascript" src="/tp5/public/static/index/Scripts/common_register.js"></script>  

    </head>
    <body>    
       <div class="nav-fixed">
    <div class="navContent" id="navContent">
        <img src="/tp5/public/static/index/images/logoa.jpg">
    </div>
</div>
<!-- nav end -->
<div class="user_login_main" >
    <div class="user_login_main_con">
        <div class="user_login_form">
			

		
     

<h3>用户登录</h3>
<form action="<?php echo url('User/index'); ?>" method="post" class="formbox" >
    <div class="input_main">
        <label class="mailbox"><em></em></label>
        <input class="input_txt" name="username" id="t_UserName" type="text" placeholder="请输入用户名">
    </div>
    <p></p>
    <div class="input_main">
        <label class="password"><em></em></label>
        <input class="input_txt " name="password" id="t_UserPass1" type="password" placeholder="请输入密码">
    </div>
    <p></p>
        <div class="input_main hidden" id="verificationCaptcha">
            <label class="verification"><em></em></label>
            <input class="input_txt " name="code"  type="text" placeholder="请输入验证码...">
            <img style="vertical-align:bottom;float:left;margin-top: 27px" width="120px" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/>
        </div>
        <p></p>

    <div style="clear: both"></div>
    <input name="button" type="submit" value="登录" class="button" id="button">
</form>
    </div>
</div>
</div>

        
           




        <div style="clear: both;"></div>
<!--footermain-->
<div class="footer-container clearfix">
    <div class="page-main">
        <p><a href="#">关于我们</a>|<a href="#">联系我们</a>|<a href="#">加入我们</a>|<a href="#">成为讲师</a>|<a href="#">友情链接</a>
            <span>意见反馈：service@simpleware.com.cn</span> <span>客服电话：010-82327658-8085</span></p>
        <p>地址：北京市海淀区中关村互联网教育创新中心南侧一号</p>
        <p class="copyright">Copyright © 2016 shiyanbar.com | 北京西普阳光教育科技股份有限公司 保留所有权利 京ICP备14052538号-4<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020740" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="Picture/beian.png" style="float:left;"/>京公网安备 11010802020740号</a></p>
    </div>

</div>
        
           </body>
</html>
