-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 03:38 PM
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
  `Img` mediumblob DEFAULT NULL,
  `Hold_or_Sell` enum('H','S') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'H',
  `Category_Id` int(200) NOT NULL,
  `Rarity_Id` int(200) NOT NULL,
  `User_Id` int(200) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Id_Item`, `Name`, `Atk`, `Def`, `Int`, `Vit`, `Cha`, `Agi`, `Tal`, `Img`, `Hold_or_Sell`, `Category_Id`, `Rarity_Id`, `User_Id`) VALUES
(1, 'Space gurdian', 0, 20, 5, 15, 3, 3, 0, NULL, 'H', 1, 1, 1),
(2, 'Space gurdian', 0, 38, 8, 25, 5, 5, 0, NULL, 'H', 1, 2, 0),
(3, 'Space gurdian', 0, 56, 11, 35, 0, 7, 7, NULL, 'H', 1, 3, 0),
(4, 'Space gurdian', 0, 74, 14, 45, 0, 7, 7, NULL, 'H', 1, 4, 0),
(5, 'Cyperpunk', 0, 10, 0, 30, 0, 5, 8, NULL, 'H', 1, 1, 0),
(6, 'Cyperpunk', 0, 15, 0, 40, 0, 8, 11, NULL, 'H', 1, 2, 0),
(7, 'Cyperpunk', 0, 20, 0, 50, 0, 11, 14, NULL, 'H', 1, 3, 0),
(8, 'Cyperpunk', 0, 25, 0, 60, 0, 14, 17, NULL, 'H', 1, 4, 0),
(9, 'Sorcerer', 0, 0, 20, 10, 15, 5, 15, NULL, 'H', 1, 1, 0),
(10, 'Sorcerer', 0, 0, 34, 13, 20, 8, 18, NULL, 'H', 1, 2, 0),
(11, 'Sorcerer', 0, 0, 48, 16, 20, 11, 21, NULL, 'H', 1, 3, 0),
(12, 'Sorcerer', 0, 0, 61, 19, 20, 14, 24, NULL, 'H', 1, 4, 0),
(13, 'Scraper', 0, 10, 3, 10, 2, 15, 0, NULL, 'H', 1, 1, 0),
(14, 'Scraper', 0, 13, 5, 15, 4, 20, 0, NULL, 'H', 1, 2, 0),
(15, 'Scraper', 0, 16, 7, 20, 6, 25, 0, NULL, 'H', 1, 3, 0),
(16, 'Scraper', 0, 19, 10, 25, 8, 30, 0, NULL, 'H', 1, 4, 0),
(17, 'Sniper', 75, 0, 0, 5, 0, 0, 10, NULL, 'H', 2, 1, 0),
(18, 'Sniper', 80, 0, 0, 7, 0, 0, 14, NULL, 'H', 2, 2, 0),
(19, 'Sniper', 85, 0, 0, 7, 0, 0, 18, NULL, 'H', 2, 3, 0),
(20, 'Sniper', 90, 0, 0, 9, 0, 0, 21, NULL, 'H', 2, 4, 0),
(29, 'Pistol', 12, 0, 0, 0, 0, 11, 5, NULL, 'H', 2, 1, 0),
(30, 'Pistol', 15, 0, 0, 0, 0, 14, 7, NULL, 'H', 2, 2, 0),
(31, 'Pistol', 18, 0, 0, 0, 0, 17, 9, NULL, 'H', 2, 3, 0),
(32, 'Pistol', 21, 0, 0, 0, 0, 20, 11, NULL, 'H', 2, 4, 0),
(33, 'SMG', 10, 0, 0, 0, 0, 10, 8, NULL, 'H', 2, 1, 0),
(34, 'SMG', 12, 0, 0, 0, 0, 13, 11, NULL, 'H', 2, 2, 0),
(35, 'SMG', 14, 0, 0, 0, 0, 16, 14, NULL, 'H', 2, 3, 0),
(36, 'SMG', 16, 0, 0, 0, 0, 19, 17, NULL, 'H', 2, 4, 0),
(41, 'Shotgun', 40, 10, 0, 0, 0, 5, 3, NULL, 'H', 2, 1, 0),
(42, 'Shotgun', 72, 16, 0, 0, 0, 9, 7, NULL, 'H', 2, 3, 0),
(43, 'Shotgun', 88, 19, 0, 0, 0, 11, 9, NULL, 'H', 2, 4, 0),
(44, 'Katana', 43, 12, 0, 6, 0, 8, 3, NULL, 'H', 2, 1, 0),
(45, 'Katana', 47, 14, 0, 8, 0, 10, 5, NULL, 'H', 2, 2, 0),
(46, 'Katana', 51, 16, 0, 10, 0, 12, 7, NULL, 'H', 2, 3, 0),
(47, 'Katana', 55, 18, 0, 12, 0, 14, 9, NULL, 'H', 2, 4, 0),
(48, 'Short sword', 32, 5, 0, 3, 0, 8, 3, NULL, 'H', 2, 1, 0),
(49, 'Short sword', 38, 9, 0, 7, 0, 14, 7, NULL, 'H', 2, 3, 0),
(50, 'Short sword', 41, 11, 0, 9, 0, 17, 9, NULL, 'H', 2, 4, 0),
(51, 'Dual blade', 23, 3, 0, 3, 0, 8, 3, NULL, 'H', 2, 1, 0),
(52, 'Dual blade', 26, 5, 0, 5, 0, 11, 5, NULL, 'H', 2, 2, 0),
(53, 'Dual blade', 29, 7, 0, 7, 0, 14, 7, NULL, 'H', 2, 3, 0),
(54, 'Dual blade', 32, 9, 0, 9, 0, 17, 9, NULL, 'H', 2, 4, 0),
(55, 'Shotgun', 50, 12, 0, 0, 0, 7, 5, NULL, 'H', 2, 2, 0),
(59, 'Polarm', 37, 5, 0, 3, 0, 8, 4, NULL, 'H', 2, 1, 0),
(60, 'Polarm', 40, 7, 0, 6, 0, 10, 6, NULL, 'H', 2, 2, 0),
(61, 'Polarm', 43, 9, 0, 9, 0, 12, 8, NULL, 'H', 2, 3, 0),
(62, 'Polarm', 46, 11, 0, 12, 0, 14, 10, NULL, 'H', 2, 4, 0),
(63, 'Hover Cycle', 0, 20, 0, 25, 0, 55, 0, NULL, 'H', 3, 4, 0),
(64, 'Mar crucher', 0, 50, 0, 45, 0, 35, 0, NULL, 'H', 3, 4, 0),
(65, 'Tiger', 90, 95, 0, 90, 0, 20, 0, NULL, 'H', 3, 4, 0),
(66, 'Hover board', 0, 10, 0, 12, 0, 70, 0, NULL, 'H', 3, 4, 0),
(71, 'Bracer Loyalist', 5, 0, 0, 5, 0, 0, 5, NULL, 'H', 3, 1, 0),
(72, 'Bracer Loyalist', 8, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 2, 0),
(73, 'Bracer Loyalist', 11, 0, 0, 11, 0, 0, 11, NULL, 'H', 3, 3, 0),
(74, 'Bracer Loyalist', 14, 0, 0, 14, 0, 0, 14, NULL, 'H', 3, 4, 0),
(79, 'Neckless Sorcerer', 0, 0, 5, 0, 5, 0, 6, NULL, 'H', 3, 4, 0),
(80, 'Neckless Sorcerer', 0, 0, 7, 0, 7, 0, 8, NULL, 'H', 3, 2, 0),
(81, 'Neckless Sorcerer', 0, 0, 9, 0, 9, 0, 10, NULL, 'H', 3, 3, 0),
(82, 'Neckless Sorcerer', 0, 0, 11, 0, 11, 0, 12, NULL, 'H', 3, 4, 0),
(83, 'Belt Sorcerer', 0, 0, 6, 0, 4, 0, 4, NULL, 'H', 3, 1, 0),
(84, 'Belt Sorcerer', 0, 0, 8, 0, 6, 0, 6, NULL, 'H', 3, 2, 0),
(85, 'Belt Sorcerer', 0, 0, 10, 0, 8, 0, 8, NULL, 'H', 3, 3, 0),
(86, 'Belt Sorcerer', 0, 0, 12, 0, 10, 0, 10, NULL, 'H', 3, 4, 0),
(87, 'Face Sorcerer', 0, 0, 6, 4, 3, 0, 2, NULL, 'H', 3, 1, 0),
(88, 'Face Sorcerer', 0, 0, 8, 6, 5, 0, 4, NULL, 'H', 3, 2, 0),
(89, 'Face Sorcerer', 0, 0, 10, 8, 7, 0, 6, NULL, 'H', 3, 3, 0),
(90, 'Face Sorcerer', 0, 0, 12, 10, 9, 0, 8, NULL, 'H', 3, 4, 0),
(91, 'Ring Mist Power', 3, 0, 0, 2, 0, 8, 0, NULL, 'H', 3, 1, 0),
(92, 'Ring Mist Power', 5, 0, 0, 4, 0, 10, 0, NULL, 'H', 3, 2, 0),
(93, 'Ring Mist Power', 7, 0, 0, 6, 0, 12, 0, NULL, 'H', 3, 3, 0),
(94, 'Ring Mist Power', 9, 0, 0, 8, 0, 12, 0, NULL, 'H', 3, 4, 0),
(95, 'Bracer Mist Power', 5, 6, 0, 0, 0, 6, 0, NULL, 'H', 3, 1, 0),
(96, 'Bracer Mist Power', 7, 8, 0, 0, 0, 8, 0, NULL, 'H', 3, 2, 0),
(97, 'Bracer Mist Power', 9, 10, 0, 0, 0, 11, 0, NULL, 'H', 3, 3, 0),
(98, 'Bracer Mist Power', 11, 12, 0, 0, 0, 13, 0, NULL, 'H', 3, 4, 0),
(99, 'Neckless Mist Power', 7, 2, 0, 0, 0, 3, 0, NULL, 'H', 3, 1, 0),
(100, 'Neckless Mist Power', 9, 4, 0, 0, 0, 5, 0, NULL, 'H', 3, 2, 0),
(101, 'Neckless Mist Power', 11, 6, 0, 0, 0, 5, 0, NULL, 'H', 3, 3, 0),
(102, 'Neckless Mist Power', 13, 8, 0, 0, 0, 7, 0, NULL, 'H', 3, 4, 0),
(103, 'Belt Mist Power', 5, 3, 0, 0, 0, 2, 0, NULL, 'H', 3, 1, 0),
(104, 'Belt Mist Power', 7, 5, 0, 0, 0, 4, 0, NULL, 'H', 3, 2, 0),
(105, 'Belt Mist Power', 9, 7, 0, 0, 0, 6, 0, NULL, 'H', 3, 3, 0),
(106, 'Belt Mist Power', 11, 9, 0, 0, 0, 8, 0, NULL, 'H', 3, 4, 0),
(107, 'Face Mist Power', 2, 6, 0, 0, 0, 1, 0, NULL, 'H', 3, 1, 0),
(108, 'Face Mist Power', 4, 8, 0, 0, 0, 3, 0, NULL, 'H', 3, 2, 0),
(109, 'Face Mist Power', 6, 10, 0, 0, 0, 5, 0, NULL, 'H', 3, 3, 0),
(110, 'Face Mist Power', 8, 12, 0, 0, 0, 7, 0, NULL, 'H', 3, 4, 0),
(111, 'MRE bar', 0, 10, 0, 8, 0, 5, 0, NULL, 'H', 5, 1, 0),
(112, 'MRE bar', 0, 14, 13, 0, 0, 8, 0, NULL, 'H', 5, 2, 0),
(113, 'Roasted meat', 8, 0, 0, 6, 0, 0, 4, NULL, 'H', 5, 1, 0),
(114, 'Roasted meat', 13, 0, 0, 11, 0, 0, 9, NULL, 'H', 5, 2, 0),
(115, 'Water', 0, 0, 8, 0, 8, 0, 3, NULL, 'H', 5, 1, 0),
(116, 'Water', 0, 0, 12, 0, 12, 0, 6, NULL, 'H', 5, 2, 0),
(117, 'Medkit', 0, 0, 0, 15, 0, 3, 0, NULL, 'H', 5, 1, 0),
(118, 'Medkit', 0, 0, 0, 20, 0, 6, 0, NULL, 'H', 5, 2, 0),
(119, 'Bandage', 0, 0, 0, 10, 0, 2, 0, NULL, 'H', 5, 1, 0),
(120, 'Bandage', 0, 0, 0, 15, 0, 4, 0, NULL, 'H', 5, 2, 0),
(121, 'Alcohol', 5, 0, 0, 0, 0, 18, 0, NULL, 'H', 5, 1, 0),
(122, 'Alcohol', 10, 0, 0, 0, 0, 25, 0, NULL, 'H', 5, 2, 0),
(123, 'Short sword', 34, 7, 0, 5, 0, 10, 5, NULL, 'H', 2, 2, 0),
(124, 'Ring Loyalist', 3, 0, 0, 3, 0, 0, 3, NULL, 'H', 3, 1, 0),
(125, 'Ring Loyalist', 5, 0, 0, 5, 0, 0, 5, NULL, 'H', 3, 2, 0),
(126, 'Ring Loyalist', 7, 0, 0, 7, 0, 0, 7, NULL, 'H', 3, 3, 0),
(127, 'Ring Loyalist', 9, 0, 0, 9, 0, 0, 9, NULL, 'H', 3, 4, 0),
(128, 'Neckless Loyalist', 8, 0, 0, 2, 0, 0, 2, NULL, 'H', 3, 1, 0),
(129, 'Neckless Loyalist', 10, 0, 0, 4, 0, 0, 4, NULL, 'H', 3, 2, 0),
(130, 'Neckless Loyalist', 12, 0, 0, 6, 0, 0, 6, NULL, 'H', 3, 3, 0),
(131, 'Neckless Loyalist', 14, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 4, 0),
(132, 'Belt Loyalist', 6, 0, 0, 4, 0, 0, 4, NULL, 'H', 3, 1, 0),
(133, 'Belt Loyalist', 8, 0, 0, 6, 0, 0, 6, NULL, 'H', 3, 2, 0),
(134, 'Belt Loyalist', 10, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 3, 0),
(135, 'Belt Loyalist', 12, 0, 0, 10, 0, 0, 10, NULL, 'H', 3, 4, 0),
(136, 'Face Lotalist', 6, 4, 0, 2, 0, 0, 0, NULL, 'H', 3, 1, 0),
(137, 'Face Lotalist', 8, 6, 0, 4, 0, 0, 0, NULL, 'H', 3, 2, 0),
(138, 'Face Lotalist', 10, 8, 0, 6, 0, 0, 0, NULL, 'H', 3, 3, 0),
(139, 'Face Lotalist', 12, 10, 0, 8, 0, 0, 0, NULL, 'H', 3, 4, 0),
(140, 'Ring Junker', 0, 3, 0, 3, 0, 2, 0, NULL, 'H', 3, 1, 0),
(141, 'Ring Junker', 0, 5, 0, 5, 0, 4, 0, NULL, 'H', 3, 2, 0),
(142, 'Ring Junker', 0, 7, 0, 7, 0, 6, 0, NULL, 'H', 3, 3, 0),
(143, 'Ring Junker', 0, 9, 0, 9, 0, 8, 0, NULL, 'H', 3, 4, 0),
(144, 'Bracer Junker', 0, 5, 0, 5, 0, 4, 3, NULL, 'H', 3, 1, 0),
(145, 'Bracer Junker', 0, 7, 0, 7, 0, 6, 5, NULL, 'H', 3, 2, 0),
(146, 'Bracer Junker', 0, 9, 0, 9, 0, 8, 7, NULL, 'H', 3, 3, 0),
(147, 'Bracer Junker', 11, 0, 0, 11, 0, 10, 9, NULL, 'H', 3, 4, 0),
(148, 'Neckless Junker', 0, 0, 0, 10, 0, 5, 0, NULL, 'H', 3, 1, 0),
(149, 'Neckless Junker', 0, 0, 0, 12, 0, 7, 0, NULL, 'H', 3, 2, 0),
(150, 'Neckless Junker', 0, 0, 0, 14, 0, 9, 0, NULL, 'H', 3, 3, 0),
(151, 'Neckless Junker', 0, 0, 0, 14, 0, 11, 0, NULL, 'H', 3, 4, 0),
(152, 'Belt Junker', 0, 0, 0, 8, 0, 4, 0, NULL, 'H', 3, 1, 0),
(153, 'Belt Junker', 0, 0, 0, 10, 0, 6, 0, NULL, 'H', 3, 2, 0),
(154, 'Belt Junker', 0, 0, 0, 12, 0, 8, 0, NULL, 'H', 3, 3, 0),
(155, 'Belt Junker', 0, 0, 0, 14, 0, 10, 0, NULL, 'H', 3, 4, 0),
(156, 'Face Junker', 0, 4, 0, 6, 0, 2, 0, NULL, 'H', 3, 1, 0),
(157, 'Face Junker', 0, 6, 0, 8, 0, 6, 0, NULL, 'H', 3, 2, 0),
(158, 'Face Junker', 0, 8, 0, 10, 0, 6, 0, NULL, 'H', 3, 3, 0),
(159, 'Face Junker', 0, 10, 0, 12, 0, 10, 0, NULL, 'H', 3, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Id_Log` int(11) NOT NULL,
  `Price` double DEFAULT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Item_Id` int(11) NOT NULL,
  `User_Id_Seller` int(11) DEFAULT NULL,
  `User_Id_Buyer` int(11) DEFAULT NULL,
  `State` enum('Cancel','Sold','Sell','Claim') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `Id_Order` int(11) NOT NULL,
  `Price` double NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `User_Id` int(11) NOT NULL,
  `Item_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rarity`
--

CREATE TABLE `rarity` (
  `Rarity` int(200) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rarity`
--

INSERT INTO `rarity` (`Rarity`, `Name`) VALUES
(1, 'Common'),
(2, 'Rare'),
(3, 'Epic'),
(4, 'Legendary');

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
  `Gem` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Pass`, `Email`, `role`, `Gem`) VALUES
(1, 'sarun4144', 'a6d902cffba69e2dd5b168846c87932371d486dc', 'sarun4144@gmail.com', 'M', 0),
(3, 'Admin', '8dc9fa69ec51046b4472bb512e292d959edd2aef', 'sarun4144@gmail.com', 'A', 10000);

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
-- Indexes for table `rarity`
--
ALTER TABLE `rarity`
  ADD PRIMARY KEY (`Rarity`);

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
  MODIFY `Id_Item` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

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
-- AUTO_INCREMENT for table `rarity`
--
ALTER TABLE `rarity`
  MODIFY `Rarity` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
