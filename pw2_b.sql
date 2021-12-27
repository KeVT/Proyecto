-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2021 a las 18:03:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pw2_b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Código del producto.',
  `area` varchar(255) NOT NULL COMMENT 'Área del producto.',
  `name` varchar(255) NOT NULL COMMENT 'Nombre del producto.',
  `description` text DEFAULT NULL COMMENT 'Descripción del producto.',
  `price` float DEFAULT NULL COMMENT 'Precio del producto.',
  `stock` int(11) DEFAULT NULL COMMENT 'Cantidad de existencias del producto.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla verificaremos el área, nombre, descripción, precio y existencias de los productos.';

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `area`, `name`, `description`, `price`, `stock`) VALUES
(3, 'Linea Blanca', 'Cocina BOSCH', 'Cocina a gas BOSCH 5 quemadores PRO547 Plateado', 2299, 10),
(4, 'Linea Blanca', 'Cocina Indurama', 'Cocina a Gas Indurama Parma 6 Hornillas', 1549, 7),
(5, 'Linea Blanca', 'Cocina MABE', 'Cocina a Gas MABE EMP7620SX0 6 HORNILLAS\r\n\r\n', 1199, 15),
(6, 'Linea Blanca', 'Refrigeradora Samsung', 'Refrigeradora RS27T5561B1/PE 685L - NEGRO\r\n\r\n', 7299, 5),
(7, 'Linea Blanca', 'Refrigeradora LG', 'Refrigeradora LG French Door con Puerta Mágica 426 LT LM57SDT Negra Mate', 6199, 8),
(8, 'Linea Blanca', 'Refrigeradora BOSCH', 'BOSCH Refrigerador no frost KDD30NL201 318L', 1949, 11),
(9, 'Linea Blanca', 'Lavadora LG', 'Lavadora Digital TS1700DPSB 17 kg\r\n\r\n', 2299, 15),
(11, 'Linea Blanca', 'Lavadora Samsung', 'Lavadora Samsung 17kg WA17F7L6DDB/PE - Gris', 1629, 20),
(12, 'Linea Blanca', 'Lavaseca LG', 'Lavaseca LG carga frontal con AI DD Inteligencia Artificial WD12BVC2S6C 12/7 KG - NEGRO ACERO (BLACK STEEL)', 2499, 6),
(13, 'Audio', 'Equipo de Sonido SONY', 'SONY Equipo de Sonido DVD Karaoke HCDSHAKEX10. Que empiece la fiesta', 1999, 18),
(14, 'Audio', 'Equipo de Sonido SONY', 'Equipo de Sonido Sony MHC-V73D Bluetooth Karaoke HDMI', 2199, 25),
(15, 'Audio', 'Minicomponente LG', 'LG Minicomponente XBOOM CL88 2900W\r\n\r\n', 1549, 13),
(16, 'Audio', 'Equipo de Sonido Panasonic', 'Panasonic Equipo de Sonido SC-MAX6500 4000W', 2349, 9),
(17, 'Audio', 'Minicomponente SONY', 'Mini Componente Sony Modelo HCDSHAKEX30MLA9', 2199, 17),
(18, 'Audio', 'Equipo de Sonido SONY', 'Equipo de Sonido V82D Bluetooth Karaoke HDMI', 1499, 5),
(19, 'Televisores', 'Smart TV PHILIPS', 'TELEVISOR PHILIPS LED FULL HD 43\" SMART TV 43PFD6825', 1499, 5),
(20, 'Televisores', 'Smart TV SONY', 'Televisor inteligente de 40 pulgadas LED, FHD de 1080P (modelo 2019) : Electrónica', 1199, 14),
(22, 'Televisores', 'Smart TV LG', 'LG UHD 65\" SMART TV AI 65UM7400\r\n\r\n', 3199, 10),
(23, 'Televisores', 'QLED Samsung', 'Televisor Samsung Smart TV 65\"QLED 4K Q7OA 2021', 6199, 4),
(24, 'Televisores', 'QLED Samsung', 'Televisor Samsung Smart Tv 50\" Q60A QLED 4K 2021\r\n\r\n', 5199, 7),
(25, 'Televisores', 'QLED Samsung', 'TELEVISOR SAMSUNG NEO QLED 4K ULTRA HD 75\" SMART TV QN75QN85AAGXPE', 9999, 3),
(26, 'Televisores', 'OLED LG', 'TELEVISOR LG OLED 4K ULTRA HD 55\" SMART TV OLED55A1PSA (2021)', 4099, 8),
(27, 'Televisores', 'OLED LG', 'TELEVISOR LG OLED 4K ULTRA HD 65\" SMART TV OLED65C1PSA (2021)\r\n\r\n', 7499, 6),
(28, 'Televisores', 'OLED SONY', 'TV SONY 65\" Pulgadas 163 cm 65A8F4KIn 4K-UHD OLED Plano Sm', 8499, 2),
(31, 'Televisores', 'Smart TV LG', 'Esta es una smart tv', 3000, 10),
(34, 'Televisores', 'RADIOSHACK', 'qw', 2354, 58),
(35, 'Linea Blanca', 'Lavadora Samsung', 'lavadora ', 2500, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'Código del usuario.',
  `first_name` varchar(255) NOT NULL COMMENT 'Nombre del usuario.',
  `last_name` varchar(255) NOT NULL COMMENT 'Apellido del usuario.',
  `gender` varchar(255) NOT NULL COMMENT 'Género del usuario.',
  `date_birth` date DEFAULT NULL COMMENT 'Fecha de nacimiento del usuario.',
  `phone_number` int(11) NOT NULL COMMENT 'Número telefónico del usuario.',
  `username` varchar(255) NOT NULL COMMENT 'Apodo del usuario.',
  `email` varchar(255) NOT NULL COMMENT 'Correo electrónico del usuario.',
  `password` varchar(255) NOT NULL COMMENT 'Contraseña del usuario.',
  `created` datetime DEFAULT NULL COMMENT 'Fecha de creación de la cuenta del usuario.',
  `role` varchar(255) DEFAULT NULL COMMENT 'Rol que ocupa el usuario.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='En esta tabla verificaremos los datos y acciones de nuestros usuarios.';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `date_birth`, `phone_number`, `username`, `email`, `password`, `created`, `role`) VALUES
(18, 'Kevin', 'Tacuri', 'Masculino', '2018-04-16', 970971741, 'KevinT', 'kevintacurim@gmail.com', '$2y$10$015dh.0j3NVBprpf3aOSxeZJ1tZYe5hSV0Zcx6YGde/2IApukwxb6', '2021-12-26 17:32:33', 'admin'),
(19, 'Jean', 'Guzman', 'Masculino', '2016-07-05', 969183232, 'Pierre', 'reyquerpun@hotmail.com', '$2y$10$p34Wzi.hNaGdQqtmIaNJG.SzXX4keRGtjMZYhaaT1ybYj2GMY8.LK', '2021-12-26 17:35:29', 'customer'),
(25, 'Anthony', 'Vera', 'Masculino', '2019-06-19', 958945687, 'Tony', 'KeV_Anthony@outlook.com', '$2y$10$9wtk5k9V1u3.qqcDdhcMmeAJOmYRFkSselNKepGeqCwTs5xycEmb6', '2021-12-27 04:10:45', 'pw2'),
(26, 'Ana', 'Guzman', 'Femenino', '2018-04-18', 123456789, 'Anita', 'ana_123@gmail.com', '$2y$10$kscSu9.4Hm2mpKnF6Qz87.CjuNYMtaCAb2gmxa4MuQFdLUiE.blIy', '2021-12-27 04:11:33', 'customer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código del producto.', AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Código del usuario.', AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
