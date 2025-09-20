-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2025 at 01:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `user_id` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `physical_address` text NOT NULL,
  `department` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_data`
--

INSERT INTO `registration_data` (`user_id`, `full_name`, `date_of_birth`, `email`, `mobile_number`, `physical_address`, `department`, `password`) VALUES
('KH3057', 'Masawi Sarah ', '2002-09-29', 'masawisarah8@gmail.com', '0786001836', 'Mubende', 'IT', '$2y$10$Fvh4cSteo34UZK1rFQ1Hnu06.I./h2n4GxEwSQdzAVi'),
('KH3100', 'AHAISIBWE BENARD', '2004-02-14', 'ahaisibweebenard@gmail.com', '0776108839', 'Kabale', 'computer science', '$2y$10$FRNx1c9tq0Ic6kwKUJMXDe80UU4JNO3vjscjyaGH95e'),
('KH3107', 'KIMULI EDRINE', '2003-07-18', 'kimuliedrine82@gmail.com', '0779330159', 'Kitintale', 'computer science', '$2y$10$3c0QG.wH6kNxNRxQwW5muOgK1Vu3nu2mia/1QgZK.e3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_data`
--
ALTER TABLE `registration_data`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
