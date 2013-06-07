/* 建立用户基础信息表 */
drop table if exists `papawithme`.`think_user`;

CREATE  TABLE `papawithme`.`think_user` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(45) NOT NULL ,
  `user_psd` VARCHAR(45) NOT NULL ,
  `user_email` VARCHAR(145) NOT NULL ,
  PRIMARY KEY (`user_id`) ,
  UNIQUE INDEX `user_name_UNIQUE` (`user_name` ASC) ,
  UNIQUE INDEX `user_psd_UNIQUE` (`user_psd` ASC) ,
  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC) 
  );

/* 初始化管理员账户 */
INSERT INTO `papawithme`.`think_user` (`user_name`, `user_psd`, `user_email`) VALUES ('root', 'papawithme~', 'root@papawith.me');

