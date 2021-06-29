-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 29-Jun-2021 às 19:52
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id17128106_celke`
--
CREATE DATABASE IF NOT EXISTS `id17128106_celke` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id17128106_celke`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imobiliaria`
--

CREATE TABLE `imobiliaria` (
  `tipoImovel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quartos` int(11) NOT NULL,
  `suites` int(11) NOT NULL,
  `vagas` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `armario` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aluguel` int(11) NOT NULL,
  `mensagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salas` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `condominio` int(11) NOT NULL,
  `portaria` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `imobiliaria`
--

INSERT INTO `imobiliaria` (`tipoImovel`, `quartos`, `suites`, `vagas`, `area`, `armario`, `rua`, `numero`, `complemento`, `bairro`, `aluguel`, `mensagem`, `salas`, `andar`, `condominio`, `portaria`, `ID`) VALUES
('Apartamento', 1, 1, 1, 1, 'S', '1', 1, '1', 'Horto', 11, 'dasd', 1, 1, 1, 'S', 1),
('Apartamento', 2, 2, 2, 2, 'S', '2', 2, '2', 'Horto', 2, '2222', 2, 1, 1, 'S', 2),
('Apartamento', 4, 4, 4, 4, 'S', '4', 4, '4', 'Vitoria', 4, '4444', 4, 4, 4, 'S', 3),
('Apartamento', 6, 6, 6, 6, 'S', '6', 6, '6', 'SantaTereza', 6, '66666666', 6, 6, 6, 'S', 4),
('Apartamento', 3, 3, 3, 3, 'S', '3', 3, '3', 'Vitoria', 3, '333333', 3, 2, 2, 'S', 5),
('Casa', 1, 1, 1, 1, 'S', '1', 1, '1', 'SantaTereza', 1, '1', 1, 0, 0, 'N', 6),
('Apartamento', 9, 9, 9, 9, 'S', '9', 9, '9', 'Vitoria', 9, '99999', 9, 9, 9, 'S', 7),
('Casa', 3, 3, 3, 3, 'S', '3', 3, '3', 'Vitoria', 3, '3333', 3, 0, 0, 'S', 8),
('Casa', 8, 8, 8, 8, 'S', '8', 8, '8', 'Vitoria', 8, '888888888', 8, 0, 0, 'S', 9),
('Casa', 7, 7, 7, 7, 'S', '7', 7, '7', 'Horto', 7, '77777', 7, 0, 0, 'S', 10),
('Casa', 9, 9, 9, 9, 'S', '9', 9, '9', 'Vitoria', 9, '99999', 9, 0, 0, '', 11),
('Casa', 3, 0, 1, 163, 'N', 'Rua dente', 23, 'padaria ao lado', 'Horto', 3213, '3213 sdaf', 1, 0, 0, '', 12),
('Apartamento', 2, 2, 2, 2, 'S', '2', 2, '2', 'Horto', 2, '22', 2, 2, 2, 'S', 13),
('Apartamento', 3, 3, 3, 3, 'S', '3', 3, '3', 'Floresta', 3, '33', 3, 3, 3, 'N', 14),
('Apartamento', 3, 3, 3, 3, 'S', '3', 3, '3', 'Vitoria', 3, '333', 3, 3, 3, 'N', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `visita`
--

CREATE TABLE `visita` (
  `ID` int(11) NOT NULL,
  `imovelid` int(11) NOT NULL,
  `data` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hora` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `visita`
--

INSERT INTO `visita` (`ID`, `imovelid`, `data`, `hora`) VALUES
(4, 2, '2021-06-30', '16:49'),
(5, 3, '2021-06-30', '17:16'),
(6, 1, '2021-06-03', '16:26'),
(7, 4, '2021-06-29', '15:40'),
(8, 1, '2022-07-01', '21:31'),
(9, 3, '0333-03-03', '03:03'),
(10, 2, '2222-02-02', '02:02'),
(11, 5, '0001-01-01', '01:01'),
(12, 4, '0001-05-01', '01:01'),
(13, 1, '5555-05-05', '05:05'),
(14, 3, '2003-03-03', '01:01'),
(15, 1, '2021-06-29', '15:05'),
(16, 5, '2122-01-30', '02:02'),
(17, 8, '2021-06-29', '15:55'),
(18, 1, '', ''),
(19, 6, '2201-06-29', '02:02'),
(20, 2, '1997-02-02', '23:06'),
(21, 2, '0002-02-02', '12:02'),
(22, 5, '2004-04-04', '05:04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imobiliaria`
--
ALTER TABLE `imobiliaria`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imobiliaria`
--
ALTER TABLE `imobiliaria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `visita`
--
ALTER TABLE `visita`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
