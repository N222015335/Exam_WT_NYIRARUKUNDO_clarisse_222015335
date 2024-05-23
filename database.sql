-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anna`
--

-- --------------------------------------------------------

--
-- Table structure for table `dad`
--

CREATE TABLE `dad` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `telephone` int(15) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dad`
--

INSERT INTO `dad` (`id`, `user_id`, `user_name`, `password`, `email`, `age`, `gender`, `telephone`, `country`) VALUES
(7, 2518072234, 'clarisse', '$2y$10$Y1fbZ6PkRXPVjBGYkRc5n.98qAin18uSEXXDR9qKbZYqkukdt2Ccy', 'clarisse3@gmail.com', 23, 'female', 789673553, 'Rwanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dad`
--
ALTER TABLE `dad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dad`
--
ALTER TABLE `dad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
