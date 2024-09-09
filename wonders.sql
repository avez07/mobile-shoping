-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 12:30 PM
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
-- Database: `wonders`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_footwears_768`
--

CREATE TABLE `all_footwears_768` (
  `id` int(11) NOT NULL,
  `FOOTWEAR_NAME` varchar(30) NOT NULL,
  `FOOT_IMG` varchar(50) NOT NULL,
  `TYPE_` varchar(15) NOT NULL,
  `CATEGORIES` varchar(15) NOT NULL,
  `PRODUCT_DETAIL` varchar(100) NOT NULL,
  `STYLE_CODE` varchar(15) NOT NULL,
  `PATTERN` varchar(25) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `SUB_BRAND` varchar(35) NOT NULL,
  `MATERIAL` varchar(50) NOT NULL,
  `PRICE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoe_user_5599`
--

CREATE TABLE `shoe_user_5599` (
  `id` int(11) NOT NULL,
  `CUSTOMER_NAME` varchar(30) NOT NULL,
  `PHONE_NUMBER` bigint(20) NOT NULL,
  `EMAIL_ID` varchar(40) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `ADDRESS_` varchar(30) NOT NULL,
  `LANDMARK` varchar(30) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `STATE_` varchar(30) NOT NULL,
  `ZIP` int(10) NOT NULL,
  `PASSWORD_1` varchar(20) NOT NULL,
  `TABLE_NAME` varchar(50) NOT NULL,
  `DATE_TIME` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoe_user_5599`
--

INSERT INTO `shoe_user_5599` (`id`, `CUSTOMER_NAME`, `PHONE_NUMBER`, `EMAIL_ID`, `USER_NAME`, `ADDRESS_`, `LANDMARK`, `CITY`, `STATE_`, `ZIP`, `PASSWORD_1`, `TABLE_NAME`, `DATE_TIME`) VALUES
(1, 'Wylie Zimmerman', 1234567890, 'ansariaavez12345@gmail.com', 'aavez@786', 'Bree Kelley', 'India', 'Bangalore', 'Karnataka', 400007, 'aavez@12345', 'Wylie_Zimmerman_66dec9a58edeb', '2024-09-09 15:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_deals_768`
--

CREATE TABLE `user_deals_768` (
  `id` int(11) NOT NULL,
  `FOOTWEAR_NAME` varchar(30) NOT NULL,
  `FOOT_IMG` varchar(50) NOT NULL,
  `TYPE_` varchar(15) NOT NULL,
  `CATEGORIES` varchar(15) NOT NULL,
  `PRODUCT_DETAIL` varchar(100) NOT NULL,
  `STYLE_CODE` varchar(15) NOT NULL,
  `PATTERN` varchar(25) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `SUB_BRAND` varchar(35) NOT NULL,
  `MATERIAL` varchar(50) NOT NULL,
  `DISCOUNT` varchar(50) NOT NULL,
  `PRICE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_footwears_768`
--
ALTER TABLE `all_footwears_768`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe_user_5599`
--
ALTER TABLE `shoe_user_5599`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TABLE_NAME` (`TABLE_NAME`);

--
-- Indexes for table `user_deals_768`
--
ALTER TABLE `user_deals_768`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_footwears_768`
--
ALTER TABLE `all_footwears_768`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoe_user_5599`
--
ALTER TABLE `shoe_user_5599`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_deals_768`
--
ALTER TABLE `user_deals_768`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
