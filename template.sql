-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2025 at 11:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `reply` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint`, `date`, `staff_id`, `reply`) VALUES
(10, 'comp2', '2025-02-14', 16, 'hello'),
(12, 'nbm', '2025-02-13', 17, 'sf'),
(13, 'jhj', '2025-02-13', 22, ''),
(14, 'kl', '2025-02-14', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(6, 'gaya@gmail.com', 'gaya'),
(7, 'abi@gmail.com', 'abi'),
(8, 'az@gmail.com', 'az'),
(10, 'aaag@gmail.com', 'aa'),
(11, 'vv@gmail.com', 'vv'),
(12, 'zz@gmail.com', 'zz'),
(13, 'az@gmail.com', 'az'),
(14, 'manu@gmail.com', 'manu'),
(15, 'azl@gmail.com', 'azl'),
(16, 'abimanyu', 'abi'),
(17, 'bindu@gmail.com', 'bindu'),
(18, 'diya', 'diya'),
(20, 'arun@GMAIL.COM', 'ARUN'),
(21, 'deepathi@gmail.com', 'deepathi'),
(22, 'geetha@gmail.com', 'geetha');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`, `date`) VALUES
(1, 'Array', '0000-00-00'),
(2, 'Array', '0000-00-00'),
(3, 'new', '2025-02-21'),
(4, 'new', '2025-02-21'),
(5, 'new', '2025-02-21'),
(6, 'new', '2025-02-21'),
(7, 'new', '2025-02-21'),
(8, 'new', '2025-02-21'),
(9, 'new', '2025-02-21'),
(10, 'new', '2025-02-21'),
(11, 'new', '2025-02-21'),
(12, 'new', '2025-02-21'),
(13, 'new', '2025-02-21'),
(14, 'new', '2025-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `gender`, `email`, `password`, `cpassword`, `file`, `status`) VALUES
(16, 'abimanyu', 'Female', 'abi@gmail.com', 'abi', 'abi', 'images (2).jpg', 'reject'),
(17, 'bindu', 'Male', 'bindu@gmail.com', 'bindu', 'bindu', 'images (1).jpg', 'Approve'),
(18, 'diya', 'Female', 'diya@gmail.com', 'diya', 'deepak', 'images (2).jpg', 'Approve'),
(20, 'arun', 'Male', 'arun@GMAIL.COM', 'ARUN', 'ARUN', 'images (2).jpg', 'Approve'),
(21, 'deepthi', 'Female', 'deepathi@gmail.com', 'deepathi', 'deepthi', 'images (2).jpg', 'Approve'),
(22, 'geetha', 'Female', 'geetha@gmail.com', 'geetha', 'geetha', 'images (1).jpg', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `feedback`, `date`) VALUES
(1, 'aaa', '2025-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
