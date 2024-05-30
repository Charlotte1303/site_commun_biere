-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 mai 2024 à 20:57
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
-- Base de données : `infinite`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Texte` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `Note` decimal(2,1) NOT NULL,
  `Date_de_publication` date NOT NULL,
  `idClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idAvis`),
  KEY `idClient` (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

DROP TABLE IF EXISTS `biere`;
CREATE TABLE IF NOT EXISTS `biere` (
  `idBiere` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Degre_d_alcool` decimal(3,1) NOT NULL,
  `Ingredients` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Contenance` int NOT NULL,
  `Prix` decimal(4,2) NOT NULL,
  `Description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Valeurs_nutritionnelles` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Disponibilite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idBiere`),
  UNIQUE KEY `Nom` (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`idBiere`, `Nom`, `Degre_d_alcool`, `Ingredients`, `Contenance`, `Prix`, `Description`, `Valeurs_nutritionnelles`, `Disponibilite`, `Photo`) VALUES
('1', 'Souffle Sichuanais', '5.5', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, levure 0,04%, poivre de Sichuan 0,03%, graines de coriandre 0,05%.', 75, '3.00', 'Bière blonde au poivre de Sichuan d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'oui', 'mockuprougeredimensionne.png'),
('2', 'Venin sucré', '7.0', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, levure 0,04%, poivre de miel 0,03%, graines de coriandre 0,05%.', 75, '3.00', 'Bière ambrée miel d’inspiration belge non filtrée non pasteurisée. ', 'Contient du gluten', 'oui', 'mockuporangeredimensionne.png'),
('3', 'Pavot Abyssal', '6.0', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, levure 0,04%, fleur de pavot bleu 0,03%, graines de coriandre 0,05%.', 75, '3.00', 'Bière blanche au pavot bleu d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupbleuredimensionne.png'),
('4', 'Lavande Cosmique', '5.0', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, levure 0,04%, lavande 0,03%, graines de coriandre 0,05%.', 75, '3.00', 'Bière brune à la lavande d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupvioletredimensionne.png'),
('5', 'Menthe céleste', '6.0', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, levure 0,04%, menthe 0,03%, graines de coriandre 0,05%.', 75, '3.00', 'Bière ambrée mentholée d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupvertredimensionne.png'),
('6', 'Soleil Ardent', '7.0', 'Ingrédients: eau 92,04%, malts, houblon 0,17%, lev', 75, '3.00', 'Bière blonde au curry d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupjauneredimensionne.png');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prénom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Adresse_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date_de_naissance` int NOT NULL,
  `Adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idClient`),
  UNIQUE KEY `Adresse_email` (`Adresse_email`),
  UNIQUE KEY `Telephone` (`Telephone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `Prénom`, `Nom`, `Adresse_email`, `Telephone`, `Date_de_naissance`, `Adresse`) VALUES
('1', 'Florian', 'Gossent', 'flogo@gmail.com', '06.67.84.32.10', 1970, '2 Avenue du Pont, Tours'),
('2', 'Florianne', 'Legrand', 'floriannelg@gmail.com', '06.81.67.47.90', 1990, '6 Rue Dumur, Avignon');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Statut` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date_de_commande` date NOT NULL,
  `idClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idCommande`),
  KEY `idClient` (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `Statut`, `Date_de_commande`, `idClient`) VALUES
('1', 'En cours de traitement', '2024-02-14', '1'),
('2', 'livraison effectuée', '2024-03-28', '2');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `idBiere` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idCommande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantité` int NOT NULL,
  PRIMARY KEY (`idBiere`,`idCommande`),
  KEY `idCommande` (`idCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_de_contact`
--

DROP TABLE IF EXISTS `formulaire_de_contact`;
CREATE TABLE IF NOT EXISTS `formulaire_de_contact` (
  `idFormulaire_de_contact` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `idClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFormulaire_de_contact`),
  KEY `idClient` (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formulaire_de_contact`
--

INSERT INTO `formulaire_de_contact` (`idFormulaire_de_contact`, `message`, `email`, `nom`, `idClient`) VALUES
('', 'test\r\n', 'jeanvoinecharlotte@gmail.com', 'Charlotte Jeanvoine', '');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idPaiement` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Montant` decimal(5,2) NOT NULL,
  `Date_de_paiement` date NOT NULL,
  `idCommande` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idPaiement`),
  UNIQUE KEY `idCommande` (`idCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
