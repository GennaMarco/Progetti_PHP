-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2017 at 09:29 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

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
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categoria`, `categoria`) VALUES
(1, 'php'),
(2, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titolo`, `sottotitolo`, `testo`, `immagine`, `id_categoria`, `data_post`) VALUES
(1, '5test', 'test', 'test Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et <a href=''http://www.bogliaccino.it/teaching/lab/CorsoITS2017''>dolore magna aliqua</a>. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'test', 1, '2017-04-19 15:34:54'),
(2, 'La connessione al database con mysqli', 'La connessione al database con mysqli', 'La connessione al database con mysqli   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 1, '2017-04-19 15:34:54'),
(3, 'La connessione al database con jdbc', 'La connessione al database con jdbc', 'La connessione al database con jdbc  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:34:54'),
(4, 'La Java Collection Framework', 'La Java Collection Framework', 'La connessione al database con jdbc  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:34:54'),
(5, 'Date and time in Java', 'Trattare date in Java', 'Trattare date in Javaquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 2, '2017-04-19 15:42:32'),
(8, 'weila', 'sdasdas', 'fabiuz', '', 1, '2017-05-05 08:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `id` int(10) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cognome` varchar(100) DEFAULT NULL,
  `matricola` int(10) DEFAULT NULL,
  `data_nascita` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `matricola`, `data_nascita`, `email`) VALUES
(1, 'RICCARDO', 'GABOSSI', NULL, NULL, 'riccardo.gabossi@edu.itspiemonte.it'),
(2, 'VLADIMIR', 'VIBIO', NULL, NULL, 'vladimir.vibio@edu.itspiemonte.it'),
(3, 'GIORGIO', 'MASERAZZO', NULL, NULL, 'giorgio.maserazzo@edu.itspiemonte.it'),
(4, 'STEFANO', 'SCICOLONE', NULL, NULL, 'stefano.scicolone@edu.itspiemonte.it'),
(5, 'DAVIDE', 'COLANGELO', NULL, NULL, 'davide.colangelo@edu.itspiemonte.it'),
(6, 'FABRIZIO', 'DE CICCO', NULL, NULL, 'fabrizio.decicco@edu.itspiemonte.it'),
(7, 'SIMONE', 'RORATO', NULL, NULL, 'simone.rorato@edu.itspiemonte.it'),
(8, 'LORENZO', 'SCARPA', NULL, NULL, 'lorenzo.scarpa@edu.itspiemonte.it'),
(9, 'SIMONE', 'FUOCO', NULL, NULL, 'simone.fuoco@edu.itspiemonte.it'),
(10, 'ALESSANDRO', 'VIOTTI', NULL, NULL, 'alessandro.viotti@edu.itspiemonte.it'),
(11, 'ROSA', 'BUONO', NULL, NULL, 'rosa.buono@edu.itspiemonte.it'),
(12, 'STEFANO', 'ADAMO', NULL, NULL, 'stefano.adamo@edu.itspiemonte.it'),
(13, 'TONY', 'FAVA', NULL, NULL, 'tony.fava@edu.itspiemonte.it'),
(14, 'FRANCESCO', 'TALOMO', NULL, NULL, 'francesco.talomo@edu.itspiemonte.it'),
(15, 'LUIGI', 'BOTTASSO', NULL, NULL, 'luigi.bottasso@edu.itspiemonte.it'),
(16, 'MARCO', 'DE GENNARO', NULL, NULL, 'marco.degennaro@edu.itspiemonte.it'),
(17, 'EMANUELE', 'GALLINA', NULL, NULL, 'alessandro.gallina@edu.itspiemonte.it'),
(18, 'MARCO', 'ANTONINO', NULL, NULL, 'marco.antonino@edu.itspiemonte.it'),
(19, 'ANDREA', 'SCAVUZZO', NULL, NULL, 'andrea.scavuzzo@edu.itspiemonte.it'),
(20, 'THOMAS', 'OWENS', NULL, NULL, 'thomas.owens@edu.itspiemonte.it'),
(21, 'ALESSANDRO', 'FLERES', NULL, NULL, 'alessandro.fleres@edu.itspiemonte.it'),
(22, 'DANILO', 'CAPPELLINO', NULL, NULL, 'danilo.cappellino@edu.itspiemonte.it'),
(23, 'VINCENZO', 'DI DOMENICO', NULL, NULL, 'vincenzo.didomenico@edu.itspiemonte.it'),
(24, 'EDOARDO', 'ELIA', NULL, NULL, 'edoardo.elia@edu.itspiemonte.it'),
(25, 'SIMONE', 'VOLPE', NULL, NULL, 'simone.volpe@edu.itspiemonte.it'),
(26, 'MATTIA', 'VICENZI', NULL, NULL, 'mattia.vicenzi@edu.itspiemonte.it'),
(27, 'MARCO', 'PANZANARO', NULL, NULL, 'marco.panzanaro@edu.itspiemonte.it'),
(28, 'RICCARDO', 'GABOSSI', NULL, NULL, 'riccardo.gabossi@edu.itspiemonte.it'),
(29, 'VLADIMIR', 'VIBIO', NULL, NULL, 'vladimir.vibio@edu.itspiemonte.it'),
(30, 'GIORGIO', 'MASERAZZO', NULL, NULL, 'giorgio.maserazzo@edu.itspiemonte.it'),
(31, 'STEFANO', 'SCICOLONE', NULL, NULL, 'stefano.scicolone@edu.itspiemonte.it'),
(32, 'DAVIDE', 'COLANGELO', NULL, NULL, 'davide.colangelo@edu.itspiemonte.it'),
(33, 'FABRIZIO', 'DE CICCO', NULL, NULL, 'fabrizio.decicco@edu.itspiemonte.it'),
(34, 'SIMONE', 'RORATO', NULL, NULL, 'simone.rorato@edu.itspiemonte.it'),
(35, 'LORENZO', 'SCARPA', NULL, NULL, 'lorenzo.scarpa@edu.itspiemonte.it'),
(36, 'SIMONE', 'FUOCO', NULL, NULL, 'simone.fuoco@edu.itspiemonte.it'),
(37, 'ALESSANDRO', 'VIOTTI', NULL, NULL, 'alessandro.viotti@edu.itspiemonte.it'),
(38, 'ROSA', 'BUONO', NULL, NULL, 'rosa.buono@edu.itspiemonte.it'),
(39, 'STEFANO', 'ADAMO', NULL, NULL, 'stefano.adamo@edu.itspiemonte.it'),
(40, 'TONY', 'FAVA', NULL, NULL, 'tony.fava@edu.itspiemonte.it'),
(41, 'FRANCESCO', 'TALOMO', NULL, NULL, 'francesco.talomo@edu.itspiemonte.it'),
(42, 'LUIGI', 'BOTTASSO', NULL, NULL, 'luigi.bottasso@edu.itspiemonte.it'),
(43, 'MARCO', 'DE GENNARO', NULL, NULL, 'marco.degennaro@edu.itspiemonte.it'),
(44, 'EMANUELE', 'GALLINA', NULL, NULL, 'alessandro.gallina@edu.itspiemonte.it'),
(45, 'MARCO', 'ANTONINO', NULL, NULL, 'marco.antonino@edu.itspiemonte.it'),
(46, 'ANDREA', 'SCAVUZZO', NULL, NULL, 'andrea.scavuzzo@edu.itspiemonte.it'),
(47, 'THOMAS', 'OWENS', NULL, NULL, 'thomas.owens@edu.itspiemonte.it'),
(48, 'ALESSANDRO', 'FLERES', NULL, NULL, 'alessandro.fleres@edu.itspiemonte.it'),
(49, 'DANILO', 'CAPPELLINO', NULL, NULL, 'danilo.cappellino@edu.itspiemonte.it'),
(50, 'VINCENZO', 'DI DOMENICO', NULL, NULL, 'vincenzo.didomenico@edu.itspiemonte.it'),
(51, 'EDOARDO', 'ELIA', NULL, NULL, 'edoardo.elia@edu.itspiemonte.it'),
(52, 'SIMONE', 'VOLPE', NULL, NULL, 'simone.volpe@edu.itspiemonte.it'),
(53, 'MATTIA', 'VICENZI', NULL, NULL, 'mattia.vicenzi@edu.itspiemonte.it'),
(54, 'MARCO', 'PANZANARO', NULL, NULL, 'marco.panzanaro@edu.itspiemonte.it'),
(55, 'RICCARDO', 'GABOSSI', NULL, NULL, 'riccardo.gabossi@edu.itspiemonte.it'),
(56, 'VLADIMIR', 'VIBIO', NULL, NULL, 'vladimir.vibio@edu.itspiemonte.it'),
(57, 'GIORGIO', 'MASERAZZO', NULL, NULL, 'giorgio.maserazzo@edu.itspiemonte.it'),
(58, 'STEFANO', 'SCICOLONE', NULL, NULL, 'stefano.scicolone@edu.itspiemonte.it'),
(59, 'DAVIDE', 'COLANGELO', NULL, NULL, 'davide.colangelo@edu.itspiemonte.it'),
(60, 'FABRIZIO', 'DE CICCO', NULL, NULL, 'fabrizio.decicco@edu.itspiemonte.it'),
(61, 'SIMONE', 'RORATO', NULL, NULL, 'simone.rorato@edu.itspiemonte.it'),
(62, 'LORENZO', 'SCARPA', NULL, NULL, 'lorenzo.scarpa@edu.itspiemonte.it'),
(63, 'SIMONE', 'FUOCO', NULL, NULL, 'simone.fuoco@edu.itspiemonte.it'),
(64, 'ALESSANDRO', 'VIOTTI', NULL, NULL, 'alessandro.viotti@edu.itspiemonte.it'),
(65, 'ROSA', 'BUONO', NULL, NULL, 'rosa.buono@edu.itspiemonte.it'),
(66, 'STEFANO', 'ADAMO', NULL, NULL, 'stefano.adamo@edu.itspiemonte.it'),
(67, 'TONY', 'FAVA', NULL, NULL, 'tony.fava@edu.itspiemonte.it'),
(68, 'FRANCESCO', 'TALOMO', NULL, NULL, 'francesco.talomo@edu.itspiemonte.it'),
(69, 'LUIGI', 'BOTTASSO', NULL, NULL, 'luigi.bottasso@edu.itspiemonte.it'),
(70, 'MARCO', 'DE GENNARO', NULL, NULL, 'marco.degennaro@edu.itspiemonte.it'),
(71, 'EMANUELE', 'GALLINA', NULL, NULL, 'alessandro.gallina@edu.itspiemonte.it'),
(72, 'MARCO', 'ANTONINO', NULL, NULL, 'marco.antonino@edu.itspiemonte.it'),
(73, 'ANDREA', 'SCAVUZZO', NULL, NULL, 'andrea.scavuzzo@edu.itspiemonte.it'),
(74, 'THOMAS', 'OWENS', NULL, NULL, 'thomas.owens@edu.itspiemonte.it'),
(75, 'ALESSANDRO', 'FLERES', NULL, NULL, 'alessandro.fleres@edu.itspiemonte.it'),
(76, 'DANILO', 'CAPPELLINO', NULL, NULL, 'danilo.cappellino@edu.itspiemonte.it'),
(77, 'VINCENZO', 'DI DOMENICO', NULL, NULL, 'vincenzo.didomenico@edu.itspiemonte.it'),
(78, 'EDOARDO', 'ELIA', NULL, NULL, 'edoardo.elia@edu.itspiemonte.it'),
(79, 'SIMONE', 'VOLPE', NULL, NULL, 'simone.volpe@edu.itspiemonte.it'),
(80, 'MATTIA', 'VICENZI', NULL, NULL, 'mattia.vicenzi@edu.itspiemonte.it'),
(81, 'MARCO', 'PANZANARO', NULL, NULL, 'marco.panzanaro@edu.itspiemonte.it'),
(82, 'RICCARDO', 'GABOSSI', NULL, NULL, 'riccardo.gabossi@edu.itspiemonte.it'),
(83, 'VLADIMIR', 'VIBIO', NULL, NULL, 'vladimir.vibio@edu.itspiemonte.it'),
(84, 'GIORGIO', 'MASERAZZO', NULL, NULL, 'giorgio.maserazzo@edu.itspiemonte.it'),
(85, 'STEFANO', 'SCICOLONE', NULL, NULL, 'stefano.scicolone@edu.itspiemonte.it'),
(86, 'DAVIDE', 'COLANGELO', NULL, NULL, 'davide.colangelo@edu.itspiemonte.it'),
(87, 'FABRIZIO', 'DE CICCO', NULL, NULL, 'fabrizio.decicco@edu.itspiemonte.it'),
(88, 'SIMONE', 'RORATO', NULL, NULL, 'simone.rorato@edu.itspiemonte.it'),
(89, 'LORENZO', 'SCARPA', NULL, NULL, 'lorenzo.scarpa@edu.itspiemonte.it'),
(90, 'SIMONE', 'FUOCO', NULL, NULL, 'simone.fuoco@edu.itspiemonte.it'),
(91, 'ALESSANDRO', 'VIOTTI', NULL, NULL, 'alessandro.viotti@edu.itspiemonte.it'),
(92, 'ROSA', 'BUONO', NULL, NULL, 'rosa.buono@edu.itspiemonte.it'),
(93, 'STEFANO', 'ADAMO', NULL, NULL, 'stefano.adamo@edu.itspiemonte.it'),
(94, 'TONY', 'FAVA', NULL, NULL, 'tony.fava@edu.itspiemonte.it'),
(95, 'FRANCESCO', 'TALOMO', NULL, NULL, 'francesco.talomo@edu.itspiemonte.it'),
(96, 'LUIGI', 'BOTTASSO', NULL, NULL, 'luigi.bottasso@edu.itspiemonte.it'),
(97, 'MARCO', 'DE GENNARO', NULL, NULL, 'marco.degennaro@edu.itspiemonte.it'),
(98, 'EMANUELE', 'GALLINA', NULL, NULL, 'alessandro.gallina@edu.itspiemonte.it'),
(99, 'MARCO', 'ANTONINO', NULL, NULL, 'marco.antonino@edu.itspiemonte.it'),
(100, 'ANDREA', 'SCAVUZZO', NULL, NULL, 'andrea.scavuzzo@edu.itspiemonte.it'),
(101, 'THOMAS', 'OWENS', NULL, NULL, 'thomas.owens@edu.itspiemonte.it'),
(102, 'ALESSANDRO', 'FLERES', NULL, NULL, 'alessandro.fleres@edu.itspiemonte.it'),
(103, 'DANILO', 'CAPPELLINO', NULL, NULL, 'danilo.cappellino@edu.itspiemonte.it'),
(104, 'VINCENZO', 'DI DOMENICO', NULL, NULL, 'vincenzo.didomenico@edu.itspiemonte.it'),
(105, 'EDOARDO', 'ELIA', NULL, NULL, 'edoardo.elia@edu.itspiemonte.it'),
(106, 'SIMONE', 'VOLPE', NULL, NULL, 'simone.volpe@edu.itspiemonte.it'),
(107, 'MATTIA', 'VICENZI', NULL, NULL, 'mattia.vicenzi@edu.itspiemonte.it'),
(108, 'MARCO', 'PANZANARO', NULL, NULL, 'marco.panzanaro@edu.itspiemonte.it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_categoria`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
