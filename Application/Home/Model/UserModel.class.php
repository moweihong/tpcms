<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
	protected $tableName='user_admin';
	
    public function getAdmin()
    {
    	echo  111111111;
    }
	
	public function checkAdmin($data)
	{
		$res=$this->where("user_name='".$data['username']."'")->find();
		if($res)
		{
			if($res['pass']==$data['password'])
			{
				$result['code']=1;
				$result['mess']='success';
				$result['username']=$data['username'];
			}
			else
			{
				$result['code']=0;
				$result['mess']='pass is error';
				$result['username']='';
			}
			
		}
		else
		{
			$result['code']=0;
			$result['mess']='username is not esixt';
			$result['username']='';
		}
		return $result;
	}
   
}

?>