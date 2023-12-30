-- MySQL dump 10.13  Distrib 8.0.34, for macos13 (x86_64)
--
-- Host: localhost    Database: decor
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Quà cưới','<p>Quà cưới</p>','2023-12-25 14:58:39','2023-12-30 02:46:04','images/trw9gUJi3NF6EH4SQweVzwwCyEpt79stWmVOuoHZ.jpg','published'),(2,'Quà sinh nhật','<p>Quà sinh nhật</p>','2023-12-25 14:59:12','2023-12-25 14:59:12','images/4wmwlxxCJPGUbsnQidi1IfGYVYatoNrPrXu93c3i.jpg','published'),(3,'Quà tặng valentine','<p>Quà tặng valentine</p>','2023-12-25 14:59:36','2023-12-25 14:59:36','images/CuHCyQ1kvmunpcisCOF9pEmutcCxJHHcjZCqwyG0.jpg','published'),(4,'Quà tặng cho nam','<p>Quà tặng cho nam</p>','2023-12-25 15:01:01','2023-12-25 15:01:01','images/rPbq5YO83RGNYIPYAaIYnwAOrFdhjXsIxBjIc8Uj.jpg','published'),(5,'Thiệp, bưu thiếp','<p>Thiệp, bưu thiếp</p>','2023-12-25 15:01:43','2023-12-25 15:01:43','images/e4OJbgJBZJnpJjsrWzyNmkHTFmDY8p3jigGL7REi.webp','published'),(6,'Quà tặng bạn gái','<p>Quà tặng bạn gái</p>','2023-12-25 15:49:07','2023-12-25 15:49:19','images/0SvDWTelh5qb7qYkfVaE2i7ZB59MGoFzn618l4Ip.webp','published'),(7,'Quà tặng thầy cô','<p>Quà tặng thầy cô</p>','2023-12-25 15:49:49','2023-12-25 15:50:20','images/hJWl6o9A7X3p74bj12k3CSCJqNxpqVY0oXEF68Gp.webp','published'),(8,'Quà tặng thiếu nhi','<p>Quà tặng thiếu nhi</p>','2023-12-25 15:50:13','2023-12-25 15:50:13','images/XxAQJ3lhp4ztzXf6mipVCFseJmaHxOWEq1iMzYNr.jpg','published'),(9,'Quà tặng decor','<p>Quà tặng decor</p>','2023-12-30 09:04:25','2023-12-30 09:04:25','images/mBArZmNtFbJSfequxBPJRgLoj4LmWp3G0MbRR32n.jpg','published');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` VALUES (1,6,1,NULL,NULL),(2,6,2,NULL,NULL),(3,3,2,NULL,NULL),(4,2,3,NULL,NULL),(5,8,4,NULL,NULL),(6,6,4,NULL,NULL),(7,7,5,NULL,NULL),(8,4,5,NULL,NULL),(9,3,5,NULL,NULL),(10,8,6,NULL,NULL),(11,6,6,NULL,NULL),(12,1,6,NULL,NULL),(13,3,7,NULL,NULL),(14,2,7,NULL,NULL),(15,8,8,NULL,NULL),(16,7,8,NULL,NULL),(17,6,8,NULL,NULL),(18,4,8,NULL,NULL),(19,2,9,NULL,NULL),(20,2,10,NULL,NULL);
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discounts`
--

DROP TABLE IF EXISTS `discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `discount_percentage` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discounts`
--

LOCK TABLES `discounts` WRITE;
/*!40000 ALTER TABLE `discounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `discounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'images/SahfN5YckjmbduVU8YhesMFJecJR1Ur7SwlwrT7r.webp','2023-12-25 16:08:27','2023-12-25 16:08:27'),(2,1,'images/Dhdb24U7BPDJtf8ERGKT21OW7yujgvsdVf5LxWS9.webp','2023-12-25 16:08:27','2023-12-25 16:08:27'),(3,1,'images/Y33ynp6RIy5dnu2hu97MW47Fb6hluQnWAb9cqVdb.webp','2023-12-25 16:08:27','2023-12-25 16:08:27'),(4,2,'images/aXZow9z0GRB6rzNtJkJwmhjQMMFEPMlx3TuIUpVH.webp','2023-12-25 16:10:55','2023-12-25 16:10:55'),(5,2,'images/c3uJwq8x0d0tsyk2OhoWxnaGOQYqLWaHUbpEPTMj.webp','2023-12-25 16:10:55','2023-12-25 16:10:55'),(6,2,'images/6kn0O8Fuxv5YqA9GxeP9hNUr5itqNW71z3B69weP.webp','2023-12-25 16:10:55','2023-12-25 16:10:55'),(7,2,'images/84WbLFGYQHXAvOyGlYQaHElF3b0Jdje3RsmHTCPq.webp','2023-12-25 16:10:55','2023-12-25 16:10:55'),(8,3,'images/c5hV6sAsb4j7BYzcPTC2CQaAZ57mzfsFKjNOVNoF.jpg','2023-12-30 02:53:10','2023-12-30 02:53:10'),(9,3,'images/mNAT7WThAhyLIHdpxfOiV0BJLm7xG6InlS1vPYpt.jpg','2023-12-30 02:53:10','2023-12-30 02:53:10'),(10,3,'images/fUEuUPAGfgyP7yngvrsZk1cq8vXpHSQHLvy9zWBz.jpg','2023-12-30 02:53:10','2023-12-30 02:53:10'),(11,3,'images/UsDBszID3Y9nVxJzVZZVczeczYT46EBH4XRdrhNR.jpg','2023-12-30 02:53:10','2023-12-30 02:53:10'),(12,4,'images/1ARxSSMn8JHD3YYZQaWBCOCrcmU6vcY9VVZIW5sQ.jpg','2023-12-30 02:58:22','2023-12-30 02:58:22'),(13,4,'images/PJwaGdABKYJmhIp0xw5jhAjSEWPa6WjPtFbEt2v0.jpg','2023-12-30 02:58:22','2023-12-30 02:58:22'),(14,4,'images/qtrcTd1pJGos81MtaKMTAu5pFIXbLEgu10iFsdJC.jpg','2023-12-30 02:58:22','2023-12-30 02:58:22'),(15,4,'images/UUPf5Hzbftk9zxaaApDM6uRygPXug80TAK20cB0j.jpg','2023-12-30 02:58:22','2023-12-30 02:58:22'),(16,5,'images/Km0uHoEZDsN17IyQN6NdzbbOQ4Xv8xPQGoS7pWoB.jpg','2023-12-30 03:00:03','2023-12-30 03:00:03'),(17,5,'images/8aAE0WgkrhPrWj7JnO0xRdy4dOWeZRh2aAEnGrKk.jpg','2023-12-30 03:00:03','2023-12-30 03:00:03'),(18,5,'images/QaBC8MYaw22TSaPRxq7HQqzPEFuI25Fl9hYPamnR.jpg','2023-12-30 03:00:03','2023-12-30 03:00:03'),(19,5,'images/KU5c7f73EPHlozRBt8Gmc1XpZhGcuBqUl0WNTMhJ.jpg','2023-12-30 03:00:03','2023-12-30 03:00:03'),(20,5,'images/pOPt1QUfAmRrbkFiwvoLY1MtlXibXkgBfriPksT2.jpg','2023-12-30 03:00:03','2023-12-30 03:00:03'),(21,6,'images/UU41JVstiKVOBCIt2DSG4pfQof1coKnaOlDRAQr0.jpg','2023-12-30 03:02:04','2023-12-30 03:02:04'),(22,6,'images/jynEEp5XFqSMdB4lgtuzmOH9GQZls9nz34bo26h9.jpg','2023-12-30 03:02:04','2023-12-30 03:02:04'),(23,6,'images/Bs2JygUnWhSA6JsKswkDjKDiYApAUF2t5YBAexpy.jpg','2023-12-30 03:02:04','2023-12-30 03:02:04'),(24,6,'images/cHAQu64Sm5laIfcKZ9zO6ZPnfYJw1hPxq39P0QAm.jpg','2023-12-30 03:02:04','2023-12-30 03:02:04'),(25,7,'images/DYCqlY7a36SHf1iixdlvMroIL8x2y3YE8AQsDfyM.jpg','2023-12-30 08:56:11','2023-12-30 08:56:11'),(26,7,'images/RKmGl5n0hNnDSo79aJdBmYPr9gfUV7yVN05K2eRW.jpg','2023-12-30 08:56:11','2023-12-30 08:56:11'),(27,7,'images/bWSgE4rJzagWhRGK1HI1lGXA2u4QetHeayPFZYkZ.jpg','2023-12-30 08:56:11','2023-12-30 08:56:11'),(28,7,'images/pfzpcWWiJZRVk2NowSdrGhjArGmk6RoyzkJ65NiX.jpg','2023-12-30 08:56:11','2023-12-30 08:56:11'),(29,7,'images/RcaPkaUOyIjgvANDuL9dva5fCY9MiwaXqH6obM4g.jpg','2023-12-30 08:56:11','2023-12-30 08:56:11'),(30,8,'images/2JbBfSBHMB7rUBxIIjw6UlpU2D1K2ww1y6sUttw4.jpg','2023-12-30 08:59:05','2023-12-30 08:59:05'),(31,8,'images/ZvI5DeFdxqN7dtAPmR8pYJEXfSOkWm98ArhWitQN.jpg','2023-12-30 08:59:05','2023-12-30 08:59:05'),(32,8,'images/VCa85tFog7Fei2YPFMuM8Cl8WSSHMYUkfYMHh9ly.jpg','2023-12-30 08:59:05','2023-12-30 08:59:05'),(33,8,'images/iOWEwfT40o1WdQQd9jWdYoOLqVWv3hD8ApObRZCO.jpg','2023-12-30 08:59:05','2023-12-30 08:59:05'),(34,8,'images/tnItFUk73gOxMegLcKM3QaxJeMF0LVM1WxQKRz4F.jpg','2023-12-30 08:59:05','2023-12-30 08:59:05'),(35,9,'images/SpvMEqvvdU7wVdHvF70HoiM0fphQKbxPtOHxh62l.jpg','2023-12-30 09:01:53','2023-12-30 09:01:53'),(36,9,'images/4rGalPdGuikdvILhPCAHvpvV7WnaZJ5sdhVcV8Cb.jpg','2023-12-30 09:01:53','2023-12-30 09:01:53'),(37,9,'images/u15nxcCojf7lX7ZtF01dWNvx80YK6qLHLuVY2FjD.jpg','2023-12-30 09:01:53','2023-12-30 09:01:53'),(38,9,'images/gLXXqiVwH7LGbtnrxyiQtP6o2ehCFP5q6CLSxO0L.jpg','2023-12-30 09:01:53','2023-12-30 09:01:53'),(39,9,'images/HclnrvliHm1MF8rlKdP4JodX5mWJojKKJVzNoZZi.jpg','2023-12-30 09:01:53','2023-12-30 09:01:53'),(40,10,'images/etKll2WCslVLwq9xJ1rJTw6DBKrpKAivNpDtE8xb.jpg','2023-12-30 09:03:56','2023-12-30 09:03:56'),(41,10,'images/oMkptmNbhqWZ2IG60JOuKeA8lqT0LWX8Pu3PdtWY.jpg','2023-12-30 09:03:56','2023-12-30 09:03:56'),(42,10,'images/9NzNtFM7EDqWCG9nPI9qGZ2vI5osMqFrIHvxISMo.jpg','2023-12-30 09:03:56','2023-12-30 09:03:56'),(43,10,'images/S9OPndlB2xL7cBcwYeZlBddXtIK0UVcCPJVIZ6oQ.jpg','2023-12-30 09:03:56','2023-12-30 09:03:56');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_09_29_134750_create_products_table',1),(7,'2022_09_29_134838_create_categories_table',1),(8,'2022_09_29_135629_create_category_product_table',1),(9,'2022_09_29_135830_create_images_table',1),(10,'2022_09_29_135914_create_discounts_table',1),(11,'2022_09_29_140046_create_orders_table',1),(12,'2022_09_29_140244_create_product_order_table',1),(13,'2022_09_29_140359_create_reviews_table',1),(14,'2022_09_29_153230_create_permission_tables',1),(15,'2022_10_01_033539_add_columns_to_categories_table',1),(16,'2022_10_02_144603_add_lang_to_users_table',1),(17,'2022_10_03_141237_make_columns_nullable_in_users_table',1),(18,'2022_10_05_090314_make_image_url_nullable_in_categories_table',1),(19,'2022_10_05_152751_modify_products_table',1),(20,'2022_10_12_160228_add_display_name_to_permissions_table',1),(21,'2022_11_22_220708_modify_products_table',1),(22,'2022_11_26_113406_create_ratings_table',1),(23,'2022_11_30_220904_add_instruction_to_products_table',1),(24,'2022_12_01_234344_add_is_active_to_ratings_table',1),(25,'2022_12_16_190306_add_tax_to_orders_table',1),(26,'2022_12_21_213547_add_price_to_product_order_table',1),(27,'2023_01_03_225055_add_code_to_orders_table',1),(28,'2023_01_07_213151_create_statistics_table',1),(29,'2023_03_18_122936_create_sizes_table',1),(30,'2023_03_18_123005_create_colors_table',1),(31,'2023_03_18_123219_create_product_variants_table',1),(32,'2023_03_18_123245_modify_products_table',1),(33,'2023_03_18_212352_create_brands_table',1),(34,'2023_03_28_205638_modify_product_order_table',1),(35,'2023_04_01_112445_drop_reviews_table',1),(36,'2023_06_09_220026_modify_orders_table',1),(37,'2023_12_25_230340_add_quantity_to_products_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',4),(3,'App\\Models\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tax` int NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,'delivered',864000,'Hai Ba Trung',NULL,2,'2023-12-30 08:46:34','2023-12-30 08:46:34',64000,'EG0002',NULL,1),(3,'delivered',97200,'Hai Ba Trung',NULL,3,'2023-12-30 08:46:30','2023-12-30 08:46:30',7200,'EG0003',NULL,1),(4,'delivered',97200,'Hai Ba Trung',NULL,3,'2023-12-30 08:46:27','2023-12-30 08:46:27',7200,'EG0004',NULL,1),(5,'delivered',97200,'Hai Ba Trung',NULL,3,'2023-12-30 08:46:24','2023-12-30 08:46:24',7200,'EG0005',NULL,1),(6,'delivered',97200,'Hai Ba Trung',NULL,3,'2023-12-30 04:39:17','2023-12-30 08:46:18',7200,'EG0006',NULL,1),(7,'delivered',97200,'Hai Ba Trung',NULL,3,'2023-12-30 04:39:52','2023-12-30 08:46:21',7200,'EG0007','PAYID-MWHZ6GQ82743233SC207115K',1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'manage products','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý sản phẩm'),(2,'manage categories','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý danh mục sản phẩm'),(3,'manage orders','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý đơn hàng'),(4,'manage reviews','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý đánh giá, bình luận'),(5,'manage discounts','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý mã giảm giá'),(6,'manage users','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý tài khoản người dùng'),(7,'manage permissions','web','2023-12-30 02:48:55','2023-12-30 02:48:55','Quản lý phân quyền hệ thống');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_order` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `product_variant_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_order`
--

LOCK TABLES `product_order` WRITE;
/*!40000 ALTER TABLE `product_order` DISABLE KEYS */;
INSERT INTO `product_order` VALUES (1,8,2,2,NULL,NULL,400000,0),(2,10,3,2,NULL,NULL,45000,0),(3,9,4,2,NULL,NULL,45000,0),(4,9,5,2,NULL,NULL,45000,0),(5,10,6,2,NULL,NULL,45000,0),(6,10,7,2,NULL,NULL,45000,0);
/*!40000 ALTER TABLE `product_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_variants`
--

DROP TABLE IF EXISTS `product_variants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_variants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `size_id` bigint unsigned NOT NULL,
  `color_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_variants`
