/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_sistema
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_clientes` */

DROP TABLE IF EXISTS `tbl_clientes`;

CREATE TABLE `tbl_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_clientes` */

insert  into `tbl_clientes`(`id`,`nome`,`idade`) values (1,'Pedroso',34),(2,'João',56);

/*Table structure for table `tbl_produto` */

DROP TABLE IF EXISTS `tbl_produto`;

CREATE TABLE `tbl_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `fk_clientes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes` (`fk_clientes`),
  CONSTRAINT `fk_clientes` FOREIGN KEY (`fk_clientes`) REFERENCES `tbl_produto` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_produto` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
