-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 04:47 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workspace_booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Administrator_id` int(10) NOT NULL,
  `Building_name` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Administrator_id`, `Building_name`) VALUES
(2, 'EEEL'),
(10, 'Mackimmie');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Booked_Room` varchar(26) NOT NULL,
  `timeslot` varchar(26) NOT NULL,
  `Email` varchar(26) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Booked_Room`, `timeslot`, `Email`, `ID`, `date`) VALUES
('TFDL100', '8:00AM-9:00AM', 'k@gmail.com', '1234', '2022-12-05'),
('TFDL100', '9:00AM-10:00AM', 'john@gmail.com', '12345667', '2022-12-05'),
('TFDL100', '8:00AM-9:00AM', 'john@gmail.com', '123456899', '2022-12-24'),
('TFDL100', '1:00PM-2:00PM', 'j@gmail.com', '123', '2022-12-05'),
('TFDL101', '4:00PM-5:00PM', 'tiendat.do@ucalgary.ca', '0000', '2022-12-05'),
('TFDL101', '10:00AM-11:00AM', 'johnydo448@gmail.com', '300', '2022-12-05'),
('Eng100', '8:00AM-9:00AM', 'johnydo448@gmail.com', '0000', '2022-12-31'),
('Mackimmie100', '8:00AM-9:00AM', 'johnydo448@gmail.com', '0', '2022-12-05'),
('Mackimmie100', '9:00AM-10:00AM', 'tiendat.do@ucalgary.ca', '90', '2022-12-05'),
('EEEL101', '12:00PM-1:00PM', 'johnydo448@gmail.com', '55', '2022-12-19'),
('EEEL101', '1:00PM-2:00PM', 't@gmail.com', '22', '2022-12-19'),
('ICT101', '4:00PM-5:00PM', 'johnydo448@gmail.com', '89', '2022-12-05'),
('ICT101', '3:00PM-4:00PM', 'johnydo448@gmail.com', '76', '2022-12-05'),
('TFDL101', '', '', '', '2022-12-06'),
('Eng102', '3:00PM-4:00PM', 'example@gmail.com', '0987', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `campus_building`
--

CREATE TABLE `campus_building` (
  `Bname` varchar(26) NOT NULL,
  `Building_number` int(5) NOT NULL,
  `Address` varchar(26) NOT NULL,
  `Campus` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campus_building`
--

INSERT INTO `campus_building` (`Bname`, `Building_number`, `Address`, `Campus`) VALUES
('EEEL', 6, '750 Campus Drive NW', 'University of Calgary'),
('Eng', 4, '444 Collegiate Boulevard N', 'University of Calgary'),
('ICT', 5, '856 Campus Place NW', 'University of Calgary'),
('Mackimmie', 3, '2500 University Dr. NW', 'University of Calgary'),
('MTH', 7, '2750 University Way NW', 'University of Calgary'),
('SH', 8, '215 Haskayne Place NW', 'University of Calgary'),
('TFDL', 1, '410 University Ct NW, Calg', 'University of Calgary'),
('TI', 2, '434 Collegiate Blvd NW, Ca', 'University of Calgary');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dcode` int(10) NOT NULL,
  `Dname` varchar(15) NOT NULL,
  `Doffice` varchar(10) NOT NULL,
  `Dean` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dcode`, `Dname`, `Doffice`, `Dean`) VALUES
(0, 'Open Studies ', 'Mackimmie', 'OpenStudiesDean'),
(1, 'Computer Scienc', 'Math Scien', 'ComputerScienceDean');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_relation`
--

CREATE TABLE `feedback_relation` (
  `Feedback_number` int(10) NOT NULL,
  `Email` varchar(26) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_relation`
--

INSERT INTO `feedback_relation` (`Feedback_number`, `Email`, `comment`) VALUES
(1, 'johnydo@ucalgary.ca', 'Room TFDL100 is great during reading break'),
(2, 'student1@ucalgary.ca', 'TFDL102 have nice computer accessories!'),
(3, 'student3@ucalgary.ca', 'TFDL103 is a great collaborative space'),
(4, 'logan@ucalgary.ca', 'Mackimmie is a great study workspace'),
(5, 'tiendat.do@ucalgary.ca', 'Eng was a great place!'),
(6, 'test1@gmail.com', 'Love how tfdl is open late!'),
(23, 'johnydo448@gmail.com', 'ICT101 was a great workspace'),
(29, 'stu@gmail.com', 'ICT has great coffee shops to get your studies going!'),
(39, 'stu@gmail.com', 'example feedback'),
(55, 'example@gmail.com', 'TFDL is quite busy during midterm time'),
(90, 'johnydo448@gmail.com', 'Test'),
(99, 'johnb@gmail.com', 'TI100 was a good workspace');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up`
--

CREATE TABLE `follow_up` (
  `BookRoom_ID` varchar(10) NOT NULL,
  `QR code` int(10) NOT NULL,
  `Email` varchar(26) NOT NULL,
  `Booked_Unique_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow_up`
--

INSERT INTO `follow_up` (`BookRoom_ID`, `QR code`, `Email`, `Booked_Unique_Code`) VALUES
('EEEL100', 9999, 'stu@gmail.com', 'EEEL100B1'),
('ICT100', 9997, 'stu3@gmail.com', 'ICT100B1'),
('TFDL101', 9998, 'stu2@gmail.com', 'TFDL101B1');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `Email` varchar(26) NOT NULL,
  `First_name` varchar(26) NOT NULL,
  `Middle_name` varchar(26) NOT NULL,
  `Last_name` varchar(26) NOT NULL,
  `Phone_number` int(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `Calendar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`Email`, `First_name`, `Middle_name`, `Last_name`, `Phone_number`, `ID`, `Calendar`) VALUES
('lib@gmail.com', 'libfirst', 'libmiddle', 'liblast', 987456321, 0, '0000-00-00'),
('lib2@gmail.com', 'Lib2', 'Lib2middle', 'Lib2last', 321456879, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(26) NOT NULL,
  `password` varchar(26) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('ad@gmail.com', '123', 'Admin'),
('lib@gmail.com', '123', 'Librarian'),
('stu@gmail.com', '123', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Calendar` date NOT NULL,
  `Month` int(2) NOT NULL,
  `Day` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `Hour` int(2) NOT NULL,
  `Minute` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `UCID` varchar(10) NOT NULL,
  `Email` varchar(26) NOT NULL,
  `Dcode` int(10) NOT NULL,
  `Dname` varchar(15) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`UCID`, `Email`, `Dcode`, `Dname`, `First_name`, `Middle_name`, `Last_name`, `Phone_number`) VALUES
('000', '0@ucalgary.ca', 0, 'Open Studies', 'First0', 'Middle0', 'Last0', 123456789),
('001', 'stu@gmail.com', 1, 'Computer Scienc', 'Stu', 'Middle ', 'StuLast', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `workspace_room`
--

CREATE TABLE `workspace_room` (
  `RoomID` varchar(26) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Room_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Bname` varchar(26) NOT NULL,
  `Capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workspace_room`
--

INSERT INTO `workspace_room` (`RoomID`, `Room_number`, `Bname`, `Capacity`) VALUES
('EEEL100', '100', 'EEEL', 5),
('EEEL101', '101', 'EEEL', 5),
('EEEL102', '102', 'EEEL', 5),
('EEEL103', '103', 'EEEL', 20),
('EEEL104', '104', 'EEEL', 10),
('Eng100', '100', 'Eng', 2),
('Eng102', '102', 'Eng', 2),
('Eng103', '103', 'Eng', 3),
('ICT100', '100', 'ICT', 8),
('ICT101', '101', 'ICT', 10),
('ICT102', '102', 'ICT', 5),
('ICT103', '103', 'ICT', 10),
('Mackimmie100', '100', 'Mackimmie', 4),
('Mackimmie101', '101', 'Mackimmie', 4),
('Mackimmie102', '102', 'Mackimmie', 90),
('MTH100', '100', 'MTH', 2),
('SH102', '102', 'SH', 20),
('TFDL100', '100', 'TFDL', 4),
('TFDL101', '101', 'TFDL', 4),
('TFDL102', '102', 'TFDL', 4),
('TFDL103', '103', 'TFDL', 4),
('TFDL104', '104', 'TFDL', 4),
('TFDL200', '200', 'TFDL', 4),
('TFDL201', '201', 'TFDL', 4),
('TI100', '100', 'TI', 6),
('TI101', '101', 'TI', 6),
('TI200', '200', 'TI', 4),
('TI201', '201', 'TI', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Administrator_id`),
  ADD UNIQUE KEY `Building_name` (`Building_name`);

--
-- Indexes for table `campus_building`
--
ALTER TABLE `campus_building`
  ADD PRIMARY KEY (`Bname`),
  ADD UNIQUE KEY `Address` (`Address`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dcode`),
  ADD UNIQUE KEY `Dname` (`Dname`);

--
-- Indexes for table `feedback_relation`
--
ALTER TABLE `feedback_relation`
  ADD PRIMARY KEY (`Feedback_number`);

--
-- Indexes for table `follow_up`
--
ALTER TABLE `follow_up`
  ADD PRIMARY KEY (`BookRoom_ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Booked_Unique_Code` (`Booked_Unique_Code`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Calendar` (`Calendar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Calendar`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`UCID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Dcode` (`Dcode`),
  ADD KEY `Dname` (`Dname`);

--
-- Indexes for table `workspace_room`
--
ALTER TABLE `workspace_room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `Bname` (`Bname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Calendar`) REFERENCES `librarian` (`Calendar`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Dname`) REFERENCES `department` (`Dname`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `workspace_room`
--
ALTER TABLE `workspace_room`
  ADD CONSTRAINT `workspace_room_ibfk_1` FOREIGN KEY (`Bname`) REFERENCES `campus_building` (`Bname`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
