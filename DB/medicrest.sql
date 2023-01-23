-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 jan. 2023 à 02:11
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `medicrest`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`Id`, `Nom`, `Image`, `Prix`, `quantite`, `discription`, `date`) VALUES
(16, 'Pierre Fabre', 'percutaféine-traitement-local-amincissant-caféine-5-192-g.jpg', 8, 192, 'Percutaféine Traitement Local Amincissant Caféine 5%', '2023-01-22 00:08:26'),
(17, 'UPSA', 'donormyl-10-comprimes-pellicule-secables-15-mg.jpg', 2, 15, 'Donormyl 10 Comprimés Pelliculé Sécables 15 mg', '2023-01-22 00:08:26'),
(18, 'Tonipharm', 'endotelon-trouble-de-la-circulation-jambes-lourdes-60-comprimes-150-mg.jpg', 9, 23, 'Ginkor fort Troubles de la Circulation Veineuse 60 Gélules', '2023-01-22 00:08:26'),
(19, 'LEHNING', 'lehning-l52-etat-grippaux-30-ml.jpg', 6, 30, 'Lehning L52 Etat Grippaux 30 ml', '2023-01-22 00:18:26'),
(20, 'Tonipharm', 'nicopass-96-pastilles-15-mg-menthe-fraicheur.jpg', 9, 60, 'Ginkor fort Troubles de la Circulation Veineuse 60 Gélules', '2023-01-22 00:18:26');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(100) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role`, `nom`, `email`, `password`) VALUES
(6, 1, 'fadwa', 'fadwa@gmail.com', '$2y$10$LjdWTawHcsvc1Ntk8PIVLeH31h.H4mDXPmQbiULQOKMIbbIX8Ja4K'),
(7, NULL, 'SALMA', 'Salma@gmail.com', '$2y$10$hZBsSVEZrbas1NhJk5J5L.p5sF3eHPfkdvqG/LS51Gi/soM3dUjYa'),
(8, NULL, 'salma', 'Salma@gmail.com', '$2y$10$cw2GMGYYB6jxAT9nHMy4WeLRHlKc2qLcD3FxQQstYH1qWur.g1HfG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
