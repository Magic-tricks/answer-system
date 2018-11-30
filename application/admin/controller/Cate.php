<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\cate as cateModel;


class Cate extends Common
{
    public function index()
    {
    		
        return view();
    }
    public function Lst()
    {
    	$data=db('category')->order('id')->paginate(8);
    	
    	 $this->assign([
            'data' => $data,
        ]);
    	return view();
    }
    public function Add(){
    	if(request()->isPost()){
    		$data = input('post.');

    		$cateModel = new cateModel;
    		$result=$cateModel->addadmin($data);	//接受模型输出参数1 为正确
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','cate/lst','',1);

    		}
    		elseif ($result == 3) {
    			return $this->success('管理员名字重复，正在为您跳转...','cate/add','',1);
    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','cate/lst','',1);

    		}

    	}
    	return $this->fetch('add');	

    }
    public function Del(){
    	$id=input('id');
    	$cateModel = new cateModel;
    	$result = $cateModel->delAdmin($id);
    	if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','cate/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','cate/lst','',1);

    		}

    }
    public function Edit(){
    	if(request()->isPost())
    	{
    		$data = input('post.');
    		
    		$cateModel = new cateModel;
    		$result = $cateModel->editAdmin($data);
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','cate/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','cate/lst','',1);

    		}

    	}

    	$id=input('id');
    	$map['id'] = $id;
    	$cateData=db('category')->where('id',$id)->find();
       
    	return $this->fetch('edit',['cateData'=>$cateData]);
       


    }
}
