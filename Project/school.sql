-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 01:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `courses` varchar(40) NOT NULL,
  `birth_date` date NOT NULL,
  `student_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_image`, `courses`, `birth_date`, `student_status`) VALUES
(1, 'Ali', 'student1.jpg', 'HTML', '2006-01-01', 'available'),
(2, 'Amr', 'student2.jpg', 'CSS', '2004-10-16', 'not available'),
(3, 'Hassan', 'student3.jpg', 'PHP', '2005-05-06', 'available'),
(4, 'Mariam', 'student5.jpg', 'HTML', '2005-08-09', 'not available'),
(5, 'Mona', 'student6.jpg', 'CSS', '2005-12-12', 'available'),
(6, 'Laila', 'student8.jpg', 'PHP', '2006-07-04', 'not available'),
(7, 'Mohamed', 'student4.jpg', 'HTML', '2004-06-04', 'available'),
(8, 'Mahmoud', 'student7.jpg', 'CSS', '2005-02-02', 'not available'),
(9, 'Mohanad', 'student9.jpg', 'PHP', '2006-03-06', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
