-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2017 a las 21:44:14
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_taller_simu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo3`
--

CREATE TABLE `modelo3` (
  `pregunta1` varchar(30) NOT NULL,
  `pregunta2` varchar(10) NOT NULL,
  `pregunta3` int(11) NOT NULL,
  `pregunta4` date NOT NULL,
  `pregunta5` varchar(25) NOT NULL,
  `pregunta6` int(11) NOT NULL,
  `pregunta7` int(11) NOT NULL,
  `pregunta8` varchar(20) NOT NULL,
  `pregunta9` varchar(25) NOT NULL,
  `pregunta10` varchar(30) NOT NULL,
  `pregunta11` int(11) NOT NULL,
  `pregunta12` int(11) NOT NULL,
  `pregunta13` int(11) NOT NULL,
  `pregunta14` int(11) NOT NULL,
  `pregunta15` text NOT NULL,
  `pregunta16` text NOT NULL,
  `pregunta17` int(11) NOT NULL,
  `pregunta18` int(11) NOT NULL,
  `pregunta19` int(11) NOT NULL,
  `pregunta20` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
