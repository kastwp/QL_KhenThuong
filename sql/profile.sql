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

-- Dumping structure for table nlcs.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `mssv` varchar(10) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `gioitinh` varchar(3) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `lop` varchar(8) NOT NULL,
  `nganh` varchar(50) NOT NULL,
  `nienkhoa` varchar(10) NOT NULL,
  `khoa` varchar(50) NOT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`mssv`),
  KEY `FK_profile_users` (`user_id`),
  CONSTRAINT `FK_profile_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table nlcs.profile: ~2 rows (approximately)
INSERT INTO `profile` (`mssv`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `sdt`, `lop`, `nganh`, `nienkhoa`, `khoa`, `user_id`) VALUES
	('B2014723', 'Lê Tường Vy', 'Nữ', '2002-04-30', '67/104, Nguyễn Văn Thảnh, Khóm 2, p.Cái Vồn, TX.Bình Minh-Vĩnh Long', '0932887638', 'DI20V7A2', 'Công Nghệ Thông Tin', '46', 'Trường Công Nghệ Thông Tin & Truyền Thông', 1),
	('B2014803', 'Trần Quốc Tuấn', 'Nam', '2002-09-30', '216/8D Mạc Đỉnh Chi, P.Hưng Lợi, Q.Ninh Kiều, TP.Cần Thơ', '0919948440', 'DI20V7A3', 'Công Nghệ Thông Tin', '46', 'Trường Công Nghệ Thông Tin & Truyền Thông', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
