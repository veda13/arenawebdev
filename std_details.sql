-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2016 at 07:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_details`
--

CREATE TABLE `std_details` (
  `std_id` int(11) NOT NULL,
  `Name` varchar(1024) NOT NULL,
  `Branch` varchar(1024) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` char(255) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Registered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Address` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Details of the student';

--
-- Dumping data for table `std_details`
--

INSERT INTO `std_details` (`std_id`, `Name`, `Branch`, `Age`, `Gender`, `Date_of_Birth`, `Registered_on`, `Address`) VALUES
(456789, 'Bindu', 'CSE', 20, 'Female', '1994-12-17', '2016-02-18 18:14:40', '2-1-98, Indira Nagar.'),
(567890, 'Sridevi', 'IT', 22, 'Female', '1982-11-20', '2012-02-18 18:18:21', '3-4-56A, Srinagar'),
(678945, 'Sravani', 'Mech', 20, 'Female', '1993-02-24', '2011-06-19 04:50:21', '1-3-4G,Bhavani Nagar'),
(3456789, 'Hema', 'EEE', 19, 'Female', '1993-04-12', '2011-05-18 18:18:21', '3-4-56A, Gandhi Nagar'),
(5675903, 'Nithyusha', 'ECE', 20, 'Female', '1994-05-23', '2011-07-21 18:30:00', 'Balsamudram'),
(8765433, 'Sindharath', 'CSE', 21, 'Male', '1994-12-22', '2011-08-09 07:35:59', '2-4-5B,Teacher''s Colony'),
(12345678, 'Karthik', 'Civil', 19, 'Male', '2011-05-17', '2011-02-18 04:15:30', '3-5A-1B/c, Ramnagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_details`
--
ALTER TABLE `std_details`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_details`
--
ALTER TABLE `std_details`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31245765;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
