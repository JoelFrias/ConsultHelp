-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2021 a las 16:55:39
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consult help`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id` int(5) NOT NULL,
  `Nombre del paciente` varchar(50) NOT NULL,
  `Email del paciente` varchar(30) NOT NULL,
  `Telefono del paciente` varchar(50) NOT NULL,
  `Fecha_citas` date NOT NULL,
  `Hora_citas` time NOT NULL,
  `Aseguradora` varchar(50) NOT NULL,
  `Detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Id`, `Nombre del paciente`, `Email del paciente`, `Telefono del paciente`, `Fecha_citas`, `Hora_citas`, `Aseguradora`, `Detalles`) VALUES
(1, 'Juancito', 'juancito123@tukiti.com', '8097654321', '2021-03-08', '06:00:00', 'ARS Humano', 'Sin detalles'),
(2, 'Pedro', 'pedro@tukiti.com', '8097654321', '2021-03-08', '07:00:00', 'Senasa', 'Dolor de oído, fiebre'),
(3, 'Esperanza', 'thuesperanzita@gmail.com', '8092349887', '2021-03-09', '06:00:00', '', 'Sinusitis'),
(4, 'Antonia', 'antoniateeplota@hotmail.com', '8092344432', '2021-03-09', '07:00:00', 'Pepin', 'Tos Mucosidad'),
(5, 'Zeneida', 'porsiempreteamare@yahoo.com', '8092700999', '2021-03-09', '07:00:00', 'ARS Universal', 'Enrojecimiento de la piel'),
(11, 'Juancito', 'juancito123@tikiti.com', '8097654321', '2021-03-18', '06:30:00', 'ARS Humano', 'Sin detalles'),
(12, 'Keylor', 'Keylor@mail.com', '8097654321', '2021-03-18', '09:00:00', '', 'Dolor de Cabeza'),
(16, 'Juancito', 'juancito123@tikiti.com', '8097654321', '2021-03-25', '14:16:00', 'ARS Humano', 'Sin detalles'),
(20, 'Felipe', 'Soporte@tukiti.com', '8097434567', '2021-04-09', '21:35:00', 'Celestial', 'Demasiado conectado con la presencia de Dios'),
(21, 'Juancito', 'juancito123@tikiti.com', '8097654321', '2021-04-14', '19:00:00', 'ARS Humano', 'Sin detalles'),
(22, 'Juancito', 'Thuesperanzita@gmail.com', '8492340943', '0000-00-00', '00:00:00', '', 'Congestión nasal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobrarconsultas`
--

CREATE TABLE `cobrarconsultas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Estudios Realizados` text NOT NULL,
  `Seguro Medico` varchar(2) NOT NULL,
  `Total a pagar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cobrarconsultas`
--

INSERT INTO `cobrarconsultas` (`Id`, `Nombre`, `Estudios Realizados`, `Seguro Medico`, `Total a pagar`) VALUES
(1, 'Juancito', ' Chequeo Extra - Terapia', 'si', 3600),
(4, 'Pedro', ' Electrocardiograma - Endoscopia -', 'si', 19560),
(5, 'Esperanza', ' Electrocardiograma - Chequeo Extra -', 'no', 8400),
(6, 'Juancito', ' Electrocardiograma -', 'si', 1560),
(7, 'Zeneida', ' Electrocardiograma - Terapia', 'si', 2160),
(8, 'Felipe', ' Electrocardiograma - Chequeo Extra -', 'no', 8400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Id` int(5) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Padecimientos` text NOT NULL,
  `Detalles` text NOT NULL,
  `Aseguradora` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`Id`, `Nombre`, `Telefono`, `Email`, `Padecimientos`, `Detalles`, `Aseguradora`) VALUES
(1, 'Juancito', '8097654321', 'juancito123@tikiti.com', 'Diabetes', 'Sin detalles', 'ARS Humano'),
(2, 'Pedro', '8097230480', 'pedro@tukiti.com', 'Infección de oído', 'Dolor de oído, fiebre', 'Senasa'),
(3, 'Esperanza', '8492340943', 'Thuesperanzita@gmail.com', 'Sinusitis', 'Congestión nasal', ''),
(4, 'Antonia', '8290933321', 'Antoniateeplota@hotmail.com', 'Bronquitis', 'Tos, mucosidad.', 'Pepin'),
(5, 'Zeneida', '8093434566', 'porsiempreteamare@yahoo.com', 'Infección en la piel', 'enrojecimiento de la piel.', 'ARS Universal'),
(6, 'Guillermo', '8092276754', 'Guillermo@gmail.com', 'Diabetes', 'sin detalles', 'ARS Humano'),
(8, 'Emilio', '8097276431', 'emiliok@yahoo.com', 'artritis', 'Sin detalles', ''),
(9, 'Carmelo Lames', '8098765431', 'elpitolargo@yahoo.com', 'Frankitis', 'Sin detalles', 'ARS LGBT'),
(10, 'Keylor', '8097654321', 'Keylor@mail.com', 'Profesor', 'Pone muchas clases', 'Cristina'),
(11, 'Felipe', '8097434567', 'Soporte@tukiti.com', 'Grandeza', 'Demasiado conectado con la presencia de Dios', 'Celestial'),
(12, 'Gregorio', '8097665689', 'Gregorio@mail.com', 'no tiene', 'esta sano', 'no tiene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'admin@mail.com', '123'),
(2, 'Joel', 'fjoelfrias@mail.com', 'elmorenodewasa'),
(3, 'Secretaria', 'secretaria@mail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cobrarconsultas`
--
ALTER TABLE `cobrarconsultas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `cobrarconsultas`
--
ALTER TABLE `cobrarconsultas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
