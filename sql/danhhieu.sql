-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nlcs
CREATE DATABASE IF NOT EXISTS `nlcs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nlcs`;

-- Dumping structure for table nlcs.danhhieu
CREATE TABLE IF NOT EXISTS `danhhieu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dotthidua` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `doituong` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `quyetdinh` varchar(250) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- Dumping data for table nlcs.danhhieu: ~3 rows (approximately)
INSERT INTO `danhhieu` (`id`, `name`, `dotthidua`, `doituong`, `quyetdinh`, `ngaybatdau`, `ngayketthuc`) VALUES
	(1, 'Sinh Viên 5 Dốt	', 'HK2 (2023 - 2024)	', 'Sinh Viên', NULL, '2022-04-15', '2023-04-15'),
	(2, 'Sinh Viên 5 Dốt	', 'HK2 (2023 - 2024)	', 'Sinh Viên', NULL, '2022-04-15', '2023-04-15'),
	(3, 'Dan Stevens 123', '123', '123', NULL, '2023-04-15', '2023-04-16');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
