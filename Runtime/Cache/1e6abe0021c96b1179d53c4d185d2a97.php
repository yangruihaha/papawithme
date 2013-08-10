<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/css/index.css" />
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery-1.10.2.min.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo ($public); ?>/jQuery/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/index.js"></script>

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery.form.min.js"></script>

<script type="text/javascript">
		$(document).ready(function() {
            $("#login_form").validate();
        });
		
		$('#login_form').ajaxForm({
			beforeSubmit:  checkForm,  // 表单提交执行前检测
			success:       complete,  // 表单提交后执行函数
			dataType: 'json'
		});
		function checkForm(){

		}
		function complete(data){
			if(data.status==1){
				$('#res_text').html(data.info).show();
				window.location.href='<?php echo ($appdir); ?>/index.php/Home';
			}else{
				$('#res_text').html(data.info).show();
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
						<li><a href="__URL__/intro"><img src="<?php echo ($public); ?>/resources/menu/AboutUs.png" class="aboutUs" /></a></li>
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
				<form id="login_form" method="post" action="<?php echo ($appdir); ?>/index.php/Index/Login">
					email   :<input name="user_email" id="user_email" class="required email"><br />
                    password:<input name="user_psd" id="user_psd" type="password" class="required"><br />
                    <div id="res_text" style="display:none;"></div>
					<input type="submit" value="login" class="login_form_submit">
				</form>
			</div>
		</div>
</body>
</html>