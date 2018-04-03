-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 03 Avril 2018 à 13:24
-- Version du serveur :  5.7.14-log
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `ben_image` (
  `id` int(11) NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `ben_image` (`id`, `lien`, `product_id`) VALUES
(11, '3af31d7b1165ae9aa486ae3df14b3976.jpeg', NULL),
(12, '2f1273d9df66a329bea5aba97c7f335e.jpeg', 13),
(13, 'a8c1931aed3e09f8bbeda2f3697f8d4d.jpeg', 14),
(14, '56ba9e0352e9c5bca9e43d9387468baf.jpeg', 15),
(15, 'd114f3a2320454ac289fce080d17b271.jpeg', 16),
(16, 'cf1624bbfcbcf820951d695ac0c7fcff.jpeg', 17),
(17, 'c271f4fc32c19ec09ae348fa02928a97.jpeg', 18),
(18, '5bcfe3f31b66912fe9bcce99b7f96bd8.jpeg', 19),
(19, 'c0639ff9ae816f08ba54ba16f759ba17.jpeg', 20),
(20, '550767b0e29aed22f0f99709005d78ad.jpeg', 21),
(21, '2c8c2fbb7129e09c65ad8ecd7e1aae1c.jpeg', 22),
(22, '6ec3a5bb2acff32b3424387d89cbaf77.jpeg', 23),
(23, '11b88fed0e137f147f0d8cd994d4b9f8.jpeg', 24),
(24, '5b014d158d6efdce9c6f5d60e314878f.jpeg', 25),
(25, 'ff47a49ed643cfcc4f8557b4662a5812.jpeg', 26),
(26, 'eaa3b6dbab27057712c59798ed131959.jpeg', 27),
(27, '3ce5ee9ffafdc3ad2d27ce94cb9c9975.jpeg', 28),
(28, 'bd7090fdf807f8423bf25dcb5dd5a352.jpeg', 29),
(29, 'f845fe5df3ce71a31082181a48b84ff7.jpeg', 30),
(30, '24c32d4e830886eb31b6e97d8bf091a4.jpeg', 31),
(31, 'adb89713566120d16e16faaec1523745.jpeg', 32),
(32, '0b12bcf56f923ddc924897c537c50d6a.jpeg', 33),
(33, 'fadeef416454cddb0e06dc11c73f6924.jpeg', 34),
(34, '05587ca878d5390515e839b0dd9c49a8.jpeg', 35),
(35, 'b57bd865a17dcce92fb4ef5dbcd4688f.jpeg', 36),
(36, '7097cb8a590cc255267c7787a6cd0742.jpeg', 37),
(37, '3060efc5a04b081df8d2ba8dab836ab8.jpeg', 38),
(38, '42a811b76f5ea9e0f7cce9ee6c693045.jpeg', 39),
(39, '3712c195d6d302a917aea3fb2a43bf3a.jpeg', 40),
(40, 'eea8409a1f13138f9649e0f6c13273a9.jpeg', 41),
(41, '30b1ba87a03f925d75813e91f27c9839.jpeg', 42),
(42, '401701834ccc92b96d65086d91f128da.jpeg', 43),
(43, 'fe76802be3cde6bf4397dcad91ee4552.jpeg', 44),
(44, '81bc670e7d7f82d09ea23c7b96db9dcd.jpeg', 45),
(45, '99a9e5847cb3ba40b7255a90ab29c3ac.jpeg', 46),
(46, 'd5c5c6ab17d37e736f9d18e3d395188f.jpeg', 47),
(47, '89d52b2b7b4f8539ffb5577529cf7b93.jpeg', 48),
(48, '296e463ba723d60f1cc1f64d5fcc9295.jpeg', 49);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180219102538'),
('20180219155934'),
('2018022'),
('20180221091103'),
('20180221091230'),
('20180221093633'),
('20180221100319'),
('20180221111155'),
('20180221153534'),
('20180222092021'),
('20180222093313'),
('20180222142747'),
('20180222144843'),
('20180222145126'),
('20180223134611'),
('20180223135522'),
('20180223135735'),
('20180223140054'),
('20180223142946'),
('20180226084552'),
('20180226084933'),
('20180226105925'),
('20180226105931'),
('20180226110713'),
('20180226110819'),
('20180226122434'),
('20180226143405'),
('20180226143555'),
('20180227122438'),
('20180227123725'),
('20180227145605'),
('20180227151812'),
('20180228083718'),
('20180228084847'),
('20180228085112'),
('20180228085239'),
('20180228090135'),
('20180228090625'),
('20180228090730'),
('20180228091113'),
('20180228092527'),
('20180228092940'),
('20180228093319'),
('20180301084433'),
('20180301094349'),
('20180301100255'),
('20180301100703'),
('20180301100735'),
('20180301142055'),
('20180302093801'),
('20180302135050'),
('20180305083806'),
('20180307140835'),
('20180307150707'),
('20180308091756'),
('20180308115453'),
('20180308120127'),
('20180312081915'),
('20180312082205'),
('20180312082916'),
('20180312131132'),
('20180312131216'),
('20180312131252'),
('20180316103521'),
('20180316103747'),
('20180316123900'),
('20180316124516'),
('20180319082159'),
('20180319115845'),
('20180321120742'),
('20180321122709'),
('20180321154228'),
('20180321160842'),
('20180322095813'),
('20180322150146'),
('20180322150442'),
('20180323102718'),
('20180323102754'),
('20180323103158'),
('20180328133630'),
('20180328141318'),
('20180328141559'),
('20180328142244'),
('20180329085444'),
('20180329090738'),
('20180329090958'),
('20180329091127'),
('20180329092201'),
('20180329093317'),
('20180329094500'),
('20180329123157'),
('20180329124216'),
('20180329124245'),
('20180329125509'),
('20180329125543'),
('20180329142840'),
('20180402163249');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `ben_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `ben_newsletter` (`id`, `email`, `deleted`) VALUES
(2, 'rr', '2018-03-12 13:52:34'),
(5, 'dd@aol.com', '2018-03-12 14:09:19'),
(7, 'drd@aol.com', NULL),
(8, 'lll@aol.com', NULL),
(9, 'mar@aol.om', NULL),
(10, 'hfhf', NULL),
(11, 'fgdgd@aol.com', NULL),
(12, 'ma@aol.com', NULL),
(13, 'gfhfh', NULL),
(14, 'ghghjg', NULL),
(19, 'ghghjg@aol.com', NULL),
(23, 'ghghj@aol.com', NULL),
(25, 'lalal@aol.com', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `ben_panier` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantite` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prixligne` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `panier`
--

INSERT INTO `ben_panier` (`id`, `nom`, `quantite`, `product_id`, `user_id`, `prixligne`) VALUES
(179, 'test', 1, 14, 9, 35),
(180, 'test', 1, 17, 9, 500),
(202, 'test', 10, 15, 8, 200),
(203, 'test', 2, 25, 8, 1718);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `ben_product` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taille` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `couleur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collection` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `disponibilite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marque` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8_unicode_ci,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reduction` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `display` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ancienprix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datefinpromo` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `panier_id` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `ben_product` (`id`, `nom`, `prix`, `taille`, `couleur`, `collection`, `description`, `disponibilite`, `marque`, `detail`, `categorie`, `sexe`, `reduction`, `new`, `display`, `ancienprix`, `datefinpromo`, `image_id`, `deleted`, `panier_id`, `stock_id`) VALUES
(12, 'Botte noir', '50', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Men', '20%', 'non', 'oui', '500', '2021-09-02 00:00:00', 11, '2018-04-02 17:32:51', NULL, 1),
(13, 'Montre en or', '50', 'L', 'bleu', 'Watches', 'Joli', 'Disponible', 'Levis', 'Très joli', 'JewelryWatches', 'women', '20%', NULL, 'oui', '40', '2021-09-02 00:00:00', 12, '2018-04-02 19:38:51', NULL, 2),
(14, 'Ceinture', '35', 'L', 'Marron', 'Accessories', 'Joli', 'Disponible', 'adidas', 'Très joli', 'clothing', 'women', '20%', NULL, 'oui', '45', '2021-09-02 00:00:00', 13, NULL, NULL, 3),
(15, 'basket', '20', 'L', 'bleu', 'Shoes', 'Joli', 'Disponible', 'Levis', 'Très joli', 'BagsShoes', 'men', '20%', NULL, 'oui', '45', '2021-09-02 00:00:00', 14, NULL, NULL, 4),
(16, 'portefeuille', '50', 'L', 'bleu', 'Accessories', 'Joli', 'Disponible', 'Levis', 'Très joli', 'BagsShoes', 'women', '20%', NULL, 'oui', '45', NULL, 15, '2018-04-02 18:49:48', NULL, 5),
(17, 'Sac noir', '500', 'L', 'bleu', 'Bag', 'Joli', 'Disponible', 'Levis', 'Très joli', 'BagsShoes', 'women', '20%', NULL, 'oui', '45', NULL, 16, NULL, NULL, 6),
(18, 'Telephone', '1999', NULL, NULL, 'Huawei', 'Telephone nouvelle génération', 'Disponible', 'Huawei', 'Telephone nouvelle génération', 'clothing', 'women', '0%', 'oui', 'oui', '400', NULL, 17, '2018-04-02 19:06:57', NULL, 7),
(19, 'Montre', '100', 'L', 'Rose', 'Vetements', 'Joli', 'Disponible', 'Levis', 'Très joli', 'JewelryWatches', 'women', '50%', NULL, 'oui', '200', NULL, 18, NULL, NULL, 8),
(20, 'Sac pour homme', '50', NULL, NULL, NULL, NULL, 'Disponible', NULL, NULL, 'BagsShoes', 'men', '', 'new', 'oui', NULL, NULL, 19, NULL, NULL, 9),
(21, 'jean', '50', 'no', 'bleu', 've', 'joli', 'Disponible', 'adidas', 'jolie jolie', 'clothing', 'women', '20', NULL, 'oui', '50', NULL, 20, '2018-04-02 17:51:08', NULL, 10),
(22, 'Cubot X18', '139.99', NULL, 'bleu', NULL, 'Cubot X18 Smartphone 4G Téléphone Portable Débloqué (Écran: 5.7 Pouces HD Rapport d\'Aspect 18:9 - 3GB+32GB - Android 7.0 - Caméras 13 + 16MP - Double SIM - Ultra-Slim - Empreinte Digitale - WIFI) Bleu', 'Disponible', 'Cubot', 'Affichage: Écran 5.7 pouces super HD, 2.5D IPS, 18:9 ratio d\'aspect, vous l\'utilisez d\'une seule main. Écran tactile multipoint très sensible, offrir le meilleur sentiment de touche. Avec une résolution de 1440 * 720p pour offrir un meilleur effet visuel', 'PhonesandAccessories', 'mixte', '15%', 'new', 'oui', '280', NULL, 21, NULL, NULL, 11),
(23, 'Huawei P20 Pro', '899.99', NULL, 'Bleu', NULL, 'Huawei P20 Pro + Carte cadeau de 100€ offerte sur amazon.fr - Smartphone portable débloqué 4G (Ecran : 6,1 pouces - 128 Go - Double Nano-SIM - Android) Bleu [Version française]', 'Disponible', 'Huawei', 'Triple Capteur photo conçu avec Leica de 40MP+20MP+8MP pour des photos parfaites même en basse lumière Processeur doté d\'intelligence artificielle, Processeur Kirin 970 octo-core pour un téléphone qui reste rapide Zoom hybride x5, captez le moindre détail, même à distance Ecran Huawei FullView FHD+ de 6, 1 pouces pour des couleurs vives et des contrastes élevés.', 'PhonesandAccessories', 'women', '', NULL, 'oui', NULL, NULL, 22, NULL, NULL, 13),
(24, 'Apple iPhone X', '980', NULL, 'Argent', NULL, 'Apple iPhone X Smartphone débloqué 4G (Ecran : 5,8 pouces - 64 Go - Nano-SIM - iOS) Argent', 'Disponible', 'Apple', 'Ecran super Retina Reconnaissance faciale Chargement sans fil', 'PhonesandAccessories', 'mixte', '', NULL, 'oui', NULL, NULL, 23, NULL, NULL, 14),
(25, 'Samsung Galaxy S9', '859', NULL, 'Noir', NULL, 'Samsung Galaxy S9 Dual SIM 64GB Noir - Android 8.0 (Oreo) - Version française', 'Disponible', 'Samsung', 'Ecran Infinity 5, 8" Quad HD+ Super Amoled RAM 4Go & ROM 64Go (et port micro SD jusqu\'à 256Go) Appareil photo Arrière 12MP doté d\'un capteur téléobjectif avec zoom optique x2 Super ralenti vidéo avec 960 images/secondes Certification IP68', 'PhonesandAccessories', 'mixte', '', 'new', 'oui', NULL, NULL, 24, NULL, NULL, 15),
(26, 'Silvian Heach Dress Chiodelli', '86.25', 'L', 'Noir', 'Dress Chiodelli', 'Silvian Heach Dress Chiodelli, Robe Femme', 'Disponible', 'Silvian Heach', 'Jolie robe', 'clothing', 'women', '', 'new', 'oui', NULL, NULL, 25, NULL, NULL, 16),
(27, 'Dressystar Robe à \'Audrey Hepburn\' Classique Vintage 50\'s 60\'s Style à mancheron', '25.99', 'M', 'Bleu', 'Audrey Hepburn', 'Dressystar Robe à \'Audrey Hepburn\' Classique Vintage 50\'s 60\'s Style à mancheron', 'Disponible', 'Dressystar', '90% Polyester, 10% Élasthanne Promotion: pour Solde Printemps, l\'option de couleur "Noir à pois blue B", son prix est de 11,99€ au 15,99€. Type de col: Col rond Vous pouvez repasser la robe à basse température.', 'clothing', 'women', '15%', 'new', 'oui', '50', NULL, 26, NULL, NULL, 17),
(28, 'Levi\'s THE PERFECT - T-shirt imprimé', '19.95', 'M', NULL, 'THE PERFECT', 'THE PERFECT - T-shirt imprimé', 'Disponible', 'Levi\'s', 'Composition: 100% coton  Matière: Jersey', 'clothing', 'women', '', 'new', 'oui', NULL, NULL, 27, NULL, NULL, 18),
(29, 'ALBANY - T-shirt imprimé', '24.95', '44', 'optic white', 'ALBANY', 'ALBANY - T-shirt imprimé', 'Disponible', 'Ellesse', 'Composition: 100% coton  Matière: Jersey  Conseils d\'entretien: Lavage en machine à 40°C, ne pas mettre au sèche-linge', 'clothing', 'women', '5%', 'new', 'oui', NULL, NULL, 28, NULL, NULL, 19),
(30, 'YASCLADY SPRING PLAYSUIT - Combinaison', '59.95', '44', 'lunar rock', 'YASCLADY', 'YASCLADY SPRING PLAYSUIT - Combinaison', 'Disponible', 'YAS Tall', 'MATIÈRE ET ENTRETIEN  Composition: 65% polyester, 31% viscose, 4% elasthanne  DÉTAILS DU PRODUIT  Forme du col: Cache-cœur  Motif / Couleur: Couleur unie  Informations additionnelles: Poches  Référence: YA021T001-Q11', 'clothing', 'women', '', 'new', 'oui', NULL, NULL, 29, NULL, NULL, 20),
(31, 'MONT - Sweat à capuche', '84.95', 'L', 'dark grey marl', 'MONT', 'MONT - Sweat à capuche', 'Disponible', 'Ellesse', 'Col: Capuche  Fermeture: Fermeture éclair  Capuche: Capuche avec cordon de serrage  Motif / Couleur: Chiné  Informations additionnelles: Fermeture éclair, poches  Référence: EL922T008-C11', 'clothing', 'men', '5%', NULL, 'oui', '90', NULL, 30, NULL, NULL, 21),
(32, 'BURGEE - Sweat à capuche', '79.95', 'L', 'medium grey melange', 'BURGEE', 'BURGEE - Sweat à capuche', 'Disponible', 'Napapijri', 'Col: Capuche  Poches: Poches avec fermeture éclair  Capuche: Capuche avec cordon de serrage  Motif / Couleur: Chiné  Référence: NA622S01U-C11', 'clothing', 'men', '5%', 'new', 'oui', NULL, NULL, 31, NULL, NULL, 22),
(33, 'LUZZI - Pantalon de survêtement', '49.95', 'XL', 'dress blues', 'LUZZI', 'LUZZI - Pantalon de survêtement', 'Disponible', 'Ellesse', 'Taille: Haute  Poches: Poches latérales  Motif / Couleur: Couleur unie  Informations additionnelles: Taille élastique  Référence: EL922E00T-K11', 'clothing', 'men', '5%', 'new', 'oui', NULL, NULL, 32, NULL, NULL, 23),
(34, 'Veste légère', '199.95', 'XL', 'vintage green', NULL, NULL, 'Disponible', 'CLOSED', NULL, 'clothing', 'men', '50%', NULL, 'non', '400', NULL, 33, NULL, NULL, 24),
(35, 'PERFECTO - Veste en cuir', '424.95', 'XL', 'schwarz', 'PERFECTO', 'Composition: 100% cuir  Doublure: 100% coton  Contient des éléments non-textiles d\'origine animale: Oui  Conseils d\'entretien: Nettoyage spécial cuir', 'Disponible', 'Schott NYC', 'Composition: 100% cuir  Doublure: 100% coton  Contient des éléments non-textiles d\'origine animale: Oui  Conseils d\'entretien: Nettoyage spécial cuir', 'clothing', 'men', '5%', 'new', 'oui', '500', NULL, 34, NULL, NULL, 25),
(36, 'BOSTON - Veste en jean', '59.95', 'L', 'mid wash', 'BOSTON', 'BOSTON - Veste en jean', 'Disponible', 'LOYALTY & FAITH', 'Composition: 100% coton  Doublure: 100% polyester  Épaisseur de la doublure: Doublure légère  Matière: Denim  Conseils d\'entretien: Lavage en machine à 40°C, ne pas mettre au sèche-linge', 'clothing', 'men', '', NULL, 'oui', NULL, NULL, 35, NULL, NULL, 26),
(37, 'AIR VAPORMAX PLUS - Baskets basses', '209.95', '43', 'black/volt/white', 'VAPORMAX', 'AIR VAPORMAX PLUS - Baskets basses', 'Disponible', 'Nike Sportswear', 'AIR VAPORMAX PLUS - Baskets basses', 'BagsShoes', 'men', '', 'new', 'oui', NULL, NULL, 36, NULL, NULL, 27),
(38, 'ML574ESC - Baskets basses', '94.95', '41', 'nimbus cloud', 'ML574ESC', 'ML574ESC - Baskets basses', 'Disponible', 'New Balance', 'Dessus / Tige: Cuir et textile  Doublure: Textile  Semelle de propreté: Textile  Semelle d\'usure: Matière synthétique  Épaisseur de la doublure: Doublure protégeant du froid  Matière: Mesh  Conseils d\'entretien: Appliquez un imperméabilisant avant la première utilisation', 'BagsShoes', 'men', '', 'new', 'oui', NULL, NULL, 37, NULL, NULL, 28),
(39, 'ML574 - Baskets basses', '70', '42', 'black iris', 'ML574ESC', 'ML574 - Baskets basses', 'Disponible', 'New Balance', 'Dessus / Tige: Cuir et textile  Doublure: Textile  Semelle de propreté: Textile  Semelle d\'usure: Matière synthétique  Épaisseur de la doublure: Doublure protégeant du froid  Matière: Mesh  Conseils d\'entretien: Appliquez un imperméabilisant avant la première utilisation', 'BagsShoes', 'men', '20%', 'new', 'oui', '99.95', NULL, 38, NULL, NULL, 29),
(40, 'Oyster Perpetual Lady', '3200', NULL, 'Or Jaune et Acier', 'Oyster Perpetual Lady', 'Oyster Perpetual Lady', 'Disponible', 'Rolex', 'Lunette en or jaune 750/1000 (18k). Mouvement automatique certifié chronometre (COSC). Glace saphir et cadran argent. Index et aiguilles or jaune 750/1000 (18k) luminescents. Couronne et fond vissés. Service complet Rolex de 01/2017.', 'JewelryWatches', 'women', '', 'new', 'oui', NULL, NULL, 39, NULL, NULL, 30),
(41, 'Startimer Big Date', '700', NULL, NULL, NULL, NULL, 'Disponible', 'Alpina', 'Glace saphir, cadran et compteurs noirs. Index, chiffres arabes et aiguilles luminescents. Couronne vissée.', 'JewelryWatches', 'mixte', '15%', 'new', 'oui', '995', NULL, 40, NULL, NULL, 31),
(42, 'T12-44 DRIVEMASTER', '4800', NULL, NULL, 'Cuir', 'Série Limitée 50 exemplaires.', 'Disponible', 'BRM', 'Glace saphir et cadran noir "Gulf". Index noir et argent, aiguilles argent. Couronne vissée. Fond transparent.', 'JewelryWatches', 'men', '10%', 'new', 'oui', '6900', NULL, 41, NULL, NULL, 32),
(43, 'Intel NUC NUC7I3BNH', '309', NULL, NULL, NULL, 'Ce petit boitier Intel NUC NUC7I3BNH renferme une carte mère et un processeur Intel Core i3-7100U, il ne vous reste qu\'à ajouter de la mémoire RAM DDR4 (format SO-DIMM), ainsi qu\'un SSD au format M.2, un disque dur 2.5" SATA pour profiter d\'un PC complet.', 'Disponible', 'Intel NUC', 'Intel Core i3-7100U Intel HD Graphics 620 Wi-Fi AC / Bluetooth 4.2 + emplacements M.2 et SATA 2.5" (sans écran/mémoire/disque dur)', 'COMPUTERANDOFFICE', 'mixte', '', 'new', 'oui', NULL, NULL, 42, NULL, NULL, 33),
(44, 'PC Warrior', '300', NULL, 'Noir', 'Warrior', 'AMD A4-4000 (3.0 GHz) 8 Go 1 To AMD Radeon HD 7480D Graveur DVD Wi-Fi N (sans OS - non monté)', 'Disponible', 'LDLC', 'Le PC LDLC Warrior se lance dans la bataille de l\'entrée de gamme et vous propose, pour un prix défiant toute concurrence, des performances optimisées pour l\'informatique de tous les jours. Multimédia, bureautique, vidéo HD...', 'COMPUTERANDOFFICE', 'mixte', '', 'new', 'oui', NULL, NULL, 43, NULL, NULL, 34),
(45, 'Logitech Keyboard K120', '13.96', NULL, 'Noir', NULL, 'Clavier filaire - résistant aux éclaboussures (AZERTY, Français)', 'Disponible', 'Logitech', 'Avec sa conception ultra plate, sa protection contre les liquides, ses touches robustes qui résistent à 10 millions de frappes, ses pieds inclinables et résistants, ce clavier Logitech K120 est non seulement élégant, mais aussi durable.', 'COMPUTERANDOFFICE', 'mixte', '', NULL, 'oui', NULL, NULL, 44, NULL, NULL, 35),
(46, 'ASUS Cerberus Keyboard', '49.99', NULL, 'rétroéclairé', NULL, 'Clavier rétroéclairé pour gamer (AZERTY, Français)', 'Disponible', 'ASUS', 'Le clavier gamer ASUS Cerberus assure performance, design et ergonomie. Très solide, il vous accompagnera lors de vos longues parties et répondra efficacement à vos besoins grâce à ses 12 touches programmables, le rétroéclairage ou encore les 19 touches anti-ghosting.', 'COMPUTERANDOFFICE', 'mixte', '', 'new', 'oui', NULL, NULL, 45, NULL, NULL, 36),
(47, 'Toner compatible TN-241BK', '49.9', NULL, 'Noir', NULL, 'Toner noir compatible Brother TN-241BK (2 500 pages à 5%)', 'Disponible', 'Brother', NULL, 'CONSUMERELECTRONICS', 'mixte', '5%', 'new', 'oui', '55.9', NULL, 46, NULL, NULL, 37),
(48, 'Canon CLI-551C XL', '17.5', NULL, 'cyan', NULL, 'Cartouche d\'encre cyan', 'Disponible', 'Canon', 'La cartouche Canon CLI-551C XL est le gage d\'une qualité d\'impression optimale quelle que soit l\'utilisation de votre imprimante : texte, photo ou document.', 'CONSUMERELECTRONICS', 'mixte', '', 'new', 'oui', NULL, NULL, 47, NULL, NULL, 38),
(49, 'Apple MacBook Pro 15" Gris sidéral', '3489.95', NULL, NULL, 'MacBook', 'Intel Core i7 (2.8 GHz) 16 Go SSD 1 To 15.4" LED AMD Radeon Pro 555 2 Go Wi-Fi AC/Bluetooth Webcam Mac OS High Sierra', 'Indisponible', 'Apple', NULL, 'COMPUTERANDOFFICE', 'mixte', '', 'new', 'oui', NULL, NULL, 48, NULL, NULL, 39);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `ben_review` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `review`
--

INSERT INTO `ben_review` (`id`, `nom`, `mail`, `review`, `note`, `product_id`) VALUES
(35, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dsffssf', 1, NULL),
(36, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hjgjg', 5, NULL),
(37, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dssdsdsd', 2, NULL),
(38, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'gfhfhf', 3, NULL),
(39, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dsfsfsf', 1, NULL),
(40, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'wxwxwxwq', 4, NULL),
(42, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'qsdqdqsddq', 5, NULL),
(44, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dfsdfsf', 1, NULL),
(46, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'sdsdq', 1, NULL),
(49, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'sdqdqd', 1, NULL),
(51, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hfhfh', 5, NULL),
(53, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hf', 5, NULL),
(54, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgd', 4, NULL),
(56, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgdgdgd', 4, NULL),
(57, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgdgdgdgdsfgds', 4, NULL),
(58, 'dqdq', 'ddsqqd', 'dqqdq', 1, NULL),
(60, 'sdfsf', 'fsdsfs', 'fdssdfsfsd', 4, NULL),
(61, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dgdgdg', 2, NULL),
(62, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'joli', 2, NULL),
(63, 'ban', 'sfsf@aol.com', 'sfsfsf', 1, NULL),
(64, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'bon portefeuille', 5, NULL),
(66, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fhfhfhfghgfh', 1, NULL),
(67, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dsdsdq', 1, 12),
(68, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'bonjour', 2, 19),
(69, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'ezeazeaze', 4, 19);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `ben_stock` (
  `id` int(11) NOT NULL,
  `stock_magasin` int(11) NOT NULL DEFAULT '0',
  `stock_entrepot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `stock`
--

INSERT INTO `ben_stock` (`id`, `stock_magasin`, `stock_entrepot`) VALUES
(1, 283, 20),
(2, 1, 50),
(3, 1, 0),
(4, 19, 21),
(5, 104, 1),
(6, 22, 50),
(7, 40, 50000),
(8, 1500, 99500),
(9, 98, 2),
(10, 100, 0),
(11, 50, 100),
(13, 10, 0),
(14, 20, 50),
(15, 462, 10000),
(16, 200, 500),
(17, 1000, 7900),
(18, 500, 9000),
(19, 900, 90000),
(20, 800, 80000),
(21, 9000, 10000),
(22, 7000, 70000),
(23, 5000, 50000),
(24, 15, 20),
(25, 20, 60),
(26, 40, 60),
(27, 500, 100),
(28, 900, 9008),
(29, 400, 6000),
(30, 500, 300),
(31, 40, 50),
(32, 6, 700),
(33, 100, 200),
(34, 500, 500),
(35, 900, 7000),
(36, 900, 90078),
(37, 10, 20),
(38, 40, 50),
(39, 20, 20);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `ben_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` text COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:simple_array)',
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `ben_user` (`id`, `username`, `password`, `email`, `role`, `is_active`) VALUES
(8, 'benoit', '$2y$13$nYvzBFVDnSC/3GA00a6LF.5dkn9VtpzwI/i6zUWw7dtM.uxabzXGO', 'marseillais13800@gmail.com', 'ROLE_ADMIN', 1),
(9, 'jean', '$2y$13$An1q.Uzu.f5GdtwGjIgJOO.hhEhzdVQIL8LXd9z43ug9IPZKHzQnu', 'marseillais1380011@gmail.com', 'ROLE_USER', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `ben_image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C53D045F4584665A` (`product_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `ben_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7E8585C8E7927C74` (`email`);

--
-- Index pour la table `panier`
--
ALTER TABLE `ben_panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_24CC0DF24584665A` (`product_id`),
  ADD KEY `IDX_24CC0DF2A76ED395` (`user_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `ben_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D34A04AD3DA5256D` (`image_id`),
  ADD UNIQUE KEY `UNIQ_D34A04ADDCD6110` (`stock_id`),
  ADD KEY `IDX_D34A04ADF77D927C` (`panier_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `ben_review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_794381C6794381C6` (`review`),
  ADD KEY `IDX_794381C64584665A` (`product_id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `ben_stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `ben_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `ben_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `ben_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `ben_panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `ben_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `ben_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `ben_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `ben_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `ben_image`
  ADD CONSTRAINT `FK_C53D045F4584665A` FOREIGN KEY (`product_id`) REFERENCES `ben_product` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `ben_panier`
  ADD CONSTRAINT `FK_24CC0DF24584665A` FOREIGN KEY (`product_id`) REFERENCES `ben_product` (`id`),
  ADD CONSTRAINT `FK_24CC0DF2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `ben_user` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `ben_product`
  ADD CONSTRAINT `FK_D34A04AD3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `ben_image` (`id`),
  ADD CONSTRAINT `FK_D34A04ADDCD6110` FOREIGN KEY (`stock_id`) REFERENCES `ben_stock` (`id`),
  ADD CONSTRAINT `FK_D34A04ADF77D927C` FOREIGN KEY (`panier_id`) REFERENCES `ben_panier` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `ben_review`
  ADD CONSTRAINT `FK_794381C64584665A` FOREIGN KEY (`product_id`) REFERENCES `ben_product` (`id`);


