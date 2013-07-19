<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap -->
<link href="<?php echo ($public); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
body{
	padding-top:60px
}
</style>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo ($public); ?>/bootstrap/js/bootstrap.min.js"></script>
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
<title>Welcome to Papawithme!</title>
</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-target=".navbar-responsive-collapse" data-toggle="collapse"></a> <a class="brand" href="#">PapaWith.Me!</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="#">遇</a>
								</li>
								<li>
									<a href="#">文</a>
								</li>
								<li>
									<a href="#">告</a>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li>
									<a href="#">人</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									<?php
 if (session('id')!=0) echo "	<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">".session('name')."</a>
												<ul class=\"dropdown-menu\">
													<li>
														<a href=\"".$appdir."/index.php/Home/Logout\">登出</a>
													</li>
												</ul>	"; else echo "	<li>
													<a href=\"".$appdir."/index.php/Home/login\">登录</a>
												</li>	
												<li>
													<a href=\"#\">注册</a>
												</li>	"; ?>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div class="span6">
				<form class="form-horizontal" id="login_form" method="post" action="<?php echo ($appdir); ?>/index.php/Index/Login">
					<div class="control-group">
						 <label class="control-label" for="inputEmail">邮箱</label>
						<div class="controls">
							<input name="user_email" id="inputEmail" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="inputPassword">密码</label>
						<div class="controls">
							<input name="user_psd" id="inputPassword" type="password" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div id="res_text" style="display:none;"></div>
							<button type="submit" class="btn">登陆</button>
						</div>
					</div>
				</form>
			</div>
			<div class="span4">
			</div>
		</div>
	</div>
	
</div>

</body>
</html>