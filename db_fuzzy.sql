-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for fuzzy
CREATE DATABASE IF NOT EXISTS `fuzzy` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `fuzzy`;

-- Dumping structure for table fuzzy.fuzzyfication
CREATE TABLE IF NOT EXISTS `fuzzyfication` (
  `FuzzyficationID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) DEFAULT NULL,
  `Keterangan` text DEFAULT NULL,
  PRIMARY KEY (`FuzzyficationID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fuzzy.fuzzyfication: ~1 rows (approximately)
INSERT INTO `fuzzyfication` (`FuzzyficationID`, `Nama`, `Keterangan`) VALUES
	(1, 'C-Organik', 'C-Organik merupakan faktor penting penentu kualitas tanah mineral. Semakin tinggi kadar C-Organik total maka kualitas tanah mineral semakin baik. Bahan organik tanah sangat berperan dalam hal memperbaiki sifat fisik tanah, meningkatkan aktivitas biologis tanah, serta untuk meningkatkan ketersediaan hara bagi tanaman'),
	(3, 'sdfds', 'sdfds');

-- Dumping structure for table fuzzy.hasil
CREATE TABLE IF NOT EXISTS `hasil` (
  `HasilID` int(11) NOT NULL AUTO_INCREMENT,
  `PerhitunganID` int(11) DEFAULT NULL,
  `Hitung1` text DEFAULT NULL,
  `Hitung2` text DEFAULT NULL,
  `Hitung3` text DEFAULT NULL,
  `CreatedAT` datetime DEFAULT NULL,
  `UpdatedAT` datetime NOT NULL,
  `DeletedAT` datetime NOT NULL,
  PRIMARY KEY (`HasilID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fuzzy.hasil: ~0 rows (approximately)
INSERT INTO `hasil` (`HasilID`, `PerhitunganID`, `Hitung1`, `Hitung2`, `Hitung3`, `CreatedAT`, `UpdatedAT`, `DeletedAT`) VALUES
	(1, 1, '{"Rule-1":"0.50","Rule-2":"0.50","Rule-3":0,"Rule-4":"0.95","Rule-5":"0.50","Rule-6":"0.40","Rule-7":"0.40","Rule-8":"0.40","Rule-9":"0.50","Rule-10":0,"Rule-11":0,"Rule-12":"0.50","Rule-13":"0.50","Rule-14":0,"Rule-15":"0.50","Rule-16":0,"Rule-17":"0.40","Rule-18":"0.50","Rule-19":"0.95","Rule-20":0,"Rule-21":"0.50","Rule-22":"0.40","Rule-23":"0.50","Rule-24":"0.91","Rule-25":"0.50","Rule-26":"0.91","Rule-27":"0.50","Rule-28":"0.40","Rule-29":"0.40","Rule-30":"0.40"}', '{"Rule-1":85,"Rule-2":55,"Rule-3":100,"Rule-4":68.5,"Rule-5":55,"Rule-6":52,"Rule-7":28,"Rule-8":88,"Rule-9":55,"Rule-10":40,"Rule-11":40,"Rule-12":55,"Rule-13":25,"Rule-14":40,"Rule-15":55,"Rule-16":40,"Rule-17":28,"Rule-18":55,"Rule-19":68.5,"Rule-20":40,"Rule-21":55,"Rule-22":28,"Rule-23":55,"Rule-24":12.7,"Rule-25":55,"Rule-26":12.7,"Rule-27":55,"Rule-28":28,"Rule-29":28,"Rule-30":28}', '{"Z1":"46.94"}', '2023-09-11 15:19:29', '2023-09-11 15:19:29', '0000-00-00 00:00:00'),
	(2, 2, '{"Rule-1":0,"Rule-2":"0.74","Rule-3":0,"Rule-4":"0.74","Rule-5":"0.74","Rule-6":"0.60","Rule-7":"0.60","Rule-8":"0.60","Rule-9":"0.74","Rule-10":0,"Rule-11":0,"Rule-12":0,"Rule-13":"0.74","Rule-14":0,"Rule-15":"0.74","Rule-16":0,"Rule-17":"0.60","Rule-18":0,"Rule-19":"0.74","Rule-20":0,"Rule-21":0,"Rule-22":"0.60","Rule-23":"0.91","Rule-24":"0.74","Rule-25":"0.91","Rule-26":"0.91","Rule-27":"0.91","Rule-28":"0.60","Rule-29":"0.60","Rule-30":"0.60"}', '{"Rule-1":100,"Rule-2":62.2,"Rule-3":100,"Rule-4":62.2,"Rule-5":62.2,"Rule-6":58,"Rule-7":22,"Rule-8":82,"Rule-9":62.2,"Rule-10":40,"Rule-11":40,"Rule-12":40,"Rule-13":17.8,"Rule-14":40,"Rule-15":62.2,"Rule-16":40,"Rule-17":22,"Rule-18":40,"Rule-19":62.2,"Rule-20":40,"Rule-21":40,"Rule-22":22,"Rule-23":67.3,"Rule-24":17.8,"Rule-25":67.3,"Rule-26":12.7,"Rule-27":67.3,"Rule-28":22,"Rule-29":22,"Rule-30":22}', '{"Z1":"46.03"}', '2023-09-11 15:24:54', '2023-09-11 15:24:54', '0000-00-00 00:00:00');

-- Dumping structure for table fuzzy.kesuburantanah
CREATE TABLE IF NOT EXISTS `kesuburantanah` (
  `KesuburanTanahID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `NilaiMin` double NOT NULL,
  `NilaiMax` double NOT NULL,
  PRIMARY KEY (`KesuburanTanahID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table fuzzy.kesuburantanah: ~3 rows (approximately)
INSERT INTO `kesuburantanah` (`KesuburanTanahID`, `Nama`, `NilaiMin`, `NilaiMax`) VALUES
	(1, 'Rendah', 10, 40),
	(2, 'Sedang', 40, 70),
	(3, 'Tinggi', 70, 100);

-- Dumping structure for table fuzzy.perhitungan
CREATE TABLE IF NOT EXISTS `perhitungan` (
  `PerhitunganID` int(11) NOT NULL AUTO_INCREMENT,
  `JenisTanah` varchar(255) DEFAULT NULL,
  `PhTanah` varchar(255) DEFAULT NULL,
  `Daerah` varchar(255) DEFAULT NULL,
  `VarA` double DEFAULT NULL COMMENT 'C- Organik (%)',
  `VarB` double DEFAULT NULL COMMENT 'P2O5 HCL (mg/100g)',
  `VarC` double DEFAULT NULL COMMENT 'K2O HCL',
  `VarD` double DEFAULT NULL COMMENT 'Kejenuhan Basa (%)',
  `VarE` double DEFAULT NULL COMMENT 'KTK (me/100g)',
  `VarF` double DEFAULT NULL COMMENT 'pH H2O',
  `CreatedAT` datetime DEFAULT NULL,
  `UpdatedAT` datetime NOT NULL,
  `DeletedAT` datetime NOT NULL,
  PRIMARY KEY (`PerhitunganID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table fuzzy.perhitungan: ~0 rows (approximately)
INSERT INTO `perhitungan` (`PerhitunganID`, `JenisTanah`, `PhTanah`, `Daerah`, `VarA`, `VarB`, `VarC`, `VarD`, `VarE`, `VarF`, `CreatedAT`, `UpdatedAT`, `DeletedAT`) VALUES
	(1, 'Andosol', '5', NULL, 4, 5, 2, 4, 6, 8, '2023-09-11 15:19:29', '2023-09-11 15:19:29', '0000-00-00 00:00:00'),
	(2, 'Organosol', '8', 'padang', 7, 4, 6, 5, 6, 2, '2023-09-11 15:24:54', '2023-09-11 15:24:54', '0000-00-00 00:00:00');

-- Dumping structure for table fuzzy.phtanah
CREATE TABLE IF NOT EXISTS `phtanah` (
  `PhID` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(225) NOT NULL,
  `NilaiMin` double NOT NULL,
  `NilaiMax` double NOT NULL,
  PRIMARY KEY (`PhID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table fuzzy.phtanah: ~4 rows (approximately)
INSERT INTO `phtanah` (`PhID`, `Nama`, `NilaiMin`, `NilaiMax`) VALUES
	(1, 'Masam', 4.5, 5.5),
	(2, 'Sedang', 5.6, 6.5),
	(3, 'Netral', 6.6, 7.5),
	(4, 'Alkalis', 7.6, 8.6);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
