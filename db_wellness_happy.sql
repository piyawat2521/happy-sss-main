-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2023 at 12:04 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wellness_happy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_user` varchar(20) NOT NULL,
  `ad_pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_user`, `ad_pass`) VALUES
(1, 'adminHoq', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_all`
--

CREATE TABLE `data_all` (
  `data_id` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `q3` int(11) NOT NULL,
  `q3t` text NOT NULL,
  `q4` int(11) NOT NULL,
  `q4_1` int(11) NOT NULL,
  `q4_1t` text NOT NULL,
  `q4_2` int(11) NOT NULL,
  `q4_2t` text NOT NULL,
  `q4_2_1` int(11) NOT NULL,
  `weights` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `waist` varchar(20) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `date_time` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_all`
--

INSERT INTO `data_all` (`data_id`, `sex`, `age`, `q3`, `q3t`, `q4`, `q4_1`, `q4_1t`, `q4_2`, `q4_2t`, `q4_2_1`, `weights`, `height`, `waist`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `date_time`, `code`) VALUES
(1, '3', '43', 8, '', 2, 0, '', 5, '', 4, '55', '100', '55', 3, 3, 3, 1, 2, 3, 2, 1, 2, 3, 4, 2, 5, 4, 4, 1, '18/02/2566-06:53:11', '11111'),
(2, '2', '25', 9, '3. สำเร็จการศึกษาสูงสุดในระดับใด', 1, 8, '4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด', 0, '', 0, '25', '220', '5', 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 4, 4, 3, 4, 3, 3, '18/02/2566-07:08:41', '11111'),
(3, '2', '25', 5, '', 1, 4, '', 0, '', 0, '125', '22', '55', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1, 3, 4, 4, 2, '18/02/2566-07:11:17', '11111'),
(4, '2', '99', 6, '', 2, 0, '', 4, '', 4, '25', '55', '55', 3, 3, 3, 4, 3, 3, 3, 4, 4, 4, 4, 5, 4, 4, 5, 4, '18/02/2566-07:13:12', '11111'),
(5, '2', '25', 6, '', 1, 8, '4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด', 0, '', 0, '25', '525', '55', 3, 3, 4, 5, 5, 4, 4, 4, 4, 4, 3, 4, 3, 3, 4, 4, '18/02/2566-07:14:41', '11111'),
(6, '2', '25', 5, '', 2, 0, '', 6, '4.2 ไม่ได้ทำงาน (ว่างงาน) เหตุผลที่ไม่ได้ทำงาน', 4, '525', '52', '85', 2, 3, 3, 3, 4, 3, 3, 3, 4, 3, 2, 3, 4, 4, 5, 5, '18/02/2566-07:15:58', '11111'),
(7, '2', '22', 6, '', 2, 0, '', 5, '', 1, '60', '162', '38', 3, 3, 4, 4, 3, 5, 4, 4, 4, 4, 3, 3, 3, 3, 3, 3, '18/02/2566-09:37:23', '11111'),
(8, '2', '22', 9, '3. สำเร็จการศึกษาสูงสุดในระดับใด', 1, 8, '4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด', 0, '', 0, '52', '162', '38', 1, 4, 2, 2, 1, 3, 3, 3, 3, 1, 3, 2, 3, 3, 2, 2, '18/02/2566-09:45:51', '11111'),
(9, '2', '22', 9, '3. สำเร็จการศึกษาสูงสุดในระดับใด', 1, 8, '4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด', 0, '', 0, '52', '162', '38', 1, 4, 2, 2, 1, 3, 3, 3, 3, 1, 3, 2, 3, 3, 2, 2, '18/02/2566-09:52:46', '11111'),
(10, '2', '22', 6, '', 2, 0, '', 5, '', 1, '52', '162', '38', 3, 3, 3, 2, 2, 3, 3, 3, 5, 5, 5, 5, 5, 5, 5, 5, '18/02/2566-10:09:34', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `data_all`
--
ALTER TABLE `data_all`
  ADD PRIMARY KEY (`data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_all`
--
ALTER TABLE `data_all`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
