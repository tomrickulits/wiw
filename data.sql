-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 02:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `enroll_list`
--

CREATE TABLE `enroll_list` (
  `ENROLL_ID` int(10) NOT NULL,
  `OPEN_SUB_ID` int(10) NOT NULL,
  `ST_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll_list`
--

INSERT INTO `enroll_list` (`ENROLL_ID`, `OPEN_SUB_ID`, `ST_ID`) VALUES
(661, 661, 666),
(666, 666, 666);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `LES_ID` int(10) NOT NULL,
  `LES_TITLE` varchar(50) NOT NULL,
  `LES_CONTENT` longtext NOT NULL,
  `OPEN_SUB_ID` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`LES_ID`, `LES_TITLE`, `LES_CONTENT`, `OPEN_SUB_ID`) VALUES
(69, 'hahaha', 'asdasdasdasdasdasdasdasd', 666),
(96, 'BOOO', '123123123123123123\r\n123123123123123123\r\n123123123123123123123123123', 661);

-- --------------------------------------------------------

--
-- Table structure for table `open_subjects`
--

CREATE TABLE `open_subjects` (
  `OPEN_SUB_ID` int(10) NOT NULL,
  `SUB_ID` int(10) NOT NULL,
  `SEC_ID` int(10) NOT NULL,
  `OPEN_SUB_YEAR` int(10) NOT NULL,
  `T_ID` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_subjects`
--

INSERT INTO `open_subjects` (`OPEN_SUB_ID`, `SUB_ID`, `SEC_ID`, `OPEN_SUB_YEAR`, `T_ID`) VALUES
(661, 2, 6969, 2016, 54),
(666, 1, 6969, 2016, 54);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `QUIZ_ID` int(10) NOT NULL,
  `QUIZ_TITLE` varchar(123) NOT NULL,
  `SUB_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`QUIZ_ID`, `QUIZ_TITLE`, `SUB_ID`) VALUES
(1, 'Quiz 1', 1),
(2, 'Quiz 1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE `quiz_question` (
  `Q_QUEST_ID` int(10) NOT NULL,
  `QUESTION` varchar(5646) NOT NULL,
  `CHOICE0` varchar(5646) NOT NULL,
  `CHOICE1` varchar(5646) NOT NULL,
  `CHOICE2` varchar(5656) NOT NULL,
  `CHOICE3` varchar(5656) NOT NULL,
  `ANSWER` int(10) NOT NULL,
  `QUIZ_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`Q_QUEST_ID`, `QUESTION`, `CHOICE0`, `CHOICE1`, `CHOICE2`, `CHOICE3`, `ANSWER`, `QUIZ_ID`) VALUES
(1, '1+1', '1', '2', '3', '4', 1, 2),
(2, '2+2', '1', '2', '3', '4', 3, 2),
(3, '3+3', '2', '4', '6', '8', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SEC_ID` int(100) NOT NULL,
  `SEC_NAME` varchar(120) NOT NULL,
  `SEC_YEAR` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SEC_ID`, `SEC_NAME`, `SEC_YEAR`) VALUES
(6969, 'SAMPLESECT', 16);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ST_ID` int(10) NOT NULL,
  `ST_USER` varchar(30) NOT NULL,
  `ST_PASS` varchar(30) NOT NULL,
  `ST_LNAME` varchar(25) NOT NULL,
  `ST_FNAME` varchar(50) NOT NULL,
  `ST_MNAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ST_ID`, `ST_USER`, `ST_PASS`, `ST_LNAME`, `ST_FNAME`, `ST_MNAME`) VALUES
(666, 'student', 'student', 'Surname', 'FirstName', 'Middlename');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUB_ID` int(10) NOT NULL,
  `SUB_NAME` varchar(150) NOT NULL,
  `SUB_TEXT` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUB_ID`, `SUB_NAME`, `SUB_TEXT`) VALUES
(1, 'MATH', 'Math is 1+1+1+1'),
(2, 'ENGLISH', 'english is Abacda');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `T_ID` int(123) NOT NULL,
  `T_USER` varchar(123) NOT NULL,
  `T_PASS` varchar(103) NOT NULL,
  `T_LNAME` varchar(123) NOT NULL,
  `T_FNAME` varchar(456) NOT NULL,
  `T_MNAME` varchar(312) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`T_ID`, `T_USER`, `T_PASS`, `T_LNAME`, `T_FNAME`, `T_MNAME`) VALUES
(54, 'teach', 'teach', 'SurTeach', 'FirTeach', 'MidTeach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enroll_list`
--
ALTER TABLE `enroll_list`
  ADD PRIMARY KEY (`ENROLL_ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`LES_ID`);

--
-- Indexes for table `open_subjects`
--
ALTER TABLE `open_subjects`
  ADD PRIMARY KEY (`OPEN_SUB_ID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`QUIZ_ID`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`Q_QUEST_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SEC_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUB_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enroll_list`
--
ALTER TABLE `enroll_list`
  MODIFY `ENROLL_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `LES_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `open_subjects`
--
ALTER TABLE `open_subjects`
  MODIFY `OPEN_SUB_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `QUIZ_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `Q_QUEST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `SEC_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6970;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ST_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `T_ID` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
