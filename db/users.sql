-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 02:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `faname` varchar(11) NOT NULL,
  `laname` varchar(11) NOT NULL,
  `maname` varchar(11) NOT NULL,
  `aname` varchar(150) NOT NULL,
  `apass` varchar(150) NOT NULL,
  `amobile` bigint(20) NOT NULL,
  `aemail` varchar(150) NOT NULL,
  `agender` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL,
  `aaddr` varchar(150) NOT NULL,
  `registrationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `faname`, `laname`, `maname`, `aname`, `apass`, `amobile`, `aemail`, `agender`, `department`, `sid`, `aaddr`, `registrationdate`, `location`) VALUES
(1, 'Arcel', 'Dela Cruz', '', 'Admin', '12345', 9424335187, 'test@gmail.com', 'male', '', 0, 'malayo', '2021-05-03 02:03:25', ''),
(4, 'Kupido', 'Reyes', '', 'secret', '1234', 940290859, 'secret@me', 'm', '', 0, 'san simon', '2021-05-03 02:03:35', ''),
(5, 'Goku', 'San', '', 'spiderman', '1234', 940290859, 'redajj@medipol.edu.tr', 'm', '', 0, 'Pungo', '2021-05-03 02:03:47', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `aid` varchar(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `subject_id`, `aid`, `sid`) VALUES
(5, 'BSM-CS 4A', 'ACTUARIAL MATH', '1', 1),
(17, 'BSM-CS 4A', 'RIZAL', '1', 0),
(18, 'BSM-CS 4A', 'THESIS II', '1', 0),
(21, 'BSM-CS 4A', 'WEB-DEV', '15', 0),
(22, 'BSM-CS 4A', 'THESIS II', '15', 0),
(24, 'BSM-CS 4A', 'NETWORKING', '1', 0),
(26, 'BSM-CS 4A', 'ACTUARIAL MATH', '16', 0),
(27, 'BSM-CS 4A', 'REAL ANALYSIS', '16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `cys` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `aid`, `cys`, `department`, `major`) VALUES
(1, 16, 'BSM-CS 4AS', 'College of Science', 'Applied Statistics'),
(2, 1, 'BSM-CS 3A', 'College of Science', 'Computer Science'),
(3, 16, 'BSM-CS 4A', 'College of Science', 'Business Application'),
(4, 1, 'BSM-CS 3A', 'College of Science', ''),
(5, 1, 'BSM CS 6A', 'College of Science', ''),
(7, 0, 'BSM CS 2A', 'College of Science', 'Secret');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `incharge` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `incharge`, `title`, `department`) VALUES
(1, 'Dr.Thelma V. Pagtalunan', 'Dean', 'College of Science'),
(2, 'Dr. ', 'Dean', 'College of Industrial Technology'),
(3, 'Dr.Thelma V. Pagtalunan', 'Dean', 'College of Science'),
(4, 'Dr. ', 'Dean', 'College of Industrial Technology');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(100) NOT NULL,
  `fdesc` varchar(20) NOT NULL,
  `aid` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `fsname` varchar(11) NOT NULL,
  `lsname` varchar(11) NOT NULL,
  `msname` varchar(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `spass` varchar(50) NOT NULL,
  `smobile` bigint(20) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sgender` varchar(2) NOT NULL,
  `saddr` varchar(20) NOT NULL,
  `image_type` varchar(1000) NOT NULL,
  `img_blob` blob NOT NULL,
  `cys` varchar(10) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fsname`, `lsname`, `msname`, `sname`, `spass`, `smobile`, `semail`, `sgender`, `saddr`, `image_type`, `img_blob`, `cys`, `subject_id`, `aid`, `registration_date`) VALUES
(2, 'Rogelio', 'Lescano', 'Secret', 'batman', '1234', 940290859, 'secret@me', 'm', 'san simon', '', '', '', 0, 0, '2021-05-03 02:00:35'),
(8, 'Ricolou', 'Villagracia', '', 'Ricolou Villagracia', '1234', 98783743, 'rics@gmail.com', 'm', 'pungo', '', '', '', 0, 0, '2021-05-03 02:01:07'),
(11, 'Paul Albert', 'Dignum', 'Gomez', 'digs', '1234', 918728328, 'hey@me', 'm', 'malayo', 'uploads/digs - Copy.jpg', '', '', 0, 0, '2021-05-03 02:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`, `category`) VALUES
(4, 'Real-Ana413', 'REAL ANALYSIS', 'Major'),
(5, 'Math443', 'ACTUARIAL MATH', 'Major'),
(7, 'Computer414', 'WEB-DEV', ''),
(9, 'Computer413', 'NETWORKING', 'Major'),
(15, 'Research443', 'Thesis ll', 'Major'),
(16, 'Research', 'Thesis ll', 'Major');

