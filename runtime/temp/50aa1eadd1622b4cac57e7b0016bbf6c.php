<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\userinfo\index.html";i:1542511071;s:71:"C:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\head.html";i:1542444376;}*/ ?>
<html><head>
    <meta charset="UTF-8">
    <meta property="qc:admins" content="343472176763011162126375">
    <meta property="wb:webmaster" content="9e9e7adec3348110">
    <title>个人主页-个人中心</title>    <meta name="baidu-site-verification" content="oGv5y9rUMv">
<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">    <!-- Le styles -->
 <link id="beyond-link" href="/tp5/public/static/index/style/beyond.css" rel="stylesheet">
    <link href="/tp5/public/static/index/css/common_2016.css" media="screen" rel="stylesheet" type="text/css">
<link href="/tp5/public/static/index/css/personal_center.css" media="screen" rel="stylesheet" type="text/css">
<link href="/img/favicon.ico" rel="shortcut icon">
    <!-- Scripts -->
   

<script type="text/javascript" src="/tp5/public/static/index/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#edit").click(function(){
                $("#userinfo").toggle();
            });
             $("#save").click(function(){
                $("#userinfo").toggle();
            });
             $("#account").hide();
             $("#switch").click(function(){
                $("#account").toggle();
                $("#userinfo").toggle();
                $("#index").attr("class","null");
                $("#accountEdit").attr("class","hover");
             });
              $("#index").click(function(){
                $("#account").toggle();
                $("#userinfo").toggle();
                $("#index").attr("class","hover");
                $("#accountEdit").attr("class","null");
             });

        })
    </script>
</head>

<body>
<div class="nav-fixed">
    <div class="navContent" id="navContent">
        <img src="/tp5/public/static/index/images/logoa.jpg">
        <!--<span class="navLogo"><a href="/"></a></span>-->
        <ul class="nav" id="nav">
            <li><a href="<?php echo url('Index/index'); ?>">课程</a></li>
            <li class="cur"><a href="<?php echo url('Userinfo/index'); ?>">个人中心</a></li>
            <li><a href="javascript:;">问答</a></li>
            <li><a href="http://www.usaas.net" target="_blank">U-SaaS</a></li>
        </ul>
        <!--已登录begin-->
        <div class="loginedCol">
            <ul class="logined clearfix">
                <li class="my_message">
                    <a href="javascript:;" title="我的消息" target="_self">
                        <i class="msg_icon" style="display: inline;">25</i>
                        <span class="msg_txt" style="display: block;">我的消息</span>
                    </a>
                </li>
                <li><a href="#" style="color:#016ab5;">积分：<?php echo $userRes['score']; ?></a>
                </li>
                <li class="my_card">
                    <a id="myCard" class="text-ellipsis" href="#" target="_self">
                        <img src="<?php if($userRes['url'] != ''): ?>/tp5/public/static/index/uploads/<?php echo $userRes['url']; else: ?> http://www.shiyanbar.com/images/user_head/user_head6.png<?php endif; ?>" width="24" height="24">

                        <span style="text-overflow:ellipsis;white-space: nowrap;width:60px;"><?php echo \think\Request::instance()->session('user'); ?>    </span>
                          <span id="logout">退出登录</span>
                    </a>


                </li>

            </ul>
        </div>
        <!-- 已登录显示end -->

    </div>
</div>
<script>
    $("#logout").click(function()
    {
        window.location.href="<?php echo url('Index/logout'); ?>";
    })

</script>
<!-- nav end -->
<script>
    $(function () {
        //导航菜单效果
        $("#navContent #nav li").each(function (index) {
            var navhref = $(this).children("a").attr("href");
            var pathname = window.location.pathname;
            if (pathname.indexOf(navhref) > -1) {
                $(this).addClass('cur');
                $(this).siblings('li').removeClass('cur');
                return false;
            }
        });
    })
