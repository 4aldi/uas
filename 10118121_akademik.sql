/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 5.5.16 : Database - 10118121_akademik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`10118121_akademik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `10118121_akademik`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`kelas`) values 
(10118121,'aldi ','if3'),
(10118122,'asep ','if2'),
(10118123,'ujang','if1');

/*Table structure for table `matkul` */

DROP TABLE IF EXISTS `matkul`;

CREATE TABLE `matkul` (
  `kode_mk` int(10) NOT NULL,
  `nama_mk` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matkul` */

insert  into `matkul`(`kode_mk`,`nama_mk`) values 
(101,'Matematika'),
(102,'aljabar'),
(108,'algoritma');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `nim` int(10) NOT NULL,
  `kode_mk` int(10) NOT NULL,
  `nilai` int(10) NOT NULL,
  `indeks` char(1) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `nim` (`nim`),
  KEY `kode_mk` (`kode_mk`),
  CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`),
  CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `matkul` (`kode_mk`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`no`,`nim`,`kode_mk`,`nilai`,`indeks`,`keterangan`) values 
(1,10118121,101,93,'A','LULUS'),
(9,10118122,102,75,'B','LULUS'),
(10,10118121,108,68,'C','LULUS'),
(18,10118122,108,75,'B','LULUS'),
(20,10118123,108,68,'C','LULUS');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
