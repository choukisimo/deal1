-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 15 Novembre 2013 à 23:32
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12



--
-- Base de données: `deal`
--
CREATE DATABASE IF NOT EXISTS `deal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `deal`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prixTotal` double DEFAULT NULL,
  `estPayer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(254) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `conditions` varchar(350) DEFAULT NULL,
  `image` varchar(254) DEFAULT NULL,
  `fournisseur` varchar(100) DEFAULT NULL,
  `adresse` varchar(254) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `dateAjout` datetime DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  `prixInitial` double DEFAULT NULL,
  `prixReduit` double DEFAULT NULL,
  `qteDisponible` int(11) DEFAULT NULL,
  `maxParAchat` int(11) DEFAULT NULL,
  `isFeatured` tinyint(1) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_oauth` varchar(254) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `genre` char(1) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `motDePasse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `ville` varchar(254) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

