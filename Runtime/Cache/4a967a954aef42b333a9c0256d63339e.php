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
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/jquery.form.min.js"></script>

<script type="text/javascript">		
		$('#register_form').ajaxForm({
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

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div class="span6">
				<form class="form-horizontal" id="register_form" method="post" action="<?php echo ($appdir); ?>/index.php/Index/register">
					<div class="control-group">
						 <label class="control-label" for="inputName">用户名</label>
						<div class="controls">
							<input name="user_name" id="inputName" type="text" />
						</div>
					</div>
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
						 <label class="control-label" for="inputPasswordCheck">重复密码</label>
						<div class="controls">
							<input name="user_psd_check" id="inputPasswordCheck" type="password" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div id="res_text" style="display:none;"></div>
							<button type="submit" class="btn">注册</button>
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