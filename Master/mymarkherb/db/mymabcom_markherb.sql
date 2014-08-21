-- MySQL dump 10.13  Distrib 5.5.34, for Linux (x86_64)
--
-- Host: localhost    Database: mymabcom_markherb
-- ------------------------------------------------------
-- Server version	5.5.34-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_berita`
--

DROP TABLE IF EXISTS `t_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `head_berita` varchar(200) NOT NULL,
  `body_berita` text NOT NULL,
  `img_berita` varchar(50) DEFAULT NULL,
  `tanggal_berita` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_berita`
--

LOCK TABLES `t_berita` WRITE;
/*!40000 ALTER TABLE `t_berita` DISABLE KEYS */;
INSERT INTO `t_berita` (`id_berita`, `head_berita`, `body_berita`, `img_berita`, `tanggal_berita`, `id_user`) VALUES (2,'Zakky Gantengggg(banget)','<p>Zakkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>\r\n','wallpaper-272085.jpg','2014-08-17 03:18:09',1);
/*!40000 ALTER TABLE `t_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_contact_us`
--

DROP TABLE IF EXISTS `t_contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_contact_us` (
  `id_contact_us` int(11) NOT NULL AUTO_INCREMENT,
  `nama_contact_us` varchar(30) NOT NULL,
  `email_contact_us` varchar(50) NOT NULL,
  `kontak_contact_us` varchar(20) DEFAULT NULL,
  `isi_contact_us` text NOT NULL,
  `tanggal_contact_us` date DEFAULT NULL,
  PRIMARY KEY (`id_contact_us`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_contact_us`
--

