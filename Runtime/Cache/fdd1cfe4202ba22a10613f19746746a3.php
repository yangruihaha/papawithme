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
 if($pre_type == 1){ echo'
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span2">
					</div>
					<div class="span3">
					<form method="post" action="'.$appdir.'/index.php/Meet/updateCheckIn/pre_type/'.$pre_type.'">
					  <div class="control-group">
						<label class="control-label" for="attach0">想遇见怎样的人 , 一起去看电影呢 ?</label>
						<div class="controls">
						  <textarea name="attach0" id="attach0" rows="3"></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="attach1">你心目中经典的电影有 ? 为什么 ?</label>
						<div class="controls">
						  <textarea name="attach1" id="attach1" rows="3"></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="attach2">假如你是制片人 , 会拍什么 ?</label>
						<div class="controls">
						  <textarea name="attach2" id="attach2" rows="3"></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="attach3">你喜欢的演员、导演和代表作是 ?</label>
						<div class="controls">
						  <textarea name="attach3" id="attach3" rows="3"></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="attach4">写几句让你印象深刻的台词 ?</label>
						<div class="controls">
						  <textarea name="attach4" id="attach4" rows="3"></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="attach5">哪些电影片段 , 让你情不自禁 ?</label>
						<div class="controls">
						  <textarea name="attach5" id="attach5" rows="3"></textarea>
						</div>
					  </div>
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
			'; } ?>
</body>