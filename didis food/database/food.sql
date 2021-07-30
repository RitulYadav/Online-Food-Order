-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 01:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(14) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'Ritul', 'm123');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`) VALUES
(1, 'ritulsinghyadav', ''),
(2, 'ritulsinghyadav', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(14) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `confirm_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone_number`, `password`, `confirm_password`) VALUES
(1, 'ritul', 'ritulsinghyadav302@gmail.com', '6306249409', '321', '321'),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, 'sam', 'sam@gmail.com', '265139', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stock_food`
--

CREATE TABLE `stock_food` (
  `id` int(14) NOT NULL,
  `food_name` varchar(30) DEFAULT NULL,
  `quantity` varchar(40) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_food`
--

INSERT INTO `stock_food` (`id`, `food_name`, `quantity`, `price`) VALUES
(1, 'maggie', '12', 12),
(2, 'maggie', '12', 12),
(3, 'maggie', '12', 10);

-- --------------------------------------------------------

--
-- Table structure for table `vieworder`
--

CREATE TABLE `vieworder` (
  `id` int(14) NOT NULL,
  `customer_name` varchar(40) DEFAULT NULL,
  `food_name` varchar(30) DEFAULT NULL,
  `quantity` varchar(3) DEFAULT NULL,
  `order_location` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vieworder`
--

INSERT INTO `vieworder` (`id`, `customer_name`, `food_name`, `quantity`, `order_location`, `price`) VALUES
(1, 'ritul', 'Samosa', '23', 'Cafeteria', '10'),
(2, 'ritul', 'Samosa', '12', 'Classroom', '10'),
(3, 'ritul', 'Samosa', '11', 'Cafeteria', '10'),
(4, 'ritul', 'Samosa', '14', 'Cafeteria', '10'),
(5, 'sam', 'Pizza', '12', 'Classroom', '59'),
(6, 'ritul', 'Samosa', '34', 'Cafeteria', '10'),
(7, 'ritul', 'Samosa', '12', 'Cafeteria', '10'),
(8, 'ritul', 'Samosa', '12', 'Classroom', '10'),
(9, 'ritul', 'Samosa', '5', 'Cafeteria', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_food`
--
ALTER TABLE `stock_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vieworder`
--
ALTER TABLE `vieworder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stock_food`
--
ALTER TABLE `stock_food`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vieworder`
--
ALTER TABLE `vieworder`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
