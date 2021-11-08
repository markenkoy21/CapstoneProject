-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:38 PM
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
-- Table structure for table `faculty_tbl`
--

CREATE TABLE `faculty_tbl` (
  `id` int(11) NOT NULL,
  `teachers_number` varchar(255) NOT NULL,
  `accfeu_accent` varchar(255) NOT NULL,
  `librarian` varchar(255) NOT NULL,
  `registrar` varchar(255) NOT NULL,
  `office_department_head` varchar(255) NOT NULL,
  `program_coordinator` varchar(255) NOT NULL,
  `dean_principal` varchar(255) NOT NULL,
  `hrd_officer` varchar(255) NOT NULL,
  `accountant` varchar(255) NOT NULL,
  `vp_accademic_affairs` varchar(255) NOT NULL,
  `vp_finance_ancilllary` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_tbl`
--

INSERT INTO `faculty_tbl` (`id`, `teachers_number`, `accfeu_accent`, `librarian`, `registrar`, `office_department_head`, `program_coordinator`, `dean_principal`, `hrd_officer`, `accountant`, `vp_accademic_affairs`, `vp_finance_ancilllary`, `status`) VALUES
(1, '12000231', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0123456', '2', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '2434343', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '867878787', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '54573', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '123456789', '0', '0', '0', '0', '0', '0', '3', '0', '0', '0', '0'),
(8, '123654789', '0', '0', '0', '0', '0', '0', '3', '0', '0', '0', '0'),
(9, '000002', '1', '1', '1', '1', '1', '1', '3', '1', '1', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `teachers_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(255) NOT NULL,
  `signatory_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `name`, `course`, `year_level`, `student_number`, `teachers_number`, `password`, `account_type`, `signatory_type`) VALUES
(31, 'admin', '', '', '', '', 'password', 1, 0),
(40, 'MARK KEN G. MALBAS', 'BSIT', '4th Year', '201801232', '', 'password', 4, 0),
(42, 'Sherrah Francisco', '', '', '', '0123456', 'password', 3, 0),
(45, 'Cyndilyn Agudo', '', '', '', '', 'password', 2, 12),
(65, 'Erica Ubani', 'BSIT', '4th Year', '123456', '', 'password', 4, 0),
(67, 'Juan Dela Cruz', 'BSREM', '4th Year', '201584', '', 'password', 4, 0),
(72, 'Sherryl Ann Agudo', 'BSIT', '', '', '', 'password', 2, 2),
(75, 'DEPARTMENT TREASURER', '', '', '', '', 'password', 2, 1),
(76, 'DEPARTMENT DEAN', 'BSIT', '', '', '', 'password', 2, 2),
(77, 'LIBRARIAN', '', '', '', '', 'password', 2, 3),
(78, 'COORDINATOR OF STUDENT AFFAIRS', '', '', '', '', 'password', 2, 4),
(79, 'NSTP', '', '', '', '', 'password', 2, 5),
(80, 'ACCSS CHAPTER TREASURER', '', '', '', '', 'password', 2, 6),
(81, 'ACCSSG TREASURER', '', '', '', '', 'password', 2, 7),
(82, 'REGISTRAR', '', '', '', '', 'password', 2, 8),
(83, 'VP FOR FINANCE', '', '', '', '', 'password', 2, 9),
(84, 'ACCFEU/ACCENT', '', '', '', '', 'password', 2, 10),
(85, 'LIBRARIAN FOR FACULTY', '', '', '', '', 'password', 2, 15),
(86, 'OFFICE DEPARTMENT HEAD', '', '', '', '', 'password', 2, 12),
(87, 'PROGRAM COORDINATOR', '', '', '', '', 'password', 2, 13),
(88, 'DEAN/PRINCIPAL', '', '', '', '', 'password', 2, 14),
(89, 'HRD OFFICER', '', '', '', '', 'password', 2, 15),
(90, 'ACCOUNTANT', '', '', '', '', 'password', 2, 16),
(91, 'VP ACADEMIC AFFAIRS', '', '', '', '', 'password', 2, 18),
(92, 'VP FOR FINANCE & ANCILLARY SERVICES', '', '', '', '', 'password', 2, 19),
(93, 'Kim Blanco', '', '', '', '123456789', 'password', 3, 0),
(98, 'light fury', '', '', '', '123654789', 'password', 3, 0),
(99, 'Try uman ', '', '', '', '000002', 'password', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(11) NOT NULL,
  `rolenumber` varchar(255) NOT NULL,
  `department_treasurer` varchar(255) NOT NULL,
  `department_dean` varchar(255) NOT NULL,
  `librarian` varchar(255) NOT NULL,
  `coordinator_of_student_affairs` varchar(255) NOT NULL,
  `nstp` varchar(255) NOT NULL,
  `accss_chapter_treasurer` varchar(255) NOT NULL,
  `accssg_treasurer` varchar(255) NOT NULL,
  `registrar` varchar(255) NOT NULL,
  `vp_for_finance` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `rolenumber`, `department_treasurer`, `department_dean`, `librarian`, `coordinator_of_student_affairs`, `nstp`, `accss_chapter_treasurer`, `accssg_treasurer`, `registrar`, `vp_for_finance`, `status`) VALUES
(1, '201801232', '0', '2', '1', '1', '1', '1', '1', '1', '1', '0'),
(2, '123456', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0'),
(3, '201584', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytbl`
--
ALTER TABLE `mytbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mytbl`
--
ALTER TABLE `mytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
