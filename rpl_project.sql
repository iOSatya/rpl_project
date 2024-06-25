-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 03:28 PM
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
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignmentId` int(10) UNSIGNED NOT NULL,
  `teacherId` int(10) UNSIGNED DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answerA` varchar(255) DEFAULT NULL,
  `answerB` varchar(255) DEFAULT NULL,
  `answerC` varchar(255) DEFAULT NULL,
  `answerD` varchar(255) DEFAULT NULL,
  `correctAnswer` varchar(1) NOT NULL,
  `assignmentLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignmentId`, `teacherId`, `question`, `answerA`, `answerB`, `answerC`, `answerD`, `correctAnswer`, `assignmentLevel`) VALUES
(1, 2, 'This is a level 1 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 1),
(3, 2, 'This is a level 2 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 2),
(5, 2, 'This is a level 3 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 3),
(6, 2, 'This is a level 4 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 4),
(7, 2, 'This is a level 5 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 5),
(8, 2, 'This is a level 6 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 6),
(9, 2, 'This is a level 7 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 7),
(10, 2, 'This is a level 8 assignment, with A as the answer', 'This is answer A', 'This is answer B', 'This is answer C', 'This is answer D', 'A', 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED DEFAULT NULL,
  `mapLevel` int(11) NOT NULL DEFAULT 1,
  `highScore` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `userId`, `mapLevel`, `highScore`) VALUES
(2, 7, 8, 440),
(3, 8, 8, 80);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherId` int(10) UNSIGNED NOT NULL,
  `userId` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherId`, `userId`) VALUES
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `userFullName` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `userFullName`, `userPassword`, `userStatus`) VALUES
(5, 'teacher', 'teacher', 'teacher', 'teacher'),
(7, 'student', 'I am a Student', 'student', 'student'),
(8, 'student2', 'student2', 'student2', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignmentId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignmentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`teacherId`) REFERENCES `teachers` (`teacherId`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
