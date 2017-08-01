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
-- Database: `race2dea_pizza-bot_pizzas_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliverers_db`
--

CREATE TABLE IF NOT EXISTS `deliverers_db` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `deliveries_made` int(255) NOT NULL DEFAULT '0',
  `average_delivery_time` int(255) NOT NULL,
  `vehicles_available` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `photo` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `ingredients` varchar(1000) NOT NULL,
  `rating` int(2) NOT NULL DEFAULT '0',
  `maker` varchar(255) NOT NULL,
  `times_bought` int(255) NOT NULL DEFAULT '0',
  `average_delivery_time` int(255) NOT NULL,
  `points_it_gives` int(255) NOT NULL DEFAULT '0',
  `time_for_cooking` int(255) NOT NULL,
  `time_for_delivery` int(255) NOT NULL,
  `number_of_pieces` int(255) NOT NULL,
  `times_rated` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_places_db`
--

CREATE TABLE IF NOT EXISTS `pizza_places_db` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `deliveries_made` int(255) NOT NULL DEFAULT '0',
  `products_submitted` int(255) NOT NULL DEFAULT '0',
  `average_rating` int(255) NOT NULL,
  `ratings_given` int(255) NOT NULL,
  `deliverer_partners` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
