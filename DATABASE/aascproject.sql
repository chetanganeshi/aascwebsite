-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aascproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `about`) VALUES
(1, 'Hi', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `adrs` varchar(200) NOT NULL,
  `cont` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `adrs`, `cont`, `email`) VALUES
(1, 'The Adoni Arts & Science College (Affiliated to Rayalaseema University, Kurnool) <br> Yemmiganur Road, Adoni, Kurnool Dist., Andhra Pradesh - 518 302', 'Phone: 08512 - 231345 | Office - Fax: 230582 | BRAOU: 08512 - 230064', 'adonicollege@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `id` varchar(50) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Years` varchar(50) DEFAULT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `approvedusers`
--

CREATE TABLE `approvedusers` (
  `uid` int(255) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `aadharnumber` varchar(50) NOT NULL,
  `smno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `fmno` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `joiningyear` varchar(50) NOT NULL,
  `applicationstatus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approvedusers`
--

INSERT INTO `approvedusers` (`uid`, `emailid`, `pass`, `cpass`, `name`, `role`, `dob`, `aadharnumber`, `smno`, `gender`, `bloodgroup`, `category`, `nationality`, `fathername`, `mothername`, `fmno`, `address`, `city`, `state`, `country`, `pcode`, `coursename`, `collegename`, `joiningyear`, `applicationstatus`) VALUES
(1, 'admin@aasc', 'admin', 'admin', 'Admin', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'chetanganeshi1812@gmail.com', '12345', '12345', 'G Chetan Kumar', 'student', '18-12-1999', '870595536810', '8332866509', 'Male', 'O+', 'OBC', 'Indian', 'G Sreenivasa Rao', 'G Hemavathi', '8332866509', 'C5/356-2, Kilichinpeta', 'Adoni', 'Andhra Pradesh', 'India', '518301', 'B.Sc.(MPCs)', 'The Adoni Arts and Science College', '2017', 'approved'),
(4, 'chetanganeshi1812@gmail.com', '12345', '12345', 'G Chetan Kumar', 'student', '18-12-1999', '870595536810', '8332866509', 'Male', 'O+', 'OBC', 'Indian', 'G Sreenivasa Rao', 'G Hemavathi', '9494801409', 'C5/356-2, Kilichinpeta', 'Adoni', 'Andhra Pradesh', 'India', '518301', 'B.Sc.(MPCs)', 'The Adoni Arts and Science College', '2017', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `Name`, `Course`) VALUES
(1, 'Sem-1', 'B.Sc (MPC)'),
(2, 'Sem-2', 'B.Sc (MPC)'),
(3, 'Sem-3', 'B.Sc (MPC)'),
(4, 'Sem-4', 'B.Sc (MPC)'),
(5, 'Sem-5', 'B.Sc (MPC)'),
(6, 'Sem-6', 'B.Sc (MPC)'),
(7, 'Sem-1', 'B.Sc (BZC)'),
(8, 'Sem-2', 'B.Sc (BZC)'),
(9, 'Sem-3', 'B.Sc (BZC)'),
(10, 'Sem-4', 'B.Sc (BZC)'),
(11, 'Sem-5', 'B.Sc (BZC)'),
(12, 'Sem-6', 'B.Sc (BZC)'),
(13, 'Sem-1', 'B.Sc (ZPC)'),
(14, 'Sem-2', 'B.Sc (ZPC)'),
(15, 'Sem-3', 'B.Sc (ZPC)'),
(16, 'Sem-4', 'B.Sc (ZPC)'),
(17, 'Sem-5', 'B.Sc (ZPC)'),
(18, 'Sem-6', 'B.Sc (ZPC)'),
(19, 'Sem-1', 'B.Sc (MPCs)'),
(20, 'Sem-2', 'B.Sc (MPCs)'),
(21, 'Sem-3', 'B.Sc (MPCs)'),
(22, 'Sem-4', 'B.Sc (MPCs)'),
(23, 'Sem-5', 'B.Sc (MPCs)'),
(24, 'Sem-6', 'B.Sc (MPCs)'),
(25, 'Sem-1', 'B.Sc (MECs)'),
(26, 'Sem-2', 'B.Sc (MECs)'),
(27, 'Sem-3', 'B.Sc (MECs)'),
(28, 'Sem-4', 'B.Sc (MECs)'),
(29, 'Sem-5', 'B.Sc (MECs)'),
(30, 'Sem-6', 'B.Sc (MECs)'),
(31, 'Sem-1 ', 'B.Sc (MSCs)'),
(32, 'Sem-2 ', 'B.Sc (MSCs)'),
(33, 'Sem-3 ', 'B.Sc (MSCs)'),
(34, 'Sem-4 ', 'B.Sc (MSCs)'),
(35, 'Sem-5 ', 'B.Sc (MSCs)'),
(36, 'Sem-6 ', 'B.Sc (MSCs)'),
(37, 'Sem-1 ', 'B.Sc (BtBC)'),
(38, 'Sem-2 ', 'B.Sc (BtBC)'),
(39, 'Sem-3 ', 'B.Sc (BtBC)'),
(40, 'Sem-4 ', 'B.Sc (BtBC)'),
(41, 'Sem-5 ', 'B.Sc (BtBC)'),
(42, 'Sem-6 ', 'B.Sc (BtBC)'),
(43, 'Sem-1 ', 'B.Com (GENERAL)'),
(44, 'Sem-2 ', 'B.Com (GENERAL)'),
(45, 'Sem-3 ', 'B.Com (GENERAL)'),
(46, 'Sem-4 ', 'B.Com (GENERAL)'),
(47, 'Sem-5 ', 'B.Com (GENERAL)'),
(48, 'Sem-6 ', 'B.Com (GENERAL)'),
(49, 'Sem-1 ', 'B.Com (Computer  Application)'),
(50, 'Sem-2 ', 'B.Com (Computer  Application)'),
(51, 'Sem-3 ', 'B.Com (Computer  Application)'),
(52, 'Sem-4 ', 'B.Com (Computer  Application)'),
(53, 'Sem-5 ', 'B.Com (Computer  Application)'),
(54, 'Sem-6 ', 'B.Com (Computer  Application)'),
(55, 'Sem-1 ', 'BBA'),
(56, 'Sem-2 ', 'BBA'),
(57, 'Sem-3 ', 'BBA'),
(58, 'Sem-4 ', 'BBA'),
(59, 'Sem-5', 'BBA'),
(60, 'Sem-6 ', 'BBA'),
(61, 'Sem-1 ', 'M.Sc (Organic Chemistry)'),
(62, 'Sem-2 ', 'M.Sc (Organic Chemistry)'),
(63, 'Sem-3 ', 'M.Sc (Organic Chemistry)'),
(64, 'Sem-4 ', 'M.Sc (Organic Chemistry)'),
(65, 'Sem-1 ', 'M.Com (General)'),
(66, 'Sem-2 ', 'M.Com (General)'),
(67, 'Sem-3 ', 'M.Com (General)'),
(68, 'Sem-4', 'M.Com (General)'),
(69, 'Sem-1 ', 'B.P.Ed'),
(70, 'Sem-2', 'B.P.Ed'),
(71, 'Sem-3 ', 'B.P.Ed'),
(72, 'Sem-4 ', 'B.P.Ed');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `replystatus` varchar(100) NOT NULL,
  `reply` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `uname`, `emailid`, `msg`, `date`, `replystatus`, `reply`) VALUES
(11, '', '', '', '23-04-2021', 'Not Replied', '--');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`) VALUES
(1, 'B.Sc.(MECs)'),
(2, 'B.Sc.(MSCs)'),
(4, 'B.Sc.(MPC)'),
(5, 'B.Sc.(BZC)'),
(6, 'B.Sc.(ZPC)'),
(7, 'B.Sc.(BtBC)'),
(8, 'B.Com(Computer Applications)'),
(9, 'B.Com(General)'),
(10, 'BBA'),
(11, 'B.A.(HEP)'),
(12, 'B.A.(MES)'),
(13, 'B.A.(HPT)'),
(14, 'M.Com(General)'),
(15, 'B.P.Ed.'),
(16, 'B.Sc.(MPCs)');

-- --------------------------------------------------------

--
-- Table structure for table `coursetype`
--

CREATE TABLE `coursetype` (
  `id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `cdurt` varchar(100) NOT NULL,
  `cdesc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursetype`
--

INSERT INTO `coursetype` (`id`, `price`, `course`, `cdurt`, `cdesc`) VALUES
(12, '--', 'B.Sc.(MECs)', '3 years', 'Contact us for more details'),
(13, '--', 'B.Sc.(MSCs)', '3 Years', 'Contact us for more details'),
(14, '--', 'B.Sc.(MPC)', '3 Years', 'Contact us for more details'),
(15, '--', 'B.Sc.(BZC)', '3 Years', 'Contact us for more details'),
(16, '--', 'B.Sc.(ZPC)', '3 Years', 'Contact us for more details'),
(17, '--', 'B.Sc.(BtBC)', '3 Years ', 'Contact us for more details'),
(18, '--', 'B.Com(Computer Applications)', '3 Years ', 'Contact us for more details'),
(19, '--', 'B.Com(General)', '3 Years', 'Contract is for more details'),
(20, '--', 'BBA', '3 Years', 'Contact us for more details'),
(21, '--', 'B.A.(HEP)', '3 Years ', 'Contact us for more details '),
(22, '--', 'B.A.(MES)', '3 Years ', 'Contact us for more details'),
(23, '--', 'B.A.(HPT)', '3 Years', 'Contact us for more details '),
(24, '--', 'M.Com(General)', '2 Years', 'Contact us for more details'),
(25, '--', 'B.P.Ed.', '2 Years', 'Contact us for more details'),
(26, '--', 'B.Sc.(MPCs)', '3 Years', 'Contact us for more details');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(255) NOT NULL,
  `departments` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departments`) VALUES
(1, 'Telugu'),
(2, 'Hindi'),
(3, 'English'),
(4, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_phone` varchar(100) NOT NULL,
  `p_query` varchar(100) NOT NULL,
  `p_message` varchar(500) NOT NULL,
  `replystatus` varchar(50) NOT NULL,
  `reply` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `p_name`, `p_email`, `p_phone`, `p_query`, `p_message`, `replystatus`, `reply`) VALUES
(28, 'Chetan Kumar Ganeshi', 'chetanganeshi1812@gmail.com', '8332866509', 'B.Sc.(MPCs)', 'what is the course fee of Bsc(mpcs)?', 'Replied', 'Dear Chetan,\n     Fee for BSc(MPCs) is Rs. 10,000/- per annum. For more details please contact in our college administrative block. wish you all the best!\n\nRegards,\nThe Adoni Arts & Science College,\nAdoni, Kurnool Dist.,\nAndhra Pradesh - 518 302.');

-- --------------------------------------------------------

--
-- Table structure for table `events1`
--

CREATE TABLE `events1` (
  `id` int(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `timings` varchar(50) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events1`
--

INSERT INTO `events1` (`id`, `name`, `timings`, `info`) VALUES
(1, 'APSSDC Skill Development Classes', 'Morning:  9:00 am to 10:00 am', 'On Working Days'),
(2, 'Competitive Exams Coaching', 'Evening: 4:00 pm to 5:00 pm', 'On Working Days'),
(3, 'Reasoning & Aptitude Coaching', 'Morning: 9:00 am to 10:00 am', 'On Working Days');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(255) NOT NULL,
  `lecturername` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `cno` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `lecturername`, `qualification`, `designation`, `department`, `cno`) VALUES
(1, 'N. Newton Raj', 'M,A, ,.Phill., B.Ed.', 'Lecturer', 'English', '9440506510'),
(2, 'M. Jonathan Wycliffe', 'M.A. M.Ed.,', 'Lecturer', 'English', '9959381376'),
(3, 'P. Sateesh Kumar', 'M.A. M.Ed.,', 'Lecturer', 'English', '9959444628'),
(4, 'Ms. Jubeda Bee', 'M.A., B.Ed.,', 'Lecturer', 'English', '9059618745'),
(5, 'M. Benymen', 'M.A., B.Ed.,', 'Lecturer', 'English', '9908141570'),
(6, 'B. Gopal', 'M.A., B.Ed.,', 'Lecturer', 'English', '9490116506'),
(7, 'U.M. Raju', 'M.A.,', 'Lecturer', 'English', '9985159046'),
(8, 'Dr. B.Ch. Venkateshwarulu', 'M.A., B.Ed., Ph.D.', 'Lecturer', 'Telugu', '9440521580'),
(9, 'P. Narasimhulu', 'M.A., B.Ed., T.P.T.(Ph.D)', 'Lecturer', 'Telugu', '9885063996'),
(10, 'G. Nalla Reddy', 'M.A., M.Phill., Ph.D & T.P.T.', 'Lecturer', 'Telugu', ''),
(11, 'C. Umadevi', 'M.A., T.P.T.', 'Lecturer', 'Telugu', ''),
(12, 'N. Manoranjitha', 'M.A., M.Ed.,', 'Lecturer', 'Telugu', ''),
(13, 'N. Santhosha', 'M.A., T.P.T', 'Lecturer', 'Telugu', ''),
(14, 'R. Naseer Ahmed', 'M.C.A.', 'Head of the Departement', 'Computer Science', '9848151068'),
(15, 'P. Hari Prasad Shrama', 'M.C.A.', 'Lecturer', 'Computer Science', ''),
(16, 'Ms. Arundhathi Bai', 'MCA, M.Tech(IT)', 'Lecturer', 'Computer Science', ''),
(17, 'P. Venkateshwara Reddy', '', 'Lecturer', 'Computer Science', ''),
(18, 'Md. Junaid', '', 'Lecturer', 'Computer Science', ''),
(19, 'K. Mahendra', 'M.C.A.', 'Lecturer', 'Computer Science', '9533414346');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(11) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `date1` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `Title`, `Details`, `date1`) VALUES
(4, 'What is the profile of the faculties that will train us?', 'All our faculties are Engineers from reputed colleges with years of industrial experience.', '2020-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `featuresimages`
--

CREATE TABLE `featuresimages` (
  `ID` int(100) NOT NULL,
  `featuresimage` varchar(100) NOT NULL,
  `OrderID` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `featuresimages`
--

INSERT INTO `featuresimages` (`ID`, `featuresimage`, `OrderID`) VALUES
(1, 'f1.jpg', 1),
(2, 'f2.jpg', 2),
(3, 'f3.jpg', 3),
(4, 'f4.jpg', 4),
(5, 'f5.jpg', 5),
(6, 'f6.jpg', 6),
(7, 'f7.jpg', 7),
(8, 'f8.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `img`) VALUES
(1, 'campus1.jpg'),
(2, 'staff.jpg'),
(3, 'elearningcenter.jpg'),
(4, 'physicslab.jpg'),
(5, 'shakehand.jpg'),
(6, 'razak.jpg'),
(7, 'runningtrack.jpg'),
(8, 'playing2.jpg'),
(9, 'outdoorstadium.jpg'),
(10, 'clggate.jpg'),
(11, 'gymnasium1.jpg'),
(12, 'gymnasium2.jpg'),
(13, 'entrance1.jpg'),
(14, 'nss1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `title`, `about`) VALUES
(1, 'Golden jubilee hall', 'Auditorium'),
(2, 'Open air theatre', 'Auditorium');

-- --------------------------------------------------------

--
-- Table structure for table `managetimetable`
--

CREATE TABLE `managetimetable` (
  `id` int(11) NOT NULL,
  `Course` varchar(500) NOT NULL,
  `Class` varchar(500) NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Board` varchar(500) NOT NULL,
  `Center` varchar(500) NOT NULL,
  `Batchtiming` varchar(500) NOT NULL,
  `Day` varchar(500) NOT NULL,
  `ClassRoom` varchar(500) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managetimetable`
--

INSERT INTO `managetimetable` (`id`, `Course`, `Class`, `Branch`, `Board`, `Center`, `Batchtiming`, `Day`, `ClassRoom`, `Subject`) VALUES
(1, 'Msc.IT', 'Sem-2', '', 'Msc.IT', 'Katraj', '1PM-2PM', 'Tomarrow', '', 'Fundamentals'),
(2, 'Bsc.IT', 'Sem-3', '', 'Msc.IT', 'Ambegaon', '1PM-2PM', 'Tomarrow', '', 'Fundamentals'),
(3, 'Msc.IT', 'Sem-2', '', 'Msc.IT', 'Katraj', '1PM-2PM', 'Tomarrow', 'class-8', 'Fundamentals'),
(4, 'B.Sc (MPCs)', 'Sem-6', '', 'B.Sc (MPCs)', 'Sea Point', '1PM-2PM', 'Today', 'class-9', 'Fundamentals');

-- --------------------------------------------------------

--
-- Table structure for table `managetimetables`
--

CREATE TABLE `managetimetables` (
  `id` int(11) NOT NULL,
  `Day` varchar(500) NOT NULL,
  `BranchID` int(11) NOT NULL,
  `ClassRoomID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `BoardID` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `CenterID` int(11) NOT NULL,
  `BatchtimingID` int(11) NOT NULL,
  `bdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `qualification` varchar(5000) DEFAULT NULL,
  `designation` varchar(10000) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `qualification`, `designation`, `image`) VALUES
(1, 'B. Daivadheenam Reddy', 'CA', 'Correspondent | Since 2013 - to date', 'correspondentpassport.jpg'),
(2, 'Vitta Kristappa', '', 'Chairman | Since 1993 - to date', 'chairmanpassport.jpg'),
(3, 'Dr. M. Ayyappa', 'M.A.(Pub.Adm.), M.A.,Ph.D.(Pol.Sci.)', 'Principal | Since 2019 - to date', 'principalpassport.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `weblink` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `date`, `notice`, `weblink`) VALUES
(1, '2021-04-22', 'Click here to open Google search', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `uid` int(255) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `aadharnumber` varchar(50) NOT NULL,
  `smno` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `bloodgroup` varchar(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `fmno` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `joiningyear` varchar(50) NOT NULL,
  `applicationstatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`uid`, `emailid`, `pass`, `cpass`, `name`, `role`, `dob`, `aadharnumber`, `smno`, `gender`, `bloodgroup`, `category`, `nationality`, `fathername`, `mothername`, `fmno`, `address`, `city`, `state`, `country`, `pcode`, `coursename`, `collegename`, `joiningyear`, `applicationstatus`) VALUES
(1, 'admin@aasc', 'admin', '', '', 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `SliderImage` varchar(200) NOT NULL,
  `OrderID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `SliderImage`, `OrderID`) VALUES
(1, 'activeh1.png', '1 '),
(2, 'h1.png', '2 '),
(3, 'h2.png', '3 '),
(4, 'h3.png', '4 '),
(5, 'h4.png', '5 '),
(6, 'h5.png', '6 '),
(7, 'h6.png', '7 '),
(8, 'h7.png', '8 '),
(9, 'h8.png', '9 '),
(10, 'h9.png', '10 '),
(11, 'h10.png', '11 '),
(12, 'h11.png', '12 '),
(13, 'h12.png', '13 '),
(14, 'h13.png', '14 '),
(15, 'h14.png', '15 '),
(16, 'h15.png', '16');

-- --------------------------------------------------------

--
-- Table structure for table `sms_dtls`
--

CREATE TABLE `sms_dtls` (
  `sms_id` int(11) NOT NULL,
  `sms_mobile` varchar(100) DEFAULT NULL,
  `sms_nm` varchar(200) DEFAULT NULL,
  `sms_msg` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_dtls`
--

INSERT INTO `sms_dtls` (`sms_id`, `sms_mobile`, `sms_nm`, `sms_msg`) VALUES
(0, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(18, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(19, '919046148131', '1', 'test'),
(20, '919046148131', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(21, '919046148131', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(22, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(23, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(24, '917908299700', '2', 'Nimslite (StudentName), SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(25, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(26, '919913370001', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(27, '919913370001', '2', 'test'),
(28, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(29, '919913370001', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(30, '919913370001', '1', 'test'),
(31, '919913370001', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(32, '919913370001', '2', 'Nimslite (variable),your Nims Class (Variable) Shift To (Variable).'),
(33, '917908299700', '1', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(34, '919046148131', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(35, '917908299700,9046148131', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(36, '919913370001,7016235985', '2', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(37, '919046148131', '48', 'Dear Nimslite, you were absent for test on (variable) held on (variable). Clarify with reason to the branch head.'),
(38, '919046148131', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(39, '919913370001', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(40, '917908299700', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(41, '919913370001', '47', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(42, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(43, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(44, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(45, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(46, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(47, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(48, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(49, '91', 'Birthday_Reminder', 'Dear Nimslite , Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(50, '918401384830', 'Birthday_Reminder', 'Dear Nimslite <br /><b>Notice</b>:  Undefined variable: nm in <b>C:\\xampp\\htdocs\\mynims\\account\\admin\\dashboard.php</b> on line <b>106</b><br />, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(51, '918401384830', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(52, '918401384830', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(53, '918141857824', 'Birthday_Reminder', 'Dear Nimslite hardik patel, Many many happy returns of the day & Wish you happy birthday from Nims-Family.');

-- --------------------------------------------------------

--
-- Table structure for table `sms_template`
--

CREATE TABLE `sms_template` (
  `template_id` int(11) NOT NULL,
  `template_nm` varchar(200) DEFAULT NULL,
  `template_msg` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_template`
--

INSERT INTO `sms_template` (`template_id`, `template_nm`, `template_msg`) VALUES
(1, 'For Syllabus Completed Template', 'Dear Parents,Your child (variable) syllabus has completed on (Variable).Now revision batch will be continue till (variable).'),
(2, 'For SMS Facility', 'Nimslite (variable),SMS facility will be available if and only if batch time change or class off other wise we inform you in your class room.'),
(5, 'Shift Class', 'Dear Parents,your Child Nims Class (Variable) Shift To (Variable)'),
(6, 'Class Shift For Students', 'Nimslite (variable),your Nims Class (Variable) Shift To (Variable).'),
(7, 'Test Series Starts', 'Dear Parents,Nims started free test series for all subjects on (Variable). Be prepare them.'),
(8, 'OTPPrizeDist', 'Dear parent,We are pleased to invite you for the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(9, 'OTPPrizeDistforStudent', 'Dear Nimslite,We are pleased to invite you for the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(10, 'Which unit h/w given', 'Dear Nimslite, you have been assigned h/w on unit (variable). Do complete it in given deadline.'),
(11, 'Which unit h/w given(Parents)', 'Dear parents, your child has been assigned h/w on unit (variable). Ask them to finish in given deadline.'),
(12, 'D.P.P. Stud', 'Dear Nimslite, you have been assigned d.p.p. based on unit (variable). Do complete it in given deadline.'),
(13, 'D.P.P. Parents', 'Dear parents, your child has been assigned d.p.p. based on unit (variable). Ask them to finish in given deadline.'),
(14, 'Class work Stud', 'Dear Nimslite, you have been assigned class-work based on unit (variable). Do complete it in given deadline.'),
(15, 'Class work Parents', 'Dear parents, your child has been assigned class-work based on unit (variable). Ask them to finish in given deadline.'),
(16, 'H/w not completed Parents', 'Dear parents, your child has not completed h/w based on unit (variable). Kindly look after this'),
(17, 'Monthly report Stud', 'Dear Nimslite, your monthly attendance report has been generated. You can view detailed report by logging in on www.mynims.org'),
(45, 'Monthly report Parents', 'Dear parents, your child\'s monthly attendance report have been generated. You can view detailed report by logging in on www.mynims.org'),
(46, 'Test schedule', 'Dear Nimslite, your test on (variable) is held on (variable) between (variable). Be prepared for the same.'),
(47, 'Test schedule Parents', 'Dear parents, your child\'s test on (variable) is held on (variable) at (variable). Make him/her prepare for the same.'),
(48, 'Test not attended Stud', 'Dear Nimslite, you were absent for test on (variable) held on (variable). Clarify with reason to the branch head.'),
(49, 'Test report Stud', 'Dear Nimslite, your monthly test report has been generated. You can view detailed report by logging in on www.mynims.org'),
(50, 'Test not attended Parents', 'Dear parents, your child has not attended test on (variable) held on (variable). Clarify with reason to the branch head.'),
(51, 'Test report Parents', 'Dear parents, your child\'s monthly test report has been generated. You can view detailed report by logging in on www.mynims.org'),
(52, 'Test series Stud', 'Dear Nimslite, Nim\'s have started free test series for all subjects on (Variable). Be prepared for the same.'),
(53, 'Test series Parents', 'Dear Parents, Nim\'s have started free test series for all subjects on (Variable). Make him/her prepare.'),
(54, 'Batch timing Stud', 'Dear Nimslite, your batch timing for the course (variable) is (variable). We will need daily presence for an effective result.'),
(55, 'Batch timing Parents', 'Dear parents, your child\'s batch timing for the course (variable) is (variable). We will need daily presence for an effective result.'),
(56, 'Class off (today) Parents', 'Dear parents, today your child\'s class is off for some reason. Kindly take note of it.'),
(57, 'Class off (long duration) parents', 'Dear Parents, your child\'s class is off from (variable) to (variable) because of some reason. Kindly take note of it.'),
(58, 'Batch timing shift Stud', 'Dear Nimslite, your batch timing has been shifted. New timing is as (variable) .Kindly co-operate for the same.'),
(59, 'Batch timing shift Parents', 'Dear Parents, your child\'s batch timing has been shifted. New timing is as (variable). Kindly take note of it.'),
(60, 'Timing reschedules Parents', 'Dear Parents, your child\'s batch timing has been rescheduled as (variable). Kindly take note of it.'),
(61, 'Extra batch Stud', 'Dear Nimslite, Nim\'s have put an Extra batch for you on (variable) from (variable). Do present in the batch.'),
(62, 'Extra batch Parents', 'Dear Parents, Nim\'s have put an Extra batch for your child on (variable) from (variable). Kindly take note of it.'),
(63, 'Extra revision batch Stud', 'Dear Nimslite, Nim\'s have put an Extra revision batch for you on (variable) from (variable). Do present in the batch.'),
(64, 'Extra revision batch Parents', 'Dear Parents, Nim\'s have put an Extra batch for your child on (variable) from (variable). Kindly take note of it.'),
(65, 'Absent Alert Parents', 'Dear Parents, your child was absent on (variable) in batch (variable). Kindly look after this.'),
(66, 'Fees reminder Stud', 'Dear Nimslite, your fees is due on (variable). Kindly pay ASAP in the office.'),
(67, 'Fees reminder Parents', 'Dear Parents, your child\'s fees is due on (variable). Kindly pay ASAP in the office.'),
(68, 'Must pay fees Stud', 'Dear Nimslite, this is must pay fees reminder .Kindly pay ASAP in the office else you cannot continue in the batch.'),
(69, 'Must pay fees Parents', 'Dear Parents, this is must pay fees reminder .Kindly pay ASAP in the office else your child cannot continue in the batch.'),
(70, 'Parents meeting Stud', 'Dear Nimslite, Parents Meeting has been scheduled on (variable) at (variable). Kindly ask your parents to attend.'),
(71, 'Parents meeting parents', 'Dear parents, Nim\'s has scheduled Parents Meeting for you on (variable) at (variable). Kindly make your presence for the same.'),
(72, 'Cancel parents meeting stud', 'Dear Nimslite, Parents Meeting scheduled on (variable) at (variable) has been Cancelled. Kindly take note of it.'),
(73, 'Cancel parents meeting parents', 'Dear parents, Nim\'s Parents Meeting held on (variable) at (variable) has been cancelled. Apologize for the inconvenience caused.'),
(74, 'Study material available stud', 'Dear Nimslite, study material for subject (variable) is available. You can collect it from office.'),
(75, 'Study material available parents', 'Dear Parents, study material for subject (variable) is available. Ask your child to collect it from office.'),
(76, 'Syllabus complete or not stud', 'Dear Nimslite, your syllabus for subject (variable) is completed on (variable). For any queries contact your branch head.'),
(77, 'Syllabus complete or not parents', 'Dear Parents, your child\'s syllabus for subject (variable) is completed on (variable). For any queries kindly contact the branch head.'),
(78, 'New events Stud', 'Dear Nimslite, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(79, 'New events Parents', 'Dear Parents, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(80, 'Outside events Stud', 'Dear Nimslite, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(81, 'Outside events parents', 'Dear Parents, Nim\'s have scheduled an Event (variable) on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(82, 'Prize distribution Stud', 'Dear Nimslite, Nim\'s is celebrating the Prize distribution Ceremony on (variable) at (Variable) and Venue is (Variable).'),
(83, 'Prize distribution parents', 'Dear Parents, Nim\'s is celebrating the Prize Distribution Ceremony on (variable) at (Variable) and Venue is (Variable). Make this Event successful by marking your presence.'),
(84, 'Seminar stud', 'Dear Nimslite, Nim\'s have scheduled Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(85, 'Seminar parents', 'Dear Parents, Nim\'s have scheduled Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(86, 'free seminar stud', 'Dear Nimslite, Nim\'s have scheduled Free Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly mark your presence.'),
(87, 'free seminar parents', 'Dear Parents, Nim\'s have scheduled Free Seminar on (variable) on (variable) at (Variable) and Venue is (Variable). Kindly ask your child to mark presence.'),
(88, 'Nimâ€™s new batch Stud', 'Dear Nimslite, Nim\'s have started new batch for (variable). Enroll yourself ASAP.'),
(89, 'Nimâ€™s new batch Parents', 'Dear Parents, Nim\'s have started new batch for (variable). Enroll your child ASAP.'),
(90, 'Absent Today', 'Dear parents, your child has not attended the class on : (variable). Kindly look after this. From : (variable).'),
(91, 'Welcome message', 'Dear (variable), Welcome to Nim\'s! Your User ID : (variable) and Password : (variable) Keep it for personal use and future log in.'),
(92, 'Nims_New_Batch_Alert', 'Nimslite (variable), New batches of (variable) for (variable) starting from (variable) , On timing (variable) at (variable).Enroll today.Thanks.'),
(94, 'New_Batch_Alert', 'Nimslite (variable), New batches of (variable) for (variable) starting from (variable) , On timing (variable) at (variable).Enroll today.Thanks.'),
(95, 'Test_Nims_Guys', 'Hello (variable),Be Prepared (variable) for Date:23/01/2015 test on subject (variable).'),
(96, 'Thanks Message', 'Dear Nimslite (Variable),Thanks for joining Nim\'s Educational Care.We Provide you 100% friendly and effective result for your education, for any query and support Contact:9970629258,TollFreeNo.180030004181 or www.mynims.org'),
(97, 'Aprove Students', 'Nimslite (Variable), Your registration is approved for www.mynims.org and Your User Id : (Variable) and Password : (Variable).Keep it for personal use and future login.'),
(98, 'Approval_Msg_ToParents', 'Dear Parent, Your Child\'s registration is approved for www.mynims.org and Your User Id : (Variable) and Password : (Variable) to login into Parent\'s Corner.'),
(99, 'Absent_Student', 'Dear Student, You have not attended the class today for (variable) at (Variable). Our aim is that this absent mark should not affect on your study. Be regular.'),
(100, 'Birthday_Reminder', 'Dear Nimslite (variable), Many many happy returns of the day & Wish you happy birthday from Nims-Family.'),
(101, 'Forget_Password', 'Dear Nimslite, Your password is (variable). Keep it for personal use and future login.'),
(102, 'Forget_Password2', 'Dear Parent, Your password is (variable). Keep it for personal use and future login.'),
(103, 'Nims_Enquiry', 'If you have any query for(variable) then contact on this number 9923685635'),
(104, 'ClassOf_Alert(Today)', 'Dear Nimslite (variable), we will not be having class today for (variable) for Batchtiming (variable) due to (variable)- (variable) Thank you.'),
(105, 'ClassOff_Alert(Long Durt.)', 'Nimslite (variable), your class will be off for (variable) at (variable) from (variable) to (variable) due to (variable)- (variable) Thank you.'),
(106, 'Reschedule_Batch_Alert', 'Nimslite (variable), Your (variable) Batch on (variable) at (variable) for (variable) has been shifted to (variable), (variable) for (variable) at (variable)- (variable) Thank you.'),
(107, 'homework_student', 'Dear Nimslite,You have not completed the homework today for batchtiming (variable).Kindly give attention on your studies.'),
(108, 'test_Student', 'Dear Nimslite,You have not attended the TEST today for batchtiming (variable).Our aim is that this absent mark should not affect on your performance.'),
(109, 'PresentStud', 'Dear Nimslite, you have attended the class today for batchtiming (variable).Thank you.'),
(110, 'PresentParent', 'Dear Parent, your child has attended the class today for batchtiming (variable).Thank you.'),
(111, 'Process_Pending', 'Dear (variable),(variable) has sent you request for (variable) site and sitecode is (variable). Please have a look into it.'),
(112, 'PrizeDistibutionP', 'Dear Parent, Nim\'s is celebrating the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(113, 'PrizeDistStudent', 'Dear Nimslite, Nim\'s is celebrating the prize distribution ceremony on (variable) at (variable) and venue is (variable).'),
(114, 'NewBatchAlertStudent', 'Dear Nimslite (variable), New Batch for (variable) started from (variable) at (variable) on time (variable). Enroll today at (variable).'),
(115, 'NewBatchAlertParent', 'Dear Parent, New batch for (variable) started from (variable) at (variable) for (variable).Enroll today on (variable).Thanks.'),
(116, 'SelectCust', 'Dear (variable), new deal is created. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(117, 'SelectSup', 'Dear (variable), new deal is created. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(118, 'UpdateCust', 'Dear (variable), deal is updated. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(119, 'UpdateSup', 'Dear (variable), deal is updated. Details are: Product name: (variable) Rate: (variable)Rs Quantity: (variable)Katta Packing: (variable)kg/katta Commission: (variable)Rs.'),
(120, 'bulksms', 'Dear Nimslite,New batch for class (variable) of Subject (variable) start in (variable) week of (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(121, 'alertmsg', 'Dear Nimslite,New batch for class (variable) of Subject (variable) start in (variable) week of (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(122, 'new batch', 'Dear Nimslite,New batch for (variable) (variable) starts from (variable) at (variable).To enroll,contact in NIMS office,convey to your friends.Thank you.'),
(123, 'feesdueparents', 'Dear Nimslite, Your fees Rs. : (variable) is remaining of subject (variable). Please pay the fees on or before DueDate :(variable). Thank you.'),
(124, 'feesduestud', 'Dear parents, your child fees for Rs. : (variable) is remaining of subject (variable). Please pay the fees on or before DueDate : (variable). Thank you.'),
(125, 'cancelextrabatch', 'Dear Nimslite (variable), your (variable) extra batch will be cancelled on (variable) of subject (variable) due to (variable) - (variable). Thank you.'),
(126, 'extrabatchalert', 'Dear Nimslite (variable), your (variable) batch for (variable) will arrange on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(127, 'reschedulebatchalert', 'Nimslite (variable) your (variable) batch on (variable) at (variable) for (variable) has been shifted to (variable) on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(128, 'extrarevisionalert', 'Dear Nimslite (variable), your extra revision batch of (variable) on (variable) will be arrange on (variable) at (variable) for (variable) at (variable) - (variable). Thank you.'),
(129, 'newbatchstudent', 'Dear Nimslite (variable), new batch for (variable) will be start from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(130, 'newbatchparents', 'Dear Parents, new batch for (variable) will be start from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(131, 'testalert', 'Dear Nimslite (variable), your test of (variable) on (variable) will be arrange on (variable) at (variable) on (variable) for (variable). Be prepare. Best of luck. Thank you.'),
(132, 'notattendtestalert', 'Dear Parents, your child not attend the test today of subject (variable) for batchtime (variable).'),
(133, 'eventalert', 'Dear Nimslite (variable), we have arrange (variable) on (variable). The venue is (variable) and time is (variable). Thank you.'),
(134, 'subjectmaterialalert', 'Dear Nimslite (variable), collect your (variable) from office. Thank you.'),
(135, 'reciept', 'Nimslite (variable), your fees (variable)/- for (variable):(variable) have been received with discount of (variable)/-. Remaining fees of (variable)/- and Due Date:(variable). Thank you.'),
(136, 'reciept2', 'Nimslite (variable), your fees:(variable)/- for (variable):(variable) have been received with discount:(variable)/-, Remaining fees: (variable)/- & Due Date:(variable). Thank you.'),
(137, 'feesnil', 'Nimslite (variable), your fees (variable)/- for (variable):(variable) have been received with discount of (variable)/-. Remaining fees NIL. Thank you.'),
(138, 'cancelextrabt', 'Dear Nimslite (variable), your extra batch for (variable) on (variable) at (variable) will be cancelled on (variable) at (variable) due to (variable) - (variable). Thank you.'),
(139, 'newbatchstud', 'Dear Nimslite (variable), new batch of (variable) for (variable) will be starting from (variable) at (variable) on (variable). Enroll today at (variable). Thank you.'),
(140, 'hallshift', 'Dear Nimslite (variable), Nim\'s Branch is shifted from (variable) to (variable). For any query contact Nim\'s office. Thank you.'),
(141, 'notattdtest', 'Dear Parents, your child has not attended the test on (variable) of (variable) for (variable) at (variable). Please pay attention on your child.'),
(142, 'seminar alert', 'Dear Nimslite (variable), we have arranged seminar on (variable) by (variable) on (variable) at (variable) and time is (variable). For more details contact in office.'),
(143, 'homeworkalert', 'Dear Parents, your child has not completed (variable) homework of (variable) on (variable). Kindly give attention on your child.'),
(144, 'absentstud', 'Dear Nimslite, you have not attended the class today of (variable) for batchtiming (variable). Our aim is that this absent mark should not affect on your study.'),
(145, 'batchstud', 'Dear Nimslite,You have not attended the TEST today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect on your performance.'),
(146, 'homeworkstud', 'Dear Nimslite,You have not completed the homework today of (variable) for batchtiming (variable).Kindly give attention on your studies.'),
(147, 'testparent', 'Dear Parents,Your child has not attended the TEST today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect your child\'s performance.'),
(148, 'Homeworkparent', 'Dear Parents,Your child has not completed the homework today of (variable) for batchtiming (variable).Kindly give attention on your child.'),
(149, 'Absentparent', 'Dear Parents,Your child has not attended the class today of (variable) for batchtiming (variable).Our aim is that this absent mark should not affect your child\'s study.'),
(150, 'feesremi', 'Dear Parents, your child\'s Fees:(variable)/- is remaining for (variable) : (variable). We shall be glad if you pay fees on (variable). Thank You.'),
(151, 'otptemp', 'Dear Nimslite, your OTP is (variable). Thank You.'),
(152, 'oncong', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Keep Growing. Best of Luck.'),
(153, 'hardon', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Work Hard. Best of Luck.'),
(154, 'congrats', 'Dear Nimslite, Congratulation you got (variable) marks in (variable) online test on (variable). Keep Growing. Best of Luck.'),
(155, 'Sms Detail', 'Details are provided below - (variable)');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(200) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `YearOfAdmission` varchar(4) NOT NULL,
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `IsExCandidate` bit(30) NOT NULL,
  `FatherOccupationID` int(11) NOT NULL,
  `FatherMobile` varchar(15) NOT NULL,
  `PreferredCenterId` int(11) NOT NULL,
  `PreferredBatchTimingId` int(11) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` datetime NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `ExamBoardId` int(11) NOT NULL,
  `ReferenceTypeId` varchar(50) NOT NULL,
  `ImageDetails` longblob NOT NULL,
  `Bloodgroup` varchar(5) NOT NULL,
  `Nationality` varchar(50) NOT NULL,
  `Fathername` varchar(50) NOT NULL,
  `Fatherlastname` varchar(50) NOT NULL,
  `FatherdesignationID` int(11) NOT NULL,
  `FatheremailID` varchar(50) NOT NULL,
  `HomeLandlinenumbe` varchar(20) NOT NULL,
  `MotheroccupationID` int(11) NOT NULL,
  `MotherdesignationID` int(11) NOT NULL,
  `Mothermobilenumber` varchar(20) NOT NULL,
  `MotheremailID` varchar(50) NOT NULL,
  `Totalannualincome` varchar(30) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `EmergencyContactNumbe` varchar(20) NOT NULL,
  `Preferredstudymedium` varchar(50) NOT NULL,
  `Refrencename` varchar(50) NOT NULL,
  `IsExStudentRelative` bit(30) NOT NULL,
  `Relativename` varchar(50) NOT NULL,
  `Relativecontactnumber` varchar(20) NOT NULL,
  `CourseTypeID` int(11) NOT NULL,
  `ClassID` int(11) NOT NULL,
  `MotherName` varchar(50) NOT NULL,
  `DOJ` date NOT NULL,
  `PreferredCenterCity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `title`, `about`) VALUES
(1, 'Ncc', 'National Cadit Corps.'),
(2, 'NSS', 'NSS');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `timings` varchar(50) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `course`, `semester`, `subject`, `date`, `timings`, `details`) VALUES
(3, 'B.Sc.(MSCs)', 'sem-6', 'Stats', '2020-08-18', '10 to 100', 'Contact your department for more details'),
(4, 'B.Sc.(MPC)', 'sem-3', 'Maths', '2020-08-18', '10 to 11', 'Contact your department for more details'),
(5, 'B.Sc.(MECs)', 'sem-4', 'Ststs', '2020-08-19', '10 to 11', 'Contact your department for more details');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addstudent`
--
ALTER TABLE `addstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approvedusers`
--
ALTER TABLE `approvedusers`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursetype`
--
ALTER TABLE `coursetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events1`
--
ALTER TABLE `events1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `featuresimages`
--
ALTER TABLE `featuresimages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managetimetable`
--
ALTER TABLE `managetimetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sms_dtls`
--
ALTER TABLE `sms_dtls`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `sms_template`
--
ALTER TABLE `sms_template`
  ADD PRIMARY KEY (`template_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `approvedusers`
--
ALTER TABLE `approvedusers`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `coursetype`
--
ALTER TABLE `coursetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `events1`
--
ALTER TABLE `events1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featuresimages`
--
ALTER TABLE `featuresimages`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managetimetable`
--
ALTER TABLE `managetimetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
