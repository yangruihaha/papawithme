<?php
	class InstallAction extends Action{
			public function index() {
				header("Content-type: text/html; charset=utf-8"); 
				echo "Papawithme installing...<br />";
				$model = M();
				$model->execute("drop table if exists `papawithme`.`think_user`;");
				$model->execute("CREATE  TABLE `papawithme`.`think_user` (
					  `user_id` INT NOT NULL AUTO_INCREMENT ,
					  `user_name` VARCHAR(45) NOT NULL ,
					  `user_psd` VARCHAR(45) NOT NULL ,
					  `user_email` VARCHAR(145) NOT NULL ,
					  PRIMARY KEY (`user_id`) ,
					  UNIQUE INDEX `user_name_UNIQUE` (`user_name` ASC) ,
					  UNIQUE INDEX `user_psd_UNIQUE` (`user_psd` ASC) ,
					  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC) 
					  );");
				$model->execute("INSERT INTO `papawithme`.`think_user` (`user_name`, `user_psd`, `user_email`) VALUES ('root', 'papawithme~', 'root@papawith.me');");
				
				$model->execute("drop table if exists `papawithme`.`think_user_profile`;");
				$model->execute("
					CREATE TABLE IF NOT EXISTS `think_user_profile` (
					  `profile_id` bigint(20) NOT NULL AUTO_INCREMENT,
					  `user_name` varchar(45) NOT NULL,
					  `profile_name` varchar(45) NOT NULL,
					  `profile_motto` varchar(145) DEFAULT NULL,
					  `profile_head` varchar(45) DEFAULT NULL,
					  `profile_skill` varchar(145) DEFAULT NULL,
					  `profile_hobby` varchar(145) DEFAULT NULL,
					  `profile_now` varchar(25) DEFAULT NULL,
					  `profile_department` varchar(145) DEFAULT NULL,
					  `profile_birthday` date DEFAULT NULL,
					  `profile_autobiography` tinytext,
					  PRIMARY KEY (`profile_id`),
					  UNIQUE KEY `user_name` (`user_name`)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
				");

			
					
				$User = M('User');
				$rs = $User->select();
				echo "管理员账户信息：";
				print_r($rs[0]);
			}
		}