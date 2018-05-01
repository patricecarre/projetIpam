-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 02 mai 2018 à 00:40
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
(5, 'bic vert', '1.32', '32455');

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
(1, 'patrice', 'carre', 'admin', 'admin', 'admin'),
(2, 'francois', 'bruynbroeck', 'fbruynb', '123', 'user'),
(6, 'fassiau', 'genevieve', 'gfassiau', '123', 'user'),
(7, 'carre', 'patrice', 'pcarre', '123', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ID_ITEM`);

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
  MODIFY `ID_ITEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
