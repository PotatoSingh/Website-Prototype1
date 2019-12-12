-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 02:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Bookedid` int(10) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Action` varchar(60) NOT NULL,
  `Fantasy` varchar(60) NOT NULL,
  `Romance` varchar(60) NOT NULL,
  `Children` varchar(60) NOT NULL,
  `Horror` varchar(60) NOT NULL,
  `Sci-fi` varchar(60) NOT NULL,
  `Datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Bookedid`, `Username`, `Action`, `Fantasy`, `Romance`, `Children`, `Horror`, `Sci-fi`, `Datee`) VALUES
(1, 'Admin', 'Before I Go to Sleep', 'A Game of Thrones', 'Me Before You', '', '', '', '2019-07-03'),
(2, 'Bababa', '', 'A Clash of Kings', '', '', '', '', '0000-00-00'),
(1, 'Admin', 'Before I Go to Sleep', 'A Game of Thrones', 'Me Before You', '', '', '', '2019-07-03'),
(2, 'Bababa', '', 'A Clash of Kings', '', '', '', '', '2019-07-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
