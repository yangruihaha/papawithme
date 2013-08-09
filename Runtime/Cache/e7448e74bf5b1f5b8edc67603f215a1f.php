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
			</div>	"; else ; ?>
</body>