LOCK TABLES `t_contact_us` WRITE;
/*!40000 ALTER TABLE `t_contact_us` DISABLE KEYS */;
INSERT INTO `t_contact_us` (`id_contact_us`, `nama_contact_us`, `email_contact_us`, `kontak_contact_us`, `isi_contact_us`, `tanggal_contact_us`) VALUES (1,'ismailzakky','ismailzakky@yahoo.com','54201145','Zakky Ganteng','2014-08-16');
/*!40000 ALTER TABLE `t_contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_komponen`
--

DROP TABLE IF EXISTS `t_komponen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_komponen` (
  `id_komponen` int(11) NOT NULL AUTO_INCREMENT,
  `bagian` enum('profile','payment','question','shipping') NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_komponen`),
  UNIQUE KEY `bagian` (`bagian`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_komponen`
--

LOCK TABLES `t_komponen` WRITE;
/*!40000 ALTER TABLE `t_komponen` DISABLE KEYS */;
INSERT INTO `t_komponen` (`id_komponen`, `bagian`, `isi`) VALUES (2,'profile','<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif;\"><span style=\"font-weight: bolder;\">Biopurify Phytochemicals</span>&nbsp;provides quality phytochemicals, especially the Active Ingredients of Chinese Herb to our global customers. From small quantities for R&amp;D or reference standard, to large quantities for customizing or manufacturing, Biopurify emphasizes the service side for consistency and reliability.&nbsp;</span></p>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">&nbsp;</p>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\"><span style=\"font-family: arial, helvetica, sans-serif;\">Our main services:</span></p>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px;\">A. Supply high quality extracts, phytochemicals and reference standards of TCM(Traditional Chinese Medicine)</p>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px;\">&nbsp;</p>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">B. Custom extraction and purification, target TCM active ingredients(TCM phytochemicals)</div>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px;\">&nbsp;</p>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">C. Custom synthesis and semi-synthesis for active ingredients</div>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px;\">&nbsp;</p>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">D. CR (contract research), CM (contract manufacture) and PD (process development) services from lab scale, pilot scale to commercial scale(GMP is also available)</div>\n\n<p style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px;\">&nbsp;</p>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">E. TCM compounds library for drug screen,more than 1000 compounds are available, many of them are our unique products.</div>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 20px; text-align: justify;\">We are committe to providing&nbsp;<span style=\"font-weight: bolder;\">Good services, High quality products with Competitive prices.</span></div>\n'),(3,'payment','<h1 style=\"text-align:center;font-size:40px;\">PAYMENT(Zakky)</h1>\r\n\r\n<p><img alt=\"\" src=\"http:/markherb/images/about_img.jpg\" style=\"width:80%;height:350px;margin-left:10%;margin-bottom:50px;\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n'),(4,'question','<h1 style=\"text-align:center;font-size:40px;\">Question(Zakky)</h1>\r\n\r\n<p><img alt=\"\" src=\"http:/markherb/images/about_img.jpg\" style=\"width:80%;height:350px;margin-left:10%;margin-bottom:50px;\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n'),(5,'shipping','<h1 style=\"text-align:center;font-size:40px;\">Shipping(Zakky)</h1>\r\n\r\n<p><img alt=\"\" src=\"http:/markherb/images/about_img.jpg\" style=\"width:80%;height:350px;margin-left:10%;margin-bottom:50px;\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n');
/*!40000 ALTER TABLE `t_komponen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_pendaftar_training`
--

DROP TABLE IF EXISTS `t_pendaftar_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_pendaftar_training` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `id_training` int(11) NOT NULL,
  `email_peserta` varchar(50) NOT NULL,
  `nama_peserta` varchar(30) NOT NULL,
  `kontak_peserta` varchar(20) NOT NULL,
  `keterangan_peserta` text,
  `tanggal_peserta_daftar` date DEFAULT NULL,
  `status_peserta` enum('Lulus','Tidak Lulus','Belum Konfirmasi','Sudah Konfirmasi','Sedang Berjalan') NOT NULL,
  `jenis_peserta` enum('individu','kelompok') DEFAULT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_pendaftar_training`
--

LOCK TABLES `t_pendaftar_training` WRITE;
/*!40000 ALTER TABLE `t_pendaftar_training` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_pendaftar_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_slide`
--

DROP TABLE IF EXISTS `t_slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_slide` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `head_slide` varchar(20) NOT NULL,
  `body_slide` varchar(300) NOT NULL,
  `img_slide` varchar(20) NOT NULL,
  `tanggal_slide` datetime DEFAULT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_slide`
--

LOCK TABLES `t_slide` WRITE;
/*!40000 ALTER TABLE `t_slide` DISABLE KEYS */;
INSERT INTO `t_slide` (`id_slide`, `head_slide`, `body_slide`, `img_slide`, `tanggal_slide`) VALUES (16,'Competitive Price','We are providing good service and high quality products with competitive price','mymarkherb_(6).jpg','2014-08-18 11:50:32'),(18,'Professionality','Professional Manufacture of TCM Ingredients','mymarkherb_(8).jpg','2014-08-18 11:53:55'),(19,'Focus on Herbal','We sell and focus on herbal essence for benefit human beings','mymarkherb_(4).jpg','2014-08-18 11:56:52'),(20,'Reliable Partner','Your reliable partner for quality phytochemicals and reference subtances.','mymarkherb_(7).jpg','2014-08-18 11:59:30');
/*!40000 ALTER TABLE `t_slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_training`
--

DROP TABLE IF EXISTS `t_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_training` (
  `id_training` int(11) NOT NULL AUTO_INCREMENT,
  `head_training` varchar(200) NOT NULL,
  `body_training` text NOT NULL,
  `img_training` varchar(100) DEFAULT NULL,
  `durasi_training` int(11) NOT NULL,
  `tanggal_training_dibuat` date DEFAULT NULL,
  `status_training` enum('open','close') DEFAULT NULL,
  PRIMARY KEY (`id_training`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_training`
--

LOCK TABLES `t_training` WRITE;
/*!40000 ALTER TABLE `t_training` DISABLE KEYS */;
INSERT INTO `t_training` (`id_training`, `head_training`, `body_training`, `img_training`, `durasi_training`, `tanggal_training_dibuat`, `status_training`) VALUES (1,'Training TESSSSSSSSSSSSSSSSSSSSSSS','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.</p>\r\n','wallpaper-1325929.jpg',24,'2014-08-17','open'),(3,'Training LAGI','<p><span style=\"color: rgb(0, 0, 0); font-family: \'Open Sans\'; line-height: 20px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quis, ipsam, consequatur tempora quas dolore nihil debitis odit at quaerat laudantium vel eligendi illo necessitatibus voluptates nisi optio iure alias.</span></p>\r\n','wallpaper-133087.jpg',21,NULL,'open');
/*!40000 ALTER TABLE `t_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(150) NOT NULL,
  `img_user` varchar(50) DEFAULT NULL,
  `nama_user` varchar(30) NOT NULL,
  `jenis_user` enum('ADMIN','USER') NOT NULL,
  `tanggal_masuk_user` datetime DEFAULT NULL,
  `last_login_user` datetime DEFAULT NULL,
  `verifikasi_user` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_user`
--

LOCK TABLES `t_user` WRITE;
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` (`id_user`, `email_user`, `password_user`, `img_user`, `nama_user`, `jenis_user`, `tanggal_masuk_user`, `last_login_user`, `verifikasi_user`) VALUES (1,'ismailzakky@yahoo.com','24de4b0074f620f824a8f24de7747eb8',NULL,'Ismail Zakky','ADMIN',NULL,NULL,'1');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-20  7:38:57
