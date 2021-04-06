-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 01:48 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'adminn', 'admin@12', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billno` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billno`, `id`, `name`, `mobile`, `amount`) VALUES
(1, 3, 'kani', '12345', 236090),
(3, 4, 'nobody', '31564', 65464),
(4, 5, 'Tejeshwar', '9671356948', 20000),
(7, 8, 'khsak', '6546456', 464564),
(8, 2, 'bhar', '1233', 654645654),
(12, 7, 'prarth', '159159', 15313),
(13, 8, 'suni', '753', 6452),
(14, 10, 'dhanu', '9099090', 210230),
(15, 11, 'john', '616876886', 15323),
(17, 12, 'don', '96546669', 215565),
(18, 13, 'Rajesh ', '981646546', 10351),
(19, 14, 'Tejeshwar', '9846689844', 10000),
(26, 64, 'dshbjh', '4546', 456);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `wardno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `name`, `age`, `gender`, `mobile`, `address`, `wardno`) VALUES
(10003, 'Prema', 50, 'female', '8569127746', 'BTM', 303),
(100001, 'Adarsh', 45, 'male', '953617952', 'Richmond', 301),
(100002, 'Ram', 46, 'male', '865123497', 'Malleshwara', 302);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `logid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `wardno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `gender`, `logid`, `password`, `mobile`, `address`, `wardno`) VALUES
(2, 'Bharati', 20, 'female', 'bhar@fdf', '898989', '9613874691', 'Ideal homes', 301),
(3, 'Kanishkar', 20, 'male', 'kani@69', '1234', '9678136547', 'Jaynagar', 302),
(5, 'Tejeshwar R', 20, 'Male', 'tr@13', '4545', '9671356948', 'BEML layout', 302),
(6, 'Saritha', 35, 'female', 'sar@ehfjk', '789', '8569412357', 'Vijaynagar', 301),
(7, 'Prarthana', 20, 'female', 'prarth@123', '159', '7594236489', 'JP nagar', 303),
(8, 'Sunidhi', 12, 'female', 'suni@11', '753', '7539513647', 'RR nagar', 303),
(10, 'Dhanush', 20, 'male', 'dhan@09', '9090', '9098649852', 'basvangudi', 302),
(11, 'jhon', 23, 'male', 'john@11', '1599', '9865465316', 'abdn', 302),
(12, 'dom', 16, 'male ', 'dom@13', '1530', '9846271546', 'kjsegk', 303);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wardno` int(10) NOT NULL,
  `noofbeds` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`wardno`, `noofbeds`) VALUES
(301, 100),
(302, 80),
(303, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billno`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wardno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100003;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
