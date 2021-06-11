-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 juin 2021 à 07:52
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
-- Base de données : `ipssi-spa`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `species` varchar(255) DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `race` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `description` text,
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `name`, `species`, `size`, `race`, `gender`, `birthdate`, `color`, `description`, `location`) VALUES
(2, 'Roger', 'Rat', '12cm', 'Piko', 'Male', '2021-06-10', 'Noir', 'Beau rats ouah maschallah', 'Paris'),
(3, 'Nom de l\'animal', 'EspÃ¨ce', 'Taille', 'Race', 'Sexe', '2021-06-24', 'Couleur', '', 'Localisation'),
(4, 'Nom de l\'animal', 'EspÃ¨ce', 'Taille', 'Race', 'Sexe', '2021-06-03', 'Couleur', '', 'Localisation'),
(5, 'Nom de l\'animal', 'EspÃ¨ce', 'Taille', 'Race', 'Sexe', '2021-07-07', 'Couleur', '', 'Localisation'),
(6, 'Nom de l\'animal', 'EspÃ¨ce', 'Taille', 'Race', 'Sexe', '2021-06-05', 'Couleur', '', 'Localisation');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
(5, 'Titre', 'a'),
(6, 'titre de l\'article', 'LOL');

-- --------------------------------------------------------

--
-- Structure de la table `donations`
--

DROP TABLE IF EXISTS `donations`;
CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `donation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donations`
--

INSERT INTO `donations` (`id`, `lastName`, `firstName`, `message`, `donation`) VALUES
(1, 'lastName', 'firstName', 'message', 1),
(2, 'Nom', 'PrÃ©nom', 'a', 1),
(3, 'Nom', 'PrÃ©nom', 'a', 1),
(4, 'Nom', 'PrÃ©nom', 'a', 1),
(5, 'Nom', 'PrÃ©nom', 'a', 1),
(6, 'Nom', 'PrÃ©nom', 'a', 1),
(7, 'Nom', 'PrÃ©nom', 'Merci beaucoup', 1),
(8, 'Ghilardi', 'Logan', 'Merci', 10),
(9, 'Nom', 'PrÃ©nom', 'a', 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(59, 'ProductNameaa', 'a', 1),
(60, 'ProductName', '', 1),
(61, 'ProductName', '', 1),
(62, 'ProductName', '', 1),
(64, 'ProductName', '', 1),
(65, 'ProductName', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
