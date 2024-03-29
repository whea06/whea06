﻿-- Script was generated by Devart dbForge Studio for MySQL, Version 6.0.128.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 1/17/2024 8:42:22 PM
-- Server version: 5.5.5-10.4.24-MariaDB
-- Client version: 4.1

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

-- 
-- Set default database
--
USE librarysystem;

--
-- Definition for table checkin
--
DROP TABLE IF EXISTS checkin;
CREATE TABLE checkin (
  id INT(11) NOT NULL AUTO_INCREMENT,
  role VARCHAR(255) NOT NULL,
  checkinDate DATETIME NOT NULL,
  visitorName VARCHAR(50) NOT NULL,
  visitorID VARCHAR(255) DEFAULT 'NULL',
  department VARCHAR(255) DEFAULT 'NULL',
  purpose VARCHAR(255) NOT NULL,
  notes VARCHAR(255) DEFAULT 'NULL',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci
ROW_FORMAT = DYNAMIC;

--
-- Definition for table facultylist
--
DROP TABLE IF EXISTS facultylist;
CREATE TABLE facultylist (
  id INT(100) NOT NULL AUTO_INCREMENT,
  facultyID VARCHAR(20) NOT NULL,
  fullName VARCHAR(100) NOT NULL,
  department VARCHAR(20) NOT NULL,
  UNIQUE INDEX id (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 14
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci
ROW_FORMAT = DYNAMIC;

--
-- Definition for table login
--
DROP TABLE IF EXISTS login;
CREATE TABLE login (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 18
AVG_ROW_LENGTH = 5461
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci
ROW_FORMAT = DYNAMIC;

--
-- Definition for table studentlist
--
DROP TABLE IF EXISTS studentlist;
CREATE TABLE studentlist (
  id INT(11) NOT NULL AUTO_INCREMENT,
  studentID VARCHAR(10) NOT NULL,
  fullName VARCHAR(50) NOT NULL,
  course VARCHAR(20) NOT NULL,
  department VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 19
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci
ROW_FORMAT = DYNAMIC;

-- 
-- Dumping data for table checkin
--
INSERT INTO checkin VALUES
(1, 'Faculty', '2024-01-17 13:19:59', 'Salazar, Aira', '00000001', 'SOCECS', 'Others', 'Visit the staff'),
(2, 'Student', '2024-01-17 13:37:43', 'Gutierrez, Rhea L', '06902725', 'SOCECS', 'Borrow Books', NULL),
(3, 'Visitor', '2024-01-17 19:22:35', 'whea', NULL, 'STI', 'Research', 'hahaha'),
(4, 'Visitor', '2024-01-17 20:33:36', 'dfdfdf', NULL, 'dfdfdf', 'Event', '');

-- 
-- Dumping data for table facultylist
--
INSERT INTO facultylist VALUES
(1, '00000001', 'Salazar, Aira ', 'SOECS'),
(2, '00000002', 'Pepaño, Shaira Lee', 'SOECS'),
(3, '00000003', 'Ante, Rosemarie', 'SOECS'),
(4, '00000004', 'Aydalla, Jenisen Ivy', 'SOECS'),
(5, '00000005', 'Banton, Marjorie', 'SOECS'),
(6, '00000006', 'Granatin, Stephanie', 'SOECS'),
(7, '00000007', 'Serrano, JP Remar', 'SOECS'),
(8, '00000008', 'Blacer, Jennife', 'SOECS'),
(9, '00000009', 'Batas, Rosean', 'SEAS'),
(10, '00000010', 'Labalan, Ma. Daria', 'SBMA');

-- 
-- Dumping data for table login
--
INSERT INTO login VALUES
(2, 'rhea', 'testest'),
(15, 'admin', 'admin123');

-- 
-- Dumping data for table studentlist
--
INSERT INTO studentlist VALUES
(1, '06902725', 'Gutierrez, Rhea L', 'BLIS', 'SOECS'),
(2, '12345678', 'Renevera, Karl Steven T.', 'BSCpE', 'SOECS'),
(3, '00000001', 'Shaira Irina Pama', 'BLIS', 'SOECS'),
(4, '00000002', 'Jenevie Bolaños', 'BLIS', 'SOECS'),
(5, '00000003', 'Angel Janna Jaynario', 'BLIS', 'SOECS'),
(6, '00000004', 'Carmela Christine Nieto', 'BLIS', 'SOECS'),
(7, '00000005', 'Karen Mae Macinas', 'BLIS', 'SOECS'),
(8, '00000006', 'Cielo Mira Clarisse Morco', 'BLIS', 'SOECS'),
(9, '00000007', 'Al Mabelin', 'BLIS', 'SOECS'),
(10, '00000009', 'Cheska Jane Atun', 'BLIS', 'SOECS'),
(11, '00000010', 'Kae De Mesa', 'BLIS', 'SOECS');

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;