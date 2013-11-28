-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 28 Novembre 2013 à 20:17
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
  `intitule` varchar(254) CHARACTER SET utf8 DEFAULT NULL,
  `icone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `intitule`, `icone`) VALUES
(1, 'Beauté', ''),
(2, 'Bien-Être', ''),
(3, 'Gastronomie', ''),
(4, 'Loisirs', ''),
(5, 'Shopping', ''),
(6, 'Voyages', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `user_id`, `deal_id`, `quantite`, `prixTotal`, `estPayer`) VALUES
(1, 29, 1, 1, 1300, 1);

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
  `dateAjout` timestamp NULL DEFAULT NULL,
  `dateFin` datetime DEFAULT NULL,
  `prixInitial` double DEFAULT NULL,
  `prixReduit` double DEFAULT NULL,
  `qteDisponible` int(11) DEFAULT NULL,
  `maxParAchat` int(11) DEFAULT NULL,
  `isFeatured` tinyint(1) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `deals`
--


-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_oauth` bigint(20) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `motDePasse` varchar(254) DEFAULT NULL,
  `telephone` varchar(254) DEFAULT NULL,
  `ville` varchar(254) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `activer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_oauth`, `nom`, `prenom`, `email`, `motDePasse`, `telephone`, `ville`, `type`, `activer`) VALUES
(29, 1364479992, 'Souala', 'Haithem', 'soualahaitem@yahoo.fr', NULL, NULL, 'Bouznika', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `nomVille`) VALUES
(1, 'Casablanca'),
(2, 'Marrakech'),
(3, 'Rabat'),
(4, 'Tanger');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
