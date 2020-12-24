-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 07:08 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `DNR_id` varchar(25) NOT NULL,
  `D_id` int(5) NOT NULL,
  `Nid` varchar(25) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Sex` varchar(7) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Bankacc` varchar(25) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`DNR_id`, `D_id`, `Nid`, `Fname`, `Lname`, `Mail`, `Age`, `Sex`, `Address`, `Phone`, `Bankacc`, `Username`, `Password`) VALUES
('Dnr46', 47, '16301166 ', 'Harry', 'Potter', 'harry.potter@gmail.com', 22, 'Male', 'Hogwards School', 1686047422, '6677', 'harrypotter', '$2y$10$PcWdvY8TCVdVqINwce8pgeS2q/cj7Ffaa8iLBVcN7gzf3tKc6tvd6'),
('Dnr44', 45, '16304132 ', 'Hermione', 'Granger', 'hermione.granger@gmail.com', 21, 'Female', 'Hogwards School', 1704693366, '2243', 'hergranger', '$2y$10$ACMNEUAYxrZ2LohGH37SSeuegGcBYVWlLpSOo/SdVT2ayU7sFQCz.'),
('Dnr45', 46, '16301016 ', 'Sherlock', 'Holmes', 'sherlock.homes@gmail.com', 24, 'Male', '221, Baker Street, London, England', 1997741532, '4434', 'sherlock', '$2y$10$KgHwmWzpZ468vsFFcxgGr.hBqwB5nry6wPWVsJ1VEG7hyj3p0JWf.');

-- --------------------------------------------------------

--
-- Table structure for table `donatesto`
--

CREATE TABLE `donatesto` (
  `serial` int(5) NOT NULL,
  `d_user` varchar(25) NOT NULL,
  `re_id` varchar(25) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatesto`
--

INSERT INTO `donatesto` (`serial`, `d_user`, `re_id`, `Amount`) VALUES
(22, 'harrypotter', 'Rec51', 500),
(23, 'harrypotter', 'Rec52', 600),
(24, 'harrypotter', 'Rec53', 700),
(25, 'harrypotter', 'Rec62', 1000),
(26, 'hergranger', 'Rec55', 200),
(27, 'hergranger', 'Rec56', 300),
(28, 'hergranger', 'Rec58', 500),
(29, 'sherlock', 'Rec51', 100),
(30, 'sherlock', 'Rec52', 200),
(31, 'sherlock', 'Rec55', 500),
(32, 'sherlock', 'Rec56', 300),
(33, 'sherlock', 'Rec58', 200),
(34, 'sherlock', 'Rec59', 700),
(35, 'sherlock', 'Rec60', 800),
(36, 'sherlock', 'Rec61', 900),
(37, 'sherlock', 'Rec62', 100),
(38, 'sherlock', 'Rec53', 250);

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `IR_ID` varchar(25) NOT NULL,
  `INS_ID` varchar(25) NOT NULL,
  `User_id` int(25) NOT NULL,
  `INS_Name` varchar(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`IR_ID`, `INS_ID`, `User_id`, `INS_Name`, `Type`, `Mail`, `Address`, `Phone`) VALUES
('Rec58', 'INS38', 39, 'BRAC', 'NGO', 'brac@gmail.com', '25/1 ', 1774433298),
('Rec59', 'INS39', 40, 'JAGO', 'Volunteer', 'jago@hotmail.com', '79/4', 1675676132),
('Rec60', 'INS40', 41, '10 Minute School', 'Educational ', 'school10@gmail.com', '49/7', 687977890),
('Rec61', 'INS41', 42, 'Red Crescent', 'Blood Donation', 'red.crescent@gmail.com', '45', 1653546354),
('Rec62', 'INS42', 43, 'Grameen', 'Women Empowerment', 'grameen@yahoo.com', 'Kuilarchor', 1819934555);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `R_ID` varchar(25) NOT NULL,
  `Per_ID` varchar(25) NOT NULL,
  `User_id` int(25) NOT NULL,
  `PersonName` varchar(256) NOT NULL,
  `Person_Userid` varchar(25) NOT NULL,
  `PerPhone` int(13) NOT NULL,
  `Age` int(3) NOT NULL,
  `Sex` varchar(25) NOT NULL,
  `Description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`R_ID`, `Per_ID`, `User_id`, `PersonName`, `Person_Userid`, `PerPhone`, `Age`, `Sex`, `Description`) VALUES
