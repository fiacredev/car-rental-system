this is the side about handling the database side on this project
-- this is code is about Database you can import in your database evironment to deal with database usage 
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 01:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(70) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'tamba', 'kavu@gmail.com', '767');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(70) NOT NULL,
  `car_number` int(70) NOT NULL,
  `car_color` varchar(70) NOT NULL,
  `production_year` date NOT NULL,
  `model` varchar(170) NOT NULL,
  `status` varchar(170) NOT NULL,
  `car_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car_number`, `car_color`, `production_year`, `model`, `status`, `car_name`) VALUES
(1, 74, 'blue', '2024-07-19', 'model v7', 'availabe', 'Hundai');

-- --------------------------------------------------------

--
-- Table structure for table `complete_transactions`
--

CREATE TABLE `complete_transactions` (
  `id` int(70) NOT NULL,
  `transaction_date` date NOT NULL,
  `customer` varchar(70) NOT NULL,
  `date_of_rent` date NOT NULL,
  `date_of_return` date NOT NULL,
  `price` int(70) NOT NULL,
  `fine_per_day` int(70) NOT NULL,
  `penalty` int(70) NOT NULL,
  `status` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complete_transactions`
--

INSERT INTO `complete_transactions` (`id`, `transaction_date`, `customer`, `date_of_rent`, `date_of_return`, `price`, `fine_per_day`, `penalty`, `status`) VALUES
(17, '2024-07-29', 'weee', '2024-07-29', '2024-07-16', 23000, 754, 567, 'expired'),
(18, '2024-07-27', 'pity trapper', '2023-12-15', '2026-05-22', 7000, 10, 3775, 'Expired'),
(19, '2024-10-23', 'fiacre', '2024-10-12', '2024-10-19', 1000, 23, 0, 'Expired'),
(20, '2024-10-23', 'blissy', '2024-10-17', '2024-10-31', 100, 754, 0, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(70) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `contact` int(70) NOT NULL,
  `id_card` int(70) NOT NULL,
  `address` varchar(170) NOT NULL,
  `status` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` int(70) NOT NULL,
  `transaction_date` date NOT NULL DEFAULT current_timestamp(),
  `customer` varchar(70) NOT NULL,
  `car` varchar(70) NOT NULL,
  `date_of_rent` date NOT NULL,
  `date_of_return` date NOT NULL,
  `price` int(170) NOT NULL,
  `fine_per_day` int(170) NOT NULL,
  `penalty` int(170) NOT NULL,
  `status` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete_transactions`
--
ALTER TABLE `complete_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complete_transactions`
--
ALTER TABLE `complete_transactions`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
