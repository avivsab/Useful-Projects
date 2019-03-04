-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: אוגוסט 14, 2018 בזמן 11:57 AM
-- גרסת שרת: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cool_school`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_name`, `admin_role`, `phone`, `E-mail`, `password`) VALUES
(1, 'bob marley', 'owner', 51234567, 'bob@constructor', '12345'),
(2, 'bill gates', 'manager', 5155567, 'bill@windows.com', '11111'),
(3, 'jimmy hill', 'sales', 5122567, 'jimmy@carter.com', '111223'),
(4, 'don devito', 'manager', 2212345, 'don@kishot.com', '555669'),
(5, 'faina yerushalmi', 'sales', 55958575, 'fainab@gmail.co.il', '3335589');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `courses`
--

CREATE TABLE `courses` (
  `serial_number` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `courses`
--

INSERT INTO `courses` (`serial_number`, `course_name`, `description`) VALUES
(1, 'waves-surfing', 'Learn in 3 month how to serf like a pro- it\'s the most great hobby you can purchase and you won\'t need to go to gym ever (unless you\'ll choose for your own fun of-course)'),
(2, 'web-surfing', 'Learn in 5 month how to serf like a pro- it\'s the most great hobby you can purchase but you\'ll need to go to gym every day during the course (unless you\'ll choose  that Your back will grab )'),
(3, 'Surfing-USA', ' Learn the fundamentals of the rock & roll  The course include traveling from cost to cost in the US and the Mediterranean costs');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `phone` int(10) UNSIGNED NOT NULL,
  `E-mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- הוצאת מידע עבור טבלה `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `phone`, `E-mail`) VALUES
(1, 'will smith', 525847583, 'abc@gmil.com'),
(2, 'john travolta', 55123678, 'johny@eating.sugar'),
(3, 'ben afflek', 52222212, 'benben@walla.co.il');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- אינדקסים לטבלה `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`serial_number`);

--
-- אינדקסים לטבלה `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `serial_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
