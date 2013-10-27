<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/plugin/sidebar/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/plugin/sidebar/css/component.css" />
<script src="<?php echo ($public); ?>/plugin/sidebar/js/modernizr.custom.js"></script>

 <!-- Bootstrap -->
<link href="<?php echo ($public); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
body{
	padding-top:60px
}
</style>

<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/Chart.min.js"></script>


<title>Welcome to Papawithme!</title>
</head>

<body background="<?php echo ($public); ?>/resources/bg/bg.png">
<div class="container-fluid">
	<div class="row-fluid">
		<div id="st-container" class="st-container">
				<!-- 	
					example menus 
					these menus will be on top of the push wrapper
				-->
			<div class="span2">
			<nav class="st-menu st-effect-1" id="menu-1">
				<ul>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
				</ul>
			</nav>
			
			<nav class="st-menu st-effect-2" id="menu-2">
				<ul>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
					<li><a  href="#">任务</a></li>
				</ul>
			</nav>
			
			<!-- content push wrapper -->
			<div class="st-pusher">
				<!-- 	
					example menus 
					these menus will be under the push wrapper
				-->
				<nav class="st-menu st-effect-3" id="menu-3">
					<ul>
						<li><a  href="#">任务</a></li>
						<li><a  href="#">任务</a></li>
						<li><a  href="#">任务</a></li>
						<li><a  href="#">任务</a></li>
						<li><a  href="#">任务</a></li>
						<li><a  href="#">任务</a></li>
					</ul>
				</nav>
			</div>
			</div>
			
			<!-- content push wrapper -->
			<div class="st-pusher">
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->	
						<div class="main clearfix">
							<h2>完成任务，获得成长点数</h2>
							<div id="st-trigger-effects" class="column">
								<button data-effect="st-effect-1">获取任务</button>
								<button data-effect="st-effect-2">获取任务</button>
								<button data-effect="st-effect-3">获取任务</button>
							</div>
						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<script src="<?php echo ($public); ?>/plugin/sidebar/js/classie.js"></script>
		<script src="<?php echo ($public); ?>/plugin/sidebar/js/sidebarEffects.js"></script>
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
						<div class="btn-toolbar">
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/1"><button class="btn">想请客的男生</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/2"><button class="btn">想被约的女生</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/3"><button class="btn">想请客的女博士</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/1"><button class="btn">登记</button></a>
						</div>
						</div>
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
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/4"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/5"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/2"><button class="btn">登记</button></a>
						</div>
					</div>
					<div class="accordion-inner">
						产品& 交互
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/6"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/7"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/3"><button class="btn">登记</button></a>
						</div>
					</div>
					<div class="accordion-inner">
						编程, iPhone
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/8"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/9"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/4"><button class="btn">登记</button></a>
						</div>
					</div>
					<div class="accordion-inner">
						设计, PS
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/10"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/11"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/5"><button class="btn">登记</button></a>
						</div>
					</div>
					<div class="accordion-inner">
						编程, Android
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/12"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/13"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/6"><button class="btn">登记</button></a>
						</div>
					</div>
					<div class="accordion-inner">
						编程, 游戏
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/14"><button class="btn">想拜师</button></a>
							<a href="<?php echo ($appdir); ?>/index.php/Meet/browse/type/15"><button class="btn">想收徒</button></a>
						</div>
						<div class="btn-group">
							<a href="<?php echo ($appdir); ?>/index.php/Meet/preCheckIn/pre_type/7"><button class="btn">登记</button></a>
						</div>
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
			<img class="img-polaroid"  src="<?php echo ($public); ?>/resources/user_sample.jpg" />
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span6">
			<img class="img-polaroid"  src="<?php echo ($public); ?>/resources/user_sample2.jpg" />
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