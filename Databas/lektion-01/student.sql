-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 01 feb 2021 kl 13:59
-- Serverversion: 5.7.24
-- PHP-version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `studentdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `epost` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `gatuadress` varchar(50) NOT NULL,
  `postnummer` varchar(50) NOT NULL,
  `ort` varchar(50) NOT NULL,
  `betyg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `student`
--

INSERT INTO `student` (`id`, `namn`, `epost`, `telefon`, `gatuadress`, `postnummer`, `ort`, `betyg`) VALUES
(1, 'Greger', 'greger@gmail.com', '08-123456', 'blablabla 7', '310 13', 'Valhalla', 'G'),
(2, 'Lars', 'larsaerbaest@gmail.com', '0745869', 'brunk skunkvägen 312', '123', 'Mordor', 'MVG'),
(3, 'ägget', 'eggbenedict@gmail.com', '43657', 'FLÖFLÖFLÖ 1111', '321', 'STHLM', 'VG'),
(4, 'larven', 'larven@gmail.com', '5848484845', 'karatevägen 5', '555', 'brunnslocket', 'IG'),
(5, 'svinhufvud', 'grishuvud3t@gmail.com', '1919194', 'motorsågens avkapta fingervägen', '88', 'finska viken', 'IG');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
