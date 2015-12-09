-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 dec 2015 om 15:55
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
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
  `extraInfo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`bestelId`, `klantId`, `datum`, `tijdstip`, `extraInfo`) VALUES
(23, 5, 8, 12, 0),
(24, 5, 8, 12, 0),
(25, 5, 8, 14, 0),
(26, 5, 8, 14, 0),
(27, 5, 8, 14, 0),
(28, 5, 8, 14, 0),
(29, 5, 8, 14, 0),
(30, 5, 9, 15, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingredienten`
--

CREATE TABLE IF NOT EXISTS `ingredienten` (
  `ingredientId` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ingredienten`
--

INSERT INTO `ingredienten` (`ingredientId`, `naam`) VALUES
(1, 'tomatensaus'),
(2, 'kaas'),
(3, 'oregano'),
(4, 'ham'),
(5, 'ananas'),
(6, 'champignons'),
(7, 'salami'),
(8, 'pikant'),
(9, 'paprika'),
(10, 'ansjovis'),
(11, 'kipblokjes'),
(12, 'mais'),
(13, 'bolognesesaus'),
(14, 'feta'),
(15, 'ui');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klanten`
--

CREATE TABLE IF NOT EXISTS `klanten` (
  `klantId` int(11) NOT NULL,
  `naam` text NOT NULL,
  `voornaam` text NOT NULL,
  `adres` text NOT NULL,
  `nummer` int(11) NOT NULL,
  `postcode` int(11) NOT NULL,
  `gemeente` varchar(60) NOT NULL,
  `telefoonnummer` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klanten`
--

INSERT INTO `klanten` (`klantId`, `naam`, `voornaam`, `adres`, `nummer`, `postcode`, `gemeente`, `telefoonnummer`) VALUES
(3, 'Van Mechelen', 'Innek', 'Oudebaan346', 0, 3000, 'Leuven', '016/744744'),
(4, 'Van Mechelen', 'Inneke', 'Oudebaan346', 0, 3000, 'Leuven', '32497234264'),
(5, 'Van Mechelen', 'Inneke', 'Oudebaan', 346, 3000, 'Leuven', '32497234264');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderlijnen`
--

CREATE TABLE IF NOT EXISTS `orderlijnen` (
  `lijnId` int(11) NOT NULL,
  `bestelId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orderlijnen`
--

INSERT INTO `orderlijnen` (`lijnId`, `bestelId`, `productId`, `aantal`, `prijs`) VALUES
(1, 23, 1, 2, 12),
(2, 23, 5, 1, 7),
(3, 24, 1, 2, 12),
(4, 24, 5, 1, 7),
(5, 25, 1, 2, 12),
(6, 25, 5, 1, 7),
(7, 26, 1, 2, 12),
(8, 26, 5, 1, 7),
(9, 27, 1, 2, 12),
(10, 27, 5, 1, 7),
(11, 28, 1, 2, 12),
(12, 28, 5, 1, 7),
(13, 29, 1, 2, 12),
(14, 29, 5, 1, 7),
(15, 30, 1, 1, 6),
(16, 30, 5, 2, 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE IF NOT EXISTS `producten` (
  `productId` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `beschikbaarheid` int(11) NOT NULL,
  `prijs` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`productId`, `naam`, `beschikbaarheid`, `prijs`) VALUES
(1, 'margherita', 10, 6),
(4, 'hawai', 10, 8),
(5, 'fungi', 10, 7),
(6, 'bomba', 10, 7),
(7, 'salami', 10, 7),
(8, 'hesp', 10, 7),
(9, 'casa', 10, 8),
(10, 'napoli', 10, 8),
(11, 'kip hawai', 10, 8),
(12, 'america', 10, 8),
(13, 'bolognese', 10, 8),
(14, 'capri', 10, 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producteningredienten`
--

CREATE TABLE IF NOT EXISTS `producteningredienten` (
  `productId` int(11) NOT NULL,
  `ingredientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producteningredienten`
--

INSERT INTO `producteningredienten` (`productId`, `ingredientId`) VALUES
(1, 1),
(1, 2),
(1, 3),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(5, 1),
(5, 2),
(5, 6),
(6, 1),
(6, 2),
(6, 7),
(6, 8),
(7, 1),
(7, 2),
(7, 7),
(8, 1),
(8, 2),
(8, 4),
(9, 1),
(9, 2),
(9, 8),
(9, 7),
(10, 1),
(10, 2),
(10, 7),
(10, 10),
(11, 1),
(11, 2),
(11, 11),
(11, 5),
(12, 1),
(12, 2),
(12, 4),
(12, 7),
(12, 12),
(13, 13),
(13, 2),
(14, 1),
(14, 2),
(14, 4),
(14, 14),
(14, 15);

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
-- Tabelstructuur voor tabel `webklanten`
--

CREATE TABLE IF NOT EXISTS `webklanten` (
  `userId` int(11) NOT NULL,
  `klantId` int(11) NOT NULL,
  `wachtwoord` varchar(150) NOT NULL,
  `statusId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webklanten`
--

INSERT INTO `webklanten` (`userId`, `klantId`, `wachtwoord`, `statusId`, `email`) VALUES
(1, 5, '1396caa3891bfa9057d34598a3ed9ad18794880b', 0, 'innekevanmechelen@gmail.com');

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
-- Indexen voor tabel `orderlijnen`
--
ALTER TABLE `orderlijnen`
  ADD PRIMARY KEY (`lijnId`);

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
-- Indexen voor tabel `webklanten`
--
ALTER TABLE `webklanten`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `bestelId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT voor een tabel `ingredienten`
--
ALTER TABLE `ingredienten`
  MODIFY `ingredientId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `orderlijnen`
--
ALTER TABLE `orderlijnen`
  MODIFY `lijnId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT voor een tabel `promos`
--
ALTER TABLE `promos`
  MODIFY `promoId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `webklanten`
--
ALTER TABLE `webklanten`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
