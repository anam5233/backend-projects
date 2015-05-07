-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2014 at 10:46 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-commerce`
--
CREATE DATABASE IF NOT EXISTS `e-commerce` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `e-commerce`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Asl` int(100) NOT NULL AUTO_INCREMENT,
  `AdminID` int(100) NOT NULL,
  `AdminName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`),
  UNIQUE KEY `AdminID` (`AdminID`),
  UNIQUE KEY `AdminID_2` (`AdminID`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Asl`, `AdminID`, `AdminName`, `Email`, `Password`, `Role`, `Picture`) VALUES
(8, 100001, 'Sharif', 'sharif.cu@gmail.com', '45678', 'admin', '333005.jpg'),
(9, 100002, 'Jamal', 'Jamal@live.com', '1234', 'A', '333004.jpg'),
(10, 100009, 'roksana', 'roksana@mmm.com', '1234', 'MD', '333006.jpg'),
(11, 100010, 'suuaas', 'suuaas@live.com', '1234', 'A', '0ad14823-2cbf-4f37-8d05-f82da1918b40.jpg'),
(13, 100011, 'suua1as1', 'suua1as1@live.com', '1234', 'A', '333002.jpg'),
(14, 12222222, 'tyuytuy', 'sharif.cu@gmil.com', '123', 'aaaa', ''),
(15, 0, 'sdffgh', 'dddddd', 'gggggggghhhhhy778r54gf', 'hjjjkkkj', '0e8c7879-5279-455d-b1c8-b32b4bd94e5f.jpg'),
(18, 332211, 'ssssssss', 'suuaas@live.com', '2233effgg', 'Admin', ''),
(23, 2345678, 'ooooooo', 'suuaas@live.com', '12233werrtty', 'Admin', ''),
(25, 45, 'Noman01', 'noman@yahoo.com', '123456', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `Asl` int(11) NOT NULL AUTO_INCREMENT,
  `AdsID` int(11) NOT NULL,
  `Company` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(1800) COLLATE utf8_unicode_ci NOT NULL,
  `InputDate` date NOT NULL,
  `ExpireDate` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `EntryPerson` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(1800) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`Asl`, `AdsID`, `Company`, `Title`, `Description`, `InputDate`, `ExpireDate`, `EntryPerson`, `Contact`, `Location`, `Picture`) VALUES
(1, 1, 'Azad Product', 'Azads', 'South Asian Food', '2006-01-18', '2006-01-27', 'sharif1', '01676686452', 'Kattali', '333008.jpg'),
(2, 2, 'Faruk Product', 'Faruk', 'South Asian Food', '2006-01-18', '2006-01-28', 'sharif2', '01911818382', 'Ctg', '0ab7eecd-2d45-4838-8088-0890be8e95c8.jpg'),
(3, 3, 'Obaida Products', 'Obayda', 'South Asian Food', '2006-01-11', '2006-01-28', 'sharif3', '01811818382', 'Ctg', '333008.jpg'),
(4, 4, 'Royel Hut', 'Royel Hut', 'this is good food', '2006-01-18', '2006-01-26', 'sharif4', '01611818382', 'Ctg', '333042.jpg'),
(5, 6, 'Red Chili', 'Red Chili', 'South Asian Food', '2014-06-27', '2014-07-31', 'Sharif', '01911818382', 'Ctg', '569028.jpg'),
(6, 55, 'NewMoon Traders', 'Free 10% for Eid Sales', 'cccccccccccccccccccccccccccccc', '2014-07-08', '2014-07-21', 'fff', '02132322132', 'Agrabad, Ctg', '0e8c7879-5279-455d-b1c8-b32b4bd94e5f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE IF NOT EXISTS `customerdetails` (
  `Asl` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PasswordHint` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AlternateMobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CompanyName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Designation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`Asl`, `Type`, `Username`, `Email`, `FullName`, `Password`, `PasswordHint`, `Gender`, `Address`, `Mobile`, `AlternateMobile`, `Phone`, `CompanyName`, `Designation`, `Location`, `City`, `District`, `Picture`) VALUES
