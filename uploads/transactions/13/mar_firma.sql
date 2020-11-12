-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 oct. 2020 à 13:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `adminlite`
--

-- --------------------------------------------------------

--
-- Structure de la table `mar_firma`
--

DROP TABLE IF EXISTS `mar_firma`;
CREATE TABLE IF NOT EXISTS `mar_firma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(200) NOT NULL,
  `strabe` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `hausnummer` varchar(250) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `firm_id` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `mobil` varchar(250) NOT NULL,
  `phonenumber_1` varchar(200) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `default_language` varchar(50) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `userid` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `mar_firma`
--

INSERT INTO `mar_firma` (`id`, `company`, `strabe`, `country`, `hausnummer`, `zip`, `city`, `state`, `vorname`, `nachname`, `email`, `firm_id`, `website`, `mobil`, `phonenumber_1`, `phonenumber`, `favicon`, `logo`, `default_language`, `copyright`, `created_at`, `userid`, `updated_at`, `active`) VALUES
(1, 'Plateform lm', '', '', 'haus', '', 'jjjjjjjjjjjjjjjjj', '', '', '', 'simon@nusyce.com', '', '', '', '65556625', '699782027', 'assets/img/353bad7f60919e800ac6011cb3c5d385.png', 'assets/img/6b4509237c9f5c1ba9b4c8b5f6202fad.png', '2', 'Copyright © 2019 Plateform All rights reserved.', '2020-06-23 00:12:24', 1, '2020-10-05 07:10:29', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
