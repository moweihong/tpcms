<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
   public function index()
   {
   	 $res=D('User')->getAdmin();
	 echo $res;
   }
   
}