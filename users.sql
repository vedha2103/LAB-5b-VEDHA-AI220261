-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 08:33 AM
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
-- Database: `lab_5b`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `matric` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`matric`, `name`, `password`, `role`) VALUES
('AI220121', 'Amir bin Abdul Wahab', '$2y$10$ZT8xwu9MfWp5NuvIM9myEONiNEtRveLfaQ40pgOf2MZIRhaSrnVyi', 'student'),
('AI220146', 'Muhammad Adam bin Khaled', '$2y$10$16V8iq2ev.L.3uMg1/1qr.ByBvN8rgBK5FFrMeIKOjmaBNXJ3OAtC', 'student'),
('AI220221', 'Raudah', '$2y$10$1MwDq6o/.vYFK2D.KhW94uXnqjuFrn9Z9ZiQmVaGivDgHEsWwcksi', 'student'),
('AI220261', 'Vedhanahyakee', '$2y$10$rxb4qAH2K7k7kV4ZqTlFluhAi4ObgDTYDpeFmqmMWhjSesDkbqGpW', 'student'),
('I0110', 'Arif', '$2y$10$XuV4rOsD04ubFj/Nc20kLe7HmL8I9zrtnf.okvYkGhx0XqEvdCtfe', 'lecturer'),
('I0333', 'Kamarul bin Zamani', '$2y$10$ea4ou9beZSf7dtLBFG9J5.Z6GYauRmGCTZG.yTQ0fmwQ1lUvVrusm', 'lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`matric`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
