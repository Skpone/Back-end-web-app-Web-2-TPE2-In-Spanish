-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 20:22:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_foods`
--
CREATE DATABASE IF NOT EXISTS `db_foods` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_foods`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `id_product_fk` int(11) NOT NULL,
  `id_user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `comment`, `score`, `id_product_fk`, `id_user_fk`) VALUES
(5, 'no me gusto', 1, 2, 4),
(7, 'si a mi tambien', 5, 2, 3),
(10, 'g8yu', 2, 1, 3),
(11, 'ola', 2, 2, 3),
(13, 'varria', 3, 2, 3),
(15, 'adgsyu', 3, 2, 4),
(16, 'me gusta los ramones', 4, 2, 3),
(282, 'no me gusto esta mal D:(', 2, 10, 3),
(283, 'muy buenas', 5, 10, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `product` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `country` varchar(20) NOT NULL,
  `ingredients` varchar(400) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `product`, `type`, `country`, `ingredients`, `price`) VALUES
(1, 'calzonne', 'clásico', 'italia', 'varios', '5465'),
(2, 'pizza', 'romana', 'italia', 'varios', '7777'),
(3, 'hot pot', 'clasico', 'china', 'cjasokdsak', '1234'),
(10, 'empanada', 'tucumana', 'argentina', 'carne picada, etc.', '300');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(3, 'admin@demo.com', '$2y$10$clHZveLjJUkSB52Wkcjp3ebMYCpZjd2BbnbRi9GeTCAHU64CNW91y', 1),
(4, 'user@demo.com', '$2y$10$2UCP9wlN8LIuZxswDjJxqufU8IVxSCdn8pUY69JVvAdV/pPAgWRYy', 0),
(6, 'random@random.com', '$2y$10$XgD91plkCPiHdSOB5sY9cOGVEU2654RS4dmgqyBk5MyebG/PhrO3m', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_products_fk` (`id_product_fk`),
  ADD KEY `id_users_fk` (`id_user_fk`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
