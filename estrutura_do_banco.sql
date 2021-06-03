-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2019 at 11:41 AM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vampyrsoda-blog`
--
CREATE DATABASE IF NOT EXISTS `vampyrsoda-blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `vampyrsoda-blog`;

-- --------------------------------------------------------

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `artigos`;
CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `conteudo`) VALUES
(1, 'Hi, I`m vampyrsoda! :)', 'Hoje em dia eu sou animador e desenvolvedor e tenho direcionado meus estudos para a area de Front-End e Mobile development.'),
(2, 'Hack!ng Z0nE', 'C0DE / / / Dicas & Tutorials + + + '),
(3, 'Welcome to the Dark-Side', 'Conheca alguns projetos ja desenvolvidos! ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
