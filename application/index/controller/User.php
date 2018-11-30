<?php
/**
 * Created by PhpStorm.
 * user: Administrator
 * Date: 2018/11/11
 * Time: 15:29
 */

namespace app\index\controller;
use think\Controller;

class User extends Controller
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
            $res=db("user")->where("username",'=',$data["username"])->find();
            if($res["password"] == md5($data["password"]))
            {

                session("user",$data["username"]);
                session("userId",$res["id"]);
                $this->success("登录成功~","Index/index");
            }
            else
            {

                $this->error("密码错误");
            }
        }
        return view('logins');
    }

    public function register()
    {
        if(request()->isPost())
        {
//            $captcha=new \think\captcha\Captcha();
//            $valid=$captcha->check(input('code'));//验证码是否正确
//            if(!$valid)
//            {
//                $this->error("验证码错误");
//            }
            $data = input('post.');
            $data['password']=md5($data['password']);
            unset($data['code']);
            $res=db("user")->insert($data);
            if($res)
            {
                $this->success("注册成功！正在跳转...",'User/index');
            }
            else
            {
                $this->error("注册失败！请重新尝试...");
            }
        }
        return view('registers');
    }
}