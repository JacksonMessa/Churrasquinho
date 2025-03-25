-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/12/2023 às 18:41
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `churrascaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `item_venda`
--

DROP TABLE IF EXISTS `item_venda`;
CREATE TABLE IF NOT EXISTS `item_venda` (
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtd` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `item_venda`
--

INSERT INTO `item_venda` (`id_venda`, `id_produto`, `qtd`) VALUES
(3, 13, 1),
(3, 1, 6),
(3, 8, 5),
(4, 10, 4),
(4, 18, 1),
(4, 14, 1),
(5, 13, 1),
(5, 9, 5),
(5, 18, 1),
(6, 13, 1),
(6, 10, 1),
(6, 6, 1),
(6, 17, 1),
(6, 8, 1),
(7, 7, 1),
(7, 14, 1),
(8, 8, 5),
(8, 19, 2),
(8, 17, 3),
(8, 16, 1),
(9, 1, 1),
(9, 17, 1),
(10, 18, 1),
(10, 11, 3),
(11, 19, 1),
(12, 18, 1),
(13, 11, 5),
(13, 9, 5),
(13, 1, 5),
(13, 18, 1),
(14, 16, 3),
(14, 18, 1),
(15, 12, 1),
(15, 6, 1),
(15, 17, 1),
(16, 15, 1),
(16, 18, 1),
(17, 9, 5),
(17, 1, 5),
(17, 8, 5),
(18, 1, 30),
(18, 18, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `foto_url` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `foto_url`) VALUES
(1, 'Espetinho de Carne Bovina', 5.5, 'bovino.jpg'),
(5, 'Espetinho de Linguiça', 3, 'linguica.jpg'),
(6, 'Espetinho de Picanha', 12.5, 'picanha.avif'),
(7, 'Espetinho de Peito de Frango', 4.5, 'peitodefrango.jpg'),
(8, 'Espetinho de Kafta', 4.5, 'kafta.jpg'),
(9, 'Espetinho de Carne de Porco', 3.5, 'porco.webp'),
(10, 'Espetinho de Coração de Frango', 4, 'coracao.webp'),
(11, 'Espetinho de Medalhão Bovino com Bacon', 7.5, 'medalhao.jpg'),
(12, 'Espetinho de Queijo Mussarela', 4, 'queijo.jpg'),
(13, 'Bife de Contra Filé', 50, 'contra_file.webp'),
(14, 'Filé de Peito de Frango', 18, 'filefrango.jpg'),
(15, 'Bife de Picanha', 95, 'picanha_bife.jpeg'),
(16, 'Pão de Alho', 10, 'paodealho.jpg'),
(17, 'Refrigerante Lata', 2, 'refrigerantelata.jpg'),
(18, 'Refrigerante 2l', 9, 'refri.avif'),
(19, 'Cerveja Lata', 4, 'cerveja.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

DROP TABLE IF EXISTS `venda`;
CREATE TABLE IF NOT EXISTS `venda` (
  `id_venda` int NOT NULL AUTO_INCREMENT,
  `qtd_total` int NOT NULL,
  `preco_total` double NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Esperando Aprovação',
  PRIMARY KEY (`id_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `qtd_total`, `preco_total`, `status`) VALUES
(3, 12, 105.5, 'Entregue'),
(4, 6, 43, 'Entregue'),
(5, 7, 76.5, 'Entregue'),
(6, 5, 73, 'Entregue'),
(7, 2, 22.5, 'Entregue'),
(8, 11, 46.5, 'Entregue'),
(9, 2, 7.5, 'Entregue'),
(10, 4, 31.5, 'Em Entrega'),
(11, 1, 4, 'Pronto'),
(12, 1, 9, 'Na Cozinha'),
(13, 16, 91.5, 'Aprovado'),
(14, 4, 39, 'Aprovado'),
(15, 3, 18.5, 'Aprovado'),
(16, 2, 104, 'Esperando Aprovação'),
(17, 15, 67.5, 'Esperando Aprovação'),
(18, 32, 183, 'Esperando Aprovação');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
