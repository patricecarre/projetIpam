-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 10 mai 2018 à 21:42
-- Version du serveur :  10.1.24-MariaDB
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shopipam`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `ID_ITEM` int(11) NOT NULL,
  `NAME_ITEM` varchar(255) NOT NULL,
  `PRICE_ITEM` decimal(10,2) DEFAULT '0.00',
  `REF_ITEM` varchar(255) DEFAULT 'ref fournisseur à encoder'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`ID_ITEM`, `NAME_ITEM`, `PRICE_ITEM`, `REF_ITEM`) VALUES
(1, 'latte 30cm', '5.20', '123456'),
(5, 'bic vert', '1.32', '32455'),
(7, 'gomme blanche', '1.00', '238675'),
(9, 'trombone', '0.12', '76534'),
(10, 'fluo jaune', '0.85', '234556'),
(11, 'perforatrice xl', '34.00', '534627'),
(13, 'agraphes', '45.20', 'ETGRSDY'),
(14, 'agraphes par 100', '5.12', '12345'),
(17, 'couteau suisse', '34.00', 'SOUISSNAILLF');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `ID_ORDER` int(11) NOT NULL,
  `ID_ITEM` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `QUANTITY` int(11) NOT NULL,
  `TOTAL_ORDER` decimal(10,2) NOT NULL,
  `REF_ORDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`ID_ORDER`, `ID_ITEM`, `ID_USER`, `QUANTITY`, `TOTAL_ORDER`, `REF_ORDER`) VALUES
(14, 5, 5, 2, '4.08', '2018-05-09 12:49:25'),
(15, 9, 5, 12, '4.08', '2018-05-09 12:49:25'),
(16, 1, 4, 12, '77.40', '2018-05-09 12:50:16'),
(17, 5, 4, 11, '77.40', '2018-05-09 12:50:16'),
(18, 9, 4, 4, '77.40', '2018-05-09 12:50:16'),
(19, 1, 4, 1, '7.84', '2018-05-09 12:54:49'),
(20, 5, 4, 2, '7.84', '2018-05-09 12:54:49'),
(21, 7, 4, 15, '15.36', '2018-05-09 13:02:33'),
(22, 9, 4, 3, '15.36', '2018-05-09 13:02:33'),
(23, 10, 4, 20, '20.00', '2018-05-09 13:05:48'),
(24, 9, 4, 2, '0.24', '2018-05-10 13:35:30'),
(25, 7, 4, 2, '138.00', '2018-05-10 13:39:20'),
(26, 11, 4, 4, '138.00', '2018-05-10 13:39:20'),
(27, 1, 6, 3, '16.08', '2018-05-10 14:04:06'),
(28, 9, 6, 4, '16.08', '2018-05-10 14:04:06'),
(29, 11, 6, 5, '170.00', '2018-05-10 14:14:44'),
(30, 10, 6, 8, '176.80', '2018-05-10 14:19:54'),
(31, 11, 6, 5, '176.80', '2018-05-10 14:19:54'),
(32, 7, 6, 12, '79.60', '2018-05-10 14:28:13'),
(33, 1, 6, 13, '79.60', '2018-05-10 14:28:13'),
(34, 1, 4, 1, '4567.94', '2018-05-10 17:58:17'),
(35, 5, 4, 2, '4567.94', '2018-05-10 17:58:17'),
(36, 9, 4, 20, '4567.94', '2018-05-10 17:58:17'),
(37, 10, 4, 2, '4567.94', '2018-05-10 17:58:17'),
(38, 11, 4, 1, '4567.94', '2018-05-10 17:58:17'),
(39, 13, 4, 100, '4567.94', '2018-05-10 17:58:17'),
(40, 7, 4, 2, '4567.94', '2018-05-10 17:58:17'),
(41, 17, 6, 1, '34.00', '2018-05-10 18:42:24'),
(42, 14, 6, 2, '10.24', '2018-05-10 18:48:07'),
(43, 7, 6, 3, '139.00', '2018-05-10 18:54:56'),
(44, 11, 6, 4, '139.00', '2018-05-10 18:54:56');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `NAME_USER` varchar(255) NOT NULL,
  `FORENAME_USER` varchar(255) NOT NULL,
  `LOGIN_USER` varchar(255) NOT NULL,
  `PWD_USER` varchar(255) NOT NULL,
  `LEVEL_USER` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_USER`, `NAME_USER`, `FORENAME_USER`, `LOGIN_USER`, `PWD_USER`, `LEVEL_USER`) VALUES
(2, 'carre', 'patrice', 'admin', '$2y$10$utSrBr8b78nMNIPj9gAE7OQyB/Np8MwJcGgRXTVYpQiJutE8.EG66', 'admin'),
(3, 'bruynbroeck', 'francois', 'fb', '$2y$10$iNwADoIEYfD7Fr2S9f5r7uixBil4dWldH8KCO7A5cMh90pFpgFWVm', 'user'),
(4, 'fassiau', 'genevieve', 'gfassiau', '$2y$10$vAJU8Upr2o8gfF995EnbH.5oUgv4dT2XL8UQOPKjLyX7oFdh1OwVa', 'user'),
(5, 'random', 'customer', 'rc', '$2y$10$hfmwB2CofeX6KbVPEZjEQ.lfjOuNETX1qmMp2ZemYhmgPqbxdDNJG', 'user'),
(6, 'q', 'q', 'q', '$2y$10$qlZxlXVuN2aD4NqDwBsc5uQySL1Ip4btkj6SIJEDHp0ERWdngiwwm', 'user'),
(7, 'w', 'w', 'w', '$2y$10$LYsWIwK4HGp1gmqiDF3RuO8bRG8yVpY4xAyv9lJZbVFF9QfsM24r.', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_ITEM`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_ORDER`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `ID_ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_ORDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
