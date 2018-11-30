<?php
/**
 * Created by PhpStorm.
 * user: Administrator
 * Date: 2018/11/8
 * Time: 19:05
 */

namespace app\admin\controller;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
        if (request()->isPost())
        {
            $captcha=new \think\captcha\Captcha();
            $valid=$captcha->check(input('code'));//验证码是否正确
            if(!$valid)
            {
                $this->error("验证码错误");
            }
            $data = input('post.');
            $res=db("admin")->where("username",'=',$data["username"])->find();
            if($res["password"] == md5($data["password"]))
            {
                session("user",$data["username"]);
                $this->success("登录成功~","Index/index");
            }
            else
            {
                $this->error("密码错误");
            }
        }
        return view();
    }
}