-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 avr. 2024 à 16:27
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
-- Base de données : `emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE `candidature` (
  `id_cand` int(11) NOT NULL,
  `num_poste` int(11) DEFAULT NULL,
  `num_profil` int(11) DEFAULT NULL,
  `date_cand` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`id_cand`, `num_poste`, `num_profil`, `date_cand`) VALUES
(1, 1, 851, '2024-04-06'),
(2, 1, 852, '2024-04-08'),
(3, 2, 854, '2024-04-06'),
(4, 2, 853, '2024-04-04');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `num_poste` int(11) NOT NULL,
  `nom_poste` varchar(100) CHARACTER SET latin1 NOT NULL,
  `niveau` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `qualif` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `annee_exp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `poste`
--

INSERT INTO `poste` (`num_poste`, `nom_poste`, `niveau`, `qualif`, `annee_exp`) VALUES
(1, 'Développeur web', 'Ingenieur', 'web', 2),
(2, 'Data scientist', 'Licence', 'python', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `num_profil` int(11) NOT NULL,
  `nom_profil` varchar(50) CHARACTER SET latin1 NOT NULL,
  `diplome` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ecole` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `competences` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`num_profil`, `nom_profil`, `diplome`, `ecole`, `competences`, `experience`, `pic`) VALUES
(851, 'Dorra ', 'Ingenieur Genie electrique', 'Esprit', 'IOT, Robotique, Ardouino', 2, 'images/dor.png'),
(852, 'Ahmed', 'Ingenieur Genie logiciel', 'Esprit', 'python, java, sql', 1, 'images/bi.png'),
(853, 'Youssef', 'Licence multimedia', 'ISI', 'web, python', 1, 'images/bi.png'),
(854, 'Adam', 'Ingenieur Genie logiciel', 'ENSI', 'web,python,java,oracle', 2, 'images/bi.png'),
(855, 'Rami', 'Licence', 'ISI', NULL, 1, 'images/bi.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id_cand`),
  ADD KEY `num_poste` (`num_poste`),
  ADD KEY `num_profil` (`num_profil`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`num_poste`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`num_profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id_cand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `candidature_ibfk_1` FOREIGN KEY (`num_poste`) REFERENCES `poste` (`num_poste`),
  ADD CONSTRAINT `candidature_ibfk_2` FOREIGN KEY (`num_profil`) REFERENCES `profil` (`num_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
