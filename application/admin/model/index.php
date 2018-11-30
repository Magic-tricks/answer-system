<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Index extends Model
{
	public function addadmin($data){
		if(!empty($data) && is_array($data))  //判断是否为空 是否为数组
		{

			// if(db('user')->where('uaername',$data['username'])->value('username')==null) 
			{
				
		
			$data['password']=md5($data['password']);
			db('user')->insert($data);
			//Db::name('bc_admin')->insert($data);

			return 1 ;
			}
			// else
			{
				//添加管理员重名
				return 3 ;
			}
			

		}
		else 
		{
			//添加数据失败
			return 2 ;
		}

	}
	public function delAdmin($id)
	{
		if (!empty($id)) {
			Db::name('user')->where('id',$id)->delete();
			return 1;
		}
		else
		{
			return 2;

		}

	}
	public function editAdmin($data)
	{
		if(!empty($data) && is_array($data)){
			
			
			if ($data['password'] != '') {	//判断密码是否为空  是空则保留原密码 否则就存入新密码
				$data['password']=md5($data['password']);
				db('user')->where('id',$data['id'])->update(['username' => $data['username'],'password' => $data['password'],"score"=>$data["score"]]);
				
			return 1;
			}
			else
			{
				$data['password']=md5($data['password']);
                db('user')->where('id',$data['id'])->update($data);
			return 1;
			}
			
		}
		else
		{
			return 2;

		}
		

	}

}


?>