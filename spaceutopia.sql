-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 09:52 AM
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
(1, 'Space gurdian', 0, 20, 5, 15, 3, 3, 0, NULL, 'H', 1, 1, 0),
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
(21, 'Pistol', 12, 0, 0, 0, 0, 11, 5, NULL, 'H', 2, 1, 0),
(22, 'Pistol', 15, 0, 0, 0, 0, 14, 7, NULL, 'H', 2, 2, 0),
(23, 'Pistol', 18, 0, 0, 0, 0, 17, 9, NULL, 'H', 2, 3, 0),
(24, 'Pistol', 21, 0, 0, 0, 0, 20, 11, NULL, 'H', 2, 4, 0),
(25, 'SMG', 10, 0, 0, 0, 0, 10, 8, NULL, 'H', 2, 1, 0),
(26, 'SMG', 12, 0, 0, 0, 0, 13, 11, NULL, 'H', 2, 2, 0),
(27, 'SMG', 14, 0, 0, 0, 0, 16, 14, NULL, 'H', 2, 3, 0),
(28, 'SMG', 16, 0, 0, 0, 0, 19, 17, NULL, 'H', 2, 4, 0),
(29, 'Shotgun', 40, 10, 0, 0, 0, 5, 3, NULL, 'H', 2, 1, 0),
(30, 'Shotgun', 72, 16, 0, 0, 0, 9, 7, NULL, 'H', 2, 3, 0),
(31, 'Shotgun', 88, 19, 0, 0, 0, 11, 9, NULL, 'H', 2, 4, 0),
(32, 'Katana', 43, 12, 0, 6, 0, 8, 3, NULL, 'H', 2, 1, 0),
(33, 'Katana', 47, 14, 0, 8, 0, 10, 5, NULL, 'H', 2, 2, 0),
(34, 'Katana', 51, 16, 0, 10, 0, 12, 7, NULL, 'H', 2, 3, 0),
(35, 'Katana', 55, 18, 0, 12, 0, 14, 9, NULL, 'H', 2, 4, 0),
(36, 'Short sword', 32, 5, 0, 3, 0, 8, 3, NULL, 'H', 2, 1, 0),
(37, 'Short sword', 38, 9, 0, 7, 0, 14, 7, NULL, 'H', 2, 3, 0),
(38, 'Short sword', 41, 11, 0, 9, 0, 17, 9, NULL, 'H', 2, 4, 0),
(39, 'Dual blade', 23, 3, 0, 3, 0, 8, 3, NULL, 'H', 2, 1, 0),
(40, 'Dual blade', 26, 5, 0, 5, 0, 11, 5, NULL, 'H', 2, 2, 0),
(41, 'Dual blade', 29, 7, 0, 7, 0, 14, 7, NULL, 'H', 2, 3, 0),
(42, 'Dual blade', 32, 9, 0, 9, 0, 17, 9, NULL, 'H', 2, 4, 0),
(43, 'Shotgun', 50, 12, 0, 0, 0, 7, 5, NULL, 'H', 2, 2, 0),
(44, 'Polarm', 37, 5, 0, 3, 0, 8, 4, NULL, 'H', 2, 1, 0),
(45, 'Polarm', 40, 7, 0, 6, 0, 10, 6, NULL, 'H', 2, 2, 0),
(46, 'Ring Sorcerer', 0, 0, 6, 0, 3, 0, 8, NULL, 'H', 3, 1, 0),
(47, 'Polarm', 43, 9, 0, 9, 0, 12, 8, NULL, 'H', 2, 3, 0),
(48, 'Polarm', 46, 11, 0, 12, 0, 14, 10, NULL, 'H', 2, 4, 0),
(49, 'Hover Cycle', 0, 20, 0, 25, 0, 55, 0, NULL, 'H', 3, 4, 0),
(50, 'Mar crucher', 0, 50, 0, 45, 0, 35, 0, NULL, 'H', 3, 4, 0),
(51, 'Tiger', 90, 95, 0, 90, 0, 20, 0, NULL, 'H', 3, 4, 0),
(52, 'Hover board', 0, 10, 0, 12, 0, 70, 0, NULL, 'H', 3, 4, 0),
(53, 'Bracer Loyalist', 5, 0, 0, 5, 0, 0, 5, NULL, 'H', 3, 1, 0),
(54, 'Bracer Loyalist', 8, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 2, 0),
(55, 'Bracer Loyalist', 11, 0, 0, 11, 0, 0, 11, NULL, 'H', 3, 3, 0),
(56, 'Bracer Loyalist', 14, 0, 0, 14, 0, 0, 14, NULL, 'H', 3, 4, 0),
(57, 'Neckless Sorcerer', 0, 0, 5, 0, 5, 0, 6, NULL, 'H', 3, 4, 0),
(58, 'Neckless Sorcerer', 0, 0, 7, 0, 7, 0, 8, NULL, 'H', 3, 2, 0),
(59, 'Neckless Sorcerer', 0, 0, 9, 0, 9, 0, 10, NULL, 'H', 3, 3, 0),
(60, 'Neckless Sorcerer', 0, 0, 11, 0, 11, 0, 12, NULL, 'H', 3, 4, 0),
(61, 'Belt Sorcerer', 0, 0, 6, 0, 4, 0, 4, NULL, 'H', 3, 1, 0),
(62, 'Belt Sorcerer', 0, 0, 8, 0, 6, 0, 6, NULL, 'H', 3, 2, 0),
(63, 'Belt Sorcerer', 0, 0, 10, 0, 8, 0, 8, NULL, 'H', 3, 3, 0),
(64, 'Belt Sorcerer', 0, 0, 12, 0, 10, 0, 10, NULL, 'H', 3, 4, 0),
(65, 'Face Sorcerer', 0, 0, 6, 4, 3, 0, 2, NULL, 'H', 3, 1, 0),
(66, 'Face Sorcerer', 0, 0, 8, 6, 5, 0, 4, NULL, 'H', 3, 2, 0),
(67, 'Face Sorcerer', 0, 0, 10, 8, 7, 0, 6, NULL, 'H', 3, 3, 0),
(68, 'Face Sorcerer', 0, 0, 12, 10, 9, 0, 8, NULL, 'H', 3, 4, 0),
(69, 'Ring Mist Power', 3, 0, 0, 2, 0, 8, 0, NULL, 'H', 3, 1, 0),
(70, 'Ring Mist Power', 5, 0, 0, 4, 0, 10, 0, NULL, 'H', 3, 2, 0),
(71, 'Ring Mist Power', 7, 0, 0, 6, 0, 12, 0, NULL, 'H', 3, 3, 0),
(72, 'Ring Mist Power', 9, 0, 0, 8, 0, 12, 0, NULL, 'H', 3, 4, 0),
(73, 'Bracer Mist Power', 5, 6, 0, 0, 0, 6, 0, NULL, 'H', 3, 1, 0),
(74, 'Bracer Mist Power', 7, 8, 0, 0, 0, 8, 0, NULL, 'H', 3, 2, 0),
(75, 'Bracer Mist Power', 9, 10, 0, 0, 0, 11, 0, NULL, 'H', 3, 3, 0),
(76, 'Bracer Mist Power', 11, 12, 0, 0, 0, 13, 0, NULL, 'H', 3, 4, 0),
(77, 'Neckless Mist Power', 7, 2, 0, 0, 0, 3, 0, NULL, 'H', 3, 1, 0),
(78, 'Neckless Mist Power', 9, 4, 0, 0, 0, 5, 0, NULL, 'H', 3, 2, 0),
(79, 'Neckless Mist Power', 11, 6, 0, 0, 0, 5, 0, NULL, 'H', 3, 3, 0),
(80, 'Neckless Mist Power', 13, 8, 0, 0, 0, 7, 0, NULL, 'H', 3, 4, 0),
(81, 'Belt Mist Power', 5, 3, 0, 0, 0, 2, 0, NULL, 'H', 3, 1, 0),
(82, 'Belt Mist Power', 7, 5, 0, 0, 0, 4, 0, NULL, 'H', 3, 2, 0),
(83, 'Belt Mist Power', 9, 7, 0, 0, 0, 6, 0, NULL, 'H', 3, 3, 0),
(84, 'Belt Mist Power', 11, 9, 0, 0, 0, 8, 0, NULL, 'H', 3, 4, 0),
(85, 'Face Mist Power', 2, 6, 0, 0, 0, 1, 0, NULL, 'H', 3, 1, 0),
(86, 'Face Mist Power', 4, 8, 0, 0, 0, 3, 0, NULL, 'H', 3, 2, 0),
(87, 'Face Mist Power', 6, 10, 0, 0, 0, 5, 0, NULL, 'H', 3, 3, 0),
(88, 'Face Mist Power', 8, 12, 0, 0, 0, 7, 0, NULL, 'H', 3, 4, 0),
(89, 'MRE bar', 0, 10, 0, 8, 0, 5, 0, NULL, 'H', 5, 1, 0),
(90, 'MRE bar', 0, 14, 13, 0, 0, 8, 0, NULL, 'H', 5, 2, 0),
(91, 'Roasted meat', 8, 0, 0, 6, 0, 0, 4, NULL, 'H', 5, 1, 0),
(92, 'Roasted meat', 13, 0, 0, 11, 0, 0, 9, NULL, 'H', 5, 2, 0),
(93, 'Water', 0, 0, 8, 0, 8, 0, 3, NULL, 'H', 5, 1, 0),
(94, 'Water', 0, 0, 12, 0, 12, 0, 6, NULL, 'H', 5, 2, 0),
(95, 'Medkit', 0, 0, 0, 15, 0, 3, 0, NULL, 'H', 5, 1, 0),
(96, 'Medkit', 0, 0, 0, 20, 0, 6, 0, NULL, 'H', 5, 2, 0),
(97, 'Bandage', 0, 0, 0, 10, 0, 2, 0, NULL, 'H', 5, 1, 0),
(98, 'Bandage', 0, 0, 0, 15, 0, 4, 0, NULL, 'H', 5, 2, 0),
(99, 'Alcohol', 5, 0, 0, 0, 0, 18, 0, NULL, 'H', 5, 1, 0),
(100, 'Alcohol', 10, 0, 0, 0, 0, 25, 0, NULL, 'H', 5, 2, 0),
(101, 'Short sword', 34, 7, 0, 5, 0, 10, 5, NULL, 'H', 2, 2, 0),
(102, 'Ring Loyalist', 3, 0, 0, 3, 0, 0, 3, NULL, 'H', 3, 1, 0),
(103, 'Ring Loyalist', 5, 0, 0, 5, 0, 0, 5, NULL, 'H', 3, 2, 0),
(104, 'Ring Loyalist', 7, 0, 0, 7, 0, 0, 7, NULL, 'H', 3, 3, 0),
(105, 'Ring Loyalist', 9, 0, 0, 9, 0, 0, 9, NULL, 'H', 3, 4, 0),
(106, 'Neckless Loyalist', 8, 0, 0, 2, 0, 0, 2, NULL, 'H', 3, 1, 0),
(107, 'Neckless Loyalist', 10, 0, 0, 4, 0, 0, 4, NULL, 'H', 3, 2, 0),
(108, 'Neckless Loyalist', 12, 0, 0, 6, 0, 0, 6, NULL, 'H', 3, 3, 0),
(109, 'Neckless Loyalist', 14, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 4, 0),
(110, 'Belt Loyalist', 6, 0, 0, 4, 0, 0, 4, NULL, 'H', 3, 1, 0),
(111, 'Belt Loyalist', 8, 0, 0, 6, 0, 0, 6, NULL, 'H', 3, 2, 0),
(112, 'Belt Loyalist', 10, 0, 0, 8, 0, 0, 8, NULL, 'H', 3, 3, 0),
(113, 'Belt Loyalist', 12, 0, 0, 10, 0, 0, 10, NULL, 'H', 3, 4, 0),
(114, 'Face Lotalist', 6, 4, 0, 2, 0, 0, 0, NULL, 'H', 3, 1, 0),
(115, 'Face Lotalist', 8, 6, 0, 4, 0, 0, 0, NULL, 'H', 3, 2, 0),
(116, 'Face Lotalist', 10, 8, 0, 6, 0, 0, 0, NULL, 'H', 3, 3, 0),
(117, 'Face Lotalist', 12, 10, 0, 8, 0, 0, 0, NULL, 'H', 3, 4, 0),
(118, 'Ring Junker', 0, 3, 0, 3, 0, 2, 0, NULL, 'H', 3, 1, 0),
(119, 'Ring Junker', 0, 5, 0, 5, 0, 4, 0, NULL, 'H', 3, 2, 0),
(120, 'Ring Junker', 0, 7, 0, 7, 0, 6, 0, NULL, 'H', 3, 3, 0),
(121, 'Ring Junker', 0, 9, 0, 9, 0, 8, 0, NULL, 'H', 3, 4, 0),
(122, 'Bracer Junker', 0, 5, 0, 5, 0, 4, 3, NULL, 'H', 3, 1, 0),
(123, 'Bracer Junker', 0, 7, 0, 7, 0, 6, 5, NULL, 'H', 3, 2, 0),
(124, 'Bracer Junker', 0, 9, 0, 9, 0, 8, 7, NULL, 'H', 3, 3, 0),
(125, 'Bracer Junker', 11, 0, 0, 11, 0, 10, 9, NULL, 'H', 3, 4, 0),
(126, 'Neckless Junker', 0, 0, 0, 10, 0, 5, 0, NULL, 'H', 3, 1, 0),
(127, 'Neckless Junker', 0, 0, 0, 12, 0, 7, 0, NULL, 'H', 3, 2, 0),
(128, 'Neckless Junker', 0, 0, 0, 14, 0, 9, 0, NULL, 'H', 3, 3, 0),
(129, 'Neckless Junker', 0, 0, 0, 14, 0, 11, 0, NULL, 'H', 3, 4, 0),
(130, 'Belt Junker', 0, 0, 0, 8, 0, 4, 0, NULL, 'H', 3, 1, 0),
(131, 'Belt Junker', 0, 0, 0, 10, 0, 6, 0, NULL, 'H', 3, 2, 0),
(132, 'Belt Junker', 0, 0, 0, 12, 0, 8, 0, NULL, 'H', 3, 3, 0),
(133, 'Belt Junker', 0, 0, 0, 14, 0, 10, 0, NULL, 'H', 3, 4, 0),
(134, 'Face Junker', 0, 4, 0, 6, 0, 2, 0, NULL, 'H', 3, 1, 0),
(135, 'Face Junker', 0, 6, 0, 8, 0, 6, 0, NULL, 'H', 3, 2, 0),
(136, 'Face Junker', 0, 8, 0, 10, 0, 6, 0, NULL, 'H', 3, 3, 0),
(137, 'Face Junker', 0, 10, 0, 12, 0, 10, 0, NULL, 'H', 3, 4, 0),
(138, 'Ring Sorcerer', 0, 0, 8, 0, 5, 0, 10, NULL, 'H', 3, 2, 0),
(139, 'Ring Sorcerer', 0, 0, 10, 0, 7, 0, 12, NULL, 'H', 3, 3, 0),
(140, 'Ring Sorcerer', 0, 0, 12, 0, 9, 0, 14, NULL, 'H', 3, 4, 0),
(141, 'Bracer Sorcerer', 0, 2, 5, 0, 0, 0, 5, NULL, 'H', 3, 1, 0),
(142, 'Bracer Sorcerer', 0, 4, 7, 0, 0, 0, 7, NULL, 'H', 3, 2, 0),
(143, 'Bracer Sorcerer', 0, 6, 9, 0, 0, 0, 9, NULL, 'H', 3, 3, 0),
(144, 'Bracer Sorcerer', 0, 8, 11, 0, 0, 0, 11, NULL, 'H', 3, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Id_Log` int(11) NOT NULL,
  `Price` double DEFAULT 0,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Item_Id` int(11) NOT NULL,
  `User_Id_Seller` int(200) DEFAULT 0,
  `User_Id_Buyer` int(200) DEFAULT 0,
  `State` enum('Cancel','Sold','Sell','Claim') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `Id_Order` int(200) NOT NULL,
  `Price` double NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `User_Id` int(200) NOT NULL,
  `Item_Id` int(200) NOT NULL
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
  MODIFY `Id_Item` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `Id_Log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market`
--
ALTER TABLE `market`
  MODIFY `Id_Order` int(200) NOT NULL AUTO_INCREMENT;

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
