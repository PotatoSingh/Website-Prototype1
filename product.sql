-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 03:04 PM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Productid` int(10) UNSIGNED NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Productid`, `Genre`, `Title`, `Price`) VALUES
(1, 'Action/Mystery', 'The Secret Place', '7'),
(3, 'Action/Mystery', 'Before I Go to Sleep', '7'),
(4, 'Action/Mystery', 'Big Little Lies', '7'),
(5, 'Action/Mystery', 'Free Fall', '7'),
(6, 'Action/Mystery', 'Gone Girl', '7'),
(7, 'Action/Mystery', 'Jane Steele', '7'),
(8, 'Action/Mystery', 'Still Mine', '7'),
(9, 'Action/Mystery', 'The Cuckoo\'s Calling', '7'),
(10, 'Action/Mystery', 'The Dinner', '7'),
(11, 'Action/Mystery', 'The Suspect', '7'),
(12, 'Fantasy', 'Harry Potter and the Philosopher\'s Stone', '7'),
(14, 'Fantasy', 'Fantastic Beasts and Where to Find Them', '7'),
(15, 'Fantasy', 'A Game of Thrones', '7'),
(16, 'Fantasy', 'A Storm of Swords', '7'),
(17, 'Fantasy', 'The Hobbit', '7'),
(18, 'Fantasy', 'King\'s Dragon', '7'),
(19, 'Fantasy', 'A Clash of Kings', '7'),
(20, 'Fantasy', 'The Chronicles of Narnia', '7'),
(21, 'Fantasy', 'Glass Sword', '7'),
(22, 'Fantasy', 'Muse of Nightmares', '7'),
(24, 'Romance', 'Field Notes of Love', '7'),
(25, 'Romance', 'The DNA of Your and Me', '7'),
(26, 'Romance', 'Me Before You', '7'),
(27, 'Romance', 'The Notebook', '7'),
(28, 'Romance', 'This Man', '7'),
(29, 'Romance', 'Story of Oz', '7'),
(30, 'Romance', 'The Fault In Our Stars', '7'),
(31, 'Romance', 'Twilight', '7'),
(32, 'Romance', 'Act Like It', '7'),
(33, 'Romance', 'The Last Song', '7'),
(35, 'Children', 'Where The Wild Things Are', '7'),
(36, 'Children', 'The Very Hungry Caterpillar', '7'),
(37, 'Children', 'Goodnight Moon', '7'),
(38, 'Children', 'The BFG', '7'),
(39, 'Children', 'Madeline', '7'),
(40, 'Children', 'Guess How Much I Love You', '7'),
(41, 'Children', 'Charlie and The Chocolate Factory', '7'),
(42, 'Children', 'The Tale of Peter Rabbit', '7'),
(43, 'Children', 'The Wonderful Things You Will Be', '7'),
(44, 'Children', 'The Little Prince', '7'),
(46, 'Horror', 'The Hunger', '7'),
(47, 'Horror', 'The Missing Season', '7'),
(48, 'Horror', 'Cardinal Black', '7'),
(49, 'Horror', 'The Cabin at the End of the World', '7'),
(50, 'Horror', 'Unbury Carol', '7'),
(51, 'Horror', 'Sawkill Girls', '7'),
(52, 'Horror', 'Dread Nation', '7'),
(53, 'Horror', 'Pitch Dark', '7'),
(54, 'Horror', 'Sleeping Beauties', '7'),
(55, 'Horror', 'Ararat', '7'),
(57, 'Sci-Fi', 'The Lord of the Rings', '7'),
(58, 'Sci-Fi', 'The Hitchhiker\'s Guide to the Galaxy', '7'),
(59, 'Sci-Fi', 'Ender\'s Game', '7'),
(60, 'Sci-Fi', 'Dune', '7'),
(61, 'Sci-Fi', '1984', '7'),
(62, 'Sci-Fi', 'Brave New World', '7'),
(63, 'Sci-Fi', 'Animal Farm', '7'),
(64, 'Romance', 'The Calculating Stars', '7'),
(65, 'Sci-Fi', 'Ancestral Night', '7'),
(66, 'Sci-Fi', 'The Gone World', '7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Productid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
