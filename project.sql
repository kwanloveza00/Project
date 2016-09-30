-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `empoyeeId` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `classId` int(2) NOT NULL,
  `createdBy` int(11) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`adminId`, `name`, `lastName`, `phone`, `empoyeeId`, `password`, `birthday`, `sex`, `address`, `classId`, `createdBy`) VALUES
(1,	'นายดี',	'คำดี',	832011076,	'15099123456',	'12345',	'2007-10-17',	'ชาย',	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	2,	1),
(2,	'kwan',	'kamsai',	832011076,	'admin',	'09876',	'1996-10-17',	'ชาย',	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	1,	1),
(3,	'',	'',	0,	'',	'',	'0000-00-00',	'',	'',	0,	0),
(4,	'staff',	'ดีมาก',	834295867,	'12345',	'12345',	'2009-06-17',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	0,	0),
(5,	'',	'',	0,	'',	'',	'0000-00-00',	'',	'',	0,	0),
(6,	'staff1',	'kwan',	832011076,	'staff1',	'12345',	'2016-09-29',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	1,	0),
(7,	'',	'',	0,	'',	'',	'0000-00-00',	'',	'',	0,	0);

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `cardId` varchar(50) NOT NULL,
  `nameCustomer` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `customers` (`customerId`, `adminId`, `cardId`, `nameCustomer`, `lastName`, `phone`, `address`, `sex`) VALUES
(1,	1,	'กก.1234',	'นายหำ',	'เอวดี',	0,	'',	'ชาย'),
(2,	1,	'ฟก.1122',	'นายเขียว',	'หวานช่ำ',	812345678,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'ชาย'),
(3,	0,	'',	'',	'',	0,	'',	''),
(4,	0,	'กก.333',	'นายกี',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(5,	0,	'กก.333',	'นายกี',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(6,	0,	'กก.333',	'นายกี',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(7,	0,	'กก.333',	'นาย33',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(8,	0,	'กก.333',	'นาย33',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(9,	0,	'กก.333',	'นาย33',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(10,	0,	'กก.333',	'นาย33',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(11,	0,	'กก.333',	'นาย33',	'มาดิ',	834295867,	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	'หญิง'),
(12,	0,	'กก.5555',	'custom1',	'mer',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย'),
(13,	0,	'กก.5555',	'custom2',	'mer',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย'),
(14,	0,	'กก.5555',	'custom2',	'mer',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย'),
(15,	0,	'กก.5555',	'custom2',	'mer',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย');

DROP TABLE IF EXISTS `dealing`;
CREATE TABLE `dealing` (
  `dealingId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `balances` float NOT NULL,
  `paymenet` float NOT NULL,
  `paymenetDate` date NOT NULL,
  `seleDate` date NOT NULL,
  PRIMARY KEY (`dealingId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `dealing` (`dealingId`, `adminId`, `customerId`, `productId`, `balances`, `paymenet`, `paymenetDate`, `seleDate`) VALUES
(1,	1,	1,	1,	2000,	1000,	'2559-06-12',	'2559-05-12'),
(2,	2,	2,	2,	2000,	1000,	'2559-06-12',	'2559-05-12'),
(3,	0,	0,	0,	0,	0,	'0000-00-00',	'0000-00-00'),
(4,	0,	0,	0,	0,	0,	'0000-00-00',	'2016-09-23'),
(5,	0,	0,	0,	0,	0,	'0000-00-00',	'2016-09-28'),
(6,	0,	0,	0,	0,	0,	'0000-00-00',	'2016-09-28'),
(7,	0,	0,	0,	0,	0,	'0000-00-00',	'2016-09-28'),
(8,	0,	0,	0,	0,	0,	'0000-00-00',	'2016-09-28');

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `product` (`productId`, `adminId`, `productName`, `price`) VALUES
(1,	0,	'เครื่องปั่น',	2800),
(2,	0,	'เครื่องปั่น',	2500);

-- 2016-09-30 06:47:32
