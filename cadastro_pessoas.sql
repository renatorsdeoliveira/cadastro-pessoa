/*
SQLyog Community- MySQL GUI v8.22 
MySQL - 5.5.5-10.4.6-MariaDB : Database - cadastro_pessoas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cadastro_pessoas` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cadastro_pessoas`;

/*Table structure for table `pessoas` */

DROP TABLE IF EXISTS `pessoas`;

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `data_atualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `pessoas` */

insert  into `pessoas`(`id`,`nome`,`cpf`,`data_atualizacao`) values (1,'Pedro','012.345.678-90','2019-12-17 20:48:55'),(2,'Maria','012.345.678-90','2019-12-17 20:51:04');

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `telefones` */

insert  into `telefones`(`id`,`telefone`,`tipo`,`id_pessoa`) values (1,'(62) 9856-5845','Cel Claro',1),(2,'(62) 98545-1156','Cel Oi',1),(3,'(62) 9999-9952','Cel vivo',1),(4,'(62) 98151-5252','Cel Tim',1),(5,'(62) 99251-4521','Cel Claro',1),(6,'(62) 99525-6324','Cel Vivo',2),(7,'','',2),(8,'','',2),(9,'','',2),(10,'','',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
