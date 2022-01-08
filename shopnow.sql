-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 09:28 PM
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
-- Database: `shopnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catName`, `createdAt`) VALUES
(1, 'pixel', '2022-01-08 16:26:47'),
(2, '2D Graphics', '2022-01-08 16:30:31'),
(3, '3D Graphics', '2022-01-08 16:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productName` text NOT NULL,
  `imgSrc` text NOT NULL,
  `price` text NOT NULL,
  `cat_id` int(11) NOT NULL COMMENT 'Category ID ',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `imgSrc`, `price`, `cat_id`, `createdAt`) VALUES
(1, 'monkey NFT', 'https://cdn.vox-cdn.com/thumbor/tGNxLvljqJFaFg8GB8IBvTVPNgk=/155x65:995x648/920x613/filters:focal(489x354:677x542):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70264946/bored_ape_nft_accidental_.0.jpg', '75', 2, '2022-01-08 17:18:41'),
(3, 'monkey happy NFT', 'https://cdn.vox-cdn.com/thumbor/tGNxLvljqJFaFg8GB8IBvTVPNgk=/155x65:995x648/920x613/filters:focal(489x354:677x542):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70264946/bored_ape_nft_accidental_.0.jpg', '65', 2, '2022-01-08 17:19:39');

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_cat`
-- (See below for the actual view)
--
CREATE TABLE `product_cat` (
`id` int(11)
,`productName` text
,`imgSrc` text
,`price` text
,`createdAt` timestamp
,`catName` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` text NOT NULL COMMENT 'full name of employee',
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'email of employee that is unique',
  `pass` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Exact date of account creation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `product_cat`
--
DROP TABLE IF EXISTS `product_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_cat`  AS SELECT `product`.`id` AS `id`, `product`.`productName` AS `productName`, `product`.`imgSrc` AS `imgSrc`, `product`.`price` AS `price`, `product`.`createdAt` AS `createdAt`, `category`.`catName` AS `catName` FROM (`product` join `category`) WHERE `product`.`cat_id` = `category`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`catName`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
