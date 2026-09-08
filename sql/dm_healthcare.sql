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
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$Iq5NeXHF3z1aJyRPV8vEmuxnjqC7ebmgGu0sXypT89GuS5EMa5VEO','2026-08-05 06:32:23');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_applications`
--

LOCK TABLES `job_applications` WRITE;
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
INSERT INTO `job_applications` VALUES (1,'Yugesh','pyugesh66@gmail.com','8521179540','Doctor','uploads/resumes/1786941798_RESUME_YUGESH_pdf.pdf','Pending','2026-08-17 04:43:18');
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nav_categories`
--

LOCK TABLES `nav_categories` WRITE;
/*!40000 ALTER TABLE `nav_categories` DISABLE KEYS */;
INSERT INTO `nav_categories` VALUES (2,'Home Care',4,'2026-08-05 06:53:18'),(3,'Medical Equipment',3,'2026-08-05 06:53:18'),(4,'Diagnostics',2,'2026-08-05 06:53:18'),(7,'Job',5,'2026-08-05 06:53:18'),(8,'Blood Checkup',6,'2026-08-05 06:53:18'),(13,'Home',1,'2026-08-05 08:34:40');
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nav_items`
--

LOCK TABLES `nav_items` WRITE;
/*!40000 ALTER TABLE `nav_items` DISABLE KEYS */;
INSERT INTO `nav_items` VALUES (15,2,'ELDER CARE - BASIC CARE','elder-care---basic-care',10,'2026-08-05 09:52:09','<p class=\"PDq2pG_selectionAnchorContainer\" data-start=\"593\" data-end=\"939\">As people age, they often require additional support to manage daily activities while maintaining their dignity, independence, and quality of life. At <strong data-start=\"744\" data-end=\"762\">DM Health Care</strong>, our <strong data-start=\"768\" data-end=\"795\">Elder Care &ndash; Basic Care</strong> service is specially designed to provide compassionate, reliable, and personalized assistance to senior citizens in the comfort of their homes.</p>\r\n<p data-start=\"941\" data-end=\"1267\">Our trained and experienced caregivers offer day-to-day support tailored to the unique needs of each individual. Whether your loved one requires help with personal hygiene, mobility, meal preparation, medication reminders, or simply companionship, our caregivers ensure they receive attentive and respectful care at all times.</p>\r\n<p data-start=\"1269\" data-end=\"1609\">We believe that emotional well-being is just as important as physical health. Our caregivers build meaningful relationships with elderly patients, reducing feelings of loneliness while promoting confidence, safety, and comfort. Every care plan is personalized according to the patient\'s health condition, lifestyle, and family requirements.</p>\r\n<p data-start=\"1611\" data-end=\"1831\">At <strong data-start=\"1614\" data-end=\"1632\">DM Health Care</strong>, we are committed to delivering professional elder care services with compassion, dignity, and respect, allowing seniors to enjoy a healthier and more fulfilling life in a familiar home environment.</p>','assets/images/pages/main_15_1786090791.jpg','','assets/images/pages/banner_15_1788854247.png','[\"assets\\/images\\/pages\\/gallery_15_1785999490_0.jpg\",\"assets\\/images\\/pages\\/gallery_15_1785999501_0.jpg\",\"assets\\/images\\/pages\\/gallery_15_1785999512_0.jpg\",\"assets\\/images\\/pages\\/gallery_15_1785999520_0.jpg\",\"assets\\/images\\/pages\\/gallery_15_1785999527_0.jpg\",\"assets\\/images\\/pages\\/gallery_15_1785999616_0.jpg\"]','','','<h1 class=\"PDq2pG_selectionAnchorContainer\" data-section-id=\"14jh5eb\" data-start=\"1838\" data-end=\"1871\">Our Elder Care Services Include</h1>\r\n<ul data-start=\"1873\" data-end=\"2275\">\r\n<li data-section-id=\"wemgo7\" data-start=\"1873\" data-end=\"1902\">Personal Hygiene Assistance</li>\r\n<li data-section-id=\"kusvie\" data-start=\"1903\" data-end=\"1931\">Bathing &amp; Grooming Support</li>\r\n<li data-section-id=\"1oghsbh\" data-start=\"1932\" data-end=\"1953\">Dressing Assistance</li>\r\n<li data-section-id=\"1h2yrqw\" data-start=\"1954\" data-end=\"1985\">Mobility &amp; Walking Assistance</li>\r\n<li data-section-id=\"et0p9h\" data-start=\"1986\" data-end=\"2006\">Wheelchair Support</li>\r\n<li data-section-id=\"1rlnoge\" data-start=\"2007\" data-end=\"2029\">Medication Reminders</li>\r\n<li data-section-id=\"xfzpiu\" data-start=\"2030\" data-end=\"2069\">Meal Preparation &amp; Feeding Assistance</li>\r\n<li data-section-id=\"1tlqdhg\" data-start=\"2070\" data-end=\"2095\">Daily Living Assistance</li>\r\n<li data-section-id=\"1tue2yz\" data-start=\"2096\" data-end=\"2112\">Companion Care</li>\r\n<li data-section-id=\"9u4jak\" data-start=\"2113\" data-end=\"2141\">Emotional &amp; Social Support</li>\r\n<li data-section-id=\"1e8eu3c\" data-start=\"2142\" data-end=\"2161\">Health Monitoring</li>\r\n<li data-section-id=\"1upqhvq\" data-start=\"2162\" data-end=\"2187\">Fall Prevention Support</li>\r\n<li data-section-id=\"1yapkr\" data-start=\"2188\" data-end=\"2216\">Light Household Assistance</li>\r\n<li data-section-id=\"1hnslxc\" data-start=\"2217\" data-end=\"2248\">Doctor Appointment Assistance</li>\r\n<li data-section-id=\"16068zo\" data-start=\"2249\" data-end=\"2275\">Family Care Coordination</li>\r\n</ul>\r\n<hr data-start=\"2277\" data-end=\"2280\">\r\n<h1 data-section-id=\"u0ybrq\" data-start=\"2282\" data-end=\"2296\">Key Features</h1>\r\n<ul data-start=\"2298\" data-end=\"2575\">\r\n<li data-section-id=\"q2gp3p\" data-start=\"2298\" data-end=\"2338\">Experienced &amp; Compassionate Caregivers</li>\r\n<li data-section-id=\"enduaf\" data-start=\"2339\" data-end=\"2364\">Personalized Care Plans</li>\r\n<li data-section-id=\"1harag6\" data-start=\"2365\" data-end=\"2392\">Background Verified Staff</li>\r\n<li data-section-id=\"evp1wb\" data-start=\"2393\" data-end=\"2417\">24&times;7 Home Care Support</li>\r\n<li data-section-id=\"11gp5x0\" data-start=\"2418\" data-end=\"2440\">Safe &amp; Hygienic Care</li>\r\n<li data-section-id=\"1kmwyu\" data-start=\"2441\" data-end=\"2467\">Affordable Care Packages</li>\r\n<li data-section-id=\"1yyphj6\" data-start=\"2468\" data-end=\"2495\">Regular Health Monitoring</li>\r\n<li data-section-id=\"ob43vf\" data-start=\"2496\" data-end=\"2517\">Flexible Care Hours</li>\r\n<li data-section-id=\"1m31w51\" data-start=\"2518\" data-end=\"2552\">Trusted Home Healthcare Services</li>\r\n<li data-section-id=\"1b4xvnv\" data-start=\"2553\" data-end=\"2575\">Family Peace of Mind</li>\r\n</ul>\r\n<hr data-start=\"2577\" data-end=\"2580\">\r\n<h1 data-section-id=\"zg6npe\" data-start=\"2582\" data-end=\"2610\">Why Choose DM Health Care?</h1>\r\n<ul data-start=\"2612\" data-end=\"2907\">\r\n<li data-section-id=\"fcm1j5\" data-start=\"2612\" data-end=\"2644\">Certified &amp; Trained Caregivers</li>\r\n<li data-section-id=\"h9h9mq\" data-start=\"2645\" data-end=\"2679\">Professional Elder Care Services</li>\r\n<li data-section-id=\"rx7hki\" data-start=\"2680\" data-end=\"2714\">Personalized Home Care Solutions</li>\r\n<li data-section-id=\"1hvuxa4\" data-start=\"2715\" data-end=\"2746\">Compassionate Patient Support</li>\r\n<li data-section-id=\"jdhofa\" data-start=\"2747\" data-end=\"2768\">Transparent Pricing</li>\r\n<li data-section-id=\"12slf4u\" data-start=\"2769\" data-end=\"2794\">Reliable &amp; Trusted Team</li>\r\n<li data-section-id=\"1anj6ta\" data-start=\"2795\" data-end=\"2827\">Emergency Assistance Available</li>\r\n<li data-section-id=\"191n4ju\" data-start=\"2828\" data-end=\"2850\">Quality Care at Home</li>\r\n<li data-section-id=\"27hd5k\" data-start=\"2851\" data-end=\"2879\">Dedicated Customer Support</li>\r\n<li data-section-id=\"160hczu\" data-start=\"2880\" data-end=\"2907\">Patient-Centered Approach</li>\r\n</ul>\r\n<hr data-start=\"2909\" data-end=\"2912\">\r\n<h1 data-section-id=\"pakedg\" data-start=\"2914\" data-end=\"2938\">Benefits of Elder Care</h1>\r\n<ul data-start=\"2940\" data-end=\"3211\">\r\n<li data-section-id=\"tog091\" data-start=\"2940\" data-end=\"2963\">Enhances Independence</li>\r\n<li data-section-id=\"1cqxrw6\" data-start=\"2964\" data-end=\"2988\">Improves Daily Comfort</li>\r\n<li data-section-id=\"1hrxi2l\" data-start=\"2989\" data-end=\"3012\">Reduces Family Stress</li>\r\n<li data-section-id=\"qnhj57\" data-start=\"3013\" data-end=\"3044\">Promotes Emotional Well-being</li>\r\n<li data-section-id=\"pv2wqv\" data-start=\"3045\" data-end=\"3071\">Encourages Active Living</li>\r\n<li data-section-id=\"16l9c2w\" data-start=\"3072\" data-end=\"3099\">Improves Personal Hygiene</li>\r\n<li data-section-id=\"mz3ida\" data-start=\"3100\" data-end=\"3130\">Better Medication Compliance</li>\r\n<li data-section-id=\"1vryb8x\" data-start=\"3131\" data-end=\"3155\">Safer Home Environment</li>\r\n<li data-section-id=\"1xyuh90\" data-start=\"3156\" data-end=\"3182\">Improved Quality of Life</li>\r\n<li data-section-id=\"66dxli\" data-start=\"3183\" data-end=\"3211\">Peace of Mind for Families</li>\r\n</ul>\r\n<hr data-start=\"3213\" data-end=\"3216\">\r\n<h1 data-section-id=\"od9i1k\" data-start=\"3218\" data-end=\"3229\">Ideal For</h1>\r\n<ul data-start=\"3231\" data-end=\"3520\">\r\n<li data-section-id=\"8elf1n\" data-start=\"3231\" data-end=\"3261\">Senior Citizens Living Alone</li>\r\n<li data-section-id=\"68j1w4\" data-start=\"3262\" data-end=\"3290\">Bedridden Elderly Patients</li>\r\n<li data-section-id=\"o4tlai\" data-start=\"3291\" data-end=\"3315\">Post-Hospital Recovery</li>\r\n<li data-section-id=\"myyo67\" data-start=\"3316\" data-end=\"3348\">Patients with Limited Mobility</li>\r\n<li data-section-id=\"1p3wgy0\" data-start=\"3349\" data-end=\"3382\">Alzheimer\'s &amp; Dementia Patients</li>\r\n<li data-section-id=\"10vtral\" data-start=\"3383\" data-end=\"3413\">Parkinson\'s Disease Patients</li>\r\n<li data-section-id=\"uvqxdr\" data-start=\"3414\" data-end=\"3440\">Stroke Recovery Patients</li>\r\n<li data-section-id=\"ap3tjm\" data-start=\"3441\" data-end=\"3461\">Arthritis Patients</li>\r\n<li data-section-id=\"so5efh\" data-start=\"3462\" data-end=\"3492\">Disabled Elderly Individuals</li>\r\n<li data-section-id=\"1v4h12a\" data-start=\"3493\" data-end=\"3520\">Long-Term Home Care Needs</li>\r\n</ul>\r\n<hr data-start=\"3522\" data-end=\"3525\">\r\n<h1 data-section-id=\"195ecoo\" data-start=\"3527\" data-end=\"3562\">Frequently Asked Questions (FAQs)</h1>\r\n<h3 data-section-id=\"jhoh4q\" data-start=\"3564\" data-end=\"3600\">What is Elder Care &ndash; Basic Care?</h3>\r\n<p data-start=\"3601\" data-end=\"3784\">Elder Care &ndash; Basic Care provides professional assistance with daily activities, personal hygiene, mobility, meals, medication reminders, and companionship for senior citizens at home.</p>\r\n<h3 data-section-id=\"d678g5\" data-start=\"3786\" data-end=\"3812\">Who provides the care?</h3>\r\n<p data-start=\"3813\" data-end=\"3928\">Our trained, experienced, and background-verified caregivers deliver compassionate and reliable home care services.</p>\r\n<h3 data-section-id=\"77zqw3\" data-start=\"3930\" data-end=\"3979\">Can I book part-time or full-time elder care?</h3>\r\n<p data-start=\"3980\" data-end=\"4097\">Yes. We offer flexible care plans, including hourly, daytime, nighttime, 12-hour, 24-hour, and live-in care services.</p>\r\n<h3 data-section-id=\"rmc13m\" data-start=\"4099\" data-end=\"4127\">Is home elder care safe?</h3>\r\n<p data-start=\"4128\" data-end=\"4253\">Yes. Our caregivers follow strict hygiene, safety, and professional care protocols to ensure the well-being of every patient.</p>'),(16,2,'PATIENT CARE - GENERAL NURSING','patient-care---general-nursing',11,'2026-08-05 09:52:09','<h2 class=\"PDq2pG_selectionAnchorContainer\" data-section-id=\"1xa9vb0\" data-start=\"0\" data-end=\"33\">Patient Care &ndash; General Nursing</h2>\r\n<p class=\"\" data-start=\"35\" data-end=\"605\">General Nursing services are designed to provide compassionate, professional, and personalized medical support to patients in the comfort of their own homes. Whether recovering after surgery, managing a chronic illness, or requiring long-term assistance, our qualified nursing professionals ensure high-quality healthcare while allowing patients to remain in a familiar and stress-free environment. Home-based nursing not only promotes faster recovery but also offers emotional comfort by keeping patients close to their loved ones.</p>\r\n<p data-start=\"607\" data-end=\"983\">Our experienced nursing staff works closely with patients, families, and doctors to deliver individualized care plans based on each patient\'s medical condition and recovery goals. From routine health monitoring to advanced nursing procedures, we focus on maintaining safety, dignity, and overall well-being throughout the healing journey.</p>',NULL,'','assets/images/pages/banner_16_1786089118.png','[]','','','<p class=\"PDq2pG_selectionAnchorContainer\" data-start=\"607\" data-end=\"983\">Our experienced nursing staff works closely with patients, families, and doctors to deliver individualized care plans based on each patient\'s medical condition and recovery goals. From routine health monitoring to advanced nursing procedures, we focus on maintaining safety, dignity, and overall well-being throughout the healing journey.</p>\r\n<h3 class=\"\" data-section-id=\"1fwbfdc\" data-start=\"985\" data-end=\"1025\">Our General Nursing Services Include</h3>\r\n<ul data-start=\"1027\" data-end=\"1623\">\r\n<li data-section-id=\"jddore\" data-start=\"1027\" data-end=\"1079\">Daily health assessment and vital signs monitoring</li>\r\n<li data-section-id=\"1n5tvvv\" data-start=\"1080\" data-end=\"1121\">Medication administration and reminders</li>\r\n<li data-section-id=\"1h31ntg\" data-start=\"1122\" data-end=\"1164\">Personal hygiene and grooming assistance</li>\r\n<li data-section-id=\"ny11dk\" data-start=\"1165\" data-end=\"1207\">Bedridden patient care and repositioning</li>\r\n<li data-section-id=\"d1dypq\" data-start=\"1208\" data-end=\"1242\">Bed sore prevention and dressing</li>\r\n<li data-section-id=\"g0w0t3\" data-start=\"1243\" data-end=\"1276\">Wound care and dressing changes</li>\r\n<li data-section-id=\"93nnul\" data-start=\"1277\" data-end=\"1307\">Catheter care and management</li>\r\n<li data-section-id=\"12jbkul\" data-start=\"1308\" data-end=\"1352\">Feeding assistance and nutritional support</li>\r\n<li data-section-id=\"aa35xx\" data-start=\"1353\" data-end=\"1382\">Post-operative nursing care</li>\r\n<li data-section-id=\"1vwr59\" data-start=\"1383\" data-end=\"1415\">Elderly care and companionship</li>\r\n<li data-section-id=\"vazghe\" data-start=\"1416\" data-end=\"1464\">Mobility assistance and rehabilitation support</li>\r\n<li data-section-id=\"buqz6f\" data-start=\"1465\" data-end=\"1516\">IV infusion and injection support (as prescribed)</li>\r\n<li data-section-id=\"i34mkv\" data-start=\"1517\" data-end=\"1544\">Oxygen therapy assistance</li>\r\n<li data-section-id=\"zw5jr5\" data-start=\"1545\" data-end=\"1585\">Doctor coordination and follow-up care</li>\r\n<li data-section-id=\"jlbqb4\" data-start=\"1586\" data-end=\"1623\">Patient and family health education</li>\r\n</ul>\r\n<h3 data-section-id=\"13yv9ag\" data-start=\"1625\" data-end=\"1669\">Why Choose Our General Nursing Services?</h3>\r\n<ul data-start=\"1671\" data-end=\"2026\">\r\n<li data-section-id=\"41bv85\" data-start=\"1671\" data-end=\"1720\">Experienced and qualified nursing professionals</li>\r\n<li data-section-id=\"sju2si\" data-start=\"1721\" data-end=\"1764\">Personalized care plans for every patient</li>\r\n<li data-section-id=\"l1ee6r\" data-start=\"1765\" data-end=\"1796\">Hospital-quality care at home</li>\r\n<li data-section-id=\"i1vxwp\" data-start=\"1797\" data-end=\"1842\">Compassionate and patient-centered approach</li>\r\n<li data-section-id=\"r2c66f\" data-start=\"1843\" data-end=\"1881\">Improved comfort and faster recovery</li>\r\n<li data-section-id=\"1ty0su3\" data-start=\"1882\" data-end=\"1923\">Regular monitoring and timely reporting</li>\r\n<li data-section-id=\"q6s4u8\" data-start=\"1924\" data-end=\"1972\">Flexible care options (Day, Night &amp; 24&times;7 Care)</li>\r\n<li data-section-id=\"1wmbx2f\" data-start=\"1973\" data-end=\"2026\">Safe, reliable, and professional healthcare support</li>\r\n</ul>\r\n<h3 data-section-id=\"11626mq\" data-start=\"2028\" data-end=\"2048\">Who Can Benefit?</h3>\r\n<p data-start=\"2050\" data-end=\"2093\">Our General Nursing services are ideal for:</p>\r\n<ul data-start=\"2095\" data-end=\"2395\">\r\n<li data-section-id=\"1xp12mo\" data-start=\"2095\" data-end=\"2140\">Elderly patients requiring daily assistance</li>\r\n<li data-section-id=\"1g4oqrv\" data-start=\"2141\" data-end=\"2176\">Patients recovering after surgery</li>\r\n<li data-section-id=\"dq5dpl\" data-start=\"2177\" data-end=\"2208\">Stroke and paralysis patients</li>\r\n<li data-section-id=\"jnar5q\" data-start=\"2209\" data-end=\"2239\">Orthopedic recovery patients</li>\r\n<li data-section-id=\"14bhyg5\" data-start=\"2240\" data-end=\"2262\">Cancer care patients</li>\r\n<li data-section-id=\"s3kdlk\" data-start=\"2263\" data-end=\"2295\">Neurological disorder patients</li>\r\n<li data-section-id=\"1hilktn\" data-start=\"2296\" data-end=\"2322\">Chronically ill patients</li>\r\n<li data-section-id=\"2xs78b\" data-start=\"2323\" data-end=\"2343\">Bedridden patients</li>\r\n<li data-section-id=\"okkasz\" data-start=\"2344\" data-end=\"2395\">Patients requiring long-term home nursing support</li>\r\n</ul>'),(17,2,'ICU CARE - CRITICAL CARE','icu-care---critical-care',12,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_17_1786003042.jpeg','[]','','',''),(18,2,'LIVE-IN CARE - 24 HOURS CARE','live-in-care---24-hours-care',13,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_18_1788861678.png','[]','','',''),(19,2,'PALLIATIVE CARE','palliative-care',14,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_19_1786004077.jpeg','[]','','',''),(20,2,'ASSISTED LIVING FACILITY','assisted-living-facility',15,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_20_1786004303.jpeg','[]','','',''),(21,2,'STAIRCASE MOBILITY ASSISTANCE','staircase-mobility-assistance',16,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_21_1786008855.jpeg','[]','','',''),(22,2,'ELDERLY CARETAKER','elderly-caretaker',17,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_22_1786008971.jpeg','[]','','',''),(23,2,'PATIENT ATTENDANT SERVICES','patient-attendant',18,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_23_1786008920.jpeg','[]','','',''),(24,2,'QUALIFIED NURSE','qualified-nurse',19,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_24_1786008908.jpeg','[]','','',''),(25,2,'PHYSICIAN / DOCTOR','physician-doctor',20,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_25_1786008876.jpeg','[]','','',''),(26,2,'PHYSIOTHERAPIST','physiotherapist',21,'2026-08-05 09:52:10','',NULL,'','assets/images/pages/banner_26_1786008895.jpeg','[]','','',''),(27,3,'HOSPITAL BED','hospital-bed',0,'2026-08-05 09:56:16','',NULL,'','assets/images/pages/banner_27_1788782784.jpeg','[]','','',''),(28,3,'WHEELCHAIRS','wheelchairs',0,'2026-08-05 09:56:22','',NULL,'','assets/images/pages/banner_28_1788781545.jpeg','[]','','',''),(29,3,'NEO BOLT SCOOTER','neo-bolt-scooter',0,'2026-08-05 09:56:30','',NULL,'','assets/images/pages/banner_29_1788781735.jpeg','[]','','',''),(30,3,'OXYGEN CONCENTRATOR','oxygen-concentrator',0,'2026-08-05 09:56:41',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,3,'OXYGEN CYLINDER','oxygen-cylinder',0,'2026-08-05 09:56:47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,3,'BIPAP / CPAP','bipap-cpap',0,'2026-08-05 09:56:53',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,3,'ACCESSORIES','accessories',0,'2026-08-05 09:57:23',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,3,'E-STORE','e-store',0,'2026-08-05 09:57:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,4,'PREVENTIVE LAB TESTS','preventive-lab-tests',0,'2026-08-05 09:58:36','',NULL,'','assets/images/pages/banner_44_1786013681.jpeg','[]','','',''),(45,4,'PREVENTIVE HEALTHCARE PACKAGES','preventive-healthcare-packages',0,'2026-08-05 09:58:42','',NULL,'','assets/images/pages/banner_45_1786013692.jpeg','[]','','',''),(49,7,'JOBS/CAREER','jobs-career',0,'2026-08-05 10:01:32',NULL,NULL,NULL,'assets/images/pages/banner_49_1788861132.png',NULL,NULL,NULL,NULL),(54,8,'Total Test','total-test',0,'2026-08-17 04:19:49','',NULL,'','assets/images/pages/banner_54_1788770239.png','[]','','',''),(62,13,'Delhi ncr','delhi-ncr',0,'2026-09-07 05:59:08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,2,'ATTENDANT PROVIDING','attendant-providing',0,'2026-09-07 08:06:54',NULL,NULL,'Trained and verified male & female patient attendants for 12-hour and 24-hour home healthcare support.',NULL,NULL,'Patient Attendant Providing Services at Home in Delhi NCR - DM Healthcare','Hire certified, background-verified patient attendants at home across Delhi NCR including Faridabad, Noida, and Gurugram. 24/7 care by DM Healthcare.',NULL),(64,2,'GDA PROVIDING','gda-providing',0,'2026-09-07 08:06:54',NULL,NULL,'Certified General Duty Assistant (GDA) staffing and deployment for bedside care, hygiene, and daily vitals support.',NULL,NULL,'GDA Providing Services at Home & Hospital - DM Healthcare','Get trained General Duty Assistants (GDA) for hospital-grade bedside patient assistance and elderly care at home across Delhi NCR.',NULL),(65,2,'GENERAL DUTY ASSISTANT (GDA)','general-duty-assistant-gda',0,'2026-09-07 08:06:54',NULL,NULL,'Professional General Duty Assistant (GDA) services for post-op, bedridden, and chronic care patients.',NULL,NULL,'General Duty Assistant (GDA) at Home in Delhi NCR - DM Healthcare','Hospital-trained General Duty Assistant (GDA) at home. Certified bedside assistance, hygiene, mobility, and medication management.',NULL);
/*!40000 ALTER TABLE `nav_items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-07 23:11:11
