-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_07_27_230244_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Chocolate', 24, 8, '2025-07-28 20:59:47', '2025-07-28 21:26:11'),
(2, 'Notebook', 5, 10000, '2025-07-28 21:00:58', '2025-07-28 21:00:58'),
(3, 'Violão', 8, 750, '2025-07-28 21:01:13', '2025-07-28 21:01:13'),
(4, 'Caneta', 50, 3, '2025-07-28 21:01:26', '2025-07-28 21:01:26'),
(5, 'Folha A4', 100, 15, '2025-07-28 21:01:51', '2025-07-28 21:01:51'),
(6, 'Camiseta', 30, 45, '2025-07-28 21:10:00', '2025-07-28 21:10:00'),
(7, 'Tênis', 20, 120, '2025-07-28 21:10:10', '2025-07-28 21:10:10'),
(8, 'Garrafa Térmica', 15, 75, '2025-07-28 21:10:20', '2025-07-28 21:10:20'),
(9, 'Fone de Ouvido', 12, 150, '2025-07-28 21:10:30', '2025-07-28 21:10:30'),
(10, 'Livro de Romance', 40, 30, '2025-07-28 21:10:40', '2025-07-28 21:10:40'),
(11, 'Mochila', 18, 220, '2025-07-28 21:10:50', '2025-07-28 21:10:50'),
(12, 'Relógio de Pulso', 10, 350, '2025-07-28 21:11:00', '2025-07-28 21:11:00'),
(13, 'Caderno Espiral', 60, 12, '2025-07-28 21:11:10', '2025-07-28 21:11:10'),
(14, 'Chaveiro', 100, 5, '2025-07-28 21:11:20', '2025-07-28 21:11:20'),
(15, 'Mouse Gamer', 7, 300, '2025-07-28 21:11:30', '2025-07-28 21:11:30'),
(16, 'Teclado Mecânico', 9, 450, '2025-07-28 21:11:40', '2025-07-28 21:11:40'),
(17, 'Bolsa Feminina', 25, 180, '2025-07-28 21:11:50', '2025-07-28 21:11:50'),
(18, 'Caixa de Som Bluetooth', 13, 220, '2025-07-28 21:12:00', '2025-07-28 21:12:00'),
(19, 'Agenda 2026', 50, 18, '2025-07-28 21:12:10', '2025-07-28 21:12:10'),
(20, 'Lâmpada LED', 80, 12, '2025-07-28 21:12:20', '2025-07-28 21:12:20'),
(21, 'Caneca Personalizada', 45, 28, '2025-07-28 21:12:30', '2025-07-28 21:12:30'),
(22, 'Guarda-chuva', 35, 50, '2025-07-28 21:12:40', '2025-07-28 21:12:40'),
(23, 'Óculos de Sol', 15, 160, '2025-07-28 21:12:50', '2025-07-28 21:12:50'),
(24, 'Bola de Futebol', 22, 85, '2025-07-28 21:13:00', '2025-07-28 21:13:00'),
(25, 'Carregador Portátil', 28, 90, '2025-07-28 21:13:10', '2025-07-28 21:13:10'),
(26, 'Bolsa Térmica', 20, 70, '2025-07-28 21:13:20', '2025-07-28 21:13:20'),
(27, 'Tênis Infantil', 18, 95, '2025-07-28 21:13:30', '2025-07-28 21:13:30'),
(28, 'Livro de Culinária', 30, 40, '2025-07-28 21:13:40', '2025-07-28 21:13:40'),
(29, 'Blusa de Frio', 24, 110, '2025-07-28 21:13:50', '2025-07-28 21:13:50'),
(30, 'Capa para Celular', 55, 25, '2025-07-28 21:14:00', '2025-07-28 21:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
