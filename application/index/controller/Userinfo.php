<?php
/**
 * Created by PhpStorm.
 * user: Administrator
 * Date: 2018/11/11
 * Time: 15:29
 */

namespace app\index\controller;
use think\Controller;

class Userinfo extends Common
{
    public function index()
    {
        //session('userid', '1', 'think');
        if (request()->isPost()) {
            $useredit = input('post.');
            if ($useredit['password']) {
                $useredit['password']=md5($useredit['password']);
            }
            else
            {
                $useredit['password']=db('user')->where('id',session('userId'))->value('password');
            }
            
            $result=db('user')->where('id',session('userId'))->update($useredit);
            
            if ($result == true || $result == 0) {
                $this->success("修改成功","Userinfo/index",'1');
            }
            else{
                $this->error("修改失败","Userinfo/index",'1');
            }
            # code...
        }
        $userinfo = db('user')->find(session('userId'));
        $this->assign('userinfo',$userinfo);
        // dump($userinfo);die;
       
        return view();
    }
    public function uploads(){

         $file = request()->file('image');
        if($file){
        $info = $file->move( 'static' . DS . 'index'.DS.'uploads');
        $url=$info->getSaveName();
         
        $a=db('user')->where('id',session('userId'))->update(['url' => $url]);
       
        }
        $userinfo = db('user')->find(session('userId'));
        $this->assign('userinfo',$userinfo);

        return view('index');
    }


   
}