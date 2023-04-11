-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2023 a las 15:18:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym_manager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `date_of_birth` date NOT NULL,
  `dni` varchar(9) NOT NULL,
  `image` varchar(500) NOT NULL,
  `uid` varchar(500) NOT NULL,
  `active` bit(1) NOT NULL,
  `notes` text DEFAULT NULL,
  `role` enum('user','member','admin','chief') NOT NULL DEFAULT 'user',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `phone_number`, `gender`, `date_of_birth`, `dni`, `image`, `uid`, `active`, `notes`, `role`, `register_date`) VALUES
(10, 'Juan', 'Lopez Espinosa', 'juan1', 'juanlopezespinosa2002@gmail.com', '$2y$10$/xcAyYgjcoDmttXM9NtjguLOrp5085fppsBwn.mjSjFl3JdjMzkzK', '654267197', 'Male', '2002-05-30', '06330088M', '', '48a82ac12d5266d779899e4978d9796d2f0f758a0a80977662306537fd83400b0046b559', b'0', NULL, 'chief', '2023-04-09 15:31:24'),
(11, 'Juan', 'Lopez Espinosa', 'jlopeze24', 'juanlopezespinosa2003@gmail.com', '$2y$10$Uc28B2yHAPcjetHOunMmFeTK.vjcQQEj74s2D4IQGa39sQDtRRI8u', '654267197', 'Male', '2023-04-04', '1234567L', '', '3bb97876a267d4c661a87cb5978f06d9974f54b3bdaef7afd1d5196ba755373a56bd25a4', b'0', NULL, 'member', '2023-04-09 15:31:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
