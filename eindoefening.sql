-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 nov 2015 om 15:10
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eindoefening`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE IF NOT EXISTS `bestellingen` (
  `bestelId` int(11) NOT NULL,
  `klantId` int(11) NOT NULL,
  `datum` int(11) NOT NULL,
  `tijdstip` int(11) NOT NULL,
  `extraInfo` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingredienten`
--

CREATE TABLE IF NOT EXISTS `ingredienten` (
  `ingredientId` int(11) NOT NULL,
  `naam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE IF NOT EXISTS `klanten` (
  `klantId` int(11) NOT NULL,
  `naam` text NOT NULL,
  `voornaam` text NOT NULL,
  `adres` text NOT NULL,
  `postcode` int(11) NOT NULL,
  `gemeente` varchar(60) NOT NULL,
  `telefoonnummer` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderlijnen`
--

CREATE TABLE IF NOT EXISTS `orderlijnen` (
  `lijnId` int(11) NOT NULL,
  `bestelId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  `prijs` int(11) NOT NULL,
  `sessieId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `productId` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `beschikbaarheid` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productingredient`
--

CREATE TABLE IF NOT EXISTS `productingredient` (
  `productId` int(11) NOT NULL,
  `ingredientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `promos`
--

CREATE TABLE IF NOT EXISTS `promos` (
  `promoId` int(11) NOT NULL,
  `prijs` int(11) NOT NULL,
  `statusId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `statussen`
--

CREATE TABLE IF NOT EXISTS `statussen` (
  `statusId` int(11) NOT NULL,
  `naam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webusers`
--

CREATE TABLE IF NOT EXISTS `webusers` (
  `userId` int(11) NOT NULL,
  `klantId` int(11) NOT NULL,
  `wachtwoord` varchar(150) NOT NULL,
  `statusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`bestelId`);

--
-- Indexen voor tabel `ingredienten`
--
ALTER TABLE `ingredienten`
  ADD PRIMARY KEY (`ingredientId`);

--
-- Indexen voor tabel `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantId`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`productId`);

--
-- Indexen voor tabel `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`promoId`);

--
-- Indexen voor tabel `webusers`
--
ALTER TABLE `webusers`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `bestelId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `ingredienten`
--
ALTER TABLE `ingredienten`
  MODIFY `ingredientId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `promos`
--
ALTER TABLE `promos`
  MODIFY `promoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `webusers`
--
ALTER TABLE `webusers`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
