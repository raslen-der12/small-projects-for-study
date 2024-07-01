-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 mai 2023 à 18:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `billeterie`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `idBillet` int(11) NOT NULL,
  `idConcert` int(11) NOT NULL,
  `idFan` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `place` enum('sol','tribune','loge') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `concert`
--

CREATE TABLE `concert` (
  `idConcert` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `idLieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `concert`
--

INSERT INTO `concert` (`idConcert`, `nom`, `date`, `heure`, `idLieu`) VALUES
(1, 'Concert Rogers Waters', '2023-04-23', '20:30:00', 7),
(2, 'Concert Rogers Waters', '2023-04-24', '20:30:00', 1),
(3, 'Concert Rogers Waters', '2023-05-20', '20:30:00', 2),
(4, 'Concert Rogers Waters', '2023-05-29', '20:30:00', 3),
(5, 'Concert Rogers Waters', '2023-05-03', '20:30:00', 4),
(6, 'Concert Rogers Waters', '2023-06-06', '20:30:00', 5),
(7, 'Concert Rogers Waters', '2023-06-10', '20:30:00', 6);

-- --------------------------------------------------------

--
-- Structure de la table `fan`
--

CREATE TABLE `fan` (
  `idFan` int(11) NOT NULL,
  `nomF` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `fan`
--

INSERT INTO `fan` (`idFan`, `nomF`, `email`, `password`, `mobile`) VALUES
(1, 'Alex', 'alex@gmail.com', 'alex123', '+33258741'),
(2, 'Arwa', 'arwa@gmail.com', 'amesterdam123', '');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `idLieu` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `capacite` int(11) NOT NULL,
  `nbSol` int(11) NOT NULL,
  `nbTribune` int(11) NOT NULL,
  `nbLoge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`idLieu`, `nom`, `ville`, `pays`, `capacite`, `nbSol`, `nbTribune`, `nbLoge`) VALUES
(1, 'Multifunctional Sports Hall', 'Budapest', 'Hongrie', 12500, 2, 0, 10),
(2, 'Accor Arena', 'Paris', 'France', 16065, 10, 100, 300),
(3, 'Hallenstadion', 'Zurich', 'Suisse', 13000, 3500, 7000, 600),
(4, 'Unipol Arena', 'Bologna', 'Italie', 11000, 0, 100, 0),
(5, 'Palais des Sports', 'Anvers', 'Belgique', 19918, 60, 60, 66),
(6, 'Lanxess Arena', 'Cologne', 'Allemagne', 19500, 280, 0, 200),
(7, 'Mercedes Benz Arena', 'Berlin', 'Allemagne', 60441, 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`idBillet`);

--
-- Index pour la table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`idConcert`),
  ADD KEY `idLieu` (`idLieu`);

--
-- Index pour la table `fan`
--
ALTER TABLE `fan`
  ADD PRIMARY KEY (`idFan`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`idLieu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `idBillet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `concert`
--
ALTER TABLE `concert`
  MODIFY `idConcert` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `fan`
--
ALTER TABLE `fan`
  MODIFY `idFan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `idLieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
