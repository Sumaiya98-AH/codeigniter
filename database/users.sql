-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 08:59 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'Sumaiya', 'i.sumaiya1998@gmail.com', 'sumi1234', ''),
(2, 'Sumaiya', 'i.sumaiya1998@gmail.com', 'sumi1234', ''),
(3, 'Sumaiya', 'i.sumaiya1998@gmail.com', 'sumi1234', ''),
(4, 'Sumaiya Riza', 'sumaiya@ascenssion-holdings.com', '1234', ''),
(5, 'CodeIgniter', 'codeigniter3@gmail.com', 'a2babd489f1718c29f0977f990df8b27fb4bcc35', '1'),
(6, 'Sumaiya', 'i.sumaiya1998@gmail.com', 'b76bd99a0d97fd69a87dcb0192ccfa04722997b5', '1'),
(7, 'testing', 'testing@ci.com', '5a4fe08359c7f97380e408c717ef42c86939cd86', '1'),
(8, 'Sumaiya', 'i.sumaiya1998@gmail.com', '316fa5046fd394af8f6e10f48b0a19d3e675b5d5', '1'),
(9, 'Ishrath', 'ishrath@gmail.com', '3eddb016af4e31ad914535b53ecffa518e5c2667', '1'),
(10, 'Sumaiya CI Testing', 'i.sumaiya1998@gmail.com', '113bb9738b02cf96557e0e758f9f86bada7908b5', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
