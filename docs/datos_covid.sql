-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 20:01:04
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_covid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_cordoba`
--

CREATE TABLE `data_cordoba` (
  `id_de_caso` int(11) NOT NULL,
  `fecha_de_notificaci_n` text NOT NULL,
  `c_digo_divipola` text NOT NULL,
  `ciudad_de_ubicaci_n` text NOT NULL,
  `departamento` text NOT NULL,
  `atenci_n` text NOT NULL,
  `edad` text NOT NULL,
  `sexo` text NOT NULL,
  `tipo` text NOT NULL,
  `estado` text NOT NULL,
  `pa_s_de_procedencia` text NOT NULL,
  `fis` text NOT NULL,
  `fecha_de_muerte` text NOT NULL,
  `fecha_diagnostico` text NOT NULL,
  `fecha_recuperado` text NOT NULL,
  `fecha_reporte_web` text NOT NULL,
  `tipo_recuperaci_n` text NOT NULL,
  `codigo_departamento` int(11) NOT NULL,
  `codigo_pais` int(11) NOT NULL,
  `pertenencia_etnica` text NOT NULL,
  `nombre_grupo_etnico` text NOT NULL,
  `ubicaci_n_recuperado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_cordoba`
--
ALTER TABLE `data_cordoba`
  ADD PRIMARY KEY (`id_de_caso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
