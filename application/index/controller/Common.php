<?php
/**
 * Created by PhpStorm.
 * user: Administrator
 * Date: 2018/11/8
 * Time: 16:29
 */

namespace app\index\controller;
use think\Controller;

class common extends Controller
{
            function _initialize()
            {
                if(session("user") == null)
                {
                    $this->error("您还没有登录，请登录后查看...",'User/index','','1');
                }
                else
                {
                    $userinfo = db('user')->find(session('userId'));
                    $this->assign('userinfo',$userinfo);
                    $userRes=db("user")->find(session("userId"));
                    $this->assign(["userRes"=>$userRes]);
                }
            }
}