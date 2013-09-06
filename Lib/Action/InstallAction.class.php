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
					  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
					  ");
				echo 'think_user 创建完成 <br>';
				$model->execute("INSERT INTO `papawithme`.`think_user` (`user_name`, `user_psd`, `user_email`) VALUES ('root', 'papawithme~', 'root@papawith.me');");
				echo '管理员信息已添加！<br>';
				
				$model->execute("drop table if exists `papawithme`.`think_user_profile`;");
				$model->execute("
					CREATE TABLE IF NOT EXISTS `think_user_profile` (
					  `profile_id` bigint(20) NOT NULL AUTO_INCREMENT,
					  `user_name` varchar(45) NOT NULL,
					  `profile_name` varchar(45) NOT NULL,
					  `profile_sex` varchar(45) NOT NULL,
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
					) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
				");
				echo 'user_profile 创建成功！<br>';

				$model->execute("drop table if exists `papawithme`.`think_meeting`;");
				$model->execute("
					CREATE TABLE `papawithme`.`think_meeting` (
					  `meeting_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
					  `type` SMALLINT UNSIGNED NOT NULL,
					  `user_name` VARCHAR(45) NOT NULL,
					  `attach0` TEXT,
					  `attach1` TEXT,
					  `attach2` TEXT,
					  `attach3` TEXT,
					  `attach4` TEXT,
					  `attach5` TEXT,
					  PRIMARY KEY (`meeting_id`),
					  UNIQUE INDEX `Index_c`(`type`, `user_name`)
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				echo 'meeting 创建成功！<br>';
				
				$model->execute("drop table if exists `papawithme`.`think_user_attribute`;");
				$model->execute("
					CREATE TABLE `papawithme`.`think_user_attribute` (
					  `attribute_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
					  `user_name` VARCHAR(45) NOT NULL,
					  `attribute0` TINYINT DEFAULT 1,
					  `attribute1` TINYINT DEFAULT 1,
					  `attribute2` TINYINT DEFAULT 1,
					  `attribute3` TINYINT DEFAULT 1,
					  `attribute4` TINYINT DEFAULT 1,
					  `attribute5` TINYINT DEFAULT 1,
					  `attribute6` TINYINT DEFAULT 1,
					  `free_points` TINYINT DEFAULT 5,
					  PRIMARY KEY (`attribute_id`),
					  UNIQUE KEY `user_name` (`user_name`)
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				echo 'user_attribute 创建成功！<br>';
				
				$model->execute("drop table if exists `papawithme`.`think_meeting_attach_info`;");
				$model->execute("
					CREATE TABLE `papawithme`.`think_meeting_attach_info` (
					  `attach_info_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
					  `type` SMALLINT UNSIGNED NOT NULL,
					  `attach_info0` VARCHAR(45) NOT NULL,
					  `attach_info1` VARCHAR(45) NOT NULL,
					  `attach_info2` VARCHAR(45) NOT NULL,
					  `attach_info3` VARCHAR(45) NOT NULL,
					  `attach_info4` VARCHAR(45) NOT NULL,
					  `attach_info5` VARCHAR(45) NOT NULL,
					  PRIMARY KEY (`attach_info_id`),
					  UNIQUE KEY `user_name` (`type`)
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				
				/*初始化attach的一些说明信息*/
				$MeetingAttachInfo = M('MeetingAttachInfo');
				$data['attach_info0'] = "想遇见怎样的人 , 一起去看电影呢 ?";
				$data['attach_info1'] = "你心目中经典的电影有 ? 为什么 ?";
				$data['attach_info2'] = "假如你是制片人 , 会拍什么 ?";
				$data['attach_info3'] = "你喜欢的演员、导演和代表作是 ?";
				$data['attach_info4'] = "写几句让你印象深刻的台词 ?";
				$data['attach_info5'] = "哪些电影片段 , 让你情不自禁 ?";
				$data['type'] = 1;
				if($MeetingAttachInfo->add($data)){
					echo '---添加meeting attach info成功 type:1<br>';
				}
				
				
				echo 'user_attribute 创建成功！<br>';
					
				$User = M('User');
				$rs = $User->select();
				echo "管理员账户信息：";
				print_r($rs[0]);
			}
		}