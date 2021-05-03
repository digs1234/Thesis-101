-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 05:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `aid` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `course_id`, `subject_id`, `aid`, `sid`) VALUES
(2, 'BSM-CS 4A', 'REAL ANALYSIS', '1', 1),
(3, 'BSM-CS 4A', 'WEB-DEV', '1', 1),
(5, 'BSM-CS 4A', 'ACTUARIAL MATH', '1', 1),
(17, 'BSM-CS 4A', 'RIXAL', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE  `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `cys` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `cys`, `department`, `major`) VALUES
(1, 'BSM-CS 4A', 'College of Science', 'Applied Statistics'),
(2, 'BSM-CS 4A', 'College of Science', 'Computer Science'),
(3, 'BSM-CS 4A', 'College of Science', 'Business Application');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE  `department` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `incharge` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `incharge`, `title`, `department`) VALUES
(1, 'Dr. Thelma V. Pagtalunan', 'Dean', 'College of Science'),
(2, 'Prof. Luisa Tejada', 'Dean', 'School of Arts And Sciences'),
(3, 'hmmm ', 'Dean', 'College of Education');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `aid`, `class_id`, `fname`) VALUES
(18, 'uploads/2640_File_CHAPTER 2.docx', '2013-03-24 14:38:20', 'i dont know', 1, 4, 'chapter 2');


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE  `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`, `category`) VALUES
(1, 'Re-Ana 413', 'REAL ANALYSIS', 'Major'),
(2, 'Math 443', 'ACTURIAL MATH', 'Major'),
(3, 'Computer 413', 'WEB-DEV', 'Major'),
(4, 'Computer 423', 'NETWORKING', 'Major'),
(5, 'Thesis 443', 'THESIS II', 'Major');

-- --------------------------------------------------------

--
-- Table structure for table `sws`
--

CREATE TABLE  `sws` (
  `sws_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `cys` varchar(100) NOT NULL,
  `subject_id` varchar(100) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`sws_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `sws`
--

INSERT INTO `sws` (`sws_id`, `sid`, `aid`, `cys`, `subject_id`, `class_id`) VALUES
(1, 1, 1, 'BSM-CS 4A', 'NETWORKING', 1),
(2, 1, 1, 'BSM-CS 4A', 'WEB-DEV', 2),
(3, 1, 1, 'BSM-CS 4A', 'REAL ANALYSIS', 3),
(4, 1, 1, 'BSM-CS 4A', 'THESIS', 4),
(5, 2, 1, 'BSM-CS 4A', 'ACTUARIAL MATH', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE  `sy` (
  `sy_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(100) NOT NULL,
  PRIMARY KEY (`sy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`sy_id`, `sy`) VALUES
(1, '2020-2021'),
(2, '2021-2022'),
(3, '2022-2023');
-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE  `tbl_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `start` varchar(20) NOT NULL,
  `end` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'jk', '', ''),
(2, 'chaw', '', '');



-- --------------------------------------------------------

--
-- Table structure for table `teacher_student`
--

CREATE TABLE  `teacher_student` (
  `teacher_student_id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  PRIMARY KEY (`teacher_student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `teacher_student`
--

INSERT INTO `teacher_student` (`teacher_student_id`, `aid`, `sid`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE  `teacher_subject` (
  `teacher_subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  PRIMARY KEY (`teacher_subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`teacher_subject_id`, `subject_id`, `aid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
