-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 16 mars 2022 à 16:28
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fragment_future`
--

-- --------------------------------------------------------

--
-- Structure de la table `recit`
--

CREATE TABLE `recit` (
  `id_recit` int(11) NOT NULL,
  `texte` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `pdp` varchar(10) NOT NULL,
  `perso` varchar(10) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recit`
--

INSERT INTO `recit` (`id_recit`, `texte`, `position`, `pdp`, `perso`, `type`) VALUES
(1, 'C\'est le matin ?', 'bubbleLiam recit', 'liam_pdp', 'liam', 'R'),
(2, 'Déjà ?', 'bubbleLiam recit ', 'liam_pdp', 'liam', 'R'),
(3, 'Le lycée... Je suis en retard !', 'bubbleLiam recit', 'liam_pdp', 'liam', 'R'),
(4, 'Prendre son temps', 'bubbleChoice', '', '', 'C'),
(5, 'Courir', 'bubbleChoice', '', '', 'C'),
(6, 'Excusez moi pour le retard !', 'bubbleLiam recit', 'liam_pdp', 'liam', 'R'),
(7, 'Tu te gênes pas hein…<br>\r\nMonsieur arrive en retard ! ', 'bubbleRandom', 'random_pdp', 'twan', 'R'),
(8, 'Laisse le tranquille, Twân…', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(9, 'Mal réveillé, Liam ?', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(10, 'Pour ma défense, je me suis couché tard !', 'bubbleLiam recit', 'liam_pdp', 'liam', 'R'),
(11, 'Responsable, pour un futur délégué !\r\n', 'bubbleRandom', 'random_pdp', 'twan', 'R'),
(12, 'Un futur... quoi ?', 'bubbleChoice', '', '', 'C'),
(13, 'Délégué ? J’étais pas au courant.\r\n', 'bubbleChoice', '', '', 'C'),
(14, 'Ne me dis pas que tu as oublié !', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(15, 'Il a carrément oublié, Sasha.\r\n', 'bubbleRandom', 'random_pdp', 'twan', ''),
(16, '.....', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(17, 'Tu sais que les élections, c’est aujourd’hui, hein ?\r\n', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(18, 'Mais…', 'bubbleLiam recit', 'liam_pdp', 'liam', 'R'),
(19, ' Je n’ai rien préparé !\r\n', 'bubbleLiam', 'liam_pdp', 'liam', 'R'),
(20, 'Nous allons maintenant passer aux discours des candidats...\r\n', 'bubbleRandom', 'random_pdp', 'professeur', 'R'),
(21, 'Panique pas, Liam, improvise !', 'bubbleRandom', 'random_pdp', 'sasha', 'R'),
(22, 'Je...', 'bubbleLiam', 'liam_pdp', 'liam', 'R'),
(23, 'Je dois faire un tour aux toilettes…\r\n', 'bubbleLiam', 'liam_pdp', 'liam', 'R'),
(24, 'est ce que tu me vois 1', 'bubbleChoice', '', '', 'c'),
(25, 'est ce que tu me vois 2', 'bubbleChoice', '', '', 'c'),
(26, 'est ce que tu me vois 3', '', '', '', 'R');

-- --------------------------------------------------------

--
-- Structure de la table `suivant`
--

CREATE TABLE `suivant` (
  `preced` int(4) NOT NULL,
  `suiv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `suivant`
--

INSERT INTO `suivant` (`preced`, `suiv`) VALUES
(1, 2),
(2, 3),
(4, 6),
(5, 7),
(3, 4),
(3, 5),
(8, 9),
(7, 8),
(9, 10),
(10, 11),
(11, 12),
(11, 13),
(12, 14),
(13, 14),
(14, 15),
(15, 16),
(16, 17),
(17, 18),
(18, 19),
(19, 20),
(20, 21),
(21, 22),
(22, 24),
(22, 25),
(24, 26),
(26, 23),
(25, 23);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `save` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `mail`, `password`, `save`) VALUES
(3, 'flavien', '$2y$10$fdV2f6N8YxclJhbCIM8iWe6QqmwBC/3bY8N4spnIgzQ0D3VGKxde.', 0),
(4, 'sally', '$2y$10$M2xTtaDylwMIF2LHjA5qj.8xLl9Sjgyeae4/.nttdFxL1mSYukw7G', 8),
(7, 'sniasse@hotmail.com', '$2y$10$CsVWT1bFqGlrozovWZ2v/OKswNhI/p8HCh4PlFaqoupsKkRQBojDu', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recit`
--
ALTER TABLE `recit`
  ADD PRIMARY KEY (`id_recit`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recit`
--
ALTER TABLE `recit`
  MODIFY `id_recit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
