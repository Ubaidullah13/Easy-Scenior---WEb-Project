-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 18, 2022 at 05:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_scenior`
--
CREATE DATABASE IF NOT EXISTS `easy_scenior` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easy_scenior`;
-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `Heading` varchar(256) NOT NULL,
  `Paragraph` varchar(744) NOT NULL,
  `Image` text NOT NULL,
  PRIMARY KEY (`Heading`,`Paragraph`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Heading`, `Paragraph`, `Image`) VALUES
('Join Easy Scenior, upgrade your skills, and learn from experts', 'Lorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.', 'res/About\\ welcome\\ background.png'),
('Our Story', ' Lorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.Lorem Ipsum has been the industries standard dummy text ever.<br>\r\nLorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.<br>\r\nLorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries. ', ''),
('Top Instructors', 'Lorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.', 'res/About Top Instructor.svg'),
('Portable Program', 'Lorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.', 'res/About Portable Program.svg'),
('Improve Quickly', 'Lorem Ipsum has been the industries standard dummy text ever since unknown printer took galley type and scmbled make type specimen book. It has survived not only five centuries.', 'res/About Improve Quickly.svg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `titleImage` varchar(700) NOT NULL,
  `desc1` text NOT NULL,
  `img1` varchar(740) NOT NULL,
  `desc2` text NOT NULL,
  `img2` varchar(740) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogid`, `title`, `titleImage`, `desc1`, `img1`, `desc2`, `img2`, `likes`) VALUES
(1, 'Data Science and Machine Learning with Python ', 'res/Home Blog 1.png', '', '', '', '', 22),
(2, 'Strategies for a Successful Business', 'res/Home Blog 2.png', '', '', '', '', 100),
(3, 'Entry Test Tips and Tricks - Easy Hacks', 'res/Home Blog 3.png', '', '', '', '', 53);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_ID`, `cat_name`) VALUES
(1, 'Computer Science'),
(2, 'Electrical Engineering'),
(3, 'Software Engineering'),
(4, 'Business Analytics');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

DROP TABLE IF EXISTS `contact_details`;
CREATE TABLE IF NOT EXISTS `contact_details` (
  `phone_no` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`phone_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`phone_no`, `email`, `address`) VALUES
(516754329, 'info@easyscenior.com', 'Office # 02, Block I, NUST');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_ID` int(11) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `tutorname` int(11) NOT NULL,
  `coverpic` blob NOT NULL,
  PRIMARY KEY (`course_ID`),
  KEY `fk_courses` (`tutorname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_ratings`
--

DROP TABLE IF EXISTS `course_ratings`;
CREATE TABLE IF NOT EXISTS `course_ratings` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `ratings` double NOT NULL,
  `no_of_studs_enrolled` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust_review_to_tutor`
--

DROP TABLE IF EXISTS `cust_review_to_tutor`;
CREATE TABLE IF NOT EXISTS `cust_review_to_tutor` (
  `rvw_id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(20) NOT NULL,
  `tutor` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rvw_id`),
  KEY `stud_fk` (`student`),
  KEY `tutor_fk` (`tutor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `quest` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_feedback`
--

DROP TABLE IF EXISTS `general_feedback`;
CREATE TABLE IF NOT EXISTS `general_feedback` (
  `username` varchar(20) NOT NULL,
  `review` text NOT NULL,
  KEY `review_giver_fk` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `SubHeading` varchar(100) NOT NULL,
  `Heading` varchar(300) NOT NULL,
  `Paragraph` varchar(740) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`SubHeading`, `Heading`, `Paragraph`) VALUES
('EASY SCENE HAI', 'A learning experience like never before', 'Want help in university or need to prepare for an exam or entry test? Book sessions as per your time and availability, we make education easier, accessible and affordable!'),
('', 'Categories', 'Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus feugiat lacus vitae neque ornare, vitae libero!'),
('BECOME A TUTOR', 'Join With Easy Scenior as an Instructor', 'Join us to help others excel in their student life and earn some extra cash.');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `duration` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`duration`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `tutor` varchar(20) NOT NULL,
  `student` varchar(20) NOT NULL,
  `pckg` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  KEY `tutor_fk` (`tutor`),
  KEY `student_fk` (`student`),
  KEY `package_fk` (`pckg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutorusername` varchar(20) NOT NULL,
  `description` varchar(400) NOT NULL,
  `major` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  KEY `tutor_fk` (`tutorusername`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorratings`
--

DROP TABLE IF EXISTS `tutorratings`;
CREATE TABLE IF NOT EXISTS `tutorratings` (
  `tutorname` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `sessions_number` int(11) NOT NULL,
  KEY `t_ratingfk` (`tutorname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userpfp` blob,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_contactus`
--

DROP TABLE IF EXISTS `user_contactus`;
CREATE TABLE IF NOT EXISTS `user_contactus` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`name`,`subject`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contactus`
--

INSERT INTO `user_contactus` (`name`, `email`, `subject`, `message`) VALUES
('Shifa Imran', 'shifaimran309@gmail.com', 'jbfJK', 'kbgkjb'),
('Shifa Imran', 'shifaimran309@gmail.com', 'Time for session', 'bkbjbk'),
('Shifa Imran', 'shifaimran309@gmail.com', 'Time', 'bjwvfqhjfv'),
('Shifa Imran', 'shifaimran309@gmail.com', 'kwv ', 'kjv ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
