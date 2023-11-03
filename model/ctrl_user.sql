-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 03:25 AM
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
  `telefono` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psicologos`
--

INSERT INTO `psicologos` (`id_psicol`, `nombre`, `apellido`, `correo`, `telefono`) VALUES
(1, 'Ana', 'Morales', 'ana.morales@example.com', '+503700112233'),
(2, 'Carlos', 'Quintanilla', 'carlos.quintanilla@example.com', '+503700223344'),
(3, 'Luisa', 'Martínez', 'luisa.martinez@example.com', '+503700334455'),
(4, 'Mario', 'Ramírez', 'mario.ramirez@example.com', '+503700445566'),
(5, 'Patricia', 'Hernández', 'patricia.hernandez@example.com', '+503700556677'),
(6, 'Jorge', 'González', 'jorge.gonzalez@example.com', '+503700667788'),
(7, 'Carmen', 'Reyes', 'carmen.reyes@example.com', '+503700778899'),
(8, 'Oscar', 'Navarro', 'oscar.navarro@example.com', '+503700889900'),
(9, 'Sofía', 'López', 'sofia.lopez@example.com', '+503700990011'),
(10, 'Ricardo', 'Mejía', 'ricardo.mejia@example.com', '+503700001122');

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
-- Indexes for table `psicologos`
--
ALTER TABLE `psicologos`
  ADD PRIMARY KEY (`id_psicol`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psicologos`
--
ALTER TABLE `psicologos`
  MODIFY `id_psicol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
