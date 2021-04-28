-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 09:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_confrim`
--

CREATE TABLE `booking_confrim` (
  `booked_by` varchar(100) NOT NULL,
  `ap_name` varchar(100) NOT NULL,
  `num_flat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_confrim`
--

INSERT INTO `booking_confrim` (`booked_by`, `ap_name`, `num_flat`) VALUES
('abcd', 'BD House', 2),
('asif', 'BD House', 2),
('Rahim', 'ABC Home', 2);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `apartment_name` varchar(100) NOT NULL,
  `builder` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `flat` int(200) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`apartment_name`, `builder`, `location`, `flat`, `price`) VALUES
('BD House', 'BD Properties', 'Uttara', 10, 5550000),
('XYZ', 'XYZ Builders', 'Dhanmondi', 25, 4500000),
('ABC Home', 'ABC Builders', 'Gulshan', 3, 12500000),
('123 Home', '123 Builders', 'Banani', 10, 555000);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `full_name`, `email`, `contact`, `password`) VALUES
('abcd', 'ABCD', 'abcd@abcd.com', '0171556196', '1234'),
('asif', 'asif syeed', 'abc@gmail.com', '12356', '1234'),
('harry_potter', 'Harry James Potter', 'harry@hogwarts.com', '0178965403', '1234'),
('Rahim', 'Rahim Karim', 'rahim@gmail.com', '147893', '1234'),
('ron_wes', 'Ronald Wesley', 'ron@hogwarts.com', '7896654', '9876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
