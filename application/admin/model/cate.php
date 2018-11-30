<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Cate extends Model
{
	public function addadmin($data){
		if(!empty($data) && is_array($data))  //判断是否为空 是否为数组
		{

			// if(db('user')->where('uaername',$data['username'])->value('username')==null) 
			{
				
		
			// $data['password']=md5($data['password']);
			db('category')->insert($data);
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
			Db::name('category')->where('id',$id)->delete();
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
			
			
			
			db('category')->where('id',$data['id'])->update(['catename' => $data['catename'],'desc' => $data['desc']]);
			
			
		}
		else
		{
			return 2;

		}
		

	}

}


?>