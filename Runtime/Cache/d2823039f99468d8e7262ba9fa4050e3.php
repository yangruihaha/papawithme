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

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo ($public); ?>/bootstrap/js/bootstrap.min.js"></script>

<title>Welcome to Papawithme!</title>
</head>

<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-target=".navbar-responsive-collapse" data-toggle="collapse"></a> <a class="brand" href="#">PapaWith.Me!</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li class="active">
									<a href="#">遇</a>
								</li>
								<li>
									<a href="#">文</a>
								</li>
								<li>
									<a href="#">告</a>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li>
									<a href="#">人</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									<?php
 if (session('id')!=0) echo "	<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">".session('name')."</a>
												<ul class=\"dropdown-menu\">
													<li>
														<a href=\"".$appdir."/index.php/Home/Logout\">登出</a>
													</li>
												</ul>	"; else echo "	<li>
													<a href=\"".$appdir."/index.php/Home/login\">登录</a>
												</li>	
												<li>
													<a href=\"#\">注册</a>
												</li>	"; ?>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span2">
		</div>
		<div class="span6">
			<div class="accordion" id="accordion2">
			<div class="accordion-group">
			<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
				周末， 我想约个人
			</a>
			</div>
			<div id="collapseOne" class="accordion-body collapse">
			<div class="accordion-inner">
				看电影
			</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				其实我想，拜师学艺
			</a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
			<div class="accordion-inner">
				编程，网站
			</div>
			<div class="accordion-inner">
				产品& 交互
			</div>
			</div>
			</div>
			<div class="accordion-group">
			<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				找个时间， 聊聊学习
			</a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
			<div class="accordion-inner">
				高数
			</div>
			<div class="accordion-inner">
				C++
			</div>
			</div>
			</div>
			</div>
		</div>
		<div class="span4">
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<canvas id="canvas" height="500" width="500"></canvas>
			<script>

				var radarChartData = {
				labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
				datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
					},
					{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
				]

				}
				var myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
			</script>			
		</div>
		<div class="span6">
			<img class="img-polaroid"  src="<?php echo ($public); ?>/styles/user_sample.jpg" />
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<img class="img-polaroid"  src="<?php echo ($public); ?>/styles/user_sample2.jpg" />
		</div>
		<div class="span6">
			<canvas id="canvas1" height="500" width="500"></canvas>
			<script>

				var radarChartData = {
				labels : ["Eating","Drinking","Sleeping","Designing","Coding","Partying","Running"],
				datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [35,89,30,91,46,65,66]
					},
					{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [100,8,55,100,6,100,13]
				}
				]

				}
				var myRadar = new Chart(document.getElementById("canvas1").getContext("2d")).Radar(radarChartData,{scaleShowLabels : false, pointLabelFontSize : 10});
			</script>			
		</div>
	</div>
	
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo ($public); ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>