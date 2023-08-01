-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Út 01.Aug 2023, 13:54
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `test`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `hraci`
--

CREATE TABLE `hraci` (
  `id` int(4) NOT NULL,
  `meno` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `priezvisko` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `vek` int(3) DEFAULT NULL,
  `krajina_povodu` varchar(58) CHARACTER SET utf8 DEFAULT NULL,
  `pozicia` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `tim` varchar(40) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sťahujem dáta pre tabuľku `hraci`
--

INSERT INTO `hraci` (`id`, `meno`, `priezvisko`, `vek`, `krajina_povodu`, `pozicia`, `tim`) VALUES
(1, 'Sergej', 'Bobrovskij', 36, 'Rusko', 'brankár', 'Florida'),
(2, 'Connor', 'McDavid', 24, 'Kanda', 'útok', 'Edmonton'),
(3, 'Nazem', 'Kadri', 32, 'Kanada', 'obrana', 'Colorada'),
(4, 'Troy', 'Terry', 26, 'USA', 'útok', 'Anaheim'),
(5, 'Anže', 'Kopitar', 30, 'Slovinsko', 'útok', 'Los Angeles'),
(6, 'Leon', ' Draisaitl', 38, 'Slovensko', 'obrana', 'Edmonton');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `hraci`
--
ALTER TABLE `hraci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `hraci`
--
ALTER TABLE `hraci`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
