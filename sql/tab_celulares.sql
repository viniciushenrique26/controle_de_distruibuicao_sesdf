-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Jul-2021 às 14:15
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sesdf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_celulares`
--

DROP TABLE IF EXISTS `tab_celulares`;
CREATE TABLE IF NOT EXISTS `tab_celulares` (
  `id_cell` int(255) NOT NULL AUTO_INCREMENT,
  `linha_cell` varchar(255) NOT NULL,
  `chip_cell` varchar(255) NOT NULL,
  `imei_cell` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `stts` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cell`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tab_celulares`
--

INSERT INTO `tab_celulares` (`id_cell`, `linha_cell`, `chip_cell`, `imei_cell`, `modelo`, `stts`) VALUES
(1, '4894894984984', '894894984984489', '8949848944', 'iphone 8', 'Em uso'),
(2, '59859859', '9859855', '5985985', 'iPhone 5S', 'Em Uso'),
(3, '59859859', '9859855', '5985985', 'iPhone 5S', 'Em Uso'),
(4, '234243242', '25715711', '354211096697375', 'LG K41S', 'Disponivel'),
(5, '234243242', '25715711', '354211096697375', 'LG K41S', 'Disponivel'),
(6, '234243242', '25715711', '354211096697375', 'LG K41S', 'Disponivel'),
(7, '234243242', '25715711', '354211096697375', 'LG K41S', 'Disponivel'),
(8, '234243242', '25715711', '354211096697375', 'LG K41S', 'Disponivel'),
(9, '423443243', '324324324', '3243243243', 'LG K-10', 'Em Uso'),
(10, '423443243', '324324324', '3243243243', 'LG K-10', 'Em Uso'),
(11, '423443243', '324324324', '3243243243', 'LG K-10', 'Em Uso'),
(12, '4564565465', '546546456', '546546546', 'iPhone 5S', 'Em Uso'),
(13, '4564565465', '546546456', '546546546', 'iPhone 5S', 'Em Uso');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