('Rec51', 'Per30', 31, 'Edward Collin', 'vampire', 1777445345, 21, 'Male', 'I am an university student'),
('Rec52', 'Per31', 32, 'Tom Riddle', 'voldemort', 1976678454, 50, 'Male', 'Cancer'),
('Rec53', 'Per32', 33, 'Shuva Chowdhury', 'shuva', 1840846389, 18, 'Female', 'In College'),
('Rec55', 'Per34', 35, 'Zaber Mohammad', 'zaber', 1686047005, 21, 'Male', 'Expensive University'),
('Rec56', 'Per35', 36, 'Tony Stark', 'ironman', 1819232177, 30, 'Male', 'For brain operation');

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE `reciever` (
  `Rec_ID` varchar(25) NOT NULL,
  `User_ID` int(7) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Rec_UserName` varchar(25) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Reciever_type` varchar(25) NOT NULL,
  `r_catagory` varchar(25) NOT NULL,
  `Received_amount` int(10) NOT NULL,
  `Rec_Password` varchar(256) NOT NULL,
  `Rec_Bankacc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reciever`
--

INSERT INTO `reciever` (`Rec_ID`, `User_ID`, `FullName`, `Rec_UserName`, `Phone`, `Street`, `Area`, `Reciever_type`, `r_catagory`, `Received_amount`, `Rec_Password`, `Rec_Bankacc`) VALUES
('Rec51', 52, 'Edward Collin', 'vampire', 1777445345, 'Bir Uttam AK Khandakar', 'TB Gate', 'Education', 'Person', 600, '$2y$10$/RObT5pinFF1UEbjxio7z.peqZhM8j3jJXE3qeYE6sMw7KRAUD6HO', '9988'),
('Rec52', 53, 'Tom Riddle', 'voldemort', 1976678454, 'Main Road', 'Donchember, Narayanganj', 'Medical', 'Person', 800, '$2y$10$LN.fUjjGxEZjAQ/GfCOFKOGTy..tv99g1fEqrAFgZpVaKCTE3JDaO', '1122'),
('Rec53', 54, 'Shuva Chowdhury', 'shuva', 1840846389, 'Bir Uttam AK Khandakar', 'Wireless', 'Education', 'Person', 950, '$2y$10$w.YXlN2180SqmNJCkq5kyu6jqZEL47SXN6c.O00ciC4X1TCLHgw4.', '3454'),
('Rec55', 56, 'Zaber Mohammad', 'zaber', 1686047005, 'Bir Uttam AK Khandakar', 'Square', 'Education', 'Person', 700, '$2y$10$aCO0dBTrzXYDhTdXclFuBOTGSW0ySFaB2ftg/JScB3mXnhFGR0PoO', '5476'),
('Rec56', 57, 'Tony Stark', 'ironman', 1819232177, 'Street 11', 'Central Park', 'Medical', 'Person', 600, '$2y$10$7lLmISyhySLVx/8Wp9NoqOGmVVbgRUNZ5Rx9RPDx7flYQQHh.3L.e', '3223'),
('Rec58', 59, 'BRAC', 'brac', 1774433298, 'Sector 3', 'Uttara', 'NGO', 'Institute', 700, '$2y$10$N8lJ2b6p6fD6oGO0091ELO57XwEQewlFgbZlBdd/vAUfRmysD0NZ.', '7766'),
('Rec59', 60, 'JAGO', 'jago', 1675676132, 'Block B', 'Banasree', 'Volunteer', 'Institute', 700, '$2y$10$37WBBO/3MCPLKHc.ByqnOOcG7Hz0VT834FBYE38NtddzKhqo2FRDS', '6776'),
('Rec60', 61, '10 Minute School', 'school10', 687977890, 'Abdul Khaled Road', 'Rampura', 'Educational ', 'Institute', 800, '$2y$10$bWjU0qrtd4mHbOPDVuJEbeemsGViOGDyDwohwrvVb5jVKVe1RiwxK', '4890'),
('Rec61', 62, 'Red Crescent', 'redcrescent', 1653546354, 'Nayeb Road', 'Kafrul', 'Blood Donation', 'Institute', 900, '$2y$10$ibTUZF84PRn9YleSZhz3Ne9eEbJad7MbGP0forKm2HIVMp.3u8d3y', '3230'),
('Rec62', 63, 'Grameen', 'grameen', 1819934555, 'Chairman road', 'Maheshpur, Narshingdi', 'Women Empowerment', 'Institute', 1100, '$2y$10$usxas.6LVlvLUX9c.HNb9..2sHC4NpiNHn2eAIM5JAc0BJAf6e4ey', '9923');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `Nid` (`Nid`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `donatesto`
--
ALTER TABLE `donatesto`
  ADD PRIMARY KEY (`serial`,`d_user`,`re_id`),
  ADD KEY `d_user` (`d_user`),
  ADD KEY `re_id` (`re_id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`INS_ID`),
  ADD KEY `INDEX` (`User_id`),
  ADD KEY `IR_ID` (`IR_ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Per_ID`),
  ADD KEY `INDEX` (`User_id`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD PRIMARY KEY (`Rec_ID`),
  ADD KEY `INDEX` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `D_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donatesto`
--
ALTER TABLE `donatesto`
  MODIFY `serial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `User_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `User_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reciever`
--
ALTER TABLE `reciever`
  MODIFY `User_ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donatesto`
--
ALTER TABLE `donatesto`
  ADD CONSTRAINT `donatesto_ibfk_1` FOREIGN KEY (`d_user`) REFERENCES `donar` (`Username`),
  ADD CONSTRAINT `donatesto_ibfk_2` FOREIGN KEY (`re_id`) REFERENCES `reciever` (`Rec_ID`);

--
-- Constraints for table `institute`
--
ALTER TABLE `institute`
  ADD CONSTRAINT `institute_ibfk_1` FOREIGN KEY (`IR_ID`) REFERENCES `reciever` (`Rec_ID`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `reciever` (`Rec_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
