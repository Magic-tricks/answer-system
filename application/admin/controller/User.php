<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\index as indexModel;


class User extends Common
{
    public function index()
    {
    		
        return view();
    }
    public function lst()
    {
    	$data=Db::name('user')->order('id')->paginate(8);
    	
    	 $this->assign([
            'data' => $data,
        ]);
    	return view('lst');
    }
    public function add(){
    	if(request()->isPost()){
    		$data = input('post.');
    		$indexModel = new indexModel;
    		$result=$indexModel->addadmin($data);	//接受模型输出参数1 为正确
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','user/lst','',1);

    		}
    		elseif ($result == 3) {
    			return $this->success('管理员名字重复，正在为您跳转...','user/add','',1);
    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','user/lst','',1);

    		}

    	}
    	return $this->fetch('add');	

    }
    public function del(){
    	$id=input('id');
    	$indexModel = new indexModel;
    	$result = $indexModel->delAdmin($id);
    	if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','user/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','user/lst','',1);

    		}

    }
    public function edit(){
    	if(request()->isPost())
    	{
    		$data = input('post.');
    		
    		$indexModel = new indexModel;
    		$result = $indexModel->editAdmin($data);
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','user/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','user/lst','',1);

    		}

    	}

    	$id=input('id');
    	$map['id'] = $id;
    	$userData=db('user')->where('id',$id)->find();
       
    	return $this->fetch('edit',['userData'=>$userData]);
       


    }
}
