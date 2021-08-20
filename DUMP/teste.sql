-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geraÃ§Ã£o: 20-Ago-2021 Ã s 21:16
-- VersÃ£o do servidor: 10.4.6-MariaDB
-- versÃ£o do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `DQC84`
--

CREATE TABLE `DQC84` (
  `Id` int(11) NOT NULL,
  `Model` int(11) DEFAULT NULL,
  `aaa` varchar(10) DEFAULT NULL,
  `TOTAL_LOCATION` int(11) DEFAULT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CREATE_DT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `DQC841`
--

CREATE TABLE `DQC841` (
  `Id` int(11) NOT NULL,
  `FAT_PART_NO` int(11) DEFAULT NULL,
  `PARTS_NO` varchar(15) DEFAULT NULL,
  `UNT_USG` int(11) DEFAULT NULL,
  `DESCRIPTOON` longtext DEFAULT NULL,
  `REF__DESIGNATOR` longtext DEFAULT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CREATE_DT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `DQCMODEL`
--

CREATE TABLE `DQCMODEL` (
  `Id` int(11) NOT NULL,
  `Model` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `DQCMODEL`
--

INSERT INTO `DQCMODEL` (`Id`, `Model`) VALUES
(1, 'DQC'),
(2, 'DQCTT'),
(3, 'Hehe');

--
-- Ãndices para tabelas despejadas
--

--
-- Ãndices para tabela `DQC84`
--
ALTER TABLE `DQC84`
  ADD PRIMARY KEY (`Id`);

--
-- Ãndices para tabela `DQC841`
--
ALTER TABLE `DQC841`
  ADD PRIMARY KEY (`Id`);

--
-- Ãndices para tabela `DQCMODEL`
--
ALTER TABLE `DQCMODEL`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
