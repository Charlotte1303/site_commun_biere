-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 mai 2024 à 17:32
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infinite_biere`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis_`
--

DROP TABLE IF EXISTS `avis_`;
CREATE TABLE IF NOT EXISTS `avis_` (
  `ID_avis` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `commentaires` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `note` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_avis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis_`
--

INSERT INTO `avis_` (`ID_avis`, `commentaires`, `note`) VALUES
('Jacke', 'Super bière, je recommande +++, livraison rapide e', '5/5'),
('charlotte', 'top, étiquette fun', '5/5');

-- --------------------------------------------------------

--
-- Structure de la table `bière`
--

DROP TABLE IF EXISTS `bière`;
CREATE TABLE IF NOT EXISTS `bière` (
  `ID_bière` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nom_bière` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `quantité` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prix` int DEFAULT NULL,
  `description` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_bière`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bière`
--

INSERT INTO `bière` (`ID_bière`, `nom_bière`, `quantité`, `prix`, `description`) VALUES
('1', 'Souffle Sichuanais', '1', 6, 'Bière blonde au poivre de Sichuan, ingrédients: Ea'),
('2', 'Menthe Celeste', '5', 6, 'Bière blonde à la menthe, ingrédients: Menthe; cor');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_client` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `adresse_email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `âge` int DEFAULT NULL,
  `telephone` int DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID_client`, `adresse_email`, `âge`, `telephone`, `adresse`) VALUES
('Jacke_Moulin', 'jackemoulin@gmail.com', 23, 664923726, '40 Rue du Bourbier'),
('Charlotte1303', 'jeanvoinecharlotte@gmail.com', 19, 664923726, '40 Rue de la casse ');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ID_commande` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `la_date` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `infos_bancaire` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`ID_commande`, `la_date`, `infos_bancaire`) VALUES
('#366455453465', '21/12/2012', 'Visa, Jacke Moulin, 01/26, 323'),
('#377455453465', '13/03/2020', 'Visa, Charlotte Jeanvoine, 01/26, 153');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `ID_bière` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ID_commande` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_bière`,`ID_commande`),
  KEY `ID_commande` (`ID_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contenir`
--

INSERT INTO `contenir` (`ID_bière`, `ID_commande`) VALUES
('1', '#366455453465');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `ID_livraison` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `num_de_suivi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transporteur` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type_de_livraison` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date_d_arrivée` datetime DEFAULT NULL,
  `ID_commande` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_livraison`),
  KEY `ID_commande` (`ID_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`ID_livraison`, `num_de_suivi`, `transporteur`, `type_de_livraison`, `date_d_arrivée`, `ID_commande`) VALUES
('2525', '#130305', 'Colissimo', 'normal', '2012-12-30 18:48:27', '#366455453465'),
('1025', '#140305', 'Fedex', 'express', '2020-03-20 14:48:24', '#377455453465');

-- --------------------------------------------------------

--
-- Structure de la table `passer`
--

DROP TABLE IF EXISTS `passer`;
CREATE TABLE IF NOT EXISTS `passer` (
  `ID_client` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ID_commande` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `quantité` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_client`,`ID_commande`),
  KEY `ID_commande` (`ID_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `passer`
--

INSERT INTO `passer` (`ID_client`, `ID_commande`, `quantité`) VALUES
('Jacke_Moulin', '#366455453465', '1');

-- --------------------------------------------------------

--
-- Structure de la table `poster`
--

DROP TABLE IF EXISTS `poster`;
CREATE TABLE IF NOT EXISTS `poster` (
  `ID_client` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ID_avis` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_client`,`ID_avis`),
  KEY `ID_avis` (`ID_avis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `poster`
--

INSERT INTO `poster` (`ID_client`, `ID_avis`) VALUES
('Jacke_Moulin', 'Jacke');

-- --------------------------------------------------------

--
-- Structure de la table `sav`
--

DROP TABLE IF EXISTS `sav`;
CREATE TABLE IF NOT EXISTS `sav` (
  `ID_sav` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `reclamation` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID_sav`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sav`
--

INSERT INTO `sav` (`ID_sav`, `reclamation`) VALUES
('Jacke77', 'Livraison en retard d\'un jour mais j\'ai laissé un ');

-- --------------------------------------------------------

--
-- Structure de la table `soliciter`
--

DROP TABLE IF EXISTS `soliciter`;
CREATE TABLE IF NOT EXISTS `soliciter` (
  `ID_client` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ID_sav` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_client`,`ID_sav`),
  KEY `ID_sav` (`ID_sav`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `soliciter`
--

INSERT INTO `soliciter` (`ID_client`, `ID_sav`) VALUES
('Jacke_Moulin', 'Jacke77');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
