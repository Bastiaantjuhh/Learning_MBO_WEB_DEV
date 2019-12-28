-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2019 at 09:37 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedrijf`
--
DROP DATABASE IF EXISTS `bedrijf`;
CREATE DATABASE IF NOT EXISTS `bedrijf` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bedrijf`;

-- --------------------------------------------------------

--
-- Table structure for table `medewerkers`
--

CREATE TABLE `medewerkers` (
  `idmedewerkers` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `achternaam` varchar(45) NOT NULL,
  `straat` varchar(45) NOT NULL,
  `huisnummer` int(11) NOT NULL,
  `huisnummertoevoeging` varchar(10) DEFAULT NULL,
  `postcode` varchar(6) NOT NULL,
  `plaats` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefoonnummer` varchar(15) NOT NULL,
  `mobielnummer` varchar(15) DEFAULT NULL,
  `leeftijd` int(11) NOT NULL,
  `gebruikersnaam` varchar(15) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medewerkers`
--

INSERT INTO `medewerkers` (`idmedewerkers`, `voornaam`, `tussenvoegsel`, `achternaam`, `straat`, `huisnummer`, `huisnummertoevoeging`, `postcode`, `plaats`, `email`, `telefoonnummer`, `mobielnummer`, `leeftijd`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'Marja', '', 'Brans', 'Ergens', 1, 'b', '1234AA', 'Daardorp', 'marja@hotmail.com', '0987654321', NULL, 24, 'marja', 'marja'),
(2, 'Marlies', NULL, 'Centen', 'De Buizerd', 34, NULL, '1234BB', 'Vogelstad', 'marlies@hetnet.nl', '0987654322', NULL, 45, 'marlies', 'marlies'),
(3, 'Marjolien', 'van', 'Suos', 'poppenstraat', 89, 'hoog', '7654RK', 'Amsterhoven', 'marjolein@glasvezel.com', '0987654323', '0987654323', 75, 'marjolein', 'marjolein'),
(4, 'Karel', 'van', 'Beveren', 'waardanstraat', 5, NULL, '8732AA', 'tulpenstad', 'h.vanbeveren@mijndorp.nl', '0987654324', '0687432219', 39, 'karel', 'kareltje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medewerkers`
--
ALTER TABLE `medewerkers`
  ADD PRIMARY KEY (`idmedewerkers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medewerkers`
--
ALTER TABLE `medewerkers`
  MODIFY `idmedewerkers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
