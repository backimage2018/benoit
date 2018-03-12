-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 12 Mars 2018 à 15:14
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
(12, 'e1b4fb84dba3afbc184703ec9e84e2cc.jpeg', 13),
(13, '639069a8670463e8a2b3b73045d07ab8.jpeg', 14),
(14, '56ba9e0352e9c5bca9e43d9387468baf.jpeg', 15);

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
('20180312131252');

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
(10, 'hfhf', NULL);

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
  `date_fin_promo` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `nom`, `prix`, `taille`, `couleur`, `collection`, `description`, `disponibilite`, `marque`, `detail`, `categorie`, `sexe`, `reduction`, `new`, `display`, `ancienprix`, `date_fin_promo`, `image_id`, `deleted`) VALUES
(12, 'Botte', '50', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Homme', '20', 'oui', 'oui', '500', NULL, 11, '2018-03-12 10:03:30'),
(13, 'Sac', '50', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Homme', '20', 'oui', 'oui', '40', NULL, 12, NULL),
(14, 'Montre', '35', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Homme', '20', 'oui', 'oui', '45', NULL, 13, NULL),
(15, 'basket', '20', 'L', 'bleu', 'Vetements', 'Joli', 'En stock', 'Levis', 'Très joli', 'ddd', 'Homme', '20', 'oui', 'oui', '45', NULL, 14, NULL);

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
(35, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dsffssf', 1, 12),
(36, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hjgjg', 5, 13),
(37, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dssdsdsd', 2, 12),
(38, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'gfhfhf', 3, 13),
(39, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dsfsfsf', 1, 13),
(40, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'wxwxwxwq', 4, 13),
(42, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'qsdqdqsddq', 5, 13),
(44, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dfsdfsf', 1, 12),
(46, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'sdsdq', 1, 12),
(49, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'sdqdqd', 1, 12),
(51, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hfhfh', 5, 12),
(53, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'hf', 5, 12),
(54, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgd', 4, 12),
(56, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgdgdgd', 4, 12),
(57, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'fdgdgdgdgdgdsfgds', 4, 12),
(58, 'dqdq', 'ddsqqd', 'dqqdq', 1, 12),
(60, 'sdfsf', 'fsdsfs', 'fdssdfsfsd', 4, 12),
(61, 'Benoit ribeiro', 'marseillais13800@gmail.com', 'dgdgdg', 2, 13);

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
(1, 'jean', '$2y$13$CDqEH8lHUnF5h2z8rXh5q.NoCe1zieuSRceRFjgoZ2e9wB9B4OFk2', 'benoit@aol.com', 'ROLE_USER', 1),
(2, 'benoit', '$2y$13$QJvVC2OhzUF9jgkCqr1tl.sWCr7Xb2ftgnv9/ZHOQ1Sy36zxMaqpS', 'benoit@gmail.com', 'ROLE_ADMIN', 1),
(3, 'lllOOOO', '$2y$13$5U4VWiVKxnJmk1cXq/gT7.MjmZGdFqgtjCwwC6N2AXUWCkB75zucy', 'benoit@aol.comllllll', 'ROLE_USER', 1),
(4, 'jean44', '$2y$13$lG4o0G5hztFB.WOLQgTfQ.pifXTG5I3Q/R8y1KeRML5FOej0U8rzO', 'jean44@aol.com', 'ROLE_USER', 1),
(5, 'fab', '$2y$13$h/c1QHDNM1KeFwrJs5ES2uv2v2x82G4wHlXJVZVEf5aynOXJv9oEG', 'fab@mail.com', 'ROLE_USER', 1);

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
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D34A04AD3DA5256D` (`image_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_794381C6794381C6` (`review`),
  ADD KEY `IDX_794381C64584665A` (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_794381C64584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
