-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2023 às 05:34
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `resumo` varchar(1000) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `custo_total` varchar(6) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `destaque_produto` enum('Sim','Não') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `id_tipo`, `nome`, `descricao`, `resumo`, `quantidade`, `custo_total`, `imagem`, `destaque_produto`) VALUES
(1, 1, 'Ar-condicionado Split TCL 9.000 BTUs Frio - Elite A1 TAC-09CSA1', 'Ar Condicionado Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 15, '2.159', 'arcondicionado1.webp', 'Sim'),
(2, 1, 'Ar Condicionado Piso-teto Springer Silvermaxi 36000 BTU F220', 'Ar Condicionado Split Piso Teto Springer Silvermaxi 36000 Btus Frio 220V Monofásico', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 12, '3.119', 'arcondicionado2.jpg', 'Sim'),
(3, 1, 'Ar Condicionado Electrolux Split 9.000 Btus Frio Linha Ecoturbo (VI09F/VE09F) 220V', 'Ar Condicionado Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 12, '1.759', 'arcondicionado3.webp', 'Sim'),
(4, 1, 'Ar Condicionado Split LG Hi Wall DUAL Compact 12000 BTUs Frio S4NQ12JA3A5 - 220V', 'Ar Condicionado Split', '', 10, '4.759', 'arcondicionado4.jpg', 'Sim'),
(5, 1, 'Ar-condicionado Split TCL 9.000 BTUs Frio - Elite A1 TAC-09CSA1', 'Ar Condicionado Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 15, '3.959', 'arcondicionado5.webp', 'Sim'),
(6, 2, 'Ar Condicionado Split LG Voice 9000 Btu Frio Dual Inverter 220V S4UQ09WA51C. EB2GAMZ', 'Ar Condicionado Inverter', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 10, '4.959', 'arcondicionadoinverter1.webp', 'Sim'),
(7, 2, 'Ar Condicionado Split Inverter 12000BTUs Frio 220V Series A1 TCL', 'Ar Condicionado Inverter', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 11, '2.569', 'arcondicionadoinverter2.avif', 'Sim'),
(8, 2, 'Ar-Condicionado Split HW R-32 Inverter Daikin Ecoswing 9.000 BTUs Só Frio 220V', 'Ar Condicionado Inverter', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 10, '1.059', 'arcondicionadoinverter3.webp', 'Sim'),
(9, 2, 'Ar Condicionado Split Hi Wall Inverter Philco Eco 12000 BTU/h Frio PAC12000ITFM9W – 220 Volts', 'Ar Condicionado Inverter', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 8, '2.512', 'arcondicionadoinverter4.webp', 'Sim'),
(10, 2, 'Ar Condicionado Split LG Voice 9000 Btu Frio Dual Inverter 220V S4UQ09WA51C. EB2GAMZ', 'Ar Condicionado Inverter', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'arcondicionadoinverter5.webp', 'Sim'),
(11, 3, 'Ar Condicionado Multi Split Bi Split Inverter LG 18000 BTUs (2×9000) Q/F 220V', 'Ar Condicionado Multi Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'mul1.webp', 'Sim'),
(12, 3, 'Ar-Condicionado Multi Split Inverter Springer Midea 18.000 Btus (2x Evap Hw 12.000) Quente/Frio 220V', 'Ar Condicionado Multi Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'mul2.webp', 'Sim'),
(13, 3, 'Ar-Condicionado Multi Split Inverter LG 18.000 BTUs (2x Evap HW 12.000) Quente/Frio 220V', 'Ar Condicionado Multi Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'mul3.webp', 'Sim'),
(14, 3, 'Ar-Condicionado Multi Split Inverter Springer Midea 27.000 BTUs (1x Evap HW 9.000 + 2x Evap HW 12.000) Quente/Frio 220V', 'Ar Condicionado Multi Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'mul4.png', 'Sim'),
(15, 3, 'Ar Condicionado Multi Split Bi Split Inverter LG 18000 Btus (2x9000) Quente/Frio 220V A2UW18GFAC', 'Ar Condicionado Multi Split', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'mul5.png', 'Sim'),
(16, 4, 'Homesen Portátil 300W Painel Flexível Solar Kit 12/24V Interruptor USB Interface de Carregamento Placa Solar com Controlador Células Solares à Prova D', 'Energia Solar', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '3.959', 'pl1.webp', 'Sim'),
(17, 4, 'Painel Solar 555W Shinefar - Mono', 'Energia Solar', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '2.512', 'pl2.jpg', 'Sim'),
(18, 4, 'KIT GERADOR ENERGIA SOLAR LUXEN SOLAR 2,38 KWP - PARA RESIDÊNCIAS COM CONSUMO DE ATÉ 570 KW/MÊS', 'Energia Solar', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '1.219', 'pl3.jpg', 'Sim'),
(19, 4, 'Painel Solar 455W Canadian - Mono', 'Energia Solar', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '1.869', 'pl4.jpg', 'Sim'),
(20, 4, 'Kit Placa Solar 4 Placas Telha Fibrocimento 1200W 220V Intelbras', 'Energia Solar', '        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sit obcaecati tempora nihil porro in commodi impedit dolorum maiores accusantium.\n', 4, '5.959', 'pl5.png', 'Sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_foreign` (`id_tipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_foreign` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
