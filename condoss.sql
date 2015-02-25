-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `condoss`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'condoss001', '123456'),
(3, 'hellokitty', '10412123');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` int(10) unsigned zerofill NOT NULL,
  `office_tel` int(9) unsigned zerofill NOT NULL,
  `address` text NOT NULL,
  `identity_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `user_profile`
--

INSERT INTO `user_profile` (`id`, `f_name`, `l_name`, `email`, `mobile_number`, `office_tel`, `address`, `identity_id`, `user_id`) VALUES
(1, 'วิทวัส', 'จันทร์หนู', 'manzermoon@gmail.com', 0895926165, 076242960, '58/9', 32767, 2),
(2, 'kitty', 'hello', 'kity@gmail.com', 0812345678, 005545545, '99/9', 1929900356023, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
