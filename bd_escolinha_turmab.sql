-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Abr-2019 às 23:34
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_escolinha_turmab`
--
CREATE DATABASE IF NOT EXISTS `bd_escolinha_turmab` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_escolinha_turmab`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `rm` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(100) COLLATE utf8_bin NOT NULL,
  `data_nasc` date NOT NULL,
  `endereco` varchar(80) COLLATE utf8_bin NOT NULL,
  `serie` int(11) NOT NULL,
  `nome_pai` varchar(50) COLLATE utf8_bin NOT NULL,
  `nome_mae` varchar(50) COLLATE utf8_bin NOT NULL,
  `nome_responsavel` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `celular` varchar(15) COLLATE utf8_bin NOT NULL,
  `escola` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone_escola` varchar(15) COLLATE utf8_bin NOT NULL,
  `id_turma` int(11) NOT NULL,
  PRIMARY KEY (`rm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE IF NOT EXISTS `tb_turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `data_inicial` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `hora_inicial` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  `id_atividade` int(11) DEFAULT NULL,
  `id_instrutor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
