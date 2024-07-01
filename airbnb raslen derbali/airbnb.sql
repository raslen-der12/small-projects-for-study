-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 27 fév. 2024 à 22:40
-- Version du serveur : 10.4.8-MariaDB
-- Version de PHP : 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `airbnb`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `idApp` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `nb_chambres` int(11) NOT NULL,
  `nb_wc` int(11) NOT NULL,
  `equipements` varchar(255) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`idApp`, `titre`, `adress`, `nb_chambres`, `nb_wc`, `equipements`, `etat`, `prix`) VALUES
(1, 'S+1', 'Jardin de carthage', 1, 1, 'climatiseur+chauffage', 'Disponible', 120),
(2, 'S+3', 'La Marsa', 3, 2, 'climatiseur+chauffage+parking+piscine', 'Réservé', 100),
(3, 'S+1', 'Lac2', 1, 1, 'climatiseur+chauffage', 'disponible', 150),
(4, 'S+2', 'Jardin de carthage', 2, 1, '', 'Disponible', 170),
(5, 'S+3', 'Jardin de carthage', 3, 2, 'climatiseur+chauffage+parking', 'Réservé', 150);

-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE `locataire` (
  `idLoc` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `locataire`
--

INSERT INTO `locataire` (`idLoc`, `name`, `email`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com'),
(2, 'Alex', 'Alex@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`idApp`);

--
-- Index pour la table `locataire`
--
ALTER TABLE `locataire`
  ADD PRIMARY KEY (`idLoc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `idApp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `locataire`
--
ALTER TABLE `locataire`
  MODIFY `idLoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
