-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 06 Juin 2016 à 10:55
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cll`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `letitre` varchar(200) DEFAULT NULL,
  `lurl` varchar(505) DEFAULT NULL,
  `lalt` varchar(305) DEFAULT NULL,
  `id_rubrique` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `letitre`, `lurl`, `lalt`, `id_rubrique`) VALUES
(2, 'Test 1', 'test_images/1.jpg', 'photo1', 1),
(3, 'Test 2', 'test_images/2.jpg', 'p2', 1),
(4, 'Test 3', 'test_images/3.jpg', 'p3', 1),
(5, 'Test 4', 'test_images/4.jpg', 'p4', 1),
(6, 'Test 5', 'test_images/5.jpg', 'p5', 1),
(7, 'Test 6', 'test_images/6.jpg', 'p6', 1),
(8, 'Test 7', 'test_images/7.jpg', 'p7', 1),
(9, 'Test 8', 'test_images/8.jpg', 'p8', 1),
(10, 'Test 9', 'test_images/9.jpg', 'p9', 1),
(11, 'Test 10', 'test_images/10.jpg', 'p10', 1),
(12, 'Test 11', 'test_images/11.jpg', 'p11', 1),
(13, 'test 12', 'test_images/12.jpg', 'p12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rubrique`
--

INSERT INTO `rubrique` (`id`, `nom`) VALUES
(1, 'accueil'),
(2, 'presentation'),
(3, 'galerie'),
(4, 'contact');

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

CREATE TABLE `textes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `descFR` text CHARACTER SET utf8 NOT NULL,
  `descNL` text CHARACTER SET utf8 NOT NULL,
  `descEN` text CHARACTER SET utf8 NOT NULL,
  `id_rubrique` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `textes`
--

INSERT INTO `textes` (`id`, `nom`, `descFR`, `descNL`, `descEN`, `id_rubrique`) VALUES
(1, 'DescAccueil', 'test Text FR test Text FR test Text FR test Text FR test Text FR test Text FR test Text FRtest Text FRtest Text FRtest Text FR test Text FR test Text FRtest Text FRtest Text FRtest Text FR test Text FRtest Text FRtest Text FRtest Text FRtest Text FR test Text FR', 'test Text NL test Text NL test Text NL test Text NLtest Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NL', 'test Text EN test Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text EN test Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text EN test Text ENtest Text ENtest Text ENtest Text EN', 1);

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `titreFR` varchar(250) DEFAULT NULL,
  `titreNL` varchar(250) DEFAULT NULL,
  `titreEN` varchar(250) DEFAULT NULL,
  `id_rubrique` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `titres`
--

INSERT INTO `titres` (`id`, `nom`, `titreFR`, `titreNL`, `titreEN`, `id_rubrique`) VALUES
(5, 'nomDuTitre', 'testTitreFR', 'testTitreNL', 'testTitreEN', 1),
(6, 'GrandTitre', 'Bienvenu à Créons la Lune\r\n', 'NL à Créons la Lune\r\n', 'Welcome to creons la lune', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(10) unsigned NOT NULL,
  `lenom` varchar(100) DEFAULT NULL,
  `lemail` varchar(150) DEFAULT NULL,
  `lepass` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `lenom`, `lemail`, `lepass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rubrique` (`id_rubrique`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `textes`
--
ALTER TABLE `textes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rubrique` (`id_rubrique`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rubrique` (`id_rubrique`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lenom_UNIQUE` (`lenom`),
  ADD UNIQUE KEY `lemail_UNIQUE` (`lemail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `rubrique`
--
ALTER TABLE `rubrique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `textes`
--
ALTER TABLE `textes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubrique` (`id`);

--
-- Contraintes pour la table `textes`
--
ALTER TABLE `textes`
  ADD CONSTRAINT `textes_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubrique` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `titres`
--
ALTER TABLE `titres`
  ADD CONSTRAINT `titres_ibfk_1` FOREIGN KEY (`id_rubrique`) REFERENCES `rubrique` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
