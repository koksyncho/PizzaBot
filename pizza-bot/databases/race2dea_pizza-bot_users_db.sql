-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Време на генериране:  1 авг 2017 в 20:55
-- Версия на сървъра: 5.5.52-cll
-- Версия на PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `race2dea_pizza-bot_users_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'test_admin', 'test_admin_password');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(100) NOT NULL,
  `user_family_name` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_sex` varchar(25) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_family_name`, `user_password`, `user_email`, `user_sex`, `user_phone`) VALUES
(14, 'test_username', '', 'test_password', 'test@email.com', '', ''),
(15, 'user', '', 'password', 'email@.com', '', ''),
(16, 'user2', '', 'password2', 'email@2.com', '', ''),
(17, 'user38', '', 'password3', 'email@3.com', '', ''),
(18, 'user4', '', 'password4', 'email@4.com', '', ''),
(19, 'user5', '', 'password5', 'email@5.com', '', ''),
(20, 'user6', '', 'password6', 'email@6.com', '', ''),
(21, 'user7', '', 'password7', 'email@7.com', '', ''),
(22, 'user8', '', 'password8', 'email@8.com', '', ''),
(23, 'user9', '', 'password9', 'email@9.com', '', ''),
(24, 'test_username123', '', 'test_password123', 'test_email123@gmail.com', '', ''),
(25, 'Tihomira', '', '123', 't_kancheva@mail.bg', '', ''),
(33, 'JOjo', 'GorASD', 'sadsad', 'hmm@hmm.hmm', 'male', '1231415'),
(34, 'asd', 'asd', 'asd', '1@1', 'male', 'asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
