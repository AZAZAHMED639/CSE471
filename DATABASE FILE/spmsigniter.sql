-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 06:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmsigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vehicle`
--

CREATE TABLE `add_vehicle` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `parking_area_no` varchar(200) NOT NULL,
  `vehicle_type` varchar(200) NOT NULL,
  `parking_charge` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `arrival_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_vehicle`
--

INSERT INTO `add_vehicle` (`id`, `vehicle_no`, `parking_area_no`, `vehicle_type`, `parking_charge`, `status`, `arrival_time`) VALUES
(8, 'HB2003', '6', 'Motorcycle', '2', '1', '2021-05-15 19:23:20'),
(9, 'DL8025', '2', 'Mini Van', '5', '1', '2021-05-15 20:11:27'),
(10, 'GH8880', '6', 'Motorcycle', '2', '1', '2021-05-15 21:49:16'),
(11, 'XS8010', '2', 'Mini Van', '5', '0', '2021-05-15 22:01:56'),
(12, 'EE5201', '6', 'Motorcycle', '2', '1', '2021-05-15 22:02:08'),
(13, 'RT2340', '2', 'Car', '4', '0', '2021-05-15 22:03:22'),
(14, 'SS4255', '2', 'Car', '4', '1', '2021-05-15 22:04:21'),
(15, 'NN5540', '6', 'Motorcycle', '2', '1', '2021-05-15 22:04:36'),
(16, 'TY8800', '2', 'Mini Van', '5', '0', '2021-05-15 22:05:04'),
(17, 'FK9630', '2', 'Mini Van', '5', '1', '2021-05-15 22:05:15'),
(18, 'YT8020', '2', 'Mini Van', '5', '0', '2021-05-15 22:05:26'),
(19, 'TT1025', '6', 'Motorcycle', '2', '1', '2021-05-15 22:05:40'),
(20, 'TY2099', '6', 'Motorcycle', '2', '0', '2021-05-15 22:06:23'),
(21, 'UY8869', '2', 'Car', '4', '1', '2021-05-15 22:06:52'),
(22, 'PO6969', '2', 'Mini Van', '5', '0', '2021-05-15 22:07:04'),
(23, 'ZXC444', '2', 'Mini Van', '5', '0', '2021-05-15 22:07:18'),
(24, 'TO5869', '2', 'Car', '4', '1', '2021-05-15 22:07:35'),
(25, 'PP5269', '6', 'Motorcycle', '2', '0', '2021-05-15 22:07:45'),
(26, 'VV5500', '2', 'Mini Van', '5', '0', '2021-05-15 22:08:05'),
(27, 'TT1020', '2', 'Car', '4', '1', '2021-05-15 22:08:32'),
(28, 'RE8855', '6', 'Motorcycle', '2', '1', '2021-05-15 22:08:44'),
(29, 'TN5520', '2', 'Car', '4', '0', '2021-05-15 22:10:09'),
(30, 'MN6500', '6', 'Motorcycle', '2', '1', '2021-05-15 22:10:45'),
(31, 'YO6520', '7', 'Pickup Van', '5', '0', '2021-05-15 22:23:57'),
(32, 'DF8010', '2', 'Mini Van', '5', '1', '2021-05-15 22:24:17'),
(33, 'RE8025', '9', 'Minibus', '6', '0', '2021-05-15 22:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Williams', 'spmadmin', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `parking_area_no` varchar(100) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_limit` varchar(200) NOT NULL,
  `parking_charge` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `doc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `parking_area_no`, `vehicle_type`, `vehicle_limit`, `parking_charge`, `status`, `doc`) VALUES
(1, '2', 'Car', '18', '4', '1', '2020-04-19 19:33:44'),
(3, '6', 'Motorcycle', '26', '2', '1', '2021-05-15 19:04:41'),
(4, '2', 'Mini Van', '8', '5', '1', '2021-05-15 20:10:39'),
(5, '7', 'Pickup Van', '11', '5', '1', '2021-05-15 22:21:51'),
(6, '9', 'Minibus', '6', '6', '1', '2021-05-15 22:22:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vehicle`
--
ALTER TABLE `add_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
