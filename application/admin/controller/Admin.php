<?php
/**
 * Created by PhpStorm.
 * user: Administrator
 * Date: 2018/11/8
 * Time: 16:49
 */

namespace app\admin\controller;
use think\Controller;

class Admin extends Common
{
    public function lst()
    {
        $adminres=db("admin")->paginate(8);
        $this->assign('adminres',$adminres);
        return view();
    }

    public function add()
    {
        if(request()->isPost())
        {
            $data=input("post.");
            $data["password"]=md5($data["password"]);
            $result=db("admin")->insert($data);
            if($result)
            {
                $this->success("添加管理员成功","Admin/lst");
            }
            else
            {
                $this->error("添加管理员失败");
            }
        }
        return view();
    }

    public function edit($id)
    {
        $data=db("admin")->where("id",'=',$id)->find();
        if(request()->isPost())
        {
            $dataUpdate = input("post.");
            $dataUpdate["password"]=md5($dataUpdate["password"]);
            $res = db("admin")->where("id", '=', $id)->update($dataUpdate);
            if ($res)
            {
                $this->success("修改密码成功","Admin/lst");
            }
            else
            {
                $this->error("修改密码失败");
            }
        }
        $this->assign('data',$data);
        return view();
    }

    public function del($id)
    {
        $res=db("admin")->where("id",$id)->delete();
        if($res)
        {
            $this->success("删除成功","Admin/lst");
        }
        else
        {
            $this->error("删除失败");
        }
    }

    public function logout()
    {
        session(null);
        $this->success("退出登录成功~",'Login/index');
    }
}