-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2023 at 05:22 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21380365_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `booking_details` text NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `travel_date` date NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `dob`, `city`, `state`, `country`, `pincode`) VALUES
(1, 'harshil', 'harshil@gmail.com', 'harshil', '2000-08-14', 'Ahmedabad', 'Gujarat', 'India', '380015'),
(2, 'harshil', 'harshil@gmail.com', '', '2000-08-14', 'Ahmedabad', 'Gujarat', 'India', '380015'),
(3, 'harshil', 'harshil@gmail.com', '', '2000-08-14', 'Ahmedabad', 'Gujarat', 'India', '380015'),
(4, 'Veriweq Haward', 'hawardve@gmail.com', '$2y$10$c4Fz2YMYtvKZlrd/mfkMfOIDQPwgyTD.XAGCDLjZtHEkxONSAXzAC', '2000-05-04', 'New York', 'New York', 'United States', '10002'),
(5, 'user', 'user@gmail.com', '$2y$10$kI8nLWIxkU5R/3DSuOtop./OR7IK0guyEYo7eriiUcCQKgYYFAEOm', '1999-10-10', 'Ahmedabad', 'Gujarat', 'India', '380029'),
(6, 'user1', 'user1@hotmail.com', '$2y$10$wNcVpoETNGRX2akN9vgZg.nOhiYFq9KD47lE3ka0C21/iwRWYotV2', '1990-12-12', 'Jaipur', 'Rajasthan', 'India', '302001'),
(7, 'username', 'IronMiron56@hotmail.com', '$2y$10$bmknUixpkVgBtgvm0RM7YelPSCm55Tn8QlAqch7m1vgCv4zDQJZAO', '1990-12-10', 'Mexico city', 'Mexico', 'Mexico', '11560');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
