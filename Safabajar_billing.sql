-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 09, 2023 at 09:34 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Safabajar_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `Billing`
--

CREATE TABLE `Billing` (
  `Id` int(255) NOT NULL,
  `Seller_id` varchar(255) DEFAULT NULL,
  `Amount` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Billing`
--

INSERT INTO `Billing` (`Id`, `Seller_id`, `Amount`, `Remarks`, `Date`) VALUES
(6, '1', '100', 'pay 1  bijen', '2023-05-08 13:37:43'),
(7, '1', '200', 'pay 2 bijen', '2023-05-08 13:37:58'),
(8, '1', '300', ' pay 3 bijen', '2023-05-08 13:38:05'),
(9, '2', '400', 'pay 4 sammy', '2023-05-08 13:38:21'),
(10, '2', '500', 'pay 5 sammy', '2023-05-08 13:38:37'),
(11, '2', '600', 'pay 6 sammy', '2023-05-08 13:38:46'),
(12, '3', '700', 'pay 7 safabajar', '2023-05-08 13:39:01'),
(13, '3', '800', ' pay 8 safabajar', '2023-05-08 13:39:13'),
(14, '3', '900', 'pay 9 safabajar', '2023-05-08 13:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Id` int(255) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Id`, `Title`, `Rate`) VALUES
(2, 'Water', '1000'),
(3, 'Electricity', '1234'),
(8, 'Security', '800'),
(9, 'Waste', '300'),
(13, 'Rent', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `Seller`
--

CREATE TABLE `Seller` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Citizenship` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Seller`
--

INSERT INTO `Seller` (`Id`, `Name`, `Contact`, `Address`, `Citizenship`, `Photo`) VALUES
(1, ' Bijen Shrestha', '9867445436', '  Imadol,lalitpur,Nepal', '71451741736822761.jpg', '25041054647774602.jpg'),
(2, ' Shyam Joshi', '9867867202', ' Imadol,lalitpur,Nepal', '94561224418210844.jpg', '20006070462510468.jpg'),
(3, 'Safabajar Pvt. Ltd.', '9841403023', ' Imadol,lalitpur,Nepal', '77421272697885199.jpg', '6942012365339368.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Stall`
--

CREATE TABLE `Stall` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Seller_id` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Stall`
--

INSERT INTO `Stall` (`Id`, `Name`, `Seller_id`, `Type`, `Category`, `Rate`) VALUES
(87, 'A11', '1', 'Fruits', 'Rent', '111'),
(88, 'A11', '1', 'Fruits', 'Water', '222'),
(89, 'A11', '1', 'Fruits', '', '333'),
(90, 'A11', '1', 'Fruits', 'Waste', '444'),
(91, 'A11', '1', 'Fruits', 'Security', '555'),
(92, 'A12', '2', 'Dairy', '', '22'),
(93, 'A12', '2', 'Dairy', '', '33'),
(94, 'A12', '2', 'Dairy', '', '44'),
(95, 'A12', '2', 'Dairy', '', '55'),
(96, 'A12', '2', 'Dairy', '', '66'),
(97, 'A23', '3', 'Fruits', '', '0'),
(98, 'A23', '3', 'Fruits', '', '0'),
(99, 'A23', '3', 'Fruits', '', '0'),
(100, 'A23', '3', 'Fruits', '', '0'),
(101, 'A23', '3', 'Fruits', '', '0'),
(102, 'A15', '2', 'Fruits', 'Rent', '123456'),
(103, 'A15', '2', 'Fruits', 'Water', '222'),
(104, 'A15', '2', 'Fruits', 'Electricity', '333'),
(105, 'A15', '2', 'Fruits', 'Waste', '444'),
(106, 'A15', '2', 'Fruits', 'Security', '5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Billing`
--
ALTER TABLE `Billing`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Seller`
--
ALTER TABLE `Seller`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Stall`
--
ALTER TABLE `Stall`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Billing`
--
ALTER TABLE `Billing`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Seller`
--
ALTER TABLE `Seller`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Stall`
--
ALTER TABLE `Stall`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
