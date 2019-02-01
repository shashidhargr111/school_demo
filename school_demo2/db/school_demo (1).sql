-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2019 at 12:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_demo`
--
CREATE DATABASE IF NOT EXISTS `school_demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_demo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(50) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'shashi@gmail.com', 'Shashi'),
(2, 'test@test.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(55) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) NOT NULL,
  `class_section` varchar(225) NOT NULL,
  `class_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_id` (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_section`, `class_created_date`) VALUES
(1, 'class-1', '', '2019-01-29 11:43:28'),
(2, 'class-2', '', '2019-01-30 05:45:41'),
(8, 'class-3', 'A', '2019-01-30 10:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `cls_assign_sub`
--

CREATE TABLE IF NOT EXISTS `cls_assign_sub` (
  `cls_assign_sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `cls_assign_sub_class_id` int(50) NOT NULL,
  `cls_assign_sub_subject_id` int(50) NOT NULL,
  `cls_assign_sub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cls_assign_sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(50) NOT NULL AUTO_INCREMENT,
  `exam_name` varchar(255) NOT NULL,
  `exam_date` date NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `exam_date`) VALUES
(1, 'exams', '2019-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `grade_id` int(55) NOT NULL AUTO_INCREMENT,
  `grade_letter` varchar(255) NOT NULL,
  `grade_max_marks` varchar(255) NOT NULL,
  `grade_min_marks` varchar(255) NOT NULL,
  `grade_class_id` int(55) NOT NULL,
  `grade_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `grade_letter`, `grade_max_marks`, `grade_min_marks`, `grade_class_id`, `grade_create_date`) VALUES
(1, 'A+', '50', '45', 1, '2019-01-30 05:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `exam_marks_id` int(55) NOT NULL AUTO_INCREMENT,
  `exam_marks_class_id` int(55) NOT NULL,
  `exam_marks_stud_id` int(55) NOT NULL,
  `sa1` varchar(255) NOT NULL,
  `sb2` varchar(200) NOT NULL,
  `sb3` varchar(200) NOT NULL,
  `sb4` varchar(200) NOT NULL,
  `sb5` varchar(200) NOT NULL,
  `sb6` varchar(200) NOT NULL,
  `sb7` varchar(200) NOT NULL,
  PRIMARY KEY (`exam_marks_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`exam_marks_id`, `exam_marks_class_id`, `exam_marks_stud_id`, `sa1`, `sb2`, `sb3`, `sb4`, `sb5`, `sb6`, `sb7`) VALUES
(1, 1, 1, '55', '55', '55', '57', '99', '74', '66');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(55) NOT NULL AUTO_INCREMENT,
  `student_class_id` int(50) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `student_dob` date NOT NULL,
  `student_ph` varchar(255) NOT NULL,
  `student_f_name` varchar(255) NOT NULL,
  `student_m_name` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_religion` varchar(255) NOT NULL,
  `student_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_class_id`, `student_name`, `student_email`, `student_pass`, `student_dob`, `student_ph`, `student_f_name`, `student_m_name`, `student_gender`, `student_address`, `student_religion`, `student_created_date`) VALUES
(1, 0, 'shashidhar', 'shashidhar@gmail.com', 'shashi', '0000-00-00', '7777777777', 'rammm', 'sfasfdg', 'male', 'asjdhfkjh  asdfjk', 'skdfjlksdj', '0000-00-00 00:00:00'),
(2, 0, 'ssss', 'sss@gmail.com', '1234567890', '2010-03-04', 'male', '', '', 'sss', '', '', '2019-01-30 12:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(50) NOT NULL AUTO_INCREMENT,
  `subject_class_id` int(50) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_class_id`, `subject_name`) VALUES
(1, 0, 'Big data'),
(2, 0, 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(50) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_pass` varchar(255) NOT NULL,
  `teacher_dob` date NOT NULL,
  `teacher_ph` varchar(20) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_pass`, `teacher_dob`, `teacher_ph`) VALUES
(1, 'xyz', 'xyz@gmail.com', 'xyz', '1990-05-01', '777777777');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(50) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(255) NOT NULL,
  `test_date` date NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`, `test_date`) VALUES
(1, '1st test', '2019-01-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
