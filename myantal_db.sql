-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 06:18 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myantal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `logo`, `company_name`, `email`, `phone_no`, `password`, `company_type`, `company_website`, `role_id`) VALUES
(1, 'we.jpg', 'Inno Lab', 'innolab@gmail.com', '09123456789', '12345678', 'Youth Orgination', 'innolab.com', 3),
(2, 'aaa.jpg', 'ESC Myanmar', 'esc@gmail.com', '09123456789', '12345678', 'Youth Orgination', 'escmyanmar.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `companyjob`
--

CREATE TABLE `companyjob` (
  `cj_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `requirement` text COLLATE utf8_unicode_ci,
  `benefit` text COLLATE utf8_unicode_ci,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jobfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `jt_id` int(11) DEFAULT NULL,
  `jc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`, `text`, `requirement`, `benefit`, `gender`, `salary`, `region`, `location`, `jobfile`, `post_date`, `jt_id`, `jc_id`) VALUES
(1, 'aa', 'bb bb\r\nbb\r\nbb\r\nbb', 'cc\r\ncc\r\ncc', 'dd\r\ndd', '8', '80', 'yy', 'zz', '4-CSS_ADVANCED.pdf', '2020-11-28', 1, 5),
(2, 'hello', 'm,jslajilad;aljfa;ieeojalsl;anf;', 'hello', 'world', '2', '50', 'hello', 'world', '7-Grid.pdf', '2020-11-28', 4, 2),
(3, 'Web Dev', 'ojaejoa;j;aoeje;ojojdowjowjeojwoej', 'hijklmnopoqwejqpeuew', 'qrstuvwxyz', 'male/female 3 posts', '70', 'Ygn', 'ygn', '4-CSS_ADVANCED.pdf', '2020-12-03', 4, 1),
(4, 'Network Engineer', 'Responsibilities\r\n\r\nTrain team members and fellow employees. \r\nEstablish rules and procedures to enable the proper implementation of IT systems. \r\nDiagnose and provide solutions to recurring problems that require special attention. \r\nSave and secure data and software. \r\nInstallation, Support and maintain the IT Infrastructure.\r\nStrong analytical and troubleshooting skills.\r\nResearch and recommend new technology and products.\r\nInitiative, active and independent in resolving problems.\r\nMaintain IT Invenroties.\r\nAbility to work efficiently and effectively as Independent personnel and team member.', 'Job Requirements\r\n\r\nDegrees in Computer Science, Information Technology or related field (other degree holders with relevant job experience is also acceptable)\r\n3- 4 years of prior IT experience. Prior experience in working for an enterprise company or financial institutions are an added advantage.\r\nHands on experience with Wired and Wireless networking, PC and server virtualization software, virus protection, backup systems\r\nHaving skills about network infrastructure consisting of LAN, WAN and Firewall implementation, operating and maintaining IT infrastructure\r\nCCNP, MCSA/MCSE , VCP are preferred \r\nKnowledge MySQL , SQL Server administration\r\nStrong documentation skills\r\nFluent in English\r\nWilling to travel', 'Performance Based Yearly increments and bonus.\r\nAttractive Salary Package.', 'Male/Female', '90', 'Yangon', 'Myanmar - Yangon', '7-Grid.pdf', '2020-12-04', 1, 1),
(5, 'Senior Developers/Team Lead', 'â€¢ Designing, implementing, and maintaining Java applications\r\nâ€¢ Delivering high availability and performance\r\nâ€¢ Contributing in all phases of the development lifecycle\r\nâ€¢ Writing well-designed, efficient, and testable code\r\nâ€¢ Conducting software analysis, programming, testing, and debugging\r\nâ€¢ Managing Java and Java EE application development\r\nâ€¢ Ensuring designs comply with specifications\r\nâ€¢ Preparing and producing releases of software components\r\nâ€¢ Transforming requirements into stipulations\r\nâ€¢ Support continuous improvement Investigating alternatives and technologies\r\nâ€¢ Presenting for architectural review\r\nâ€¢ deliver complex web and mobile applications with many integrations and channels.\r\nâ€¢ API development on backend.\r\nâ€¢ rapid prototyping and continuous development & improvement to deliver high quality products.\r\nâ€¢ maintain high quality codes with proper design, documentation, version management, release management.\r\nâ€¢ Software maintenance:\r\nâ€¢ Providing software updates\r\nâ€¢ Ensuring all hardware specs are met\r\nâ€¢ Adding new features\r\nâ€¢ Preparing End User Documentation and Training\r\nâ€¢ Maintaining an active testing environment\r\nâ€¢ Looking for code smells and optimizing code\r\nâ€¢ Identifying other programs that could enhance current systems.', 'â€¢ Bachelor Degree in Computer Science or equivalent.\r\nâ€¢ Minimum 2 Years experiences in of Spring 5.x Spring Boot & Spring Cloud framework and familiar with Open Source technologies like Kafka, Apache Ignite, gRPC & JMH.\r\nâ€¢ Good programming knowledge and skills in hands-on experience in Java, J2EE/JEE, Oracle, SQL/ PLSQL, and XML.\r\nâ€¢ HTML5, Modular design, Angular.js or react.js and open source JS framework.\r\nâ€¢ Experience with monitoring tools (e.g. EFK, Prometheus, Grafana)\r\nâ€¢ Domain knowledge of Financial Clearing and Payment Systems is a plus.\r\nâ€¢ Willing to learn new technologies, skills and knowledge\r\nâ€¢ Willing to work smart, work hard and overtime to complete assignments when needed.\r\nâ€¢ Ability to work and cope with challenges and under pressure to meet targets.', ' Rewards for over performance', 'Male/Female', '80', 'Myanmar ', 'Yangon', '4-CSS_ADVANCED.pdf', '2020-12-04', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory`
--

CREATE TABLE `jobcategory` (
  `jc_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jc_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobcategory`
--

INSERT INTO `jobcategory` (`jc_id`, `photo`, `jc_name`) VALUES
(1, 'a.png', 'Accounting & Finance'),
(2, 'ma.png', 'Sale & Marketing'),
(3, 'Sales.png', 'PR & Communication'),
(4, 'HR.png', 'HR'),
(5, 'IT.png', 'IT'),
(6, 'me.png', 'Media & Creative'),
(7, 'e.png', 'Education'),
(8, 'en.png', 'Engineering'),
(9, 'med.png', 'Medical staff'),
(10, 'Tourism.png', 'Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE `jobtype` (
  `jt_id` int(11) NOT NULL,
  `jt_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`jt_id`, `jt_name`, `Duration`) VALUES
(1, 'Full time', '-'),
(4, 'Freelance', '-'),
(5, 'Internship', '-'),
(6, 'Test', '<ul><li>apple</li><li>grape</li></ul>'),
(7, 'Freelance', '<ol><li>aa</li><li>bb</li><li>cc</li><li>dd</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CV` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `phone_no`, `password`, `CV`, `role_id`) VALUES
(1, 'su', 'su@gmail.com', '09234567', '363eb224f6ff8d3c5163a8805222acbf939a65b3', '4-CSS_ADVANCED.pdf', 2),
(2, 'aye', 'aye@gmail.com', '0912345', '329053c86586dfab3facb0478d574a5c888d3ad7', '7-Grid.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userjob`
--

CREATE TABLE `userjob` (
  `uj_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `companyjob`
--
ALTER TABLE `companyjob`
  ADD PRIMARY KEY (`cj_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `jt_id` (`jt_id`),
  ADD KEY `jc_id` (`jc_id`);

--
-- Indexes for table `jobcategory`
--
ALTER TABLE `jobcategory`
  ADD PRIMARY KEY (`jc_id`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`jt_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `userjob`
--
ALTER TABLE `userjob`
  ADD PRIMARY KEY (`uj_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companyjob`
--
ALTER TABLE `companyjob`
  MODIFY `cj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobcategory`
--
ALTER TABLE `jobcategory`
  MODIFY `jc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `jt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userjob`
--
ALTER TABLE `userjob`
  MODIFY `uj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `companyjob`
--
ALTER TABLE `companyjob`
  ADD CONSTRAINT `companyjob_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  ADD CONSTRAINT `companyjob_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`jt_id`) REFERENCES `jobtype` (`jt_id`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`jc_id`) REFERENCES `jobcategory` (`jc_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `userjob`
--
ALTER TABLE `userjob`
  ADD CONSTRAINT `userjob_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `userjob_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
