-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 02:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsclerance`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `studentNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `name`, `course`, `studentNo`, `password`) VALUES
(1, 'John Doe', 'MBA', '20210001', 'doejohn'),
(2, 'KAREN C. MARTINEZ', 'BSE', '20159506', '1234'),
(3, '1', 'MAE', '1', '1'),
(4, 'Karen', 'BSE', '1234', '1234'),
(5, 'MRK KEN G. MALBAS', 'BSIT', '201801232', 'malbas21'),
(6, 'ERICA UBANI', 'BSIT', '123456789', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytbl`
--
ALTER TABLE `mytbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytbl`
--
ALTER TABLE `mytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
