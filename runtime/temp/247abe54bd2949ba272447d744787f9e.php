<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"C:\phpStudy\PHPTutorial\WWW\tp5\public/../application/index\view\index\subject.html";i:1542535542;s:71:"C:\phpStudy\PHPTutorial\WWW\tp5\application\index\view\common\head.html";i:1542444376;}*/ ?>
<html><head>
    <meta charset="UTF-8">
    <meta property="qc:admins" content="343472176763011162126375">
    <meta property="wb:webmaster" content="9e9e7adec3348110">
    <title>简单的登录题-实验吧</title>    <meta name="description" content="格式：flag:{xxx}">
    <meta name="baidu-site-verification" content="oGv5y9rUMv">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1">    <!-- Le styles -->


    <link href="/tp5/public/static/index/css/bootstrap.css" rel="stylesheet">
    <link href="/tp5/public/static/index/css/common_2016.css" media="screen" rel="stylesheet" type="text/css">



    <link href="/tp5/public/static/index/css/CTF_Details.css" media="screen" rel="stylesheet" type="text/css">

    <link href="/img/favicon.ico" rel="shortcut icon">

    <!-- Scripts -->
    <script src="//hm.baidu.com/hm.js?34d6f7353ab0915a4c582e4516dffbc3"></script><script type="text/javascript" async="" defer="" src="//statistics.shiyanbar.com/piwik.js"></script><script type="text/javascript" src="/tp5/public/static/index/js/lib/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/common.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/plug/jquery.validate.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/plug/messages_zh.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/plug/jquery.form.js"></script>
    <script type="text/javascript" src="/tp5/public/static/index/js/layer/layer.js"></script><link rel="stylesheet" href="http://www.shiyanbar.com/js/layer/skin/layer.css" id="layui_layer_skinlayercss" style="">
    <script type="text/javascript" src="/tp5/public/static/index/js/layer/laytpl.js"></script>
    <script src="/tp5/public/static/index/js/jquery.js"></script>

    <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "//statistics.shiyanbar.com/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setDomains', '*.shiyanbar.com']);
            _paq.push(['setSiteId', '2']);
            _paq.push(['setUserId', "103191"]);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <script src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=428287"></script><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_16.css?v=8105b07e.css"></head>

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
    $("#logout").click(function()
    {
        window.location.href="<?php echo url('Index/logout'); ?>";
    })




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
    <div class="details_main">
        <div class="details_title">
            <span>您的位置：<a href="<?php echo url('Index/index'); ?>">首页</a>&gt;<a href="<?php echo url('Index/index'); ?>">决斗场</a>> <?php echo $res['title']; ?></span>
        </div>
        <!--内容左-->
        <div class="details_main_left" style="margin-left: 15%;">
            <div class="de_mle_title">
                <h3><?php echo $res['title']; ?><span>分值：<?php echo $res['score']; ?></span></h3>
            </div>
            <!--参数-->
            <div class="de_mle_par">
                <ul>
                    <li>来源：<span>
                        实验吧</span></li>
                    <li>难度：<span><?php echo $res['level']; ?></span></li>
                    <li>参与人数：<span><?php echo $res['click']; ?>人</span></li>
                    <li>答题人数：<span><?php if($res['click'] != 0){ echo intval($res['click'] / 2);} ?></span></li>
                    <li>解题通过率：<span><?php if($res['click'] != 0){  echo  round(intval($res['click'] / 2) / $res['click'],2)*100; } ?>%</span></li>
                </ul>
            </div>
            <!--清除浮动-->
            <div style="clear: both"></div>
            <!--内容居中-->
            <div class="de_mle_con">
                <!--解题链接-->
                <div class="de_mle_link">

                    <div class="de_mle_p1"><?php echo $res['desc']; ?> <br> 格式：flag:{xxx}</div>
                    <p class="de_mle_p2" id="aaa">解题链接：
                        <a href="<?php echo $res['url']; ?> " id="">
                            <?php echo $res['url']; ?>               </a>
                        <span class="adopt" id="ok_icon" style="display:none;">通过</span>

                    </p>
                </div>
                <!--文本框-->

                <div class="de_mle_text">

                    <input class="de_mle_t" type="text" name="flag" id="key_txts"  value="">

                    <div class="verification">

                        <button id="keysubmit_btn" class="de_mle_btn key_btn" type="submit" >提 交</button>

                    </div>


                </div>
                <!--提示弹出层-->
                <div class="pop_markW" style="display:none;"><div class="pop_mark"></div></div>
                <!--回答正确时 提示-->
                <div class="popideawrap rightwrap clearfix" id="pop_key_ok" style="display:none;">
                    <div class="CloseBtn" id="CloseBtn"><button id="closeA">关闭弹出</button></div>
                    <div class="ideawrap">
                        <div class="icon rightimg"></div>
                        <div class="txt">
                            <p class="bigred">回答正确</p>
                            <p>少侠，你太棒了！！！</p>
                        </div>
                        <i class="red l" href="javascript:;">
                            公告天下
                            <div class="bdsharebuttonbox bdshare-button-style0-16" style="position: absolute;
    top: 0; left:0;width: 100%;height: 40px;overflow: hidden;" data-bd-bind="1541839514959">
                                <a class="bds_more" data-cmd="more" style="position: absolute; left:0;width: 100%;height: 40px; top:-5px;
                            filter:alpha(opacity=0); -moz-opacity:0; opacity:0;"></a>
                            </div>
                        </i>
                        <a class="cancel r" id="Bclose" href="javascript:;">默默牛×</a>
                    </div>
                </div>
                <!-- 回答错误时-->
                <div class="popideawrap wrongwrap clearfix" id="pop_key_no" style="display: none;">
                    <div class="CloseBtn" id="CloseBtnA"><button id="closeB">关闭弹出</button></div>
                    <div class="ideawrap">
                        <div class="icon wrongimg"></div>
                        <div class="txt">
                            <p class="bigred">回答错误!</p>
                            <div>
                                <p>继续思考一下哦，少侠</p>
                            </div>
                        </div>
                        <i class="red l" href="javascript:;">
                            求助好友
                            <div class="bdsharebuttonbox bdshare-button-style0-16" style="position: absolute;top: 0; left:0;width: 100%;height: 40px;overflow: hidden;" data-bd-bind="1541839514959">
                                <a class="bds_more" data-cmd="more" style="position: absolute; left:0;width: 100%;height: 40px; top:-5px;filter:alpha(opacity=0); -moz-opacity:0; opacity:0;">
                                </a>
                            </div>
                        </i>
                        <a class="cancel r" href="javascript:;" id="Aclose">死磕到底</a>
                    </div>
                </div>

                <input type="hidden" id="suID" value="<?php echo $res['id']; ?>" >
                <input type="hidden" id="userId" value="<?php echo \think\Request::instance()->session('userId'); ?>" >

                <!--判断答案正误-->
                <script>





                    $(document).ready(function() {
                        $("#keysubmit_btn").click(function(){
                            $.ajax({
                                type: "POST",
                                url: "<?php echo url('Index/ajax'); ?>",
                                data: {
                                    id:$("#suID").val(),
                                    answer: $("#key_txts").val(),
                                    userId:$("#userId").val(),
                                },
                                dataType: "json",
                                success: function(data){
                                    if (data.msg == 1) {


                                        $("#pop_key_ok").show();

                                    } else {

                                        $("#pop_key_no").show();
                                    }
                                },
                                error: function(jqXHR){
                                    alert("发生错误：" + jqXHR.status);
                                },
                            });
                        });
                    });

                    $(".CloseBtn").click(function()
                    {
                        $("#pop_key_no").hide();
                        $("#pop_key_ok").hide();
                    })

                    $("#Aclose").click(function(){
                        $("#pop_key_no").hide();
                        $("#pop_key_ok").hide();
                    })

                    $("#Bclose").click(function(){
                        $("#pop_key_no").hide();
                        $("#pop_key_ok").hide();
                    })
                </script>


                <!--判断答案正误-->






                <!--<form action="<?php echo url('Index/comment'); ?>" method="post">-->
                <div class="de_mle_comment">
                    <label>评论</label>
                    <textarea id="txtcomment" name="comment" rows="" cols="" placeholder="请遵守实验吧相关发言规则，切勿在评论、文章中发表不适当的言论以及各类题目的答案" id="comment_content"></textarea>
                </div>
                    <input type="hidden" value="<?php echo \think\Request::instance()->session('userId'); ?>" name="userid">
                <div style="clear: both"></div>
                <div class="de_mle_com">
                    <!--                <input type="text">
                                    <span><img src="/images/ctf/right_pic.png" alt=""></span>-->
                    <button class="de_mle_com_btn" type="submit" id="comment_btn">提交评论</button>
                </div>
                <!--</form>-->



                <script>



                    $(document).ready(function(){
                        $("li.active span").css("margin-right","10px").css("margin-left","10px");
                        $("li.active").removeClass();
                        $("#comment_btn").click(function(){
                            $.ajax({
                                type:"POST",
                                url: "<?php echo url('Index/comment'); ?>",
                                data: {
                                    uid:"<?php echo \think\Request::instance()->session('userId'); ?>",
                                    comment:$("#txtcomment").val(),
                                },
                                dataType: "json",
                                success:function(data){
                                    window.location.replace("<?php echo url('Index/subject'); ?>");
                                    if(data.success())
                                    {


                                    }
                                    else
                                    {
                                        alert("评论失败，请重试");
                                    }
                                },

                                error: function(jqXHR){
                                    alert("发生错误：" + jqXHR.status +$("#key_txts").val());
                                },

                            })
                        })
                    })
                </script>








                <!--评论列表-->
                <!--评论-->
                <div class="de_mle_topic_main" id="comment_list_ul">
                    <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="de_mle_topic">                 <!--头像-->
                        <a href="" target="_blank">
                            <div class="de_mle_topic_head">
                                <img src="/tp5/public/static/index/uploads/<?php echo $vo['url']; ?> ">
                                <div class="topic_title" student_id="170137"><?php echo $vo['username']; ?></div>
                            </div>    </a>                 <!--文本内容-->
                        <div class="topic_text">
                            <p><?php echo $vo['comment']; ?></p>
                        </div>
                        <div class="topic_text_time">
                            <span><?php echo date("Y年m月d日",$vo['time']); ?></span>
                            <span class="text_reply" parent_id="30900" student_id="170137" student_name="jelly_zy">

                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <?php echo $comment->render(); ?>
        </div>
        <script id="commentlist_script" type="text/html">
            {{# for(var i =0,len = d.paginator.length;i<len;i++){ }}
            <div class="de_mle_topic_title" Comment_id="{{ d.paginator[i].CommentID }}">
                <div class="de_mle_topic">
                    <!--头像-->
                    <a href="/user/studentcourse/{{ d.paginator[i].uuid }}" target="_blank">
                        <div class="de_mle_topic_head">
                            {{# if(d.paginator[i]['RoleType']==2){ }}
                            <div class="plus x" title="学霸"></div>
                            {{# } }}
                            {{# if(d.paginator[i]['RoleType']==6){ }}
                            <div class="plus g" title="官方教师"></div>
                            {{# } }}
                            <img src="{{ d.paginator[i].Image }}" />
                            <div class="topic_title" student_id="{{ d.paginator[i].StudentID }}">{{ d.paginator[i].NickName }}</div>
                        </div>
                    </a>
                    <!--文本内容-->
                    <div class="topic_text">
                        <p>{{ d.paginator[i].Content }}</p>
                    </div>
                    <div class="topic_text_time">
                        <span>{{ d.paginator[i].CommentTime }}</span>

                        {{# if(d.paginator[i].StudentID==103191 || ''==1 ){ }}
                        <span class="text_del" comment_id="{{ d.paginator[i].CommentID }}" onclick="delete_comment($(this),'1',{{ d.paginator[i].StudentID }})">删除</span>
                        {{# } }}

                        <span class="text_reply" parent_id="{{ d.paginator[i].CommentID }}" student_id="{{ d.paginator[i].StudentID }}" student_name='{{ d.paginator[i].NickName }}'><img src="/images/ctf/huifu.png" />回复</span>
                    </div>
                </div>

                <div style="clear: both"></div>
                <!--回复标题-->
                <div class="de_mle_reply">
                    {{# if(d.paginator[i].ReplyList.length>0){ }}
                    <ul>
                        {{# for(var r=0,rlen=d.paginator[i].ReplyList.length;r<rlen;r++){ }}
                        <li class='sub_item_reply'>
                            <!--回复标题头像-->
                            <a href="/user/studentcourse/{{ d.paginator[i].ReplyList[r].uuid }}"  title="{{ d.paginator[i].ReplyList[r].NickName }}" target="_blank">
                                <div class="de_mle_topic_head">
                                    {{# if(d.paginator[i].ReplyList[r]['RoleType']==2){ }}
                                    <div class="plus x" title="学霸"></div>
                                    {{# } }}
                                    {{# if(d.paginator[i].ReplyList[r]['RoleType']==6){ }}
                                    <div class="plus g" title="官方教师"></div>
                                    {{# } }}

                                    <img src="{{ d.paginator[i].ReplyList[r].Image }}" />
                                    <div class="topic_title" student_id="{{ d.paginator[i].ReplyList[r].StudentID }}">{{ d.paginator[i].ReplyList[r].NickName }}</div>
                                </div>
                            </a>
                            <!--回复标题内容-->
                            <div class="topic_text">
                                {{# if(d.paginator[i].ReplyList[r].ToStudentID != null){ }}
                                <span class="reply">回复:{{ d.paginator[i].ReplyList[r].ToStudentName }}</span>
                                {{# } }}
                                <p>{{ d.paginator[i].ReplyList[r].Content }}</p>
                            </div>
                            <div class="topic_text_time">
                                <span>{{ d.paginator[i].ReplyList[r].CommentTime }} </span>
                                {{# if(d.paginator[i].ReplyList[r].StudentID==103191 || ''==1 ){ }}
                                <span class="text_del" comment_id="{{ d.paginator[i].ReplyList[r].CommentID }}" onclick="delete_comment($(this),'2',{{ d.paginator[i].ReplyList[r].StudentID }})">删除</span>
                                {{# } }}
                                <span class="text_reply" parent_id="{{ d.paginator[i].ReplyList[r].CommentID }}" student_id='{{ d.paginator[i].ReplyList[r].StudentID }}' student_name='{{ d.paginator[i].ReplyList[r].NickName }}'><img src="/images/ctf/huifu.png" />回复</span>
                            </div>
                        </li>
                        {{# } }}
                    </ul>
                    {{# } }}

                    <div class="de_mle_release" style='display:none;'>
                        <a href="/user/studentcourse/A5999323294E22" target="_blank">
                            <div class="de_mle_topic_head">
                                <img src="http://www.shiyanbar.com/images/user_head/user_head6.png" />
                                <div class="topic_title">人生如戏</div>
                            </div>
                        </a>
                        <!--发布-->
                        <div class="de_mle_release_tex">
                            <textarea name="" rows="" cols=""></textarea>
                        </div>
                        <!--清除浮动-->
                        <div style="clear: both"></div>
                        <div class="de_mle_release_btn">
                            <input type="hidden" class="comment_main_parent_id" value="">
                            <input type="hidden" class="comment_parent_id" value="">
                            <input type="hidden" class="comment_to_student_id" value="">
                            <button class="release_btn release_btn1 cancel-btn" type="submit">取消</button>
                            <button class="release_btn release_btn2 replay-btn" type="submit">确定</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
            {{# } }}
        </script>



        <script id="writeup_temp" type="text/html">
            {{# if(d.paginator.length>0){ }}
            <ul>
                {{# for(var i=0,len=d.paginator.length;i<len;i++){ }}
                <li>
                    <a href="javascript:;" onclick="write_up_look({{ d.paginator[i]['ID'] }})">
                        <b>{{# if(d.paginator[i]['IsBest']=='1'){ }}<img src="/images/ctf/right_pic.png" />{{# } }}</b>{{ d.paginator[i]['Title'] }}
                    </a>
                    <strong><a href="/user/studentcourse/{{ d.paginator[i]['uuid'] }}" target="_blank">{{ d.paginator[i]['NickName'] }}</a></strong>
                    <span>{{ d.paginator[i]['CreateTime'] }}</span>
                </li>
                {{# } }}
            </ul>
            {{# if(d.paginator_previous || d.paginator_next){ }}
            <div class="details_main_right_list_next">

            </div>
<!--footermain-->
<div class="footer-container clearfix">
    <div class="page-main">
        <p><a href="/about/aboutus">关于我们</a>|<a href="/about/contactus">联系我们</a>|<a href="/about/talentrecruit">加入我们</a>|<a href="/about/recruit">成为讲师</a>|<a href="/about/friend-link">友情链接</a>
            <span>意见反馈：pm@shiyanbar.com</span> <span>客服电话：010-82327658-8012</span></p>

        <p>地址：北京市海淀区中关村互联网教育创新中心南侧一号</p>

        <p class="copyright">Copyright © 2017 shiyanbar.com | 北京西普阳光教育科技股份有限公司 保留所有权利 京ICP备14052538号-4<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020740" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/images/beian.png" style="float:left;">京公网安备 11010802020740号</a></p>
    </div>

</div>

<!--footermain end-->


<ul class="fixedTips" id="fixedTips">
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

