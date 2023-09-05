-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 05:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Bookname` varchar(100) NOT NULL,
  `Authorname` varchar(100) NOT NULL,
  `Referenceno` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Bookcount` int(255) NOT NULL,
  `Bookimage` varchar(255) NOT NULL,
  `Bookid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Bookname`, `Authorname`, `Referenceno`, `Category`, `Bookcount`, `Bookimage`, `Bookid`) VALUES
('Fairy tale', 'anil', 'a2b2c2', 'Category-2', 22, '1631160345086.jpg', '677'),
('Physics', 'albert', 'h23f4', 'Category-1', 53, 'Intruder image.png', '2332'),
('chemistry', 'mahi', 'h1efw8v', 'Category-4', 63, '6114.jpg', '372'),
('Maths', 'bora', 'h98r3g', 'Category-5', 43, 'Intruder image (1).png', '72'),
('Life is beautiful', 'ravi', '2934jm2', 'Category-3', 100, 'WhatsApp Image 2021-06-13 at 6.51.13 PM.jpeg', '49384'),
('Kantara', 'Rishab shetty', 'lah82', 'Category-2', 23, 'alvaro.morte_lcdp-20210904-0001.jpg', '3984'),
('khaleja', 'trivikram', 'joiey08', 'Category-3', 327, 'alvaro_morte.fp-20210904-0001.jpg', '3093'),
('RRR', 'Rajamoli', 'ioweyr87', 'Category-5', 36, 'alvaromortemx-20210904-0002.jpg', '9834'),
('Oridevuda', 'Vishwak', 'kjdf75', 'Category-4', 73, 'alvaromorte.mylove-20210904-0001.jpg', '9353'),
('maHI', 'mAHI', 'oiie79', 'Category-3', 30, 'wp4537917-alvaro-morte-wallpapers.jpg', '733');

-- --------------------------------------------------------

--
-- Table structure for table `issuerequests`
--

CREATE TABLE `issuerequests` (
  `Userid` varchar(50) DEFAULT NULL,
  `Bookid` varchar(60) DEFAULT NULL,
  `Bookname` varchar(100) DEFAULT NULL,
  `Requestdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Issuedate` timestamp NULL DEFAULT NULL,
  `Returndate` timestamp NULL DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuerequests`
--

INSERT INTO `issuerequests` (`Userid`, `Bookid`, `Bookname`, `Requestdate`, `Issuedate`, `Returndate`, `Status`) VALUES
('o180893', '866', 'Fairy tale', '2022-12-02 18:08:46', NULL, NULL, 'done'),
('o180546', '845', 'Fairy tale', '2022-12-02 18:09:21', NULL, NULL, 'done'),
('o180823', '235', 'Fairy tale', '2022-12-02 18:09:30', NULL, NULL, 'done'),
('o180791', '202', 'Fairy tale', '2022-12-02 18:09:50', NULL, NULL, 'done'),
('o180405', '193', 'Fairy tale', '2022-12-02 18:10:09', NULL, NULL, '0'),
('o180034', '163', 'Fairy tale', '2022-12-02 18:10:21', NULL, NULL, '0'),
('o180932', '881', 'Fairy tale', '2022-12-02 18:10:37', '2022-12-02 18:21:56', NULL, 'pending'),
('o180983', '012', 'Fairy tale', '2022-12-02 18:10:47', '2022-12-02 18:22:45', NULL, 'done'),
('o180981', '943', 'Fairy tale', '2022-12-02 18:11:04', NULL, NULL, 'pending'),
('o180033', '432', 'Fairy tale', '2022-12-02 18:11:13', NULL, NULL, 'pending'),
('o180112', '112', 'Fairy tale', '2022-12-02 18:11:25', NULL, NULL, 'pending'),
('o180394', '712', 'Fairy tale', '2022-12-02 18:11:35', NULL, NULL, 'pending'),
('o180983', '712', 'Fairy tale', '2022-12-03 16:45:54', '2022-12-03 16:48:08', NULL, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Userid` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Type`, `Userid`, `Email`, `Branch`, `Password`) VALUES
('prasad', 'Admin', 'o180640', 'o180640@rguktong.ac.in', 'CSE', 'anilkumar'),
('Jalla', 'Admin', 'o180668', 'o180668@rguktong.ac.in', 'CSE', 'anilkumar'),
('Venu', 'Admin', 'o180669', 'o180669@rguktong.ac.in', 'CSE', 'anilkumar'),
('Anil', 'Admin', 'o180677', 'o180677@rguktong.ac.in', 'CSE', 'anilkumar'),
('Mahi', 'Admin', 'o180688', 'o180688@rguktong.ac.in', 'CSE', 'anilkumar'),
('ramesh', 'Student', 'o180724', 'o180724@rguktog.ac.in', 'cse', 'anilkumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
