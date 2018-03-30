-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Mars 2018 à 14:36
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

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `lien`, `product_id`) VALUES
(11, '3af31d7b1165ae9aa486ae3df14b3976.jpeg', NULL),
(12, '2f1273d9df66a329bea5aba97c7f335e.jpeg', 13),
(13, 'a8c1931aed3e09f8bbeda2f3697f8d4d.jpeg', 14),
(14, '56ba9e0352e9c5bca9e43d9387468baf.jpeg', 15),
(15, 'd114f3a2320454ac289fce080d17b271.jpeg', 16),
(16, 'cf1624bbfcbcf820951d695ac0c7fcff.jpeg', 17),
(17, 'c271f4fc32c19ec09ae348fa02928a97.jpeg', 18),
(18, '5bcfe3f31b66912fe9bcce99b7f96bd8.jpeg', 19);

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
('20180329142840');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `deleted`) VALUES
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

CREATE TABLE `panier` (
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

INSERT INTO `panier` (`id`, `nom`, `quantite`, `product_id`, `user_id`, `prixligne`) VALUES
(179, 'test', 1, 14, 9, 35),
(180, 'test', 1, 17, 9, 500),
(194, 'test', 20, 15, 8, 400),
(196, 'test', 5, 16, 8, 2500),
(197, 'test', 910, 12, 8, 45500);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
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
  `ancienprix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datefinpromo` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  `panier_id` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nom`, `prix`, `taille`, `couleur`, `collection`, `description`, `disponibilite`, `marque`, `detail`, `categorie`, `sexe`, `reduction`, `new`, `display`, `ancienprix`, `datefinpromo`, `image_id`, `deleted`, `panier_id`, `stock_id`) VALUES
(12, 'Botte noir', '50', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Men', '20%', 'non', 'oui', '500', '2021-09-02 00:00:00', 11, NULL, NULL, 1),
(13, 'Montre en or', '50', 'L', 'bleu', 'Watches', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Women', '20%', 'oui', 'oui', '40', '2021-09-02 00:00:00', 12, NULL, NULL, 2),
(14, 'Ceinture', '35', 'L', 'bleu', 'Accessories', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Mixte', '20%', 'oui', 'oui', '45', '2021-09-02 00:00:00', 13, NULL, NULL, 3),
(15, 'basket', '20', 'L', 'bleu', 'Shoes', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Women', '20%', 'oui', 'oui', '45', '2021-09-02 00:00:00', 14, NULL, NULL, 4),
(16, 'portefeuille', '500', 'L', 'bleu', 'Accessories', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Men', '20%', 'oui', 'oui', '45', NULL, 15, NULL, NULL, 5),
(17, 'Sac noir', '500', 'L', 'bleu', 'Bag', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Women', '20%', 'oui', 'oui', '45', NULL, 16, NULL, NULL, 6),
(18, 'Telephone', '1999', NULL, NULL, 'Huawei', 'Telephone nouvelle génération', 'Disponible', 'Huawei', 'Telephone nouvelle génération', 'clothing', 'women', '0%', 'new', 'non', '400', NULL, 17, NULL, NULL, 7),
(19, 'Montre', '10', 'L', 'Rose', 'Vetements', 'Joli', 'Disponible', 'Levis', 'Très joli', 'clothing', 'women', '20%', NULL, 'oui', '20', NULL, 18, NULL, NULL, 8);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
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

INSERT INTO `review` (`id`, `nom`, `mail`, `review`, `note`, `product_id`) VALUES
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
(66, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fhfhfhfghgfh', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `stock_magasin` int(11) NOT NULL DEFAULT '0',
  `stock_entrepot` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `stock_magasin`, `stock_entrepot`) VALUES
(1, 2, 283),
(2, 11065, 101),
(3, 10062, 1020),
(4, 10030, 1002),
(5, 10049, 1007),
(6, 52, 9998),
(7, 50, 10000),
(8, 1500, 99500);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
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

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`, `is_active`) VALUES
(8, 'benoit', '$2y$13$nYvzBFVDnSC/3GA00a6LF.5dkn9VtpzwI/i6zUWw7dtM.uxabzXGO', 'marseillais13800@gmail.com', 'ROLE_ADMIN', 1),
(9, 'jean', '$2y$13$An1q.Uzu.f5GdtwGjIgJOO.hhEhzdVQIL8LXd9z43ug9IPZKHzQnu', 'marseillais1380011@gmail.com', 'ROLE_USER', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
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
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_7E8585C8E7927C74` (`email`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_24CC0DF24584665A` (`product_id`),
  ADD KEY `IDX_24CC0DF2A76ED395` (`user_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D34A04AD3DA5256D` (`image_id`),
  ADD UNIQUE KEY `UNIQ_D34A04ADDCD6110` (`stock_id`),
  ADD KEY `IDX_D34A04ADF77D927C` (`panier_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_794381C6794381C6` (`review`),
  ADD KEY `IDX_794381C64584665A` (`product_id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_24CC0DF24584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_24CC0DF2A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  ADD CONSTRAINT `FK_D34A04ADDCD6110` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`),
  ADD CONSTRAINT `FK_D34A04ADF77D927C` FOREIGN KEY (`panier_id`) REFERENCES `panier` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_794381C64584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
