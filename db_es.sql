-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 02:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_es`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `subid` varchar(11) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `subid`, `date`, `message`, `qid`) VALUES
(1, 'bishwasshrestha59.bs@gmail.com', 'i_imath', '2017-07-31 09:37:37', 'Chapter 1: Derivatives and their Applications', 1),
(2, 'nn@gmail.com', 'i_imath', '2017-07-31 09:51:56', 'Give more time to chapter 1,it will help you for next chapters', 1),
(3, 'bishwasshrestha59.bs@gmail.com', 'i_imath', '2017-08-08 19:23:48', 'B.E maths is A bit core', 2),
(4, 'bishwasshrestha59.bs@gmail.com', 'i_imath', '2017-08-09 09:51:15', 'OOAD', 4);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `uid` varchar(55) NOT NULL,
  `subid` varchar(11) NOT NULL,
  `question_info` varchar(999) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `uid`, `subid`, `question_info`, `date`) VALUES
(1, 'N@G.COM', 'i_imath', 'Which chapter should be focused most?', '2017-07-31 09:32:57'),
(2, 'N@G.COM', 'i_imath', '+2 Maths and B.E maths has what differences?', '2017-07-31 11:30:52'),
(3, 'anishmalla20@gmail.com', 'i_imath', 'What is derivative??', '2017-08-09 09:23:08'),
(4, 'bishwasshrestha59.bs@gmail.com', 'i_imath', 'What is the most imp sub of this sem?', '2017-08-09 09:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `notice_id` int(11) NOT NULL,
  `notice_info` varchar(255) NOT NULL,
  `yc_id` int(11) NOT NULL,
  `student_fac` varchar(25) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`notice_id`, `notice_info`, `yc_id`, `student_fac`, `year`, `date`) VALUES
(1, 'I am YC', 2, 'bct', 4, '0000-00-00 00:00:00'),
(2, 'Today your Final Minor Pre Defence Will occur at sharp 8:00AM. All the best!', 5, 'bct', 3, '0000-00-00 00:00:00'),
(4, 'I am your third year YC.', 5, 'bct', 3, '0000-00-00 00:00:00'),
(5, 'hmmm...', 5, 'bct', 3, '2017-08-08 15:33:41'),
(6, 'I am you bex 2nd year yc', 7, 'bex', 2, '2017-08-08 15:52:08'),
(7, 'Hello 3rd year  student.', 8, 'bce', 3, '2017-08-08 15:55:21'),
(8, 'Today is presentation day.Submit all your reports and work until now till today 8 am...', 5, 'bct', 3, '2017-08-09 04:04:45'),
(9, 'Lets start.', 5, 'bct', 3, '2017-08-09 06:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `std_id` int(11) NOT NULL,
  `std_fullname` varchar(50) NOT NULL,
  `std_rollNo` int(6) NOT NULL,
  `std_birthday` int(10) NOT NULL,
  `std_gender` varchar(15) NOT NULL,
  `std_faculty` varchar(6) NOT NULL,
  `std_batch` int(6) NOT NULL,
  `std_year` int(5) NOT NULL,
  `std_section` varchar(2) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_pwd` varchar(50) NOT NULL,
  `std_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='student''s database';

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`std_id`, `std_fullname`, `std_rollNo`, `std_birthday`, `std_gender`, `std_faculty`, `std_batch`, `std_year`, `std_section`, `std_email`, `std_pwd`, `std_comment`) VALUES
(1, 'bishwas kumar shrestha', 71022, 1995, 'male', 'BCT', 2071, 3, 'A', 'bishwasshrestha59.bs@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(2, 'bhagat', 71018, 2017, 'male', 'BCT', 2071, 3, 'A', 'bhagattamu@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(3, 'anish malla', 7, 1996, 'male', 'bct', 2071, 3, 'A', 'anishmalla7@outlook.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(4, 'parash gaire', 22, 1996, 'male', 'bce', 2071, 3, 'B', 'parash.gaire77@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(5, 'bidhya shrestha', 12, 1994, 'female', 'arc', 2070, 4, 'A', 'bidhyashrestha1@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(6, 'byom', 24, 1995, 'male', 'bct', 2073, 1, '', 'byom@yahoo.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(7, 'nikesh', 41, 1996, 'male', 'bct', 2071, 3, 'a', 'nikeshvtrai10@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(8, 'Birat Sharma', 20, 1996, 'male', 'bex', 2072, 2, 'b', 'birat@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', ''),
(9, 'Anish Malla', 7, 1996, 'male', 'bct', 2071, 3, 'a', 'anishmalla20@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yc`
--

CREATE TABLE `tbl_yc` (
  `yc_id` int(11) NOT NULL,
  `yc_fullname` varchar(50) NOT NULL,
  `yc_birthday` int(15) NOT NULL,
  `yc_gender` varchar(15) NOT NULL,
  `yc_faculty` varchar(15) NOT NULL,
  `yc_year` int(15) NOT NULL,
  `yc_email` varchar(50) NOT NULL,
  `yc_pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='YC''s database';

--
-- Dumping data for table `tbl_yc`
--

INSERT INTO `tbl_yc` (`yc_id`, `yc_fullname`, `yc_birthday`, `yc_gender`, `yc_faculty`, `yc_year`, `yc_email`, `yc_pwd`) VALUES
(1, 'yc1', 1985, 'male', 'bct', 3, 'yc1@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23'),
(2, 'yc2', 2017, 'female', 'bct', 4, 'yc2@yahoo.com', 'd529e941509eb9e9b9cfaeae1fe7ca23'),
(3, 'bhagat', 1993, 'male', 'bct', 1, 'praful@g.com', '4786f3282f04de5b5c7317c490c6d922'),
(4, 'bhagat', 1998, 'male', 'bct', 2, 'bhagat@gmail.com', '10df3d67626099df882920ba6552f16d'),
(5, 'Nabin Neupane', 1989, 'male', 'bct', 3, 'nn@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23'),
(6, 'Sudarsan Paudel', 1981, 'male', 'bct', 2, 'sp@outlook.com', 'd529e941509eb9e9b9cfaeae1fe7ca23'),
(7, 'bexYC', 1986, 'male', 'bex', 2, 'bexyc@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23'),
(8, 'RK', 1981, 'male', 'bce', 3, 'rk@gmail.com', 'd529e941509eb9e9b9cfaeae1fe7ca23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `qid` (`qid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`notice_id`),
  ADD KEY `yc_id` (`yc_id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `tbl_yc`
--
ALTER TABLE `tbl_yc`
  ADD PRIMARY KEY (`yc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_yc`
--
ALTER TABLE `tbl_yc`
  MODIFY `yc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
