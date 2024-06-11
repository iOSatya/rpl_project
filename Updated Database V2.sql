-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 04:33 PM
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
-- Database: `rpl_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `player_status` ENUM('active', 'inactive', 'banned') NOT NULL DEFAULT 'active',
  `player_name` VARCHAR(255) DEFAULT NULL,
  `avatar` VARCHAR(255) DEFAULT 'default_avatar.png',
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `email`, `pwd`, `player_status`, `player_name`) VALUES
(24, 'student@email.com', '$2y$13$fZQHVcIq0x3eldvNgSvXbuSGN2yqX5NFygYE6JGs3OarIcITdOA/.', 'Student', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) UNSIGNED NOT NULL,
  `player_id` int(11) UNSIGNED DEFAULT NULL,
  `story_skip` tinyint(1) DEFAULT 0,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `player_id`, `story_skip`) VALUES
(1, 24, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `player_id` (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`) ON DELETE CASCADE;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
