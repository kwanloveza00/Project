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
  `phone` varchar(11) NOT NULL,
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
(1,	'นายดี',	'คำดี',	'832011076',	'15099123456',	'12345',	'2007-10-17',	'ชาย',	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	2,	1),
(2,	'kwan',	'kamsai',	'832011076',	'admin',	'09876',	'1996-10-17',	'ชาย',	'14/9 ถ.วัวลาย อ.เมือง จ.เชียงใหม่',	1,	1),
(3,	'',	'',	'0',	'',	'',	'0000-00-00',	'',	'',	0,	0),
(4,	'staff',	'ดีมาก',	'834295867',	'12345',	'12345',	'2009-06-17',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	0,	0),
(5,	'',	'',	'0',	'',	'',	'0000-00-00',	'',	'',	0,	0),
(6,	'staff1',	'kwan',	'832011076',	'staff1',	'12345',	'2016-09-29',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	1,	0),
(7,	'',	'',	'0',	'',	'',	'0000-00-00',	'',	'',	0,	0),
(8,	'',	'',	'0',	'',	'',	'0000-00-00',	'',	'',	2,	1),
(9,	'staff1',	'cus1',	'834295867',	'staff1',	'123456',	'2016-10-05',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	2,	1),
(10,	'staff1',	'cus1',	'834295867',	'staff1',	'123456',	'2016-10-05',	'',	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	2,	1);

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `dealingId` int(11) NOT NULL,
  `cardId` varchar(50) NOT NULL,
  `nameCustomer` varchar(50) NOT NULL,
  `lastNameCus` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `customers` (`customerId`, `adminId`, `dealingId`, `cardId`, `nameCustomer`, `lastNameCus`, `phone`, `address`, `sex`) VALUES
(1,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(2,	1,	0,	'กก.111',	'ลูกค้า1',	'cus1',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย'),
(3,	1,	0,	'กก.111',	'ลูกค้า1',	'cus1',	834295867,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	'ชาย'),
(4,	0,	0,	'กก.3411',	'',	'',	0,	'',	''),
(5,	0,	0,	'กก.3411',	'',	'',	0,	'',	''),
(6,	0,	0,	'กก.3411',	'',	'',	0,	'',	''),
(7,	0,	0,	'',	'',	'',	0,	'',	''),
(8,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(9,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(10,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(11,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(12,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(13,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(14,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(15,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(16,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(17,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(18,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(19,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(20,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(21,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(22,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(23,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(24,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(25,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(26,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(27,	1,	0,	'',	'',	'',	0,	'',	'ชาย'),
(28,	1,	0,	'',	'',	'',	0,	'',	'ชาย');

DROP TABLE IF EXISTS `dealing`;
CREATE TABLE `dealing` (
  `dealingId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `balances` float NOT NULL,
  `seleDate` date NOT NULL,
  PRIMARY KEY (`dealingId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `dealing` (`dealingId`, `adminId`, `customerId`, `productId`, `balances`, `seleDate`) VALUES
(1,	1,	0,	1,	0,	'0000-00-00'),
(2,	1,	0,	1,	0,	'2016-09-30'),
(3,	1,	3,	1,	0,	'2016-09-30'),
(4,	0,	0,	1,	0,	'2016-09-29'),
(5,	0,	0,	1,	0,	'2016-09-23'),
(6,	0,	0,	1,	0,	'2016-09-23'),
(7,	0,	0,	0,	0,	'0000-00-00'),
(8,	1,	0,	0,	0,	'0000-00-00'),
(9,	1,	0,	0,	0,	'0000-00-00'),
(10,	1,	0,	0,	0,	'0000-00-00'),
(11,	1,	0,	0,	0,	'0000-00-00'),
(12,	1,	0,	0,	0,	'0000-00-00'),
(13,	1,	0,	0,	0,	'0000-00-00'),
(14,	1,	0,	0,	0,	'0000-00-00'),
(15,	0,	0,	0,	0,	'0000-00-00'),
(16,	1,	0,	0,	0,	'0000-00-00'),
(17,	1,	0,	0,	0,	'0000-00-00'),
(18,	1,	0,	0,	0,	'0000-00-00'),
(19,	1,	0,	0,	0,	'0000-00-00'),
(20,	1,	0,	0,	0,	'0000-00-00'),
(21,	1,	0,	0,	0,	'0000-00-00'),
(22,	1,	0,	0,	0,	'0000-00-00'),
(23,	1,	0,	0,	0,	'0000-00-00'),
(24,	1,	0,	0,	0,	'0000-00-00'),
(25,	1,	0,	0,	0,	'0000-00-00'),
(26,	1,	0,	0,	0,	'0000-00-00'),
(27,	1,	0,	0,	0,	'0000-00-00'),
(28,	1,	0,	0,	0,	'0000-00-00'),
(29,	1,	0,	0,	0,	'0000-00-00');

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL AUTO_INCREMENT,
  `dealingId` int(11) NOT NULL,
  `payment` float NOT NULL,
  `paymenetDate` date NOT NULL,
  PRIMARY KEY (`paymentId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `payment` (`paymentId`, `dealingId`, `payment`, `paymenetDate`) VALUES
(1,	0,	0,	'0000-00-00');

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

-- 2016-10-13 08:39:18
