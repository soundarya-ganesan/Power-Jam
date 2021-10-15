-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powerjam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(30) NOT NULL,
  `ANAME` varchar(30) NOT NULL,
  `APASS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'soundarya', 'Soundarya@123');

-- --------------------------------------------------------

--
-- Table structure for table `archive_contact`
--

CREATE TABLE `archive_contact` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_contact`
--

INSERT INTO `archive_contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(3, 'Roshini', '9620476368', 'roshini@gmail.com', 'lights', 'wanted to know in detail'),
(5, 'suresh', '9620476325', 'sureshkumarreddy56@gmail.com', 'repair of switches', 'Pls contact me for more info');

-- --------------------------------------------------------

--
-- Table structure for table `archive_customers`
--

CREATE TABLE `archive_customers` (
  `ID` int(30) NOT NULL,
  `RNO` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `MAIL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_customers`
--

INSERT INTO `archive_customers` (`ID`, `RNO`, `NAME`, `LNAME`, `PASSWORD`, `PHONE`, `MAIL`) VALUES
(43, 'S143', 'nikhil', 'nadha', 'Nikhil@1', '8956895764', 'nikhil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `archive_c_events`
--

CREATE TABLE `archive_c_events` (
  `id` int(30) NOT NULL DEFAULT 0,
  `event_number` varchar(30) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` varchar(150) NOT NULL,
  `event_by` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `event_link` varchar(200) NOT NULL,
  `slide` varchar(30) NOT NULL,
  `AID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archive_home_others`
--

