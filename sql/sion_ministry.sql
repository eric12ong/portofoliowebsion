-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 05:02 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sion_ministry`
--
CREATE DATABASE IF NOT EXISTS `sion_ministry` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sion_ministry`;

-- --------------------------------------------------------

--
-- Table structure for table `browser_tab`
--

CREATE TABLE IF NOT EXISTS `browser_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tab_text` varchar(255) NOT NULL,
  `tab_icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `browser_tab`
--

INSERT INTO `browser_tab` (`id`, `tab_text`, `tab_icon`) VALUES
(1, 'Sion Ministry', 'images/logo_sion_ministry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_logo` varchar(255) NOT NULL,
  `header_site` varchar(255) NOT NULL,
  `header_text` varchar(255) NOT NULL,
  `header_pemkab_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `header_logo`, `header_site`, `header_text`, `header_pemkab_logo`) VALUES
(1, 'images/logo_winlink_solution.png', 'jdih.tobasa.go.id', 'Jaringan Dokumentasi dan Informasi Hukum', 'images/logo_winlink_solution.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(255) NOT NULL,
  `menu_rank` int(2) NOT NULL,
  `menu_parent` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `menu_link`, `menu_rank`, `menu_parent`) VALUES
(1, 'Beranda', '', 1, 0),
(2, 'Profil', '', 2, 0),
(3, 'Sejarah', '', 1, 2),
(4, 'Visi & Misi', '', 2, 2),
(11, 'Pengajaran', '', 3, 0),
(12, 'Event Sion', '', 4, 0),
(13, 'Contact Us', '', 5, 0),
(14, 'Sion Raya', '', 1, 4),
(15, 'Persekutuan Doa Sion (PDS)', '', 2, 4),
(16, 'Invasion Camp', '', 3, 4),
(17, 'Kemah Orientasi Pekerja Sion', '', 4, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
