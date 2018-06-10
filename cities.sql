-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 02:55 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cities`
--

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `Route_id` int(11) NOT NULL,
  `Train_id` int(11) NOT NULL,
  `Source` varchar(128) NOT NULL,
  `Destination` varchar(128) NOT NULL,
  `Depart_date` varchar(128) NOT NULL,
  `Depart_time` varchar(128) NOT NULL,
  `Total_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`Route_id`, `Train_id`, `Source`, `Destination`, `Depart_date`, `Depart_time`, `Total_cost`) VALUES
(1, 1, 'Cairo', 'Alexandria', '01/06/2018', '11', 30),
(2, 2, 'Alexandria', 'Cairo', '02/06/2018', '12', 20);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `Train_id` int(11) NOT NULL,
  `Train_name` varchar(128) NOT NULL,
  `Train_class` varchar(128) NOT NULL,
  `Booked_seats` int(11) NOT NULL,
  `Total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Train_id`, `Train_name`, `Train_class`, `Booked_seats`, `Total_seats`) VALUES
(1, 'Test Train Name', 'Test Train Class', 0, 10),
(2, 'Alex Train', '2nd Class', 0, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`Route_id`),
  ADD KEY `Train_id` (`Train_id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`Train_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_ibfk_1` FOREIGN KEY (`Train_id`) REFERENCES `trains` (`Train_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
