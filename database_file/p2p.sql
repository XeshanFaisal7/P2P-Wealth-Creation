-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 01:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2p`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Super Admin', 'Super_Admin1', '9267a47fa59d5d96e2641b148825a0e8');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `simple_password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `full_name`, `age`, `gender`, `email`, `password`, `simple_password`, `phone`, `address`, `status`) VALUES
(12, 'Muhammad Zeeshan Faisal', '46', 'Male', 'zeeshanfaisal69@gmail.com', 'f72e237aa5c67f35d25b6b2c4c01291d', 'Salmonpuff123', '+923046888676', 'House No 28 Main Road Gillwala Sargodha', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `self_dob` varchar(255) NOT NULL,
  `self_ped` varchar(255) NOT NULL,
  `spouse_dob` varchar(255) NOT NULL,
  `spouse_ped` varchar(255) NOT NULL,
  `child_1_dob` varchar(255) NOT NULL,
  `child_1_ped` varchar(255) NOT NULL,
  `child_2_dob` varchar(255) NOT NULL,
  `child_2_ped` varchar(255) NOT NULL,
  `sum_insured` varchar(255) NOT NULL,
  `third_quote` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `category`, `self_dob`, `self_ped`, `spouse_dob`, `spouse_ped`, `child_1_dob`, `child_1_ped`, `child_2_dob`, `child_2_ped`, `sum_insured`, `third_quote`, `status`, `customer_id`) VALUES
(1, 'Individual', '2022-05-12', 'Zeeshan1234', '', '', '', '', '', '', '7500000', '', 'Initiated', 12);

-- --------------------------------------------------------

--
-- Table structure for table `life_insurance`
--

CREATE TABLE `life_insurance` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `annual_income` varchar(255) NOT NULL,
  `sum_assured` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `policy_term` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `third_quote` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutual_fund`
--

CREATE TABLE `mutual_fund` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `existing_demat` varchar(255) NOT NULL,
  `type_of_investment` varchar(255) NOT NULL,
  `mode_of_investment` varchar(255) NOT NULL,
  `third_quote` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `plan_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `product`, `plan_category`) VALUES
(4, 'Mutual Fund', 'SIP Plan'),
(5, 'Mutual Fund', 'Lumpsum Plan'),
(6, 'Mutual Fund', 'Both(SIP & Lumpsum)'),
(7, 'Individual', 'Comprehensive Plan'),
(8, 'Individual', 'Basic Plan'),
(9, 'Family', 'Comprehensive Plan'),
(10, 'Family', 'Basic Plan'),
(11, 'Term', 'Term Plan'),
(12, 'Term', 'Guranteed Plan'),
(13, 'Saving', 'Saving Plan'),
(14, 'Investment', 'Investment Plan'),
(15, 'Investment', 'UCIP Plan');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_insurance`
--

CREATE TABLE `vehicle_insurance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_of_vehicle` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `registration_date` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `variant` varchar(255) NOT NULL,
  `existing_insurer` varchar(255) NOT NULL,
  `policy_expiry_date` varchar(255) NOT NULL,
  `existing_claims` varchar(255) NOT NULL,
  `ncb` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `rc_copy_path` varchar(255) NOT NULL,
  `existing_policy_path` varchar(255) NOT NULL,
  `third_quote` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_insurance`
--

INSERT INTO `vehicle_insurance` (`id`, `name`, `type_of_vehicle`, `vehicle_number`, `registration_date`, `company_name`, `model`, `variant`, `existing_insurer`, `policy_expiry_date`, `existing_claims`, `ncb`, `image_path`, `rc_copy_path`, `existing_policy_path`, `third_quote`, `status`, `customer_id`) VALUES
(3, 'Muhammad', '2-Wheeler', 'SQ123', '2022-05-13', 'TATA', 'WE23', 'Petrol', 'GN656', '2022-05-12', 'No', '65', '8de59e8354adbf30bd8cc9dda1e1d0ec.jpg', '8de59e8354adbf30bd8cc9dda1e1d0ec.jpg', '8de59e8354adbf30bd8cc9dda1e1d0ec.jpg', 'yes', 'Initiated', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `life_insurance`
--
ALTER TABLE `life_insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `mutual_fund`
--
ALTER TABLE `mutual_fund`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_insurance`
--
ALTER TABLE `vehicle_insurance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `life_insurance`
--
ALTER TABLE `life_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mutual_fund`
--
ALTER TABLE `mutual_fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicle_insurance`
--
ALTER TABLE `vehicle_insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `health`
--
ALTER TABLE `health`
  ADD CONSTRAINT `health_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `life_insurance`
--
ALTER TABLE `life_insurance`
  ADD CONSTRAINT `life_insurance_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `mutual_fund`
--
ALTER TABLE `mutual_fund`
  ADD CONSTRAINT `mutual_fund_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `vehicle_insurance`
--
ALTER TABLE `vehicle_insurance`
  ADD CONSTRAINT `vehicle_insurance_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
