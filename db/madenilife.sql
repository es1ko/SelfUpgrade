-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 10:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madenilife`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `university` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `username` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `birthday`, `email`, `phone`, `status`, `university`, `password`, `city`, `username`) VALUES
(1, '2000-05-29', 'kkk@gmail.com', '877777777', 'Student', 'Astana IT', '202cb962ac59075b964b07152d234b70', 'Nur-Sultan', 'Kuka'),
(2, '2002-09-11', 'esiko@gmail.com', '87002701738', 'Student', 'AITU', '202cb962ac59075b964b07152d234b70', 'Astana', 'esiko'),
(3, '2002-11-05', 'shadi@gmail.com', '87002701739', 'Student', 'AITU', '202cb962ac59075b964b07152d234b70', 'Astana', 'Shadi');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(10) NOT NULL,
  `question` text NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `opt3` text NOT NULL,
  `opt4` text NOT NULL,
  `correct_ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct_ans`) VALUES
(1, 'What is the sum of all angles of the triangle?', ' 180', ' 270', ' 360', ' 90', 'a'),
(2, 'What triangle has all equal sides?', ' Acute triangle', ' Equilateral triangle', ' Equal triangle', ' Obtuse triangle', 'b'),
(3, 'What angle does a right angle have?', ' 30', ' 60', ' 90', ' 180', 'c'),
(4, 'How many sides make a triangle?', ' 1', ' 2', ' 3', ' 4', 'c'),
(5, 'What is the sin of 30 degrees?', ' 0', ' 0.5', ' 0.75', ' 1', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);


--
-- Indexes for table `images`
--
ALTER TABLE 'images'
  ADD FOREIGN KEY ('user_id') 
  REFERENCES 'customer'('user_id');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
