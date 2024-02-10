-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 12:00 PM
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
-- Database: `db_hackthaon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(99) NOT NULL,
  `admin_email` varchar(99) NOT NULL,
  `admin_mobile_no` varchar(13) NOT NULL,
  `admin_status` varchar(12) NOT NULL,
  `admin_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_mobile_no`, `admin_status`, `admin_password`) VALUES
(1, 'Aditya Kamble', 'adityakamble0311@gmail.com', '8329902128', 'Active', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE `tbl_certificate` (
  `cert_id` int(11) NOT NULL,
  `cert_number` varchar(99) NOT NULL,
  `cert_fname` varchar(99) NOT NULL,
  `cert_lname` varchar(99) NOT NULL,
  `cert_email` varchar(99) NOT NULL,
  `cert_mobile` varchar(13) NOT NULL,
  `cert_position` varchar(99) NOT NULL,
  `cert_event_name` varchar(99) NOT NULL,
  `cert_issue_date` varchar(99) NOT NULL,
  `cert_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

CREATE TABLE `tbl_club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(99) NOT NULL,
  `club_logo` varchar(200) NOT NULL,
  `club_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `con_name` varchar(99) NOT NULL,
  `con_email` varchar(99) NOT NULL,
  `con_clg` varchar(99) NOT NULL,
  `con_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_cid` varchar(99) NOT NULL,
  `event_name` varchar(99) NOT NULL,
  `event_cname` varchar(99) NOT NULL,
  `event_sdate` varchar(99) NOT NULL,
  `event_ldate` varchar(99) NOT NULL,
  `event_stime` varchar(99) NOT NULL,
  `event_ltime` varchar(99) NOT NULL,
  `event_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `log_id` int(11) NOT NULL,
  `log_uid` varchar(99) NOT NULL,
  `log_activity` varchar(99) NOT NULL,
  `log_type` varchar(99) NOT NULL,
  `log_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `reg_id` int(11) NOT NULL,
  `reg_fname` varchar(99) NOT NULL,
  `reg_lname` varchar(99) NOT NULL,
  `reg_email` varchar(99) NOT NULL,
  `reg_mobile` varchar(13) NOT NULL,
  `reg_clg` varchar(99) NOT NULL,
  `reg_dept` varchar(99) NOT NULL,
  `reg_timestamp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`),
  ADD UNIQUE KEY `admin_mobile_no` (`admin_mobile_no`);

--
-- Indexes for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  ADD PRIMARY KEY (`cert_id`),
  ADD UNIQUE KEY `cert_number` (`cert_number`);

--
-- Indexes for table `tbl_club`
--
ALTER TABLE `tbl_club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  MODIFY `cert_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_club`
--
ALTER TABLE `tbl_club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
