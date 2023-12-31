-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2023 a las 02:59:35
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ctrl_user`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologos`
--

CREATE TABLE `psicologos` (
  `id_psicol` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `cita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `psicologos`
--

INSERT INTO `psicologos` (`id_psicol`, `nombre`, `apellido`, `correo`, `telefono`, `cita`) VALUES
(1, 'Alejandro', 'Serrano', 'alejandro.serrano@email.com', '7657-4321', 'La mente es como un paracaídas, solo funciona si se abre.'),
(2, 'Isabela', 'Márquez', 'isabela.marquez@email.com', '6098-5463', 'La comprensión es el primer paso hacia la aceptación, y solo con la aceptación puede haber recuperación.'),
(3, 'Carlos', 'Gutiérrez', 'carlos.gutierrez@email.com', '7651-8654', 'La felicidad no es algo hecho. Proviene de tus propias acciones.'),
(4, 'Laura', 'Jiménez', 'laura.jimenez@email.com', '7345-1245', 'No somos lo que pensamos, sino lo que creemos que podemos ser.'),
(5, 'Roberto', 'Álvarez', 'roberto.alvarez@email.com', '7656-8100', 'Cada día de nuestra vida hacemos depósitos en los bancos de memoria de nuestros hijos.'),
(6, 'Camila', 'Fernández', 'camila.fernandez@email.com', '6106-1580', 'La mente es como un libro; escrita en capítulos, contando historias de vida.'),
(7, 'Santiago', 'Ramírez', 'santiago.ramirez@email.com', '6202-1389', 'El cambio es el final resultante de todo verdadero aprendizaje.'),
(8, 'Gabriela', 'Vázquez', 'gabriela.vazquez@email.com', '7577-1309', 'El autoconocimiento nos lleva a la autotransformación.'),
(9, 'Enrique', 'Lozano', 'enrique.lozano@email.com', '7854-9090', 'En el juego de la vida, la mente es nuestro campo de entrenamiento.'),
(10, 'Valeria', 'Torres', 'valeria.torres@email.com', '7460-6555', 'El diálogo interno que mantenemos moldea nuestra percepción del mundo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `correo` varchar(400) NOT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `contrasenia`, `telefono`, `fecha_nacimiento`, `foto_perfil`) VALUES
(31, 'Jordan Molina', 'Jordaaan', 'jordan.molina22@itca.edu.sv', '212121', '21212828', '2004-07-21', NULL),
(38, 'Freddy Fazbeard', 'fnaf', 'fnaf@oso.com', '$2y$10$70XTCevAjCy28To1ATCx4eYAvuqwJ5qGT3f2kL7FwJoYlGG2Jvjl2', '70708990', '1980-10-11', 'profile38.jpg'),
(40, 'Rosendo Garcia', 'callmerosendo', 'rosendogrc@gmail.com', '$2y$10$yvwNbuWPf14vfbXJMPkwbu/3sLxVE6SUdenkTMkAGUl.R7cM/Lj3i', '70600872', '2002-09-11', 'profile40.png'),
(41, 'Tomas Bonilla', 'tomass', 'tomasbonilla@gmail.com', '$2y$10$Jtn2681tFEloWdhub/XHfOnlyz02vrOs63NvFFZ0KZWfuyu4yFag6', '76576555', '2003-02-15', 'profile41.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
