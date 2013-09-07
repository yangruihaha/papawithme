<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?php echo ($public); ?>/css/index.css" />
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="<?php echo ($public); ?>/jQuery/index.js"></script>
<title>Papa With Me!</title>
</head>

<body>
		<div class="menu">
        	<img src="<?php echo ($public); ?>/resources/bg/logo.png" class="bg-logo" />
			<ul>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/AddFavorite.png" class="addFavorite" /></li>
                        <li><p id="addFavorite">Favorite</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/Blog.png" class="blog" /></li>
                        <li><p id="blog">Blog</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><a id="fancy_login" href="<?php echo ($appdir); ?>/index.php/Home" title="Welcome! My PaPartner"><img src="<?php echo ($public); ?>/resources/menu/login.png" class="login" /></a></li>
                        <li><p id="login">Login</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><img src="<?php echo ($public); ?>/resources/menu/ContactUs.png" class="contactUs" /></li>
                        <li><p id="contactUs">Contact Us</p></li>
                    </ul>
				</li>
				<li class="menu-li">
                	<ul>
						<li><a href="__URL__/intro"><img src="<?php echo ($public); ?>/resources/menu/AboutUs.png" class="aboutUs" /></a></li>
                        <li><p id="aboutUs">About Us</p></li>
                    </ul>
				</li>
			</ul>
		</div>
</body>
</html>