-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 11:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employ`
--

-- --------------------------------------------------------

--
-- Table structure for table `employdetails`
--

CREATE TABLE `employdetails` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `emp_id` int(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `doj` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employdetails`
--

INSERT INTO `employdetails` (`id`, `first_name`, `last_name`, `emp_id`, `mobile`, `gender`, `doj`, `designation`, `salary`) VALUES
(4, 'Suryansh pratap', 'singh', 1, 2147483647, 'male', '2023-03-03', 'backend dev', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employdetails`
--
ALTER TABLE `employdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employdetails`
--
ALTER TABLE `employdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
