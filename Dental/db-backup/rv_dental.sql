-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 04:33 AM
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
-- Database: `tayouth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE `tbl_appointments` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_phone` varchar(20) NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `service` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointments`
--

INSERT INTO `tbl_appointments` (`id`, `patient_name`, `patient_email`, `patient_phone`, `patient_address`, `appointment_date`, `service`, `created_at`) VALUES
(1, 'test', 'test@gmail.com', '21321', 'test2123', '2024-02-19 10:09:00', 'Extraction', '2024-02-17 23:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `description` mediumtext NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `image`, `description`, `links`) VALUES
(16, 'Orthero Philippines', '1708203991.jpg', 'Behind every radiant smile is a routine of care. Discover the joy of a clean and healthy oral care routine with Orthero clear aligners! Shine bright, shine confidently!', 'https://www.facebook.com/photo?fbid=820742230068516&set=a.460194159456660'),
(18, 'Professional Teeth Whitening', '1708204011.jpg', 'Hurry and avail our Teeth Whitening 20% off promo!\r\nWe are located at Bagong Barrio, Pinaod San Ildefonso Bulacan. ', 'https://www.facebook.com/photo?fbid=753456133475199&set=a.412615474225935'),
(19, 'New Year, New Smile!', '1708204036.jpg', 'Look at that beautiful smile on her face, indeed she is satisfied with the results of her orthodontic treatment ', 'https://www.facebook.com/photo?fbid=785214810299331&set=pcb.785219006965578');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `msg_submitted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`, `msg_submitted`) VALUES
(49, 'klak JD', 'lloydlanguido@2gmail.com', 'wqewq', '2024-02-17 02:36:11'),
(50, 'klak JD', 'test@gmail.com', '21', '2024-02-17 02:43:42'),
(51, 'klak JD', 'lloyd@gmail.com', '12', '2024-02-17 02:44:29'),
(52, 'Sevilla', 'user@gmail.com', 'test message', '2024-02-17 08:37:21'),
(53, 'Sevilla', 'user@gmail.com', 'test message', '2024-02-17 08:40:04'),
(54, 'Sevilla', 'user@gmail.com', 'test message', '2024-02-17 08:42:09'),
(55, 'Sevilla', 'user@gmail.com', 'test message', '2024-02-17 08:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `dob`, `phone`, `password`, `role_as`, `created_at`) VALUES
(12, 'Admin Sevilla', 'admin@gmail.com', '0000-00-00', 921321321, '123', 1, '2024-01-21 10:03:21'),
(19, 'Lloyd', 'user@gmail.com', '0000-00-00', 2147483647, '123', 0, '2024-02-18 03:10:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
