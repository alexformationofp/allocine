-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 22 nov. 2019 à 10:06
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocine`
--
CREATE DATABASE IF NOT EXISTS `allocine` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `allocine`;

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id_acteurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_acteurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_films` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `synopsis` text NOT NULL,
  `duree` int(11) NOT NULL,
  PRIMARY KEY (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `joue`
--

DROP TABLE IF EXISTS `joue`;
CREATE TABLE IF NOT EXISTS `joue` (
  `id_acteurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_acteurs`,`id_films`),
  KEY `joue_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `id_genre` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_genre`,`id_films`),
  KEY `possede_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id_realisateurs` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_realisateurs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `realise`
--

DROP TABLE IF EXISTS `realise`;
CREATE TABLE IF NOT EXISTS `realise` (
  `id_realisateurs` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateurs`,`id_films`),
  KEY `realise_films0_FK` (`id_films`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `joue`
--
ALTER TABLE `joue`
  ADD CONSTRAINT `joue_acteurs_FK` FOREIGN KEY (`id_acteurs`) REFERENCES `acteurs` (`id_acteurs`),
  ADD CONSTRAINT `joue_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`),
  ADD CONSTRAINT `possede_genres_FK` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);

--
-- Contraintes pour la table `realise`
--
ALTER TABLE `realise`
  ADD CONSTRAINT `realise_films0_FK` FOREIGN KEY (`id_films`) REFERENCES `films` (`id_films`),
  ADD CONSTRAINT `realise_realisateurs_FK` FOREIGN KEY (`id_realisateurs`) REFERENCES `realisateurs` (`id_realisateurs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
