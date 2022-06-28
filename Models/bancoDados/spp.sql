-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Abr-2022 às 12:04
-- Versão do servidor: 5.7.36
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database sppDados;
use sppDados;

-- --------------------------------------------------------

--



DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idaluno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` int(11) NOT NULL,
  `morada` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naturalidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,

  PRIMARY KEY (`idaluno`),
  UNIQUE KEY `aluno_nome_unique` (`nome`),
  UNIQUE KEY `aluno_bi_unique` (`bi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
--
--
-- Estrutura da tabela `permissao`
--
  Create table `permissao`(
  `idpermissao` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45),
  primary key(`idpermissao`)
  )ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Estrutura da tabela `usuario`
--

  Create table `usuario`(
  `idusuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(109),
  `senha` varchar(109),
   Primary key(`idusuario`),
  `idpermissao` bigint(20) UNSIGNED NOT NULL
  )ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
--
--
--
--
--
--
--
-- Estrutura da tabela `aluno_processos`
--

DROP TABLE IF EXISTS `aluno_processo`;
CREATE TABLE IF NOT EXISTS `aluno_processo` (
  `idprocesso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idaluno` bigint(20) UNSIGNED NOT NULL,
  `idgenero` bigint(20) UNSIGNED NOT NULL,
  `idturno` bigint(20) UNSIGNED NOT NULL,
  `idciclo` bigint(20) UNSIGNED NOT NULL,
  `idclasse` bigint(20) UNSIGNED NOT NULL,
  `idcurso` bigint(20) UNSIGNED NOT NULL,
  `idturma` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idprocesso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
--
--
-- Estrutura da tabela `mes`
--


CREATE TABLE `mes` (
  `idmes` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idmes`),
  UNIQUE KEY `mes_descricao_unique` (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
--
--
-- Estrutura da tabela `genero`
--


CREATE TABLE `genero` (
  `idgenero` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(109),
  PRIMARY KEY (`idgenero`),
  UNIQUE KEY `genero_descricao_unique` (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
--
--
-- Estrutura da tabela `sala`
--

CREATE TABLE `sala` (
  `idsala` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numeroSala` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idsala`),
  UNIQUE KEY `sala_numeroSala_unique` (`numeroSala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Estrutura da tabela `ciclo`
--

DROP TABLE IF EXISTS `ciclo`;
CREATE TABLE IF NOT EXISTS `ciclo` (
  `idciclo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idciclo`),
  UNIQUE KEY `ciclos_descricao_unique` (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idclasse` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idciclo` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idclasse`),
  UNIQUE KEY `classe_descricao_unique` (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

-- Estrutura da tabela `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abreviatura` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idcurso`),
  UNIQUE KEY `curso_nome_unique` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idturma` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directorTurma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idclasse` bigint(20) UNSIGNED NOT NULL,
  `idsala` bigint(20) UNSIGNED NOT NULL,
  `idcurso` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`idturma`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------descricao;
--
-- Estrutura da tabela `turno`
--


CREATE TABLE `turno` (
  `idturno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idturno`),
  UNIQUE KEY `turno_descricao_unique` (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



-- --------------------------------------------------------
--
-- Estrutura da tabela `configuracaos`
--

DROP TABLE IF EXISTS `configuracaos`;
CREATE TABLE IF NOT EXISTS `configuracaos` (
  `idconfig` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chave` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idconfig`),
  UNIQUE KEY `configuracaos_chave_unique` (`chave`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidade`
--

DROP TABLE IF EXISTS `mensalidade`;
CREATE TABLE IF NOT EXISTS `mensalidade` (
  `idmensalidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idclasse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idmensalidade`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodo_pagamentos`
--

DROP TABLE IF EXISTS `metodo_pagamento`;
CREATE TABLE IF NOT EXISTS `metodo_pagamento` (
  `idmetodo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipoPagamento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nTransicao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idmetodo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- 
--
-- Estrutura da tabela `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE IF NOT EXISTS `pagamento` (
  `idpagamento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idaluno` bigint(20) UNSIGNED NOT NULL,
  `idclasse` bigint(20) UNSIGNED NOT NULL,
  `idturma` bigint(20) UNSIGNED NOT NULL,
  `idcurso` bigint(20) UNSIGNED NOT NULL,
  `valor_total` int(11) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  PRIMARY KEY (`idpagamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_detalhe`
--

DROP TABLE IF EXISTS `pagamento_detalhe`;
CREATE TABLE IF NOT EXISTS `pagamento_detalhe` (
  `iddetalhe` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `valor` int(11) NOT NULL,
  `multa` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`iddetalhe`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
