-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 04:12 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_names` varchar(50) NOT NULL,
  `user_pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_names`, `user_pwd`) VALUES
(10, 'Kok ', 'Dara', 'darakok99@gmail.com', 'Kok Dara', '112233'),
(3, 'Tang ', 'Konghuy', 'konghuy99@gmail.com', 'Tang Konghuy', '069999272'),
(5, 'Thai', 'Seakheng', 'seakheng@gmail.com', 'Thai Seakheng', '11223344'),
(11, 'Leam ', 'Youdo', 'youdo22@gmail.com', 'Leam Youdo', '112233'),
(9, 'Nob', 'Rathana', 'rathana88@gmail.com', 'Nob Rathana', '778899'),
(16, 'Kok', 'Seakly', 'seakly88@gmail.com', 'Kok Seakly', '778899'),
(21, 'Chea', 'Chong', 'Cheachong@gmail.com', 'Chea Chong', '112233'),
(20, 'Chan', 'Dara', 'dara@gmail.com', 'Chan Dara', '112233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
