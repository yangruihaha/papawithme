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

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/Chart.min.js"></script>

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
					<div class="span3">
						<dl class="dl-horizontal">'; foreach ($profile as $key=>$value) { echo '<dt>'.$key.'</dt>'; if($key != "profile_head"){ echo '<dd>'.$value.'<br /></dd>'; } else if($value != 0){ echo '<dd><img src="'.$public.'/Uploads/'.cookie('user_name').'/head/'.$value.'" class="img-rounded"><br /></dd>'; } } echo '			</dl>
						<a href="'.$appdir.'/index.php/Home/editProfile"><button class="btn btn-primary btn-block" type="button">编辑</button></a>
					</div>
					<div class="span3">
						<canvas id="canvas" height="300" width="300"></canvas>
						<script>

							var radarChartData = {
							labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
							datasets : [
							
								{
								fillColor : "rgba(151,187,205,0.5)",
								strokeColor : "rgba(151,187,205,1)",
								pointColor : "rgba(151,187,205,1)",
								pointStrokeColor : "#fff",
								data : ['.$attribute["attribute0"].',
										'.$attribute["attribute1"].',
										'.$attribute["attribute2"].',
										'.$attribute["attribute3"].',
										'.$attribute["attribute4"].',
										'.$attribute["attribute5"].',
										'.$attribute["attribute6"].']
								}
							]

							}
							var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleOverride  : true,scaleSteps : 10, scaleStepWidth : 1, pointLabelFontSize : 10});
						</script>	
						<a href="'.$appdir.'/index.php/Home/editAttribute"><button class="btn btn-primary btn-block" type="button">加点(还剩'.$attribute["free_points"].'点可加)</button></a>
					</div>
					<div class="span4">
					</div>
				</div>
			</div>	
			'; }; ?>
</body>