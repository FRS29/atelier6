-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 01 déc. 2024 à 11:08
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `immobilier`
--

CREATE TABLE `immobilier` (
  `reference` int(11) NOT NULL,
  `proprietaire` varchar(100) NOT NULL,
  `localite` varchar(100) NOT NULL,
  `nbPieces` int(11) NOT NULL,
  `domaineUsage` varchar(100) NOT NULL,
  `Nature` enum('Appartement','Villa') NOT NULL,
  `nbEtage` int(11) DEFAULT NULL,
  `surfaceCommune` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `immobilier`
--

INSERT INTO `immobilier` (`reference`, `proprietaire`, `localite`, `nbPieces`, `domaineUsage`, `Nature`, `nbEtage`, `surfaceCommune`) VALUES
(123, 'John Doe', 'Paris', 3, 'Habitation', 'Appartement', NULL, 81),
(1452, 'sami', 'tunis', 4, 'gd', 'Appartement', NULL, 81),
(2147483647, 'sami', 'tunis', 3, 'gd', 'Appartement', NULL, 81);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `immobilier`
--
ALTER TABLE `immobilier`
  ADD PRIMARY KEY (`reference`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `immobilier`
--
ALTER TABLE `immobilier`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
