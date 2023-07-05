-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 05, 2023 alle 18:56
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grifo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `idNotizia` int(11) NOT NULL,
  `nomeAutore` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cognomeAutore` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oggetto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `testoNotizia` text COLLATE utf8_unicode_ci NOT NULL,
  `dataNotizia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`idNotizia`, `nomeAutore`, `cognomeAutore`, `oggetto`, `testoNotizia`, `dataNotizia`) VALUES
(1, '', '', 'Come le digital academy possono ridurre il divario di competenze', 'Il divario di competenze digitali &egrave uno dei principali ostacoli alla crescita e alla competitivit&agrave...', '2023-06-07'),
(2, '', '', 'Come la gamification rivoluziona il processo di recruiting e pre-screening dei candidati', 'Il mercato del lavoro &egrave in continua evoluzione e richiede alle aziende di adottare strategie innova...', '2023-04-26');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `idUtente` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`idUtente`, `nome`, `cognome`, `email`, `password`) VALUES
(1, 'Maurizio', 'Prudente', 'prudentemaurizio@gmail.com', '4d6c28bcd0bda7fa01a5183818232916'),
(2, 'Prova', 'Prova', 'prova@prova.com', '0cfb615f61bc8d09f8d9633123b8c1cb');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNotizia`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`idUtente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `idNotizia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `idUtente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
