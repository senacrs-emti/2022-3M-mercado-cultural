-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2022 às 15:12
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
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` int(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresaID` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
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
(10, 'Tailândia', 'band_tai.png.png'),
(11, 'Filipinas', 'band_fil.png.png'),
(12, 'França', 'bandafran.png.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_ID` int(11) NOT NULL,
  `produto_nome` varchar(50) DEFAULT NULL,
  `produto_valor` float DEFAULT NULL,
  `pais_ID` varchar(150) DEFAULT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_ID`, `produto_nome`, `produto_valor`, `pais_ID`, `imagem`, `descricao`) VALUES
(1, 'Mixed Fruit Drops', 150, 'Alemanha', 'p_alm_1.png', 'Balas Frutas Mixed Fruit Drops Cavendish & Harvey 175 Gr <br><br> Líder mundial no mercado de balas premium <br>Requintadas receitas elaboradas na cidade de Schleswig-Holstein, norte da Alemanha <br>Sem glúten'),
(3, 'Bear Paws Pattes Dours', 15, 'Canadá', 'p_cand_1.png', 'a'),
(4, 'Canada Dry', 10, 'Canadá', 'p_cand_2.png', ''),
(5, '탄산 음료', 15, 'Coreia do Sul', 'p_cor_2', ''),
(6, 'Twizzlers', 25, 'Estados Unidos', 'p_eua_1.png', ''),
(7, 'Dr Pepper', 10, 'Estados Unidos', 'p_eua_2.png', ''),
(8, 'Chinoto', 10, 'Itália', 'p_itl_2.png', ''),
(9, 'Mogu Mogo', 15, 'Tailândia', 'p_tai_2.png', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresaID`);

--
-- Índices para tabela `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`PaisID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `paises`
--
ALTER TABLE `paises`
  MODIFY `PaisID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
