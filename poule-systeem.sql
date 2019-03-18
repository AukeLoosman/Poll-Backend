-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 18 mrt 2019 om 07:45
-- Serverversie: 5.7.24
-- PHP-versie: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poule-systeem`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `HID` int(255) NOT NULL,
  `Winner` varchar(50) NOT NULL,
  PRIMARY KEY (`HID`),
  KEY `HID` (`HID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='eerste plek van elke poule.';

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `Team` varchar(50) NOT NULL,
  `Agility` int(100) NOT NULL,
  `Defense` int(100) NOT NULL,
  `Strength` int(100) NOT NULL,
  `TID` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teams`
--

INSERT INTO `teams` (`Team`, `Agility`, `Defense`, `Strength`, `TID`) VALUES
('hitler', 88, 6, 6, 14),
('escanor', 30, 25, 45, 10),
('can', 22, 65, 13, 13),
('hentai', 5, 5, 90, 12),
('mentos', 34, 34, 32, 11),
('jeet', 16, 69, 15, 15);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Role` int(5) NOT NULL,
  `Email` varchar(50),
  `Username` varchar(50) NOT NULL,
  `Password` varchar(25555) NOT NULL,
  `UID` int(255) NOT NULL AUTO_INCREMENT,
  `Portfolio` double DEFAULT '100000',
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`Role`, `Email`, `Username`, `Password`, `UID`, `Portfolio`) VALUES
(1, 'auke', 'auke', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 64, 100000),
(0, 'testing', 'test', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 65, 100000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
