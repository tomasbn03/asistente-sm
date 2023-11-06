-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctrl_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `psicologos`
--

CREATE TABLE `psicologos` (
  `id_psicol` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `cita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psicologos`
--

INSERT INTO `psicologos` (`id_psicol`, `nombre`, `apellido`, `correo`, `telefono`, `cita`) VALUES
(1, 'Alejandro', 'Serrano', 'alejandro.serrano@email.com', '1234567890', 'La mente es como un paracaídas, solo funciona si se abre.'),
(2, 'Isabela', 'Márquez', 'isabela.marquez@email.com', '1234567891', 'La comprensión es el primer paso hacia la aceptación, y solo con la aceptación puede haber recuperación.'),
(3, 'Carlos', 'Gutiérrez', 'carlos.gutierrez@email.com', '1234567892', 'La felicidad no es algo hecho. Proviene de tus propias acciones.'),
(4, 'Laura', 'Jiménez', 'laura.jimenez@email.com', '1234567893', 'No somos lo que pensamos, sino lo que creemos que podemos ser.'),
(5, 'Roberto', 'Álvarez', 'roberto.alvarez@email.com', '1234567894', 'Cada día de nuestra vida hacemos depósitos en los bancos de memoria de nuestros hijos.'),
(6, 'Camila', 'Fernández', 'camila.fernandez@email.com', '1234567895', 'La mente es como un libro; escrita en capítulos, contando historias de vida.'),
(7, 'Santiago', 'Ramírez', 'santiago.ramirez@email.com', '1234567896', 'El cambio es el final resultante de todo verdadero aprendizaje.'),
(8, 'Gabriela', 'Vázquez', 'gabriela.vazquez@email.com', '1234567897', 'El autoconocimiento nos lleva a la autotransformación.'),
(9, 'Enrique', 'Lozano', 'enrique.lozano@email.com', '1234567898', 'En el juego de la vida, la mente es nuestro campo de entrenamiento.'),
(10, 'Valeria', 'Torres', 'valeria.torres@email.com', '1234567899', 'El diálogo interno que mantenemos moldea nuestra percepción del mundo.');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `correo` varchar(400) NOT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `correo`, `contrasenia`, `telefono`) VALUES
(19, 'Angel Martinez', 'angelm', 'angelm@gmail.com', '2003', '79322840'),
(20, 'Enrique Bonilla', 'tomasbnll', 'tomas@gmail.com', 'root', '76576555'),
(21, 'Jordan', 'Jordan1', 'jordan.molina22@itca.edu.sv', '12345', '76654114'),
(23, 'Cristiano Ronaldo', 'cr7', 'elbicho@cr7.com', 'siu', '60655786'),
(24, 'Leonel Andrés', 'messi', 'leomessi@adidas.org', 'goat', '60005090'),
(27, 'Juan Hernandez', 'jhernandez', 'jhernandez@gmail.com', 'games', '78876541'),
(28, 'Fernando Páz', 'ferpz', 'fernandopz@gmail.com', 'secreto', '60009909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
