-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 11:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staysearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(25) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(17, 'Bhavik patel', 'bhavikpatel123@gmail.com', '123456'),
(18, 'Umesh Vala', 'umesh7080@gmail.com', 'umesh8745'),
(19, 'Himmat singh', 'himmatsingh@gmail.com', '8754324');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE `tbl_area` (
  `area_id` int(8) NOT NULL,
  `area_name` varchar(25) NOT NULL,
  `area_pincode` int(8) NOT NULL,
  `area_city` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`, `area_pincode`, `area_city`) VALUES
(1, 'Paldi', 380007, 'Ahmedabad'),
(2, 'Vatva', 382440, 'Ahmedabad'),
(3, 'Nikol', 382350, 'Ahmedabad'),
(4, 'Vastral', 382418, 'Ahmedabad'),
(5, 'Vejalpur', 389340, 'Ahmedabad'),
(6, 'Bopal', 380058, 'Ahmedabad'),
(7, 'Chandkheda', 380005, 'Ahmedabad'),
(8, 'Navrangpura', 380009, 'Ahmedabad'),
(9, 'Maninagar', 380008, 'Ahmedabad'),
(10, 'Naroda', 382330, 'Ahmedabad'),
(11, 'Ranip', 382480, 'Ahmedabad'),
(12, 'Motera', 380005, 'Ahmedabad'),
(13, 'Vatva', 382440, 'Ahmedabad'),
(14, 'Sola', 380060, 'Ahmedabad'),
(15, 'Vasna', 382460, 'Ahmedabad'),
(16, 'Bapunagar', 380024, 'Ahmedabad'),
(17, 'Thaltej', 380059, 'Ahmedabad'),
(18, 'Odhav', 382415, 'Ahmedabad'),
(19, 'Ramol', 382449, 'Ahmedabad'),
(20, 'Isanpur', 382443, 'Ahmedabad'),
(21, 'Narol', 382405, 'Ahmedabad'),
(22, 'Memnagar', 380052, 'Ahmedabad'),
(23, 'Krishna Nagar', 382345, 'Ahmedabad'),
(24, 'Jivraj Park', 380051, 'Ahmedabad'),
(25, 'Jamalpur', 380001, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `property_id` int(25) NOT NULL,
  `booking_amount` int(10) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(25) NOT NULL,
  `property_id` int(25) NOT NULL,
  `feedback_details` text NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `inuiry_id` int(25) NOT NULL,
  `inquiry_name` varchar(25) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `inquiry_details` text NOT NULL,
  `property_id` int(25) NOT NULL,
  `inquiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(25) NOT NULL,
  `package_title` varchar(10) NOT NULL,
  `package_details` varchar(250) NOT NULL,
  `package_monthlyprice` int(10) NOT NULL,
  `package_annualprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_title`, `package_details`, `package_monthlyprice`, `package_annualprice`) VALUES
(1, 'STARTER', 'Basic Facilities', 99, 1099),
(2, 'STANDARD', 'Standard Facilities', 199, 1399),
(3, 'PREMIUM', 'Premium Facilities', 299, 1599),
(4, 'GOLD', 'Gold Facilities', 399, 2099);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `package_id` int(25) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `payment_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `property_id` int(25) NOT NULL,
  `seller_name` varchar(25) NOT NULL,
  `property_details` varchar(50) NOT NULL,
  `property_address` text NOT NULL,
  `property_city` varchar(25) NOT NULL,
  `property_image` varchar(50) NOT NULL DEFAULT 'default.png',
  `property_type` int(25) NOT NULL,
  `property_area` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`property_id`, `seller_name`, `property_details`, `property_address`, `property_city`, `property_image`, `property_type`, `property_area`) VALUES
(4, 'Narotam Desai', '3BHK', 'c/115 , Mira Park ', '1', 'download.jpg', 1, 382350),
(5, 'Rajat Patel', '4 Rooms ,3rd Floor', '', '4', 'download.jpg', 4, 382418),
(6, 'Aakash Patel', '2BHK WITH FURNITURE', '', '6', 'download (1).jpg', 4, 380058),
(7, 'mahesh patil', '4BHK with garage', '', '4', '', 1, 382418),
(8, 'nirav modi', '6BHK rooms with swimming pool ,garden & massive ca', '', '7', '', 1, 382424),
(9, 'rahul gandhi(pappu)', '3BHK flat with furnished', '', '15', '', 2, 382460),
(10, 'mehul chokshi', '4BHK bunglow with kitchen', '', '9', '', 5, 380008),
(11, 'vijay malya', '3BHK with modern furnished', '', '3', '', 7, 382350),
(12, 'arwind kejrival', '2BHK with kitchen', '', '12', '', 3, 380005),
(13, 'Amit Nagar', '2BHK with furnished', '', '14', '', 2, 380060),
(14, 'Prithvi Parmar', '4BHK with All Modern Technology ', '', '2', '', 1, 382440),
(15, 'Riya Agrawal', '3BHK With Modern Kitchen', '', '8', '', 4, 380009),
(16, 'Rahul Vakariya', '2BHK Fourth Floor', '', '11', '', 2, 382480),
(17, 'Manoj Chauhan', '1BHK ', '', '10', '', 2, 382330),
(18, 'Ajit Singh', '4BHK', '', '18', '', 3, 382415),
(19, 'Naresh Jagpal', '4BHK With Fully Furnished', '', '20', '', 2, 382445);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

CREATE TABLE `tbl_property_type` (
  `property_typeid` int(25) NOT NULL,
  `property_typename` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_property_type`
--

INSERT INTO `tbl_property_type` (`property_typeid`, `property_typename`) VALUES
(1, 'Vila'),
(2, 'Flat'),
(3, 'Raw House'),
(4, 'Apartment'),
(5, 'bungalow'),
(7, 'Duplex');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `seller_id` int(25) NOT NULL,
  `seller_name` varchar(25) NOT NULL,
  `seller_email` varchar(25) NOT NULL,
  `seller_password` varchar(15) NOT NULL,
  `seller_mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_mobileno`) VALUES
(1, 'Pratap Rathor', 'prat888@gmail.com', '695487', 9826531862),
(2, 'Mahesh Darji', 'mahesh2354@gmail.com', 'mahesh879', 2147483647),
(3, 'Bhautik Varma', 'varmabhautik@gmail.com', '549862', 3258469153),
(4, 'Yuvraj Sing', 'yuvraj111@gmail.com', 'yuvraj3333', 8874515632),
(6, 'Jatin Sarvaiya', 'jatinsar123@gmail.com', 'jatin@sarvaiya', 7854258460),
(7, 'Nishant Vala', 'nishantvala1986@gmail.com', '98521463', 8200015323),
(8, 'Kamlesh Vala', 'kamlesh1996@gmail.com', '584695', 9913651278),
(9, 'Jatin Padhiyar', 'jatinpad737@gmail.com', '9544882', 3541298451);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_mobileno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_mobileno`) VALUES
(18, 'Raj Platel', 'rajpatel736@gmail.com', '542685', 6598253147),
(19, 'Jignesh Patel', 'pateljigs999@gmail.com', '65238456', 7852014632),
(20, 'Tirth Panchal', 'tirth2002@gmail.com', '251634898', 8452045681),
(21, 'Ashok Parmar', 'ashok865@gmail.com', 'ashok989', 6589023045);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`inuiry_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  ADD PRIMARY KEY (`property_typeid`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `area_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `inuiry_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `property_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
  MODIFY `property_typeid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
