-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2022 às 14:36
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercadocultural`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `CLI_ID` int(11) NOT NULL,
  `CLI_NOME` varchar(50) DEFAULT NULL,
  `CLI_DATANASC` date DEFAULT NULL,
  `PEDIDOS_PED_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedidos`
--

CREATE TABLE `itens_pedidos` (
  `PED_ID` int(11) NOT NULL,
  `PRO_ID` int(11) DEFAULT NULL,
  `ITENSPED_VLRUNIT` float DEFAULT NULL,
  `ITENSPED_QNTD` float DEFAULT NULL,
  `ITENSPED_VLRTOTAL` float DEFAULT NULL,
  `PRODUTOS_PRO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paises`
--

CREATE TABLE `paises` (
  `PaisID` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Bandeira` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paises`
--

INSERT INTO `paises` (`PaisID`, `Nome`, `Bandeira`) VALUES
(1, 'Brasil', 'bandbrr.png.png'),
(2, 'Alemanha', 'bandalem.png.png'),
(3, 'Canada', 'bandcana.png.png'),
(4, 'China', 'band_chin.png.png'),
(5, 'Itália', 'bandita.png.png'),
(6, 'Estados Unidos', 'band_eua.png.png'),
(7, 'Inglaterra', 'band_ing.png.png'),
(8, 'Coreia do Sul', 'band_core.png.png'),
(9, 'Japão', 'band_jap.png.png'),
(10, 'Tailândia', 'band_tai.png.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `PED_ID` int(11) NOT NULL,
  `CLI_ID` int(11) DEFAULT NULL,
  `PED_DATA` datetime DEFAULT NULL,
  `PED_VALOR` float DEFAULT NULL,
  `PED_ESTOQUE` float DEFAULT NULL,
  `ITENS_PEDIDOS_PED_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_ID` int(11) NOT NULL,
  `produto_nome` varchar(50) DEFAULT NULL,
  `produto_valor` float DEFAULT NULL,
  `pais_ID` int(11) DEFAULT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_ID`, `produto_nome`, `produto_valor`, `pais_ID`, `imagem`) VALUES
(1, 'Mixed Fruit Drops', 150, 2, 'p_alm_1.png'),
(3, 'Bear Paws Pattes Dours', 15, 3, 'p_cand_1.png'),
(4, 'Canada Dry', 10, 3, 'p_cand_2.png'),
(5, '탄산 음료', 15, 8, 'p_cor_2'),
(6, 'Twizzlers', 25, 6, 'p_eua_1.png'),
(7, 'Dr Pepper', 10, 6, 'p_eua_2.png'),
(8, 'Chinoto', 10, 5, 'p_itl_2.png'),
(9, 'Mogu Mogo', 15, 10, 'p_tai_2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `vendedoresID` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nome_empresa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CLI_ID`);

--
-- Índices para tabela `itens_pedidos`
--
ALTER TABLE `itens_pedidos`
  ADD PRIMARY KEY (`PED_ID`);

--
-- Índices para tabela `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`PaisID`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`PED_ID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_ID`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`vendedoresID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paises`
--
ALTER TABLE `paises`
  MODIFY `PaisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `vendedoresID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
