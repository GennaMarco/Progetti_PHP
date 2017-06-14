-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 05:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `id` int(5) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cognome` varchar(45) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `skill` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `hobbies` varchar(45) DEFAULT NULL,
  `matricola` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `data`, `email`, `skill`, `foto`, `hobbies`, `matricola`) VALUES
(28, 'RICCARDO', 'GABOSSI', NULL, 'riccardo.gabossi@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(29, 'VLADIMIR', 'VIBIO', NULL, 'vladimir.vibio@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(30, 'GIORGIO', 'MASERAZZO', NULL, 'giorgio.maserazzo@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(31, 'STEFANO', 'SCICOLONE', NULL, 'stefano.scicolone@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(32, 'DAVIDE', 'COLANGELO', NULL, 'davide.colangelo@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(33, 'FABRIZIO', 'DE CICCO', NULL, 'fabrizio.decicco@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(34, 'SIMONE', 'RORATO', NULL, 'simone.rorato@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(35, 'LORENZO', 'SCARPA', NULL, 'lorenzo.scarpa@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(36, 'SIMONE', 'FUOCO', NULL, 'simone.fuoco@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(37, 'ALESSANDRO', 'VIOTTI', NULL, 'alessandro.viotti@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(38, 'ROSA', 'BUONO', NULL, 'rosa.buono@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(39, 'STEFANO', 'ADAMO', NULL, 'stefano.adamo@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(40, 'TONY', 'FAVA', NULL, 'tony.fava@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(41, 'FRANCESCO', 'TALOMO', NULL, 'francesco.talomo@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(42, 'LUIGI', 'BOTTASSO', NULL, 'luigi.bottasso@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(43, 'MARCO', 'DE GENNARO', NULL, 'marco.degennaro@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(44, 'EMANUELE', 'GALLINA', NULL, 'alessandro.gallina@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(45, 'MARCO', 'ANTONINO', NULL, 'marco.antonino@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(46, 'ANDREA', 'SCAVUZZO', NULL, 'andrea.scavuzzo@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(47, 'THOMAS', 'OWENS', NULL, 'thomas.owens@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(48, 'ALESSANDRO', 'FLERES', NULL, 'alessandro.fleres@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(49, 'DANILO', 'CAPPELLINO', NULL, 'danilo.cappellino@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(50, 'VINCENZO', 'DI DOMENICO', NULL, 'vincenzo.didomenico@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(51, 'EDOARDO', 'ELIA', NULL, 'edoardo.elia@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(52, 'SIMONE', 'VOLPE', NULL, 'simone.volpe@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(53, 'MATTIA', 'VICENZI', NULL, 'mattia.vicenzi@edu.itspiemonte.it', NULL, NULL, NULL, NULL),
(54, 'MARCO', 'PANZANARO', NULL, 'marco.panzanaro@edu.itspiemonte.it', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
