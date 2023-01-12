/*
SQLyog Professional v13.1.1 (32 bit)
MySQL - 10.4.11-MariaDB : Database - sahayog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sahayog` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sahayog`;

/*Table structure for table `details` */

DROP TABLE IF EXISTS `details`;

CREATE TABLE `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `details` */

INSERT INTO `details`(`id`,`first_name`,`middle_name`,`last_name`,`dob`,`gender`,`address1`,`address2`,`email`,`mobile`,`created_at`,`updated_at`) VALUES 
(1,'sunam','k','shrestha','2021-02-20','male','kathmandu','lalitpur','sunam@shrestha.com','9849516171','2021-02-20 15:02:59','0000-00-00 00:00:00'),
(2,'Marij','','Singh','2021-02-21','male','kathmandu','lalitpur','marij@mail.com','9812345678','2021-02-21 05:15:13','0000-00-00 00:00:00');

/*Table structure for table `reports` */

DROP TABLE IF EXISTS `reports`;

CREATE TABLE `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `relation` varchar(255) NOT NULL,
  `lost` tinyint(1) DEFAULT 0,
  `found` tinyint(1) DEFAULT 0,
  `lost_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `lost_from` varchar(255) DEFAULT NULL,
  `found_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `found_from` varchar(255) DEFAULT NULL,
  `reported_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `reported_by` (`reported_by`),
  CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`reported_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reports` */

INSERT INTO `reports`(`id`,`name`,`age`,`gender`,`address`,`description`,`relation`,`lost`,`found`,`lost_at`,`lost_from`,`found_at`,`found_from`,`reported_by`,`created_at`,`updated_at`) values 
(1,'Sunam Shrestha',21,'male','kathmandu','red shirt\r\ngreen pant','friend',1,0,NULL,'lalitpur','0000-00-00 00:00:00',NULL,2,'2021-02-20 20:04:37','0000-00-00 00:00:00'),
(2,'Alex Jackson',55,'female','uk','no info','agent',1,0,'2021-02-19 00:00:00','lalitpur','0000-00-00 00:00:00',NULL,2,'2021-02-20 20:06:36','0000-00-00 00:00:00'),
(3,'unknown',10,'male','kathmandu','baby','father',1,0,'2021-02-12 00:00:00','bhaktapur','0000-00-00 00:00:00',NULL,2,'2021-02-20 20:15:24','0000-00-00 00:00:00'),
(4,'birkhe bahadur',36,'male','rolpa','mentally ill','agent',1,0,'2021-01-31 00:00:00','neplagunj','0000-00-00 00:00:00',NULL,2,'2021-02-20 20:45:02','0000-00-00 00:00:00'),
(5,'kali',22,'female','lalitpur','fat \r\nbeautiful\r\ncute','wife',1,0,'2021-02-20 00:00:00','bhaktapur','0000-00-00 00:00:00',NULL,2,'2021-02-20 21:19:51','0000-00-00 00:00:00'),
(6,'jack',44,'male','kathmandu','aaaa','father',1,0,'2021-02-20 00:00:00','bhaktapur','0000-00-00 00:00:00',NULL,2,'2021-02-20 21:21:42','0000-00-00 00:00:00'),
(7,'jack',44,'male','kathmandu','aaaa','father',1,0,'2021-02-20 00:00:00','bhaktapur','0000-00-00 00:00:00',NULL,2,'2021-02-20 21:22:26','0000-00-00 00:00:00'),
(8,'kali',6,'female','lalitpur','kali','parent',1,0,'2021-02-19 00:00:00','lalitpur','0000-00-00 00:00:00',NULL,1,'2021-02-21 00:23:46','0000-00-00 00:00:00'),
(9,'Gopal Pokhrel',25,'male','rolpa','black pant, white shirt','agent',1,0,'2021-02-20 00:00:00','neplagunj','0000-00-00 00:00:00',NULL,5,'2021-02-21 05:39:47','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `active` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  `detail` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail` (`detail`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`detail`) REFERENCES `details` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

INSERT INTO `users`(`id`,`username`,`email`,`password`,`verified`,`token`,`type`,`active`,`deleted`,`detail`) VALUES 
(1,'superadmin','superadmin@mail.com','$2y$10$nE1zPUtd0eEggGunK3gK5uQJYahG9qASWap6rLCmMi7dnSsyXSpam',1,'5509124336cf4f2f0bc82a544972717f19070a19131e4e7797ceaf1b28615ab22ddde47f427013a53608439492b391e2ce76','superadmin',1,0,NULL),
(2,'sunam','sunam@shrestha.com','$2y$10$m1P3C1JF2BPuc0T/vHf3quVVVCGwQJAwF55Gu5aqMLQ8r.mawhOC6',1,'f466db6b0e5c7ead4db8bdfbf3ccc61d1212303cac6d6a0fe7d10c9b8033a852b717f44d7bf645e3a38cbc8887cdd1a7c1e8','user',1,0,1),
(3,'admin','admin@gmail.com','$2y$10$3TUc2Sziaq2Fj4i5DBeMM.9dz5jPffTnsZfSRQPTzp.mKBRP9VJom',1,'2fb881a52bf258e7146e39baafb2841e58dd8b8d9026903bfe6ddd615d4a9f00e803fdffe71304ec0181ffad68a5a7cd0fb4','admin',1,0,NULL),
(4,'admin1','admin1@mail.com','$2y$10$w.R5kTy0Q5oLzQaqqeNzPOp05/sVMPEP1VNyUMuy5cdd8FNnI2zni',1,'5408cab4b81dbf63dbf715a41092d011c0948a0ed2fac0b71db31687faf0ad62935c490f8140ac960851cc7ed7a5a1f5337f','admin',1,0,NULL),
(5,'marij','marij@mail.com','$2y$10$Mfdu3hRJ04nfyLl.IPO1Ee3.brIdMfRvSvP23BCTK2kKH2P8XXi5a',1,'038abaa4ffa76fd25a296943bdf9820f4edfdfaf6b03e67a5fa8be5190f1c199f7ebf1697ed4d9cb587d413e24091da41060','user',1,0,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
