-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 fév. 2024 à 08:17
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
-- Base de données : `bank`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClt` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `poste` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClt`, `nom`, `prenom`, `poste`) VALUES
(1, 'ahmed', 'ahmed', 'ing'),
(2, 'rim', 'rim', 'avocat'),
(3, 'rami', 'rami', 'teacher');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `numCmt` varchar(20) NOT NULL,
  `idclt` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `solde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`numCmt`, `idclt`, `type`, `etat`, `solde`) VALUES
('103774', 1, 'courant', 'debiteur', 4500),
('103775', 1, 'epargne', 'debiteur', 200),
('103776', 2, 'epargne', 'debiteur', 120),
('103777', 3, 'courant', 'crediteur', -250);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `idTrans` int(11) NOT NULL,
  `numCmt` varchar(20) CHARACTER SET latin1 NOT NULL,
  `montant` int(11) NOT NULL,
  `dateTrans` date NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`idTrans`, `numCmt`, `montant`, `dateTrans`, `Type`) VALUES
(1, '103775', 3500, '2024-03-01', 'Virement'),
(2, '103774', 300, '2024-03-01', 'Retirement'),
(3, '103776', 550, '2024-03-03', 'Virement'),
(4, '103777', 1200, '2024-03-03', 'Retirement'),
(5, '103774', 120, '2024-03-03', 'Virement');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClt`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`numCmt`),
  ADD KEY `idclt` (`idclt`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idTrans`),
  ADD KEY `numCmt` (`numCmt`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTrans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`idclt`) REFERENCES `client` (`idClt`);

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`numCmt`) REFERENCES `compte` (`numCmt`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
