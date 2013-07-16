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
												</ul>	"; ?>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">登录</a>
									<ul class="dropdown-menu">
										<li>
											<form class="form-horizontal">
											  <div class="control-group">
												<label class="control-label" for="inputEmail" contenteditable="true">邮箱</label>
												<div class="controls">
												  <input id="inputEmail" placeholder="Email" type="text">
												</div>
											  </div>
											  <div class="control-group">
												<label class="control-label" for="inputPassword" contenteditable="true">密码</label>
												<div class="controls">
												  <input id="inputPassword" placeholder="Password" type="password">
												</div>
											  </div>
											  <div class="control-group">
												<div class="controls">
												  <button type="submit" class="btn" contenteditable="true">登陆</button>
												</div>
											  </div>
											</form>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo ($public); ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>