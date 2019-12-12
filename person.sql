-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 03:03 PM
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
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Userid` int(10) UNSIGNED NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zipcode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Userid`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`, `Dateofbirth`, `Address`, `City`, `Zipcode`) VALUES
(17, 'asd', 'asd', 'admin', 'admin@gmail.com', '$2y$10$xEoOeiVdTU872', '0000-00-00', 'haha', '1234', '1234'),
(18, 'nims', 'fatima', 'fatimanims', 'fatimanims@gmail.com', '$2y$10$PzVDvD.snTOv1', '0000-00-00', 'bla', 'fdsd', '134235'),
(19, 'Baba', 'Bababa', 'Bababa', 'Bababa@gmail.com', '$2y$10$TJF6evXz3nWyr', '0000-00-00', 'No, 5 PJS11/5', 'kuala lumpur', '56702'),
(23, 'Send', 'memes', 'Sendmemes', 'gtakbaso@email.com', '$2y$10$h8G96Imm4St51', '0000-00-00', 'Avenue lululul', 'Kangkung', '4123421');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
