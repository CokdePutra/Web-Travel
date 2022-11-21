-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 07:29 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginci3`
--
CREATE DATABASE IF NOT EXISTS `loginci3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loginci3`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'sdasd', 'cokgdeputrawidnyana25@gmail.com', 'default.jpg', '$2y$10$7LgGpGp/enemwjQVmlFDIuSw.ftGsnJQmCFVXi.vVqWrcf4zRm5vK', 2, 1, 1634283146),
(2, 'CokdePutra', 'cokgdeputra25@gmail.com', 'default.jpg', '$2y$10$Qp9G1Z4I4ADSZv9ssaTw8.4nx7ENYTeL50iMQ8e7Z9GJ0shBWpNiy', 2, 1, 1634284664),
(3, 'Abdi', 'abdi@gmail.com', 'default.jpg', '$2y$10$UtNz4LdYt3A20EtQNKWGruUrhc9dEHsUp82c7erkh1GC2pLFd6x62', 2, 1, 1634285721),
(5, 'Made Antari', 'Antari@gmail.com', 'default.jpg', '$2y$10$uLMkulWHenvoZxhyfFjX6O2LWTYlpzZdEY4G9P2kRREj.dMmYpoFG', 2, 1, 1634620269),
(6, 'Sanjaya', 'sanjaya@gmail.com', 'default.jpg', '$2y$10$Y7Jn8jrGYQxLElbunLC0uOFU7mfrRKHJROb5Eiej4MhbWx/JAqAUm', 2, 1, 1635819446),
(7, 'gajah', 'gajah@gmail.com', 'default.jpg', '$2y$10$yt/Bt/uUvpfdg9y82dHRt.0b7eOXIl93Hr.BlBS2AISIs7FVMslve', 2, 1, 1635819857);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
