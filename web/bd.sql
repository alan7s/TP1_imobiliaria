-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Jun-2021 às 12:27
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
('Apartamento', 2, 1, 1, 150, 'S', 'Rua Vermelha', 54, 'Bloco 02', 'Vitoria', 687, 'Perto a ponto de ônibus e supermercado.', 1, 1, 120, 'S', 16),
('Casa', 3, 2, 3, 200, 'N', 'Rua Seis', 66, 'Próximo a padaria', 'Goania', 900, 'Espaçoso e bem acabado.', 1, 0, 0, '', 17),
('Apartamento', 4, 2, 2, 100, 'S', 'Rua Mato Grosso', 1356, '401', 'Floresta', 1500, 'Perto de farmácia e supermercado.', 2, 4, 500, 'S', 18),
('Casa', 5, 3, 4, 266, 'S', 'Rua Nossa Senhora da Guia', 563, '0', 'Vitoria', 3000, 'Ambiente arejado e bem seguro com muros altos.', 2, 0, 0, '', 19),
('Apartamento', 2, 1, 1, 75, 'N', 'Rua Minas Gerais', 1896, '903', 'Goania', 900, 'Ambiente estudantil, perto de universidades e supermercado.', 1, 9, 100, 'N', 20),
('Casa', 3, 3, 2, 200, 'S', 'Rua Amazonas', 859, 'Perto do varejão ', 'SantaTereza', 1800, 'Ótima localização para famílias com filhos pequenos.', 2, 0, 0, '', 21),
('Apartamento', 3, 1, 2, 109, 'N', 'Rua Maranhão', 1578, '403', 'VilaDaLuz', 1200, 'Localizado há 10 minutos do centro da cidade', 2, 4, 120, 'N', 22),
('Apartamento', 5, 3, 2, 169, 'S', 'Rua São Paulo', 147, '1201', 'Goania', 2500, 'Prédio com piscina, salão de festas e academia.', 2, 12, 1200, 'S', 23),
('Casa', 6, 4, 4, 525, 'N', 'Rua Marechal João Pinheiro', 582, 'Bloco A4', 'Floresta', 3900, 'Casa grande na região de casas do bairro.', 3, 0, 0, '', 24);

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
(24, 16, '2021-06-29', '19:37'),
(25, 16, '2021-06-29', '19:38'),
(26, 17, '2021-06-29', '20:07'),
(27, 16, '2021-07-01', '10:48'),
(28, 20, '2021-06-24', '11:30');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `visita`
--
ALTER TABLE `visita`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
