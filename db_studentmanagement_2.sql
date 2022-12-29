-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 09:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_studentmanagement_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(30) NOT NULL,
  `COURSE_DESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_DESC`) VALUES
(1, 'Computer Science', 'Bachelor degree of Computer science '),
(2, 'Chemistry', 'Bachelor degree of Chemistry science'),
(3, 'Biology', 'Bachelor degree of Biology Science'),
(4, 'Physics', 'Bachelor degree of Physics science'),
(5, 'Mathematics', 'Bachelor degree of Mathematics science\n');

-- --------------------------------------------------------

--
-- Table structure for table `pst-graduate-std`
--

CREATE TABLE `pst-graduate-std` (
  `Id` int(10) UNSIGNED NOT NULL,
  `FName` varchar(32) NOT NULL,
  `MName` varchar(32) NOT NULL,
  `LName` varchar(32) NOT NULL,
  `Surname` varchar(32) NOT NULL,
  `ContactNo` int(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `ProgramType` varchar(32) NOT NULL,
  `Course` varchar(32) NOT NULL,
  `Date_Start` date NOT NULL,
  `Final_Deadline` date NOT NULL,
  `Note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pstgraduatestd`
--

CREATE TABLE `pstgraduatestd` (
  `Id` int(10) UNSIGNED NOT NULL,
  `FName` varchar(32) NOT NULL,
  `MName` varchar(32) NOT NULL,
  `LName` varchar(32) NOT NULL,
  `Surname` varchar(32) NOT NULL,
  `ContactNo` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `ProgramType` varchar(32) NOT NULL,
  `Course` varchar(32) NOT NULL,
  `level` varchar(32) NOT NULL,
  `Date_Start` date NOT NULL DEFAULT current_timestamp(),
  `Final_Deadline` date DEFAULT current_timestamp(),
  `extend1` date DEFAULT NULL,
  `extend2` date DEFAULT NULL,
  `Note` varchar(200) NOT NULL,
  `Author` varchar(90) DEFAULT NULL,
  `Admin Notes` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pstgraduatestd`
--

INSERT INTO `pstgraduatestd` (`Id`, `FName`, `MName`, `LName`, `Surname`, `ContactNo`, `Email`, `ProgramType`, `Course`, `level`, `Date_Start`, `Final_Deadline`, `extend1`, `extend2`, `Note`, `Author`, `Admin Notes`) VALUES
(1, 'Hiba', 'A.', 'Dawood', 'Ithawi', '770000000', 'Hi@gmail.com', 'MSC', 'Computer Science', '', '2022-12-11', '2025-05-11', '2022-12-28', '2022-12-28', 'Trial data ', NULL, NULL),
(2, 'Douaa', 'A.', 'Dawood', 'Ithawi', '2147483647', 'do@gmail.com', 'MSC', 'Biology', '', '2012-12-12', '2020-12-12', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(3, 'Ammar', 'A.', 'Dawood', 'Ithawi', '2147483647', 'am@gmail.com', 'MSC', 'Biology', '', '2022-12-23', '2022-12-23', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(4, 'Moheeb', 'T.', '??', '??', '2147483647', 'mo@gmail.com', 'MSC', 'Physics', '', '2022-12-23', '2022-12-23', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(6, 'scientific affairs', 'A.', 'M', 'M', '2147483647', 'sc@gmail.com', 'PHD', 'Math', '', '2012-12-12', '2014-12-12', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(7, 'Hussien', 'L.', 'L.', '????', '2147483647', 'Hu@gmail.com', 'PHD', 'Physics', '', '1010-01-01', '1010-01-01', '2022-12-28', '2022-12-28', 'trial data', 'Dean', NULL),
(9, 'check contact problem', 'A.', '??', '??', '77', '??@gmail.com', 'PHD', 'Math', '', '1955-05-05', '1955-05-06', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(10, 'o', 'o', 'o', 'o', '2147483647', 'oooo@gmail.com', 'MSC', 'Math', '', '2022-12-26', '2022-12-26', '2022-12-28', '2022-12-28', '', NULL, NULL),
(11, 'Author edit', '??', '??', '??', '770000', 'A@gmail.com', 'Select', 'Select', '', '2022-12-26', '2022-12-26', '2022-12-28', '2022-12-28', '', NULL, NULL),
(12, 'error', 'A.', 'L.', '??', '77000000', 'UOB13092', 'PHD', 'Chemistry', '', '2021-08-21', '2021-08-21', '2022-12-28', '2022-12-28', 'trial data', NULL, NULL),
(13, 'error 2', '??', '??', '??', '2147483647', 'A@gmail.com', 'MSC', 'Chemistry', '', '2003-06-21', '2021-08-19', '2022-12-28', '2022-12-28', 'trial data', 'Dean', NULL),
(14, 'scientific affairs 2', '==', '==', '==', '2147483647', 'sc@gmail.com', 'MSC', 'Math', '', '2022-12-26', '2022-12-26', '2022-12-28', '2022-12-28', 'trial data', 'scientific affairs ', NULL),
(15, 'Bio', 'Bio', 'bio', 'bio', '2147483647', 'bio@gmail.com', 'MSC', 'Biology', '', '1992-12-12', '1999-12-12', '2022-12-28', '2022-12-28', 'bio trial data', 'Biology dep', NULL),
(16, 'm', 'm', 'm', 'm', '2147483647', 'M@gmai.com', 'MSC', 'Math', '', '2022-12-28', '2022-12-28', '2022-12-28', '2022-12-28', 'trial data', 'scientific affairs ', NULL),
(17, 'M2', 'M2', 'M2', 'M2', '2147483647', 'eng.lilil92@gmail.com', 'MSC', 'Chemistry', '', '1998-12-12', '2022-12-12', '2022-12-28', '2022-12-28', 'trial data', 'scientific affairs ', NULL),
(18, 'varchar contact', 'm', 'm', 'm', '2147483647', 'var@gmail.com', 'MSC', 'Physics', '', '1998-12-12', '1998-12-12', '2022-12-28', '2022-12-28', 'trial data', 'scientific affairs ', NULL),
(19, 'int64 contact', 'm', 'm', 'm', '2147483647', 'integer@gmail.com', 'MSC', 'Math', '', '2022-12-28', '2023-01-31', '2022-12-28', '2022-12-28', 'trial data', 'scientific affairs ', NULL),
(20, 'physics', 'physics', 'ph', 'ph', '2147483647', 'ph@gmail.com', 'PHD', 'Physics', '', '1999-10-10', '2001-10-10', NULL, NULL, 'ph trial data', 'Physics dep', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Id_std` int(11) NOT NULL,
  `FName` varchar(32) NOT NULL,
  `MName` varchar(32) NOT NULL,
  `LName` varchar(32) NOT NULL,
  `Surname` varchar(32) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `CivilS` varchar(20) NOT NULL,
  `POB` varchar(32) NOT NULL,
  `DOB` date NOT NULL,
  `Nationality` varchar(32) NOT NULL,
  `Religion` varchar(32) NOT NULL,
  `ContactNo` int(20) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `COURSE_NAME` varchar(32) NOT NULL,
  `Course_type` varchar(20) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `YearsOfStudy` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `AUTHOR` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`ANNOUNCEMENTID`, `ANNOUNCEMENT_TEXT`, `ANNOUNCEMENT_WHAT`, `DATEPOSTED`, `AUTHOR`) VALUES
(2022, 'This is Haboooooosh', 'home sweet home is the best place ever', '2022-12-26 20:53:01', 'admin'),
(20220010, 'helloooooo', 'helllllllo woooooooooorld', '2022-07-25 02:33:57', 'admin'),
(20220013, 'mmm', 'hhhnmb hvjh', '2022-12-12 08:11:42', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL,
  `autocode` varchar(255) NOT NULL,
  `autoname` varchar(255) NOT NULL,
  `appendchar` varchar(255) NOT NULL,
  `autostart` varchar(30) NOT NULL,
  `autoend` int(11) NOT NULL,
  `incrementvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE `tbllevel` (
  `LEVELID` int(11) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `SECTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`LEVELID`, `YEARLEVEL`, `SECTION`) VALUES
(3, 'First Year', ''),
(4, 'Second Year', ''),
(5, 'Third Year', ''),
(6, 'Fourth Year', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1, '2016-09-22 21:46:01', 'Administrator', 'Logged in'),
(2, 100000022, '2016-09-22 21:46:29', 'Student', 'Logged out'),
(3, 100000015, '2016-09-23 05:00:38', 'Student', 'Logged in'),
(4, 100000015, '2016-09-23 05:00:45', 'Student', 'Logged out'),
(5, 100000025, '2016-09-23 05:02:31', 'Student', 'Logged in'),
(6, 100000025, '2016-09-23 05:02:55', 'Student', 'Logged out'),
(7, 100000025, '2016-09-23 05:03:53', 'Student', 'Logged in'),
(8, 100000025, '2016-09-23 05:11:40', 'Student', 'Logged out'),
(9, 100000025, '2016-09-24 09:32:59', 'Student', 'Logged out'),
(10, 1, '2016-09-24 09:46:06', 'Administrator', 'Logged in'),
(11, 1, '2016-09-24 09:53:17', 'Administrator', 'Logged out'),
(12, 1, '2016-09-24 09:54:45', 'Administrator', 'Logged in'),
(13, 100000027, '2016-09-24 15:30:32', 'Student', 'Logged out'),
(14, 100000015, '2016-09-27 09:34:11', 'Student', 'Logged in'),
(15, 1, '2016-09-27 10:59:58', 'Administrator', 'Logged in'),
(16, 100000015, '2016-09-27 11:00:42', 'Student', 'Logged out'),
(17, 100000029, '2016-09-27 17:34:11', 'Student', 'Logged out'),
(18, 100000015, '0000-00-00 00:00:00', 'Student', 'Logged in'),
(19, 100000015, '2016-09-27 17:37:13', 'Student', 'Logged out'),
(20, 100000029, '2016-09-27 18:27:40', 'Student', 'Logged out'),
(21, 100000015, '2016-09-27 18:27:56', 'Student', 'Logged in'),
(22, 100000015, '2016-09-27 18:29:20', 'Student', 'Logged out'),
(23, 100000030, '2016-09-27 22:49:02', 'Student', 'Logged out'),
(24, 100000015, '2016-09-27 22:50:10', 'Student', 'Logged in'),
(25, 100000015, '2016-09-28 01:47:07', 'Student', 'Logged out'),
(26, 100000033, '2016-09-28 04:43:26', 'Student', 'Logged out'),
(27, 1, '2016-10-01 04:07:48', 'Administrator', 'Logged in'),
(28, 100000056, '2016-10-01 09:22:17', 'Student', 'Logged out'),
(29, 100000056, '2016-10-01 09:22:51', 'Student', 'Logged in'),
(30, 100000056, '2016-10-01 09:23:30', 'Student', 'Logged out'),
(31, 100000056, '2016-10-01 12:52:40', 'Student', 'Logged out'),
(32, 100000057, '2016-10-01 15:28:47', 'Student', 'Logged out'),
(33, 100000058, '2016-10-01 15:44:01', 'Student', 'Logged out'),
(34, 100000057, '2016-10-01 15:44:11', 'Student', 'Logged in'),
(35, 100000057, '2016-10-01 16:38:34', 'Student', 'Logged out'),
(36, 100000061, '2016-10-01 16:50:27', 'Student', 'Logged out'),
(37, 100000061, '2016-10-01 18:08:05', 'Student', 'Logged out'),
(38, 1, '2016-10-02 01:12:39', 'Administrator', 'Logged in'),
(39, 100000067, '2016-10-02 01:58:35', 'Student', 'Logged out'),
(40, 100000068, '2016-10-02 02:16:08', 'Student', 'Logged out'),
(41, 100000069, '2016-10-02 02:20:24', 'Student', 'Logged out'),
(42, 100000071, '2016-10-02 09:16:51', 'Student', 'Logged out'),
(43, 1, '2018-11-27 07:03:09', 'Administrator', 'Logged in'),
(44, 1, '2018-11-27 10:39:57', 'Administrator', 'Logged out'),
(45, 1, '2018-11-27 10:42:19', 'Administrator', 'Logged in'),
(46, 1, '2018-11-27 10:44:25', 'Administrator', 'Logged in'),
(47, 1, '2018-11-27 10:49:41', 'Administrator', 'Logged out'),
(48, 1, '2018-11-27 11:03:31', 'Administrator', 'Logged in'),
(49, 1, '2018-11-27 12:50:29', 'Administrator', 'Logged in'),
(50, 1, '2018-11-28 04:51:58', 'Administrator', 'Logged in'),
(51, 1, '2018-11-28 20:16:18', 'Administrator', 'Logged in'),
(52, 100000074, '2018-11-28 20:16:53', 'Student', 'Logged in'),
(53, 1, '2018-11-28 21:06:53', 'Administrator', 'Logged out'),
(54, 1, '2018-11-28 21:07:26', 'Administrator', 'Logged in'),
(55, 100000074, '2018-11-28 23:08:35', 'Student', 'Logged out'),
(56, 100000074, '2018-11-28 23:10:44', 'Student', 'Logged in'),
(57, 100000074, '2018-11-28 23:24:34', 'Student', 'Logged out'),
(58, 1, '2018-11-29 09:57:42', 'Administrator', 'Logged in'),
(59, 100000074, '2018-11-29 09:58:12', 'Student', 'Logged in'),
(60, 1, '2018-11-30 12:11:25', 'Administrator', 'Logged in'),
(61, 1, '2018-11-30 13:32:17', 'Administrator', 'Logged in'),
(62, 1, '2018-11-30 14:25:42', 'Administrator', 'Logged in'),
(63, 1, '2018-11-30 20:43:10', 'Administrator', 'Logged in'),
(64, 1, '2018-12-01 03:20:44', 'Administrator', 'Logged out'),
(65, 1, '2018-12-01 03:21:10', 'Administrator', 'Logged in'),
(66, 1, '2018-12-01 03:21:21', 'Administrator', 'Logged out'),
(67, 1, '2018-12-01 03:29:17', 'Administrator', 'Logged in'),
(68, 1, '2018-12-01 03:34:33', 'Administrator', 'Logged out'),
(69, 11, '2018-12-01 04:47:26', 'Officer', 'Logged out'),
(70, 1, '2018-12-01 04:47:33', 'Administrator', 'Logged in'),
(71, 1, '2018-12-01 04:47:47', 'Administrator', 'Logged out'),
(72, 12, '2018-12-01 07:13:58', 'Officer', 'Logged out'),
(73, 1, '2018-12-01 07:14:10', 'Administrator', 'Logged in'),
(74, 1, '2018-12-01 07:14:35', 'Administrator', 'Logged out'),
(75, 1, '2018-12-01 07:14:45', 'Administrator', 'Logged in'),
(76, 1, '2018-12-02 21:28:41', 'Administrator', 'Logged out'),
(77, 12, '2018-12-02 21:41:34', 'Officer', 'Logged out'),
(78, 1, '2018-12-02 21:41:44', 'Administrator', 'Logged in'),
(79, 1, '2018-12-02 21:42:33', 'Administrator', 'Logged out'),
(80, 13, '2018-12-02 21:42:41', 'Instructor', 'Logged in'),
(81, 13, '2018-12-02 21:50:23', 'Instructor', 'Logged out'),
(82, 13, '2018-12-02 21:52:23', 'Instructor', 'Logged in'),
(83, 13, '2018-12-02 21:55:43', 'Instructor', 'Logged out'),
(84, 14, '2018-12-02 22:17:01', 'Officer', 'Logged out'),
(85, 1, '2018-12-02 22:17:09', 'Administrator', 'Logged in'),
(86, 1, '2018-12-02 23:50:40', 'Administrator', 'Logged out'),
(87, 1, '2018-12-03 00:02:22', 'Administrator', 'Logged in'),
(88, 1, '2018-12-03 00:03:28', 'Administrator', 'Logged out'),
(89, 15, '2018-12-03 00:03:36', 'Instructor', 'Logged in'),
(90, 15, '2018-12-03 00:05:17', 'Instructor', 'Logged out'),
(91, 15, '2018-12-03 00:05:31', 'Instructor', 'Logged in'),
(92, 15, '2018-12-03 00:07:13', 'Instructor', 'Logged out'),
(93, 15, '2018-12-03 00:07:36', 'Instructor', 'Logged in'),
(94, 15, '2018-12-03 00:09:45', 'Instructor', 'Logged out'),
(95, 15, '2018-12-03 00:10:10', 'Instructor', 'Logged in'),
(96, 15, '2018-12-03 00:12:13', 'Instructor', 'Logged out'),
(97, 15, '2018-12-03 00:12:24', 'Instructor', 'Logged in'),
(98, 15, '2018-12-03 00:16:41', 'Instructor', 'Logged out'),
(99, 1, '2018-12-03 00:16:56', 'Administrator', 'Logged in'),
(100, 1, '2018-12-03 00:20:39', 'Administrator', 'Logged out'),
(101, 15, '2018-12-03 00:20:51', 'Instructor', 'Logged in'),
(102, 15, '2018-12-03 00:21:41', 'Instructor', 'Logged out'),
(103, 15, '2018-12-03 00:21:48', 'Instructor', 'Logged in'),
(104, 15, '2018-12-03 00:22:05', 'Instructor', 'Logged out'),
(105, 1, '2018-12-03 00:22:12', 'Administrator', 'Logged in'),
(106, 1, '2018-12-03 00:37:47', 'Administrator', 'Logged out'),
(107, 1, '2018-12-03 01:42:38', 'Administrator', 'Logged in'),
(108, 1, '2018-12-03 02:22:22', 'Administrator', 'Logged in'),
(109, 1, '2018-12-03 02:45:42', 'Administrator', 'Logged out'),
(110, 15, '2018-12-03 02:47:25', 'Instructor', 'Logged in'),
(111, 15, '2018-12-03 02:47:45', 'Instructor', 'Logged out'),
(112, 1, '2018-12-03 02:48:19', 'Administrator', 'Logged in'),
(113, 1, '2018-12-03 02:48:55', 'Administrator', 'Logged out'),
(114, 16, '2018-12-03 02:50:26', 'Officer', 'Logged out'),
(115, 1, '2018-12-03 02:50:45', 'Administrator', 'Logged in'),
(116, 1, '2018-12-03 02:51:00', 'Administrator', 'Logged out'),
(117, 1, '2018-12-03 02:52:19', 'Administrator', 'Logged in'),
(118, 1, '2018-12-03 02:52:58', 'Administrator', 'Logged out'),
(119, 17, '2018-12-03 03:19:20', 'Officer', 'Logged out'),
(120, 17, '2018-12-03 03:25:40', 'Officer', 'Logged out'),
(121, 1, '2018-12-03 03:28:32', 'Administrator', 'Logged in'),
(122, 1, '2018-12-04 00:55:32', 'Administrator', 'Logged in'),
(123, 1, '2018-12-04 06:53:56', 'Administrator', 'Logged in'),
(124, 1, '2018-12-04 09:56:41', 'Administrator', 'Logged in'),
(125, 1, '2018-12-04 10:12:24', 'Administrator', 'Logged out'),
(126, 13, '2018-12-04 10:12:29', 'Instructor', 'Logged in'),
(127, 201806, '2019-11-25 09:25:32', 'Student', 'Logged out'),
(128, 1, '2019-11-25 09:26:02', 'Administrator', 'Logged in'),
(129, 1, '2019-11-25 09:54:21', 'Administrator', 'Logged out'),
(130, 1, '2019-11-25 10:02:31', 'Administrator', 'Logged in'),
(131, 1, '2019-11-25 10:02:34', 'Administrator', 'Logged out'),
(132, 1, '2019-11-28 04:59:35', 'Administrator', 'Logged out'),
(133, 1, '2019-11-28 05:00:19', 'Administrator', 'Logged out'),
(134, 1, '2019-11-28 05:04:12', '', 'Logged in'),
(135, 1, '2019-11-28 05:04:26', '', 'Logged out'),
(136, 1, '2019-11-28 05:04:35', '', 'Logged in'),
(137, 1, '2019-11-28 05:05:04', '', 'Logged out'),
(138, 1, '2019-11-28 05:05:11', 'Administrator', 'Logged in'),
(139, 1, '2019-11-28 08:50:28', 'Administrator', 'Logged out'),
(140, 1, '2019-11-28 08:50:34', 'Administrator', 'Logged in'),
(141, 1, '2019-11-28 09:09:56', 'Administrator', 'Logged in'),
(142, 1, '2019-11-28 11:05:06', 'Administrator', 'Logged out'),
(143, 1, '2019-11-28 11:26:23', 'Administrator', 'Logged in'),
(144, 1, '2019-11-28 11:26:25', 'Administrator', 'Logged out'),
(145, 1, '2019-11-28 11:32:49', 'Administrator', 'Logged in'),
(146, 1, '2019-11-28 11:33:03', 'Administrator', 'Logged out'),
(147, 1, '2019-11-28 11:33:52', 'Administrator', 'Logged in'),
(148, 18, '2019-11-28 11:38:54', 'Officer', 'Logged out'),
(149, 1, '2019-11-28 11:43:39', 'Administrator', 'Logged in'),
(150, 1, '2019-11-28 13:00:16', 'Administrator', 'Logged out'),
(151, 1, '2022-06-23 10:31:29', 'Administrator', 'Logged out'),
(152, 1, '2022-06-23 10:31:55', 'Administrator', 'Logged in'),
(153, 1, '2022-06-23 10:32:13', 'Administrator', 'Logged out'),
(154, 13, '2022-06-23 10:32:29', 'Instructor', 'Logged in'),
(155, 13, '2022-06-23 10:33:59', 'Instructor', 'Logged out'),
(156, 1, '2022-06-23 10:34:04', 'Administrator', 'Logged in'),
(157, 1, '2022-06-23 10:42:56', 'Administrator', 'Logged in'),
(158, 1, '2022-07-17 00:53:48', 'Administrator', 'Logged in'),
(159, 1, '2022-07-17 00:53:48', 'Administrator', 'Logged in'),
(160, 1, '2022-07-17 01:12:12', 'Administrator', 'Logged out'),
(161, 15, '2022-07-17 01:12:49', 'HR', 'Logged in'),
(162, 15, '2022-07-17 01:12:49', 'HR', 'Logged in'),
(163, 15, '2022-07-17 01:12:53', 'HR', 'Logged in'),
(164, 15, '2022-07-17 01:12:53', 'HR', 'Logged in'),
(165, 15, '2022-07-17 01:13:38', 'HR', 'Logged out'),
(166, 1, '2022-07-17 01:13:43', 'Administrator', 'Logged in'),
(167, 1, '2022-07-25 09:26:24', 'Administrator', 'Logged out'),
(168, 1, '2022-07-25 09:26:35', 'Administrator', 'Logged in'),
(169, 1, '2022-07-25 09:32:16', 'Administrator', 'Logged out'),
(170, 15, '2022-07-25 09:32:24', 'HR', 'Logged in'),
(171, 15, '2022-07-25 09:33:40', 'HR', 'Logged out'),
(172, 1, '2022-07-25 09:33:53', 'Administrator', 'Logged in'),
(173, 1, '2022-07-25 09:34:11', 'Administrator', 'Logged out'),
(174, 13, '2022-07-25 09:34:26', 'Instructor', 'Logged in'),
(175, 13, '2022-07-25 09:35:21', 'Instructor', 'Logged out'),
(176, 1, '2022-07-25 09:35:30', 'Administrator', 'Logged in'),
(177, 1, '2022-09-12 08:42:06', 'Administrator', 'Logged out'),
(178, 15, '2022-09-12 08:42:24', 'HR', 'Logged in'),
(179, 15, '2022-09-12 08:42:52', 'HR', 'Logged out'),
(180, 1, '2022-09-12 08:42:56', 'Administrator', 'Logged in'),
(181, 1, '2022-11-06 09:18:21', 'Administrator', 'Logged out'),
(182, 15, '2022-11-06 09:18:49', 'HR', 'Logged in'),
(183, 15, '2022-11-06 09:45:11', 'HR', 'Logged out'),
(184, 1, '2022-11-06 09:45:17', 'Administrator', 'Logged in'),
(185, 1, '2022-12-06 07:00:44', 'Administrator', 'Logged out'),
(186, 1, '2022-12-06 07:00:50', 'Administrator', 'Logged in'),
(187, 1, '2022-12-06 07:02:59', 'Administrator', 'Logged out'),
(188, 1, '2022-12-06 07:03:32', 'Administrator', 'Logged in'),
(189, 1, '2022-12-06 09:15:32', 'Administrator', 'Logged out'),
(190, 15, '2022-12-06 09:15:38', 'HR', 'Logged in'),
(191, 15, '2022-12-06 09:15:53', 'HR', 'Logged out'),
(192, 1, '2022-12-06 09:16:07', 'Administrator', 'Logged in'),
(193, 1, '2022-12-15 08:31:08', 'Administrator', 'Logged out'),
(194, 21, '2022-12-15 08:33:00', 'Administrator', 'Logged in'),
(195, 21, '2022-12-15 08:40:45', 'Administrator', 'Logged out'),
(196, 23, '2022-12-15 08:40:48', 'Student affairs', 'Logged in'),
(197, 23, '2022-12-15 08:41:06', 'Student affairs', 'Logged out'),
(198, 22, '2022-12-15 08:41:25', 'Administrator', 'Logged in'),
(199, 22, '2022-12-15 08:41:54', 'Administrator', 'Logged out'),
(200, 15, '2022-12-15 08:42:03', 'HR', 'Logged in'),
(201, 15, '2022-12-15 08:42:11', 'HR', 'Logged out'),
(202, 23, '2022-12-15 08:42:14', 'Student affairs', 'Logged in'),
(203, 23, '2022-12-15 08:42:29', 'Student affairs', 'Logged out'),
(204, 23, '2022-12-15 08:45:46', 'Student affairs', 'Logged in'),
(205, 23, '2022-12-15 08:45:50', 'Student affairs', 'Logged out'),
(206, 23, '2022-12-15 09:05:48', 'Student affairs', 'Logged in'),
(207, 23, '2022-12-15 09:22:15', 'Student affairs', 'Logged out'),
(208, 22, '2022-12-15 09:22:21', 'Administrator', 'Logged in'),
(209, 22, '2022-12-15 09:28:30', 'Administrator', 'Logged out'),
(210, 1, '2022-12-15 09:28:36', 'Administrator', 'Logged in'),
(211, 1, '2022-12-15 09:44:28', 'Administrator', 'Logged out'),
(212, 23, '2022-12-15 09:44:31', 'Student affairs', 'Logged in'),
(213, 23, '2022-12-15 09:45:56', 'Student affairs', 'Logged out'),
(214, 21, '2022-12-15 09:46:09', 'Scientific affairs', 'Logged in'),
(215, 21, '2022-12-15 09:53:25', 'Scientific affairs', 'Logged out'),
(216, 23, '2022-12-15 09:54:00', 'Student affairs', 'Logged in'),
(217, 23, '2022-12-15 09:56:04', 'Student affairs', 'Logged out'),
(218, 22, '2022-12-15 09:57:24', 'Administrator', 'Logged in'),
(219, 22, '2022-12-15 10:08:12', 'Administrator', 'Logged out'),
(220, 15, '2022-12-15 10:08:17', 'HR', 'Logged in'),
(221, 15, '2022-12-15 10:17:07', 'HR', 'Logged out'),
(222, 23, '2022-12-15 10:17:08', 'Student affairs', 'Logged in'),
(223, 23, '2022-12-15 10:17:17', 'Student affairs', 'Logged out'),
(224, 1, '2022-12-15 10:19:10', 'Administrator', 'Logged in'),
(225, 1, '2022-12-15 10:21:56', 'Administrator', 'Logged out'),
(226, 1, '2022-12-15 10:22:41', 'Administrator', 'Logged in'),
(227, 1, '2022-12-15 10:23:22', 'Administrator', 'Logged out'),
(228, 1, '2022-12-15 10:24:07', 'Administrator', 'Logged in'),
(229, 1, '2022-12-15 10:25:52', 'Administrator', 'Logged out'),
(230, 26, '2022-12-15 10:25:55', 'Chemistry dep', 'Logged in'),
(231, 26, '2022-12-15 10:29:44', 'Chemistry dep', 'Logged out'),
(232, 26, '2022-12-15 10:29:46', 'Chemistry dep', 'Logged in'),
(233, 26, '2022-12-15 10:33:18', 'Chemistry dep', 'Logged out'),
(234, 1, '2022-12-15 10:33:37', 'Administrator', 'Logged in'),
(235, 1, '2022-12-15 21:15:43', 'Administrator', 'Logged out'),
(236, 26, '2022-12-15 21:15:45', 'Chemistry dep', 'Logged in'),
(237, 26, '2022-12-17 21:04:45', 'Chemistry dep', 'Logged out'),
(238, 26, '2022-12-17 21:05:33', 'Chemistry dep', 'Logged in'),
(239, 26, '2022-12-17 21:05:36', 'Chemistry dep', 'Logged out'),
(240, 1, '2022-12-17 21:05:43', 'Administrator', 'Logged in'),
(241, 1, '2022-12-17 23:16:34', 'Administrator', 'Logged out'),
(242, 30, '2022-12-17 23:16:39', 'Biology dep', 'Logged in'),
(243, 30, '2022-12-17 23:16:47', 'Biology dep', 'Logged out'),
(244, 26, '2022-12-17 23:16:50', 'Chemistry dep', 'Logged in'),
(245, 26, '2022-12-17 23:16:58', 'Chemistry dep', 'Logged out'),
(246, 30, '2022-12-17 23:19:18', 'Biology dep', 'Logged in'),
(247, 30, '2022-12-17 23:19:23', 'Biology dep', 'Logged out'),
(248, 22, '2022-12-17 23:19:27', 'Administrator', 'Logged in'),
(249, 22, '2022-12-17 23:38:59', 'Administrator', 'Logged out'),
(250, 23, '2022-12-17 23:39:04', 'Student affairs', 'Logged in'),
(251, 23, '2022-12-18 00:24:09', 'Student affairs', 'Logged out'),
(252, 22, '2022-12-18 00:24:13', 'Administrator', 'Logged in'),
(253, 22, '2022-12-18 06:43:54', 'Administrator', 'Logged out'),
(254, 22, '2022-12-18 07:09:27', 'Administrator', 'Logged in'),
(255, 22, '2022-12-18 07:10:16', 'Administrator', 'Logged out'),
(256, 23, '2022-12-18 07:10:26', 'Student affairs', 'Logged in'),
(257, 23, '2022-12-18 07:10:41', 'Student affairs', 'Logged out'),
(258, 21, '2022-12-18 07:10:53', 'Scientific affairs', 'Logged in'),
(259, 21, '2022-12-18 07:11:05', 'Scientific affairs', 'Logged out'),
(260, 22, '2022-12-18 07:11:25', 'Administrator', 'Logged in'),
(261, 22, '2022-12-18 10:12:52', 'Administrator', 'Logged out'),
(262, 21, '2022-12-18 10:13:00', 'Scientific affairs', 'Logged in'),
(263, 21, '2022-12-18 10:50:29', 'Scientific affairs', 'Logged out'),
(264, 22, '2022-12-18 10:50:36', 'Administrator', 'Logged in'),
(265, 22, '2022-12-18 10:51:48', 'Administrator', 'Logged out'),
(266, 21, '2022-12-18 10:51:56', 'Scientific affairs', 'Logged in'),
(267, 21, '2022-12-19 07:17:19', 'Scientific affairs', 'Logged out'),
(268, 30, '2022-12-19 07:17:22', 'Biology dep', 'Logged in'),
(269, 30, '2022-12-19 07:17:26', 'Biology dep', 'Logged out'),
(270, 27, '2022-12-19 07:17:30', 'Computer dep', 'Logged in'),
(271, 27, '2022-12-19 08:29:28', 'Computer dep', 'Logged out'),
(272, 22, '2022-12-19 08:31:16', 'Administrator', 'Logged in'),
(273, 22, '2022-12-19 09:14:24', 'Administrator', 'Logged out'),
(274, 30, '2022-12-19 09:14:26', 'Biology dep', 'Logged in'),
(275, 30, '2022-12-19 09:14:36', 'Biology dep', 'Logged out'),
(276, 27, '2022-12-19 09:14:40', 'Computer dep', 'Logged in'),
(277, 27, '2022-12-19 10:12:12', 'Computer dep', 'Logged out'),
(278, 22, '2022-12-19 10:12:17', 'Administrator', 'Logged in'),
(279, 22, '2022-12-19 10:24:14', 'Administrator', 'Logged out'),
(280, 22, '2022-12-19 10:24:19', 'Administrator', 'Logged in'),
(281, 22, '2022-12-19 10:33:24', 'Administrator', 'Logged out'),
(282, 30, '2022-12-19 10:33:28', 'Biology dep', 'Logged in'),
(283, 30, '2022-12-19 10:33:37', 'Biology dep', 'Logged out'),
(284, 27, '2022-12-19 10:33:41', 'Computer dep', 'Logged in'),
(285, 27, '2022-12-19 10:33:46', 'Computer dep', 'Logged out'),
(286, 30, '2022-12-19 10:46:06', 'Biology dep', 'Logged in'),
(287, 30, '2022-12-19 10:46:17', 'Biology dep', 'Logged out'),
(288, 22, '2022-12-19 10:58:39', 'Administrator', 'Logged in'),
(289, 22, '2022-12-19 21:05:38', 'Administrator', 'Logged out'),
(290, 15, '2022-12-19 21:05:42', 'HR', 'Logged in'),
(291, 15, '2022-12-19 21:07:21', 'HR', 'Logged out'),
(292, 30, '2022-12-19 21:07:23', 'Biology dep', 'Logged in'),
(293, 30, '2022-12-19 21:07:28', 'Biology dep', 'Logged out'),
(294, 22, '2022-12-19 21:07:31', 'Administrator', 'Logged in'),
(295, 22, '2022-12-20 07:49:43', 'Administrator', 'Logged out'),
(296, 27, '2022-12-20 07:49:49', 'Computer dep', 'Logged in'),
(297, 27, '2022-12-20 07:50:30', 'Computer dep', 'Logged out'),
(298, 23, '2022-12-20 07:50:39', 'Student affairs', 'Logged in'),
(299, 23, '2022-12-20 07:56:59', 'Student affairs', 'Logged out'),
(300, 30, '2022-12-20 07:57:01', 'Biology dep', 'Logged in'),
(301, 30, '2022-12-20 07:57:06', 'Biology dep', 'Logged out'),
(302, 22, '2022-12-20 07:57:10', 'Administrator', 'Logged in'),
(303, 22, '2022-12-20 09:02:22', 'Administrator', 'Logged out'),
(304, 22, '2022-12-20 09:08:33', 'Administrator', 'Logged in'),
(305, 22, '2022-12-20 09:13:56', 'Administrator', 'Logged out'),
(306, 22, '2022-12-20 09:14:55', 'Administrator', 'Logged in'),
(307, 22, '2022-12-20 10:45:56', 'Administrator', 'Logged out'),
(308, 30, '2022-12-20 10:45:59', 'Biology dep', 'Logged in'),
(309, 30, '2022-12-20 10:46:02', 'Biology dep', 'Logged out'),
(310, 21, '2022-12-20 10:46:09', 'Scientific affairs', 'Logged in'),
(311, 21, '2022-12-20 10:46:43', 'Scientific affairs', 'Logged out'),
(312, 22, '2022-12-20 10:46:47', 'Administrator', 'Logged in'),
(313, 22, '2022-12-20 19:04:09', 'Administrator', 'Logged out'),
(314, 30, '2022-12-20 19:04:11', 'Biology dep', 'Logged in'),
(315, 30, '2022-12-20 19:05:16', 'Biology dep', 'Logged out'),
(316, 1, '2022-12-20 19:05:22', 'Administrator', 'Logged in'),
(317, 1, '2022-12-20 20:15:59', 'Administrator', 'Logged out'),
(318, 30, '2022-12-20 20:16:00', 'Biology dep', 'Logged in'),
(319, 30, '2022-12-20 20:16:06', 'Biology dep', 'Logged out'),
(320, 15, '2022-12-20 20:16:11', 'HR', 'Logged in'),
(321, 15, '2022-12-20 20:16:16', 'HR', 'Logged out'),
(322, 30, '2022-12-20 20:16:18', 'Biology dep', 'Logged in'),
(323, 30, '2022-12-20 20:16:20', 'Biology dep', 'Logged out'),
(324, 22, '2022-12-20 20:16:26', 'Administrator', 'Logged in'),
(325, 22, '2022-12-26 07:00:31', 'Administrator', 'Logged out'),
(326, 21, '2022-12-26 07:00:43', 'Scientific affairs', 'Logged in'),
(327, 21, '2022-12-26 07:01:19', 'Scientific affairs', 'Logged out'),
(328, 22, '2022-12-26 07:01:23', 'Administrator', 'Logged in'),
(329, 22, '2022-12-26 07:05:00', 'Administrator', 'Logged out'),
(330, 21, '2022-12-26 07:05:47', 'Scientific affairs', 'Logged in'),
(331, 21, '2022-12-26 07:26:30', 'Scientific affairs', 'Logged out'),
(332, 22, '2022-12-26 07:26:58', 'Administrator', 'Logged in'),
(333, 22, '2022-12-26 10:40:39', 'Administrator', 'Logged out'),
(334, 21, '2022-12-26 10:40:49', 'Scientific affairs', 'Logged in'),
(335, 21, '2022-12-26 10:52:14', 'Scientific affairs', 'Logged out'),
(336, 22, '2022-12-26 10:52:19', 'Administrator', 'Logged in'),
(337, 22, '2022-12-26 10:52:26', 'Administrator', 'Logged out'),
(338, 23, '2022-12-26 10:52:38', 'Student affairs', 'Logged in'),
(339, 23, '2022-12-26 10:54:59', 'Student affairs', 'Logged out'),
(340, 30, '2022-12-26 10:55:34', 'Biology dep', 'Logged in'),
(341, 30, '2022-12-26 10:55:40', 'Biology dep', 'Logged out'),
(342, 30, '2022-12-26 10:58:04', 'Biology dep', 'Logged in'),
(343, 30, '2022-12-26 10:58:23', 'Biology dep', 'Logged out'),
(344, 21, '2022-12-26 10:58:33', 'Scientific affairs', 'Logged in'),
(345, 21, '2022-12-26 10:58:51', 'Scientific affairs', 'Logged out'),
(346, 1, '2022-12-26 10:59:25', 'Administrator', 'Logged in'),
(347, 1, '2022-12-26 11:01:41', 'Administrator', 'Logged out'),
(348, 30, '2022-12-26 11:01:44', 'Biology dep', 'Logged in'),
(349, 30, '2022-12-26 11:04:03', 'Biology dep', 'Logged out'),
(350, 22, '2022-12-26 11:04:07', 'Administrator', 'Logged in'),
(351, 22, '2022-12-26 19:32:05', 'Administrator', 'Logged out'),
(352, 30, '2022-12-26 19:32:07', 'Biology dep', 'Logged in'),
(353, 30, '2022-12-26 19:32:19', 'Biology dep', 'Logged out'),
(354, 26, '2022-12-26 19:32:22', 'Chemistry dep', 'Logged in'),
(355, 26, '2022-12-26 19:32:30', 'Chemistry dep', 'Logged out'),
(356, 15, '2022-12-26 19:32:36', 'HR', 'Logged in'),
(357, 15, '2022-12-26 19:33:25', 'HR', 'Logged out'),
(358, 27, '2022-12-26 19:33:29', 'Computer dep', 'Logged in'),
(359, 27, '2022-12-26 19:33:42', 'Computer dep', 'Logged out'),
(360, 28, '2022-12-26 19:33:51', 'Mathematics dep', 'Logged in'),
(361, 28, '2022-12-26 19:35:02', 'Mathematics dep', 'Logged out'),
(362, 29, '2022-12-26 19:35:32', 'Physics dep', 'Logged in'),
(363, 29, '2022-12-26 19:36:03', 'Physics dep', 'Logged out'),
(364, 21, '2022-12-26 19:36:13', 'Scientific affairs', 'Logged in'),
(365, 21, '2022-12-26 19:36:19', 'Scientific affairs', 'Logged out'),
(366, 22, '2022-12-26 19:37:41', 'Administrator', 'Logged in'),
(367, 22, '2022-12-26 20:34:55', 'Administrator', 'Logged out'),
(368, 21, '2022-12-26 20:35:02', 'Scientific affairs', 'Logged in'),
(369, 21, '2022-12-26 20:37:06', 'Scientific affairs', 'Logged out'),
(370, 1, '2022-12-26 20:40:24', 'Administrator', 'Logged in'),
(371, 1, '2022-12-27 08:49:10', 'Administrator', 'Logged out'),
(372, 30, '2022-12-27 08:49:14', 'Biology dep', 'Logged in'),
(373, 30, '2022-12-27 08:50:43', 'Biology dep', 'Logged out'),
(374, 22, '2022-12-27 08:50:46', 'Administrator', 'Logged in'),
(375, 22, '2022-12-27 09:07:00', 'Administrator', 'Logged out'),
(376, 30, '2022-12-27 09:07:04', 'Biology dep', 'Logged in'),
(377, 30, '2022-12-27 09:08:40', 'Biology dep', 'Logged out'),
(378, 22, '2022-12-27 09:08:43', 'Administrator', 'Logged in'),
(379, 22, '2022-12-27 09:10:26', 'Administrator', 'Logged out'),
(380, 30, '2022-12-27 09:10:29', 'Biology dep', 'Logged in'),
(381, 30, '2022-12-27 09:10:36', 'Biology dep', 'Logged out'),
(382, 30, '2022-12-27 09:10:40', 'Biology dep', 'Logged in'),
(383, 30, '2022-12-27 09:10:43', 'Biology dep', 'Logged out'),
(384, 22, '2022-12-27 09:10:45', 'Administrator', 'Logged in'),
(385, 22, '2022-12-27 09:19:12', 'Administrator', 'Logged out'),
(386, 22, '2022-12-27 09:19:15', 'Administrator', 'Logged in'),
(387, 22, '2022-12-27 09:19:19', 'Administrator', 'Logged out'),
(388, 30, '2022-12-27 09:19:23', 'Biology dep', 'Logged in'),
(389, 30, '2022-12-27 09:22:44', 'Biology dep', 'Logged out'),
(390, 22, '2022-12-27 09:22:47', 'Administrator', 'Logged in'),
(391, 22, '2022-12-27 09:32:59', 'Administrator', 'Logged out'),
(392, 30, '2022-12-27 09:33:15', 'Biology dep', 'Logged in'),
(393, 30, '2022-12-27 09:33:42', 'Biology dep', 'Logged out'),
(394, 26, '2022-12-27 09:33:45', 'Chemistry dep', 'Logged in'),
(395, 26, '2022-12-27 09:44:53', 'Chemistry dep', 'Logged out'),
(396, 22, '2022-12-27 09:44:55', 'Administrator', 'Logged in'),
(397, 22, '2022-12-27 09:46:38', 'Administrator', 'Logged out'),
(398, 30, '2022-12-27 09:46:41', 'Biology dep', 'Logged in'),
(399, 30, '2022-12-27 10:01:05', 'Biology dep', 'Logged out'),
(400, 26, '2022-12-27 10:01:09', 'Chemistry dep', 'Logged in'),
(401, 26, '2022-12-27 10:05:09', 'Chemistry dep', 'Logged out'),
(402, 30, '2022-12-27 10:05:13', 'Biology dep', 'Logged in'),
(403, 30, '2022-12-27 10:18:48', 'Biology dep', 'Logged out'),
(404, 26, '2022-12-27 10:18:53', 'Chemistry dep', 'Logged in'),
(405, 26, '2022-12-27 10:24:46', 'Chemistry dep', 'Logged out'),
(406, 22, '2022-12-27 10:25:26', 'Administrator', 'Logged in'),
(407, 22, '2022-12-27 11:40:08', 'Administrator', 'Logged out'),
(408, 30, '2022-12-27 11:40:13', 'Biology dep', 'Logged in'),
(409, 30, '2022-12-27 11:47:56', 'Biology dep', 'Logged out'),
(410, 21, '2022-12-27 11:48:06', 'Scientific affairs', 'Logged in'),
(411, 21, '2022-12-28 08:54:53', 'Scientific affairs', 'Logged out'),
(412, 26, '2022-12-28 08:55:01', 'Chemistry dep', 'Logged in'),
(413, 26, '2022-12-28 08:57:12', 'Chemistry dep', 'Logged out'),
(414, 22, '2022-12-28 08:57:15', 'Administrator', 'Logged in'),
(415, 22, '2022-12-28 10:23:56', 'Administrator', 'Logged out'),
(416, 21, '2022-12-28 10:24:03', 'Scientific affairs', 'Logged in'),
(417, 21, '2022-12-28 11:28:06', 'Scientific affairs', 'Logged out'),
(418, 22, '2022-12-28 11:28:08', 'Administrator', 'Logged in'),
(419, 22, '2022-12-29 07:26:43', 'Administrator', 'Logged out'),
(420, 21, '2022-12-29 07:26:50', 'Scientific affairs', 'Logged in'),
(421, 21, '2022-12-29 08:10:17', 'Scientific affairs', 'Logged out'),
(422, 30, '2022-12-29 08:10:24', 'Biology dep', 'Logged in'),
(423, 30, '2022-12-29 08:34:44', 'Biology dep', 'Logged out'),
(424, 26, '2022-12-29 08:34:48', 'Chemistry dep', 'Logged in'),
(425, 26, '2022-12-29 08:38:05', 'Chemistry dep', 'Logged out'),
(426, 28, '2022-12-29 08:38:34', 'Mathematics dep', 'Logged in'),
(427, 28, '2022-12-29 08:46:03', 'Mathematics dep', 'Logged out'),
(428, 29, '2022-12-29 08:46:10', 'Physics dep', 'Logged in');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `MNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `BPLACE` text NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL,
  `ACC_PASSWORD` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `STUDPHOTO` varchar(255) NOT NULL,
  `ACCOUNTTYPE` varchar(90) NOT NULL DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `ACC_USERNAME`, `ACC_PASSWORD`, `YEARLEVEL`, `COURSE_ID`, `STUDPHOTO`, `ACCOUNTTYPE`) VALUES
(1, '13213', 'hi', 'hi', 'hi', 'Female', '2000-11-30', 'hi', 'Single', 0, 'sad', 'hi', '21321', 'hi', '', '', 0, 52, '', ''),
(2, '150836', 'dodi', 'karim', 'dawood', 'Male', '1999-02-05', '', 'Select', 0, '', '', '', '', '150836', '', 0, 52, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsy`
--

CREATE TABLE `tblsy` (
  `AYID` int(11) NOT NULL,
  `SY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsy`
--

INSERT INTO `tblsy` (`AYID`, `SY`) VALUES
(1, '2021-2022'),
(2, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` varchar(90) NOT NULL,
  `POSITION` varchar(90) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `POSITION`, `USERIMAGE`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '1234', '', 'photos/login.png'),
(15, 'HR1', 'HR1', 'a36aa7077a741713a61cf465988d107ab205042f', 'HR', '', '', 'photos/login.png'),
(18, 'officer', 'officer', 'f90409b98ffb61424a01b4bb718aa602cebd5ee2', 'Officer', '2018-SC-0001', 'Vice-President', ''),
(21, 'scientific affairs ', 'Scientific affairs', '707c2130541bb2d33b0bf5138216cc7bafcb84ab', 'Scientific affairs', '5678', 'Dean assistant', 'photos/login.png'),
(22, 'Dean', 'Dean', '0e21b200d4510338e7a9f9c7555b324bf596e7a2', 'Administrator', '', '', 'photos/login.png'),
(23, 'drKamal', 'drKamal', 'afa02725c67f1defcb34ce4212e4125df284329e', 'Student affairs', '', '', 'photos/login.png'),
(26, 'Chemistry dep', 'Chemistry dep', '7336edcf3ea1c50c0811827b877bff24a1dd8ca6', 'Chemistry dep', '', '', 'photos/login.png'),
(27, 'Computer dep', 'Computer dep', '746281b0ec4a1cde4e43d4f1f96a2c77f1b283a1', 'Computer dep', '', '', 'photos/login.png'),
(28, 'Mathematics dep', 'Mathematics dep', '31b5ffcec1221405aa6f7a0b6cf29a485358418e', 'Mathematics dep', '', '', 'photos/login.png'),
(29, 'Physics dep', 'Physics dep', '01146150202aa49130b9a4d5728687bdf38e9f7b', 'Physics dep', '', '', 'photos/login.png'),
(30, 'Biology dep', 'Biology dep', '623c5970c55f473c8075f39d3eeb0890b35cb514', 'Biology dep', '', '', 'photos/login.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`);

--
-- Indexes for table `pst-graduate-std`
--
ALTER TABLE `pst-graduate-std`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pstgraduatestd`
--
ALTER TABLE `pstgraduatestd`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id_std`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`ANNOUNCEMENTID`);

--
-- Indexes for table `tbllevel`
--
ALTER TABLE `tbllevel`
  ADD PRIMARY KEY (`LEVELID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblsy`
--
ALTER TABLE `tblsy`
  ADD PRIMARY KEY (`AYID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `pst-graduate-std`
--
ALTER TABLE `pst-graduate-std`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pstgraduatestd`
--
ALTER TABLE `pstgraduatestd`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Id_std` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220015;

--
-- AUTO_INCREMENT for table `tbllevel`
--
ALTER TABLE `tbllevel`
  MODIFY `LEVELID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=429;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsy`
--
ALTER TABLE `tblsy`
  MODIFY `AYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
