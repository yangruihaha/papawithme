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
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
			<div class="span3">
			<form method="post" action="<?php echo ($appdir); ?>/index.php/Meet/updateCheckIn/type/<?php echo ($type); ?>">
				<?php
 for($i = 0; $i < count($attach_info)-2; $i++){ $index_attach_info = "attach_info".$i; $index_attach = "attach".$i; if($attach_info[$index_attach_info] != null) echo'
								<div class="control-group">
									<label class="control-label" for="attach0">'.$attach_info[$index_attach_info].'</label>
									<div class="controls">
										<textarea name="attach0" id="attach0" rows="3">'.$meeting[$index_attach].'</textarea>
									</div>
								</div>
								'; } ?>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">完成</button>
				</div>
			  </div>
			</form>
			</div>
			<div class="span7">
			</div>
		</div>
	</div>	
</body>