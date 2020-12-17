-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 17 dec 2020 om 16:43
-- Serverversie: 5.6.37
-- PHP-versie: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `length` int(20) NOT NULL,
  `list_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cards`
--

INSERT INTO `cards` (`id`, `name`, `description`, `status`, `length`, `list_id`) VALUES
(17, 'aa', '', 'todo', 1, 0),
(18, 'aa', '', 'todo', 1, 0),
(19, 'aa', '', 'todo', 1, 0),
(20, 'this is a card', 'desc go brrrr', 'done', 1, 1),
(21, 'this card is orange ->', '', 'doing', 115, 1),
(23, '^that cards is colorblind', '', 'done', 116, 1),
(24, 'cards go brrrr', 'blblblblbllll', 'doing', 199, 1),
(25, 'cards go brrrr', 'aaaaa', 'todo', 13, 1),
(26, 'look at these cards left', 'hey this works', 'todo', 1, 3),
(27, 'cards on the left i said', '', 'doing', 6, 3),
(29, 'read this description', 'https://www.youtube.com/watch?v=-L4tbue3Drc', 'todo', 1, 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
