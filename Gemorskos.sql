-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 19, 2024 at 10:37 AM
-- Server version: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gemorskos`
--

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `id` int(3) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`id`, `username`, `password`, `role`) VALUES
(5, 'Ofelia', '$2y$10$kfC8/A//T.K8qhEW8jK7lOnz4u7h3ZWpmU9KfzJMjBjknvZsgoMwe', 'editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