</script>
<div class="container">
    <div class="container_con">
    <div class="container_left">
    <div class="container_left_top">
        <div class="head_portrait">
            <span>
                                
                <img src="/tp5/public/static/index/uploads/<?php echo $userinfo['url']; ?>">
            </span>         
            <p><?php echo $userinfo['username']; ?></p>
        </div>
        <div class="container_left_list">
            <ul>
                    <li class="hover" id="index"><a><span class="list_pic1"></span><strong>个人主页</strong></a></li>
                    <li class="" id="accountEdit"><a><span class="list_pic2"></span><strong id="switch">头像设置</strong></a></li>
                   
                        <!--绑定院校荟信息-->
                        <!--select search-->
                        <link rel="stylesheet" href="/css/space/select2.css">
                        <script src="/js/select2.js"></script>                      
                        <script src="/js/select2-zh-CN.js"></script>
                        
                        
                              

                                                
                                   
                </ul>
            </div>
        </div>
        <!--左侧下部分-->
        
    </div>


    
    <div class="container_right" id="useredit">
       
        <div class="container_right_data">
        <div id="userinfo">
         <h3>
                            <a href="#" class="edit_btn" id="edit"><span></span>编辑</a>
                        <i></i>个人主页
        </h3>
            <ul class="edit_xixin">
                <li><strong>用户名：</strong><span><?php echo $userinfo['username']; ?></span></li>
                 <li><strong>班级：</strong><span><?php echo $userinfo['class']; ?></span></li>
                <li><strong>性别：</strong><span><?php echo $userinfo['sex']; ?></span></li>
                <li><strong>积分：</strong><span><?php echo $userinfo['score']; ?></span></li>
                <li><strong>密码:</strong><span>xxx</span></li>
                
            </ul>
        </div>
       
            <form id="myset_form" action="<?php echo url('index'); ?>" method="post" class="edit_show" style="display: none;" novalidate="novalidate">
                <div class="information">
                    <label for="">用户名：</label>
                    <input id="t_NickName" class="name" type="text" name="username" value="<?php echo $userinfo['username']; ?>">
                </div>
                
                <div class="information">
                    <label for="">班级：</label>
                   <input id="t_NickName" class="name" type="text" name="class" value="<?php echo $userinfo['class']; ?>">
                </div>
                <div class="information">
                    <label for="">分数：</label>
                   <input id="t_NickName" class="name" type="text" name="score" value="<?php echo $userinfo['score']; ?>">
                </div>
                <div class="information">
                    <label for="">性别：</label>
                   <input id="t_NickName" class="name" type="text" name="sex" value="<?php echo $userinfo['sex']; ?>">
                </div>
                <div class="information">
                    <label for="">密码：</label>
                   <input id="t_NickName" class="name" type="text" name="password" value="">
                   
                </div>
                
                
                <div class="btn">
                    <input  type="submit" value="保存" class="cancel-btn" id="save">
                   
                </div>
            </form>
       

        </div>
        
    </div>
     
    <div class="container_right set_up" id="account">
        <h3><i></i>头像设置</h3>

       <form method="post" action="<?php echo url("userinfo/uploads"); ?>" enctype="multipart/form-data">
       <div style="text-align:center">
            <span><img src="/tp5/public/static/index/uploads/<?php echo $userinfo['url']; ?>" alt="" width="200px"></span>
            <div>
                <input style="width:100px;height:30px;margin-top:10px;margin-left:17px" type="file" name="image" type=""/> <br> 
                <button class="btn btn-primary" type="submit" style="width:100px;height:30px;margin-top:10px;margin-left:10px">点击上传</button>
                
                <p><h2>支持jpg、png、bmp、gif图片文件，文件小于2M</h2></p>
                <br><br>
            </div>
        </div>
      </form>
        <!--登录密码-->
        <!-- <div class="sign_in_password sign_in_ok">
            <h4><a href="#" class="modify_password_btn">修改密码</a>登录密码</h4>
            <div class="modify_password" style="display: none;">
                <form action="/user/resetpwddata" method="post" name="form1" id="reset_pwd_form" novalidate="novalidate">
                    <div class="new_modify">
                        <label for="">请输入当前密码：</label>
                        <input placeholder="请输入当前密码" id="t_PasswordOld" name="PasswordOld" type="password">
                        <p></p>
                    </div>
                    <div class="new_modify">
                        <label for="">请输入新密码：</label>
                        <input placeholder="请输入新密码" id="reset_new_pwd" name="Password" type="password">
                        <p></p>
                    </div>
                    <div class="new_modify">
                        <label for="">请确认新密码：</label>
                        <input placeholder="请确认新密码" class="reg_input" type="password" id="t_RePass" name="PasswordAgain">
                        <p></p>
                    </div>
                    <div class="btn">
                        <input id="button" type="submit" value="保存" class="cancel-btn">
                        <a href="javascript: ;" class="replay-btn modify_btn">取消</a>
                    </div>
                </form>

            </div>

            
          


        </div> -->
    </div>
