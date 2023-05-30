-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 08:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rizeen_tli`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `rank`, `status`, `datetime`) VALUES
(1, 'aa.aa@gmail.com', 1, 'active', '2038-01-19 08:14:07'),
(2, 'bb.fasg@gmail.com', 3, 'active', '2008-11-29 07:12:03'),
(3, 'cc.cc@gmail.com', 8, 'not active', '2128-01-19 03:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `premium_service`
--

CREATE TABLE `premium_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `recommended_price` float(30,2) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premium_service`
--

INSERT INTO `premium_service` (`id`, `name`, `recommended_price`, `details`) VALUES
(1, 'aa', 34340.15, 'jhguyfaeyfwyfdvwef dd'),
(2, 'bb', 120.20, 'fkjwahegfhagwjdh'),
(3, 'zz dd ee', 345.33, 'ee tt tt yy'),
(4, 'dd', 12120.15, 'rtgfdqwfrw'),
(5, 'ee', 540.20, 'fhjhgejaf'),
(6, 'ff', 10.15, 'grjwgfjwef'),
(7, 'gg', 20.20, 'egdghjgf'),
(8, 'hh', 30.15, 'hrjwghfb'),
(9, 'ii', 40.20, 'erjhgbv'),
(10, 'jj', 50.15, 'uohlko'),
(11, 'kk', 60.20, 'rgfuykgr'),
(12, 'll', 70.15, 'dbjhwvbr'),
(13, 'mm', 80.20, 'gquaaf'),
(14, 'nn', 90.15, 'gfhjgf'),
(15, 'oo', 340.20, 'rfseghe');

-- --------------------------------------------------------

--
-- Table structure for table `sales_agent`
--

CREATE TABLE `sales_agent` (
  `agent_id` int(11) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_agent`
--

INSERT INTO `sales_agent` (`agent_id`, `full_name`, `email`) VALUES
(1, 'aaaa vvv', 'aa@gmail.com'),
(2, 'dsdfh fbbvf', 'bb@gmail.com'),
(3, 'xcjhsgfz dhjgf', 'cc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `premium_service`
--
ALTER TABLE `premium_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `premium_service`
--
ALTER TABLE `premium_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
