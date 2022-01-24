-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 jan. 2022 à 10:21
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shopnow`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `catName`, `createdAt`) VALUES
(1, 'pixel', '2022-01-08 16:26:47'),
(2, '2D Graphics', '2022-01-08 16:30:31'),
(3, '3D Graphics', '2022-01-08 16:30:44');

-- --------------------------------------------------------

--
-- Structure de la table `product`
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
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `productName`, `imgSrc`, `price`, `cat_id`, `createdAt`) VALUES
(1, 'monkey NFT', 'https://cdn.vox-cdn.com/thumbor/tGNxLvljqJFaFg8GB8IBvTVPNgk=/155x65:995x648/920x613/filters:focal(489x354:677x542):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70264946/bored_ape_nft_accidental_.0.jpg', '75', 2, '2022-01-08 17:18:41'),
(3, 'monkey happy NFT', 'https://airnfts.s3.amazonaws.com/nft-images/20210907/Happy_Ape_Nft_01_1631016469024.jpg', '65', 2, '2022-01-08 17:19:39'),
(4, 'Yellow monkey', 'https://www.ledgerinsights.com/wp-content/uploads/2021/12/adidas-nft-bored-ape-810x524.jpg', '198', 2, '2022-01-24 00:40:16'),
(5, 'Sharks', 'https://happysharksnft.com/static/media/gif.c4996dce.gif', '98', 2, '2022-01-24 00:57:59'),
(7, 'qzeg', 'https://happyhoppers.club/wp-content/uploads/2021/10/Happy-Hoppers-Club-Cardano-NFT-Frog.png', '200', 2, '2022-01-24 09:02:03'),
(8, 'qzeg', 'https://happyhoppers.club/wp-content/uploads/2021/10/Happy-Hoppers-Club-Cardano-NFT-Frog.png', '200', 2, '2022-01-24 09:03:14');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `product_cat`
-- (Voir ci-dessous la vue réelle)
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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` text NOT NULL COMMENT 'full name of employee',
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'email of employee that is unique',
  `pass` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Exact date of account creation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `fullName`, `tel`, `email`, `pass`, `createdAt`) VALUES
(1, 'imane moultamiss', '06', 'imane@gmail.com', '123', '2022-01-19 23:57:47'),
(2, 'mehdi', '06', 'mehdi@gmail.com', '123', '2022-01-20 00:58:29'),
(3, 'wxwc', '0A980A83', 'imanewcx@gmail.com', '123', '2022-01-23 19:53:17'),
(11, 'qef', '', 'moultamissimaneREQ01@gmail.com', '13234', '2022-01-23 20:41:50'),
(13, 'sdfg', 'q<zeg', 'moultamissimqergane01@gmail.com', '2464', '2022-01-23 20:42:21'),
(15, 'qreg', 'qdfgv', 'moultamissimawdfgne01@gmail.com', 'qqzegf', '2022-01-23 20:43:50'),
(16, 'Imane', '0673309342', 'imanelolirock@gmail.com', 'martingarrix', '2022-01-23 22:44:10'),
(17, 'trdky', '767565576', 'moultamissimane01@gmail.com', 'HRDJYTF', '2022-01-23 23:04:19'),
(18, 'trdkyqs', '767565576', 'moultamissiqsmane01@gmail.com', '123', '2022-01-23 23:06:02'),
(19, 'walid', '088', 'walidmoultamiss@gmail.com', '123', '2022-01-23 23:09:02'),
(20, 'qs', '0673309342', 'imanelolirocqsk@gmail.com', '123', '2022-01-23 23:12:29'),
(21, 'qsdqsd', '0673309342', 'wail@gmail.com', '123', '2022-01-23 23:15:37');

-- --------------------------------------------------------

--
-- Structure de la vue `product_cat`
--
DROP TABLE IF EXISTS `product_cat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_cat`  AS SELECT `product`.`id` AS `id`, `product`.`productName` AS `productName`, `product`.`imgSrc` AS `imgSrc`, `product`.`price` AS `price`, `product`.`createdAt` AS `createdAt`, `category`.`catName` AS `catName` FROM (`product` join `category`) WHERE `product`.`cat_id` = `category`.`id` ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`catName`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
