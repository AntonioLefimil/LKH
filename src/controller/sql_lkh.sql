/*
SQLyog Community v12.09 (32 bit)
MySQL - 5.6.17 : Database - lkh_v2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lkh_v2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lkh_v2`;

/*Table structure for table `tsp_defecto` */

DROP TABLE IF EXISTS `tsp_defecto`;

CREATE TABLE `tsp_defecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eje_x` int(11) NOT NULL,
  `eje_y` int(11) NOT NULL,
  `tour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Table structure for table `tsp_modificado` */

DROP TABLE IF EXISTS `tsp_modificado`;

CREATE TABLE `tsp_modificado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eje_x` int(11) NOT NULL,
  `eje_y` int(11) NOT NULL,
  `tour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
