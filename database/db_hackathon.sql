-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2019 at 03:35 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subs`
--

DROP TABLE IF EXISTS `tbl_subs`;
CREATE TABLE IF NOT EXISTS `tbl_subs` (
  `subs_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subs_fname` varchar(120) NOT NULL,
  `subs_lname` varchar(120) NOT NULL,
  `subs_email` varchar(120) NOT NULL,
  `subs_country` varchar(75) NOT NULL,
  `subs_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subs_last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subs`
--

INSERT INTO `tbl_subs` (`subs_id`, `subs_fname`, `subs_lname`, `subs_email`, `subs_country`, `subs_date`, `subs_last_update`) VALUES
(1, 'test1', 'test1', 'test@gmail.com', 'Iceland', '2019-02-11 18:02:02', '2019-02-11 18:02:44'),
(2, 'test2', 'test2', 'test2@gmail.com', 'Canada', '2019-02-11 18:02:20', '2019-02-11 18:03:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
