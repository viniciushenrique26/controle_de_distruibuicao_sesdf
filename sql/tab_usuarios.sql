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
-- Estrutura da tabela `tab_usuarios`
--

DROP TABLE IF EXISTS `tab_usuarios`;
CREATE TABLE IF NOT EXISTS `tab_usuarios` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `matricula_user` varchar(255) NOT NULL,
  `cpf_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `tell_user` varchar(255) NOT NULL,
  `cargo_user` varchar(255) NOT NULL,
  `lotacao_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tab_usuarios`
--

INSERT INTO `tab_usuarios` (`id_user`, `name_user`, `matricula_user`, `cpf_user`, `email_user`, `tell_user`, `cargo_user`, `lotacao_user`) VALUES
(24, 'Rodrigo ', '34324324', '123456789', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'ccc'),
(25, 'asdpsamddmp', '991064309', '54654654', 'guilhermeneresbsb@gmail.com', '6133883038', 'ÁREA ADMINISTRATIVA ', 'qdwdwqd'),
(26, 'asdpsamddmp', '991064309', '54654654', 'guilhermeneresbsb@gmail.com', '6133883038', 'ÁREA ADMINISTRATIVA ', 'qdwdwqd'),
(22, 'Vinicius Henrique Neres Slavov', '991064309', '432423432', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'GMERG/HRAN'),
(21, 'Vinicius Henrique Neres Slavov', '991064309', '432423432', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'GMERG/HRAN'),
(18, 'Vinicius Henrique Neres Slavov', '991064309', '432423432', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'GMERG/HRAN'),
(19, 'Vinicius Henrique Neres Slavov', '991064309', '432423432', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'GMERG/HRAN'),
(20, 'Vinicius Henrique Neres Slavov', '991064309', '432423432', 'viniciusslavaaov@gmail.com', '6133883038', 'chefe', 'GMERG/HRAN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
