<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" type="text/css" href="/Public/home/css/style.css" />
<script type="text/javascript" src="/Public/home/js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="/Public/home/js/index.js"></script>
<style>
table {
 border-collapse: collapse; 
 margin-top: 20px;
} 
table td,th{
    border:1px solid bisque;
}
.usertable
{
	background: darkgrey;
}
.bodycont
{
	
}
</style>
</head>

<body>
<div class="nav-top">
	<span>个人后台管理系统</span>
    <div class="nav-topright">
    	<p>上次登陆时间：2015-04-15 22:33:50   登陆IP：192.168.1.1</p>
        <span>您好：管理员</span><span>注销</span>
    </div>
</div>
<div class="nav-down">
	<div class="leftmenu1">
        <div class="menu-oc"><img src="/Public/home/images/menuall.png" /></div>
    	<ul>
        	<li>
            	<a class="a_list a_list1">全局设置</a>
                <div class="menu_list menu_list_first">
                	<a class="lista_first" href="#">基本设置</a>
                    <a href="#">其他设置</a>
                    <a href="#">界面风格</a>
                    <a href="#">系统工具</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list2">权限管理</a>
                <div class="menu_list">
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list3">新闻管理</a>
                <div class="menu_list">
                	<a href="#">新闻中心</a>
                    <a href="#">添加新闻</a>
                    <a href="#">修改新闻</a>
                    <a href="#">删除新闻</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list3">新闻管理</a>
                <div class="menu_list">
                	<a href="#">新闻中心</a>
                    <a href="#">添加新闻</a>
                    <a href="#">修改新闻</a>
                    <a href="#">删除新闻</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="leftmenu2">
    	<div class="menu-oc1"><img src="/Public/home/images/menuall.png" /></div>
        <ul>
        	<li>
            	<a class="j_a_list j_a_list1"></a>
                <div class="j_menu_list j_menu_list_first">
                	<span class="sp1"><i></i>全局设置</span>
                	<a class="j_lista_first" href="#">基本设置</a>
                    <a href="#">其他设置</a>
                    <a href="#">界面风格</a>
                    <a href="#">系统工具</a>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list2"></a>
                <div class="j_menu_list">
                	<span class="sp2"><i></i>权限管理</span>
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list3"></a>
                <div class="j_menu_list">
                	<span class="sp3"><i></i>权限管理</span>
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
        </ul>
        
    </div>
    
	 <div class="rightcon">
    	<div class="right_con" style="margin-left: 50px;">
        	<table class="usertable">
        		<button id='addUser'>新增</button>
        		<th width="15%">id</th>
        		<th width="15%">用户名</th>
        		<th width="15%">所属组</th>
        		<th width="15%">拥有模块</th>
        		<th width="30%"> 创建时间</th>
        		<th>操作</th>
        		
        		<tr style="text-align: center;">
        			<td>1</td>
        			<td>mowei</td>
        			<td>1</td>
        			<td>1</td>
        			<td>2016-09-18 22:47:10</td>
        			<td><button>删除</button> <button>编辑</button></td>
        		</tr>
        	</table>
        </div>
    </div>

</div>
</body>
</html>

	<script>
		$('#addUser').click(function(){
			alert(11111);
		})
	</script>>