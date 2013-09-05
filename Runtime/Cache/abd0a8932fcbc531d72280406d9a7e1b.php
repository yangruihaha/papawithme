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

<script type="text/javascript">
		function buildRadarChart()
		{
			var radarChartData = {
			labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
			datasets : [
			
				{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,1)",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				data : [parseInt($("td:eq(1)").text()),
						parseInt($("td:eq(4)").text()),
						parseInt($("td:eq(7)").text()),
						parseInt($("td:eq(10)").text()),
						parseInt($("td:eq(13)").text()),
						parseInt($("td:eq(16)").text()),
						parseInt($("td:eq(19)").text())]
				}
			]

			}
			var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleOverride  : true,scaleSteps : 10, scaleStepWidth : 1, pointLabelFontSize : 10});
		}

		$(document).ready( function(){
			var free_points = parseInt($("#free-points").text());
		
			$('.icon-plus').click(function(){
				var p = parseInt($(this).parent().prev().text());
				if(free_points > 0){
					p = p + 1;
					$(this).parent().prev().text(p);
					free_points = free_points - 1;
					$("#free-points").text(free_points);
					buildRadarChart();
				}
			})
		});
</script>

</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
			</div>
				<?php
 if($attribute == null){ echo "读取八卦图数据失败，可是这怎么可能呢"; } else{ echo '
							<div class="span4">
								<table class="table table-striped">
								<tr><td>Eating</td><td>'.$attribute["atrribute0"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Drinking</td><td>'.$attribute["atrribute1"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Sleeping</td><td>'.$attribute["atrribute2"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Designing</td><td>'.$attribute["atrribute3"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Coding</td><td>'.$attribute["atrribute4"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Partying</td><td>'.$attribute["atrribute5"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>Running</td><td>'.$attribute["atrribute6"].'</td><td><i class="icon-plus"></i></td></tr>
								<tr><td>FreePoints</td><td id="free-points">'.$attribute["free_points"].'</td><td></td></tr>
								</table>
							</div>
							<div class="span3">
							<canvas id="canvas" height="300" width="300"></canvas>
							<script>
								buildRadarChart();
							</script>
							</div>
						'; } ?>
		</div>
	</div>
	
</body>

</html>