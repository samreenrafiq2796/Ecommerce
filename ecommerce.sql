-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 09:43 AM
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
  `Description` varchar(1000) NOT NULL,
  `Added_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`ID`, `Title`, `Description`, `Added_At`) VALUES
(3, 'Offerings', ' Outline what you sell or the services you provide. Highlight any unique or standout features.', '2024-08-30 07:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Recorded inserted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`, `Recorded inserted`) VALUES
(6, 'Living Room', '2024-08-21 06:43:13'),
(7, 'household furniture', '2024-08-27 17:07:01'),
(8, 'office furniture', '2024-08-27 17:07:37'),
(9, 'kitchen cabinets', '2024-08-27 17:07:49'),
(10, 'wood products', '2024-08-27 17:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `E_Mail` varchar(30) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Submit_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `First Name`, `Last Name`, `E_Mail`, `Message`, `Submit_at`) VALUES
(1, 'Muhammad ', 'Anees', 'kjsfefe@gmail.com', '', '2024-08-23 07:06:56'),
(3, 'Muhammad', 'Anees', 'kjsfef@gmail.com', '', '2024-08-23 07:09:07'),
(4, 'Muhammad', 'Anees', 'kjsfef2@gmail.com', 'ji', '2024-08-23 07:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Question` varchar(200) NOT NULL,
  `Answer` varchar(1000) NOT NULL,
  `Added_At` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`ID`, `Question`, `Answer`, `Added_At`) VALUES
(4, 'Can I modify or cancel my order?', 'If you need to modify or cancel your order, please contact us as soon as possible. Orders can be modified or canceled within [number of hours/days] of placing them. Once an order is in the processing or shipping stage, changes may not be possible.   ', 0),
(5, ' How do I place an order?', 'To place an order, follow these steps:  Browse our product catalog and select the items you wish to purchase. Add the items to your shopping cart. Proceed to checkout and enter your shipping and payment information. Review your order and confirm the purchase. You will receive an order confirmation email once your purchase is complete.', 0),
(7, ' How can I track my order?', 'Once your order has shipped, you will receive a tracking number via email. You can use this tracking number to monitor your shipment’s progress through our shipping carrier’s website.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `ID` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `cart_id` varchar(50) NOT NULL,
  `Bill` bigint(20) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Order Recieved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`ID`, `u_id`, `cart_id`, `Bill`, `Status`) VALUES
(1, 2, '4,15,6', 90150, 'Order Shipped'),
(2, 2, '5', 200150, 'Order Dispatched'),
(3, 2, '5', 40150, 'Order Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `ID` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`ID`, `Description`, `Added_at`) VALUES
(3, 'We implement reasonable security measures to protect your personal information from unauthorized access, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is completely secure, so we cannot guarantee absolute securityservices.        ', '2024-08-26 07:45:04'),
(4, 'Personal Identification Information: Name, email address, phone number, and other contact details you provide.', '2024-08-26 07:45:23'),
(5, 'Usage Data: Information about how you use our website, including IP address, browser type, pages visited, and time spent on the site.', '2024-08-26 07:45:36'),
(6, 'To Send Promotional Communications: If you have opted in, we may send you newsletters, updates, and marketing materials. You can opt out of these communications at any time.', '2024-08-26 07:45:50'),
(7, 'For Legal Reasons: If required by law or to protect our rights, we may disclose information in response to legal requests or to prevent harm.', '2024-08-26 07:46:09'),
(8, 'We may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the new policy on our website with an updated effective date. Your continued use of the site after changes are made constitutes your acceptance of the revised policy.', '2024-08-26 07:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `Detail` varchar(250) NOT NULL,
  `Category` int(11) NOT NULL,
  `Product_Image` varchar(100) NOT NULL,
  `Record_Inserted_At` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Detail`, `Category`, `Product_Image`, `Record_Inserted_At`) VALUES
(4, 'Sofas and Couches', 50000, '  Consider the cushion firmness, seat depth, and armrest height. Look for pieces with high-quality materials and construction for long-lasting comfort', 7, 'Product_Image/sofa.jpg', '2024-08-27 17:11:42'),
(5, 'Beds', 40000, ' Mattress quality is crucial for sleep comfort. Consider factors like firmness, support, and materials. The bed frames design can also impact overall ', 7, 'Product_Image/bed.jpg', '2024-08-27 17:15:33'),
(6, 'Corner desks', 25000, 'They are space-efficient and offer ample workspace.', 8, 'Product_Image/cor.jpeg', '2024-08-27 17:17:01'),
(7, 'Task chairs', 15000, 'They provide basic comfort and support for tasks that dont require prolonged sitting.', 8, 'Product_Image/chair.jpg', '2024-08-27 17:17:43'),
(8, 'Wall cabinets', 60000, ' They offer additional storage space above countertops.', 9, 'Product_Image/wall.jpg', '2024-08-27 17:18:56'),
(11, 'Kitchen tables', 60000, 'They come in various sizes, materials, and styles.', 9, 'Product_Image/ktable.jpg', '2024-08-27 17:20:05'),
(12, 'Desk', 5000, 'XYZ', 6, 'Product_Image/desk.jpg', '2024-08-30 07:31:28'),
(13, 'Coffee Table', 5000, 'Glass top, wooden frame, storage drawers.', 7, 'Product_Image/Coffee_Table.jpg', '2024-09-01 17:32:17'),
(14, 'Dresser', 20000, 'Wooden or metal frame, drawers and shelves.', 7, 'Product_Image/dresser.jpg', '2024-09-01 17:33:58'),
(15, 'Bookshelf', 15000, ' Wooden or metal frame, open shelves or closed cabinets', 7, 'Product_Image/book.jpg', '2024-09-01 17:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Role` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `EMail`, `Password`, `Gender`, `Phone`, `Address`, `Role`) VALUES
(1, 'Manager', 'manager@gmail.com', 'admin123', 'Male', '321654987', 'Karachi, Pakistan', 'Admin'),
(2, 'Anees', 'anees@gmail.com', '1234', 'Male', '+921369872', 'H#4,St#5,67', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Description` varchar(500) NOT NULL,
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
(1, 'Furni', 'Meet our team of [mention team attributes or roles], who are here to ensure that your experience with us is nothing short of exceptional', 'aiyhaakbar@gmail.com', '+923343102536', 'H#5034846', 'https://www.facebook.com/', 'https://www.instagram.com/', '13:49:00', '2024-08-25 17:47:18');

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
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `u_id` (`u_id`);

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
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `E-Mail` (`EMail`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`Id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