-- --------------------------------------------------------

--
-- Table structure for table `sws`
--

CREATE TABLE `sws` (
  `sws_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `cys` varchar(20) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sws`
--

INSERT INTO `sws` (`sws_id`, `sid`, `aid`, `cys`, `subject_id`, `class_id`) VALUES
(1, 1, 1, 'BSM-CS 4A', 'NETWORKING', 1),
(2, 11, 1, 'BSM-CS 4A', 'NETWORKING', 1),
(4, 1, 1, 'BSM-CS 4A', 'REAL ANALYSIS', 2),
(5, 1, 1, 'BSM-CS 4A', 'REAL ANALYSIS', 2),
(6, 11, 1, 'BSM-CS 4A', 'REAL ANALYSIS', 2),
(7, 11, 1, 'BSM-CS 4A', 'REAL ANALYSIS', 2),
(64, 0, 1, 'BSM-CS 4A', 'WEB-DEV', 24),
(76, 3, 1, 'BSM-CS 4A', 'WEB-DEV', 3),
(77, 18, 1, 'BSM-CS 4A', 'WEB-DEV', 18),
(78, 3, 1, 'BSM-CS 4A', 'WEB-DEV', 3),
(79, 18, 1, 'BSM-CS 4A', 'WEB-DEV', 18),
(80, 18, 1, 'BSM-CS 4A', 'WEB-DEV', 18),
(81, 5, 1, 'BSM-CS 4A', '<br />\r\n<b>Notice</b', 5),
(82, 5, 1, 'BSM-CS 4A', 'ACTUARIAL MATH', 5),
(83, 5, 1, 'BSM-CS 4A', 'ACTUARIAL MATH', 5),
(84, 24, 1, 'BSM-CS 4A', 'ACTUARIAL MATH', 24);

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE `sy` (
  `sy_id` int(11) NOT NULL,
  `sy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(1, '2020-2021'),
(2, '2021-2022'),
(3, '2022-2023'),
(4, '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_student`
--

CREATE TABLE `teacher_student` (
  `teacher_student_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_student`
--

INSERT INTO `teacher_student` (`teacher_student_id`, `aid`, `sid`) VALUES
(3, 3, 3),
(4, 4, 4),
(13, 16, 2),
(14, 1, 8),
(20, 1, 11),
(21, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `teacher_subject_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_subject_id`, `aid`, `subject_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 0),
(7, 1, 7),
(8, 15, 9),
(9, 15, 3),
(10, 15, 2),
(11, 15, 4),
(12, 1, 9),
(13, 1, 11),
(14, 1, 12),
(15, 1, 13),
(16, 16, 7),
(17, 16, 4),
(18, 1, 14),
(19, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aemail` (`aemail`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sws`
--
ALTER TABLE `sws`
  ADD PRIMARY KEY (`sws_id`);

--
-- Indexes for table `sy`
--
ALTER TABLE `sy`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_student`
--
ALTER TABLE `teacher_student`
  ADD PRIMARY KEY (`teacher_student_id`);

--
-- Indexes for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD PRIMARY KEY (`teacher_subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sws`
--
ALTER TABLE `sws`
  MODIFY `sws_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `sy`
--
ALTER TABLE `sy`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_student`
--
ALTER TABLE `teacher_student`
  MODIFY `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teacher_subject`
--
ALTER TABLE `teacher_subject`
  MODIFY `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
s