-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 08:12 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(2, 'Clive Dela Cruz', 'clive@yahoo.com', 'admin', 'f925916e2754e5e03f75dd58a5733251', '2019-04-11 13:56:38');

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
('Book1', 'Author1', 'ref1', 'Category-1', 1, 'alvaro_morte.fp-20210904-0001.jpg', 'id1'),
('Book2', 'Author2', 'ref2', 'Category-2', 2, 'alvaro.morte_lcdp-20210904-0001.jpg', 'id2'),
('Book3', 'Author3', 'ref3', 'Category-3', 3, 'alvaromortemx-20210904-0002.jpg', 'id3'),
('Book4', 'Author4', 'ref4', 'Category-4', 4, 'alvaromorte.mylove-20210904-0001.jpg', 'id4'),
('Book5', 'Author5', 'ref5', 'Category-5', 5, 'alvaromortemx-20210904-0001.jpg', 'id5');

-- --------------------------------------------------------

--
-- Table structure for table `issuerequests`
--

CREATE TABLE `issuerequests` (
  `Userid` varchar(50) DEFAULT NULL,
  `Bookid` varchar(60) DEFAULT NULL,
  `Bookname` varchar(100) DEFAULT NULL,
  `Requestdate` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `Issuedate` timestamp NULL DEFAULT NULL,
  `Returndate` timestamp NULL DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuerequests`
--

INSERT INTO `issuerequests` (`Userid`, `Bookid`, `Bookname`, `Requestdate`, `Issuedate`, `Returndate`, `Status`) VALUES
('o180677', 'id4', 'Book4', '2023-08-13 15:14:44', '2023-08-13 09:43:29', '2023-08-13 09:44:44', 'returned'),
('', '', '', '2023-08-13 15:31:00', NULL, NULL, 'pending'),
('o180669', 'id3', 'Book3', '2023-08-13 16:30:55', NULL, NULL, 'pending');

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
('prabhu', 'Student', 'o170677', 'prabhu@gmail.com', 'cse', '1234'),
('prasad', 'Admin', 'o180640', 'o180640@rguktong.ac.in', 'CSE', 'anilkumar'),
('samba', 'Student', 'o180666', 'samba@gmail.com', 'cse', 'anilkumar'),
('Jalla', 'Admin', 'o180668', 'o180668@rguktong.ac.in', 'CSE', 'anilkumar'),
('Venu', 'Admin', 'o180669', 'o180669@rguktong.ac.in', 'CSE', 'anilkumar'),
('Anil', 'Admin', 'o180677', 'o180677@rguktong.ac.in', 'CSE', 'anilkumar'),
('Mahi', 'Admin', 'o180688', 'o180688@rguktong.ac.in', 'CSE', 'anilkumar'),
('ramesh', 'Student', 'o180724', 'o180724@rguktog.ac.in', 'cse', 'anilkumar'),
('sita', 'Student', 'o180777', 'sita@gmail.com', 'cse', 'anilkumar'),
('loki', 'Student', 'o180888', 'loki@gmail.com', 'cse', 'loki'),
('chandu', 'Student', 'o180998', 'chandu@gmail.com', 'cse', 'anilkumar'),
('vani', 'Student', 'o180999', 'vanimallem031@gmail.com', 'cse', 'anilkumar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
