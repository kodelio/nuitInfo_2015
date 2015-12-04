-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Décembre 2015 à 03:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rgdyprykza`
--

CREATE DATABASE rgdyprykza;

-- --------------------------------------------------------

--
-- Structure de la table `asso_chef_crise`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`asso_chef_crise` (
  `ID_USER` int(11) NOT NULL,
  `ID_CRISE` int(11) NOT NULL,
  KEY `ID_USER` (`ID_USER`,`ID_CRISE`),
  KEY `ID_CRISE` (`ID_CRISE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `asso_chef_user`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`asso_chef_user` (
  `ID_CHEF` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  KEY `ID_CHEF` (`ID_CHEF`,`ID_USER`),
  KEY `ID_USER` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `asso_lieu_crise`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`asso_lieu_crise` (
  `ID_CRISE` int(11) NOT NULL,
  `ID_LIEU` int(11) NOT NULL,
  KEY `ID_CRISE` (`ID_CRISE`,`ID_LIEU`),
  KEY `ID_LIEU` (`ID_LIEU`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `asso_operation_crise`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`asso_operation_crise` (
  `ID_CRISE` int(11) NOT NULL,
  `ID_OPERATION` int(11) NOT NULL,
  KEY `idCrise` (`ID_CRISE`,`ID_OPERATION`),
  KEY `ID_OPERATION` (`ID_OPERATION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `asso_user_op`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`asso_user_op` (
  `ID_USER` int(11) NOT NULL,
  `ID_OPERATION` int(11) NOT NULL,
  KEY `ID_USER` (`ID_USER`,`ID_OPERATION`),
  KEY `ID_OPERATION` (`ID_OPERATION`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `crise`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`crise` (
  `ID_CRISE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `DATE_DEB` date NOT NULL,
  `DATE_FIN` date DEFAULT NULL,
  `LOCALISATION_X` double NOT NULL,
  `LOCALISATION_Y` double NOT NULL,
  `DESC_ZONE` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_CRISE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `crise`
--

INSERT INTO rgdyprykza.`crise` (`ID_CRISE`, `NOM`, `DESCRIPTION`, `DATE_DEB`, `DATE_FIN`, `LOCALISATION_X`, `LOCALISATION_Y`, `DESC_ZONE`) VALUES
(1, 'Tsunami', 'Une mega vague approche !', '2015-12-04', '2015-12-05', 900, 450, 'Ocean du Japon -_-'),
(2, 'Incendie', 'Jaina invoque CHOC DE FLAMME !', '2015-12-20', '2015-12-21', 200, 500, 'Foret tropicale'),
(3, 'Seisme', 'Ca va vibrer !', '2015-12-15', '2015-12-15', 900, 500, 'Japan again :'')'),
(4, 'Terrorisme', 'No comment :/ Pray For Paris', '2015-11-13', '2015-11-13', 500, 600, 'Paris :''('),
(5, 'Epidemie', 'Atchoum ! :s', '2016-01-01', '2016-12-31', 550, 600, 'Syrie'),
(6, 'Radioactivite', 'Explosion de reacteurs nucleaires !', '1986-04-26', '1986-04-26', 550, 650, 'Tchernobyl'),
(7, 'Chute d''asteroide', 'Un caillou de 200km de diametre approche ! :o', '2016-06-21', '2016-06-21', 100, 500, 'Ocean atlantic'),
(8, 'Guerre', 'Pan-pan ! tulut-tulut ! BOOM ! Terrorist dead by Poutin, Obama and Hollande.', '2015-11-13', NULL, 600, 500, 'Syrie'),
(9, 'Fin du monde', 'Bon bah... Profitez bien de vos dernier jours ! RIP WORLD.', '2050-12-25', NULL, 500, 500, 'Planete'),
(10, 'Invasion d''alien', 'E.T, Destroy planet !', '2016-03-10', NULL, 250, 600, 'USA, NY'),
(11, 'Famine', 'Y''a plus de bouffe les mecs !', '2025-01-01', NULL, 550, 400, 'Afrique');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`lieu` (
  `ID_LIEU` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `VILLE` varchar(255) NOT NULL,
  `PAYS` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_LIEU`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `lieu`
--

INSERT INTO rgdyprykza.`lieu` (`ID_LIEU`, `NOM`, `TYPE`, `DESCRIPTION`, `VILLE`, `PAYS`) VALUES
(1, 'Hopital Pasteur', 'Hopital', NULL, 'Nice', 'France'),
(2, 'Centre pompidou', 'Centre medical', NULL, 'Paris', 'France'),
(3, 'Pharmacie CAP-3000', 'Pharmacie', 'Sans ordonnance !', 'Saint-Laurent', 'France'),
(4, 'Bunker atomique dans mon jardin', 'Bunker', 'Ressources et protection pour 50 années minimum. 10 personnes max', 'Nice', 'France'),
(5, 'Caserne pompier', 'Caserne', NULL, 'Toulouse', 'France'),
(6, 'Commiceriat de Contes', 'Police', NULL, 'Contes', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`operation` (
  `ID_USER` int(11) NOT NULL,
  `ID_OPERATION` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_OPERATION`),
  KEY `idUser` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `operation`
--

INSERT INTO rgdyprykza.`operation` (`ID_USER`, `ID_OPERATION`, `NOM`) VALUES
(2, 1, 'A vos planches !'),
(2, 2, 'Sortez vos barbeuc !'),
(2, 3, 'Wait and see'),
(2, 4, 'Tous chez Jawad !'),
(2, 5, 'Quarantaine'),
(2, 6, 'Masque à gaz oblige x)'),
(2, 7, 'Envoyez apolo !'),
(2, 8, 'Grde à vous soldat ! Exterminez moi ces vermines !'),
(2, 9, 'Profitez de vos jours restant'),
(2, 10, 'Prenez vos pistolets laser, la guerre est declare !'),
(2, 11, 'Largage de patate !');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS rgdyprykza.`utilisateur` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_USER` int(11) NOT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `PWD` varchar(20) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO rgdyprykza.`utilisateur` (`ID_USER`, `TYPE_USER`, `LOGIN`, `PWD`, `mail`) VALUES
(1, 1, 'secours', 'secours', 'marc-secour@gmail.com'),
(2, 2, 'chef', 'chef', 'pierre-chefsecour@gmail.com'),
(3, 3, 'admin', 'admin', 'superadminAltF4@gmail.com');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `asso_chef_crise`
--
ALTER TABLE rgdyprykza.`asso_chef_crise`
  ADD CONSTRAINT `asso_chef_crise_ibfk_2` FOREIGN KEY (`ID_CRISE`) REFERENCES `crise` (`ID_CRISE`),
  ADD CONSTRAINT `asso_chef_crise_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `asso_chef_user`
--
ALTER TABLE rgdyprykza.`asso_chef_user`
  ADD CONSTRAINT `asso_chef_user_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`),
  ADD CONSTRAINT `asso_chef_user_ibfk_1` FOREIGN KEY (`ID_CHEF`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `asso_lieu_crise`
--
ALTER TABLE rgdyprykza.`asso_lieu_crise`
  ADD CONSTRAINT `asso_lieu_crise_ibfk_2` FOREIGN KEY (`ID_LIEU`) REFERENCES `lieu` (`ID_LIEU`),
  ADD CONSTRAINT `asso_lieu_crise_ibfk_1` FOREIGN KEY (`ID_CRISE`) REFERENCES `crise` (`ID_CRISE`);

--
-- Contraintes pour la table `asso_operation_crise`
--
ALTER TABLE rgdyprykza.`asso_operation_crise`
  ADD CONSTRAINT `asso_operation_crise_ibfk_2` FOREIGN KEY (`ID_OPERATION`) REFERENCES `operation` (`ID_OPERATION`),
  ADD CONSTRAINT `asso_operation_crise_ibfk_1` FOREIGN KEY (`ID_CRISE`) REFERENCES `crise` (`ID_CRISE`);

--
-- Contraintes pour la table `asso_user_op`
--
ALTER TABLE rgdyprykza.`asso_user_op`
  ADD CONSTRAINT `asso_user_op_ibfk_2` FOREIGN KEY (`ID_OPERATION`) REFERENCES `operation` (`ID_OPERATION`),
  ADD CONSTRAINT `asso_user_op_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

--
-- Contraintes pour la table `operation`
--
ALTER TABLE rgdyprykza.`operation`
  ADD CONSTRAINT `operation_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `utilisateur` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
