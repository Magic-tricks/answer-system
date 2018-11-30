<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\subject as subjectModel;


class Subject extends Common
{
    public function index()
    {
    		
        return view();
    }
    public function Lst()
    {
    	$data=db('Subject')->order('id')->paginate(8);

    	
    	 $this->assign([
            'data' => $data,
        ]);
    	return view('lst');
    }
    public function Add(){
    	if(request()->isPost()){
    		$data = input('post.');
            
    		$subjectModel = new subjectModel;
    		$result=$subjectModel->addadmin($data);	//接受模型输出参数1 为正确
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','subject/lst','',1);

    		}
    		elseif ($result == 3) {
    			return $this->success('管理员名字重复，正在为您跳转...','subject/add','',1);
    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','subject/lst','',1);

    		}

    	}
        $cateName=db('category')->select();
        
    	return $this->fetch('add',['cateName'=>$cateName]);	

    }
    public function Del(){
    	$id=input('id');
    	$subjectModel = new subjectModel;
    	$result = $subjectModel->delAdmin($id);
    	if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','subject/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','subject/lst','',1);

    		}

    }
    public function Edit(){
    	if(request()->isPost())
    	{
    		$data = input('post.');
    		
    		$subjectModel = new subjectModel;
    		$result = $subjectModel->editAdmin($data);
    		if($result == 1)
    		{
    			return $this->success('操作成功，正在为您跳转...','subject/lst','',1);

    		}
    			
    		else
    		{
    				return $this->success('操作失败，正在为您跳转...','subject/lst','',1);

    		}

    	}

    	$id=input('id');
    	$map['id'] = $id;
    	$subjectData=db('subject')->where('id',$id)->find();
         $cateName=db('category')->select();
        
        $this->assign('cateName',$cateName);
    	return $this->fetch('edit',['subjectData'=>$subjectData]);
       


    }
}
