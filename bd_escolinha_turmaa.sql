-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Abr-2019 às 01:13
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_escolinha_turmaa`
--
CREATE DATABASE IF NOT EXISTS `bd_escolinha_turmaa` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_escolinha_turmaa`;

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
  `id_time` int(11) NOT NULL,
  PRIMARY KEY (`rm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aula`
--

CREATE TABLE IF NOT EXISTS `tb_aula` (
  `id_aula` int(11) NOT NULL AUTO_INCREMENT,
  `data_aula` date NOT NULL,
  `conteudo` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_aula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_campeonato`
--

CREATE TABLE IF NOT EXISTS `tb_campeonato` (
  `id_campeonato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_campeonato` varchar(30) COLLATE utf8_bin NOT NULL,
  `ano` varchar(4) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_campeonato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_jogo`
--

CREATE TABLE IF NOT EXISTS `tb_jogo` (
  `id_jogo` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(30) COLLATE utf8_bin NOT NULL,
  `hora` varchar(5) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_jogo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ocorrencia`
--

CREATE TABLE IF NOT EXISTS `tb_ocorrencia` (
  `id_ocorrencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_professor` int(11) NOT NULL,
  `rm` int(11) NOT NULL,
  `descricao` varchar(500) COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_ocorrencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE IF NOT EXISTS `tb_professor` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_professor`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_turma`
--

INSERT INTO `tb_turma` (`id_turma`, `data_inicial`, `data_final`, `hora_inicial`, `hora_final`, `id_atividade`, `id_instrutor`) VALUES
(3, '2019-04-22', NULL, NULL, NULL, NULL, NULL),
(4, '2019-04-28', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
