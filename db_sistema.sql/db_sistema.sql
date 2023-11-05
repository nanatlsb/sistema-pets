-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2023 às 22:43
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_sistema`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_adm`
--

CREATE TABLE `tb_adm` (
  `id_adm` int(11) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `ds_senha` varchar(10) NOT NULL,
  `nm_usuario` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tb_adm`
--

INSERT INTO `tb_adm` (`id_adm`, `ds_email`, `ds_senha`, `nm_usuario`) VALUES
(2, 'taheconvidados@gmail.com', '123', 'Thainá Lopes dos San'),
(3, 'lopesthaina2004@gmail.com', '121', 'Thainá Lopes dos San'),
(7, 'admin@kbrtec.com.br', 'sougay', 'rafael'),
(9, 'adm_estagio@gmail.com', 'adm123', 'Luciana'),
(10, 'qualquercoisa@gmail.com', '12345678', 'Lopes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_animal`
--

CREATE TABLE `tb_animal` (
  `id_animal` int(11) NOT NULL,
  `img_caminho` varchar(500) NOT NULL,
  `nm_especie` varchar(20) NOT NULL,
  `nm_raca` varchar(30) NOT NULL,
  `nm_animal` varchar(20) NOT NULL,
  `ds_porte` varchar(30) NOT NULL,
  `ds_local` varchar(20) NOT NULL,
  `ds_sobre` text NOT NULL,
  `ds_status` varchar(1) NOT NULL,
  `ds_sexo` varchar(15) NOT NULL,
  `cd_idade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tb_animal`
--

INSERT INTO `tb_animal` (`id_animal`, `img_caminho`, `nm_especie`, `nm_raca`, `nm_animal`, `ds_porte`, `ds_local`, `ds_sobre`, `ds_status`, `ds_sexo`, `cd_idade`) VALUES
(1, 'login.png', '1', 'Vira-lata', 'caramelo', 'médio', 'Praia grande', 'lindo, fofo e legal.', 'a', 'feminino', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_raca`
--

CREATE TABLE `tb_raca` (
  `id` int(11) NOT NULL,
  `nm_raca` varchar(20) NOT NULL,
  `nm_especie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_raca`
--

INSERT INTO `tb_raca` (`id`, `nm_raca`, `nm_especie`) VALUES
(1, 'spettz alemao', 'cachorro');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_solicitacoes_adocao`
--

CREATE TABLE `tb_solicitacoes_adocao` (
  `ID_ADOCAO` int(11) NOT NULL,
  `DT_INSERCAO` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(30) NOT NULL,
  `nm_animal` varchar(30) NOT NULL,
  `cd_cpf` varchar(20) NOT NULL,
  `num_cel` float NOT NULL,
  `ds_email` varchar(25) NOT NULL,
  `dt_nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nm_usuario`, `nm_animal`, `cd_cpf`, `num_cel`, `ds_email`, `dt_nasc`) VALUES
(1, 'tfhftt', 'hhtrfh', '3456', 346, 'hfggh@grt', '0000-00-00'),
(2, 'Thainá Lopes dos Santos', 'lola', '4444', 1223340, 'taheconvidados@gmail.com', '0000-00-00'),
(3, 'eqweqe', 'ret', '45', 0, 'dftgd@wewq', '0000-00-00'),
(4, 'eqweqe', 'ret', '45', 0, 'dftgd@wewq', '0000-00-00'),
(5, 'Rafael', 'Meguie', '1234455555', 13997600000, 'adm_estagio@gmail.com', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices de tabela `tb_animal`
--
ALTER TABLE `tb_animal`
  ADD PRIMARY KEY (`id_animal`);

--
-- Índices de tabela `tb_raca`
--
ALTER TABLE `tb_raca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_solicitacoes_adocao`
--
ALTER TABLE `tb_solicitacoes_adocao`
  ADD PRIMARY KEY (`ID_ADOCAO`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `ID_FK_ANIMAL` (`nm_animal`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_adm`
--
ALTER TABLE `tb_adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_animal`
--
ALTER TABLE `tb_animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_raca`
--
ALTER TABLE `tb_raca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_solicitacoes_adocao`
--
ALTER TABLE `tb_solicitacoes_adocao`
  MODIFY `ID_ADOCAO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
