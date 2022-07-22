-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 04:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingpatient`
--

CREATE TABLE `bookingpatient` (
  `id` int(11) NOT NULL,
  `srfid` varchar(50) NOT NULL,
  `vactype` varchar(50) NOT NULL,
  `hcode` varchar(50) NOT NULL,
  `dose` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pphone` varchar(100) NOT NULL,
  `paddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingpatient`
--

INSERT INTO `bookingpatient` (`id`, `srfid`, `vactype`, `hcode`, `dose`, `pname`, `pphone`, `paddress`) VALUES
(1, '1BM20CS222', 'covaxin', 'BBH01', 1, 'm gagan', '+919148738706', '#DOOR NO 69/6 8TH MAIN 18 TH CROSS MUTYALA NAGAR'),
(2, '1BM20CS221', 'covaxin', 'BBH01', 2, 'xyz', '9874551432', 'BEHIND TSS RICE MILL MARKET YARD SIRSI');

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldata`
--

CREATE TABLE `hospitaldata` (
  `id` int(11) NOT NULL,
  `hcode` varchar(200) NOT NULL,
  `hname` varchar(200) NOT NULL,
  `covaxin` int(11) NOT NULL,
  `covishield` int(11) NOT NULL,
  `sputnik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaldata`
--

INSERT INTO `hospitaldata` (`id`, `hcode`, `hname`, `covaxin`, `covishield`, `sputnik`) VALUES
(2, 'BBH01 ', 'bbmp hospital', 492, 1199, 150),
(3, 'BMS07 ', 'bmsce', 999, 250, 300);

--
-- Triggers `hospitaldata`
--
DELIMITER $$
CREATE TRIGGER `Update` AFTER UPDATE ON `hospitaldata` FOR EACH ROW INSERT INTO trig VALUES(null,NEW.hcode,NEW.covaxin,NEW.covishield,NEW.sputnik,'UPDATED',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `hospitaldata` FOR EACH ROW INSERT INTO trig VALUES(null,NEW.hcode,NEW.covaxin,NEW.covishield,NEW.sputnik,'INSERTED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hospitaluser`
--

CREATE TABLE `hospitaluser` (
  `id` int(11) NOT NULL,
  `hcode` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitaluser`
--

INSERT INTO `hospitaluser` (`id`, `hcode`, `email`, `password`) VALUES
(17, 'BBH01', 'kcr2002@gmail.com', 'pbkdf2:sha256:260000$llSXuFrph1iwUZE2$5edf390e65ab53847d5b41cd9185f9ed838d37e7effcf78653c7fb25ec1e4d1f'),
(18, 'BMS07', 'gaganrao933@gmail.com', 'pbkdf2:sha256:260000$QjaSKhNkCKNejlkS$fc1ebcd9e77863a991688d466004b00d9485da1352dccaf47d4df595c97f2de5');

-- --------------------------------------------------------

--
-- Table structure for table `trig`
--

CREATE TABLE `trig` (
  `id` int(11) NOT NULL,
  `hcode` varchar(50) NOT NULL,
  `covaxin` int(11) NOT NULL,
  `covishield` int(11) NOT NULL,
  `sputnik` int(11) NOT NULL,
  `querys` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trig`
--

INSERT INTO `trig` (`id`, `hcode`, `covaxin`, `covishield`, `sputnik`, `querys`, `date`) VALUES
(1, 'BBH01 ', 500, 1200, 150, 'INSERTED', '2022-07-22'),
(2, 'BBH01 ', 499, 1200, 150, 'UPDATED', '2022-07-22'),
(3, 'BBH01 ', 498, 1200, 150, 'UPDATED', '2022-07-22'),
(4, 'BBH01 ', 498, 1199, 150, 'UPDATED', '2022-07-22'),
(5, 'BBH01 ', 497, 1199, 150, 'UPDATED', '2022-07-22'),
(8, 'BBH01 ', 494, 1199, 150, 'UPDATED', '2022-07-22'),
(10, 'BBH01 ', 492, 1199, 150, 'UPDATED', '2022-07-22'),
(11, 'BMS07 ', 1000, 250, 300, 'INSERTED', '2022-07-22'),
(12, 'BMS07 ', 999, 250, 300, 'UPDATED', '2022-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `srfid` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `srfid`, `email`, `dob`) VALUES
(3, '1BM20CS222', 'gaganrao933@gmail.com', 'pbkdf2:sha256:260000$eD17xle38HcswXSQ$5d9b3837be3dc923d31e61dbd97813fd9a7383f318acd7faaa6f26478dc0e7c8'),
(7, '1BM20CS221', 'gagan.ec20@bmsce.ac.in', 'pbkdf2:sha256:260000$IoUnE5Sw00tk65p7$deebeacbfcd5c72ab7a0e26297f65198e4a69dfebcc31db1c0ff782a25b20c6c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingpatient`
--
ALTER TABLE `bookingpatient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `srfid` (`srfid`);

--
-- Indexes for table `hospitaldata`
--
ALTER TABLE `hospitaldata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hcode` (`hcode`);

--
-- Indexes for table `hospitaluser`
--
ALTER TABLE `hospitaluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trig`
--
ALTER TABLE `trig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `srfid` (`srfid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingpatient`
--
ALTER TABLE `bookingpatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitaldata`
--
ALTER TABLE `hospitaldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitaluser`
--
ALTER TABLE `hospitaluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trig`
--
ALTER TABLE `trig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