CREATE TABLE `archive_home_others` (
  `id` int(30) NOT NULL DEFAULT 0,
  `e_name` varchar(150) NOT NULL,
  `e_heading` varchar(150) NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `latest_event_link` varchar(300) NOT NULL,
  `important_requirement` varchar(150) NOT NULL,
  `requirement_link` varchar(150) NOT NULL,
  `customers` int(30) NOT NULL,
  `electricians` int(30) NOT NULL,
  `phone1` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archive_review`
--

CREATE TABLE `archive_review` (
  `id` int(30) NOT NULL DEFAULT 0,
  `slide_number` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `slide` varchar(30) NOT NULL,
  `AID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_review`
--

INSERT INTO `archive_review` (`id`, `slide_number`, `name`, `date`, `description`, `slide`, `AID`) VALUES
(4, 'S5', 'suresh', 'February,2018', 'good', 'e13.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `archive_slides`
--

CREATE TABLE `archive_slides` (
  `id` int(30) NOT NULL DEFAULT 0,
  `slide_number` varchar(30) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `slide` varchar(100) NOT NULL,
  `page_link` varchar(300) NOT NULL,
  `AID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_slides`
--

INSERT INTO `archive_slides` (`id`, `slide_number`, `heading`, `description`, `slide`, `page_link`, `AID`) VALUES
(4, 'S3', 'sdflj', 'dsjflsj', 'slides/background-1.jpg', 'ljdfslj', 4),
(3, 'S2', 'Computer Hardware', 'Great to work ', 'slides/background-1.jpg', 'http://localhost/kaushalyavikaskendra/about.php', 4),
(5, 'S1', 'Computer Hardware', 'KViK assures job after training. Itâ€™s trainees have been placed in good companies like Eureka Forbes, Reliance Digital, Jeeves Services, Mahindra, Dominoes Pizza, and so on.', 'slides/20150204_171335.jpg', 'pprogrammes.php', 4),
(7, 'S2', 'Computer Hardware', 'Great to get trained here', 'slides/ele3.jpg', 'programmes.php', 4),
(6, 'S1', 'Soft Skills', 'KViK assures job after training. Itâ€™s trainees have been placed in good companies like Eureka Forbes, Reliance Digital, Jeeves Services, Mahindra, Dominoes Pizza, and so on.', 'slides/20150204_171335.jpg', 'programmes.php', 4),
(8, 'S1', 'Venkatesh', '3 months, 6 hours per day, or 7 months of 2 hours per day. ', 'slides/divya.PNG', 'pprogrammes.php', 4),
(9, 'S1', 'skills', '3 months, 6 hours per day, or 7 months of 2 hours per day. ', 'slides/k.JPG', 'ljdfslj', 4),
(11, 'S2', 'Misson', 'KViKâ€™s mission is to provide vocational training in trades which are in demand. It aims to extend its reach to towns and villages where large number of young people desirous of making a decent living needs to be skilled to secure employment in the industry and commerce.', 'slides/ele3.jpg', '', 4),
(10, 'S1', 'KViK', 'Kaushalya Vikas Kendra (KViK) is a centre for skill development.', 'slides/k.JPG', '', 4),
(15, 'S5', 'Skill for Life', 'djfslj ljldfj ldsjf jsdlfjdsljf ', 'slides/ACC.jpg', 'about.php', 4),
(14, 'S4', 'KViK', 'KViK assures job after training. Itâ€™s trainees have been placed in good companies like Eureka Forbes, Reliance Digital, Jeeves Services, Mahindra, Dominoes Pizza, and so on.', 'slides/k.JPG', 'about.php', 4),
(13, 'S3', 'Training Methodology', 'High quality training at reasonable cost is the corner stone on which KViK has built its credibility and reputation.', 'slides/20150204_171335.jpg', 'training_technique.php', 4),
(12, 'S2', 'Misson', 'KViKâ€™s mission is to provide vocational training in trades which are in demand. It aims to extend its reach to towns and villages where large number of young people desirous of making a decent living needs to be skilled to secure employment in the industry and commerce.', 'slides/ele3.jpg', 'about.php', 4),
(17, 'S5', 'Electrician is near you', 'We serve for all the kind of repairs related to electric', 'slides/pj2.jpg', 'repairs.html', 4),
(16, 'S4', 'Electrician for All', 'We serve for all the kind of repairs related to electric', 'slides/pj12.jpg', 'repairs.html', 4),
(21, 'S8', 'soundarya', 'dfssgf', 'slides/pj3.jpg', 'dfdfdg', 4),
(18, 'S5', 'Electrician for All', 'We serve for all the kind of repairs related to electric', 'slides/p12.jpg', 'repairs.html', 4),
(25, 'S3', 'Electrician at Doorsteps', 'We serve for all the kind of repairs related to electric', 'slides/e6.jpg', 'repairs_fixes.php', 4),
(3, 'S3', 'Electrician at Doorsteps', 'We serve for all the kind of repairs related to electric', 'slides/e5.jpg', 'repairs_fixes.php', 4);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `ele_name` varchar(20) NOT NULL,
  `cust_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `ele_name`, `cust_name`) VALUES
(5, 'yeswanth', 'Soundarya'),
(6, 'Ganesh', 'anita'),
(7, 'babu', 'aishu'),
(8, 'murugan ', 'Anusha'),
(9, 'murugan ', 'Soundarya'),
(10, 'ramesh', 'Soundarya'),
(11, 'Murugan', 'Soumya');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'madhura', '7895689867', 'madhura@gmail.com', 'sockets problem', ' \r\n          wanted to know in detail	'),
(2, 'Monisha', '8695732659', 'monisha@gmail.com', 'repair of lights', ' i wanted to know abt tis in detail\r\n          	'),
(4, 'Jeni', '8695732659', 'jeni@gmail.com', 'repair of switches', ' \r\n          service regarding this in detail	');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(30) NOT NULL,
  `RNO` varchar(30) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `MAIL` varchar(20) NOT NULL,
  `newphone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `workingprogress` varchar(10) NOT NULL,
  `ASSIGNEDWORK` varchar(20) NOT NULL,
  `ele_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `RNO`, `NAME`, `LNAME`, `PASSWORD`, `PHONE`, `MAIL`, `newphone`, `address`, `place`, `amount`, `workingprogress`, `ASSIGNEDWORK`, `ele_name`) VALUES
