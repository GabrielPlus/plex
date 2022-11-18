-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 11:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `members`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sample`
--

CREATE TABLE `data_sample` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `waste_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sample`
--

INSERT INTO `data_sample` (`id`, `name`, `email`, `location`, `telephone`, `waste_type`) VALUES
(1, 'Gabriel Pius', 'gabrielplus2001@gmail.com', '0115284336', 'jomvu', 'Male'),
(2, 'Gabriel Pius', 'gabrielplus2001@gmail.com', '0115284336', 'jomvu', 'Male'),
(3, 'Gabriel Pius', 'gabrielplus2001@gmail.com', '0115284336', 'jomvu', 'Male'),
(4, 'nakshy', 'nakshy@gmail.com', '0115284336', 'jomvu', 'Vending Machines'),
(5, 'shelyn', 'shely@gmail.com', '0115284336', 'jomvu', 'Televisions, Monitors');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sample`
--
ALTER TABLE `data_sample`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sample`
--
ALTER TABLE `data_sample`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
