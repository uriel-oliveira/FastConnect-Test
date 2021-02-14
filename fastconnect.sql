-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2021 at 06:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `documento`, `uf`, `municipio`, `cep`, `rua`, `complemento`) VALUES
(1, 'Cliente 1', '(48) 3215-3513', '135.315.684-60', 'SC', 'Florianópolis', '66545-654', 'Rua teste C1', 'Complemento teste C1'),
(2, 'Cliente 2', '(49) 654-3513', '6.545.363', 'SC', 'São José', '65985-524', 'Rua teste C2', 'Complemento teste C2'),
(3, 'Cliente 3', '(48) 6546-6849', '654.3216', 'PR', 'Curitiba', '26895-653', 'Rua teste C3', 'Complemento teste C3'),
(4, 'Cliente 4', '(48) 6546-6849', '654.321612', 'SP', 'São Paulo', '98465-565', 'Rua teste C4', 'Complemento teste C4');

-- --------------------------------------------------------

--
-- Table structure for table `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE IF NOT EXISTS `itens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `codigo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itens`
--

INSERT INTO `itens` (`id`, `cliente_id`, `nome`, `preco`, `codigo`) VALUES
(1, 1, 'Item 1', '10.50', 11050),
(2, 1, 'Item 2', '12.50', 121250),
(3, 1, 'Item 3', '13.50', 131350),
(4, 2, 'Item 4', '24.50', 242450),
(5, 2, 'Item 5', '25.50', 252550),
(6, 3, 'Item 6', '36.50', 363650),
(7, 3, 'Item 7', '37.50', 373750),
(8, 3, 'Item 8', '38.50', 383850),
(9, 4, 'Item 9', '49.50', 494950),
(10, 4, 'Item 10', '50.50', 4105050);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