(5, '', 'suuaas', 'suuaas@live.com', 'Sharif Uddin Ahamed', '1234', '1234', '', 'Rampur', '+880', '', '+880', 'iSoft', 'IT admin', 'Agrabad, Ctg', 'Chittagong', 'Chittagong', ''),
(6, '', 'Faruk', 'faruk@yahoo.com', '', '123456', '', '', '', '+880', '', '+880', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `Asl` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`),
  UNIQUE KEY `CustomerID` (`CustomerID`,`Email`),
  UNIQUE KEY `CustomerID_2` (`CustomerID`,`Contact`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Asl`, `CustomerID`, `CustomerName`, `Address`, `Contact`, `Email`, `Password`, `Picture`) VALUES
(1, 'CTG001', 'rahat', 'CTG', '01912952631', 'rahat@live.com', 'Password', '0ab7eecd-2d45-4838-8088-0890be8e95c8.jpg'),
(2, 'DHK001', 'hasan', 'DHK', '01916116870', 'hasan@gmail.com', 'Password', ''),
(3, '123344', 'ddffg', 'vfgvgf', '23233444', 'sss@ddd.com', 'Password', ''),
(4, '10', 'ABC Company Limited', 'ctg', '01911818382', 'abc@yahoo.com', '123456', '0a2c90a5-cc1e-459e-9cba-3380e6e3d6ba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items_entry`
--

CREATE TABLE IF NOT EXISTS `items_entry` (
  `Asl` int(100) NOT NULL AUTO_INCREMENT,
  `ItemCode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ItemName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GroupName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SubGroup` varchar(1800) COLLATE utf8_unicode_ci NOT NULL,
  `ItemsDetails` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `UnitPurchasePrice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `UnitSalePrice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Qty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `InputDate` date NOT NULL,
  `Role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ExpireDate` date NOT NULL,
  `EntryPerson` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Division` varchar(1800) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(1800) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`),
  UNIQUE KEY `ItemCode` (`ItemCode`),
  UNIQUE KEY `ItemCode_2` (`ItemCode`,`ItemName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `items_entry`
--

INSERT INTO `items_entry` (`Asl`, `ItemCode`, `ItemName`, `GroupName`, `SubGroup`, `ItemsDetails`, `UnitPurchasePrice`, `UnitSalePrice`, `Qty`, `InputDate`, `Role`, `ExpireDate`, `EntryPerson`, `Contact`, `Division`, `District`, `Location`, `Picture`) VALUES
(4, 'EL-MOB-NOK-001', 'Nokia N8-00', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', '', '28000', '34000', '3', '2014-05-15', 'Role', '2014-12-31', 'সোহেল', '01611818382', 'চট্টগ্রাম', 'নোয়াখালী', 'পেশকার হাট', 'images.jpg'),
(5, 'EL-CNA-ANT-001', 'Norton Internet Security 2014', 'ইলেকট্রনিকস্', 'কম্পিউটার/এ্যক্সেসরিজ', 'dddd', '1000', '1200', '3', '2014-06-01', 'Role', '2014-12-31', 'পুতুল', '01914818382', 'খুলনা', 'খুলনা', 'বয়রা', 'c32aae90-009c-4bd2-a464-d46b21a279ec.jpg'),
(6, 'PI-KII-MUG-001', 'Color Changing Mug', 'ব্যক্তিগত সামগ্রী', 'রান্নার সামগ্রী', 'ultra new', '260', '400', '6', '2014-06-05', 'Role', '2014-12-31', 'রোকন', '01816307323', 'ঢাকা', 'ঢাকা', 'মিরপুর', 'b9a96334-ce96-462a-a242-2a6d590b9323.jpg'),
(7, 'EL-OTH-AML-001', 'Anti-Mosquito Energy Saving bulb', 'ইলেকট্রনিকস্', 'অন্যান্য ইলেকট্রনিকস্', '', '250', '290', '5', '2014-06-13', 'Role', '2014-12-31', 'শরীফ', '01911818382', 'বরিশাল', 'বরিশাল', 'টাউনহল মোড়', '594f0176-0a82-4277-9bbb-5659d47603fd.jpg'),
(9, 'AF-FRU-LIC-001', 'Lichu', 'কৃষি/খাদ্যদ্রব্য', 'ফল', '', '250', '260', '2', '2014-06-18', 'Role', '2014-12-31', 'হাসান', '01916116870', 'চট্টগ্রাম', 'কুমিল্লা', 'কান্দিরপাড়', 'ae739111-ad47-4cfe-ac66-d16418be4c5f.jpg'),
(10, 'HA-FUR-CHA-001', 'Chair', 'ঘরের দ্রব্যসামগ্রী', 'আসবাবপত্র', '', '800', '1000', '4', '2014-06-29', 'Role', '2014-12-31', 'সৌরভ', '01915543371', 'ঢাকা', 'গাজীপুর', 'চৌরাস্তার মোড়', '2320daff-8192-4400-9a78-6854b62cd879.jpg'),
(11, 'EL-ANM-KAR-001', 'Karaoke Music', 'ইলেকট্রনিকস্', 'অডিও/এমপিথ্রি', '', '35000', '36000', '5', '2014-06-29', 'Role', '2014-12-31', 'ফারুক', '01730939532', 'ঢাকা', 'নারায়নগঞ্জ', 'চাষাড়া', '8c1990a3-2dee-411a-bbbf-0ededc8306c5.jpg'),
(12, 'HA-HNG-WCO-001', 'Water Cooler', 'ঘরের দ্রব্যসামগ্রী', 'ঘর ও বাগান', '1 Week Used Only', '10000', '10000', '1', '2014-06-18', 'Buy', '2014-12-31', 'কামাল', '01670460805', 'ঢাকা', 'ঢাকা', 'ঢাকা', '7c7dc8da-8471-4c4f-9f63-03f5c64e3072.jpg'),
(13, 'HA-HAC-HIT-001', 'General AXGT18AATH 1.5 Ton Window AC', 'ঘরের দ্রব্যসামগ্রী', 'হিটার/এয়ারকন্ডিশন/ফ্যান', 'General AXGT18AATH 1.5 Ton Window AC', '56000', '56000', '7', '2014-01-03', 'Sale', '2014-12-31', 'আজগর', '01670460805', 'ঢাকা', 'ঢাকা', 'ঢাকা', 'a441d700-3102-4f8b-8705-103328dd809c.jpg'),
(14, 'EL-TAB-SAM-001', 'Samsung galaxy tab 2', 'ইলেকট্রনিকস্', 'ট্যাবলেট', 'Camera 3.15 Megapixel || Video: Yes, 720p,\r\n30fps ; Secondary VGA\r\nInternet GPRS: Class 33 || EDGE: Yes, Wi-Fi\r\n802.11 a/b/g/n, DLNA, Wi-Fi Direct, dual-band,\r\nWi-Fi hotspot\r\nFM Radio No\r\nAudio Player MP3, WAV, eAAC+, WMA, AC3,\r\nFlac\r\nVideo Player MP4, DivX, Xvid, H.264, H.263,\r\nWMV\r\nMemory 16 GB internal, 1GB RAM\r\nMemory Card Slot MicroSD card slot\r\nExpandable up to 32GB\r\nBluetooth Yes, v3.0 with A2DP, HS\r\nUSB Yes, v2.0, USB On-the-go support\r\nInfrared No\r\nWeight 345 gm\r\nStatus Available\r\nDispl', '13000', '13000', '1', '2014-04-17', 'Sale', '2014-12-31', 'শরীফ', '01911818382', 'চট্টগ্রাম', 'নোয়াখালী', 'পেশকার হাট', '4af8a9f4-9b5a-4a67-907e-3643d6190270_002.jpg'),
(16, 'EL-COM-DSK-001', 'Dual core pc', 'ইলেকট্রনিকস্', 'ডেস্কটপ কম্পিউটার', 'Dual core pc and LCD cheap_warranty', '10000', '10000', '2', '2014-06-30', 'Sale', '2014-12-31', 'শরীফ', '01911818382', 'চট্টগ্রাম', 'নোয়াখালী', 'পেশকার হাট', '8d82052d-702c-408e-a52f-5d700e5a0b6a.jpg'),
(17, 'EL-CNA-002', '500 GB Laptop''s Hard disc(SATA)', 'ইলেকট্রনিকস্', 'কম্পিউটার/এ্যক্সেসরিজ', '500 GB Laptop''s Hard disc(SATA)', '1750', '1750', '1', '2014-06-30', 'Sale', '2014-12-31', 'ওবায়দা', '01819610738', 'চট্টগ্রাম', 'চট্টগ্রাম', 'আগ্রাবাদ', '1d2d6f87-e831-44c2-8737-7e785074ef77.jpg'),
(18, 'EL-MOB-SOX-001', 'Sony Xperia E', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', 'New Sony Xperia E', '8300', '8300', '1', '2014-06-30', 'Sale', '2014-12-31', 'রুহী', '01670486369', 'ঢাকা', 'নারায়নগঞ্জ', 'চাষাড়া', '6bccf06b-5d12-45de-bab7-fe62be452959.jpg'),
(19, 'EL-MOB-SAM-001', 'Samsung galaxy S4', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', 'Samsung galaxy S4 korean copy (full box)', '8500', '8500', '1', '2014-06-30', 'Sale', '2014-12-31', 'সোহেল', '01811818382', 'রংপুর', 'রংপুর', 'কলেজ গেইট', '34fafd44-a772-4972-95ea-e3f4ad8b5bc9.jpg'),
(21, 'EL-MOB-SAM-002', 'Samsung galaxy s3 mini', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', 'Samsung galaxy s3 mini original', '1500', '15000', '1', '2014-06-29', 'Buy', '2014-12-31', 'সোহেল', '01511818382', 'রাজশাহী', 'রাজশাহী', 'স্টেশন রোড', 'c35fa861-c754-41e4-a4b5-848217620367.jpg'),
(22, 'EL-MOB-NOK-002', 'nokia 3110', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', 'nokia 3110', '1350', '1350', '1', '2014-06-30', 'Sale', '2014-12-31', 'সোহেল', '01511818382', 'রাজশাহী', 'রাজশাহী', 'রাবি', '3477343f-b09f-4a2b-941c-c9a3585f4ae3.jpg'),
(23, 'EL-MOB-I3G-001', 'iPhone 3GS 16GB', 'ইলেকট্রনিকস্', 'মোবাইল ফোন', 'iPhone 3GS 16GB white Factory Unlocked', '6500', '6500', '1', '2014-06-19', 'Sale', '2014-12-31', 'আজাদ', '01676686452', 'চট্টগ্রাম', 'চট্টগ্রাম', 'আগ্রাবাদ', '1410aa51-3866-4bb8-a8be-cee1f6d80d50.jpg'),
(24, 'I-0123123', 'Hi-Tech Ball pen', 'Stationery', 'Pen', 'New quality', '112', '150', '2', '2014-07-08', '1', '2014-07-23', 'ss', '0112312312', 'খুলনা', 'খুলনা', 'Agrabad, Ctg', '3d578d6b-54eb-4084-85dc-b5f6814bc607.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `Asl` int(100) NOT NULL AUTO_INCREMENT,
  `PurchaseID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SlNo` int(100) NOT NULL,
  `SuppliersID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ItemCode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ItemName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GroupName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Qty` int(100) NOT NULL,
  `UnitPrice` int(100) NOT NULL,
  `TotalPrice` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`),
  UNIQUE KEY `PurchaseID` (`PurchaseID`,`SlNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`Asl`, `PurchaseID`, `SlNo`, `SuppliersID`, `ItemCode`, `ItemName`, `GroupName`, `Qty`, `UnitPrice`, `TotalPrice`, `Date`, `Picture`) VALUES
(1, 'A12345B6789C', 10001, '22222', 'MAN89B', 'FAZLI MANGO B', 'GroupName', 20, 200, 4000, '2014-04-23', '0d37f57f-40fd-4b8a-a785-09af4290498d.jpg'),
(2, '8121', 1, 'ABC Company', '1212', 'Jamal', 'GroupName', 0, 0, 0, '0000-00-00', '0e576a2b-3c29-431a-b587-c1ed57a4cc64.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `Asl` int(100) NOT NULL AUTO_INCREMENT,
  `SuppliersID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SuppliersName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Asl`),
  UNIQUE KEY `SuppliersID` (`SuppliersID`,`Contact`,`Email`),
  UNIQUE KEY `SuppliersID_2` (`SuppliersID`,`Contact`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`Asl`, `SuppliersID`, `SuppliersName`, `Address`, `Contact`, `Email`, `Password`, `Picture`) VALUES
(1, 'ssdd345', 'Kamal', 'Ctg', '01611818382', 'sharif.cu@gmail.com', '12345', '0e576a2b-3c29-431a-b587-c1ed57a4cc64.jpg'),
(2, 'hh345dh', 'Mamun', 'Dhk', '01911856845', 'kal@aj.com', '1234', ''),
(3, '23', 'New Moon Traders', 'ctg', '054354354', 'suuaas@asdad.1232', 'Password', '0c177661-4df6-4169-963b-52335d4e41c5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
