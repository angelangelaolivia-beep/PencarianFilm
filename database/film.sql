/*
SQLyog Community v13.3.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - db_film
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_film` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_film`;

/*Table structure for table `film` */

DROP TABLE IF EXISTS `film`;

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `film` */

insert  into `film`(`id_film`,`judul`,`genre`,`tahun`,`rating`,`sinopsis`) values 
(1,'Interstellar','Sci-Fi',2014,'8.7','Perjalanan luar angkasa'),
(2,'Frozen','Animation',2013,'7.5','Petualangan Elsa dan Anna'),
(3,'Avengers Endgame','Action',2019,'8.4','Pertarungan Avengers'),
(4,'Dune Part Two','Sci-Fi',2024,'8.8','Paul Atreides melanjutkan perjuangannya di planet Arrakis'),
(5,'Inside Out 2','Animation',2024,'8.0','Emosi baru muncul saat Riley memasuki masa remaja'),
(6,'Deadpool & Wolverine','Action',2024,'8.1','Deadpool bekerja sama dengan Wolverine dalam misi multiverse'),
(7,'Kung Fu Panda 4','Animation',2024,'7.3','Po mencari penerus Dragon Warrior'),
(8,'Godzilla x Kong The New Empire','Action',2024,'6.8','Godzilla dan Kong menghadapi ancaman baru'),
(9,'Avatar The Way of Water','Sci-Fi',2022,'7.6','Keluarga Jake Sully menghadapi konflik baru di Pandora'),
(10,'Oppenheimer','Biography',2023,'8.4','Kisah ilmuwan pembuat bom atom'),
(11,'Barbie','Comedy',2023,'7.0','Petualangan Barbie di dunia nyata'),
(12,'The Batman','Action',2022,'7.9','Batman menyelidiki kasus misterius di Gotham'),
(13,'Spider-Man No Way Home','Action',2021,'8.2','Spider-Man menghadapi kekacauan multiverse');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