--

LOCK TABLES `product_variants` WRITE;
/*!40000 ALTER TABLE `product_variants` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_variants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `discount_deadline` date DEFAULT NULL,
  `brand_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Hộp Quà Nice Night','<h3>Đặc tính mô tả</h3><p><strong>1. Kích thước hộp:</strong>&nbsp;25 x 15 x 10cm</p><p><strong>2. Hộp quà bao gồm:</strong></p><p>- 1 bịt mắt ngủ vải lụa satin</p><p>- 1 nến thơm hương hoa hồng 4Oz</p><p>- 1 hộp quẹt dài chuyên dùng để thắp nến</p><p>- 1 lọ trà hoa hồng Tây Tạng 50g</p><p>- 1 lọ mật ong hoa cà phê cao cấp 300g</p><p>- 1 que gỗ múc mật ong</p><p>- Thiệp</p><p><strong>3. Thành phần nến:&nbsp;</strong>Sáp đậu nành, bấc cotton hoặc bấc gỗ, tinh dầu thiên nhiên</p><h3>Ghi chú từ Chus</h3><p>Sau một ngày dài mệt mỏi, việc giữ cho cơ thể và tinh thần được thoải mái là điều rất quan trọng cho một sức khỏe bền bỉ. Với Nice Night, bạn có thể nhấm nháp trà hoa thơm lừng pha với mật ong khi đang ngồi trong không gian đầy hương thơm từ ánh nến, rồi tận hưởng một giấc ngủ ngon mà chẳng sợ ánh sáng đột ngột làm chói mắt từ bịt mắt ngủ mềm mại.</p><h3>Chú thích</h3><p><strong>1. Điều kiện đổi trả</strong></p><p>Quý khách có thể đổi trả hàng trong các trường hợp sau:</p><p>- Hộp quà bị hư hại, móp méo nặng nề, bị rách, ướt... trong quá trình vận chuyển.</p><p>- Sau khi mở hộp quà, món quà bị vỡ, bể, rách, không đủ số lượng hoặc mẫu mã như thông tin trên web hoặc như thỏa thuận ban đầu.</p><p>- Một số món quà khi hết hàng, The Joy Box sẽ thay đổi màu sắc, kiểu dáng hoặc loại hàng ngang giá cho quý khách. Chúng tôi sẽ thông báo qua email/ điện thoại cho Quý khách trước khi gửi hộp quà.</p><p>Khách hàng gửi hình ảnh tình trạng hộp quà hoặc món hàng sau khi unbox, chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa.&nbsp;</p><p><strong>2.&nbsp;Quy định về thời gian thông báo và gửi sản phẩm đổi trả:</strong></p><p>- Thời gian thông báo đổi trả: trong vòng 7 ngày kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu quà tặng hoặc bể vỡ.</p><p>- Thời gian gửi chuyển trả sản phẩm: trong vòng 14 ngày kể từ khi nhận sản phẩm.</p><p><strong>Địa điểm đổi trả sản phẩm:</strong>&nbsp;khách hàng có thể mang hàng trực tiếp đến cửa hàng The Joy Box hoặc thương hiệu sẽ hỗ trợ bạn chuyển hoàn đơn hàng.</p>',10000,5,'published',1,NULL,'2023-12-25 16:08:27','2023-12-25 16:08:27','images/m3QjUyK1qq2wiKkFD2xSHf9fIRfAXgxGiX035N67.webp',NULL,NULL,0),(2,'Set Bom Tắm Passion Tinh Dầu Thiên Nhiên, Mymood - CHUS','<h3>Đặc tính mô tả</h3><p><strong>- Set gồm 3 bom tắm:</strong>&nbsp;Solar System, Citrus Love, Dreamie</p><p><strong>- Khối lượng:&nbsp;</strong>160g/ bom tắm</p><p>-&nbsp;<strong>Đường kính:</strong>&nbsp;8cm/ bom tắm</p><p><strong>- Thành phần:&nbsp;</strong></p><p><strong>+&nbsp;Solar System:&nbsp;</strong>Baking soda, citric acid, bột kem tartar, đất sét cao lanh, SLSA, dầu quả bơ, polysorbate 80, tinh dầu thiên nhiên (cam, hoa ylang ylang, gỗ trắc), synthetic fluorphlogopite, tin oxide, CI 42090, CI 19140, Cl 45410&nbsp;</p><p><br></p><p>+ <strong>Citrus Love:&nbsp;</strong></p><p>Baking soda, citric acid, bột kem tartar, đất sét cao lanh, SLSA, dầu quả bơ, polysorbate 80, tinh dầu thiên nhiên (bưởi, cam, chanh), synthetic fluorphlogopite, tin oxide, CI 42090, CI 19140, Cl 45410&nbsp;</p><p>+ Dr<strong>eamie:&nbsp;</strong></p><p>Baking soda, citric acid, bột kem tartar, đất sét cao lanh, SLSA, dầu quả bơ, polysorbate 80, tinh dầu thiên nhiên (oải hương, ylang ylang, gỗ đàn hương), synthetic fluorphlogopite, tin oxide, CI 42090, CI 19140, Cl 45410</p><h3>Ghi chú từ Chus</h3><p>Một số<strong> mẹo và lưu ý khi sử dụng bom tắm:</strong></p><p><br></p><p>1. Cắt bom tắm ra làm đôi. Mỗi quả bom tắm có thể được sử dụng hai lần.</p><p>2. Trước khi bắt đầu tắm, chuẩn bị đầy đủ những thứ có thể dùng để thư giãn như nến, trà, rượu vang, bật nhạc.</p><p>3. Cho thêm cánh hoa tươi hoặc cánh hoa khô vào bồn. Nên chuẩn bị lưới lọc ở phần thoát nước của bồn tắm nhằm tránh bị nghẹt.</p><p>4. Sau khi tắm xong, nếu vẫn còn màu dính trên bồn tắm, hãy rửa lại bồn và tắm lại qua nước để loại bỏ màu còn dính trên da.</p><p>5. Nếu không có bồn tắm, bạn có thể cắt bom tắm ra làm mẩu nhỏ, cho vào túi lưới và treo trước vòi hoa sen và tắm bình thường. Hương tinh dầu sẽ lan tỏa, đồng thời bạn cũng sẽ được đắm mình trong không gian đầy màu sắc thơ mộng của bom tắm.</p><h3>Chú thích</h3><p>1. Cô<strong>ng dụng:</strong></p><p><br></p><p>- Solar System: Dưỡng ẩm và nuôi dưỡng da, giảm stress, giảm lo âu</p><p>- Citrus Love: Dưỡng ẩm và nuôi dưỡng da, làm tâm trạng tốt hơn, giảm stress</p><p>- Dreamie: Thải độc, làm sạch da và dưỡng ẩm, giảm căng thẳng và cải thiện giấc ngủ</p><p>2. L<strong>ưu ý:</strong></p><p><br></p><p>- Sản phẩm bom tắm không phải là sản phẩm tạo bọt. Bom tắm sủi và tạo mùi hương, màu sắc cho bồn tắm. Nếu bạn mong muốn tạo bọt khi tắm, hãy tham khảo các sản phẩm Bánh tạo bọt.</p><p>- Nếu bạn cầm vào bom tắm khi nó đang sủi, tay bạn có thể sẽ bị dính màu tạm thời và sẽ trôi hết trong vài giờ</p><p>- Giữ bom tắm cách xa khu vực có độ ẩm cao và ánh sáng mặt trời. Độ ẩm gây giảm khả năng sủi, mềm bom tắm và ánh sáng làm phai màu của sản phẩm</p>',40000,48,'published',1,NULL,'2023-12-25 16:10:55','2023-12-30 03:35:50','images/yx7UTCyh05vJg7nehLmgU2W66itjqVmrD7TKKO3r.webp',NULL,NULL,0),(3,'Quả cầu pha lê hoa hồng','<h2>Quả cầu pha lê hoa hồng có cấu tạo, kích thước như thế nào</h2><p class=\"ql-align-justify\">Quả cầu pha lê hoa hồng được làm từ chất liệu pha lê K9. Sản phẩm bao gồm 2 thành phần: phần quả cầu pha lê và đế đèn Led.</p><p class=\"ql-align-justify\">Quả cầu pha lê có kích thước 8 cm. Được chế tác bằng công nghệ khắc laser 3D bên trong lòng của quả cầu. Mang lại hình ảnh có chiều sâu, sống động và sắc nét. Họa tiết bông hoa hồng lãng mạn kèm theo dòng chữ “I love you” mang thông điệp về tình yêu đôi lứa.</p><p class=\"ql-align-center\"><img src=\"https://shopquatructuyen.com/wp-content/uploads/2019/05/qua-cau-pha-le-hoa-hong-2.jpg\" alt=\"quả cầu pha lê hoa hồng\" height=\"600\" width=\"600\"></p><p class=\"ql-align-center\"><span class=\"ql-cursor\">﻿</span></p><p class=\"ql-align-justify\">Đế đèn Led có 3 loại để bạn lựa chọn. Loại thứ nhất là đế đèn Led pha lê được gắn liền với khối pha lê. Kích thước sản phẩm khi gắn đế là chiều cao 10 cm, rộng 8 cm. Đế pha lê có đèn Led đổi màu. (có nhiều màu tự động thay đổi). Đế đèn dùng pin. Có thể thay pin khi hết. (<a href=\"https://shopquatructuyen.com/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(30, 115, 190); background-color: transparent;\">Shop quà trực tuyến</a>&nbsp;có cung cấp pin).&nbsp;<strong>Quả cầu pha lê hoa hồng kèm đế pha lê có giá bán 349k.</strong></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-center\"><img src=\"https://shopquatructuyen.com/wp-content/uploads/2019/05/qua-cau-pha-le-hoa-hong-4.jpg\" alt=\"quả cầu pha lê hoa hồng\" height=\"525\" width=\"600\"></p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-justify\">Loại đế thứ 2 là đế gỗ có kết nối Bluetooth. Được làm từ chất liệu gỗ tự nhiên với những đường vân gỗ rất đẹp mắt. Đế gỗ tích hợp rất nhiều chức năng, đi kèm với một chiếc điều khiển. Bạn có thể chọn chế độ sáng đơn sắc (với 6 màu), chọn chế độ đổi màu, sáng nhấp nháy, tăng giảm độ sáng, … Đặc biệt bạn có thể kết nối với các thiết bị khác thông qua bluetooth để biến nó trở thành 1 loa phát nhạc. Loại đế này có hình vuông hoặc tròn.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-center\"><img src=\"https://shopquatructuyen.com/wp-content/uploads/2019/05/qua-cau-pha-le-hoa-hong-5.jpg\" alt=\"quả cầu pha lê hoa hồng\" height=\"600\" width=\"600\"></p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-justify\">Kích thước của quả cầu pha lê hoa hồng kèm đế gỗ là chiều cao 12 cm, chiều rộng 8,5 cm.&nbsp;<strong>Quả cầu pha lê hoa hồng kèm đế gỗ có giá bán 699k.</strong></p><p class=\"ql-align-justify\">Loại đế thứ 3 cũng là loại đế gỗ tương tự như loại thứ 2. Nhưng điểm khác biệt là nó không hỗ trợ kết nối bluetooth. Bù lại nó lại được tích hợp nhạc sẵn bên trong và có khả năng xoay. Có tới 20 bản nhạc được phát nối tiếp nhau. Đây đều là những bản nhạc rất nổi tiếng như: castle in the sky, titanic, kiss the rain, …Đèn Led tự động đổi màu. Có 2 chế độ: một chế độ phát nhạc, đèn Led đổi màu và xoay. Chế độ 2 là phát nhạc, đèn Led đổi màu nhưng không xoay. Bạn có thể lựa chọn chế độ tùy theo ý mình qua 1 nút công tắc bên dưới.&nbsp;<strong>Quả cầu pha lê hoa hồng kèm với đế loại này cũng có giá 699k.</strong></p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-center\"><img src=\"https://shopquatructuyen.com/wp-content/uploads/2019/05/qua-cau-pha-le-hoa-hong-6.jpg\" alt=\"quả cầu pha lê hoa hồng\" height=\"600\" width=\"600\"></p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-justify\">Sản phẩm này được đóng gói kèm theo hộp quà tặng sang trọng, lịch sự. Ngoài ra chúng tôi cũng hỗ trợ gói quà và tặng thiệp miễn phí. Nếu bạn ở các tỉnh xa thì cũng có thể hoàn toàn yên tâm về hàng trong quá trình vận chuyển. Hàng đến tay bạn đảm bảo sẽ không bị hư hại.</p><p class=\"ql-align-justify\"><br></p><p class=\"ql-align-center\"><img src=\"https://shopquatructuyen.com/wp-content/uploads/2019/05/hop-dung-qua-cau-pha-le-1.jpg\" alt=\"hộp đựng quả cầu pha lê\" height=\"600\" width=\"600\"></p><p class=\"ql-align-center\"><br></p><h2>Quả cầu pha lê hoa hồng dành tặng ai hợp lý</h2><p class=\"ql-align-justify\">Quả cầu pha lê hoa hồng thích hợp làm&nbsp;<a href=\"https://shopquatructuyen.com/qua-tang-ban-gai/\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(30, 115, 190); background-color: transparent;\">quà tặng bạn gái</a>&nbsp;nhân dịp sinh nhật, Valentine, 8/3, … Cũng có thể dùng làm quà tặng cho bạn trai. Với thông điệp ý nghĩa lãng mạn kết hợp với hiệu ứng ánh sáng lung linh chắc chắn sẽ là món quà mà tất cả các bạn nữ đều ao ước.</p>',34900,40,'published',1,NULL,'2023-12-30 02:53:10','2023-12-30 02:53:10','images/XYFHZi4xOv5qlexqTk06YWKK0VJCTRxOszfYpOfj.jpg',10,'2024-01-20',0),(4,'Đồng hồ cát đồng 3 trụ','<p>Đồng hồ cát đồng 3 trụ có 2 size.</p><p>Size nhỏ có kích thước chiều cao 22 cm, đường kính 16 cm. Thời gian cát chảy 30 phút. Giá bán 549k.</p><p>Size lớn có kích thước chiều cao 32 cm, đường kính 17 cm. Thời gian cát chảy 60 phút.Giá bán 649k.</p><p>Bạn có thể ghi chú size muốn đặt trong phần ghi chú khi đặt hàng. Shop sẽ liên hệ lại với bạn để chốt đơn trước khi gửi hàng.</p><p>Đồng hồ cát đồng 3 trụ thích hợp làm quà tặng cho sếp, quà tặng đồng nghiệp, làm món đồ trang trí văn phòng, …</p>',45000,40,'published',1,NULL,'2023-12-30 02:58:22','2023-12-30 04:39:52','images/n1CEF0pGs0vqOAEozNsGxutMiqNnbNiMlhsPlycn.jpg',NULL,NULL,0),(5,'Mèo bông tròn','<p>Mèo bông tròn được làm từ chất liệu bông mịn, an toàn khi sử dụng.</p><p>Sản phẩm có nhiều màu để bạn lựa chọn: màu trắng, màu vàng, màu xám và màu đen. Bạn có thể ghi chú màu muốn chọn khi đặt hàng. Shop sẽ liên hệ lại với bạn để chốt đơn hàng trước khi gửi.</p><p>Kích thước chiều dài 35 cm.</p><p>Mèo bông tròn thích hợp làm quà tặng cho bé, quà tặng bạn gái, quà sinh nhật hay quà tặng tết thiếu nhi, …</p>',30000,66,'published',1,NULL,'2023-12-30 03:00:03','2023-12-30 03:00:03','images/AZTJkZJ591gLtQFqQBrg2hkW8Ci6msSHTIGkQ9DU.jpg',NULL,NULL,0),(6,'Chó bông Poodle','<p>Chó bông Poodle được làm từ chất liệu bông cao cấp.</p><p>Kích thước 30 cm.</p><p>Có 3 màu: màu trắng, màu nâu và màu vàng.</p><p>Chú chó này có khuôn mặt rất ngộ nghĩnh đáng yêu.</p><p>Thích hợp làm quà tặng cho bạn gái, quà tặng cho trẻ em.</p>',60000,67,'published',1,NULL,'2023-12-30 03:02:04','2023-12-30 03:02:04','images/CJZF4EedreBJ5cUzENK7iZV2dU2JeEhw1bNli57M.jpg',NULL,NULL,0),(7,'Quà Tặng Cặp Đôi Tình Nhân Hình Trái Tim','<p><span style=\"color: rgba(0, 0, 0, 0.8);\">Quà Tặng Cặp Đôi Tình Nhân Hình Trái Tim, Có Đèn Led, Có Âm Thanh Phát Nhạc, Trang Trí Decor, Quà Tặng Ngày Lễ Tình Yêu</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">Thông Tin Sản Phẩm</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Chất liệu: Nhựa PVC cao cấp</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Chiều cao: 12x6x17 cm </span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Trọng lượng: 250gram</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Đèn Trang Trí phòng học tập, phong làm viêc, làm đèn ngủ ko gian thoải mái, thư giãn. Ngoài ra còn làm quà tặng sinh nhật, ngày lễ tình nhân, noel .....</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Sản Phầm Chất Lượng , Đúng Hình , Đúng Mô Tả </span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Đổi Trả Hàng thoải mái trong 7 ngày  </span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">CHÍNH SÁCH ĐỔI TRẢ HÀNG DO SHOPEE QUY ĐỊNH   </span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">#đèn_ngủ #đèn_ngủ_thông_minh #LED #đèn_ngủ_sạc_đt #den_ngu #den_ngu_thong_minh #sac_dien_thoai #US#qua_tang#sinh_nhat#noel#tinh_yeu</span></p>',30000,16,'published',1,NULL,'2023-12-30 08:56:11','2023-12-30 08:59:13','images/tOgZUCfRTDkQcipoD5CxA1eAAZa2GmdzlWm4U4j0.jpg',NULL,NULL,0),(8,'Quả cầu tuyết phi hành gia','<p><span style=\"color: rgba(0, 0, 0, 0.8);\">QUẢ CẦU TUYẾT PHI HÀNH GIA</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">Mô tả sản phẩm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">-kích thước 9*13cm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Chất liệu: quả cầu được làm bằng thủy tinh, có đế bằng composite</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Thiết kế đế chắc chắn, màu sắc tươi tắn, có đèn led và nhạc vui nhộn</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Quả cầu được chạy bằng pin aa</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Phù hợp để trang trí, làm quà tặng,..</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">MI.ROOM DECOR </span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">  Chuyên cung cấp sản phẩm decor</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">  Tuyển ctv và sỉ sll, nhỏ</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">  SHOP MI.ROOM DECOR CAM KẾT:</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Giao hàng ngay khi nhận đơn</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Hỗ trợ khách hàng nhiệt tình</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Hàng chính hãng chất lượng cao</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Đổi trả hàng uy tín</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\"> PHẢN HỒI:</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">1. Xin vui lòng liên hệ với chúng tôi nếu có bất kì thắc mắc gì về sản phẩm trước khi phản hồi tiêu cực tới sản phẩm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">2. Hãy cho chúng tôi cơ hội để giải quyết tất cả vấn đề các bạn gặp phải về sản phẩm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">3. Đừng ngại đánh giá 5 sao cho  nếu bạn yêu thích sản phẩm shop chúng mình</span></p>',45000,56,'published',1,NULL,'2023-12-30 08:59:05','2023-12-30 08:59:05','images/gKqrUyUX0G4CGMmq56SDJ28PcMDrTi8Y6dQxvgde.jpg',NULL,NULL,0),(9,'Quà Tặng Sinh Nhật, Lưu Niệm Hộp Trong Suốt Thú Cưng','<p><span style=\"color: rgba(0, 0, 0, 0.8);\">Quà Tặng Sinh Nhật, Lưu Niệm Hộp Trong Suốt Thú Cưng, Decor Trang Trí, Quà Tặng Các Dịp Lễ Đặc Biệt</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">Thông tin sản phẩm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Kích thước size  : Size Bé 17×17×12cm, Size Lớn 28x28x18 cm</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Trọng lượng: 200gram</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Bộ bao gồm : túi quà tặng , gấu bông kèm than hoạt tính , thiệp sinh nhật , đèn led nhỏ màu vàng , hộp quà nhựa trong suốt kèm nơ thắt.</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Hình dáng ưu nhìn thích hợp với mọi lứa tuổi làm quà tặng sinh nhật , đồ trang trí decor phòng ngủ,..</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Có than hoạt tính giúp khử mùi , diệt vi khuẩn thích hợp để phòng ngủ , phòng làm việc</span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Sản Phầm Chất Lượng , Đúng Hình , Đúng Mô Tả </span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Đổi Trả Hàng thoải mái trong 7 ngày  </span></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">CHÍNH SÁCH ĐỔI TRẢ HÀNG DO SHOPEE QUY ĐỊNH   </span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">#qualuuniem#quatang#giangsinh#sinhnhat#quatangsinhnhat#quatangsinhnhat#dotrangtriphongngu#decorphongngu #quatang #dotrangtri #dodecor #thucungnamngu #gaubongnamngu #hopquasinhnhat #hopquatangsinhnhat #dotrangtrinoithat </span></p>',45000,34,'published',1,NULL,'2023-12-30 09:01:53','2023-12-30 09:01:53','images/8QZQXhh6bygc13LBb7l17R5FAu2VLG8CgWlEeTGa.jpg',NULL,NULL,0),(10,'Lọ Điều Ước Phong Cách Cổ Điển Retro','<p><span style=\"color: rgba(0, 0, 0, 0.8);\">Lọ Điều Ước  Như giúp bạn gửi gắm những thông điệp yêu thương, mang nhiều ý nghĩa thể hiện nguyện ước hạnh phúc, lời chúc may mắn đến bạn bè, người thân, người yêu.</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">Lọ ước có thiết kế đơn giản nhưng tinh tế, mang giá trị nghệ thuật cao. Sản phẩm được làm từ thủy tinh cao cấp, bền đẹp, trang trí tỉ mỉ đến từng chi tiết , tạo nên nét đẹp hoàn hảo cho sản phẩm.</span></p><p><br></p><p><span style=\"color: rgba(0, 0, 0, 0.8);\">- Kích thước thực: 2x7 (cm)</span></p>',56000,56,'published',1,NULL,'2023-12-30 09:03:56','2023-12-30 09:03:56','images/ICKZIQP9n6x9yMwg3O0ZxsH2Hv6k2iZ5D8p1emSr.jpg',NULL,NULL,0);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ratings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  KEY `ratings_rateable_id_index` (`rateable_id`),
  KEY `ratings_rateable_type_index` (`rateable_type`),
  KEY `ratings_user_id_foreign` (`user_id`),
  CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (1,'2023-12-30 09:20:39','2023-12-30 09:20:39',4,'Sản phẩm tốt','App\\Models\\Order',7,3,1),(2,'2023-12-30 09:20:39','2023-12-30 09:20:39',4,'Sản phẩm tốt','App\\Models\\Product',10,3,1),(3,'2023-12-30 09:29:39','2023-12-30 09:34:02',3,'Giao hàng quá lâu','App\\Models\\Order',6,3,1),(4,'2023-12-30 09:29:39','2023-12-30 09:34:02',3,'Giao hàng quá lâu','App\\Models\\Product',10,3,1);
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(1,3),(3,3),(3,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Quản trị viên hệ thống','web','2023-12-30 02:48:55','2023-12-30 02:48:55'),(2,'Quản lý cửa hàng','web','2023-12-30 02:48:55','2023-12-30 02:48:55'),(3,'Nhân viên bán hàng','web','2023-12-30 02:48:55','2023-12-30 02:48:55'),(4,'Cộng tác viên bán hàng','web','2023-12-30 02:48:55','2023-12-30 02:48:55');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statistics`
--

DROP TABLE IF EXISTS `statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statistics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `sales` int NOT NULL DEFAULT '0',
  `total_orders` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statistics`
--

LOCK TABLES `statistics` WRITE;
/*!40000 ALTER TABLE `statistics` DISABLE KEYS */;
INSERT INTO `statistics` VALUES (2,'2023-12-30',486000,5,'2023-12-30 03:35:50','2023-12-30 04:39:52'),(3,'2023-12-29',470000,1,'2023-12-30 09:32:21','2023-12-30 09:32:22'),(4,'2023-12-28',460000,5,'2023-12-30 09:32:33','2023-12-30 09:32:34');
/*!40000 ALTER TABLE `statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vi',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,NULL,NULL,'$2y$10$LGSxLT/ecvG7MmO5bkXCiO3S9UMfG1Vm6y71MsLDOGbHAYh5tjZYq',NULL,NULL,NULL,1,1,NULL,'2023-12-25 14:51:31','2023-12-25 14:51:31','vi'),(2,'Vũ Minh Hiếu','vuminhhieu1311@gmail.com','056667878787','Hai Ba Trung',NULL,'$2y$10$vT6z6YDq.SMyKaJYjNSmbuxUuF9d9GXAWsQOly06ArM01wg2kJuC.',NULL,NULL,NULL,0,1,NULL,'2023-12-30 02:49:58','2023-12-30 08:43:26','vi'),(3,'Nguyễn Văn B','b@gmail.com','0377898778','Hai Ba Trung',NULL,'$2y$10$G3NfPT8Lj6nAx.Xfz3OF/OTPYQxd64mP3ynNa1L3uqSWM3OLhrDDy',NULL,NULL,NULL,0,1,NULL,'2023-12-30 04:11:25','2023-12-30 09:07:44','vi'),(4,'Vũ Minh Quang','quang@gmail.com',NULL,NULL,NULL,'$2y$10$Y1QbrNC4pdzbrcCJKWj/XeRp5mq2ZpX9DSTnM6XGeCI1/CLXxkhTm',NULL,NULL,NULL,1,1,NULL,'2023-12-30 08:47:49','2023-12-30 08:47:49','vi'),(5,'Vũ Văn Hanh','hanh@gmail.com',NULL,NULL,NULL,'$2y$10$TnwYh4aZ/A0kgO.SOb6yhOS0QEhwPVNkDne.awNus3fTd1kIcaWLa',NULL,NULL,NULL,1,1,NULL,'2023-12-30 08:48:43','2023-12-30 08:48:43','vi'),(6,'Nguyễn Minh Châu','chau@gmail.com',NULL,NULL,NULL,'$2y$10$EZGNMrLN9Vvh51nH9qB47e1Q.paNHH2.Lf9nk0c29397VyiiDRDKG',NULL,NULL,NULL,0,1,NULL,'2023-12-30 08:49:22','2023-12-30 08:49:22','vi'),(7,'Hoàng Tiến Đạt','dat@gmail.com',NULL,NULL,NULL,'$2y$10$zWWsHy6V490xOS0kKMRsJOP8/5mmHdcvYfrEt7coR57OgeqyGltOW',NULL,NULL,NULL,0,1,NULL,'2023-12-30 08:49:46','2023-12-30 08:49:46','vi');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-30 20:14:42
