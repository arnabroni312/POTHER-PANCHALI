-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 12:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin user', 'admin', 7894561238, 'test@gmail.com', 'd121b51b6cb53b5ee16798f535bd57c0', '2019-04-05 07:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(5) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `IMAGE` varchar(150) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `IMAGE`, `CreationDate`) VALUES
(3, 'Itallian', NULL, '2019-04-05 10:36:01'),
(5, 'South Indian', NULL, '2019-04-05 10:36:35'),
(6, 'North Indian', 'a021c955bc198d200adc780fdf2763d4.jpg', '2019-04-05 10:36:47'),
(7, 'Desserts', NULL, '2019-04-05 10:43:13'),
(8, 'Starters', NULL, '2019-04-05 10:43:45'),
(9, 'Chinease', NULL, '2019-04-24 05:43:08'),
(10, 'Test Food ', NULL, '2019-05-06 16:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbldeli`
--

CREATE TABLE `tbldeli` (
  `ID` int(15) NOT NULL,
  `NAME` varchar(150) DEFAULT NULL,
  `ADDRESS` varchar(150) DEFAULT NULL,
  `PHONE` varchar(150) DEFAULT NULL,
  `user_id` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldeli`
--

INSERT INTO `tbldeli` (`ID`, `NAME`, `ADDRESS`, `PHONE`, `user_id`, `password`) VALUES
(1, 'ARNAB ROY', 'KUDGHAT                       ', '9874991140', NULL, NULL),
(2, 'DEBASISH KANTAL', 'BEHALA  ', '7603055280', 'roni_1234', '1234'),
(3, 'RATAN MRIDHA', '              GUTIARY SHARIF                                      ', '9748552434', 'rat_1990', '1990'),
(4, 'SANTU PATHAK', 'THAKURPUKUR                                                    ', '7603055181', NULL, NULL),
(5, 'roni roy', 'sahapara                                                    ', '704411328', 'royroni@56', 'Roni@1234'),
(6, 'roni', '    iyuouo                                                ', '1236547', 'duserid', 'dpassw'),
(7, 'ronu', '                          kiougugo                          ', '1233', 'duserid', 'dpassw'),
(8, 'roni', 'sahapara                                                    ', '7603055280', 'roni_1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `ItemName` varchar(120) DEFAULT NULL,
  `ItemPrice` varchar(120) DEFAULT NULL,
  `ItemDes` varchar(500) DEFAULT NULL,
  `Image` varchar(120) DEFAULT NULL,
  `ItemQty` varchar(120) DEFAULT NULL,
  `quanti` int(150) DEFAULT NULL,
  `spl` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`ID`, `CategoryName`, `ItemName`, `ItemPrice`, `ItemDes`, `Image`, `ItemQty`, `quanti`, `spl`) VALUES
(4, 'Italian', 'Veg Extravaganza Pizza', '450', 'Veg ExtravaganzaA pizza that decidedly staggers', '73323ff74a39e6157cf73ad52cf15c66.jpg', 'Medium', NULL, NULL),
(5, 'Italian', 'Veg Extravaganza Pizza', '440', 'Veg ExtravaganzaA pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions', '9ed5c4756f56317810d7e364ca7f1634.jpg', 'Large', NULL, NULL),
(6, 'North Indian', 'Chana Masala', '120', 'To make this chana masala we start with a trio of ingredients found in most Indian curriesâ€“onion, garlic, and ginger. ', '0ee2405d162c60e415bfba56a24aca8c.jpg', 'Full', NULL, NULL),
(7, 'North Indian', 'Rajma Masala', '125', 'Rajma Masala is a much loved spicy curry in most Indian Households.                               	', '63d50ef58f33ec97cf928c05deb8ccd3.jpg', 'Full', NULL, NULL),
(8, 'South Indian', 'Dosa', '85', 'Dosa  are served hot along with sambar, a stuffing of potatoes, and chutney.                             	', 'd984b4a23552203107391bc98dd0e4dc.jpg', 'Regular', NULL, NULL),
(9, 'South Indian', 'Idli', '75', 'Idli are a type of savoury rice cake, originating from the Indian subcontinent and served coconut chutney.                                         	', '0cbe727a2529cc6cd8dcbd40ee53fe2c.jpg', '2 pcs', NULL, NULL),
(10, 'South Indian', 'Vada', '60', 'Medu vada served with hot shambhar and coconut chutney ', '66d5785b3c99179f5a5bb7d7d94636dd.jpg', '2 pcs', NULL, NULL),
(11, 'North Indian', 'Chole Bhature', '120', 'Chole Bhuture is a combination of chana masala (spicy white chickpeas) and bhatura,                                                	', 'da41d10bb09c6cfac8168435164ff0b3.jpg', '2 pcs', NULL, NULL),
(12, 'North Indian', 'Aloo paratha', '85', ' Aloo paratha is served with butter, chutney, or Indian pickles in different parts of northern and western India.                                                 	', '8cc336b118e1feb503f9a54f3bdcdf1b.jpg', '2 pieces', NULL, NULL),
(13, 'North Indian', 'Mix Pratha', '85', 'veg paratha soft, healthy and delicious whole wheat parathas made with mix vegetables. ... this no onion no garlic veg paratha recipe is pretty flexible.                                               	', '4b4f0a570c7f36f0db9e4f8e7fa60442.jpg', '2 pieces', NULL, NULL),
(14, 'North Indian', 'Paneer Paratha.', '95', 'paneer paratha. paneer paratha is an indian flat bread made with cottage cheese stuffing. paneer paratha are popular breakfast recipe in punjabi homes.                                                 	', 'a19b8b7095ad0c23ddd95a28c3f85268.jpg', '2 pieces', NULL, NULL),
(15, 'Chinease', 'Hakka Noodle', '120', 'Hakka Noodle is one our famous food which is made up by our homemade masale.                                               	', 'f8f34e70f13c6d9e982640e3b39f317b.jpg', 'full', NULL, NULL),
(16, 'Chinese', 'Veg Chowmin', '120', 'Veg Chowmien full Plate                                                 	', '927f5a1c2bcfff25ff8a936fa98d5f2f.jpg', 'Full', NULL, NULL),
(17, 'South Indian', 'dsgvsfds', '2323', '                   51151515115                                 ', 'bf17934885c638c1c32d491cc6dbaad6.png', '2', NULL, NULL),
(18, '', 'HAKKA NOODLES', '150', 'CHINESE SPECIALITY                                                 	', '75e283e8c97f9d062c2a92119305c07a.jpg', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblfoodtracking`
--

CREATE TABLE `tblfoodtracking` (
  `ID` int(10) NOT NULL,
  `OrderId` char(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `StatusDate` timestamp NULL DEFAULT current_timestamp(),
  `OrderCanclledByUser` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfoodtracking`
--

INSERT INTO `tblfoodtracking` (`ID`, `OrderId`, `remark`, `status`, `StatusDate`, `OrderCanclledByUser`) VALUES
(1, '783218118', 'Restaurant Closed.', 'Order Cancelled', '2020-05-14 16:07:35', NULL),
(6, '448858080', 'I want  to cancel this order', 'Order Cancelled', '2020-05-14 17:33:42', 1),
(7, '270156472', 'Order confiremed', 'Order Confirmed', '2020-05-14 16:30:38', NULL),
(8, '270156472', 'Food is preparing.', 'Food being Prepared', '2020-05-14 16:31:08', NULL),
(9, '270156472', 'Food on the way', 'Food Pickup', '2020-05-14 16:31:42', NULL),
(10, '270156472', 'Food is delivired', 'Food Delivered', '2020-05-14 16:35:27', NULL),
(11, '201712648', 'order Cancelled', 'Order Cancelled', '2020-05-14 16:41:55', NULL),
(12, '922310021', 'done', 'Order Confirmed', '2020-05-14 16:21:41', NULL),
(13, '922310021', 'fyfyyfiulll', 'Food Pickup', '2020-05-14 16:22:03', NULL),
(14, '922310021', 'knippninip', 'Food being Prepared', '2020-05-14 16:29:01', NULL),
(15, '100246344', 'fyifyifyi', 'Food Pickup', '2020-05-14 10:50:39', NULL),
(16, '213771261', 'hcjcchk', 'Out For Delivery', '2020-05-14 15:47:49', NULL),
(17, '213771261', 'hjll', 'Food Delivered', '2020-05-14 15:54:00', NULL),
(18, '351952099', 'ucyfyiiy', 'Order Confirmed', '2020-05-14 15:57:51', NULL),
(19, '351952099', 'hjkl', 'Food being Prepared', '2020-05-14 15:58:15', NULL),
(20, '351952099', 'gsrgddaf', 'Out For Delivery', '2020-05-14 15:59:23', NULL),
(21, '142476051', 'test', 'Out For Delivery', '2020-05-13 19:32:50', NULL),
(22, '491235285', NULL, 'Order Confirmed & Food Being Prepared', '2020-05-14 18:17:02', NULL),
(23, '491235285', NULL, 'Out For Delivery', '2020-05-14 18:17:22', NULL),
(24, '920620324', NULL, 'Out For Delivery', '2020-05-14 07:14:41', NULL),
(25, '193643853', NULL, 'Order Confirmed & Food Being Prepared', '2020-05-14 16:24:46', NULL),
(26, '928243495', NULL, 'Out For Delivery', '2020-05-30 17:46:23', NULL),
(27, '440135791', NULL, 'Order Confirmed & Food Being Prepared', '2020-06-01 15:17:47', NULL),
(28, '440135791', NULL, 'Order Confirmed & Food Being Prepared', '2020-06-01 15:22:15', NULL),
(29, '672625765', NULL, 'Order Confirmed & Food Being Prepared', '2020-06-01 15:53:09', NULL),
(30, '469728968', NULL, 'Order Confirmed & Food Being Prepared', '2020-06-01 17:14:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblodrdeli`
--

CREATE TABLE `tblodrdeli` (
  `id` int(150) NOT NULL,
  `deli_id` varchar(150) DEFAULT NULL,
  `ode_id` int(150) DEFAULT NULL,
  `deliv_status` varchar(150) DEFAULT NULL,
  `ode_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblodrdeli`
--

INSERT INTO `tblodrdeli` (`id`, `deli_id`, `ode_id`, `deliv_status`, `ode_time`) VALUES
(1, '5', 170244505, 'COMPLETED', '2020-04-15 18:59:24'),
(2, '3', 270156472, 'COMPLETED', '2020-04-15 18:59:24'),
(3, '1', 448858080, 'COMPLETED', '2020-04-15 18:59:24'),
(7, '3', 170244505, 'COMPLETED', '2020-04-15 18:59:24'),
(8, '3', 270156472, 'COMPLETED', '2020-04-15 18:59:24'),
(9, '3', 270156472, 'COMPLETED', '2020-04-15 18:59:24'),
(10, '3', 646143938, 'COMPLETED', '2020-04-15 18:59:24'),
(11, '3', 646143938, 'COMPLETED', '2020-04-15 18:59:24'),
(12, '3', 170244505, 'COMPLETED', '2020-04-15 18:59:24'),
(13, '3', 993209949, 'COMPLETED', '2020-04-15 18:59:24'),
(14, '3', 922310021, 'COMPLETED', '2020-04-15 18:59:24'),
(15, '5', 922310021, 'COMPLETED', '2020-04-15 18:59:24'),
(16, '1', 904284260, NULL, '2020-04-15 18:59:24'),
(17, '5', 665546494, NULL, '2020-04-15 19:00:12'),
(18, '3', 464814463, 'Order Completed', '2020-04-15 19:09:45'),
(19, '3', 783218118, 'Order Completed', '2020-05-27 18:14:52'),
(20, '3', 756493080, 'Order Completed', '2020-05-27 19:37:21'),
(21, '3', 253317335, 'Order Completed', '2020-06-01 11:27:44'),
(27, '3', 672625765, 'Order Completed', '2020-06-01 16:05:56'),
(28, '3', 469728968, 'Order Completed', '2020-06-01 17:14:43'),
(29, '3', 193643853, NULL, '2020-06-01 18:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblorderaddresses`
--

CREATE TABLE `tblorderaddresses` (
  `ID` int(11) NOT NULL,
  `UserId` char(100) DEFAULT NULL,
  `Ordernumber` char(100) DEFAULT NULL,
  `Flatnobuldngno` varchar(255) DEFAULT NULL,
  `StreetName` varchar(255) DEFAULT NULL,
  `Area` varchar(255) DEFAULT NULL,
  `Landmark` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderFinalStatus` varchar(255) DEFAULT NULL,
  `pincodes` int(150) DEFAULT NULL,
  `latit` float DEFAULT NULL,
  `longit` float DEFAULT NULL,
  `assign` int(10) DEFAULT NULL,
  `setto` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorderaddresses`
--

INSERT INTO `tblorderaddresses` (`ID`, `UserId`, `Ordernumber`, `Flatnobuldngno`, `StreetName`, `Area`, `Landmark`, `City`, `OrderTime`, `OrderFinalStatus`, `pincodes`, `latit`, `longit`, `assign`, `setto`) VALUES
(340, '6', '905646283', '1', 'nibaran banerjee lane', 'hazra', 'basusree', 'kolkata', '2020-06-02 14:42:06', NULL, 700026, 22.5225, 88.3458, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) DEFAULT NULL,
  `FoodId` char(10) DEFAULT NULL,
  `IsOrderPlaced` int(11) DEFAULT NULL,
  `OrderNumber` char(100) DEFAULT NULL,
  `Quantity` int(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`ID`, `UserId`, `FoodId`, `IsOrderPlaced`, `OrderNumber`, `Quantity`) VALUES
(1, '1', '9', 1, '783218118', 3),
(3, '1', '9', 1, '448858080', 3),
(4, '1', '9', 1, '448858080', 3),
(5, '2', '9', 1, '201712648', 3),
(7, '5', '9', 1, '270156472', 3),
(8, '5', '9', 1, '270156472', 3),
(9, '6', '14', 1, '170244505', 1),
(10, '6', '14', 1, '170244505', 1),
(11, '6', '14', 1, '170244505', 1),
(12, '6', '14', 1, '170244505', 1),
(13, '6', '14', 1, '170244505', 1),
(14, '6', '14', 1, '170244505', 1),
(15, '6', '14', 1, '170244505', 1),
(16, '6', '14', 1, '170244505', 1),
(17, '6', '14', 1, '170244505', 1),
(18, '3', '9', 1, '922310021', 3),
(19, '3', '9', 1, '922310021', 3),
(20, '3', '9', 1, '922310021', 3),
(21, '3', '9', 1, '922310021', 3),
(22, '3', '9', 1, '922310021', 3),
(23, '3', '9', 1, '922310021', 3),
(24, '6', '14', 1, '771269800', 1),
(25, '6', '14', 1, '771269800', 1),
(26, '6', '14', 1, '771269800', 1),
(27, '6', '14', 1, '771269800', 1),
(28, '6', '14', 1, '771269800', 1),
(29, '6', '14', 1, '771269800', 1),
(30, '6', '14', 1, '771269800', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(1, 'Pankaj', 'Shahu', 'testuser@gmail.com', 7894561236, '202cb962ac59075b964b07152d234b70', '2019-04-08 07:41:22'),
(2, 'Rakesh', 'Chandra', 'rakesh@gmail.com', 7656234589, '202cb962ac59075b964b07152d234b70', '2019-04-08 07:43:28'),
(4, 'Yogesh', 'Shah', 'Test1@gmail.com', 8975895698, '202cb962ac59075b964b07152d234b70', '2019-05-06 09:09:05'),
(5, 'Test demo', 'User', 'testuser123@gmail.com', 1234567890, '7ec66345281b134a33f784bcd06d7ea5', '2019-05-06 16:26:40'),
(6, 'ARNAB', 'ROY', 'arnabroni312@gmail.com', 9874991140, 'd5c186983b52c4551ee00f72316c6eaa', '2020-04-03 10:02:35'),
(7, 'PARTHA', 'BAIDYA', 'roni@fw.com', 7603055280, '81dc9bdb52d04dc20036dbd8313ed055', '2020-04-27 08:29:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldeli`
--
ALTER TABLE `tbldeli`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfoodtracking`
--
ALTER TABLE `tblfoodtracking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblodrdeli`
--
ALTER TABLE `tblodrdeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deli_id` (`deli_id`,`ode_id`) USING BTREE;

--
-- Indexes for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`Ordernumber`);

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`FoodId`,`OrderNumber`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbldeli`
--
ALTER TABLE `tbldeli`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblfoodtracking`
--
ALTER TABLE `tblfoodtracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblodrdeli`
--
ALTER TABLE `tblodrdeli`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblorderaddresses`
--
ALTER TABLE `tblorderaddresses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
