<?php if (!defined('THINK_PATH')) exit();?>	<div class="row-fluid">
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
								<?php
 if (session('name')!=null){ echo '
											<li>
												<a href='.$appdir.'/index.php/Home/profile>我</a>
											</li>
											'; } ?>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									<?php
 if (session('name')!=null) echo "	<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">".session('name')."</a>
												<ul class=\"dropdown-menu\">
													<li>
														<a href=\"".$appdir."/index.php/Home/Logout\">登出</a>
													</li>
												</ul>	"; else echo "	<li>
													<a href=\"".$appdir."/index.php/Home/login\">登录</a>
												</li>	
												<li>
													<a href=\"".$appdir."/index.php/Home/register\">注册</a>
												</li>	"; ?>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</div>