</div>
<script type="text/javascript">
    var nowpage = 1;
    function MessageList(page){
        var ToUserID =  '103191'; //主页所有人的id
        var url = '/user/messagelist';
        $.ajax({
            dataType: 'JSON', //数据类型
            type: "POST",
            url: url,
            data:{page:page,touserid:ToUserID},
            beforeSend:function(XMLHttpRequest){
                var moreload='<div id="loader"><img src="/images/loaded.gif" style="margin:200px auto;width:60px;display:block;"></div>';
                $(".reply-list").html( moreload);
            },
            success: function (data) {
                $(".reply-list").find("#loader").remove();
                if(data.paginator.length>0){
                    var gettpl = $("#message").html();
                    laytpl(gettpl).render(data, function(html){
                        $(".reply-list").append(html);//渲染
                    });
                    var pagelink =getPaginatorRedirect(data,'MessageList');
                    $("#cc").html(pagelink);
                    nowpage = page;
                }else{
                    $(".reply-list").html("<div class='no-course'><p><img src='/images/icon-nothing.png'></p><p>他还没有留言</p></div>");
                }
            }
        });
    }
    //关闭当前回复框
   
    
    function chackUserLogin (){
        var IsLogin = '1';
        if (IsLogin == 0){
             window.location.href = "http://passport.shiyanbar.com/login?return_url=http%3A%2F%2Fwww.shiyanbar.com%2Fuser%2Finfo";
            return 0;
        } else{
            return 1;
        }
    }

    $(function(){
        $(".edit_btn").click(function(){
            $(".edit_xixin").css("display","none");
            $(".edit_show").css("display","block");
        });
        $(".replay-btn").click(function(){
            $(".edit_xixin").css("display","block");
            $(".edit_show").css("display","none");
            $(".direction_span").css("display", "none");
            $('#myset_form')[0].reset();
            $('#myset_form span.error').hide();
            $(".direction span").remove();
            formatTag();
        });

        var str = ""; //模拟数据库返回的标签字符串
        var originalStr = str;
        var labelArr = [];

        Array.prototype.remove = function(val) {
            var index = this.indexOf(val);
            if (index > -1) {
                this.splice(index, 1);
            }
        };

        formatTag();

        /*删除标签*/
        $(".direction span").live("click", "b", function() {
            $(this).remove();
            labelArr.remove($(this).find("i").html());
            str = labelArr.join(",");
            //console.log(str)
            if($(".direction span").length < 8){   //一旦标签个数小于8个就讲提示语隐藏
                $(".direction_span").css("display", "none");
            }
        })

        function formatTag(){
            str = originalStr;
            labelArr = str.split(',');
            if(str!=""){
                for(var i = 0; i < labelArr.length; i++) {
                    $(".direction .inp").before(function() {
                        return "<span><i>" + labelArr[i] + "</i><b>X</b></span>";
                    });
                }
            }
        }

        function addTag(html) {
            if ($(".direction span").length >= 8) {
                $(".direction_span").css("display", "block");
                return false;
            }

            if (!html) {
                return false;
            }

            if (labelArr.indexOf(html) > -1) {
                return false;
            }

            $(".direction_span").css("display", "none");
            $(".direction .inp").before(function() {
                return "<span><i>" + html + "</i><b>X</b></span>";
            });

            labelArr.push(html);
            str = labelArr.join(",")
            return true;
        }


        /*点击添加标签*/
        $(".direction_ol ol li").on("click", function() {
            var html = $(this).html();
            addTag(html)
        })
        /*回车添加标签*/
        $(".direction").bind("click",function(){
            $(".inp").focus();
        })
        $(document).keydown(function(event) {
            if(event.keyCode == 13) {
                event.preventDefault();
                var html = $(".inp").val();
                html=html.replace(/^ +| +$/g,'');//判断输入的标签不能有空格

                addTag(html);
                $(".inp").val("");

                //console.log(str)
            }
        });

        $("#myset_form").validate({
            rules: {
                NickName: {
                    required: true,
                    minlength: 1,
                    maxlength:20,
                    //远程地址只能输出 "true" 或 "false"，不能有其他输出。
                    remote: {
                        url: "/user/checknickname",
                        type: "post",
                        dataType: "json",
                        data: {
                            NickName: function () {
                                return $("#t_NickName").val();　　　　//这个是取要验证的用户名
                            }
                        },
                    }  ,
                },
                Name: {
                    required: true,
                    minlength: 2,
                    maxlength:6,
                },
                InvitationCode:{
                    maxlength:6,
                },
                School:{
                    maxlength:30,
                },
                CompanyName:{
                    maxlength:30,
                }
            },
            errorPlacement: function(error, element) {
                $( element ).after( error );
            },

            errorElement: "span",
            messages: {
                NickName: {
                    required: "请设置您的用户名",
                    remote: $.validator.format("您设置的用户名已存在"),
                },
//                Name: {
//                    required: "请输入您的真实姓名",
//                    minlength: "请输入您的真实姓名",
//                },
            },
            submitHandler: function(form)
            {
                // 设置标签值
                //var s=str.substring(0,str.length-1)
                $('#tags').val(str);

                $(form).ajaxSubmit({
                    dataType:"json",
                    success:function(data) {
                        layer.alert(data.msg);
                        // layer.alert(data.msg);
                        if( data.code == "001"){
                            location.reload();
                        }
                    }
                });
            } ,
        });

    });

    


</script></div>
<!--footermain-->


<!--footermain end-->


<ul class="fixedTips" id="fixedTips" style="opacity: 0; right: -115px;">
    <li><a href="javascript:;" id="toTop">置顶</a></li>
    <li><a target="_blank" href="/about/feed-back">反馈</a></li>
    <li><a href="http://shang.qq.com/wpa/qunwpa?idkey=e54b73a920f74055adc972931d742e0126412a95313c08188258b2fbb7cd02cc" target="_blank">QQ</a></li>
</ul>




<script>
    var _hmt = _hmt || [];
    (function () {
        _hmt.push(['_setCustomVar', 1, 'visitor', '103191,nickName:人生如戏', 1]);
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?34d6f7353ab0915a4c582e4516dffbc3";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body></html>