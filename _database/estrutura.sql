-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Set-2017 às 09:52
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nm_cliente` varchar(100) NOT NULL,
  `cpf_cliente` varchar(14) NOT NULL,
  `rg_cliente` varchar(15) NOT NULL,
  `fixo_cliente` varchar(12) NOT NULL,
  `cel_cliente` varchar(12) NOT NULL,
  `cep_cliente` varchar(9) NOT NULL,
  `num_res_cliente` varchar(10000) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE IF NOT EXISTS `tb_fornecedor` (
  `cd_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_fornecedor` varchar(100) NOT NULL,
  `cnpj_fornecedor` varchar(14) NOT NULL,
  `ie_fornecedor` varchar(15) NOT NULL,
  `fixo_fornecedor` varchar(15) NOT NULL,
  `cel_fornecedor` varchar(12) NOT NULL,
  `cep_fornecedor` varchar(9) NOT NULL,
  `num_res_fornecedor` varchar(10000) NOT NULL,
  `email_fornecedor` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_fornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `cd_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_funcionario` varchar(100) NOT NULL,
  `cpf_funcionario` varchar(14) NOT NULL,
  `rg_funcionario` varchar(15) NOT NULL,
  `fixo_funcionario` varchar(12) NOT NULL,
  `email_funcionario` varchar(1000) NOT NULL,
  `cep_funcionario` varchar(9) NOT NULL,
  PRIMARY KEY (`cd_funcionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  `cd_fun_usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
