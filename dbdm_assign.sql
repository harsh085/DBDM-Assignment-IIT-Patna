-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2023 at 09:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdm_assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `s_ID` varchar(5) NOT NULL,
  `i_ID` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `advisor` VALUES 
('101','10101'),
('102','22222'),
('103','22222'),
('104','45565'),
('105','45565'),
('106','76543'),
('107','76766');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `building` varchar(15) NOT NULL,
  `room_number` varchar(7) NOT NULL,
  `capacity` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`building`, `room_number`, `capacity`) VALUES
('Block 3','101',500),
('Block 9','514',10),
('Block 9','312',70),
('Block 6','100',30),
('Block 6','120',50);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(8) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `credits` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--
INSERT INTO `course` VALUES 
('MA-101','Intro. to Mathematics','Mathematics',4),
('MA-301','Statistics','Mathematics',4),
('MA-399','Computational Mathematics','Mathematics',3),
('CS-101','Intro. to Computer Science','Computer Science Eng',4),
('CS-190','Game Design','Computer Science Eng',4),
('CS-315','Robotics','Computer Science Eng',3),
('CS-319','Image Processing','Computer Science Eng',3),
('CS-347','Database System Concepts','Computer Science Eng',3),
('EE-181','Intro. to Digital Systems','Computer Science Eng',3),
('CE-201','Investment Banking','Civil Eng',3),
('HIS-351','World History','History',3),
('ME-199','Mechanical Eng Video Production','Mechanical Eng',3),
('PHY-101','Physical Principles','Physics',4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(20) NOT NULL,
  `building` varchar(15) DEFAULT NULL,
  `budget` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `building`, `budget`) VALUES
('Mathematics','Block 6',90000.00),
('Computer Science Eng','Block 9',100000.00),
('Electrical Eng','Block 9',85000.00),
('Civil Eng','Block 9',120000.00),
('History','Block 9',50000.00),
('Mechanical Eng','Block 3',80000.00),
('Physics','Block 6',70000.00);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ID` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `salary` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ID`, `name`, `dept_name`, `salary`) VALUES

('10101','Srinivasan','Computer Science Eng',65000.00),
('12121','Sriparna Saha','Civil Eng',90000.00),
('15151','Asif Ekbal','Mechanical Eng',40000.00),
('22222','Einstein','Physics',95000.00),
('32343','Raju','History',60000.00),
('33456','Chandra','Physics',87000.00),
('45565','Joydeep Chandra','Computer Science Eng',75000.00),
('58583','Rajesh','History',62000.00),
('76543','Singh','Civil Eng',80000.00),
('76766','Kavita','Mathematics',72000.00),
('83821',' Arijit Mondal','Computer Science Eng',92000.00),
('98345','Kimoj','Electrical Eng',80000.00);

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

CREATE TABLE `prereq` (
  `course_id` varchar(8) NOT NULL,
  `prereq_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prereq`
--

INSERT INTO `prereq` (`course_id`, `prereq_id`) VALUES
('MA-301', 'MA-101'),
('MA-399', 'MA-101'),
('CS-190', 'CS-101'),
('CS-315', 'CS-101'),
('CS-319', 'CS-101'),
('CS-347', 'CS-101'),
('EE-181','PHY-101');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_id` varchar(8) NOT NULL,
  `sec_id` varchar(8) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `year` decimal(4,0) NOT NULL,
  `building` varchar(15) DEFAULT NULL,
  `room_number` varchar(7) DEFAULT NULL,
  `time_slot_id` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`course_id`, `sec_id`, `semester`, `year`, `building`, `room_number`, `time_slot_id`) VALUES
('MA-101','1','Summer',2019,'Block 9','514','B'),
('MA-301','1','Summer',2020,'Block 9','514','A'),
('CS-101','1','Fall',2019,'Block 3','101','H'),
('CS-101','1','Spring',2020,'Block 3','101','F'),
('CS-190','1','Spring',2019,'Block 9','312','E'),
('CS-190','2','Spring',2019,'Block 9','312','A'),
('CS-315','1','Spring',2020,'Block 6','120','D'),
('CS-319','1','Spring',2020,'Block 6','100','B'),
('CS-319','2','Spring',2020,'Block 9','312','C'),
('CS-347','1','Fall',2019,'Block 9','312','A'),
('EE-181','1','Spring',2019,'Block 9','312','C'),
('CE-201','1','Spring',2020,'Block 3','101','B'),
('HIS-351','1','Spring',2020,'Block 9','514','C'),
('ME-199','1','Spring',2020,'Block 3','101','D'),
('PHY-101','1','Fall',2019,'Block 6','100','A');
-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `tot_cred` decimal(3,0) DEFAULT 23,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `program` varchar(10) NOT NULL,
  `yearofstudy` int(4) NOT NULL,
  `fellowship` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `dept_name`, `tot_cred`, `dob`, `email`, `program`, `yearofstudy`, `fellowship`) VALUES
('101', 'Ramesh', 'Computer Science Eng', '60', '1996-05-22', 'ramesh@mm.com', 'MTech', 2023, 12400),
('102', 'Pankaj', 'Electrical Eng', '100', '1995-09-14', 'pankaj@f.com', 'BTech', 2023, 0),
('103', 'Harshit Nigam', 'Electrical Eng', '60', '1994-07-06', 'h@gm.com', 'BTech', 2022, 0),
('104', 'Suresh', 'Computer Science Eng', '60', '1997-09-04', 'Suresh@gmail.com', 'PHD', 2023, 35000),
('105', 'Mukesh', 'Computer Science Eng', '23', '1998-03-03', 'mukesh@gmail.com', 'MTech', 2022, 12400),
('106', 'Savita', 'Electrical Eng', '23', '1999-03-19', 'savita@gmail.com', 'BTech', 2022, 0),
('107', 'Harsha', 'Computer Science Eng', '23', '2000-01-01', 'Harsh@gm.com', 'BTech', 2023, 2000),
('108', 'Rajat', 'Computer Science Eng', '23', '2000-01-01', 'Rajat@gm.com', 'BTech', 2022, 12000),
('109', 'Rohit', 'Electrical Eng', '23', '2002-01-01', 'Rohit@gm.com', 'MTech', 2023, 2000),
('110', 'Dinesh', 'Computer Science Eng', '23', '2001-01-01', 'Dinesh@gm.com', 'BTech', 2022, 12000),
('111', 'Ashu', 'Computer Science Eng', '23', '2000-01-01', 'Ashu@gm.com', 'PHD', 2023, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` varchar(5) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `sec_id` varchar(8) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `year` decimal(4,0) NOT NULL,
  `grade` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
INSERT INTO `takes` VALUES 
('101','CS-101','1','Fall',2019,'A'),
('101','CS-347','1','Fall',2019,'A-'),
('102','CS-101','1','Fall',2019,'C'),('102','CS-190','2','Spring',2019,'A'),('102','CS-315','1','Spring',2020,'A'),('102','CS-347','1','Fall',2019,'A'),
('103','HIS-351','1','Spring',2020,'B'),('104','CE-201','1','Spring',2020,'C+'),
('105','PHY-101','1','Fall',2019,'B-'),('106','CS-101','1','Fall',2019,'F'),
('106','CS-101','1','Spring',2020,'B+'),('106','CS-319','1','Spring',2020,'B'),
('107','CS-101','1','Fall',2019,'A-'),('107','CS-190','2','Spring',2019,'B+'),
('108','ME-199','1','Spring',2020,'A-'),('108','CS-101','1','Fall',2019,'A'),
('108','CS-319','2','Spring',2020,'A'),('109','EE-181','1','Spring',2019,'C'),
('110','CS-101','1','Fall',2019,'C-'),('110','CS-315','1','Spring',2020,'B'),
('111','MA-101','1','Summer',2019,'A'),('111','MA-301','1','Summer',2020,NULL);
--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` varchar(5) NOT NULL,
  `course_id` varchar(8) NOT NULL,
  `sec_id` varchar(8) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `year` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ID`, `course_id`, `sec_id`, `semester`, `year`) VALUES
