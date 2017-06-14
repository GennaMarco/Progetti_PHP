-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Mag 05, 2017 alle 09:38
-- Versione del server: 10.1.19-MariaDB
-- Versione PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsphpmetodoprof`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categorie`
--

CREATE TABLE `categorie` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `categorie`
--

INSERT INTO `categorie` (`id_categoria`, `categoria`) VALUES
(1, 'php'),
(2, 'java');

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `sottotitolo` varchar(255) NOT NULL,
  `testo` text NOT NULL,
  `immagine` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `data_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `titolo`, `sottotitolo`, `testo`, `immagine`, `id_categoria`, `data_post`) VALUES
(1, '5test', 'test', 'test Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et <a href=''http://www.bogliaccino.it/teaching/lab/CorsoITS2017''>dolore magna aliqua</a>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test', 1, '2017-04-19 15:34:54'),
(2, 'La connessione al database con mysqli', 'La connessione al database con mysqli', 'La connessione al database con mysqli   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1, '2017-04-19 15:34:54'),
(3, 'La connessione al database con jdbc', 'La connessione al database con jdbc', 'La connessione al database con jdbc  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:34:54'),
(4, 'La Java Collection Framework', 'La Java Collection Framework', 'La connessione al database con jdbc  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:34:54'),
(5, 'Date and time in Java', 'Trattare date in Java', 'Trattare date in Javaquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:42:32'),
(6, 'oggi Ã¨ il 5/5', 'Cose a caso', 'siccome immobile', '', 1, '2017-05-05 07:21:17'),
(7, 'weila', 'fabiuz', 'fabiuz', '', 2, '2017-05-05 07:21:46');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_categoria`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
