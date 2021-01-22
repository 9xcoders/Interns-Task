-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 06:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conquer`
--
CREATE DATABASE IF NOT EXISTS `conquer` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `conquer`;

-- --------------------------------------------------------

--
-- Table structure for table `app_course`
--

CREATE TABLE `app_course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(150) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_course`
--

INSERT INTO `app_course` (`id`, `name`, `email`, `mobile_no`, `date`, `gender`, `address`, `message`) VALUES
(1, 'test', 'test@gmail.com', 711234567, '2021-01-20', 'male', 'No1,test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `req_info`
--

CREATE TABLE `req_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(150) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_info`
--

INSERT INTO `req_info` (`id`, `name`, `email`, `mobile_no`, `date`, `gender`, `address`, `country`, `postal_code`, `message`) VALUES
(1, 'test', 'test@gmail.com', 711234567, '2021-01-20', 'male', 'No 1,Test', 'Sri Lanka', 11006, 'sdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_course`
--
ALTER TABLE `app_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_info`
--
ALTER TABLE `req_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_course`
--
ALTER TABLE `app_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `req_info`
--
ALTER TABLE `req_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
