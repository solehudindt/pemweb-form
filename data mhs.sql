/*
SQLyog Community v12.4.3 (32 bit)
MySQL - 5.0.45-log 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `mhs` (
	`id` int (11),
	`nim` char (42),
	`nama` varchar (150),
	`email` varchar (150),
	`foto` varchar (150)
); 
insert into `mhs` (`id`, `nim`, `nama`, `email`, `foto`) values('1','A12.2017.05871','Abdul','abdul@gmail.com','abdul.jpg');
insert into `mhs` (`id`, `nim`, `nama`, `email`, `foto`) values('2','A12.2017.05866','Solehudin','solehudindt@gmail.com','soleh.jpg');
