<?php
	class InstallAction extends Action{
			public function index() {
			
				set_time_limit(0);
				ob_end_clean();
				ob_implicit_flush(1);
			
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
					  `attribute0_increase` float DEFAULT 0,
					  `attribute1_increase` float DEFAULT 0,
					  `attribute2_increase` float DEFAULT 0,
					  `attribute3_increase` float DEFAULT 0,
					  `attribute4_increase` float DEFAULT 0,
					  `attribute5_increase` float DEFAULT 0,
					  `attribute6_increase` float DEFAULT 0,
					  PRIMARY KEY (`attribute_id`),
					  UNIQUE KEY `user_name` (`user_name`)
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				echo 'user_attribute 创建成功！<br>';
				
				$model->execute("drop table if exists `papawithme`.`think_task`;");
				$model->execute("
					CREATE TABLE `papawithme`.`think_task` (
						`task_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
						`task_name` VARCHAR(45) NOT NULL,
						`type` SMALLINT NOT NULL,
						`publisher_name` VARCHAR(45) NOT NULL,
						`attribute0_increase` float DEFAULT 0,
						`attribute1_increase` float DEFAULT 0,
						`attribute2_increase` float DEFAULT 0,
						`attribute3_increase` float DEFAULT 0,
						`attribute4_increase` float DEFAULT 0,
						`attribute5_increase` float DEFAULT 0,
						`attribute6_increase` float DEFAULT 0,
						PRIMARY KEY (`task_id`),
						UNIQUE KEY `task_name` (`task_name`)
						
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				echo 'task 创建成功！<br>';
				
				$model->execute("drop table if exists `papawithme`.`think_task_user`;");
				$model->execute("
					CREATE TABLE `papawithme`.`think_task_user` (
						`task_user_id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
						`task_name` VARCHAR(45) NOT NULL, 
						`user_name` VARCHAR(45) NOT NULL, 
						`state` SMALLINT NOT NULL DEFAULT 0,
						PRIMARY KEY (`task_user_id`)
					)
					ENGINE = InnoDB DEFAULT CHARSET=utf8;
				");
				echo 'think_task_user 创建成功！<br>';
				
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
				for($i = 1; $i <= 3; $i = $i+1){			
					$data['type'] = $i;
					if($MeetingAttachInfo->add($data)){
						echo '---添加meeting attach info成功 type:'.$i.'<br>';
					}
					else{
						echo '---添加meeting attach info失败 type:'.$i.'<br>';
					}
				}
				
				unset($data);
				$data['attach_info0'] = "能回报什么 ?";
				$data['attach_info1'] = "为什么想学 ?";
				$data['attach_info2'] = "说说你都折腾过什么 ...";
				for($i = 4; $i <= 14; $i = $i+2){
					$data['type'] = $i;
					if($MeetingAttachInfo->add($data)){
						echo '---添加meeting attach info成功 type:'.$i.'<br>';
					}
					else{
						echo '---添加meeting attach info失败 type:'.$i.'<br>';
					}
				}
				
				unset($data);
				$data['attach_info0'] = "对学徒的要求";
				$data['attach_info1'] = "具体能教的有 ?";
				$data['attach_info2'] = "说说你都折腾过什么 ...";
				for($i = 5; $i <= 15; $i = $i+2){
					$data['type'] = $i;
					if($MeetingAttachInfo->add($data)){
						echo '---添加meeting attach info成功 type:'.$i.'<br>';
					}
					else{
						echo '---添加meeting attach info失败 type:'.$i.'<br>';
					}
				}
				
				echo 'think_meeting_attach_info 创建成功！<br>';
				
				//清理文件夹
				function deldir($dir) {
					//先删除目录下的文件：
					$dh=opendir($dir);
					while ($file=readdir($dh)) {
						if($file!="." && $file!="..") {
							$fullpath=$dir."/".$file;
							if(!is_dir($fullpath)) {
								unlink($fullpath);
							} else {
								deldir($fullpath);
							}
						}
					}
					closedir($dh);
					//删除当前文件夹：
					if(rmdir($dir)) {
						return true;
					} else {
						return false;
					}
				}
				deldir('./Public/Uploads');
					
					
				$User = M('User');
				$rs = $User->select();
				echo "管理员账户信息：";
				print_r($rs[0]);
			}
		}