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
  `empoyeeId` int(50) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `classId` int(10) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `admin` (`adminId`, `name`, `lastName`, `phone`, `empoyeeId`, `birthday`, `sex`, `address`, `classId`, `createdBy`) VALUES
(1,	'',	'',	0,	0,	'0000-00-00',	'',	'',	0,	'0'),
(2,	'',	'',	0,	2,	'0000-00-00',	'',	'',	0,	'0'),
(3,	'',	'',	0,	3,	'0000-00-00',	'',	'',	0,	'0'),
(4,	'',	'',	0,	5,	'0000-00-00',	'',	'',	0,	'0');

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `cardId` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sex` varchar(10) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `customers` (`customerId`, `adminId`, `cardId`, `name`, `lastName`, `phone`, `address`, `sex`) VALUES
(1,	0,	'ชย.3874',	'นายดำ',	'ปัญญา',	832011076,	'เครื่องชักผ้า',	'ชาย'),
(2,	0,	'',	'',	'',	0,	'',	''),
(3,	0,	'qw21123',	'นานเขียว หวานช่ำ',	'',	0,	'เครื่องชักผ้า',	''),
(4,	0,	'344ff',	'นายคำ   ',	'ดำปี๋',	4947656,	'14/9 ต.หายยา อ.เมือง จ.เชียงใหม่',	''),
(5,	0,	'344ff',	'asdas',	'asdasd',	0,	'aasd',	'');

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
(1,	0,	0,	0,	2000,	1000,	'2559-06-12',	'2559-05-12');

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `adminId` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `product` (`productId`, `adminId`, `productName`, `price`) VALUES
(1,	0,	'เครื่องปั่น',	3000);

-- 2016-08-25 05:36:41
