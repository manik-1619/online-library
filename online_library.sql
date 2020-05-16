-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2014 at 05:52 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_information`
--

CREATE TABLE IF NOT EXISTS `client_information` (
  `user_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_information`
--

INSERT INTO `client_information` (`user_name`, `mobile`, `email`, `password`) VALUES
('Kamrul Hasan', '01718586174', 'mhgola@gmail.com', '30'),
('Md. Alamin', '01740257676', 'alamin@yahoo.com', '1107032'),
('Md. Milon Islam', '01718586174', 'miloncse@yahoo.com', '1107020'),
('Robiul', '01723589674', 'robi@yahoo.com', '1107033');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `book_name` varchar(100) NOT NULL,
  `writer_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `seller` varchar(100) NOT NULL,
  `sell_time` varchar(100) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `buy_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`book_name`, `writer_name`, `price`, `category`, `seller`, `sell_time`, `buyer`, `buy_time`) VALUES
('Let Us C', 'Yashvant Kanetkar', 120, 'Faculty of EEE', 'Kamrul Hasan', '04/03/14 22:13:06', '', ''),
('Thermal Engineering', 'Gupta', 200, 'Faculty of ME', 'Kamrul Hasan', '04/03/14 22:13:30', '', ''),
('Introduction to Algorithms', 'coremen', 200, 'Faculty of EEE', 'Robiul', '07/03/14 5:57:08', '', ''),
('Transportation Engineering', 'Niharul', 250, 'Faculty of CE', 'Robiul', '07/03/14 6:52:59', '', ''),
('Statistics', 'Spigel', 130, 'Faculty of CE', 'Md. Alamin', '10/03/14 4:08:45', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
