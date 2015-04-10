-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2015 at 10:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d3js`
--

-- --------------------------------------------------------

--
-- Table structure for table `schroeter points table`
--

CREATE TABLE IF NOT EXISTS `schroeter points table` (
  `HostelName` text NOT NULL,
  `Points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schroeter points table`
--

INSERT INTO `schroeter points table` (`HostelName`, `Points`) VALUES
('Alakananda', 100),
('Bramhaputra', 39),
('Cauvery', 33),
('Ganga', 92),
('Godavari', 20),
('Jamuna', 12),
('Krishna', 54),
('Mahanadhi', 38),
('Mandakini', 61),
('Narmada', 30),
('Pamba', 71),
('Saraswathi', 52),
('Sarayu', 55),
('Sharavati', 72),
('Sindhu', 32),
('Tamraparani', 45),
('Tapti', 60),
('Sabarmati', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
