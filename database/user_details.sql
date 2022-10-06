-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 09:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `office` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `position`, `office`, `age`, `start_date`) VALUES
(1, 'Airi', 'Satou', 'Accountant', 'Tokyo', 33, '2008-11-28'),
(2, 'Angelica', 'Ramos', 'Chief Executive Officer (CEO)', 'London', 47, '2009-10-09'),
(3, 'Ashton', 'Cox', 'Junior Technical Author', 'San Francisco', 66, '2009-01-01'),
(4, 'Bradley', 'Greer', 'Software Engineer', 'London', 41, '2012-10-13'),
(5, 'Brenden', 'Wagner', 'Software Engineer', 'San Francisco', 28, '2011-06-07'),
(6, 'Brielle', 'Williamson', 'Integration Specialist', 'New York', 61, '2012-12-02'),
(7, 'Bruno', 'Nash', 'Software Engineer', 'London', 38, '2011-05-03'),
(8, 'Caeser', 'Vance', 'Pre-Sales Support', 'New York', 21, '2011-12-12'),
(9, 'Cara', 'Stevens', 'Sales Assistant', 'New York', 46, '2011-12-06'),
(10, 'Cedric', 'Kelly', 'Senior Javascript Developer', 'Edinburgh', 22, '2012-03-29'),
(11, 'Charde', 'Marshall', 'Regional Director', 'San Francisco', 36, '2008-10-16'),
(12, 'Colleen', 'Hurst', 'Javascript Developer', 'San Francisco', 39, '2009-09-15'),
(13, 'Dai', 'Rios', 'Personnel Lead', 'Edinburgh', 35, '2012-09-26'),
(14, 'Donna', 'Snider', 'Customer Support', 'New York', 27, '2011-01-25'),
(15, 'Doris', 'Wilder', 'Sales Assistant', 'Sydney', 23, '2010-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