('76766','MA-101','1','Summer',2019),('76766','MA-301','1','Summer',2020),('10101','CS-101','1','Fall',2019),('45565','CS-101','1','Spring',2020),('83821','CS-190','1','Spring',2019),('83821','CS-190','2','Spring',2019),('10101','CS-315','1','Spring',2020),('45565','CS-319','1','Spring',2020),('83821','CS-319','2','Spring',2020),('10101','CS-347','1','Fall',2019),('98345','EE-181','1','Spring',2019),('12121','CE-201','1','Spring',2020),('32343','HIS-351','1','Spring',2020),('15151','ME-199','1','Spring',2020),('22222','PHY-101','1','Fall',2019);


-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `time_slot_id` varchar(4) NOT NULL,
  `day` varchar(1) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`time_slot_id`, `day`, `start_time`, `end_time`) VALUES
('A', 'F', '08:00:00', '08:50:00'),
('A', 'M', '08:00:00', '08:50:00'),
('A', 'W', '08:00:00', '08:50:00'),
('B', 'F', '09:00:00', '09:50:00'),
('B', 'M', '09:00:00', '09:50:00'),
('B', 'W', '09:00:00', '09:50:00'),
('C', 'F', '11:00:00', '11:50:00'),
('C', 'M', '11:00:00', '11:50:00'),
('C', 'W', '11:00:00', '11:50:00'),
('D', 'F', '13:00:00', '13:50:00'),
('D', 'M', '13:00:00', '13:50:00'),
('D', 'W', '13:00:00', '13:50:00'),
('E', 'R', '10:30:00', '11:45:00'),
('E', 'T', '10:30:00', '11:45:00'),
('F', 'R', '14:30:00', '15:45:00'),
('F', 'T', '14:30:00', '15:45:00'),
('G', 'F', '16:00:00', '16:50:00'),
('G', 'M', '16:00:00', '16:50:00'),
('G', 'W', '16:00:00', '16:50:00'),
('H', 'W', '10:00:00', '12:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`s_ID`),
  ADD KEY `i_ID` (`i_ID`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`building`,`room_number`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`course_id`,`prereq_id`),
  ADD KEY `prereq_id` (`prereq_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `building` (`building`,`room_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ID`,`course_id`,`sec_id`,`semester`,`year`),
  ADD KEY `course_id` (`course_id`,`sec_id`,`semester`,`year`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`time_slot_id`,`day`,`start_time`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`i_ID`) REFERENCES `instructor` (`ID`) ON DELETE SET NULL,
  ADD CONSTRAINT `advisor_ibfk_2` FOREIGN KEY (`s_ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE SET NULL;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE SET NULL;

--
-- Constraints for table `prereq`
--
ALTER TABLE `prereq`
  ADD CONSTRAINT `prereq_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prereq_ibfk_2` FOREIGN KEY (`prereq_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`building`,`room_number`) REFERENCES `classroom` (`building`, `room_number`) ON DELETE SET NULL;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON DELETE SET NULL;

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`) ON DELETE CASCADE,
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `student` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`course_id`,`sec_id`,`semester`,`year`) REFERENCES `section` (`course_id`, `sec_id`, `semester`, `year`) ON DELETE CASCADE,
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `instructor` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
