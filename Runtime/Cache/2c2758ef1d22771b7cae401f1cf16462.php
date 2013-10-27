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

<title>Welcome to Papawithme!</title>
</head>

<body>
	<?php
 if($profile == null) echo "
			<div class=\"container-fluid\">
				<div class=\"row-fluid\">
					<div class=\"span2\">
					</div>
					<div class=\"span3\">
						<h3 class=\"text-center\">
							您还没有建立自己的档案.
						</h3> <a href=\"".$appdir."/index.php/Home/editProfile\"><button class=\"btn btn-primary btn-block\" type=\"button\">现在就去</button></a>
					</div>
					<div class=\"span7\">
					</div>
				</div>
			</div>	"; else{ echo '
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span2">
					</div>
					<div class="span4">
						<dl class="dl-horizontal">'; foreach ($profile as $key=>$value) { echo '<dt>'.$key.'</dt>'; if($key != "profile_head"){ echo '<dd>'.$value.'<br /></dd>'; } else if($value != 0){ echo '<dd><img src="'.$public.'/Uploads/'.cookie('user_name').'/head/'.$value.'" class="img-rounded"><br /></dd>'; } } echo '			</dl>
						<a href="'.$appdir.'/index.php/Home/editProfile"><button class="btn btn-primary" type="button">还要美化一下资料</button></a>'; if($pre_type == 1){ echo '<a href="'.$appdir.'/index.php/Meet/checkIn/pre_type/'.$pre_type.'"><button class="btn" type="button">确定，下一步</button></a>'; } else if($pre_type > 1 and $pre_type <= 7){ echo '	<a href="'.$appdir.'/index.php/Meet/checkIn/pre_type/'.$pre_type.'/choose_type/0"><button class="btn" type="button">确定，要拜师</button></a>
					<a href="'.$appdir.'/index.php/Meet/checkIn/pre_type/'.$pre_type.'/choose_type/1"><button class="btn" type="button">确定，要收徒</button></a>'; } echo '
					</div>
					<div class="span6">
					</div>
				</div>
			</div>	
			'; }; ?>
</body>