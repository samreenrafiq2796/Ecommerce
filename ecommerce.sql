-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 09:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `ID` int(11) NOT NULL,
  `Title` varchar(25) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Added_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`ID`, `Title`, `Description`, `Added_At`) VALUES
(1, 'Our Story', '    Our journey began with a passion for [industry/interest] and a desire to create a shopping  \r\n    ', '2024-08-25 17:29:08'),
(2, 'Innovation and Technology', 'We invest in cutting-edge technology to enhance your shopping experience. ', '2024-08-25 17:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Recorded inserted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`, `Recorded inserted`) VALUES
(1, 'Cosmetics', '2024-08-21 06:33:44'),
(7, 'Jewellery', '2024-09-06 06:11:27'),
(8, 'Perfume', '2024-09-06 06:15:16'),
(9, 'Men Cloth', '2024-09-06 06:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Submit_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `First Name`, `Last Name`, `E_Mail`, `Message`, `Submit_at`) VALUES
(1, 'Muhammad ', 'Anees', 'kjsfefe@gmail.com', '', '2024-08-23 07:06:56'),
(3, 'Muhammad', 'Anees', 'kjsfef@gmail.com', '', '2024-08-23 07:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Added_At` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Answer`, `Added_At`) VALUES
(1, 'How are You?', 'I am Fine', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `Id` int(11) NOT NULL,
  `Cart_id` varchar(50) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Bill` bigint(20) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Order Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`Id`, `Cart_id`, `User_id`, `Bill`, `Status`) VALUES
(1, 'Array', 2, 3750, 'Order Received'),
(2, '9', 2, 68146, 'Order Received');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `ID` int(11) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `Detail` varchar(150) NOT NULL,
  `Category` int(11) NOT NULL,
  `Record_Inserted_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `ProductImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Detail`, `Category`, `Record_Inserted_At`, `ProductImage`) VALUES
(7, 'LOOSE POWDER', 2550, 'Ultra-fine powder Ultra-lightweight Long Lasting', 1, '2024-09-06 06:19:22', 'ProductImage/loose_powder04_3_.webp'),
(8, 'Le Volume Plump & Care Li', 1200, 'New generation lip gloss with effective plumping-volumizing effect.', 1, '2024-09-06 06:20:26', 'ProductImage/main_5_2.webp'),
(9, 'NAVY LINEN WAISTCOAT', 16999, 'Festive Collection', 9, '2024-09-06 06:22:19', 'ProductImage/ccvc-39344-c5_1_.webp'),
(10, 'ADDICTED', 2750, 'Citrus, Spices, Woody, Leathery', 8, '2024-09-06 06:23:03', 'ProductImage/addicted_1_.webp'),
(11, 'JANAN GOLD', 5330, ' Bergamot, Fruity (Red Apple, Pineapple), White Floral, Patchouli, Leather, Smokey, Oak Moss', 8, '2024-09-06 06:23:40', 'ProductImage/janan_-1_1__2.webp'),
(12, 'J. POUR FEMME', 3995, 'Bergamot, Green Apple, Rose, Black currant, Peach, Amber', 8, '2024-09-06 06:24:26', 'ProductImage/pour-femme-j._1_1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `Gender`, `PhoneNumber`, `Address`, `Role`) VALUES
(1, 'Super Admin', 'admin123@gmail.com', 'abcd123', 'male', '090078601', 'Karachi, nazimabad no 1', 'admin'),
(2, 'Anees', 'anees@gmail.com', '1234', 'Male', '03122222', 'Karachi', 'user'),
(3, 'Adeen', 'adeen@gmail.com', '22342', 'male', '4545', 'karachi', 'user'),
(4, 'amna', 'amna@gmail.com', '123', 'female', '090078601', 'karachi, landhi', 'user'),
(5, 'zara', 'zara@gmail.com', '111111', 'male', '03001234567', 'karachi, landhi orangi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `E-Mail` varchar(30) NOT NULL,
  `Phone Number` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Facebook Link` varchar(100) NOT NULL,
  `Insta Link` varchar(100) NOT NULL,
  `Timing` time NOT NULL,
  `Added_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`ID`, `Name`, `Description`, `E-Mail`, `Phone Number`, `Address`, `Facebook Link`, `Insta Link`, `Timing`, `Added_At`) VALUES
(1, 'Furniture', 'Hi', 'aiyshaakbar572@gmail.com', '+923343102536', 'H#5034846', 'https://www.facebook.com/', 'https://www.facebook.com/', '13:49:00', '2024-08-25 17:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `E_Mail` (`E_Mail`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD CONSTRAINT `order_tbl_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
