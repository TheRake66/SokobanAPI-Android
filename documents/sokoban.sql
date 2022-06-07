-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 juin 2022 à 10:13
-- Version du serveur :  10.6.4-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sokoban`
--

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

DROP TABLE IF EXISTS `map`;
CREATE TABLE IF NOT EXISTS `map` (
  `map_id` int(11) NOT NULL AUTO_INCREMENT,
  `map_board` varchar(1000) NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `map`
--

INSERT INTO `map` (`map_id`, `map_board`) VALUES
(1, '--###--\r\n###P.##\r\n#..GB##\r\n#...B.#\r\n#.#G..#\r\n#.....#\r\n#######'),
(2, '########\r\n#.#P..##\r\n#.B....#\r\n#...B.##\r\n#.#G..##\r\n#.....G#\r\n########'),
(3, '########\r\n#.#P..##\r\n#.B....#\r\n#...B.##\r\n#.#G..##\r\n#.....G#\r\n########'),
(4, '########\r\n#.#P..##\r\n#.B....#\r\n#...B.##\r\n#.#G..##\r\n#.....G#\r\n########'),
(5, '########\r\n#.#P..##\r\n#.B....#\r\n#...B.##\r\n#.#G..##\r\n#.....G#\r\n########'),
(6, '########\r\n#.#P..##\r\n#.B....#\r\n#...B.##\r\n#.#G..##\r\n#.....G#\r\n########');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
