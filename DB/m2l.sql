-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 mars 2018 à 22:53
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--
CREATE DATABASE IF NOT EXISTS `m2l` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `m2l`;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `idAssociation` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`idAssociation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`idAssociation`, `nom`, `adresse`, `codepostal`, `tel`, `email`) VALUES
(1, 'sportVie', '28 avenue de la redoute', '92600', '0654217895', 'sportvie@yahoo.com');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `titre`, `descriptif`) VALUES
(1, 'SST', 'Cours de secourisme'),
(2, 'massage ', 'Cours de massage cardiaque');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `idSession` int(11) NOT NULL,
  PRIMARY KEY (`idPersonne`),
  KEY `idSession` (`idSession`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
CREATE TABLE IF NOT EXISTS `intervenant` (
  `idIntervenant` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `codepostal` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`idIntervenant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnelassociatif`
--

DROP TABLE IF EXISTS `personnelassociatif`;
CREATE TABLE IF NOT EXISTS `personnelassociatif` (
  `idPersonnel` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `codepostal` varchar(15) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `idAssociation` int(11) NOT NULL,
  PRIMARY KEY (`idPersonnel`),
  KEY `idAssociation` (`idAssociation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sessionformation`
--

DROP TABLE IF EXISTS `sessionformation`;
CREATE TABLE IF NOT EXISTS `sessionformation` (
  `idSession` int(15) NOT NULL AUTO_INCREMENT,
  `datelimiteinsc` datetime DEFAULT NULL,
  `datedebut` date NOT NULL,
  `salle` varchar(255) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `idIntervenant` int(11) NOT NULL,
  PRIMARY KEY (`idSession`),
  KEY `idFormation` (`idFormation`),
  KEY `idIntervenant` (`idIntervenant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `idTag` int(11) NOT NULL AUTO_INCREMENT,
  `lebelle` varchar(255) NOT NULL,
  PRIMARY KEY (`idTag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

DROP TABLE IF EXISTS `theme`;
CREATE TABLE IF NOT EXISTS `theme` (
  `idTag` int(11) NOT NULL AUTO_INCREMENT,
  `idFormation` int(11) NOT NULL,
  PRIMARY KEY (`idTag`),
  KEY `idFormation` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `idSession` FOREIGN KEY (`idSession`) REFERENCES `sessionformation` (`idSession`);

--
-- Contraintes pour la table `personnelassociatif`
--
ALTER TABLE `personnelassociatif`
  ADD CONSTRAINT `idAssociation` FOREIGN KEY (`idAssociation`) REFERENCES `association` (`idAssociation`);

--
-- Contraintes pour la table `sessionformation`
--
ALTER TABLE `sessionformation`
  ADD CONSTRAINT `idIntervenant` FOREIGN KEY (`idIntervenant`) REFERENCES `intervenant` (`idIntervenant`),
  ADD CONSTRAINT `sessionformation_ibfk_1` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `theme`
--
ALTER TABLE `theme`
  ADD CONSTRAINT `idFormation` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
