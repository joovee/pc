-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 02:18 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'vee', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `collection_items`
--

CREATE TABLE `collection_items` (
  `Code_no` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collection_table`
--

CREATE TABLE `collection_table` (
  `Code_no` int(11) NOT NULL,
  `Customer_ID` int(50) NOT NULL,
  `Due_date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Date_paid` date NOT NULL,
  `Interest` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_table`
--

INSERT INTO `collection_table` (`Code_no`, `Customer_ID`, `Due_date`, `Status`, `Date_paid`, `Interest`) VALUES
(1, 7, '2018-10-12', 'paid', '2018-11-12', '0.50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_table`
--

CREATE TABLE `customer_table` (
  `Customer_ID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Extendedname` varchar(50) NOT NULL,
  `Phonenumber` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_table`
--

INSERT INTO `customer_table` (`Customer_ID`, `Firstname`, `Lastname`, `Middlename`, `Extendedname`, `Phonenumber`, `Street`, `City`) VALUES
(7, 'Ahmed', 'mohammned', 'hjkh', 'jk', '12312312', 'kjh', 'jk'),
(8, 'joo ', 'jalal', 'A.', 'jr', '3445', 'lower', 'oroq');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `Product_ID` int(11) NOT NULL,
  `Particular` varchar(100) NOT NULL,
  `Item_Quantity` int(11) NOT NULL,
  `Unit` varchar(100) NOT NULL,
  `Regular_Price` decimal(10,2) NOT NULL,
  `Discount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`Product_ID`, `Particular`, `Item_Quantity`, `Unit`, `Regular_Price`, `Discount`) VALUES
(1, 'sabon', 12, 'one dozen', '12.00', '25.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD UNIQUE KEY `Code_no` (`Code_no`),
  ADD UNIQUE KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD PRIMARY KEY (`Code_no`),
  ADD UNIQUE KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `customer_table`
--
ALTER TABLE `customer_table`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collection_table`
--
ALTER TABLE `collection_table`
  MODIFY `Code_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_table`
--
ALTER TABLE `customer_table`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_items`
--
ALTER TABLE `collection_items`
  ADD CONSTRAINT `collection_items_ibfk_1` FOREIGN KEY (`Code_no`) REFERENCES `collection_table` (`Code_no`),
  ADD CONSTRAINT `collection_items_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product_table` (`Product_ID`);

--
-- Constraints for table `collection_table`
--
ALTER TABLE `collection_table`
  ADD CONSTRAINT `collection_table_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customer_table` (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
