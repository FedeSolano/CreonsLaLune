-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Juin 2016 à 14:03
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
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `letitre` varchar(200) NOT NULL,
  `lurl` varchar(505) DEFAULT NULL,
  `lalt` varchar(305) DEFAULT NULL,
  `section_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_section1_idx` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `letitre`, `lurl`, `lalt`, `section_id`) VALUES
(1, '', 'vide', NULL, 1),
(2, 'Test 1', 'test_images/1.jpg', 'photo1', 2),
(3, 'Test 2', 'test_images/2.jpg', 'p2', 2),
(4, 'Test 3', 'test_images/3.jpg', 'p3', 2),
(5, 'Test 4', 'test_images/4.jpg', 'p4', 2),
(6, 'Test 5', 'test_images/5.jpg', 'p5', 2),
(7, 'Test 6', 'test_images/6.jpg', 'p6', 2),
(8, 'Test 7', 'test_images/7.jpg', 'p7', 2),
(9, 'Test 8', 'test_images/8.jpg', 'p8', 2),
(10, 'Test 9', 'test_images/9.jpg', 'p9', 2),
(11, 'Test 10', 'test_images/10.jpg', 'p10', 2),
(12, 'Test 11', 'test_images/11.jpg', 'p11', 2),
(13, 'test 12', 'test_images/12.jpg', 'p12', 2);

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lalangue` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `langue`
--

INSERT INTO `langue` (`id`, `lalangue`) VALUES
(1, 'Français'),
(2, 'English'),
(3, 'Nederlands');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lenom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`id`, `lenom`) VALUES
(1, 'Accueil'),
(2, 'Galeria'),
(3, 'Contact');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE IF NOT EXISTS `texte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) DEFAULT NULL,
  `titre_nd` varchar(250) DEFAULT NULL,
  `titre_en` varchar(250) DEFAULT NULL,
  `ladesc` text,
  `ladesc_nd` text,
  `ladesc_en` text,
  `langue_id` int(10) unsigned NOT NULL,
  `utilisateur_id` int(10) unsigned NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_texte_langue_idx` (`langue_id`),
  KEY `fk_texte_utilisateur1_idx` (`utilisateur_id`),
  KEY `fk_texte_image1_idx` (`image_id`),
  KEY `fk_texte_section1_idx` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`id`, `titre`, `titre_nd`, `titre_en`, `ladesc`, `ladesc_nd`, `ladesc_en`, `langue_id`, `utilisateur_id`, `image_id`, `section_id`) VALUES
(1, 'Essai du php', NULL, NULL, 'Porta decor savez des peres oui masse noces air. Entendu tendues ou un station xv je cavites. Ces pauvrete cherirai fit vin bravoure appareil. Revolution arriverent me de tricolores convulsion petitement vieillards. Peu militaire bon entremise oui conquerir cauchemar bourreaux mes. La revele qu du poemes guerre contes tu. Oui par cathedrale descendons patiemment eux. Noces terre te et frire rirez. Fit divergent positions universel gendarmes peu dur. \r\n\r\nAh si maintenant assurances construits. Dernier jeu ciments caillou etalent que bonjour. Ne concierge signalant echangent feeriques de. Peu cependant foi preferait jugements entremise fin. Son galop ils etait crier appel non heros bondi. Bourse couvre ton labour surgie rit lazzis ans brunes lui. Drapees saurais bossuee les pourrai peu eclaire. \r\n\r\nDroit metal parce outre et va qu calme. Vous des mur plus avec. Ont perruches attelages adjudants car sanglante corbeille. Pour oh de je sent cite quoi. Je signalant as repousser marmelade du de. Cousine pleines vit que etaient par demeure peloton surpris. Retarde futaies peuples or sa exemple ma dessein ah noircir. \r\n\r\nMenions express invites la on ou. Revolution executeurs or tu au en clairieres. Cela mal chez les yeux bon. Uniformes sa chaclosah sanglante apprendre en. Ronds petit navre par fumee quand vie avant. Seulement poussiere attachent on illumines as tremblent si. Du voix je rues pour au. Rit visite poemes rythme repond pic forges sortes. \r\n\r\nJe rangs voyez il eu voila ii. Pu prenaient crepitent qu fusillade. Sont sol sur eau chez afin deja pour crie. Ses ils haut sons rire. Esprit tempes les vin jusque galons heures roc trotte. On suffisait le abondance la lanternes qu. Havresac bravoure ah activite ouvriers la. \r\n\r\nMeconnais enfantent et apprendre je metairies. Convertir defensive ete ifs une ere poussiere distribua redoutait. Il style drape au mines vecut. Par net peut par agir vont. Tiendrons le tu echangent sentiment xv cartouche. Garnison cavernes du etendues je quelques mourants ne exaltait en. Ras son tenait sommes brumes. Seulement oh neanmoins eu causaient tranchees on toutefois tu laidement. Pris donc son dut tout que. ', NULL, NULL, 1, 1, 1, 1),
(2, 'PHP essay', NULL, NULL, 'Case read they must it of cold that. Speaking trifling an to unpacked moderate debating learning. An particular contrasted he excellence favourable on. Nay preference dispatched difficulty continuing joy one. Songs it be if ought hoped of. Too carriage attended him entrance desirous the saw. Twenty sister hearts garden limits put gay has. We hill lady will both sang room by. Desirous men exercise overcame procured speaking her followed. \r\n\r\nPaid was hill sir high. For him precaution any advantages dissimilar comparison few terminated projecting. Prevailed discovery immediate objection of ye at. Repair summer one winter living feebly pretty his. In so sense am known these since. Shortly respect ask cousins brought add tedious nay. Expect relied do we genius is. On as around spirit of hearts genius. Is raptures daughter branched laughter peculiar in settling. \r\n\r\nLose john poor same it case do year we. Full how way even the sigh. Extremely nor furniture fat questions now provision incommode preserved. Our side fail find like now. Discovered travelling for insensible partiality unpleasing impossible she. Sudden up my excuse to suffer ladies though or. Bachelor possible marianne directly confined relation as on he. \r\n\r\nAs absolute is by amounted repeated entirely ye returned. These ready timed enjoy might sir yet one since. Years drift never if could forty being no. On estimable dependent as suffering on my. Rank it long have sure in room what as he. Possession travelling sufficient yet our. Talked vanity looked in to. Gay perceive led believed endeavor. Rapturous no of estimable oh therefore direction up. Sons the ever not fine like eyes all sure. \r\n\r\nAlthough moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself. Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir. Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she. \r\n\r\nDetract yet delight written farther his general. If in so bred at dare rose lose good. Feel and make two real miss use easy. Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant in in insensible favourable. Latter remark hunted enough vulgar say man. Sitting hearted on it without me. \r\n\r\nStyle never met and those among great. At no or september sportsmen he perfectly happiness attending. Depending listening delivered off new she procuring satisfied sex existence. Person plenty answer to exeter it if. Law use assistance especially resolution cultivated did out sentiments unsatiable. Way necessary had intention happiness but september delighted his curiosity. Furniture furnished or on strangers neglected remainder engrossed. \r\n\r\nMuch did had call new drew that kept. Limits expect wonder law she. Now has you views woman noisy match money rooms. To up remark it eldest length oh passed. Off because yet mistake feeling has men. Consulted disposing to moonlight ye extremity. Engage piqued in on coming. \r\n\r\nConsulted he eagerness unfeeling deficient existence of. Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. \r\n\r\nScarcely on striking packages by so property in delicate. Up or well must less rent read walk so be. Easy sold at do hour sing spot. Any meant has cease too the decay. Since party burst am it match. By or blushes between besides offices noisier as. Sending do brought winding compass in. Paid day till shed only fact age its end. ', NULL, NULL, 2, 1, 1, 1),
(3, 'Proef van PHP', NULL, NULL, 'Evenals bij geweest die invloed. Het ingericht toe gif bovendien overwaard uitgaande far bevolking. Ik inkomsten bezetting vermijden ingenieur af financien besparing. Per snelsten schepten meesters speurzin uitgeput aan oog far maleiers. Heuvels eronder ze klimaat vordert tijgers op javanen ad te. Er gebruiken op prachtige om stichting te gesmolten. Loopbaan gif zuiniger het zin contract. \r\n\r\nDrukke van tot schaal den wie openen. Uitkeert elkander centraal hij des middelen die vluchten roestige bij. Gezegend afkoopen geringer ze te er tusschen gelijken. Rijkdom brokken ormoezd de te in mantras gevolgd. Ongunstig of in ze scheidden verdiende geschiedt en. Initiatief dat hen gewoonlijk buitendien hollanders. Raakt of op reeds voort na eerst. Ingericht wonderwel of er bezwarend ik schippers af. Voorloopig wedijveren voorschijn inlandsche are verwijderd dat ingenieuse. \r\n\r\nMijnbouw stelling in na vermengd afgetapt bordeaux de al. Verloren vijftien en of kolonien op. Terwijl er bewogen en krijgen oorzaak ik de taiping. Al bepaalden stichting er nu krachtige arabieren mineralen plaatsing ik. Dikwijls de ze moeilijk nu of uitgaven verrezen. Waren zit kwala had die groen omdat dikte met ploeg. Hun verlichten bevaarbaar ontginning elk ten dividenden belangrijk smeltovens dik. Steenen tot soorten wat geopend elk streken per gekomen. Aan are deel gif volk uren bak. \r\n\r\nZij schenen afwegen motoren had gropeng. In al losmaken tusschen kostbaar veertien de voorziet vluchten. Al lamamijn smelting en elastica veertien kostbare meesters. Elk ziet geld bron den twee zich. Zich liet wijk nam goed mier noch weg. Aan voorloopig ontwouding mei primitieve. Had komst wat raakt klein van bezig heele dit. \r\n\r\nMinerale invallen staatjes gesloten de boringen op is baksteen. Ons ziet van far liep want stof stad vast elk. Valorem daartoe dag tandrad het stijgen wij amboina. Gelukken van leerling dag zij allerlei vestigen het engeland. Plotseling tooverslag verdedigen werktuigen had gas wat. Zee ten voorziet opbrengt mineraal als invallen zoo eilandje. Metalen ze zekeren na nu heuvels ze maanden. Gesteente vernielen oog mengeling onderling aanvoeren zoo. \r\n\r\nStukken smelter motoren al nu te af. Ad onder dient er geven nu. Geslaagd de eromheen genoemde op lamamijn engeland de gesticht om. Geoogst en ik opening oorzaak. Ader werd ten toe met volk veld zout zijn. Verbrand al kostbare failliet geschikt verhoogd brazilie de. Wiel erin ad is nu ze apen. Plaatse bekkens staande betaalt gewicht te in er heuvels. \r\n\r\nVloeit een sakais sedert ton wij alleen tonnen ook. Daar voor en lage ad iets vijf. Werk rook ipoh te zeer half kant in op. Mijnwerk te bezetten wieschen minerale in ik. Weg des bestreken evenwicht dringende gesteente dus stoompomp rug. Ijzererts al chineezen de verkoopen na duimbreed gezuiverd. Op al te bergachtig onderlinge wedijveren inlandsche. Feestdagen op ongebruikt middelpunt of buitendien mijnwerker. \r\n\r\nDik streng rijken steden bak een. Aan sunger met per weg lijnen lijden. Wonde eerst als wegen gif vindt lagen. Misschien dit prachtige nam verdiende was evenwicht. Het wat zoo europeanen opgebracht natuurlijk aanplanten uitgevoerd. Leelijk ze scholen in blijven ad. Kedona sap hoogte wouden per slotte heuvel openen. Na stam laag ik sago. Er is voet acre hout of zich. \r\n\r\nEr ze bepaalden diezelfde bedroegen te siameezen en. Britsche generaal uitkeert mei menschen die. Minste al na gelukt grayah de en mannen. Gif ton boringen ons omwonden krachten. Lijnen dieper ruimte op om vlucht kintya. Monopolie toe gomboomen als bovendien bezorgden are vernieuwd voorspoed. \r\n\r\nGeopend invloed nachten wel ter stroeve dit. Dat arbeiders zij siameezen mag bloeiende inderdaad datzelfde binnenste dat. Uit die europeesch verwachten vaartuigen locomobiel. Gegoten soorten dik die geheele. Enorme herten men als weinig leiden dag. Nog een brandhout denkbeeld japansche. Gevestigd aangewend diezelfde er ik vroegeren al. Ook aldus dat maakt deele japan. ', NULL, NULL, 3, 1, 1, 1);

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
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `texte`
--
ALTER TABLE `texte`
  ADD CONSTRAINT `fk_texte_image1` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_texte_langue` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_texte_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_texte_utilisateur1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
