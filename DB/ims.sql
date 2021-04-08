-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 08:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL,
  `brand_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'Nokia', 2, 1),
(2, 'Samsung', 1, 1),
(3, 'Sony', 2, 1),
(4, 'Apple', 1, 1),
(5, 'Western Digital', 1, 1),
(6, 'Kingston', 1, 1),
(7, 'OnePlus', 1, 1),
(8, 'Motorola', 1, 1),
(9, 'Transcend', 1, 1),
(10, 'Dell', 1, 1),
(11, 'Acer', 1, 1),
(12, 'Micromax', 1, 1),
(13, 'Vivo', 2, 1),
(14, 'Brotherrrr', 1, 1),
(15, 'Lenovo', 1, 1),
(17, 'Philips', 1, 1),
(18, 'Okapia', 1, 1),
(19, 'RFL', 0, 0),
(21, 'n', 0, 0),
(22, 'Canon', 0, 0),
(23, 'def', 0, 0),
(24, 'aasdfasdf', 0, 0),
(25, 'abc', 0, 0),
(26, 'abc', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `buying`
--

CREATE TABLE `buying` (
  `id` int(5) NOT NULL,
  `buy_product_id` int(5) NOT NULL,
  `buy_qty` int(5) NOT NULL,
  `buying_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buying`
--

INSERT INTO `buying` (`id`, `buy_product_id`, `buy_qty`, `buying_price`) VALUES
(2, 2, 1, 4000),
(3, 2, 1, 4000),
(4, 2, 10, 40000),
(5, 21, 1, 10000),
(6, 10, 3, 3000),
(7, 23, 1, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_active` int(3) DEFAULT NULL,
  `category_status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_active`, `category_status`) VALUES
(1, 'Mobile Phoness', 1, 1),
(2, 'Laptops', 1, 1),
(3, 'Hard Drives', 1, 1),
(4, 'Printers', 1, 1),
(5, 'Monitors', 1, 1),
(6, 'Speakers', 1, 1),
(7, 'Pendrives', 2, 1),
(8, 'Television', 2, 1),
(9, 'CPU Casing', 1, 1),
(10, 'Ear Phones', 1, 1),
(12, 'Home Accessories', 1, 1),
(13, 'Miscellaneous', NULL, NULL),
(17, 'Camera', NULL, NULL),
(22, 'desktop', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(222) DEFAULT NULL,
  `product_category_id` int(3) DEFAULT NULL,
  `in_stock` int(5) NOT NULL DEFAULT 0,
  `buying_price` int(6) DEFAULT NULL,
  `selling_price` int(11) DEFAULT NULL,
  `pr_brand` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category_id`, `in_stock`, `buying_price`, `selling_price`, `pr_brand`) VALUES
(2, 'Dell XPS A9', 0, 4, NULL, NULL, ''),
(3, 'WD Passport', NULL, 10, NULL, NULL, ''),
(4, 'Galaxy S7', NULL, 10, NULL, NULL, ''),
(5, 'Galaxy S8', 0, 5, NULL, NULL, ''),
(6, 'Sony Earphones XT900', NULL, 3, NULL, NULL, ''),
(7, 'Bravia 900', 0, 4, NULL, NULL, ''),
(8, 'Brother XT900', 0, 7, NULL, NULL, ''),
(9, 'Dhoom 11 Multimedia', NULL, 0, NULL, NULL, ''),
(10, 'Desktop Casing', NULL, 2, NULL, NULL, ''),
(11, 'Storage 360', 3, 0, NULL, NULL, ''),
(12, 'iMac 2018', 2, 0, NULL, NULL, ''),
(16, 'Canon 700D', 14, 10, NULL, NULL, ''),
(20, 'abc', 3, 4, NULL, NULL, ''),
(21, 'xiomi', 1, 1, NULL, NULL, ''),
(22, 'abal', 1, 0, NULL, NULL, ''),
(23, 'vivo 6 mobile phone', 1, 0, NULL, NULL, '13');

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `id` int(5) NOT NULL,
  `sell_product_id` int(5) NOT NULL,
  `sell_qty` int(5) NOT NULL,
  `selling_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`id`, `sell_product_id`, `sell_qty`, `selling_price`) VALUES
(2, 2, 1, 4500),
(3, 10, 1, 1200),
(4, 23, 1, 19000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(400) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(8, 'abc@gmail.com', 'abc', 'abc'),
(9, 'baki@gmail.com', 'baki', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `buying`
--
ALTER TABLE `buying`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `buying`
--
ALTER TABLE `buying`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
