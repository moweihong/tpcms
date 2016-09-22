<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
   public function __construct()
   {
   		parent::__construct();
		$admin_username=session('admin_username');
		echo $admin_username;
   		if(empty($admin_username))
   		{
   			echo '请先登录';exit;
   		}
   }
}