/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.5.8-log : Database - hms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `hms`;

USE `hms`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `clients` */

insert  into `clients`(`client_id`,`client_name`,`address`,`contact`) values (1,'Mandeep','Sankhamul','4784008'),(2,'Mandeep Raj Shrestha','Sankhamul','474008'),(3,'Mandeep Raj Shrestha','Sankhamul','4784008'),(4,'MAn','asd','123123'),(5,'M','m','123123'),(6,'kjkjkjk','jhjhjh','787878'),(7,'hgjghg','gfgfgh','232'),(8,'Pramesh','Kathmandu','709709709');

/*Table structure for table `locker` */

DROP TABLE IF EXISTS `locker`;

CREATE TABLE `locker` (
  `locker_pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `locker` */

insert  into `locker`(`locker_pwd`) values ('mandeep');

/*Table structure for table `managers` */

DROP TABLE IF EXISTS `managers`;

CREATE TABLE `managers` (
  `manager` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `managers` */

insert  into `managers`(`manager`,`password`) values ('admin','warcraft'),('admin','admin');

/*Table structure for table `registration` */

DROP TABLE IF EXISTS `registration`;

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_out` varchar(255) DEFAULT NULL,
  `date_in` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `FK_reg_client_id` (`client_id`),
  KEY `FK_registration` (`room_no`),
  CONSTRAINT `FK_registration` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `registration` */

insert  into `registration`(`reg_id`,`date_out`,`date_in`,`room_no`,`client_id`) values (2,'2012-03-05','2012-03-05','101',2),(3,'2012-03-05','2012-03-05','101',3),(4,'in','2012-08-03','101',4),(5,'2012-08-03','2012-08-03','102',5),(6,'in','2012-08-03','103',6),(7,'2012-08-03','2012-08-03','109',7),(8,'2012-08-03','2012-08-03','109',8);

/*Table structure for table `room_capacity` */

DROP TABLE IF EXISTS `room_capacity`;

CREATE TABLE `room_capacity` (
  `room_capacity_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_capacity_name` varchar(255) NOT NULL,
  `rates` int(11) NOT NULL,
  PRIMARY KEY (`room_capacity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `room_capacity` */

insert  into `room_capacity`(`room_capacity_id`,`room_capacity_name`,`rates`) values (1,'Single',100),(2,'Double',300);

/*Table structure for table `room_category` */

DROP TABLE IF EXISTS `room_category`;

CREATE TABLE `room_category` (
  `room_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_category_name` varchar(255) NOT NULL,
  `rates` int(11) NOT NULL,
  PRIMARY KEY (`room_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `room_category` */

insert  into `room_category`(`room_category_id`,`room_category_name`,`rates`) values (1,'Suite',300),(2,'Deluxe',500);

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `room_no` varchar(255) NOT NULL,
  `room_status` binary(1) DEFAULT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_category` int(11) NOT NULL,
  `rates` int(11) NOT NULL,
  PRIMARY KEY (`room_no`),
  KEY `FK_rooms_cap_id` (`room_capacity`),
  KEY `FK_rooms_cat_id` (`room_category`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(`room_no`,`room_status`,`room_capacity`,`room_category`,`rates`) values ('101','1',1,1,400),('102','0',1,1,400),('103','1',1,1,400),('109','0',2,2,800);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_info` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `FK_services_reg_id` (`reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`service_id`,`service_info`,`amount`,`reg_id`) values (1,'Beer, Carlsberg',9000,2),(2,'Soda',2000,2),(3,'344',3444,2),(4,'asd',123,2),(5,'Pizza Mushroom',250,3),(6,'bfvhfhgfh',656575757,5),(7,'Car Rent',700,8);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
