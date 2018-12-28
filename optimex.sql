-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2018 a las 05:47:38
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optimex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrategia`
--

CREATE TABLE `estrategia` (
  `id` int(10) UNSIGNED NOT NULL,
  `idProducto` int(10) UNSIGNED NOT NULL,
  `enero` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `febrero` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `marzo` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `abril` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `mayo` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `junio` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `julio` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `agosto` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `septiembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `octubre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `noviembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `diciembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estrategia`
--

INSERT INTO `estrategia` (`id`, `idProducto`, `enero`, `febrero`, `marzo`, `abril`, `mayo`, `junio`, `julio`, `agosto`, `septiembre`, `octubre`, `noviembre`, `diciembre`, `created_at`, `updated_at`) VALUES
(1, 1, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, NULL, '2018-12-26 20:20:53'),
(3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(4, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-12-21 07:37:01', '2018-12-21 07:37:01'),
(8, 7, 5000, 4500, 4500, 5000, 4000, 4000, 3000, 4500, 5000, 4000, 3500, 2000, '2018-12-21 07:37:05', '2018-12-22 01:48:02'),
(9, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(10, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL),
(11, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-12-26 20:14:55', '2018-12-26 20:14:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerenteproducto`
--

CREATE TABLE `gerenteproducto` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `idProducto` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gerenteproducto`
--

INSERT INTO `gerenteproducto` (`id`, `idUsuario`, `idProducto`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '2018-12-21 04:05:58', '2018-12-21 04:05:58'),
(3, 4, 1, '2018-12-21 04:06:07', '2018-12-21 04:06:07'),
(4, 4, 3, '2018-12-21 04:06:08', '2018-12-21 04:06:08'),
(5, 4, 5, '2018-12-21 04:06:10', '2018-12-21 04:06:10'),
(6, 2, 6, '2018-12-21 07:37:01', '2018-12-21 07:37:01'),
(7, 4, 7, '2018-12-21 07:37:05', '2018-12-21 07:37:05'),
(10, 2, 9, '2018-12-27 22:14:31', '2018-12-27 22:14:31'),
(11, 2, 4, '2018-12-27 22:15:35', '2018-12-27 22:15:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicos`
--

CREATE TABLE `historicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `idProducto` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `enero` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `febrero` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `marzo` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `abril` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `mayo` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `junio` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `julio` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `agosto` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `septiembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `octubre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `noviembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `diciembre` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `año` int(11) UNSIGNED NOT NULL DEFAULT '2018',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2018_12_10_043129_create_producto_table', 1),
(13, '2018_12_10_043304_create_relacionar_table', 1),
(16, '2018_12_20_211749_estrategia', 2),
(17, '2018_12_20_211822_historicos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Disparadores `password_resets`
--
DELIMITER $$
CREATE TRIGGER `llenar_cobertura` AFTER UPDATE ON `password_resets` FOR EACH ROW BEGIN

   UPDATE producto JOIN
       (Select id, TIMESTAMPDIFF(MONTH, curdate(), p.fechaCaducidad) as meses FROM producto p
       ) prod 
       ON producto.id = prod.id
    SET producto.cobertura = prod.meses;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `estado` int(11) NOT NULL DEFAULT '0',
  `fechaCaducidad` date NOT NULL DEFAULT '2019-12-06',
  `cobertura` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `stock`, `estado`, `fechaCaducidad`, `cobertura`, `created_at`, `updated_at`) VALUES
(1, 'Producto 1', 80777, 1, '2019-12-06', 11, '2018-12-21 04:04:43', '2018-12-21 04:04:43'),
(2, 'Producto 2', 26809, 1, '2021-03-06', 26, '2018-12-21 04:04:51', '2018-12-21 04:04:51'),
(3, 'Producto 3', 34755, 1, '2020-12-06', 23, '2018-12-21 04:04:59', '2018-12-21 04:04:59'),
(4, 'Producto 4', 20352, 1, '2019-09-06', 8, '2018-12-21 04:05:05', '2018-12-21 04:05:05'),
(5, 'Producto 5', 78599, 1, '2019-10-06', 9, '2018-12-21 04:05:13', '2018-12-21 04:05:13'),
(6, 'Producto 6', 41099, 1, '2020-05-06', 16, '2018-12-21 07:33:41', '2018-12-21 07:33:41'),
(7, 'Producto 7', 98407, 1, '2021-02-06', 25, '2018-12-21 07:36:36', '2018-12-21 07:36:36'),
(9, 'Producto 8', 94212, 1, '2020-07-06', 18, '2018-12-22 05:32:44', '2018-12-28 02:45:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jaime Berrazueta', 'jaime.berrazueta@udla.edu.ec', '$2y$10$mFT5QB2vgorBGe.Lv9qgBeNJ2TF2VBvfEqhQAPoYZXo63HjN4Kjy.', 99, 'GcdSERrVBq7vQAgmMuWLi4o5FRMldVcAbd7pNgptFymSUcHMNFiy3H31rtOM', '2018-12-10 09:28:44', '2018-12-10 09:28:44'),
(2, 'Gerente Producto 1', 'gerente.producto@empresa.com', '$2y$10$S6JllzGQtHUlmZ9eZ/Ukz.praPBSPKHAE6gttUr9DUAhTm21FMGQm', 1, 'IvmJu0rKvdq6GKPUnJvdm3vO7txBTB0axoAIdE57NRXPoLpldKMYjz6KVzXb', '2018-12-11 01:30:46', '2018-12-11 01:30:46'),
(3, 'Administrativo 1', 'administrativo@empresa.com', '$2y$10$lqzoIHYuLlm1OOQQJ1gajOih4HZEpkD3BeR36BaeOsebNcQ2t6uMK', 2, 'AyodHFeO74mCMw8TXVWLo9DpI34O9JZM8LsT9luVju3uM1DWAi9Fi1oiB2ly', '2018-12-11 01:31:29', '2018-12-11 01:31:29'),
(4, 'Gerente Producto 2', 'gerente.producto1@empresa.com', '$2y$10$V/ikpML.lakBA9eGQ0TRE.px/aXY41sMvgER5j8FSRBG6SpcLJip2', 1, '5v3TpNQgHRVAilLao3UBKTLfDRTEdq9pwBANM8J0AXFnneBQ4KWpczS8k8Xt', '2018-12-11 10:01:15', '2018-12-11 10:01:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estrategia`
--
ALTER TABLE `estrategia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estrategia_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `gerenteproducto`
--
ALTER TABLE `gerenteproducto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gerenteproducto_idusuario_foreign` (`idUsuario`),
  ADD KEY `gerenteproducto_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estrategia`
--
ALTER TABLE `estrategia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `gerenteproducto`
--
ALTER TABLE `gerenteproducto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estrategia`
--
ALTER TABLE `estrategia`
  ADD CONSTRAINT `estrategia_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gerenteproducto`
--
ALTER TABLE `gerenteproducto`
  ADD CONSTRAINT `gerenteproducto_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gerenteproducto_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
