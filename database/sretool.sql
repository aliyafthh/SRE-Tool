-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 12:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sretool`
--

-- --------------------------------------------------------

--
-- Table structure for table `createproject`
--

CREATE TABLE `createproject` (
  `id` int(255) NOT NULL,
  `groupleader` varchar(50) NOT NULL,
  `lecture` varchar(30) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `projectdesc` varchar(2000) NOT NULL,
  `groupmember1` int(30) NOT NULL,
  `groupmember2` int(30) NOT NULL,
  `groupmember3` int(30) NOT NULL,
  `groupmember4` int(30) NOT NULL,
  `groupmember5` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createproject`
--

INSERT INTO `createproject` (`id`, `groupleader`, `lecture`, `projectname`, `projectdesc`, `groupmember1`, `groupmember2`, `groupmember3`, `groupmember4`, `groupmember5`) VALUES
(0, 'Ana', 'Lecture 1', 'Banking Application', 'Ease others', 0, 0, 0, 0, 0),
(0, 'Ahsan', 'Lecture 1', 'Banking system', 'Banking.........', 170878748, 178748663, 178056636, 182052545, 178562036);

-- --------------------------------------------------------

--
-- Table structure for table `dependant`
--

CREATE TABLE `dependant` (
  `id` varchar(50) NOT NULL,
  `title_d` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dependant`
--

INSERT INTO `dependant` (`id`, `title_d`, `title`) VALUES
('102', 'Hold students records', 'Register');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pw`) VALUES
(0, 'maisara@yahoo.com', 'akhir');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `regname` varchar(50) NOT NULL,
  `studentid` int(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pw` varchar(30) NOT NULL,
  `repeatpw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regname`, `studentid`, `email`, `pw`, `repeatpw`) VALUES
(0, 'Nur Maisara', 17412554, 'maisara@yahoo.com', 'akhir', 'akhir');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `idk` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `title`, `requirement`, `priority`, `idk`) VALUES
(1, 'Hold students records', 'The system shall daiwdkajbanflk', 'medium', 'uh'),
(2, 'Register', 'uaqinasonfon aisfbkaef abak', 'low', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rn_issue`
--

CREATE TABLE `rn_issue` (
  `req_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `issue_detail` varchar(300) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `person_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_issue`
--

INSERT INTO `rn_issue` (`req_id`, `issue_id`, `issue_detail`, `Category`, `person_id`) VALUES
(1, 37, 'user unable to login without credentials', 'Stakeholder', 'person_1'),
(1, 39, 'Takes longer time to login', 'Schedule', 'person_1'),
(1, 41, 'System takes longer time to login', 'Schedule', 'person_1');

-- --------------------------------------------------------

--
-- Table structure for table `rn_option`
--

CREATE TABLE `rn_option` (
  `req_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_detail` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `person_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_option`
--

INSERT INTO `rn_option` (`req_id`, `option_id`, `option_detail`, `reason`, `person_id`) VALUES
(1, 2, 'User required to have an account to login ', 'To have personal workspace for each user', 'person_1'),
(1, 3, 'Reduce unnecesssary features to load for login', 'To reduce loading time for login', 'person_1');

-- --------------------------------------------------------

--
-- Table structure for table `rn_vote`
--

CREATE TABLE `rn_vote` (
  `req_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `userr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rq_main`
--

CREATE TABLE `rq_main` (
  `req_id` int(11) NOT NULL,
  `req_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rq_main`
--

INSERT INTO `rq_main` (`req_id`, `req_detail`) VALUES
(1, 'The system shall able to login'),
(2, 'The system will have guidance '),
(3, 'The system shall able to run in all browser'),
(4, 'The system must be able to use easily');

-- --------------------------------------------------------

--
-- Table structure for table `rvp1`
--

CREATE TABLE `rvp1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rvp1`
--

INSERT INTO `rvp1` (`id`, `name`, `position`) VALUES
(31, 'Akhma Luna', '  Requirement Engineering'),
(36, 'Zharif Fahmi', 'Manager'),
(37, 'Munirah', 'Auditor'),
(38, 'Khairul Amar', 'Requirement Engineering'),
(40, 'Nuriena Deen', 'Client'),
(41, 'Yuvaneesha', 'Programmer'),
(43, 'Adni ', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `rvp2`
--

CREATE TABLE `rvp2` (
  `id` int(11) NOT NULL,
  `requirement` text NOT NULL,
  `error` text NOT NULL,
  `foundby` text NOT NULL,
  `fdate` date NOT NULL,
  `supportby` text NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rvp2`
--

INSERT INTO `rvp2` (`id`, `requirement`, `error`, `foundby`, `fdate`, `supportby`, `sdate`) VALUES
(22, 'F02', 'Use shall instead of should', 'Akma Luna', '2020-09-03', 'Munirah', '2020-09-03'),
(23, 'Q02', 'What kind of software, please state.', 'Zharif Fahmi', '2020-09-04', 'Yuvaneesha', '2020-09-04'),
(24, 'Q03', '3 seconds ? Need to discuss this..', 'Khairul Amar', '2020-09-05', 'Nuriena', '2020-09-05'),
(25, 'F01', 'Not comprehensible to all', 'Munirah', '2020-09-07', 'Yuvaneesha', '2020-09-07'),
(29, 'Choose requirement', '', '  Tyara ', '0000-00-00', '', '0000-00-00'),
(30, 'Q01', 'Do not use shall', 'Farhah ', '2021-02-07', 'Melisa', '2021-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `rvp3`
--

CREATE TABLE `rvp3` (
  `id` int(11) NOT NULL,
  `requirement` text NOT NULL,
  `error` text NOT NULL,
  `solution` text NOT NULL,
  `status` text NOT NULL,
  `correctby` text NOT NULL,
  `cdate` date NOT NULL,
  `supportby` text NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rvp3`
--

INSERT INTO `rvp3` (`id`, `requirement`, `error`, `solution`, `status`, `correctby`, `cdate`, `supportby`, `sdate`) VALUES
(6, 'F02', 'Use ', 'The system shall reduce wastage of raw materials to improve cost savings.', '', 'Munirah', '0000-00-00', 'Zharif', '2020-09-07'),
(7, 'Q02', 'What kind of software? Please state.', 'The system shall be simple to be easily upgrade to Quickbooks.', '', 'Yuvaneesha', '0000-00-00', 'Khairul', '2020-09-07'),
(8, 'Q03', '3 seconds? Need to discuss this.. Yeay', 'The system will be able to response within 3 to 6 seconds.', '', 'Akhma', '0000-00-00', 'Nuriena', '2020-09-09'),
(12, 'Choose requirement', '', '', '', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `roles_id`) VALUES
(1, 'person_1', 1),
(2, 'person_2', 2),
(3, 'person_3', 2),
(4, 'person_4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `v_id` int(11) NOT NULL,
  `viewer` varchar(255) NOT NULL,
  `attribute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`v_id`, `viewer`, `attribute`) VALUES
(1, 'test', 'id'),
(2, 'ians', 'title'),
(3, 'final', 'id'),
(3, 'final', 'title'),
(3, 'final', 'requirement'),
(3, 'final', 'priority');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dependant`
--
ALTER TABLE `dependant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rn_issue`
--
ALTER TABLE `rn_issue`
  ADD PRIMARY KEY (`issue_id`,`issue_detail`);

--
-- Indexes for table `rn_option`
--
ALTER TABLE `rn_option`
  ADD PRIMARY KEY (`option_id`,`option_detail`);

--
-- Indexes for table `rn_vote`
--
ALTER TABLE `rn_vote`
  ADD PRIMARY KEY (`option_id`,`userr_id`);

--
-- Indexes for table `rq_main`
--
ALTER TABLE `rq_main`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `rvp1`
--
ALTER TABLE `rvp1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rvp2`
--
ALTER TABLE `rvp2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rvp3`
--
ALTER TABLE `rvp3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rn_issue`
--
ALTER TABLE `rn_issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `rn_option`
--
ALTER TABLE `rn_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rq_main`
--
ALTER TABLE `rq_main`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rvp1`
--
ALTER TABLE `rvp1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rvp2`
--
ALTER TABLE `rvp2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rvp3`
--
ALTER TABLE `rvp3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
