-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 03 juin 2024 à 13:13
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

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

CREATE TABLE `avis` (
  `idAvis` varchar(50) NOT NULL,
  `Texte` text,
  `Note` decimal(2,1) NOT NULL,
  `Date_de_publication` date NOT NULL,
  `idClient` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

CREATE TABLE `biere` (
  `idBiere` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Degre_d_alcool` decimal(3,1) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Contenance` int(11) NOT NULL,
  `Prix` decimal(4,2) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Valeurs_nutritionnelles` varchar(300) NOT NULL,
  `Disponibilite` varchar(50) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Bouteille` varchar(255) NOT NULL,
  `Accroche` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`idBiere`, `Nom`, `Degre_d_alcool`, `Ingredients`, `Contenance`, `Prix`, `Description`, `Valeurs_nutritionnelles`, `Disponibilite`, `Photo`, `Bouteille`, `Accroche`) VALUES
('1', 'Souffle Sichuanais', '5.5', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/poivre de Sichuan: 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière blonde au poivre de Sichuan d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'oui', 'mockuprougeredimensionne.png', 'bouteillerouge.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec le poivre de Sichuan.'),
('2', 'Venin sucré', '7.0', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/miel : 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière ambrée miel d’inspiration belge non filtrée non pasteurisée. ', 'Contient du gluten', 'oui', 'mockuporangeredimensionne.png', 'bouteilleorange.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec du miel.'),
('3', 'Pavot Abyssal', '6.0', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/fleur de pavot : 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière blanche au pavot bleu d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupbleuredimensionne.png', 'bouteillebleue.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec de la fleur de pavot.'),
('4', 'Lavande Cosmique', '5.0', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/lavande : 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière brune à la lavande d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupvioletredimensionne.png', 'bouteilleviolette.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec de la lavande.'),
('5', 'Menthe céleste', '6.0', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/menthe : 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière ambrée mentholée d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupvertredimensionne.png', 'bouteilleverte.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec de la menthe.'),
('6', 'Soleil Ardent', '7.0', 'eau : 92,04%/malts/houblon : 0,17%/levure : 0,04%/curry : 0,03%/graines de coriandre : 0,05%', 75, '3.00', 'Bière blonde au curry d’inspiration belge non filtrée non pasteurisée.', 'Contient du gluten', 'Oui', 'mockupjauneredimensionne.png', 'bouteillejaune.png', 'Une bière qui vous fera voyager à travers un mélange d\'agrumes et épices, avec du curry.');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Adresse_email` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Date_de_naissance` int(11) NOT NULL,
  `Adresse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `commande` (
  `idCommande` varchar(50) NOT NULL,
  `Statut` varchar(50) NOT NULL,
  `Date_de_commande` date NOT NULL,
  `idClient` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `contenir` (
  `idBiere` varchar(50) NOT NULL,
  `idCommande` varchar(50) NOT NULL,
  `quantité` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_de_contact`
--

DROP TABLE IF EXISTS `formulaire_de_contact`;
CREATE TABLE IF NOT EXISTS `formulaire_de_contact` (
  `idFormulaire_de_contact` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date_message` date NOT NULL,
  `idClient` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idFormulaire_de_contact`),
  KEY `idClient` (`idClient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idPaiement` varchar(50) NOT NULL,
  `Montant` decimal(5,2) NOT NULL,
  `Date_de_paiement` date NOT NULL,
  `idCommande` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `biere`
--
ALTER TABLE `biere`
  ADD PRIMARY KEY (`idBiere`),
  ADD UNIQUE KEY `Nom` (`Nom`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
  ADD UNIQUE KEY `Adresse_email` (`Adresse_email`),
  ADD UNIQUE KEY `Telephone` (`Telephone`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`idBiere`,`idCommande`),
  ADD KEY `idCommande` (`idCommande`);

--
-- Index pour la table `formulaire_de_contact`
--
ALTER TABLE `formulaire_de_contact`
  ADD PRIMARY KEY (`idFormulaire_de_contact`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idPaiement`),
  ADD UNIQUE KEY `idCommande` (`idCommande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
