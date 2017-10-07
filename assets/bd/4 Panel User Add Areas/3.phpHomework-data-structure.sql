-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-10-2017 a las 13:57:16
-- Versión del servidor: 5.7.19-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpHomework`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `desc_area` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privileges`
--

CREATE TABLE `privileges` (
  `id_priv` int(11) NOT NULL,
  `desc_priv` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `privileges`
--

INSERT INTO `privileges` (`id_priv`, `desc_priv`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(3, 'Tester'),
(4, 'Prueba'),
(5, 'Supervisor'),
(6, 'Registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `desc_task` mediumtext NOT NULL,
  `date_task` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_password_hash` varchar(255) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `id_priv` int(11) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_password_hash`, `user_email`, `name`, `id_priv`, `date_reg`) VALUES
(1, 'klvst3r', '81dc9bdb52d04dc20036dbd8313ed055', 'klvst3r@gmail.com', 'Klvst3r', 1, '2017-09-25 19:59:38'),
(2, 'usuario', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario@gmail.com', 'Registro', 2, '2017-09-09 22:56:17'),
(3, 'Tester', 'ba0826751cd40a5b19189a17571fd619', 'tester@email.com', 'Usuario Tester', 3, '2017-09-25 19:21:38'),
(4, 'Tester', 'd41d8cd98f00b204e9800998ecf8427e', 'tester@email.com', 'Usuario Tester', 3, '2017-09-21 18:32:50'),
(5, 'Invitado', '12edbe7b5787d8079ca02b175962b952', 'invitado@email.com', 'usuario invitado', 6, '2017-09-29 01:10:46'),
(6, 'camilo', '81dc9bdb52d04dc20036dbd8313ed055', 'camilo@email.com', 'Usuario Camilito', 1, '2017-09-29 17:47:25'),
(7, 'Registro', '8eada6ee4ab6f9e38e7d7fce8f26079a', 'Reg@email.com', 'Usuario de Registro', 2, '2017-09-21 23:51:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id_priv`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_priv` (`id_priv`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id_priv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
