-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 03:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceutopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `Id_Category` int(200) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`Id_Category`, `Name`) VALUES
(1, 'Armor'),
(2, 'Weapon'),
(3, 'Vehicle '),
(4, 'Accessories'),
(5, 'Consumable'),
(6, 'Crafting materials');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Id_Item` int(200) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Item_Null',
  `Atk` int(99) NOT NULL DEFAULT 0,
  `Def` int(99) NOT NULL DEFAULT 0,
  `Int` int(99) NOT NULL DEFAULT 0,
  `Vit` int(99) NOT NULL DEFAULT 0,
  `Cha` int(99) NOT NULL DEFAULT 0,
  `Agi` int(99) NOT NULL DEFAULT 0,
  `Tal` int(99) NOT NULL DEFAULT 0,
  `Hold_or_Sale` enum('H','S') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'H',
  `Category_Id` int(200) NOT NULL,
  `User_Id` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Id_Log` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Date` datetime NOT NULL,
  `Item_Id` int(11) NOT NULL,
  `User_Id_Saler` int(11) NOT NULL,
  `User_Id_Buyer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `Id_Order` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Date` datetime NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Item_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(200) NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('A','M') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'M',
  `Gem` double NOT NULL DEFAULT 0,
  `Img` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Pass`, `Email`, `role`, `Gem`, `Img`) VALUES
(1, 'sarun4144', 'a6d902cffba69e2dd5b168846c87932371d486dc', 'sarun4144@gmail.com', 'M', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`Id_Category`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Id_Item`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Id_Log`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`Id_Order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `Id_Category` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Id_Item` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `Id_Log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `Id_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
