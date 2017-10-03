-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 03 Octobre 2017 à 11:56
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `logicielchantier`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
  `id` int(11) NOT NULL,
  `id_Chantier` int(11) NOT NULL COMMENT 'lié à id de Chantier',
  `nom` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `objectif` text NOT NULL,
  `termine` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Categorie`
--

INSERT INTO `Categorie` (`id`, `id_Chantier`, `nom`, `responsable`, `objectif`, `termine`) VALUES
(12, 9, 'Fondation', 'moi', '        encore un test', 0),
(13, 9, 'Fondation', 'moi', '        encore un test', 1),
(16, 11, 'Fondation', 'jhgfd', 'sdfgh,        ', 0),
(18, 11, 'Electricite', 'rtyuio', 'fghjuiklo        ', 0),
(19, 11, 'Fenetre', 'ghjkl', 'rfghjkl        ', 0),
(20, 11, 'Toiture', 'moi ', 'fghjio        ', 0),
(22, 11, 'Fondation', 'encore un test', 'putain        ', 0),
(23, 9, 'Electricite', 'dfghj', 'cfghjk        ', 0),
(24, 9, 'Eau', 'fghjk', 'fghjkl        ', 0),
(25, 9, 'Maconnerie', 'jhgfd', 'hgfd        ', 0),
(26, 9, 'Fenetre', 'test', '        encore un test de merde', 0),
(32, 11, 'Toiture', 'dfghj', 'dfghj        dfghjk', 1),
(33, 11, 'Eau', 'hjkl', '        ertyuio', 0),
(34, 8, 'Fondation', 'machin', 'faire fonctionner header        ', 0),
(35, 8, 'Fondation', 'machin', 'faire fonctionner header encore        ', 0),
(36, 8, 'Maconnerie', 'truc', 'fonctionne putain d\'header!!        ', 0),
(37, 8, 'Fenetre', 'machin', 'va y!        ', 0),
(38, 8, 'Eau', 'merde', 'putain        ', 0),
(39, 8, 'Toiture', 'zut', 'fait chier        ', 0),
(41, 9, 'Fondation', 'machin', 'test         ', 0),
(42, 9, 'Fondation', 'uyuh', 'ttygyhu        ', 0),
(43, 9, 'Fondation', 'hghgh', 'gfhghgh\r\n        ', 0),
(44, 13, 'Fondation', 'baptiste', 'machin', 0),
(45, 9, 'Eau', 'blyat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(46, 9, 'Maconnerie', 'baptiste', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1),
(47, 9, 'Electricite', 'dfghjk', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0),
(48, 11, 'Fondation', 'baptiste', 'jhgfds azerty ,nbvcxw uytrez', 0);

-- --------------------------------------------------------

--
-- Structure de la table `Chantier`
--

CREATE TABLE `Chantier` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  `date_depart` date NOT NULL,
  `date_fin` date NOT NULL,
  `resume` text NOT NULL,
  `en_cours` tinyint(1) NOT NULL,
  `type_chantier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Chantier`
--

INSERT INTO `Chantier` (`id`, `nom`, `responsable`, `date_depart`, `date_fin`, `resume`, `en_cours`, `type_chantier`) VALUES
(8, 'hgfd', 'tyuji', '1992-03-12', '8543-03-21', 'test de merde encore        ', 0, 'immeuble'),
(9, 'logiciel', 'baptiste', '2017-09-28', '2017-10-03', 'merde de logiciel', 1, 'maison'),
(10, 'test2', 'truc', '2012-01-23', '2012-02-22', 'Ceci est un autre test', 1, 'maison'),
(11, 'test3', 'hgfds', '2312-11-24', '2344-01-26', '        machin', 1, 'immeuble'),
(12, 'test4', 'machun', '0000-00-00', '0000-00-00', 'jhgfds zertyn jhgfds', 1, 'immeuble'),
(13, 'nouveauChantier', 'kjhgfds', '1992-01-12', '2345-12-13', 'dfghjkl        ', 1, 'immeuble'),
(14, 'dernierTest', 'blyat', '1992-01-12', '1992-01-15', 'Encore un test            ', 1, 'usine'),
(15, 'un test pour la taille', 'baptiste', '1992-03-12', '8543-03-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.            ', 0, 'maison');

-- --------------------------------------------------------

--
-- Structure de la table `Tache`
--

CREATE TABLE `Tache` (
  `id` int(11) NOT NULL,
  `id_Categorie` int(11) NOT NULL,
  `executant` varchar(100) NOT NULL,
  `objectif` text NOT NULL,
  `date_exe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Tache`
--

INSERT INTO `Tache` (`id`, `id_Categorie`, `executant`, `objectif`, `date_exe`) VALUES
(1, 32, 'baptiste', 'test tache', '2017-09-30'),
(2, 32, 'baptiste', 'test creation tache', '0000-00-00'),
(3, 32, 'baptiste', 'test creation tache', '0000-00-00'),
(6, 19, 'machin', 'test tache', '0000-00-00'),
(7, 18, 'baptiste', 'test creation tache2', '0000-00-00'),
(12, 23, 'baptiste', '        fonctionne putain!', '2017-12-12'),
(13, 23, 'baptiste', '        encore un test', '0000-00-00'),
(14, 12, 'baptiste', 'ça fiat chier        ', '2094-03-30'),
(15, 24, 'baptiste', 'blabla      ', '2017-12-12'),
(16, 24, 'baptiste', '        encore un test', '1922-12-12'),
(18, 23, 'baptiste', '        encore un test', '1922-12-12'),
(19, 26, 'baptsite', 'test tache', '2094-03-30'),
(20, 26, 'baptiste', 'faire le css', '0000-00-00'),
(21, 12, 'baptiste', '        encore un test', '1922-12-12'),
(22, 12, 'baptiste', '        encore un test', '2094-03-30');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chantier`
--
ALTER TABLE `Chantier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Tache`
--
ALTER TABLE `Tache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT pour la table `Chantier`
--
ALTER TABLE `Chantier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `Tache`
--
ALTER TABLE `Tache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
