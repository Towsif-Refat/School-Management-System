-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 09:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `name`, `email`, `address`, `dob`, `gender`, `picture`) VALUES
('1000', 'Mustafizur Rahman', 'mrahaman59@yahoo.com', 'Dhaka, Bangladesh', '13-06-1997', 'Male', 'pp.png');

-- --------------------------------------------------------

--
-- Table structure for table `allsubjects`
--

CREATE TABLE `allsubjects` (
  `id` int(10) NOT NULL,
  `class` int(7) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allsubjects`
--

INSERT INTO `allsubjects` (`id`, `class`, `subject`) VALUES
(1, 6, 'Bangla'),
(2, 6, 'English for Today'),
(3, 6, 'Mathematics'),
(4, 6, 'Science'),
(5, 6, 'Agriculture Studies'),
(6, 7, 'Bangla'),
(7, 7, 'English for Today'),
(8, 7, 'Mathematics'),
(9, 7, 'Science'),
(10, 7, 'Physical Education and Health'),
(11, 8, 'Bangla'),
(12, 8, 'English for Today'),
(13, 8, 'Mathematics'),
(14, 8, 'Science'),
(15, 8, 'Work and Life Oriented Education'),
(16, 9, 'Bangla'),
(17, 9, 'English for Today'),
(18, 9, 'General Math'),
(19, 9, 'Physics'),
(20, 9, 'Botany'),
(21, 10, 'Bangla'),
(22, 10, 'English for Today'),
(23, 10, 'Higher Math'),
(24, 10, 'Chemistry'),
(25, 10, 'Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` varchar(10) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `bname`, `author`, `category`, `status`) VALUES
('10', 'Introduction to Data Mining', ' Tan, Steinbach & Kumar ', 'reference books', 'a'),
('100', 'Harry Potter', 'J. R. R. Tolkien', 'Fantasy', 'a'),
('102', 'The Snow', 'D. John', 'Litereture', 'a'),
('107', '3.0', 'Max Tegmark', 'Technology', 'a'),
('11', 'An Introduction to Statistical Learning: with Appl', 'Gareth James & Daniela Witten', 'reference books', 'a'),
('13', 'Modeling With Data', ' Ben  Klemens', 'reference books', 'a'),
('14', 'Mining the Social Web', 'Matthew A. Russell', 'reference books', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `classeight`
--

CREATE TABLE `classeight` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classeight`
--

INSERT INTO `classeight` (`id`, `subject`, `uid`) VALUES
(1, 'Bangla', '1008'),
(2, 'English for Today', '1008'),
(3, 'Mathematics', ''),
(4, 'Science', ''),
(5, 'Work and Life Orient', '');

-- --------------------------------------------------------

--
-- Table structure for table `classnine`
--

CREATE TABLE `classnine` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classnine`
--

INSERT INTO `classnine` (`id`, `subject`, `uid`) VALUES
(1, 'Bangla', '1008'),
(2, 'English for Today', ''),
(3, 'General Math', ''),
(4, 'Physics', ''),
(5, 'Botany', '');

-- --------------------------------------------------------

--
-- Table structure for table `classseven`
--

CREATE TABLE `classseven` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classseven`
--

INSERT INTO `classseven` (`id`, `subject`, `uid`) VALUES
(1, 'Bangla', '1008'),
(2, 'English for Today', ''),
(3, 'Mathematics', '100'),
(4, 'Science', ''),
(5, 'Physical Education', '');

-- --------------------------------------------------------

--
-- Table structure for table `classsix`
--

CREATE TABLE `classsix` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classsix`
--

INSERT INTO `classsix` (`id`, `subject`, `uid`) VALUES
(1, 'Bangla', '1008'),
(2, 'English for Today', '1008'),
(3, 'Agriculture Studies', '1008'),
(4, 'Mathematics', '1008'),
(5, 'Science', '1008');

-- --------------------------------------------------------

--
-- Table structure for table `classten`
--

CREATE TABLE `classten` (
  `id` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classten`
--

INSERT INTO `classten` (`id`, `subject`, `uid`) VALUES
(1, 'Bangla', '1008'),
(2, 'English for Today', ''),
(3, 'Higher Math', ''),
(4, 'Chemistry', ''),
(5, 'Zoology', '1008');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(600) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `title`, `notice`, `date`) VALUES
(1, 'School Opening', ' According to the new declaration of the govt., the school will open after Eid vacation.', '2021-03-26'),
(2, 'Holiday Due to Mid Shaban', ' It is to notify all concerned that the School will remain closed (including all online classes) on Tuesday, March 30th 2021 due to the Mid-Sha ban(Shab-E-Barat). ', '2021-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `id` int(10) NOT NULL,
  `bid` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `issuedate` varchar(20) NOT NULL,
  `duedate` varchar(20) NOT NULL,
  `returndate` varchar(20) NOT NULL,
  `fine` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `bid`, `uid`, `issuedate`, `duedate`, `returndate`, `fine`) VALUES
(1, '10', '1008', '15-4-2020', '25-4-2020', '27-4-2020', NULL),
(2, '11', '1008', '16-4-2020', '26-4-2020', '23-4-2020', NULL),
(3, '13', '1008', '15-4-2020', '26-4-2020', '26-4-2020', NULL),
(5, '100', '1008', '15-4-2020', '26-4-2020', '26-4-2020', NULL),
(6, '102', '1008', '15-4-2020', '30-4-2020', '30-4-2020', NULL),
(7, '107', '1008', '15-4-2020', '30-4-2020', '30-4-2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(20) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `uid`, `name`, `email`, `dob`, `address`, `gender`, `picture`) VALUES
(1, '1007', 'Asif Ahmed', 'asifahmed@yahoo.com', '2021-04-09', 'Dhaka, Bangladesh', 'Male', 'pp.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(2) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `password`, `type`, `status`) VALUES
('1000', 'admin', 'a', 'a'),
('1001', 'Fahim123@', 's', 'r'),
('1002', 'Towsif123@', 's', 'r'),
('1003', 'Tasnim123@', 's', 'p'),
('1004', 'Asif123@', 't', 'p'),
('1005', 'Nizam123@', 't', 'p'),
('1006', 'Shusmita123@', 't', 'p'),
('1007', 'Asif123@', 'l', 'p'),
('1008', 'TOWSIF@@@@@', 't', 'a'),
('1009', 'towsif@@@@', 't', 'a'),
('1010', 'TOWSIF@@@@', 't', 'p'),
('1011', 'towsif@@@@', 't', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `class` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `mid` float DEFAULT NULL,
  `final` float DEFAULT NULL,
  `tid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `uid`, `class`, `subject`, `mid`, `final`, `tid`) VALUES
(85, '1002', 6, 'Agriculture Studies', 90, 100, '1008'),
(96, '1003', 7, 'Bangla', 90, 100, '1008'),
(97, '1002', 6, 'Bangla', 90, NULL, '1008'),
(98, '1001', 6, 'Bangla', 8, NULL, '1008');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `class` int(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` varchar(5) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `uid`, `name`, `fname`, `mname`, `dob`, `gender`, `class`, `address`, `email`, `balance`, `picture`) VALUES
(1, '1001', 'Mustafizur Rahman', 'Mr Xx', 'Mrs Y', '2021-04-09', 'Male', 6, 'Dhaka, Bangladesh', 'example@gmail.com', '0', 'pp.png'),
(2, '1002', 'Towsif R', 'Mr Xx', 'Mrs Y', '2021-04-09', 'Male', 6, 'Dhaka, Bangladesh', 'example@gmail.com', '0', 'pp.png'),
(3, '1003', 'Tasnim Haider', 'Mr Xx', 'Mrs Y', '2021-04-09', 'Male', 7, 'Nikunja-2,Kuril, Dhaka', 'example@gmail.com', '0', 'pp.png');

-- --------------------------------------------------------

--
-- Table structure for table `studentnote`
--

CREATE TABLE `studentnote` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class` int(10) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentnote`
--

INSERT INTO `studentnote` (`id`, `uid`, `subject`, `class`, `note`) VALUES
(7, '1008', 'Bangla', 6, 'Lecture-10.pdf'),
(8, '1008', 'Bangla', 7, 'Association RulesSupport.pdf'),
(9, '1008', 'Bangla', 6, '18-36245-1(Quiz 2).pdf'),
(10, '1008', 'Bangla', 6, 'New Text Document.txt'),
(11, '1008', 'Bangla', 6, 'New Text Document.txt'),
(12, '1008', 'Bangla', 6, 'New Text Document.txt'),
(13, '1008', 'Bangla', 6, 'New Text Document.txt'),
(14, '1008', 'Bangla', 7, '18-36245-1 Refat,Towsif(Quiz-2).pdf'),
(15, '1008', 'Bangla', 6, 'Screenshot (14).png'),
(16, '1008', 'Bangla', 6, 'Screenshot (13).png'),
(17, '1008', 'Bangla', 6, 'University-reopening-notice-www.ugc.gov.bd.pdf'),
(18, '1008', 'Bangla', 6, 'University-reopening-notice-www.ugc.gov.bd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `studentnotice`
--

CREATE TABLE `studentnotice` (
  `id` int(10) NOT NULL,
  `class` int(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(200) NOT NULL,
  `uid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentnotice`
--

INSERT INTO `studentnotice` (`id`, `class`, `subject`, `title`, `notice`, `uid`) VALUES
(9, 6, 'Agriculture Studies', 'Welcome to Spring 20-21', 'You will be added in MS Teams soon', '1008'),
(10, 6, 'Bangla', 'Quiz 1', 'Lecture 1,2', '1008'),
(11, 6, 'Bangla', 'jhhhhhhhh', 'lecture 1', '1008'),
(12, 6, 'English for Today', 'jhhhhhhhh', 'dddddd', '1008'),
(13, 7, 'Bangla', 'jhhhhhhhh', 'uuuuuuuuuuu', '1008'),
(14, 6, 'English for Today', 'jhhhhhhhh', 'eeeee', '1008');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `balance` float NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `uid`, `name`, `fname`, `mname`, `address`, `email`, `gender`, `dob`, `balance`, `picture`) VALUES
(1, '1004', 'Asif Ahmed', 'Mr Xx', 'Mrs Y', 'Dhaka, Bangladesh', 'example@gmail.com', 'Male', '2021-04-09', 0, 'pp.png'),
(2, '1005', 'Nizam Uddin', 'Mr Xx', 'Mrs Y', 'Dhaka, Bangladesh', 'example@gmail.com', 'Male', '2021-04-09', 0, 'pp.png'),
(3, '1006', 'Shusmita Islam', 'Mr Xx', 'Mrs ', 'Nikunja', 'example@gmail.com', 'Female', '2021-04-09', 0, 'pp.png'),
(4, '1008', 'Towsif  Refat', 'Hafizur Rahman', 'Rebeka Rahman', 'Dhaka11', 'towsifrefat@yahoo.com', 'Male', '2020-07-06', 0, 'Screenshot (15).png'),
(25, '1009', 'Towsif  Refat', 'Hafizur Rahman', 'Rebeka Rahman', 'Dhaka', 'towsifrefat@yahoo.com', 'Male', '2003-04-22', 0, 'screencapture-localhost-Test-School-Teacher-View-TeacherRegistration-php-2021-04-22-14_06_08.png'),
(26, '1010', 'Towsif  Refat', 'Hafizur Rahman', 'Rebeka Rahman', 'Khulna', 'towsifrifat@gmail.com', 'Male', '2003-04-22', 0, 'screencapture-localhost-Test-School-Teacher-View-TeacherRegistration-php-2021-04-22-14_06_08.png'),
(27, '1011', 'Towsif  Refat', 'Hafizur Rahman', 'Rebeka Rahman', 'Dhaka', 'towsifrifat@gmail.com', 'Male', '2003-04-22', 0, 'Screenshot (14).png');

-- --------------------------------------------------------

--
-- Table structure for table `teachernotice`
--

CREATE TABLE `teachernotice` (
  `id` int(10) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachernotice`
--

INSERT INTO `teachernotice` (`id`, `uid`, `title`, `notice`) VALUES
(1, '1004', 'Meeting', 'Meet at sharp 3 pm.'),
(2, '1008', 'Welcome to Spring 20-21', 'You will be added in MS Teams soon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `allsubjects`
--
ALTER TABLE `allsubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `classeight`
--
ALTER TABLE `classeight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `classnine`
--
ALTER TABLE `classnine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `classseven`
--
ALTER TABLE `classseven`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `classsix`
--
ALTER TABLE `classsix`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `classten`
--
ALTER TABLE `classten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `issuebook_ibfk_1` (`bid`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `studentnote`
--
ALTER TABLE `studentnote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `studentnotice`
--
ALTER TABLE `studentnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uid_2` (`uid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `teachernotice`
--
ALTER TABLE `teachernotice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allsubjects`
--
ALTER TABLE `allsubjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `classeight`
--
ALTER TABLE `classeight`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classnine`
--
ALTER TABLE `classnine`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classseven`
--
ALTER TABLE `classseven`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classsix`
--
ALTER TABLE `classsix`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `classten`
--
ALTER TABLE `classten`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issuebook`
--
ALTER TABLE `issuebook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentnote`
--
ALTER TABLE `studentnote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `studentnotice`
--
ALTER TABLE `studentnotice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `teachernotice`
--
ALTER TABLE `teachernotice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD CONSTRAINT `issuebook_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `book` (`bid`),
  ADD CONSTRAINT `issuebook_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `librarian`
--
ALTER TABLE `librarian`
  ADD CONSTRAINT `librarian_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
