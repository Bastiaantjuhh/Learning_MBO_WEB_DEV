-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 15 apr 2019 om 09:18
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedrijf`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `medewerkers`
--

CREATE TABLE `medewerkers` (
  `idmedewerkers` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `achternaam` varchar(45) NOT NULL,
  `straat` varchar(45) DEFAULT NULL,
  `huisnummer` int(11) DEFAULT NULL,
  `huisnummertoevoeging` varchar(10) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `plaats` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefoonnummer` varchar(15) DEFAULT NULL,
  `mobielnummer` varchar(15) DEFAULT NULL,
  `leeftijd` int(11) DEFAULT NULL,
  `gebruikersnaam` varchar(15) DEFAULT NULL,
  `wachtwoord` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `medewerkers`
--

INSERT INTO `medewerkers` (`idmedewerkers`, `voornaam`, `tussenvoegsel`, `achternaam`, `straat`, `huisnummer`, `huisnummertoevoeging`, `postcode`, `plaats`, `email`, `telefoonnummer`, `mobielnummer`, `leeftijd`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'Marja', '', 'Brans', 'Ergens', 1, 'b', '1234AA', 'Daardorp', 'marja@hotmail.com', '0987654321', NULL, 24, 'marja', 'marja'),
(2, 'Marlies', '', 'Centen', 'De Buizerd', 34, NULL, '1234BB', 'Vogelstad', 'marlies@hetnet.nl', '0987654322', NULL, 45, 'marlies', 'marlies'),
(3, 'Marjolien', 'van', 'Suos', 'poppenstraat', 89, 'hoog', '7654RK', 'Amsterhoven', 'marjolein@glasvezel.com', '0987654323', '0987654323', 75, 'marjolein', 'marjolein'),
(4, 'Karel', 'van', 'Beveren', 'waardanstraat', 5, NULL, '8732AA', 'tulpenstad', 'h.vanbeveren@mijndorp.nl', '0987654324', '0687432219', 39, 'karel', 'kareltje'),
(5, 'Pietje', NULL, 'Puk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Nina', NULL, 'Weerd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `medewerkers`
--
ALTER TABLE `medewerkers`
  ADD PRIMARY KEY (`idmedewerkers`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `medewerkers`
--
ALTER TABLE `medewerkers`
  MODIFY `idmedewerkers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
