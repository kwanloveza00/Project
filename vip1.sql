-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `vip1`;
CREATE TABLE `vip1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `balances` int(100) NOT NULL,
  `pay` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `vip1` (`id`, `card`, `name`, `product`, `price`, `balances`, `pay`) VALUES
(1,	'',	'นายดำ ปัญญา',	'เครื่องชักผ้า',	5000,	2000,	3000);

-- 2016-06-14 14:50:59
