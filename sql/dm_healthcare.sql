-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dm_healthcare
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$12$mRqcEtZO6ma4IKmsB2xFB.WoWL6izvu1f82QGy483TS4qJ3bp7K4C','2026-08-05 06:32:23');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `service_required` varchar(100) NOT NULL,
  `pref_date` date DEFAULT NULL,
  `pref_time` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,'Yugesh','8521179540',NULL,'physio',NULL,NULL,'Preferred Date: 2026-08-21\nPreferred Time: 16:35\n\ntesting','Pending','2026-08-05 10:04:54'),(2,'Yugesh','8521179540','yugeshpandey6@gmail.com','nursing','2026-08-21','20:46','efdfgv','Pending','2026-08-05 10:12:05');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_inquiries`
--

DROP TABLE IF EXISTS `contact_inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_inquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text NOT NULL,
  `status` varchar(20) DEFAULT 'New',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_inquiries`
--

LOCK TABLES `contact_inquiries` WRITE;
/*!40000 ALTER TABLE `contact_inquiries` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nav_categories`
--

DROP TABLE IF EXISTS `nav_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nav_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `display_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nav_categories`
--

LOCK TABLES `nav_categories` WRITE;
/*!40000 ALTER TABLE `nav_categories` DISABLE KEYS */;
INSERT INTO `nav_categories` VALUES (13,'Home',1,'2026-08-05 08:34:40'),(2,'Home Care',2,'2026-08-05 06:53:18'),(3,'Medical Equipment',3,'2026-08-05 06:53:18'),(4,'Diagnostics',4,'2026-08-05 06:53:18'),(6,'Specialized Care',5,'2026-08-05 06:53:18'),(7,'Job',6,'2026-08-05 06:53:18'),(8,'Blood Checkup',7,'2026-08-05 06:53:18');
/*!40000 ALTER TABLE `nav_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nav_items`
--

DROP TABLE IF EXISTS `nav_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nav_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `display_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `page_content` text DEFAULT NULL,
  `page_image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `gallery_images` text DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` text DEFAULT NULL,
  `specifications` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `nav_items_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `nav_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nav_items`
--

LOCK TABLES `nav_items` WRITE;
/*!40000 ALTER TABLE `nav_items` DISABLE KEYS */;
INSERT INTO `nav_items` VALUES (13,13,'Services - Delhi & NCR','services-delhi-ncr',1,'2026-08-05 08:34:40','',NULL,'Comprehensive hospital-grade healthcare services delivered across Delhi NCR.','assets/images/pages/banner_13_1785918916.png','[]','Healthcare Services in Delhi & NCR - DM Healthcare','Professional doorstep healthcare services across Faridabad, Noida, and Delhi NCR.',''),(15,2,'ELDER CARE - BASIC CARE','elder-care---basic-care',10,'2026-08-05 09:52:09','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,2,'PATIENT CARE - GENERAL NURSING','patient-care---general-nursing',11,'2026-08-05 09:52:09','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,2,'ICU CARE - CRITICAL CARE','icu-care---critical-care',12,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,2,'LIVE-IN CARE - 24 HOURS CARE','live-in-care---24-hours-care',13,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,2,'PALLIATIVE CARE','palliative-care',14,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,2,'ASSISTED LIVING FACILITY','assisted-living-facility',15,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,2,'STAIRCASE MOBILITY ASSISTANCE','staircase-mobility-assistance',16,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,2,'ELDERLY CARETAKER','elderly-caretaker',17,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,2,'PATIENT ATTENDANT','patient-attendant',18,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,2,'PHYSICIAN / DOCTOR','physician-doctor',19,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,2,'PHYSIOTHERAPIST','physiotherapist',20,'2026-08-05 09:52:10','',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,3,'HOSPITAL BED','hospital-bed',1,'2026-08-05 09:56:16',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,3,'WHEELCHAIRS','wheelchairs',2,'2026-08-05 09:56:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,3,'NEO BOLT SCOOTER','neo-bolt-scooter',3,'2026-08-05 09:56:30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,3,'OXYGEN CONCENTRATOR','oxygen-concentrator',4,'2026-08-05 09:56:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,3,'OXYGEN CYLINDER','oxygen-cylinder',5,'2026-08-05 09:56:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,3,'BIPAP / CPAP','bipap-cpap',6,'2026-08-05 09:56:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,3,'ICU EQUIPMENT','icu-equipment',7,'2026-08-05 09:57:11',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,3,'ACCESSORIES','accessories',8,'2026-08-05 09:57:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,3,'E-STORE','e-store',9,'2026-08-05 09:57:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,4,'ECG AT HOME','ecg-at-home',1,'2026-08-05 09:58:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,4,'SLEEP TEST AT HOME','sleep-test-at-home',2,'2026-08-05 09:58:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,4,'PREVENTIVE LAB TESTS','preventive-lab-tests',3,'2026-08-05 09:58:36',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,4,'PREVENTIVE HEALTHCARE PACKAGES','preventive-healthcare-packages',4,'2026-08-05 09:58:42',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,7,'JOBS/CAREER','jobs-career',1,'2026-08-05 10:01:32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,7,'STUDY / CAREER ABROAD','study-career-abroad',2,'2026-08-05 10:01:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,7,'ENGAGEMENT','engagement',3,'2026-08-05 10:01:49',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,7,'VIEW YOUR PROFILE','view-your-profile',4,'2026-08-05 10:01:55',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,8,'BLOOD CHECKUP','blood-checkup',1,'2026-08-05 10:05:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nav_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role_applied` varchar(100) NOT NULL,
  `resume_path` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-08-05 15:49:13
