drop database if exists `shop`;
create database if not exists `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use shop;

DROP TABLE IF EXISTS `shop`.`obj`;
create table if NOT EXISTS `shop`.`obj` (
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
`summary` text NOT NULL,
`fb` VARCHAR(180),
`google` VARCHAR(180),
`text` text NOT NULL, 
`avail` VARCHAR(80),
`sku`  VARCHAR(180),
`main_icon` VARCHAR(200) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`obj_cat_list`;
create table if NOT EXISTS `shop`.`obj_cat_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;



DROP table if exists `shop`.`obj_cat`;
create table if NOT EXISTS `shop`.`obj_cat`(
`id_cat` int UNSIGNED NOT NULL,
`id_obj` int UNSIGNED NOT NULL,

CONSTRAINT pkId
FOREIGN KEY (`id_cat`)
REFERENCES `shop`.`obj_cat_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,


CONSTRAINT psss
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key (`id_cat`,`id_obj`)
) ENGINE = InnoDB;









DROP table if exists `shop`.`obj_manufacturer_list`;
create table if NOT EXISTS `shop`.`obj_manufacturer_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`obj_manufacturer`;
create table if NOT EXISTS `shop`.`obj_manufacturer`(
`id_man` int UNSIGNED NOT NULL,
`id_obj` int UNSIGNED NOT NULL,

CONSTRAINT pkIkd
FOREIGN KEY (`id_man`)
REFERENCES `shop`.`obj_manufacturer_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

CONSTRAINT pssks
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key(`id_man`,`id_obj`)
) ENGINE = InnoDB;







DROP table if exists `shop`.`obj_tag_list`;
create table if NOT EXISTS `shop`.`obj_tag_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`obj_tag`;
create table if NOT EXISTS `shop`.`obj_tag`(
`id_tag` int UNSIGNED NOT NULL,
`id_obj` int UNSIGNED NOT NULL,

CONSTRAINT tagggg
FOREIGN KEY (`id_tag`)
REFERENCES `shop`.`obj_tag_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

CONSTRAINT OBG
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key (`id_tag`,`id_obj`)
) ENGINE = InnoDB;





DROP table if exists `shop`.`obj_money_list`;
create table if NOT EXISTS `shop`.`obj_money_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
`summary` VARCHAR(180) NOT NULL,
`rate` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`obj_money`;
create table if NOT EXISTS `shop`.`obj_money`(
`id_money` int UNSIGNED NOT NULL,
`id_obj` int UNSIGNED NOT NULL,
`price` varchar(20),
CONSTRAINT mon
FOREIGN KEY (`id_money`)
REFERENCES `shop`.`obj_money_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

CONSTRAINT OBGM
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key (`id_money`,`id_obj`)
) ENGINE = InnoDB;







DROP table if exists `shop`.`obj_label_list`;
create table if NOT EXISTS `shop`.`obj_label_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`obj_label`;
create table if NOT EXISTS `shop`.`obj_label`(
`id_label` int UNSIGNED NOT NULL,
`id_obj` int UNSIGNED NOT NULL,
CONSTRAINT labelpk
FOREIGN KEY (`id_label`)
REFERENCES `shop`.`obj_label_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

CONSTRAINT OBGl
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key(`id_label`,`id_obj`)
) ENGINE = InnoDB;






DROP table if exists `shop`.`obj_slider`;
create table if NOT EXISTS `shop`.`obj_slider`(
`id_obj` int UNSIGNED NOT NULL,
`icon` varchar(200),
`small` varchar(200),
`full` varchar(200),


CONSTRAINT OBGs
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key(`id_obj`,`full`)
) ENGINE = InnoDB;





DROP table if exists `shop`.`user`;
create table if NOT EXISTS `shop`.`user`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`email` VARCHAR(180) NOT NULL,
`pass` VARCHAR(180) NOT NULL,
`cookie_user` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;




DROP table if exists `shop`.`blog`;
create table if NOT EXISTS `shop`.`blog`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
`summary` text NOT NULL,
`date` VARCHAR(12) NOT NULL,
`text` text NOT NULL,
`author` int UNSIGNED NOT NULL,


CONSTRAINT User
FOREIGN KEY (`author`)
REFERENCES `shop`.`user` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

PRIMARY KEY (`id`)
) ENGINE = InnoDB;









DROP table if exists `shop`.`blog_cat_list`;
create table if NOT EXISTS `shop`.`blog_cat_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;



DROP table if exists `shop`.`blog_cat`;
create table if NOT EXISTS `shop`.`blog_cat`(
`id_cat` int UNSIGNED NOT NULL,
`id_blog` int UNSIGNED NOT NULL,

CONSTRAINT pkIdB
FOREIGN KEY (`id_cat`)
REFERENCES `shop`.`blog_cat_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,


CONSTRAINT psssB
FOREIGN KEY (`id_blog`)
REFERENCES `shop`.`blog` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key (`id_cat`,`id_blog`)
) ENGINE = InnoDB;


DROP table if exists `shop`.`blog_tag_list`;
create table if NOT EXISTS `shop`.`blog_tag_list`(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

DROP table if exists `shop`.`blog_tag`;
create table if NOT EXISTS `shop`.`blog_tag`(
`id_tag` int UNSIGNED NOT NULL,
`id_blog` int UNSIGNED NOT NULL,

CONSTRAINT fgdfgB
FOREIGN KEY (`id_tag`)
REFERENCES `shop`.`blog_tag_list` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

CONSTRAINT OBGBB
FOREIGN KEY (`id_blog`)
REFERENCES `shop`.`blog` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

primary key(`id_tag`,`id_blog`)
) ENGINE = InnoDB;





DROP table if exists `shop`.`config`;
create table if NOT EXISTS `shop`.`config`(
`name` VARCHAR(180) NOT NULL,
`value` VARCHAR(250) NOT NULL,
PRIMARY KEY (`name`)
) ENGINE = InnoDB;


DROP table if exists `shop`.`text_block`;
create table if NOT EXISTS `shop`.`text_block`(
`name` VARCHAR(180) NOT NULL,
`value` text NOT NULL,
PRIMARY KEY (`name`)
) ENGINE = InnoDB;






DROP table if exists `shop`.`compare`;
create table if NOT EXISTS `shop`.`compare`(
`id_obj` int UNSIGNED NOT NULL AUTO_INCREMENT,
`cookie_user` varchar(100),

CONSTRAINT compare_id_obj
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,

PRIMARY KEY (`id_obj`,`cookie_user`)
) ENGINE = InnoDB;








DROP table if exists `shop`.`obj_comment`;
create table if NOT EXISTS `shop`.`obj_comment`(
`id_obj` int UNSIGNED NOT NULL AUTO_INCREMENT,
`cookie_user` varchar(100),
`vote_qality` int(3) UNSIGNED,
`vote_price` int(3) UNSIGNED,
`name` varchar(100),
`summary` varchar(100),
`text` text,



CONSTRAINT comm_id_obj
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,
PRIMARY KEY (`id_obj`,`cookie_user`)
) ENGINE = InnoDB;





DROP table if exists `shop`.`obj_cart`;
create table if NOT EXISTS `shop`.`obj_cart`(
`id_obj` int UNSIGNED NOT NULL AUTO_INCREMENT,
`cookie_user` varchar(100),
`count` int(4) UNSIGNED,
`country` varchar(100),
`state`varchar(100),
`zip` varchar(8),
`coupon` varchar(8),



CONSTRAINT cart_id_obj
FOREIGN KEY (`id_obj`)
REFERENCES `shop`.`obj` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,
PRIMARY KEY (`id_obj`,`cookie_user`)
) ENGINE = InnoDB;





DROP table if exists `shop`.`blog_comment`;
create table if NOT EXISTS `shop`.`blog_comment`(
`id_blog` int UNSIGNED NOT NULL AUTO_INCREMENT,
`cookie_user` varchar(100),

`name` varchar(100),
`email` varchar(100),
`text` text,
`date` varchar(10),

CONSTRAINT comm_id_blog
FOREIGN KEY (`id_blog`)
REFERENCES `shop`.`blog` (`id` )
ON DELETE NO ACTION
ON UPDATE NO ACTION,
PRIMARY KEY (`id_blog`,`cookie_user`)
) ENGINE = InnoDB;



/*

DROP table if exists `shop`.``;
create table if NOT EXISTS `shop`.``(
`id` int UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(180) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

*/



