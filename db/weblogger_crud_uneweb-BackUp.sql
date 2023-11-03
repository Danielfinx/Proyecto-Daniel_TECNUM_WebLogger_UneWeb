-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-11-2023 a las 21:37:32
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `weblogger_crud_uneweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sensor` int DEFAULT NULL,
  `value` double DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sensor` (`id_sensor`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`id`, `id_sensor`, `value`, `date`, `time`) VALUES
(1, 1, 26, '2023-10-31', '13:30:00'),
(2, 1, 28, '2023-10-16', '13:31:00'),
(4, 1, 28, '2023-10-30', '13:33:00'),
(5, 1, 26, '2023-09-19', '13:34:00'),
(6, 1, 26.8, '2023-10-24', '13:35:00'),
(7, 2, 26, '2023-10-31', '13:30:00'),
(8, 2, 28, '2023-10-31', '13:31:00'),
(9, 2, 21, '2023-10-31', '13:32:00'),
(10, 2, 32, '2023-10-31', '13:33:00'),
(11, 2, 24, '2023-10-31', '13:34:00'),
(32, 1, 26.5, '2023-09-13', '23:00:05'),
(13, 3, 2, '2023-10-31', '13:30:00'),
(14, 3, 21, '2023-10-16', '13:31:00'),
(15, 3, 29, '2023-10-31', '13:32:00'),
(16, 3, 17, '2023-10-30', '13:33:00'),
(17, 3, 10, '2023-09-19', '13:34:00'),
(18, 3, 30, '2023-10-24', '13:35:00'),
(19, 4, 5, '2023-10-31', '13:30:00'),
(20, 4, 10, '2023-10-16', '13:31:00'),
(21, 4, 21, '2023-10-31', '13:32:00'),
(22, 4, 36, '2023-10-30', '13:33:00'),
(23, 4, 12, '2023-09-19', '13:34:00'),
(24, 4, 17, '2023-10-24', '13:35:00'),
(31, 1, 25, '2023-11-01', '16:30:00'),
(28, 3, 22, '2023-11-01', '21:44:00'),
(29, 2, 20, '2023-10-31', '13:36:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensor`
--

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE IF NOT EXISTS `sensor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parameter_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `abbreviation` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `unit` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `val_max` float DEFAULT NULL,
  `val_min` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sensor`
--

INSERT INTO `sensor` (`id`, `parameter_name`, `abbreviation`, `unit`, `val_max`, `val_min`) VALUES
(1, 'temperatura', 'temp', 'ºC', 50, 0),
(2, 'Segundo', 'Seg', 'ºS', 20, 0),
(3, 'tercero', 'ter', 'ºT', 0, 25),
(4, 'cuarto', 'cuar', 'ºC', 0, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
