-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 02:04:37
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
(1, 1, 2800, 2800, 2800, 2800, 2800, 2800, 2800, 2800, 2800, 2800, 2800, 2800, NULL, '2019-01-07 03:38:08'),
(3, 2, 3000, 3000, 3500, 3200, 3200, 3600, 3200, 3200, 3300, 3200, 3400, 2900, NULL, '2018-12-30 09:17:11'),
(4, 3, 3200, 3400, 3500, 3700, 3500, 3800, 3800, 3700, 3600, 3700, 3800, 3400, NULL, '2018-12-30 10:03:59'),
(7, 6, 1300, 1200, 1300, 1400, 1400, 1400, 1400, 1300, 1300, 1400, 1500, 1200, '2018-12-21 07:37:01', '2018-12-30 10:07:36'),
(8, 7, 4000, 4500, 4500, 4000, 4000, 4000, 3900, 4500, 4700, 4600, 4800, 3600, '2018-12-21 07:37:05', '2018-12-30 10:08:22'),
(9, 4, 850, 870, 870, 890, 900, 900, 900, 900, 910, 900, 910, 880, NULL, '2018-12-30 10:05:37'),
(10, 5, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, NULL, '2018-12-30 10:06:37'),
(11, 9, 3300, 3200, 3200, 3200, 3300, 3300, 3400, 3400, 3200, 3200, 3200, 2900, '2018-12-26 20:14:55', '2018-12-30 10:09:50'),
(14, 10, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, '2018-12-29 01:15:19', '2018-12-30 00:28:02'),
(15, 11, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, '2019-01-06 10:32:29', '2019-01-06 10:54:38'),
(16, 12, 2300, 2300, 2300, 2300, 2300, 2300, 2300, 2300, 2300, 2300, 2300, 2300, '2019-01-07 05:02:28', '2019-01-07 05:43:52');

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
(6, 2, 6, '2018-12-21 07:37:01', '2018-12-21 07:37:01'),
(7, 4, 7, '2018-12-21 07:37:05', '2018-12-21 07:37:05'),
(10, 2, 9, '2018-12-27 22:14:31', '2018-12-27 22:14:31'),
(16, 2, 4, '2018-12-28 23:57:58', '2018-12-28 23:57:58'),
(20, 4, 5, '2018-12-29 01:16:45', '2018-12-29 01:16:45'),
(24, 4, 11, '2019-01-07 03:48:12', '2019-01-07 03:48:12'),
(25, 8, 12, '2019-01-07 05:02:28', '2019-01-07 05:02:28'),
(26, 8, 10, '2019-01-07 05:37:40', '2019-01-07 05:37:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historicos`
--

CREATE TABLE `historicos` (
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
  `año` year(4) DEFAULT '2018',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historicos`
--

INSERT INTO `historicos` (`id`, `idProducto`, `enero`, `febrero`, `marzo`, `abril`, `mayo`, `junio`, `julio`, `agosto`, `septiembre`, `octubre`, `noviembre`, `diciembre`, `año`, `created_at`, `updated_at`) VALUES
(1, 1, 1400, 2000, 2500, 2300, 3000, 3000, 1600, 2500, 2400, 2700, 2100, 500, 2016, NULL, NULL),
(2, 2, 2800, 2900, 3000, 3200, 3200, 3100, 3200, 2700, 2900, 2900, 2800, 2500, 2016, NULL, NULL),
(3, 3, 2900, 2400, 2500, 2700, 2500, 2500, 2600, 2300, 2000, 2400, 2600, 1900, 2016, NULL, NULL),
(4, 6, 1300, 1500, 1300, 1800, 1400, 1500, 1500, 1200, 1300, 1400, 1700, 1000, 2016, NULL, NULL),
(5, 7, 5000, 4500, 4500, 5000, 4000, 4000, 3000, 4500, 5000, 4000, 3500, 2000, 2016, NULL, NULL),
(6, 4, 400, 500, 350, 420, 450, 380, 390, 410, 500, 480, 340, 320, 2016, NULL, NULL),
(7, 5, 1400, 1800, 1700, 1700, 1700, 1900, 1900, 1800, 1600, 1900, 1900, 900, 2016, NULL, NULL),
(8, 9, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 3500, 2016, NULL, NULL),
(9, 10, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 2016, NULL, NULL),
(16, 1, 2800, 2700, 2500, 3300, 3100, 3000, 3200, 2800, 3000, 3100, 3400, 2100, 2017, NULL, NULL),
(17, 2, 3000, 3000, 3500, 3200, 3200, 3600, 3200, 3200, 3300, 3200, 3400, 2900, 2017, NULL, NULL),
(18, 3, 3200, 3400, 3500, 3700, 3500, 3800, 3800, 3700, 3600, 3700, 3800, 3400, 2017, NULL, NULL),
(19, 6, 1300, 1200, 1300, 1400, 1400, 1400, 1400, 1300, 1300, 1400, 1500, 1200, 2017, NULL, NULL),
(20, 7, 4000, 4500, 4500, 4000, 4000, 4000, 3900, 4500, 4700, 4600, 4800, 3600, 2017, NULL, NULL),
(21, 4, 850, 870, 870, 890, 900, 900, 900, 900, 910, 900, 910, 880, 2017, NULL, NULL),
(22, 5, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2200, 2017, NULL, NULL),
(23, 9, 3300, 3200, 3200, 3200, 3300, 3300, 3400, 3400, 3200, 3200, 3200, 2900, 2017, NULL, NULL),
(24, 10, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 800, 2017, NULL, NULL),
(25, 11, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 6555, 2017, NULL, NULL);

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
(1, 'Producto 1', 19777, 1, '2019-12-06', 11, '2018-12-21 04:04:43', '2019-01-06 01:24:32'),
(2, 'Producto 2', 49351, 1, '2021-03-06', 26, '2018-12-21 04:04:51', '2018-12-21 04:04:51'),
(3, 'Producto 3', 38081, 1, '2020-12-06', 23, '2018-12-21 04:04:59', '2018-12-21 04:04:59'),
(4, 'Producto 4', 4732, 1, '2019-09-06', 8, '2018-12-21 04:05:05', '2018-12-21 04:05:05'),
(5, 'Producto 5', 31999, 1, '2019-10-06', 9, '2018-12-21 04:05:13', '2018-12-21 04:05:13'),
(6, 'Producto 6', 8099, 1, '2020-05-06', 16, '2018-12-21 07:33:41', '2018-12-21 07:33:41'),
(7, 'Producto 7', 0, 1, '2021-02-06', 25, '2018-12-21 07:36:36', '2018-12-21 07:36:36'),
(9, 'Producto 8', 13412, 1, '2020-07-06', 18, '2018-12-22 05:32:44', '2018-12-28 02:45:10'),
(10, 'Producto 9', 2033, 1, '2022-11-06', 46, '2018-12-28 21:58:50', '2018-12-28 21:58:50'),
(11, 'Producto 10', 42428, 1, '2020-08-31', 19, '2019-01-06 10:24:14', '2019-01-06 10:39:56'),
(12, 'Producto 11', 50713, 1, '2020-02-06', 13, '2019-01-07 05:00:19', '2019-01-07 05:39:27');

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
(1, 'Jaime Berrazueta', 'jaime.berrazueta@udla.edu.ec', '$2y$10$mFT5QB2vgorBGe.Lv9qgBeNJ2TF2VBvfEqhQAPoYZXo63HjN4Kjy.', 99, 'okSEta5v878hGpQTH1wTIh2pZgMpglIiUMneIIgetgBxiNQzhVwoRsQ082Kp', '2018-12-10 09:28:44', '2018-12-10 09:28:44'),
(2, 'Gerente Producto 1', 'gerente.producto@empresa.com', '$2y$10$S6JllzGQtHUlmZ9eZ/Ukz.praPBSPKHAE6gttUr9DUAhTm21FMGQm', 1, 'rE9L6h0eBc99l2kODacRusnMvsg25NPYy1CYqYd3d92mXpmqbnq4psMaww3W', '2018-12-11 01:30:46', '2018-12-11 01:30:46'),
(3, 'Administrativo 1', 'administrativo@empresa.com', '$2y$10$lqzoIHYuLlm1OOQQJ1gajOih4HZEpkD3BeR36BaeOsebNcQ2t6uMK', 2, '1UsgsD1zjefLYO9pX4sJiP5qvNTmPfmlJbWMt05EoxTFn6AtxnZsKqH2Rq5P', '2018-12-11 01:31:29', '2018-12-11 01:31:29'),
(4, 'Gerente Producto 2', 'gerente.producto1@empresa.com', '$2y$10$V/ikpML.lakBA9eGQ0TRE.px/aXY41sMvgER5j8FSRBG6SpcLJip2', 1, 'g4BJHXDrggF9thpzuzHkz3xA99h1oxKl6XQzb4HP4uaxGJ65oQFnwtzXzp16', '2018-12-11 10:01:15', '2018-12-11 10:01:15'),
(6, 'Administrativo 2', 'administrativo1@empresa.com', '$2y$10$kUo3lJsaUWw5aHkY0UtIPeglBAzi0770iRLsiXGdjGlaJiA2cHX5S', 2, 'R2th6aoOqAPrJ3h8c3PGs21mymfmZpc8V2UwhZPNvTL5arQ1qyVR22hSf6o5', '2019-01-06 22:17:55', '2019-01-06 22:17:55'),
(8, 'Gerente Producto 3', 'gerente.producto2@empresa.com', '$2y$10$4q3fRcpZcvUrrdHvQjZjQOwnH6E/qTadfIF62jyWP3QF0XOXrVJga', 1, '8uEvCCap2oTjCtPAchvr3ol2ZaibOYIQd2aBdGlLh4kue41vPXzd5PDgLpjw', '2019-01-07 04:54:26', '2019-01-07 04:54:26');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `gerenteproducto`
--
ALTER TABLE `gerenteproducto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
