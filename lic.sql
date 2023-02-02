-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 11:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lic`
--

-- --------------------------------------------------------

--
-- Table structure for table `lic_customer_login`
--

CREATE TABLE `lic_customer_login` (
  `username_lic` varchar(100) NOT NULL,
  `Password_lic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lic_customer_registration`
--

CREATE TABLE `lic_customer_registration` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone_number` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `Education_and_Qualification` varchar(100) NOT NULL,
  `Occupationtype` varchar(100) NOT NULL,
  `Annual_income` varchar(100) NOT NULL,
  `Email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lic_customer_registration`
--

INSERT INTO `lic_customer_registration` (`fname`, `lname`, `gender`, `phone_number`, `Address`, `City`, `state`, `pincode`, `Education_and_Qualification`, `Occupationtype`, `Annual_income`, `Email`, `password`) VALUES
('Karthi', 'M', 'male', '6301457870', 'Chittoor', 'Chittoor', 'Andhra Pradesh', 517125, 'Post Graduate', 'Salaried', '1.5 LPA - 2.5 LPA', '2001KARTHII.M@gmail.com', '20012050@Mm'),
('karthikeyan', 'mkn', 'male', '7301457870', 'Vellore', 'Tamil Nadu', 'Andhra Pradesh', 632014, 'Post Graduate', 'Not Employed', '7.5 LPA - Above', 'amariyappan.karthik@gmail.com', '2001205@Mm');

-- --------------------------------------------------------

--
-- Table structure for table `policy_details`
--

CREATE TABLE `policy_details` (
  `customer_Name` varchar(30) NOT NULL,
  `Aadhaar_number` varchar(100) NOT NULL,
  `Pan_number` varchar(100) NOT NULL,
  `Policy_Buyers_email` varchar(100) NOT NULL,
  `Organisation_type` varchar(100) NOT NULL,
  `Yearly_income` varchar(100) NOT NULL,
  `Cover_Amount` varchar(100) NOT NULL,
  `Coverage_Till` varchar(100) NOT NULL,
  `Yearly_instalment_amountt` varchar(100) NOT NULL,
  `Amount_Paid` varchar(100) NOT NULL,
  `Paid_On` varchar(100) NOT NULL,
  `Paid_timing` varchar(100) NOT NULL,
  `Next_Payment_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy_details`
--

INSERT INTO `policy_details` (`customer_Name`, `Aadhaar_number`, `Pan_number`, `Policy_Buyers_email`, `Organisation_type`, `Yearly_income`, `Cover_Amount`, `Coverage_Till`, `Yearly_instalment_amountt`, `Amount_Paid`, `Paid_On`, `Paid_timing`, `Next_Payment_date`) VALUES
('Karthikeyan', '3354 6566 6786', 'ABCTY1234D', 'amariyappan.karthik@gmail.com', 'Government', '750000', '1,00,00,000', '2081', 'Rs.7499.00', 'Rs.8299.00-Paid', '2021-11-17', '23:36:56', '2022-11-17'),
('Karthik', '3354 6566 6787', 'ABCTY1234D', '2001KARTI.M@gmail.com', 'Private', '344535', '75,00,000', '2071', 'Rs.5999.00', 'Rs.6799.00-Paid', '2021-11-18', '13:44:12', '2022-11-18'),
('Karthik', '4354 6566 6979', 'ABCTY1234D', '2001KARTHI.M@gmail.com', 'Others', '200000', '25,00,000', '2061', 'Rs.4299.00', 'Rs.4799.00-Paid', '2021-11-18', '13:56:27', '2022-11-18'),
('Karthik', '4512 4775 4565', 'ABCTY1234D', '2001KAR@gmail.com', 'Private', '430000', '1,00,00,000', '2081', 'Rs.7499.00', 'Rs.8299.00-Paid', '2021-11-17', '23:17:9', '2022-11-17'),
('Karthik', '5445 6676 7898', 'ABCTY1234D', '2001KARTI.M@gmail.com', 'Government', '2000000000', '50,00,000', '2066', 'Rs.4599.00', 'Rs.5099.00-Paid', '2021-12-04', '14:9:55', '2022-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lic_customer_registration`
--
ALTER TABLE `lic_customer_registration`
  ADD PRIMARY KEY (`Email`(50));

--
-- Indexes for table `policy_details`
--
ALTER TABLE `policy_details`
  ADD PRIMARY KEY (`Aadhaar_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
