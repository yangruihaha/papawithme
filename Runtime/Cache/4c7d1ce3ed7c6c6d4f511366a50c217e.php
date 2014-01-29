<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/css/general.css" />

<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

<link href="http://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
<style>
body{
	padding-top:60px
}
</style>
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery.form.min.js"></script>

<script type="text/javascript">	
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
<div class="container">
	
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<section class="loginBox">
				<p>login or sign up</p>
				<div class="form-group col-md-10 col-md-offset-1 inputBox">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
			    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
			  	</div>
			  	<div class="form-group col-md-10 col-md-offset-1 btnBox">
			  		<button type="submit" class="form-control btn btn-primary">Let's go</button>
			  	</div>
			  	<div class="form-group">
				  	<small>Opps! I forgot my password</small>
				  	<div class="line_05">————————————————<span class="circle">or</span>—————————————————</div>
				</div>
				<div class="col-md-6 col-md-offset-1 btnBox">
			  		<button type="submit" class="form-control btn btn-primary">sign up or with</button>
			  	</div>
			</section>


		<!---
			<form class="form-horizontal" id="login_form" method="post" action="<?php echo ($appdir); ?>/index.php/Index/Login">
				<div class="control-group">
					 <label class="control-label" for="inputEmail">邮箱</label>
					<div class="controls">
						<input name="user_email" id="inputEmail" type="email" required="required" />
					</div>
				</div>
				<div class="control-group">
					 <label class="control-label" for="inputPassword">密码</label>
					<div class="controls">
						<input name="user_psd" id="inputPassword" type="password" required="required" />
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div id="res_text" style="display:none;"></div>
						<button type="submit" class="btn">登陆</button>
					</div>
				</div>
			</form>
		-->
		</div>
		<div class="col-md-4">
		</div>
	</div>
	
</div>

</body>
</html>