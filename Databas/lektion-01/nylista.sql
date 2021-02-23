-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 01 feb 2021 kl 13:36
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
-- Databas: `nytabell`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `nylista`
--

CREATE TABLE `nylista` (
  `id` int(11) NOT NULL,
  `namn` varchar(50) NOT NULL,
  `epost` varchar(50) NOT NULL,
  `meddelande` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `nylista`
--

INSERT INTO `nylista` (`id`, `namn`, `epost`, `meddelande`) VALUES
(1, 'daniel', 'danielhakansson2@gmail.com', 'hej här kommer jag'),
(2, 'Vera', 'vera@gmail.com', 'hej här kommer vera'),
(4, 'anna', 'fabiansNYAepost@gmail.com', 'hej här kommer anna');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `nylista`
--
ALTER TABLE `nylista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `nylista`
--
ALTER TABLE `nylista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
