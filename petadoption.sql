-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 06:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petadoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Email`, `Password`, `Confirm`) VALUES
('sonu', 'sonu@gmail.com', '1235', '1235'),
('xyz', 'xyz@gmail.com', '7976', '7976');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`, `number`) VALUES
('Sonu choudhary', 'sonu@gmail.com', 'hello ', 0),
('tona', 'sonu7976635374@gmail.com', 'hello\r\n', 0),
('hgfjy', 'hgtfhgf@gmail.com', 'gtdtgfd', 0),
('srishti', 'srishtimis2003@gmail.com', '', 0),
('hygfvghv', 'utfuy@iyg', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('', '', '', 0),
('Sonu choudhary', 'sonu@gmail.com', '797156515', 0),
('Sonu choudhary', 'sonu@gmail.com', 'hlo', 1234567895),
('Sonu choudhary', 'sonu@gmail.com', 'hlo', 1234567895),
('abc', 'garima@gmail.com', 'hlo', 2147483647),
('tanu', 'tanu@gmail.com', 'hyy', 45613789),
('tanu', 'tanu@gmail.com', 'hyy', 45613789),
('radhe', 'radhe@gmail.com', 'hii', 1234567895),
('sristhi', 'abc@gmail.com', 'hii', 2147483647),
('tona', 'sonu7976635374@gmail.com', 'hehehe', 2147483647),
('bhanu', 'bhanu@gmail.com', '', 0),
('bhanu', 'bhanu@gmail.com', 'hii sonuda', 2147483647),
('bhannu', 'abcd@gmail.com', 'hii sonu', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `donationcollection`
--

CREATE TABLE `donationcollection` (
  `DONAR_NAME` varchar(20) NOT NULL,
  `DONATED_AMOUNT` int(10) NOT NULL,
  `UPI ID` int(50) NOT NULL,
  `phone number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donationcollection`
--

INSERT INTO `donationcollection` (`DONAR_NAME`, `DONATED_AMOUNT`, `UPI ID`, `phone number`) VALUES
('SONU CHOUDHARY', 300, 0, 0),
('SRISTHI MISHRA', 1000, 0, 0),
('sonu', 500, 0, 0),
('sristhi', 65414, 0, 0),
('soun', 789455, 456123, 789456);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `ID` int(10) NOT NULL,
  `ANIMAL` varchar(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `BREED` varchar(50) NOT NULL,
  `AGE` varchar(10) NOT NULL,
  `VACCINATION` varchar(10) NOT NULL,
  `IMAGE` varchar(25) NOT NULL,
  `LIFE SPAN` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`ID`, `ANIMAL`, `NAME`, `BREED`, `AGE`, `VACCINATION`, `IMAGE`, `LIFE SPAN`) VALUES
(1222231, 'DOG', 'SHERU', 'BOXER', 'YOUNG', 'YES', 'IMG-20240102-WA0004.jpg', 12),
(1222232, 'DOG', 'BOB', 'CHIHUAHUA', 'NEWBORN', 'NO', 'IMG-20240102-WA0005.jpg', 9),
(1222233, 'DOG', 'LAMB', 'GREAT DANE', 'YOUNG', 'YES', 'IMG-20240102-WA0006.jpg', 14),
(1222234, 'DOG', 'SUS', 'DACHSHUND', 'NEWBORN', 'NO', 'IMG-20240102-WA0007.jpg', 8),
(1222235, 'DOG', 'HONII', 'BORDER COLLIE', 'YOUNG', 'YES', 'IMG-20240102-WA0008.jpg', 12),
(1222236, 'DOG', 'OFSER', 'BEAGLE', 'NEWBORN', 'YES', 'IMG-20240102-WA0009.jpg', 15),
(1222237, 'DOG', 'SUKHI', 'DOBERMAN', 'OLD', 'YES', 'IMG-20240102-WA0018.jpg', 15),
(1222238, 'DOG', 'JUNO', 'POMERANIAN', 'NEWBORN', 'NO', 'IMG-20240102-WA0017.jpg', 11),
(1222239, 'CAT', 'MILO', 'AMERICAN SHORTHAIR', 'NEWBORN', 'NO', 'IMG-20240101-WA0057.jpg', 8),
(1222240, 'CAT', 'SWAT', 'BENGAL', 'YOUNG', 'YES', 'IMG-20240101-WA0056.jpg', 9),
(1222241, 'CAT', 'JUNE', 'DOMESTIC SHORTHAIR', 'NEWBORN', 'YES', 'IMG-20240101-WA0055.jpg', 6),
(1222242, 'CAT', 'COCO', 'BOMBAY', 'YOUNG', 'YES', 'IMG-20240101-WA0054.jpg', 6),
(1222243, 'CAT', 'FUNN', 'EQYPTIAN MAU', 'NEWBORN', 'NO', 'IMG-20240101-WA0053.jpg', 4),
(1222244, 'CAT', 'DUU', 'DOMESTIC LONG HAIR', 'OLD', 'YES', 'IMG-20240101-WA0052.jpg', 10),
(1222245, 'CAT', 'POP', 'DOMESTIC MEDIUM HAIR', 'NEWBORN', 'NO', 'IMG-20240101-WA0051.jpg', 9),
(1222246, 'CAT', 'GUNNU', 'CYMRIC', 'YOUNG', 'NO', 'IMG-20240101-WA0050.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `image` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registerpage`
--

CREATE TABLE `registerpage` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registerpage`
--

INSERT INTO `registerpage` (`username`, `password`) VALUES
('sonu', 'hgvj'),
('sonu', 'yhg'),
('uugbik', 'uigii'),
('tannu', 'jhv'),
('TANU', 'HGV GJ'),
('gfxdyh', 'iugbik'),
('sristhi', 'jhvj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `Password`, `Email`, `image`) VALUES
('', '78945', '', ''),
('sonnnnnnnn', '1235', 'abcd@gmail.com', ''),
('garima', '12345', 'garima@gmail.com', ''),
('nisha', '1212', 'nisha567@gmail.com', ''),
('sristhi', '1212', 'sm@gmail.com', 'download.jpeg'),
('sonu choudhary', '1234', 'sonu1234@gmail.com', 'download.jpeg'),
('sonu', '77420', 'sonu@gmail.com', 'Dog Rescue Pack 2 Four Individual Sticker _ Zazzle.jpeg'),
('sonuda', '789456', 'sonuda@gmail.com', 'download-removebg-preview.png'),
('sristhi', '456123', 'sristhi@gmail.com', ''),
('xyz', '7976', 'xyz@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1222247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
