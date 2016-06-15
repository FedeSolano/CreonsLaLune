-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Juin 2016 à 16:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cll`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `letitre` varchar(200) DEFAULT NULL,
  `lurl` varchar(505) DEFAULT NULL,
  `altFR` varchar(305) DEFAULT NULL,
  `altNL` varchar(305) DEFAULT NULL,
  `altEN` varchar(305) DEFAULT NULL,
  `id_rubrique` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rubrique` (`id_rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `letitre`, `lurl`, `altFR`, `altNL`, `altEN`, `id_rubrique`) VALUES
(2, 'Test 1', 'test_images/1.jpg', 'photo1FR', 'photo1NL', 'photo1EN', 3),
(3, 'Test 2', 'test_images/2.jpg', 'p2FR', 'p2NL', 'p2EN', 3),
(4, 'Test 3', 'test_images/3.jpg', 'p3FR', 'p3NL', 'p3EN', 3),
(5, 'Test 4', 'test_images/4.jpg', 'p4', 'p4NL', 'p4EN', 3),
(6, 'Test 5', 'test_images/5.jpg', 'p5FR', 'p5NL', 'p5EN', 3),
(7, 'Test 6', 'test_images/6.jpg', 'p6FR', 'p6NL', 'p6EN', 3),
(8, 'Test 7', 'test_images/7.jpg', 'p7FR', 'p7NL', 'p7EN', 3),
(9, 'Test 8', 'test_images/8.jpg', 'p8FR', 'p8NL', 'p8EN', 3),
(10, 'Test 9', 'test_images/9.jpg', 'p9FR', 'p9NL', 'p9EN', 3),
(11, 'Test 10', 'test_images/10.jpg', 'p10FR', 'p10NL', 'p10EN', 3),
(12, 'Test 11', 'test_images/11.jpg', 'p11FR', 'p11NL', 'p11EN', 3),
(13, 'test 12', 'test_images/12.jpg', 'p12FR', 'p12NL', 'p12EN', 3);

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE IF NOT EXISTS `rubrique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `textes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `descFR` text CHARACTER SET utf8 NOT NULL,
  `descNL` text CHARACTER SET utf8 NOT NULL,
  `descEN` text CHARACTER SET utf8 NOT NULL,
  `id_rubrique` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rubrique` (`id_rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `textes`
--

INSERT INTO `textes` (`id`, `nom`, `descFR`, `descNL`, `descEN`, `id_rubrique`) VALUES
(1, 'DescAccueil', 'test Text FR test Text FR test Text FR test Text FR test Text FR test Text FR test Text FRtest Text FRtest Text FRtest Text FR test Text FR test Text FRtest Text FRtest Text FRtest Text FR test Text FRtest Text FRtest Text FRtest Text FRtest Text FR test Text FR', 'test Text NL test Text NL test Text NL test Text NLtest Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NLtest Text NLtest Text NL test Text NL', 'test Text EN test Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text EN test Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text ENtest Text EN test Text ENtest Text ENtest Text ENtest Text EN', 1),
(2, 'paraf1accueil', '(FR)Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.', '(NL)Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.', '(EN)Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur\r\n                    similique?\r\n                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta\r\n                    dolorem non blanditiis ex fugiat.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE IF NOT EXISTS `titres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `titreFR` varchar(250) DEFAULT NULL,
  `titreNL` varchar(250) DEFAULT NULL,
  `titreEN` varchar(250) DEFAULT NULL,
  `id_rubrique` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_rubrique` (`id_rubrique`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `titres`
--

INSERT INTO `titres` (`id`, `nom`, `titreFR`, `titreNL`, `titreEN`, `id_rubrique`) VALUES
(1, 'GrandTitre', 'Bienvenu à Créons la Lune\r\n', 'NL à Créons la Lune\r\n', 'Welcome to creons la lune', 1),
(2, 'titre1accueil', 'testTitreFR1', 'testTitreNL1', 'testTitreEN1', 1),
(3, 'titre2accueil', 'testTitreFR2', 'testTitreNL2', 'testTitreEN2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lenom` varchar(100) DEFAULT NULL,
  `lemail` varchar(150) DEFAULT NULL,
  `lepass` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lenom_UNIQUE` (`lenom`),
  UNIQUE KEY `lemail_UNIQUE` (`lemail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `lenom`, `lemail`, `lepass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

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
