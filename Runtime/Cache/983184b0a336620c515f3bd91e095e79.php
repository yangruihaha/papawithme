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
		
		//把table中的数据填入form input标签中
		function buildForm(){
			for(i=0; i<$("td").length; i=i+3){
				$("td:eq("+(i+2)+") input").val(parseInt($("td:eq("+(i+1)+")").text()));
			}
		}

		$(document).ready( function(){
			var free_points = parseInt($("#free-points").text());
			
			buildForm();
			//处理加点事件
			$('.icon-plus').click(function(){
				var p = parseInt($(this).parent().prev().text());
				if(free_points > 0){
					p = p + 1;
					$(this).parent().prev().text(p);
					free_points = free_points - 1;
					$("#free-points").text(free_points);
					buildForm();
					buildRadarChart();//同步雷达图显示
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
							<form method="post" action="'.$appdir.'/index.php/Home/updateAttribute">
								<table class="table table-striped">
								<tr><td>Eating</td><td>'.$attribute["attribute0"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute0" style="display:none" /></td></tr>
								<tr><td>Drinking</td><td>'.$attribute["attribute1"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute1" style="display:none" /></td></tr>
								<tr><td>Sleeping</td><td>'.$attribute["attribute2"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute2" style="display:none" /></td></tr>
								<tr><td>Designing</td><td>'.$attribute["attribute3"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute3" style="display:none" /></td></tr>
								<tr><td>Coding</td><td>'.$attribute["attribute4"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute4" style="display:none" /></td></tr>
								<tr><td>Partying</td><td>'.$attribute["attribute5"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute5" style="display:none" /></td></tr>
								<tr><td>Running</td><td>'.$attribute["attribute6"].'</td><td><i class="icon-plus"></i><input type="text" name="attribute6" style="display:none" /></td></tr>
								<tr><td>FreePoints</td><td id="free-points">'.$attribute["free_points"].'</td><td><input type="text" name="free_points" style="display:none" /></td></tr>
								</table>
								<button class="btn" type="submit">确定</button>
								<a href="'.$appdir.'/index.php/Home/editAttribute"><button class="btn btn-primary" type="button">重置</button></a>
							</form>
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