-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Gegenereerd op: 13 dec 2019 om 12:23
-- Serverversie: 8.0.18
-- PHP-versie: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `namen`
--

CREATE TABLE `namen` (
  `id` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `namen`
--

INSERT INTO `namen` (`id`, `naam`, `woonplaats`) VALUES
(1, 'Bastiaan de Hart', 'Drunen'),
(2, 'Nina de Weerd', 'Dongen'),
(3, 'Roy van Aalst', 'Hengelo'),
(4, 'Thierry Aartsen', 'Breda'),
(5, 'Fleur Agema', 'Den Haag'),
(6, 'Mahir Alkaya', 'Amsterdam'),
(7, 'Mustafa Amhaouch', 'Panningen'),
(8, 'Khadija Arib', 'Amsterdam'),
(9, 'Lodewijk Asscher', 'Amsterdam'),
(10, 'Farid Azarkan', 'Culemborg'),
(11, 'Thierry Baudet', 'Amsterdam'),
(12, 'Bente Becker', 'Den Haag'),
(13, 'Sandra Beckerman', 'Groningen'),
(14, 'Harm Beertema', 'Voorburg'),
(15, 'Salima Belhaj', 'Rotterdam'),
(16, 'Joba van den Berg', 'Goes'),
(17, 'Niels van den Berge', 'Den Haag'),
(18, 'Vera Bergkamp', 'Amsterdam'),
(19, 'Roelof Bisschop', 'Veenendaal'),
(20, 'Monica den Boer', 'Maasdam'),
(21, 'Albert van den Bosch', 'Eefde'),
(22, 'Martin Bosma', 'Amsterdam'),
(23, 'André Bosman', 'Middelburg'),
(24, 'Achraf Bouali', 'Amsterdam'),
(25, 'Corrie van Brenk', 'Utrecht'),
(26, 'Laura Bromet', 'Monnickendam'),
(27, 'Eppo Bruins', 'Ermelo'),
(28, 'Kathalijne Buitenweg', 'Amsterdam'),
(29, 'Chris van Dam', 'Den Haag'),
(30, 'Jesse Klaver', 'Den Haag');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `namen`
--
ALTER TABLE `namen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `namen`
--
ALTER TABLE `namen`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
