-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 05:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admint`
--

CREATE TABLE `admint` (
  `no` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admint`
--

INSERT INTO `admint` (`no`, `fullname`, `email`, `pwd`, `image`) VALUES
(1, 'admin.A', 'admin@gmail.com', 'admin7036', 'ZkwxZZKZ.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `no` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `card` bigint(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `cvv` bigint(100) NOT NULL,
  `card1` bigint(100) NOT NULL,
  `month1` varchar(50) NOT NULL,
  `cvv1` int(10) NOT NULL,
  `card2` bigint(100) NOT NULL,
  `month2` varchar(50) NOT NULL,
  `cvv2` int(10) NOT NULL,
  `mobile2` bigint(50) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `martial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`no`, `fullname`, `email`, `pwd`, `mobile`, `gender`, `image`, `card`, `dob`, `month`, `cvv`, `card1`, `month1`, `cvv1`, `card2`, `month2`, `cvv2`, `mobile2`, `email2`, `image1`, `image2`, `image3`, `image4`, `image5`, `age`, `martial`) VALUES
(1, 'akhil.a', 'akhil123@gmail.com', 'akhil123', 8142525886, 'male', 'akhil.jpg', 6084320002834803, '09/24/1997', '04/22', 788, 6084320002839703, '06/23', 371, 6084320002834908, '02/22', 469, 8309758367, 'akhil007@gmail.com', '', '', '', '', '', 30, ''),
(2, 'venky.v', 'venky@gmail.com', 'venky7036', 7989899627, 'male', 'venky.png', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 60, ''),
(3, 'charan.c', 'charan@gmail.com', 'charan7036', 7985478968, 'male', 'vharan.png', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(4, 'james.j', 'james@gmail.com', 'james123', 8142568974, 'male', 'download.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(5, 'joseph.j', 'joseph@gmail.com', 'joseph123', 8124578955, 'male', 'download (1).jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(6, 'rakul.r', 'rakul@gmail.com', 'rakul1234', 8745896585, 'female', 'download (2).jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', 'download (2).jpg', '', '', '', '', 0, ''),
(7, 'hansika.h', 'motwani@gmail.com', 'hansika123', 8124789598, 'female', '220px-Hansika_Motwani_celebrates_her_birthday_at_Arth_Bar_(06).jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(8, 'ramulamma.r', 'ramulamma@gmail.com', 'ramu1234', 8475968584, 'male', 'foreground.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(9, 'karthimahesh', 'karthi@gmail.com', 'karthi123', 8124589688, 'male', 'mahesh.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 45, ''),
(10, 'shakir.s', 'shakira@gmail.com', 'shakira123', 8798448768, 'female', 'edit_1.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(11, 'steve.s', 'stevejobs@gmail.com', 'steve', 8457965895, 'male', '41dKkez-1rL._SX326_BO1,204,203,200_.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(12, 'Bharath Simha.Reddy', 'rbharath773@gmail.com', '7036bsr', 7036093357, 'male', 'WIN_20181017_12_06_31_Pro.jpg', 0, '09/24/1997', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 21, 'Single'),
(13, 'hari.shankar', 'harishankar@gmail.com', 'hari123', 9856874589, 'male', 'iphone 03.09 051.JPG', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(14, 'chaitanya.c', 'chaitanya@gmail.com', 'chaitu', 7989584689, 'male', 'iphone 03.09 143.JPG', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 21, 'single'),
(15, 'surya.s', 'surya@gmail.com', 'surya1234', 8124589685, 'male', '10606365_1598965543664939_8187199463784025872_n.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(16, 'vishal.v', 'vishal@gmail.com', 'vishal123', 7895847895, 'male', 'vishal-vadapalani-chennai-actors-jagkkl.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(17, 'revanth.r', 'revanth@gmail.com', 'revanth123', 7145892868, 'male', '10606365_1598965543664939_8187199463784025872_n.jpg', 0, '08/20/1997', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 40, 'Married'),
(18, 'chaitu.c', 'chaitu@gmail.com', 'chaitu123', 7589654789, 'male', 'chaitu.png', 0, '02/05/2019', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 35, 'Married'),
(19, 'sampu.s', 'sampu@gmail.com', 'sampu123', 8142569877, 'male', 'sampu.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(20, 'naresh.a', 'naresh@gmail.com', 'naresh7036', 9848562204, 'male', 'allarinaresh.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(21, 'sharwanand.s', 'sharwa@gmail.com', 'sharwa123', 9999000014, 'male', 'sharwa.jpeg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(22, 'ntr.n', 'ntr007@gmail.com', 'ntr1234', 8124589695, 'male', 'ntr.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(23, 'varun.v', 'varun@gmail.com', 'varun123', 9542586985, 'male', 'varundawan.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(24, 'hrithik.h', 'hrithik@gmail.com', 'hrithik123', 9441095689, 'male', 'hrithik.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(25, 'vijay sethu.v', 'vijaysethu@gmail.com', 'vijay7036', 9548796588, 'male', 'vijay sethu.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 28, ''),
(26, 'samantha.ruth', 'ruth@gmail.com', 'prabhu123', 8142568975, 'female', 'samanth.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(27, 'kajal', 'kajal@gmail.com', 'kajal123', 7542568955, 'female', 'kajal.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, ''),
(28, 'sam.s', 'sam@gmail.com', 'ruth123', 8124589665, 'female', 'sam.jpg', 0, '', '', 0, 0, '', 0, 0, '', 0, 0, '', '', '', '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admint`
--
ALTER TABLE `admint`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admint`
--
ALTER TABLE `admint`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
