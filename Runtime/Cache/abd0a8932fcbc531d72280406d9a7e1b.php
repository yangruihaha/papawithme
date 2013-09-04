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
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
				<?php
 if($attribute == null){ echo "读取八卦图数据失败，可是这怎么可能呢"; } else{ echo '
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
									data : ['.$attribute["atrribute0"].',
											'.$attribute["atrribute1"].',
											'.$attribute["atrribute2"].',
											'.$attribute["atrribute3"].',
											'.$attribute["atrribute4"].',
											'.$attribute["atrribute5"].',
											'.$attribute["atrribute6"].']
									}
								]

								}
								var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleOverride  : true,scaleSteps : 10, scaleStepWidth : 1, pointLabelFontSize : 10});
							</script>
							</div>
							<div class="span4">
								<table class="table table-striped">
								<tr><td>Eating</td><td>'.$attribute["atrribute0"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Drinking</td><td>'.$attribute["atrribute1"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Sleeping</td><td>'.$attribute["atrribute2"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Designing</td><td>'.$attribute["atrribute3"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Coding</td><td>'.$attribute["atrribute4"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Partying</td><td>'.$attribute["atrribute5"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Running</td><td>'.$attribute["atrribute6"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>FreePoints</td><td>'.$attribute["free_points"].'</td><td></td></tr>
								</table>
							</div>
						'; } ?>
		</div>
	</div>

</body>

</html>