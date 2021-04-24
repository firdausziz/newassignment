-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2021 at 02:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membership`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ic` bigint(12) NOT NULL,
  `name` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `category` text COLLATE utf16_unicode_ci NOT NULL,
  `phone_no` int(20) NOT NULL,
  `email` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `membership_no` varchar(11) COLLATE utf16_unicode_ci DEFAULT NULL,
  `company` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf16_unicode_ci NOT NULL,
  `date_registered` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no_ic`, `name`, `category`, `phone_no`, `email`, `password`, `membership_no`, `company`, `address`, `date_registered`) VALUES
(1, 890422035, 'firdaus aziz', '', 1129417933, 'firdausziz@gmail.com', '715d7c9ff041047aeb25c535e7e2f661', '2015', 'test', 'test', '2021-04-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
