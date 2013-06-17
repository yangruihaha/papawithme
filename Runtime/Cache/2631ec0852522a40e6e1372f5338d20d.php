<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/css/index.css" />
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery-1.10.0.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo ($public); ?>/jQuery/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/index.js"></script>

<script type="text/javascript">
		function is_empty(field,alerttxt)
		{
			with (field)
		  	{
		  		if (value==null||value=="")
		  			{alert(alerttxt);return true}
		  		else {return false}
		  	}
		}
		function check_username(field,alerttxt)
		{
			with (field)
		  	{
		  		if (value.length<5 || value.length>16)
		  			{alert(alerttxt);return false}
		  		else {return true}
		  	}
		}
		function check_email(field,alerttxt)
		{
			with (field)
		  	{
				if (value.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
					{alert(alerttxt);return false}
				else {return true}
		  	}
		}
		function check_password(field,field1,alerttxt)
		{
		  	if (field.value != field1.value)
		  		{alert(alerttxt);return false}
		  	else {return true}
		}
		function register_form(thisform)
		{
			with (thisform)
		  	{
		  		if (is_empty(username,"用户名不能为空")==true)
		    		{username.focus();return false}
		  		if (check_username(username,"用户名必须在5到16位字符之间") == false)
		  			{username.focus();return false}
		  		if (is_empty(email,"邮箱地址不能为空")==true)
		  			{email.focus();return false}
		  		if (check_email(email,"请输入正确的邮箱地址")==false)
		  			{email.focus();return false}
		  		if (is_empty(password,"密码不能为空")==true)
	    			{password.focus();return false}
		  		if (is_empty(con_password,"密码确认不能为空")==true)
		  			{con_password.focus();return false}
	  			if (check_password(password,con_password,"两次密码输入不一致") == false)
	  				{con_password.focus();return false}
	  			return true;
		  	}
		}
		function login_form(thisform)
		{
			with(thisform)
			{
				if(is_empty(user_id,"邮箱地址不能为空")==true)
					{user_id.focus();return false;}
				if(check_email(user_id,"请输入正确的邮箱地址")==false)
					{user_id.focus();return false;}
				if(is_empty(user_psd,"密码不能为空")==true)
					{user_psd.focus();return false;}
				return true;
			}
		}
</script>

<title>Papa With Me!</title>
</head>

<body>
		<div class="menu">
        	<img src="<?php echo ($public); ?>/resources/bg/logo.png" class="bg-logo" />
			<ul>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/AddFavorite.png" class="addFavorite" /></li>
                        <li><p id="addFavorite">Favorite</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/Blog.png" class="blog" /></li>
                        <li><p id="blog">Blog</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><a id="fancy_login" href="#login_box_wrapper" title="Welcome! My PaPartner"><img src="<?php echo ($public); ?>/resources/menu/login.png" class="login" /></a></li>
                        <li><p id="login">Login</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/ContactUs.png" class="contactUs" /></li>
                        <li><p id="contactUs">Contact Us</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/AboutUs.png" class="aboutUs" /></li>
                        <li><p id="aboutUs">About Us</p></li>
                    </ul>
				</li>
			</ul>
		</div>
        
        <!--Register & Login FancyBox-->
		<div id="login_box_wrapper">
			<div id="login_box">
				<div class="login_box_header">
					<h3>Login</h3>
				</div>
				<form class="login_form" method="post" action="<?php echo ($appdir); ?>/index.php/Index/Login" onsubmit="return login_form(this)">
					email   :<input name="user_id" id="user_id"><br />
                    password:<input name="user_psd" id="user_psd"><br />
					<input type="submit" value="login" class="login_form_submit">
				</form>
			</div>
		</div>
</body>
</html>