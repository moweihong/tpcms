<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
   public function index()
   {
   	 $this->display();
   }
    public function test()
    {
        echo session('mowei');
    }

    public function setSession()
    {
        session('mowei','hihi');
    }
	
	public function mowei()
	{
		$this->display('./base/foot');
	}
}