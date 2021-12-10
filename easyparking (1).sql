-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2021 às 07:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `easyparking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cidade` int(11) NOT NULL,
  `nm_cidade` varchar(30) NOT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cidade`, `nm_cidade`, `id_estado`) VALUES
(6, '', NULL),
(7, 'Cricuma', NULL),
(8, 'Içara', NULL),
(9, 'Cricuma', 0),
(10, 'Floripa', 0),
(11, 'Floripa', 0),
(12, 'Floripa', 0),
(13, 'Floripa', 0),
(14, 'Floripa', 0),
(15, 'Sao paulo', 2),
(16, 'pqp', 1),
(17, 'pqpp', 2),
(18, 'Cricuma', 1),
(19, 'Novoo', 1),
(20, 'TESTE DE EDITAR', 0),
(21, 'teste de editar', 0),
(22, 'Cricuma', 0),
(23, 'teste de editar', 0),
(24, 'teste de editar', 0),
(25, 'teste de editar', 0),
(26, 'teste de editar', 0),
(28, 'Cidade teste cadastro', 2),
(31, 'teste de editar', 0),
(32, 'sdfsdfsdfsdf', 0),
(34, 'testes de redsdsd', 0),
(35, 'teste de editar', 2),
(38, 'teste de editar ultimo', 2),
(39, 'teste dos burro', 2),
(40, 'Teste DA MADRUGA', 3),
(41, 'Cricuma', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `sigla` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `sigla`) VALUES
(1, 'SP'),
(2, 'SC'),
(3, 'RS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

CREATE TABLE `movimentacao` (
  `id_movimentacao` int(11) NOT NULL,
  `horario_saida` datetime DEFAULT NULL,
  `hora_entrada` datetime NOT NULL,
  `id_rua` int(11) NOT NULL,
  `id_vaga` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movimentacao`
--

INSERT INTO `movimentacao` (`id_movimentacao`, `horario_saida`, `hora_entrada`, `id_rua`, `id_vaga`, `cpf`) VALUES
(1, NULL, '2021-12-10 03:10:39', 1, 1, '423');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rua`
--

CREATE TABLE `rua` (
  `id_rua` int(11) NOT NULL,
  `nm_rua` varchar(30) NOT NULL,
  `id_cidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `rua`
--

INSERT INTO `rua` (`id_rua`, `nm_rua`, `id_cidade`) VALUES
(2, 'Rua de Porto Alegra', 2),
(3, 'Rua de São Paulo', 3),
(44, 'de madrugada', 16),
(46, 'Henrique lages', 8),
(50, '', 21),
(51, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `id_vaga` int(11) NOT NULL,
  `nr_vaga` int(5) NOT NULL,
  `id_rua` int(11) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'L'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id_vaga`, `nr_vaga`, `id_rua`, `id_cidade`, `id_estado`, `status`) VALUES
(1, 1, 1, 0, 0, 'O'),
(20, 0, 46, 39, 3, 'L'),
(21, 0, 44, 36, 3, 'L'),
(22, 0, 46, 36, 1, 'L'),
(23, 0, 46, 39, 1, 'L'),
(24, 0, 44, 15, 1, 'L'),
(25, 0, 46, 39, 1, 'L'),
(26, 0, 46, 19, 3, 'L'),
(27, 0, 46, 17, 1, 'L'),
(28, 0, 48, 17, 3, 'L'),
(29, 0, 44, 15, 1, 'L'),
(30, 0, 0, 44, 0, 'L'),
(31, 0, 0, 44, 0, 'L'),
(33, 0, 0, 46, 0, 'L'),
(34, 0, 0, 0, 0, 'O'),
(35, 0, 0, 0, 0, 'O');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cidade`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Índices para tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  ADD PRIMARY KEY (`id_movimentacao`);

--
-- Índices para tabela `rua`
--
ALTER TABLE `rua`
  ADD PRIMARY KEY (`id_rua`);

--
-- Índices para tabela `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`id_vaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `movimentacao`
--
ALTER TABLE `movimentacao`
  MODIFY `id_movimentacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `rua`
--
ALTER TABLE `rua`
  MODIFY `id_rua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `vaga`
--
ALTER TABLE `vaga`
  MODIFY `id_vaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
