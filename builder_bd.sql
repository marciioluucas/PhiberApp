-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jun-2017 às 16:23
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `builder_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `placa`
--

CREATE TABLE `placa` (
  `id` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `precomedio` varchar(50) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `memoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `placa`
--

INSERT INTO `placa` (`id`, `marca`, `modelo`, `precomedio`, `ano`, `memoria`) VALUES
(1, 'NVidia', 'saasd', '2312', '12312', '12312'),
(2, 'NVidia', 'GTX 1060', '1200', '2016', '3GB'),
(3, 'AMD', 'R7 X', '1000', '2016', '2GB'),
(4, 'AMD', 'R7 X', '1000', '2016', '2GB'),
(5, 'NVidia', 'GTX 1080', '1900', '2017', '6GB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placa`
--
ALTER TABLE `placa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placa`
--
ALTER TABLE `placa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
