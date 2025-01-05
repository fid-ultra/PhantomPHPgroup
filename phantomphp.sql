-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 09:18 PM
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
-- Database: `phantomphpgroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `phantomphp`
--

CREATE TABLE `phantomphp` (
  `Name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `number` int(11) NOT NULL,
  `Gender` text NOT NULL,
  `Age` int(2) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phantomphp`
--

INSERT INTO `phantomphp` (`Name`, `surname`, `email`, `number`, `Gender`, `Age`, `Password`) VALUES
('fahad', 'sunna', 'fahad@gmail.com', 25345234, 'Male', 33, ';lafkjsd;flk'),
('hamza', 'hhh', 'h@h', 987098, 'Male', 34, 'khlkjhlkjhlkjlhkjlh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phantomphp`
--
ALTER TABLE `phantomphp`
  ADD PRIMARY KEY (`Name`(15));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
