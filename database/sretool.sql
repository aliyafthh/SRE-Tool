-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 10:34 AM
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
-- Table structure for table `checklist1`
--

CREATE TABLE `checklist1` (
  `id` int(255) NOT NULL,
  `groupid` int(11) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `atomic` varchar(10) NOT NULL,
  `correct` varchar(10) NOT NULL,
  `complete` varchar(10) NOT NULL,
  `consistent` varchar(10) NOT NULL,
  `comprehensible` varchar(10) NOT NULL,
  `feasible` varchar(10) NOT NULL,
  `identifiable` varchar(10) NOT NULL,
  `necessary` varchar(10) NOT NULL,
  `rated` varchar(10) NOT NULL,
  `traceable` varchar(10) NOT NULL,
  `unambiguous` varchar(10) NOT NULL,
  `verifiable` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checklist1`
--

INSERT INTO `checklist1` (`id`, `groupid`, `requirement`, `atomic`, `correct`, `complete`, `consistent`, `comprehensible`, `feasible`, `identifiable`, `necessary`, `rated`, `traceable`, `unambiguous`, `verifiable`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 0, 'F01', 'yes', '', '', '', '', '', '', '', '', '', '', ''),
(6, 0, 'F02', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(7, 0, 'F02', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(8, 0, 'Select Requirement', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no'),
(9, 0, 'Select Requirement', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(10, 0, 'Select Requirement', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(11, 0, 'F02', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(12, 0, 'Select Requirement', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `checklist2`
--

CREATE TABLE `checklist2` (
  `id` int(255) NOT NULL,
  `groupid` int(11) NOT NULL,
  `bounded` varchar(10) NOT NULL,
  `complete` varchar(10) NOT NULL,
  `consistent` varchar(10) NOT NULL,
  `comprehensible` varchar(10) NOT NULL,
  `modifiable` varchar(10) NOT NULL,
  `traceable` varchar(10) NOT NULL,
  `unambiguous` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checklist2`
--

INSERT INTO `checklist2` (`id`, `groupid`, `bounded`, `complete`, `consistent`, `comprehensible`, `modifiable`, `traceable`, `unambiguous`) VALUES
(1, 0, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `checklist3`
--

CREATE TABLE `checklist3` (
  `id` int(50) NOT NULL,
  `groupid` int(11) NOT NULL,
  `agreed` varchar(30) NOT NULL,
  `changes` varchar(30) NOT NULL,
  `resolved` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checklist3`
--

INSERT INTO `checklist3` (`id`, `groupid`, `agreed`, `changes`, `resolved`) VALUES
(1, 0, 'yes', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `createproject`
--

CREATE TABLE `createproject` (
  `id` int(255) NOT NULL,
  `groupmember1` int(30) NOT NULL,
  `role1` varchar(30) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `projectdesc` varchar(2000) NOT NULL,
  `groupmember2` int(30) NOT NULL,
  `role2` varchar(30) NOT NULL,
  `groupmember3` int(30) NOT NULL,
  `role3` varchar(30) NOT NULL,
  `groupmember4` int(30) NOT NULL,
  `role4` varchar(30) NOT NULL,
  `groupmember5` int(30) NOT NULL,
  `role5` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createproject`
--

INSERT INTO `createproject` (`id`, `groupmember1`, `role1`, `projectname`, `projectdesc`, `groupmember2`, `role2`, `groupmember3`, `role3`, `groupmember4`, `role4`, `groupmember5`, `role5`) VALUES
(9, 170878769, 'Top Management', 'Banking system', 'Banking system is a group or network of institutions that provide financial services for us. These institutions are responsible for operating a payment system, providing loans, taking deposits, and helping with investments.', 178748663, 'Project Manager', 178056636, 'System Analyst', 182052545, 'Stakeholder', 178562036, 'Programmer');

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
('102', 'Manage patient’s medical report', 'View patient’s medical report'),
('302', 'Modify patient’s detail', 'View patient’s medical report'),
('402', 'Delete patient’s record', 'View patient’s medical report');

-- --------------------------------------------------------

--
-- Table structure for table `elicitation`
--

CREATE TABLE `elicitation` (
  `id` int(11) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `m1` tinyint(1) DEFAULT NULL,
  `m2` tinyint(1) DEFAULT NULL,
  `m3` tinyint(1) DEFAULT NULL,
  `m4` tinyint(1) DEFAULT NULL,
  `m5` tinyint(1) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elicitation`
--

INSERT INTO `elicitation` (`id`, `requirement`, `m1`, `m2`, `m3`, `m4`, `m5`, `approved`) VALUES
(8, 'The system shall allow medical officer to view previous medical record of patients by entering patient’s name or IC number', 1, NULL, NULL, NULL, NULL, 0),
(9, 'The system shall allow medical officer or nurse to login into the system by entering their username and password.', 0, NULL, NULL, NULL, NULL, 0),
(10, 'The system shall allow admin to login to the system by entering his/her username and password', NULL, NULL, NULL, NULL, NULL, 0),
(11, 'The system shall allow National Registration staff to login to the system by entering username and password', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inspection1`
--

CREATE TABLE `inspection1` (
  `id` int(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `insdate` date NOT NULL,
  `insstart` varchar(12) NOT NULL,
  `insend` varchar(12) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `role1` varchar(30) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `role2` varchar(30) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `role3` varchar(30) NOT NULL,
  `name4` varchar(50) NOT NULL,
  `role4` varchar(30) NOT NULL,
  `name5` varchar(50) NOT NULL,
  `role5` varchar(30) NOT NULL,
  `name6` varchar(50) NOT NULL,
  `role6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection1`
--

INSERT INTO `inspection1` (`id`, `goal`, `work`, `insdate`, `insstart`, `insend`, `name1`, `role1`, `name2`, `role2`, `name3`, `role3`, `name4`, `role4`, `name5`, `role5`, `name6`, `role6`) VALUES
(6, 'Functional and non function requirement', 'To Do List\r\n-Shall & should', '2021-02-12', '19:26', '19:25', 'Ahsan Iman', 'Requirement Engineering', 'Nur Maisara', 'Domain Expert', 'Aiman Aqma', 'Moderator', 'Huda Izaty', 'Author', 'Mia Farina', 'Scribe', 'Jonathan Ong', 'Reader');

-- --------------------------------------------------------

--
-- Table structure for table `inspection2`
--

CREATE TABLE `inspection2` (
  `id` int(50) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `error` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection2`
--

INSERT INTO `inspection2` (`id`, `requirement`, `error`, `comment`) VALUES
(1, 'F01', 'The use of  \"should\"', 'Need to use shall');

-- --------------------------------------------------------

--
-- Table structure for table `inspection3`
--

CREATE TABLE `inspection3` (
  `id` int(50) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `solution` varchar(100) NOT NULL,
  `decision` varchar(100) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspection3`
--

INSERT INTO `inspection3` (`id`, `requirement`, `class`, `solution`, `decision`, `comment`) VALUES
(1, 'F01', 'Good', 'Just nice', 'Critical Error', 'Done !');

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
(0, 'maisara@yahoo.com', 'akhir'),
(1, 'maisara@yahoo.com', 'akhir'),
(2, '', ''),
(3, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `module` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`module`, `status`) VALUES
('Elicitation', 0),
('Documentation', 0),
('Negotiation', 0),
('Validation', 0),
('Management', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `studentid` int(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `leader` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `studentid`, `password`, `confirm_password`, `leader`) VALUES
(0, 'Nur Maisara', 17412554, 'akhir', 'akhir', 0),
(1, 'Nur Maisara', 170878748, 'akhir', 'akhir', 0),
(2, 'Ahsan Iman', 170878769, 'awal', 'awal', 0),
(3, 'Aiman Aqma', 178748663, 'first', 'first', 0),
(4, 'Huda Izaty', 178056636, 'last', 'last', 0),
(5, 'Mia Farina', 182052545, 'middle', 'middle', 0),
(6, 'Jonathan Ong', 178562036, 'tengah', 'tengah', 0),
(7, 'test1', 17056321, '1234567', '12345', 0),
(30, 'ida', 85225852, '$2y$10$MONe4MnsQLmJQxZz7d0C5.j', '$2y$10$0.0fDfze5RUD09yvoi159.Y', 1),
(42, 'Aldo', 170808080, '$2y$10$kqNXGblG6rhkJnrgU/ZZvOx', '$2y$10$7DZ9dygqc5iafyfJvdsF5.Q', 1),
(44, 'Farisha', 601601, '$2y$10$aWGWjc6.OMm0W2swmzbk4OF', '$2y$10$q7g8CzwarPprFK8vpcRlJux', 1),
(46, 'regname', 63636363, '636363', '636363', 1),
(47, 'saa', 303030, '303030', '303030', 1),
(48, 'Adie', 963963963, '369369', '369369', 0),
(50, 'fare', 1251251, '202020', '202020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `title`, `requirement`, `priority`, `status`) VALUES
(1, 'Manage patient’s medical report', 'The system shall allow medical officer to view previous medical record of patients by entering patient’s name or IC number', 'low', NULL),
(2, 'View patient’s medical report', 'The system shall allow medical officer or nurse to login into the system by entering their username and password.', 'high', NULL),
(3, 'Modify patient’s detail', 'The system shall allow admin to login to the system by entering his/her username and password', 'medium', ''),
(4, 'Delete patient’s record', 'The system shall allow National Registration staff to login to the system by entering username and password', 'low', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rn_issue`
--

CREATE TABLE `rn_issue` (
  `req_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `issue_detail` varchar(300) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `person_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_issue`
--

INSERT INTO `rn_issue` (`req_id`, `group_id`, `issue_id`, `issue_detail`, `Category`, `person_id`) VALUES
(1, 0, 37, 'user unable to login without credentials', 'Stakeholder', 'person_1'),
(1, 0, 39, 'Takes longer time to login', 'Schedule', 'person_1'),
(1, 0, 41, 'System takes longer time to login', 'Schedule', 'person_1'),
(3, 3, 43, 'Required stable internet connection ', 'Schedule', 'person_1');

-- --------------------------------------------------------

--
-- Table structure for table `rn_option`
--

CREATE TABLE `rn_option` (
  `req_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `option_detail` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `person_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rn_option`
--

INSERT INTO `rn_option` (`req_id`, `group_id`, `option_id`, `option_detail`, `reason`, `person_id`) VALUES
(1, 0, 2, 'User required to have an account to login ', 'To have personal workspace for each user', 'person_1'),
(1, 0, 3, 'Reduce unnecesssary features to load for login', 'To reduce loading time for login', 'person_1'),
(3, 3, 5, 'Reduce unnecesssary features to load for login', 'To reduce loading time for login', 'person_1');

-- --------------------------------------------------------

--
-- Table structure for table `rn_user`
--

CREATE TABLE `rn_user` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rn_vote`
--

CREATE TABLE `rn_vote` (
  `req_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `userr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `role`) VALUES
(1, 'Top Management'),
(2, 'Project Manager'),
(3, 'System Analyst'),
(4, 'Requirement Engineering'),
(5, 'Programmer'),
(6, 'Stakeholder'),
(7, 'User');

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
(43, 'Adni ', 'Manager'),
(44, 'Awa', 'Managerr');

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
(30, 'Q01', 'Do not use shall', 'Farhah ', '2021-02-07', 'Melisa', '2021-02-07'),
(31, 'F01', 'The system shall be', 'Me', '2021-02-23', 'Yo', '2021-02-23'),
(32, 'F01', 'The system shall be', 'Me', '2021-02-23', 'Yo', '2021-02-23'),
(33, 'F01', 'wee', 'aaa', '2021-03-13', 'aaa', '2021-03-12'),
(34, 'F01', 'as', 'as', '2021-03-10', 'sa', '2021-02-20');

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
(12, 'Choose requirement', '', '', '', '', '0000-00-00', '', '0000-00-00'),
(13, 'F01', 'sasa', 'sas', '', 'sa', '2021-02-12', 'sas', '2021-02-25');

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
-- Indexes for table `checklist1`
--
ALTER TABLE `checklist1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist2`
--
ALTER TABLE `checklist2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist3`
--
ALTER TABLE `checklist3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createproject`
--
ALTER TABLE `createproject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependant`
--
ALTER TABLE `dependant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elicitation`
--
ALTER TABLE `elicitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection1`
--
ALTER TABLE `inspection1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection2`
--
ALTER TABLE `inspection2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection3`
--
ALTER TABLE `inspection3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
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
-- Indexes for table `rn_user`
--
ALTER TABLE `rn_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `rn_vote`
--
ALTER TABLE `rn_vote`
  ADD PRIMARY KEY (`option_id`,`userr_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklist1`
--
ALTER TABLE `checklist1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `checklist2`
--
ALTER TABLE `checklist2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checklist3`
--
ALTER TABLE `checklist3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `createproject`
--
ALTER TABLE `createproject`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `elicitation`
--
ALTER TABLE `elicitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inspection1`
--
ALTER TABLE `inspection1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inspection2`
--
ALTER TABLE `inspection2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection3`
--
ALTER TABLE `inspection3`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rn_issue`
--
ALTER TABLE `rn_issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rn_option`
--
ALTER TABLE `rn_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rq_main`
--
ALTER TABLE `rq_main`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rvp1`
--
ALTER TABLE `rvp1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `rvp2`
--
ALTER TABLE `rvp2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rvp3`
--
ALTER TABLE `rvp3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
