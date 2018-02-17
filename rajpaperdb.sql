-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 08:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajpaperdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_quantity`) VALUES
(6, 'pencil', 600),
(5, 'copy-a3', 267),
(4, 'copy-a4', 720);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `sales_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_name` varchar(100) NOT NULL,
  `product_rate` float NOT NULL,
  `sales_quantity` int(11) NOT NULL,
  `sales_amount` float NOT NULL,
  `paid_amount` float NOT NULL,
  `remaining_amount` float NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_contact` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `sales_date`, `product_name`, `product_rate`, `sales_quantity`, `sales_amount`, `paid_amount`, `remaining_amount`, `customer_name`, `customer_address`, `customer_contact`, `product_id`) VALUES
(11, '2016-09-27 17:19:50', 'copy-a4', 50, 200, 5000, 0, 0, '', '', '', 4),
(12, '2016-09-27 17:32:16', 'copy-a4', 20, 80, 1600, 0, 0, '', '', '', 4),
(14, '2016-09-27 17:42:22', 'pencil', 12, 600, 7200, 0, 0, '', '', '', 6),
(15, '2016-09-29 04:54:41', 'copy-a3', 12.5, 20, 250, 0, 250, '', '', '', 5),
(17, '2016-09-29 04:58:18', 'copy-a4', 15.7, 200, 3140, 800, 2340, 'Bikash', 'kathmandu', '9841572365', 4),
(18, '2016-09-29 04:58:55', 'copy-a3', 15.7, 13, 204.1, 50, 154.1, '', '', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
