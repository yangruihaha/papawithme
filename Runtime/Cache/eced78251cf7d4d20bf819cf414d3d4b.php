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

<title>Welcome to Papawithme!</title>
</head>

<body>
<div class="container-fluid">

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div class="span6">
				<form class="form-horizontal" id="profile_form" enctype="multipart/form-data" method="post" action="<?php echo ($appdir); ?>/index.php/Home/updateProfile">
					<div class="control-group">
						 <label class="control-label" for="profile_name">真实姓名</label>
						<div class="controls">
							<input name="profile_name" id="profile_name" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_motto">座右铭</label>
						<div class="controls">
							<input name="profile_motto" id="profile_motto" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_head">头像</label>
						<div class="controls">
							<input name="profile_head" id="profile_head" type="file" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_skill">技能</label>
						<div class="controls">
							<input name="profile_skill" id="profile_skill" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_hobby">爱好</label>
						<div class="controls">
							<input name="profile_hobby" id="profile_hobby" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_now">感情状态</label>
						<div class="controls">
							<input name="profile_now" id="profile_now" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_department">院系</label>
						<div class="controls">
							<input name="profile_department" id="profile_department" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_birthday">生日</label>
						<div class="controls">
							<input name="profile_birthday" id="profile_birthday" type="text" />
						</div>
					</div>
					<div class="control-group">
						 <label class="control-label" for="profile_autobiography">自我评价</label>
						<div class="controls">
							<input name="profile_autobiography" id="profile_autobiography" type="text" />
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div id="res_text" style="display:none;"></div>
							<button type="submit" class="btn">提交</button>
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