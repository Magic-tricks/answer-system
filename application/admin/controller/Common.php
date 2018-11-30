<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize()
    {
        if(session("user")==null)
        {
            $this->error("您尚未登录，请登录后查看~","Login/index");
        }
    }
}