(55, 'S101', 'Soumya', 'Agarwaal', 'Soumya@1', '9620476368', 'soumya@gmail.com', '8958595849', '34, 3rd cross', 'Dinnur', '0', 'no', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `c_events`
--

CREATE TABLE `c_events` (
  `id` int(30) NOT NULL,
  `event_number` varchar(20) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` varchar(150) NOT NULL,
  `event_by` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `event_link` varchar(200) NOT NULL,
  `slide` varchar(30) NOT NULL,
  `AID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_events`
--

INSERT INTO `c_events` (`id`, `event_number`, `event_name`, `event_date`, `event_by`, `description`, `event_link`, `slide`, `AID`) VALUES
(23, 'S1', 'Wiring', '1-1-2020', 'soundarya', 'working on wiring at customers place', 'gallery.php', 'upcoming events/e13.jpg', '1'),
(24, 'S2', 'Fan installtion', '3-1-2020', 'soundarya', 'installing fans at customer place', 'gallery.php', 'upcoming events/e16.jpg', '1'),
(25, 'S3', 'Power supply', '5-1-2020', 'soundarya', 'Checking main power supply', 'gallery.php', 'upcoming events/e14.jpg', '1'),
(26, 'S4', 'Tube lights', '11-1-2020', 'soundarya', 'Installation of tube lights', 'gallery.php', 'upcoming events/e18.jpg', '1'),
(27, 'S5', 'Tv', '16-1-2020', 'soundarya', 'installation of television at customer place', 'gallery.php', 'upcoming events/e20.jpg', '1'),
(28, 'S6', 'Street lights', '25-1-2020', 'soundarya', 'changing street lights.', 'gallery.php', 'upcoming events/e17.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `electrician`
--

CREATE TABLE `electrician` (
  `ID` int(5) NOT NULL,
  `RNO` varchar(30) CHARACTER SET latin1 NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) CHARACTER SET latin1 NOT NULL,
  `PASSWORD` varchar(20) CHARACTER SET latin1 NOT NULL,
  `PHONE` varchar(30) CHARACTER SET latin1 NOT NULL,
  `MAIL` varchar(20) CHARACTER SET latin1 NOT NULL,
  `GENDER` varchar(10) CHARACTER SET latin1 NOT NULL,
  `DOB` date NOT NULL,
  `EDUCATION` varchar(30) NOT NULL,
  `ASSIGNEDWORK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electrician`
--

INSERT INTO `electrician` (`ID`, `RNO`, `FNAME`, `LNAME`, `PASSWORD`, `PHONE`, `MAIL`, `GENDER`, `DOB`, `EDUCATION`, `ASSIGNEDWORK`) VALUES
(43, 'E101', 'Murugan', 'Vel', 'Muru@123', '9620475869', 'murugan@gmail.com', 'male', '1998-03-04', 'Completed Graduation', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `gallery_number` varchar(50) NOT NULL,
  `gallery_name` varchar(300) NOT NULL,
  `gallery_date` varchar(300) NOT NULL,
  `gallery_by` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `FilePath` varchar(300) NOT NULL,
  `FileName` varchar(150) NOT NULL,
  `AID` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_number`, `gallery_name`, `gallery_date`, `gallery_by`, `description`, `FilePath`, `FileName`, `AID`) VALUES
(185, 'S1', 'lights', '1-1-2020', 'soundarya', 'working on lights', 'Upload', 'e12.jpg', 1),
(186, 'S2', 'street lights', '1-1-2020', 'soundarya', 'working on street lights', 'Upload', 'e17.jpg', 1),
(187, 'S3', 'learning connections', '5-1-2020', 'soundarya', 'working on electrical stuff', 'Upload', 'e10.jpg', 1),
(188, 'S4', 'working on wiring', '7-1-2020', 'soundarya', 'working on wiring at customers place', 'Upload', 'e13.jpg', 1),
(189, 'S5', 'working', '11-1-2020', 'soundarya', 'working on wiring at customers place', 'Upload', 'e14.jpg', 1),
(190, 'S6', 'worked', '14-1-2020', 'soundarya', 'fans', 'Upload', 'e16.jpg', 1),
(191, 'S7', 'tubelights', '17-1-2020', 'soundarya', 'tubelights', 'Upload', 'e18.jpg', 1),
(192, 'S8', 'learning ', '20-1-2020', 'soundarya', 'learning', 'Upload', 'e9.jpg', 1),
(193, 'S9', 'learning ', '23-1-2020', 'soundarya', 'learning', 'Upload', 'e11.jpg', 1),
(194, 'S10', 'learning ', '3-2-2020', 'soundarya', 'learning', 'Upload', 'e7.jpg', 1),
(195, 'S10', 'working', '5-2-2020', 'soundarya', 'working on switches', 'Upload', 'e19.jpg', 1),
(196, 'S11', 'installation', '10-2-2020', 'soundarya', 'installation of tv', 'Upload', 'e20.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_others`
--

CREATE TABLE `home_others` (
  `id` int(30) NOT NULL,
  `e_name` varchar(150) NOT NULL,
  `e_heading` varchar(150) NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `latest_event_link` varchar(300) NOT NULL,
  `important_requirement` varchar(150) NOT NULL,
  `requirement_link` varchar(150) NOT NULL,
  `customers` int(5) NOT NULL,
  `electricians` int(5) NOT NULL,
  `phone1` varchar(30) NOT NULL,
  `phone2` varchar(30) NOT NULL,
  `paytm` varchar(30) NOT NULL,
  `googlepay` varchar(30) NOT NULL,
  `slide` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_others`
--

INSERT INTO `home_others` (`id`, `e_name`, `e_heading`, `e_description`, `latest_event_link`, `important_requirement`, `requirement_link`, `customers`, `electricians`, `phone1`, `phone2`, `paytm`, `googlepay`, `slide`) VALUES
(1, 'Latest News', 'Our Features', 'Door step repair withing 30 mins. Protection against damage upto 10000', 'about.html', 'No transportation charges for new customers', 'blog.php', 300, 100, '4029262052', '8987658987', '8987678987', '9890989876', 'programme pics/youtube.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(30) NOT NULL,
  `slide_number` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `slide` varchar(30) NOT NULL,
  `AID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `slide_number`, `name`, `date`, `description`, `slide`, `AID`) VALUES
(13, 'S4', 'Divya', 'Febraury,2020', 'Super friendly.Solved the issue very quick.Thank you power jam.', 'review/divya.PNG', 1),
(14, 'S5', 'Shailendra', 'Febraury,2020', 'Electrician was quick and very efficient with his work.Finished his job within 15 min', 'review/shai.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(30) NOT NULL,
  `slide_number` varchar(30) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `slide` varchar(500) NOT NULL,
  `page_link` varchar(300) NOT NULL,
  `AID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_number`, `heading`, `description`, `slide`, `page_link`, `AID`) VALUES
(27, 'S1', 'Electricians in Hosur', 'We serve for all the kind of repairs related to electric', 'slides/e6.jpg', 'about.php', 1),
(28, 'S2', 'Electricians near you', 'We serve for all the kind of repairs related to electric', 'slides/e5.jpg', 'about.php', 1),
(29, 'S3', 'Skilled Electricians at Doorsteps in minutes', 'We serve for all the kind of repairs related to electric', 'slides/e3.jpg', 'about.php', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `ANAME` (`ANAME`);

--
-- Indexes for table `archive_contact`
--
ALTER TABLE `archive_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive_customers`
--
ALTER TABLE `archive_customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MAIL` (`MAIL`),
  ADD UNIQUE KEY `RNO` (`RNO`);

--
-- Indexes for table `c_events`
--
ALTER TABLE `c_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_number` (`event_number`);

--
-- Indexes for table `electrician`
--
ALTER TABLE `electrician`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_others`
--
ALTER TABLE `home_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slide_number` (`slide_number`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RNO` (`slide_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `c_events`
--
ALTER TABLE `c_events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `electrician`
--
ALTER TABLE `electrician`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
