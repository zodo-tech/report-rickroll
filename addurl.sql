-- phpMyAdmin SQL Dump
-- version 3.3.7deb11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 11:22 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3-7+squeeze29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `add.url.ph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass_md5`) VALUES
(1, 'addurladminname', '16b6921eefe8e7dc1291a6b3bab05fd9');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `detail` longtext NOT NULL,
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `detail` (`detail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `detail`, `datetime`, `view`) VALUES
(0, 'eti.pw', '08/10/16 23:15:26', 0),
(1, 'fhost.ml', '08/10/16 23:15:34', 0),
(2, 'zoho.cf', '08/10/16 23:15:41', 0),
(3, 'yavorov.eu', '08/10/16 23:15:48', 0),
(4, 'compileonline.eti.pw', '08/10/16 23:20:09', 0);
