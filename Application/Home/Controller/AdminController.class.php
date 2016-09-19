<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
   public function login()
   {
   		$_POST['username']='mowei';
		$_POST['pass']='123456';
   		if(!empty($_POST)&&isset($_POST))
   		{
			$res=D('User')->checkAdmin($_POST);
			//print_r($res);exit;
			if($res['code'])
			{
				 session('admin_username',$res['username']);
			}
   		}
	   	$res=D('User')->getAdmin();
		$this->display();
   }
   
}