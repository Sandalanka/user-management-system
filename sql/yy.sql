-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 07:12 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yy`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `password`, `date`, `is_deleted`) VALUES
(1, 'admin', 'admin', '00000', '2010-10-25 00:00:00', 1),
(2, 'admin', 'admin', '00000', '2010-10-25 00:00:00', 1),
(3, 'admin', 'admin', '00000', '2010-10-25 00:00:00', 1),
(4, 'admin', 'admin', '00000', '2010-10-25 00:00:00', 1),
(5, 'admin', 'admin', '00000', '2010-10-25 00:00:00', 1),
(6, 'isuru', '1415sandalanka@gmail.com', '00000', '2019-02-06 12:49:19', 0),
(7, 'sanam', '15damidulakshan@gmail.com', '1234', '0000-00-00 00:00:00', 1),
(8, 'kasun', '1415sandalanka@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(9, 'lanka', 'lanka@gmail.com', '12345', '2019-02-08 11:40:58', 1),
(10, '', 'lanka@gmail.com', '12345', '0000-00-00 00:00:00', 1),
(11, '', '', '', '0000-00-00 00:00:00', 1),
(12, 'kalana', 'kalana@gmail.com', '00000', '2019-01-27 12:12:22', 0),
(13, 'kasuni', 'livara@gmail.com', '00000', '0000-00-00 00:00:00', 1),
(14, 'saman', 'saman@gmail.com', '00000', '2019-01-27 17:24:26', 0),
(15, 'kamal', 'kamal@gmail.com', '00000', '2019-01-27 20:44:51', 0),
(16, 'kalana', '1415sandalanka@gmail.com', '00000', '0000-00-00 00:00:00', 0),
(17, 'saman', 'saman@gmail.com', '1234', '0000-00-00 00:00:00', 0),
(18, 'sandalanka', 'lanka@gmail.com', '12345', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
