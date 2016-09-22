<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mowei-tpcms</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="/Public/home/assets/css/styles.css" />
        <script type="text/javascript" src="/Public/home/js/jquery-1.6.min.js"></script>
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<div id="formContainer">
			<form id="login" method="post" action="02.php">
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
				<input type="text" name="username" id="loginUser" placeholder="Admin" />
				<input type="password" name="pass" id="loginPass" placeholder="pass" />
				<input id='adminLogin' type="submit" name="submit" value="Login" />
			</form>
			<form id="recover" method="post">
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</form>
		</div>

        <footer>
	        <h2><i>Mowei:</i> Tp-cms Login Form With CSS 3D Technology</h2>
            <a class="tzine" href="">When a cigarette <i>falls in<b> love</b></i> with a match,it is destined to be hurt.</a>
        </footer>
        
        <!-- JavaScript includes -->
		<script src="/Public/home/assets/js/script.js"></script>
		<script>
		    $('#adminLogin').click(function(){
		    	var username=$('#loginUser').val();
		    	var pass=$('#loginPass').val();
		    	$.post('/admin/login',{'username':username,'pass':pass},function(data)
		    	{
		    		var data=eval('('+data+')');
		    		if(data.code==0)
		    		{
		    			alert(data.message);
		    		}
		    		else
		    		{
		    			window.location.href='/index/index'
		    		}
		    	})
		    	
		    })
		</script>
    </body>
</html>