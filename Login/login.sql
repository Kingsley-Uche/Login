-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 09:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_mentee`
--

CREATE TABLE `assign_mentee` (
  `assign_mentee_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `assign_status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assign_mentor`
--

CREATE TABLE `assign_mentor` (
  `assign_mentor_id` int(11) NOT NULL,
  `assign_mentee_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `assign_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign_mentor`
--

INSERT INTO `assign_mentor` (`assign_mentor_id`, `assign_mentee_id`, `mentor_id`, `assign_status`) VALUES
(1, 31, 32, 1),
(2, 31, 29, 1),
(3, 31, 33, 1),
(4, 45, 33, 1),
(5, 31, 33, 1),
(6, 45, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` smallint(6) NOT NULL,
  `token` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `assigned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `usertype`, `token`, `phone`, `created_at`, `confirmed`, `assigned`) VALUES
(29, 'Uche', 'Kamma', 'olekamma.uche@gmail.com', '123456', 1, ';Sg3A2a1MOeId', '08034278894', '2020-10-08 11:40:54', 0, NULL),
(31, 'Demo', 'Mentee 1', 'ucmtn2@gmail.com', '123456', 2, ')38ENS#2fFDi0', '7015685494', '2020-11-24 13:29:40', 0, NULL),
(32, 'adamwonu', 'Mentor 2', 'ake@gmail.com', '123456', 1, 'hg0)eT3MBCGD(', '12345789', '2020-11-24 14:23:33', 0, NULL),
(33, 'Demo ', 'Mento 3', 'admin@kammasoft.tech', '123456', 1, 'g0H*)DECS03Ni', '12356789', '2020-11-24 17:24:13', 0, NULL),
(42, 'Demo ', 'Mentor 4', 'admin@gmail.com', '123456', 1, ')h31f3u0GODOa', '12356789', '2020-11-24 17:25:07', 0, NULL),
(45, 'Demo', 'Mentee 2', '123@gmail.com', '123456', 2, 'hC0983BsUGTM2', '123456', '2020-11-24 17:28:35', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_mentee`
--
ALTER TABLE `assign_mentee`
  ADD PRIMARY KEY (`assign_mentee_id`);

--
-- Indexes for table `assign_mentor`
--
ALTER TABLE `assign_mentor`
  ADD PRIMARY KEY (`assign_mentor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_mentee`
--
ALTER TABLE `assign_mentee`
  MODIFY `assign_mentee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_mentor`
--
ALTER TABLE `assign_mentor`
  MODIFY `assign_mentor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
