-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2026 at 09:21 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rv_photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `user_id`) VALUES
(5, NULL, NULL, 'hey! i really liked your photography site....', '2026-02-13 21:59:00', 7),
(6, NULL, NULL, 'yo! sharmila here', '2026-02-13 22:00:23', 8),
(7, 'Sushant Singh', 'sushant12@gmail.com', 'hello i m Sushant!', '2026-02-28 02:52:55', 10),
(8, 'Veera Gupta', 'veera.gupta.5596327@ves.ac.in', 'helooooooooooooo', '2026-02-28 03:04:15', 7),
(9, 'Seo Yeji', 'seo.yeji@gmail.com', 'decent website, loved ur work', '2026-05-07 21:17:43', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(9, 'Kim Nam Jiwoo', 'kimnamjiwoo055@gmail.com', '$2y$10$H4V/PzbX1dk4TO/FAb2NmuAK/rNd8bs/z7PqOWCQ.m5D3XFmO.MA.'),
(7, 'Veera Gupta', 'veera.gupta.5596327@ves.ac.in', '$2y$10$7m28MpaM5.ZHLmwDuXyJDeVC6o7u2O0lpzfOzvRjstm0SjfgYknKu'),
(8, 'Sharmila Gupta', 'SHARMILAG055@GMAIL.COM', '$2y$10$cRLVAvo6D8ra//vvo6KOD.QdxlysaLicByWhR5oPGVPiPpn3cNmie'),
(10, 'Sushant Singh', 'sushant12@gmail.com', '$2y$10$0qwg.V.g2aNBgk4FFwfQve3GwBsbdb9LPZAowRf68C8J0w8.Ej1Ay'),
(11, 'Sharmila Gupta', 'veeragupta055@gmail.com', '$2y$10$7Vire/8dvGjN9txVCPGzse.7L3.xRQ4ydAsuRMfvjzV5pW4vklaji'),
(12, 'Seo Yeji', 'seo.yeji@gmail.com', '$2y$10$l5TsZoXjiiP/mshqs0K/K.Y69pJHke9/l8z7D0g7Ex2I37eXBZ/wu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
