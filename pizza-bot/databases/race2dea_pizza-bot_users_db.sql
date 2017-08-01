-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2017 at 07:54 AM
-- Server version: 5.5.52-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `race2dea_pizza-bot_users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'test_admin', 'test_admin_password');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `won` int(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `won`) VALUES
(14, 'test_username', 'test_password', 'test@email.com', 1000),
(15, 'user', 'password', 'email@.com', 1039000),
(16, 'user2', 'password2', 'email@2.com', 3532000),
(17, 'user38', 'password3', 'email@3.com', 2000),
(18, 'user4', 'password4', 'email@4.com', 4000),
(19, 'user5', 'password5', 'email@5.com', 5000),
(20, 'user6', 'password6', 'email@6.com', 33000),
(21, 'user7', 'password7', 'email@7.com', 38000),
(22, 'user8', 'password8', 'email@8.com', 50000),
(23, 'user9', 'password9', 'email@9.com', 25000),
(24, 'test_username123', 'test_password123', 'test_email123@gmail.com', 3000),
(25, 'Tihomira', '123', 't_kancheva@mail.bg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
