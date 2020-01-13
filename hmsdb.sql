-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 05:11 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `p_id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `docapp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`p_id`, `password`, `fname`, `lname`, `email`, `contact`, `docapp`) VALUES
(1, 'pass1', 'Aftabur', 'Rahman', 'ar@gmail.com', 1760384800, 'Dr Mahmud From 6pm to 8pm'),
(2, 'pass2', 'ar', 'tonmoy', 'art@gmail.com', 123464, 'Dr Mamun From 4pm to 6pm'),
(3, 'pass3', 'mahe', 'karim', 'mk@gmail.com', 1699282, 'Dr Mahmud From 6pm to 8pm'),
(4, 'pass4', 'mahim', 'khan', 'mkh@gmai.com', 376354584, 'Dr Mamun From 4pm to 6pm'),
(5, 'pass5', 'syeda', 'lamima', 'syeda@gmail.com', 2147483647, 'Dr Mahmud From 6pm to 8pm');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_name` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_name`, `quantity`) VALUES
('vitamin', 200),
('napa extra', 250);

-- --------------------------------------------------------

--
-- Table structure for table `pay_out`
--

CREATE TABLE `pay_out` (
  `payment_done` varchar(30) NOT NULL,
  `payment_panding` varchar(40) NOT NULL,
  `checkout` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_out`
--

INSERT INTO `pay_out` (`payment_done`, `payment_panding`, `checkout`) VALUES
('aftabur', 'kawser', 'moon'),
('Karim', 'mamun', 'mamun'),
('aftab', 'mahim', 'mahe');

-- --------------------------------------------------------

--
-- Table structure for table `stuffsubmit`
--

CREATE TABLE `stuffsubmit` (
  `s_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(11) NOT NULL,
  `deptsel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuffsubmit`
--

INSERT INTO `stuffsubmit` (`s_id`, `fname`, `lname`, `email`, `contact`, `deptsel`) VALUES
(1, 'aftabur', 'rahman', 'aftabur@gmail.com', 1760384800, 'dept_1'),
(2, 'mahim', 'khan', 'mahim@gmail.com', 2147483647, 'dept_2'),
(3, 'lamima', 'farhat', 'lamima@gmail.com', 4548544, 'dept_1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
