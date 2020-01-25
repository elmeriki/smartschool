-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2020 at 05:20 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartschoolapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `passcode`, `email`) VALUES
(20190001, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(50) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `studentlastname` varchar(50) NOT NULL,
  `studentaddress` varchar(200) NOT NULL,
  `studentphone` varchar(50) NOT NULL,
  `studentemail` varchar(50) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `guadianname` varchar(100) NOT NULL,
  `guadianlastname` varchar(100) NOT NULL,
  `guadianphone` varchar(50) NOT NULL,
  `guadianemail` varchar(50) NOT NULL,
  `guadianaddress` varchar(100) NOT NULL,
  `registerdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `studentname`, `studentlastname`, `studentaddress`, `studentphone`, `studentemail`, `coursename`, `guadianname`, `guadianlastname`, `guadianphone`, `guadianemail`, `guadianaddress`, `registerdate`) VALUES
(2020040, 'Marry Mary', ' solo', '146 Vandag  Steve\r\nBiko street', ' 791205078', 'studeno1n@gmail.com', 'PHP', ' Meriki', 'solomon', '791205078', 'ferelex.com@gmail.com', ' 146 Vandag  Steve, Biko street, Pretoria', '2019-12-12 13:02:52'),
(2020041, 'Jona Jona', ' solo', '146 Vandag  Steve\r\nBiko street', ' 791205078', 'studenon@gmail.com', 'PHP', ' Paul', 'Mukete', '731690411', 'kelvinashu@gmail.com', ' 15 Anaboom Street, Noordwyk, Midrand', '2019-12-12 21:44:59'),
(2020043, 'MARIUS', 'MARIUS', 'Cnr Willem Cruywagen\r\nand Commet street, Clarina, Ak', ' 791205078', 'wiliam@gmail.com', 'PHP', ' Meriki', 'solomon', '791205078', 'wiliam@gmail.com', ' 146 Vandag  Steve, Biko street, Pretoria', '2019-12-12 21:56:56'),
(2020044, 'Jonathan', ' solo', '146 plein street', ' 791205078', 'ferelex.com@gmail.com', 'PHP', ' Meriki', 'solomon', '791205078', 'kelvinashu@gmail.com', ' 146 Vandag  Steve, Biko street, Pretoria', '2019-12-13 14:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentemail` (`studentemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020045;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
